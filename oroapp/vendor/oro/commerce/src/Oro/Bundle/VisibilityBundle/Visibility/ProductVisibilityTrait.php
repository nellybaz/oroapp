<?php

namespace Oro\Bundle\VisibilityBundle\Visibility;

use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query\Expr\Join;

use Oro\Bundle\CustomerBundle\Entity\Customer;
use Oro\Bundle\CustomerBundle\Entity\CustomerGroup;
use Oro\Bundle\VisibilityBundle\Provider\VisibilityScopeProvider;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\VisibilityInterface;
use Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\CustomerProductVisibilityResolved;
use Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\BaseVisibilityResolved;
use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Component\Website\WebsiteInterface;

trait ProductVisibilityTrait
{
    /**
     * @var string
     */
    protected $productConfigPath;

    /**
     * @var string
     */
    protected $categoryConfigPath;

    /**
     * @var ConfigManager
     */
    protected $configManager;

    /**
     * @var array
     */
    protected $configValue = [];

    /**
     * @var VisibilityScopeProvider
     */
    protected $visibilityScopeProvider;

    /**
     * @param QueryBuilder $queryBuilder
     * @param CustomerGroup $customerGroup
     * @param WebsiteInterface $website
     * @return string
     */
    private function getCustomerGroupProductVisibilityResolvedTermByWebsite(
        QueryBuilder $queryBuilder,
        CustomerGroup $customerGroup,
        WebsiteInterface $website
    ) {
        $queryBuilder->leftJoin(
            'OroVisibilityBundle:VisibilityResolved\CustomerGroupProductVisibilityResolved',
            'customer_group_product_visibility_resolved',
            Join::WITH,
            $queryBuilder->expr()->andX(
                $queryBuilder->expr()->eq(
                    $this->getRootAlias($queryBuilder),
                    'customer_group_product_visibility_resolved.product'
                ),
                $queryBuilder->expr()->eq(
                    'customer_group_product_visibility_resolved.scope',
                    ':customerGroupScope'
                )
            )
        );

        $scope = $this->getVisibilityScopeProvider()->getCustomerGroupProductVisibilityScope($customerGroup, $website);

        $queryBuilder->setParameter('customerGroupScope', $scope);

        return sprintf(
            'COALESCE(%s, 0) * 10',
            $this->addCategoryConfigFallback('customer_group_product_visibility_resolved.visibility')
        );
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @param Customer $customer
     * @param WebsiteInterface $website
     * @return string
     */
    private function getCustomerProductVisibilityResolvedTermByWebsite(
        QueryBuilder $queryBuilder,
        Customer $customer,
        WebsiteInterface $website
    ) {
        $queryBuilder->leftJoin(
            'OroVisibilityBundle:VisibilityResolved\CustomerProductVisibilityResolved',
            'customer_product_visibility_resolved',
            Join::WITH,
            $queryBuilder->expr()->andX(
                $queryBuilder->expr()->eq(
                    $this->getRootAlias($queryBuilder),
                    'customer_product_visibility_resolved.product'
                ),
                $queryBuilder->expr()->eq('customer_product_visibility_resolved.scope', ':customerScope')
            )
        );

        $scope = $this->getVisibilityScopeProvider()->getCustomerProductVisibilityScope($customer, $website);

        $queryBuilder->setParameter('customerScope', $scope);

        $productFallback = $this->addCategoryConfigFallback('product_visibility_resolved.visibility');
        $customerFallback = $this->addCategoryConfigFallback('customer_product_visibility_resolved.visibility');

        return $this->getCustomerProductVisibilityResolvedVisibilityTerm($productFallback, $customerFallback);
    }

    /**
     * @param string $productFallback
     * @param string $customerFallback
     * @return string
     */
    private function getCustomerProductVisibilityResolvedVisibilityTerm($productFallback, $customerFallback)
    {
        $term = <<<TERM
CASE WHEN customer_product_visibility_resolved.visibility = %s
    THEN (COALESCE(%s, %s) * 100)
ELSE (COALESCE(%s, 0) * 100)
END
TERM;
        return sprintf(
            $term,
            CustomerProductVisibilityResolved::VISIBILITY_FALLBACK_TO_ALL,
            $productFallback,
            $this->getProductConfigValue(),
            $customerFallback
        );
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @param WebsiteInterface $website
     * @return string
     */
    private function getProductVisibilityResolvedTermByWebsite(QueryBuilder $queryBuilder, WebsiteInterface $website)
    {
        $queryBuilder->leftJoin(
            'OroVisibilityBundle:VisibilityResolved\ProductVisibilityResolved',
            'product_visibility_resolved',
            Join::WITH,
            $queryBuilder->expr()->andX(
                $queryBuilder->expr()->eq($this->getRootAlias($queryBuilder), 'product_visibility_resolved.product'),
                $queryBuilder->expr()->eq('product_visibility_resolved.scope', ':scope')
            )
        );

        $queryBuilder->setParameter('scope', $this->getVisibilityScopeProvider()->getProductVisibilityScope($website));

        return sprintf(
            'COALESCE(%s, %s)',
            $this->addCategoryConfigFallback('product_visibility_resolved.visibility'),
            $this->getProductConfigValue()
        );
    }

    /**
     * @param string $field
     * @return string
     */
    protected function addCategoryConfigFallback($field)
    {
        return sprintf(
            'CASE WHEN %1$s = %2$s THEN %3$s ELSE %1$s END',
            $field,
            BaseVisibilityResolved::VISIBILITY_FALLBACK_TO_CONFIG,
            $this->getCategoryConfigValue()
        );
    }

    /**
     * @return int
     */
    protected function getProductConfigValue()
    {
        return $this->getConfigValue($this->productConfigPath);
    }

    /**
     * @return int
     */
    protected function getCategoryConfigValue()
    {
        return $this->getConfigValue($this->categoryConfigPath);
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @return mixed
     */
    protected function getRootAlias(QueryBuilder $queryBuilder)
    {
        $aliases = $queryBuilder->getRootAliases();

        return reset($aliases);
    }

    /**
     * @param string $path
     * @return integer
     * @throws \LogicException
     */
    protected function getConfigValue($path)
    {
        if (!empty($this->configValue[$path])) {
            return $this->configValue[$path];
        }

        if (!$this->productConfigPath) {
            throw new \LogicException(
                sprintf('%s::productConfigPath not configured', get_class($this))
            );
        }
        if (!$this->categoryConfigPath) {
            throw new \LogicException(
                sprintf('%s::categoryConfigPath not configured', get_class($this))
            );
        }

        $this->configValue = [
            $this->productConfigPath => $this->configManager->get($this->productConfigPath),
            $this->categoryConfigPath => $this->configManager->get($this->categoryConfigPath),
        ];

        foreach ($this->configValue as $key => $value) {
            $this->configValue[$key] = $value === VisibilityInterface::VISIBLE
                ? BaseVisibilityResolved::VISIBILITY_VISIBLE
                : BaseVisibilityResolved::VISIBILITY_HIDDEN;
        }

        return $this->configValue[$path];
    }

    /**
     * @param string $path
     */
    public function setProductVisibilitySystemConfigurationPath($path)
    {
        $this->productConfigPath = $path;
    }

    /**
     * @param string $path
     */
    public function setCategoryVisibilitySystemConfigurationPath($path)
    {
        $this->categoryConfigPath = $path;
    }

    /**
     * @param VisibilityScopeProvider $visibilityScopeProvider
     */
    public function setVisibilityScopeProvider(VisibilityScopeProvider $visibilityScopeProvider)
    {
        $this->visibilityScopeProvider = $visibilityScopeProvider;
    }

    /**
     * @return VisibilityScopeProvider
     * @throws \RuntimeException
     */
    public function getVisibilityScopeProvider()
    {
        if (!$this->visibilityScopeProvider) {
            throw new \RuntimeException('Visibility scope provider was not set');
        }

        return $this->visibilityScopeProvider;
    }
}

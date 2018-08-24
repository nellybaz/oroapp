<?php

namespace Oro\Bundle\PricingBundle\Model;

use Doctrine\ORM\QueryBuilder;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

use Oro\Bundle\CustomerBundle\Entity\CustomerUser;
use Oro\Bundle\PricingBundle\Entity\BasePriceList;

class FrontendProductListModifier
{
    /**
     * @var TokenStorageInterface
     */
    protected $tokenStorage;

    /**
     * @var PriceListTreeHandler
     */
    protected $priceListTreeHandler;

    /**
     * @param TokenStorageInterface $tokenStorage
     * @param PriceListTreeHandler $priceListTreeHandler
     */
    public function __construct(TokenStorageInterface $tokenStorage, PriceListTreeHandler $priceListTreeHandler)
    {
        $this->tokenStorage = $tokenStorage;
        $this->priceListTreeHandler = $priceListTreeHandler;
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @param string|null $currency
     * @param null|BasePriceList $priceList
     */
    public function applyPriceListLimitations(
        QueryBuilder $queryBuilder,
        $currency = null,
        BasePriceList $priceList = null
    ) {
        $token = $this->tokenStorage->getToken();
        /** @var CustomerUser $user */
        if ($token && ($user = $token->getUser()) instanceof CustomerUser) {
            $priceList = $priceList ?: $this->priceListTreeHandler->getPriceList($user->getCustomer());

            if ($priceList) {
                list($rootAlias) = $queryBuilder->getRootAliases();

                $parametersCount = $queryBuilder->getParameters()->count();

                $productPriceAlias = 'productPrice_' . $parametersCount;
                $priceListParameterName = 'priceList_' . $parametersCount;

                // Select only products that are in specific price list
                $limitationQb = $queryBuilder->getEntityManager()->createQueryBuilder();
                $limitationQb->from('OroPricingBundle:CombinedProductPrice', $productPriceAlias)
                    ->select('IDENTITY(' . $this->getParameterName($productPriceAlias, 'product') . ')')
                    ->where($limitationQb->expr()->eq(
                        $this->getParameterName($productPriceAlias, 'priceList'),
                        ':' . $priceListParameterName
                    ))
                    ->andWhere($limitationQb->expr()->eq(
                        $this->getParameterName($productPriceAlias, 'product'),
                        $rootAlias
                    ));

                if ($currency) {
                    $currencyParameterName = 'currency_' . $parametersCount;

                    $limitationQb->andWhere($queryBuilder->expr()->eq(
                        $this->getParameterName($productPriceAlias, 'currency'),
                        ':' . $currencyParameterName
                    ));
                    $queryBuilder->setParameter($currencyParameterName, strtoupper($currency));
                }

                $queryBuilder->andWhere($queryBuilder->expr()->exists($limitationQb))
                    ->setParameter($priceListParameterName, $priceList);
            }
        }
    }

    /**
     * @param string $alias
     * @param string $parameter
     * @return string
     */
    protected function getParameterName($alias, $parameter)
    {
        return $alias . '.' . $parameter;
    }
}

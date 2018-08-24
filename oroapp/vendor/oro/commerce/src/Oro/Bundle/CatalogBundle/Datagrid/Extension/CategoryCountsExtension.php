<?php

namespace Oro\Bundle\CatalogBundle\Datagrid\Extension;

use Doctrine\Common\Persistence\ManagerRegistry;
use Oro\Bundle\CatalogBundle\Datagrid\Cache\CategoryCountsCache;
use Oro\Bundle\CatalogBundle\Datagrid\Filter\SubcategoryFilter;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\Entity\Repository\CategoryRepository;
use Oro\Bundle\CatalogBundle\Search\ProductRepository;
use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;
use Oro\Bundle\DataGridBundle\Datagrid\Common\MetadataObject;
use Oro\Bundle\DataGridBundle\Datagrid\DatagridInterface;
use Oro\Bundle\DataGridBundle\Datagrid\Manager;
use Oro\Bundle\DataGridBundle\Datagrid\ParameterBag;
use Oro\Bundle\DataGridBundle\Extension\AbstractExtension;
use Oro\Bundle\FilterBundle\Grid\Extension\AbstractFilterExtension;
use Oro\Bundle\SearchBundle\Datagrid\Datasource\SearchDatasource;
use Oro\Component\DependencyInjection\ServiceLink;

class CategoryCountsExtension extends AbstractExtension
{
    const SKIP_PARAM = 'skipCategoryCountsExtension';

    /** @var ServiceLink */
    protected $datagridManagerLink;

    /** @var ManagerRegistry */
    protected $registry;

    /** @var ProductRepository */
    protected $productSearchRepository;

    /** @var CategoryCountsCache */
    protected $cache;

    /** @var array */
    protected $applicableGrids = [];

    /**
     * @param ServiceLink $datagridManagerLink
     * @param ManagerRegistry $registry
     * @param ProductRepository $productSearchRepository
     * @param CategoryCountsCache $cache
     */
    public function __construct(
        ServiceLink $datagridManagerLink,
        ManagerRegistry $registry,
        ProductRepository $productSearchRepository,
        CategoryCountsCache $cache
    ) {
        $this->datagridManagerLink = $datagridManagerLink;
        $this->registry = $registry;
        $this->productSearchRepository = $productSearchRepository;
        $this->cache = $cache;
    }

    /**
     * @param string $gridName
     */
    public function addApplicableGrid($gridName)
    {
        $this->applicableGrids[] = $gridName;
    }

    /**
     * {@inheritDoc}
     */
    public function isApplicable(DatagridConfiguration $config)
    {
        return
            parent::isApplicable($config)
            && !$this->parameters->get(self::SKIP_PARAM)
            && SearchDatasource::TYPE === $config->getDatasourceType()
            && in_array($config->getName(), $this->applicableGrids, true);
    }

    /**
     * {@inheritDoc}
     */
    public function visitMetadata(DatagridConfiguration $config, MetadataObject $data)
    {
        $categoryCounts = $this->getCounts($config);

        $filters = $data->offsetGetByPath('[filters]', []);
        foreach ($filters as &$filter) {
            if ($filter['type'] !== SubcategoryFilter::FILTER_TYPE_NAME) {
                continue;
            }

            $filter['counts'] = $categoryCounts;
        }
        unset($filter);

        $data->offsetSetByPath('[filters]', $filters);
    }

    /**
     * @param DatagridConfiguration $config
     * @return array
     */
    protected function getCounts(DatagridConfiguration $config)
    {
        if (!filter_var($this->parameters->get('includeSubcategories'), FILTER_VALIDATE_BOOLEAN)) {
            return [];
        }

        $category = $this->getCategory();
        if (!$category) {
            return [];
        }

        $parameters = $this->buildParameters();
        $cacheKey = $this->getCacheKey($config->getName(), $parameters);

        $counts = $this->cache->getCounts($cacheKey);
        if ($counts === null) {
            // build datagrid and extract search query from it
            $datagrid = $this->getGrid($config, $parameters);

            /** @var SearchDatasource $datasource */
            $datasource = $datagrid->acceptDatasource()->getDatasource();

            // calculate counts of products per category
            $counts = $this->productSearchRepository->getCategoryCountsByCategory(
                $category,
                $datasource->getSearchQuery()
            );

            // store cache for 5 minutes to prevent overload of search index
            $this->cache->setCounts($cacheKey, $counts, 300);
        }

        return $counts;
    }

    /**
     * @return null|Category
     */
    protected function getCategory()
    {
        $categoryId = filter_var($this->parameters->get('categoryId'), FILTER_VALIDATE_INT);

        return $categoryId && $categoryId > 0 ? $this->getCategoryRepository()->find($categoryId) : null;
    }

    /**
     * @return ParameterBag
     */
    protected function buildParameters()
    {
        // get datagrid parameters
        $datagridParameters = clone $this->parameters;
        $datagridParameters->set(self::SKIP_PARAM, true);

        $categoryFilterName = SubcategoryFilter::FILTER_TYPE_NAME;

        // remove filter by category to make sure that filter counts will not be affected by filter itself
        $filters = $datagridParameters->get(AbstractFilterExtension::FILTER_ROOT_PARAM);
        if ($filters) {
            unset($filters[$categoryFilterName]);
            $datagridParameters->set(AbstractFilterExtension::FILTER_ROOT_PARAM, $filters);
        }
        $minifiedFilters = $datagridParameters->get(ParameterBag::MINIFIED_PARAMETERS);
        if ($minifiedFilters) {
            unset($minifiedFilters[AbstractFilterExtension::MINIFIED_FILTER_PARAM][$categoryFilterName]);
            $datagridParameters->set(ParameterBag::MINIFIED_PARAMETERS, $minifiedFilters);
        }

        return $datagridParameters;
    }

    /**
     * @param DatagridConfiguration $config
     * @param ParameterBag $datagridParameters
     *
     * @return DatagridInterface
     */
    protected function getGrid(DatagridConfiguration $config, ParameterBag $datagridParameters)
    {
        /** @var Manager $datagridManager */
        $datagridManager = $this->datagridManagerLink->getService();

        return $datagridManager->getDatagrid($config->getName(), $datagridParameters);
    }

    /**
     * @return CategoryRepository
     */
    protected function getCategoryRepository()
    {
        return $this->registry
            ->getManagerForClass(Category::class)
            ->getRepository(Category::class);
    }

    /**
     * @param string $gridName
     * @param array $parameters
     * @return string
     */
    private function getDataKey($gridName, array $parameters)
    {
        $this->sort($parameters);

        return sprintf('%s|%s', $gridName, json_encode($parameters, JSON_NUMERIC_CHECK));
    }

    /**
     * @param mixed $parameters
     */
    private function sort(&$parameters)
    {
        if (is_array($parameters)) {
            ksort($parameters);
            array_walk($parameters, [$this, 'sort']);
        }
    }

    /**
     * Get cache key by applicable parameters only to avoid redundant request
     *
     * @param string       $gridName
     * @param ParameterBag $datagridParameters
     *
     * @return string
     */
    private function getCacheKey($gridName, ParameterBag $datagridParameters)
    {
        $parameters = clone $datagridParameters;
        $applicableParameters = $this->getApplicableParameters();
        foreach ($parameters->all() as $name => $value) {
            if (!in_array($name, $applicableParameters, true)) {
                $parameters->remove($name);
            }
        }

        return $this->getDataKey($gridName, array_filter($parameters->all()));
    }

    /**
     * Get array of parameters that should be taken into account for generating cache key
     *
     * @return array
     */
    private function getApplicableParameters()
    {
        return [
            'categoryId',
            self::SKIP_PARAM,
            AbstractFilterExtension::FILTER_ROOT_PARAM
        ];
    }
}

<?php

namespace Oro\Bundle\CatalogBundle\EventListener;

use Doctrine\Common\Persistence\ManagerRegistry;

use Oro\Bundle\DataGridBundle\Event\PreBuild;
use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;
use Oro\Bundle\DataGridBundle\Event\BuildBefore;
use Oro\Bundle\LocaleBundle\Datagrid\Formatter\Property\LocalizedValueProperty;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\Entity\Repository\CategoryRepository;
use Oro\Bundle\CatalogBundle\Handler\RequestProductHandler;

class DatagridListener
{
    const CATEGORY_COLUMN = 'category_name';

    /** @var ManagerRegistry */
    protected $doctrine;

    /** @var RequestProductHandler */
    protected $requestProductHandler;

    /** @var string */
    protected $dataClass;

    /**
     * @param ManagerRegistry $doctrine
     * @param RequestProductHandler $requestProductHandler
     */
    public function __construct(ManagerRegistry $doctrine, RequestProductHandler $requestProductHandler)
    {
        $this->doctrine = $doctrine;
        $this->requestProductHandler = $requestProductHandler;
    }

    /**
     * @param BuildBefore $event
     */
    public function onBuildBeforeProductsSelect(BuildBefore $event)
    {
        $this->addCategoryInfo($event->getConfig());
    }

    /**
     * @param PreBuild $event
     */
    public function onPreBuildProducts(PreBuild $event)
    {
        $this->addFilterForNonCategorizedProduct($event);
        $this->addFilterByCategory($event);
    }

    /**
     * @param DatagridConfiguration $config
     */
    protected function addCategoryInfo(DatagridConfiguration $config)
    {
        $query = $config->getOrmQuery();

        // select
        $query->addSelect('IDENTITY(product.category) as ' . self::CATEGORY_COLUMN);

        // columns
        $categoryColumn = [
            'label' => 'oro.catalog.category.entity_label',
            'data_name' => self::CATEGORY_COLUMN
        ];
        $this->addConfigElement($config, '[columns]', $categoryColumn, self::CATEGORY_COLUMN);

        // sorter
        $categorySorter = ['data_name' => self::CATEGORY_COLUMN];
        $this->addConfigElement($config, '[sorters][columns]', $categorySorter, self::CATEGORY_COLUMN);

        // filter
        $categoryFilter = [
            'type' => 'string',
            'data_name' => self::CATEGORY_COLUMN,
        ];
        $this->addConfigElement($config, '[filters][columns]', $categoryFilter, self::CATEGORY_COLUMN);
    }

    /**
     * @param DatagridConfiguration $config
     * @deprecated since 1.5. Please use denormalizedDefaultTitle instead of Category and associated relation
     */
    protected function addCategoryRelation(DatagridConfiguration $config)
    {
        $this->addCategoryInfo($config);
    }

    /**
     * @param PreBuild $event
     */
    protected function addFilterForNonCategorizedProduct(PreBuild $event)
    {
        $isIncludeNonCategorizedProducts = $event->getParameters()->get('includeNotCategorizedProducts')
            || $this->requestProductHandler->getIncludeNotCategorizedProductsChoice();

        if (!$isIncludeNonCategorizedProducts) {
            return;
        }

        $config = $event->getConfig();
        $config->offsetSetByPath(
            '[options][urlParams][includeNotCategorizedProducts]',
            true
        );
        $config->getOrmQuery()->addOrWhere('product.category IS NULL');
    }

    /**
     * @param PreBuild $event
     */
    protected function addFilterByCategory(PreBuild $event)
    {
        $categoryId = $event->getParameters()->get('categoryId');
        $isIncludeSubcategories = $event->getParameters()->get('includeSubcategories');

        if (!$categoryId) {
            $categoryId = $this->requestProductHandler->getCategoryId();
            $isIncludeSubcategories = $this->requestProductHandler->getIncludeSubcategoriesChoice();
        }

        if (!$categoryId) {
            return;
        }

        $config = $event->getConfig();
        $config->offsetSetByPath('[options][urlParams][categoryId]', $categoryId);
        $config->offsetSetByPath('[options][urlParams][includeSubcategories]', $isIncludeSubcategories);

        /** @var CategoryRepository $repo */
        $repo = $this->doctrine->getRepository($this->dataClass);
        /** @var Category $category */
        $category = $repo->find($categoryId);
        if (!$category) {
            return;
        }

        $productCategoryIds = [$categoryId];
        if ($isIncludeSubcategories) {
            $productCategoryIds = array_merge($repo->getChildrenIds($category), $productCategoryIds);
        }

        $config->getOrmQuery()->addAndWhere('product.category IN (:productCategoryIds)');

        $config->offsetSetByPath(
            DatagridConfiguration::DATASOURCE_BIND_PARAMETERS_PATH,
            ['productCategoryIds']
        );
        $event->getParameters()->set('productCategoryIds', $productCategoryIds);
    }

    /**
     * @param DatagridConfiguration $config
     * @param string $path
     * @param mixed $element
     * @param mixed $key
     */
    protected function addConfigElement(DatagridConfiguration $config, $path, $element, $key = null)
    {
        $select = $config->offsetGetByPath($path);
        if ($key) {
            $select[$key] = $element;
        } else {
            $select[] = $element;
        }
        $config->offsetSetByPath($path, $select);
    }

    /**
     * @param string $dataClass
     */
    public function setDataClass($dataClass)
    {
        $this->dataClass = $dataClass;
    }
}

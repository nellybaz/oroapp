<?php

namespace Oro\Bundle\CatalogBundle\Model;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\CatalogBundle\Entity\Category;

class CategoryMaterializedPathModifier
{
    /**
     * @var DoctrineHelper
     */
    protected $doctrineHelper;

    /**
     * @param DoctrineHelper $doctrineHelper
     */
    public function __construct(DoctrineHelper $doctrineHelper)
    {
        $this->doctrineHelper = $doctrineHelper;
    }

    /**
     * @param Category $category
     * @param array $children
     */
    public function updateMaterializedPathNested(Category $category, array $children = [])
    {
        $this->calculateMaterializedPath($category);

        foreach ($children as $child) {
            $this->calculateMaterializedPath($child, true);
        }
    }

    /**
     * @param Category $category
     * @param bool $scheduleForInsert
     */
    public function calculateMaterializedPath(Category $category, $scheduleForInsert = false)
    {
        $path = (string) $category->getId();
        $parent = $category->getParentCategory();
        if ($parent && $parent->getMaterializedPath()) {
            $path = $parent->getMaterializedPath().Category::MATERIALIZED_PATH_DELIMITER.$path;
        }

        $category->setMaterializedPath($path);
        if ($scheduleForInsert) {
            $this->doctrineHelper
                ->getEntityRepositoryForClass(Category::class)
                ->updateMaterializedPath($category);
        }
    }
}

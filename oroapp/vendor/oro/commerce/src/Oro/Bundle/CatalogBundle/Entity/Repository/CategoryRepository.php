<?php

namespace Oro\Bundle\CatalogBundle\Entity\Repository;

use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query\Expr;

use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\LocaleBundle\Entity\Localization;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Component\Tree\Entity\Repository\NestedTreeRepository;

class CategoryRepository extends NestedTreeRepository
{
    /**
     * @var Category
     */
    private $masterCatalog;

    /**
     * @return Category
     */
    public function getMasterCatalogRoot()
    {
        if (!$this->masterCatalog) {
            $this->masterCatalog = $this->createQueryBuilder('category')
                ->andWhere('category.parentCategory IS NULL')
                ->orderBy('category.id', 'ASC')
                ->setMaxResults(1)
                ->getQuery()
                ->getSingleResult();
        }
        return $this->masterCatalog;
    }

    /**
     * @param object|null $node
     * @param bool $direct
     * @param string|null $sortByField
     * @param string $direction
     * @param bool $includeNode
     * @return QueryBuilder
     */
    public function getChildrenQueryBuilderPartial(
        $node = null,
        $direct = false,
        $sortByField = null,
        $direction = 'ASC',
        $includeNode = false
    ) {
        return $this->getChildrenQueryBuilder($node, $direct, $sortByField, $direction, $includeNode)
            ->select('partial node.{id, parentCategory, materializedPath, left, level, right, root}');
    }

    /**
     * @param object|null $node
     * @param bool $direct
     * @param string|null $sortByField
     * @param string $direction
     * @param bool $includeNode
     * @return Category[]
     */
    public function getChildren(
        $node = null,
        $direct = false,
        $sortByField = null,
        $direction = 'ASC',
        $includeNode = false
    ) {
        return $this->getChildrenQueryBuilder($node, $direct, $sortByField, $direction, $includeNode)
            ->addSelect('children')
            ->leftJoin('node.childCategories', 'children')
            ->getQuery()
            ->getResult();
    }

    /**
     * @param object|null $node
     * @param bool $direct
     * @param string|null $sortByField
     * @param string $direction
     * @param bool $includeNode
     * @return Category[]
     * @deprecated Use \Oro\Bundle\CatalogBundle\Entity\Repository\CategoryRepository::getChildren
     */
    public function getChildrenWithTitles(
        $node = null,
        $direct = false,
        $sortByField = null,
        $direction = 'ASC',
        $includeNode = false
    ) {
        return $this->getChildrenQueryBuilder($node, $direct, $sortByField, $direction, $includeNode)
            ->addSelect('title, children')
            ->leftJoin('node.titles', 'title')
            ->leftJoin('node.childCategories', 'children')
            ->getQuery()
            ->getResult();
    }

    /**
     * @param Category $category
     * @return array
     */
    public function getChildrenIds(Category $category)
    {
        $result = $this->childrenQueryBuilder($category)
            ->select('node.id')
            ->getQuery()
            ->getScalarResult();

        return array_map('current', $result);
    }

    /**
     * @param string $title
     * @return Category|null
     */
    public function findOneByDefaultTitle($title)
    {
        $qb = $this->createQueryBuilder('category');

        return $qb
            ->select('partial category.{id}')
            ->andWhere('category.denormalizedDefaultTitle = :title')
            ->setParameter('title', $title)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param Product $product
     * @return Category|null
     */
    public function findOneByProduct(Product $product)
    {
        if (!$product->getId()) {
            return null;
        }

        $qb = $this->_em->createQueryBuilder();

        $qb->select('category as cat')
            ->from(Product::class, 'product')
            ->innerJoin($this->_entityName, 'category', Join::WITH, 'category = product.category')
            ->where('product = :product')
            ->setParameter('product', $product)
            ->setMaxResults(1);
        $result = $qb->getQuery()
            ->getResult();
        if (count($result) > 0) {
            return $result[0]['cat'];
        }
        return null;
    }

    /**
     * @param string $productSku
     * @param bool $includeTitles
     * @return null|Category
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findOneByProductSku($productSku, $includeTitles = false)
    {
        $qb = $this->createQueryBuilder('category');

        if ($includeTitles) {
            $qb->addSelect('title.string');
            $qb->leftJoin('category.titles', 'title', Join::WITH, $qb->expr()->isNull('title.localization'));
        }

        return $qb
            ->select('partial category.{id}')
            ->innerJoin('category.products', 'p', Join::WITH, $qb->expr()->eq('p.sku', ':sku'))
            ->setParameter('sku', $productSku)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param array $categories
     *
     * @return QueryBuilder
     *
     * @deprecated Not using
     */
    public function getCategoriesProductsCountQueryBuilder($categories)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('IDENTITY(product.category), COUNT(product.id) as products_count')
            ->from('OroProductBundle:Product', 'product')
            ->where($qb->expr()->in('product.category', ':categories'))
            ->setParameter('categories', $categories)
            ->groupBy('product.category');

        return $qb;
    }

    /**
     * @param Category $category
     * @return Category[]
     */
    public function getAllChildCategories(Category $category)
    {
        return $this->getChildrenQueryBuilderPartial($category)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param Category[] $categories
     * @return array
     */
    public function getProductIdsByCategories(array $categories)
    {
        $qb = $this->_em->createQueryBuilder();
        $productIds = $qb->select('product.id')
            ->from(Product::class, 'product')
            ->where($qb->expr()->in('product.category', ':categories'))
            ->setParameter('categories', $categories)
            ->orderBy($qb->expr()->asc('product.id'))
            ->getQuery()
            ->getScalarResult();

        return array_column($productIds, 'id');
    }

    /**
     * Creates product to category map, [product_id => Category, ...]
     * @param Product[] $products
     * @param Localization[] $localizations
     * @return Category[]
     */
    public function getCategoryMapByProducts(array $products, array $localizations = [])
    {
        $builder = $this->_em->createQueryBuilder();
        $builder
            ->from(Product::class, 'product')
            ->innerJoin($this->_entityName, 'category', 'WITH', 'product.category = category')
            ->andWhere($builder->expr()->in('product', ':products'))
            ->setParameter('products', $products);

        $builder->select('category as cat');
        $builder->addSelect('product.id as productId');
        $builder->addSelect('category.id as categoryId');

        $results = $builder->getQuery()->getArrayResult();

        $categoryMap = [];
        $productCategoryMap = [];
        foreach ($results as $result) {
            $categoryMap[$result['cat']['id']] = $this->find($result['cat']['id']);
            $productCategoryMap[$result['productId']] = $categoryMap[$result['categoryId']];
        }

        return $productCategoryMap;
    }

    /**
     * @param Category $category
     */
    public function updateMaterializedPath(Category $category)
    {
        $this->_em->createQueryBuilder()
            ->update($this->_entityName, 'category')
            ->set('category.materializedPath', ':newPath')
            ->where('category.id = :category')
            ->setParameter('category', $category)
            ->setParameter('newPath', $category->getMaterializedPath())
            ->getQuery()
            ->execute();
    }
}

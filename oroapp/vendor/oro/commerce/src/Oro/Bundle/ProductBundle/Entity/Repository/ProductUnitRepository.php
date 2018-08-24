<?php

namespace Oro\Bundle\ProductBundle\Entity\Repository;

use Doctrine\ORM\EntityNotFoundException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\QueryBuilder;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;

class ProductUnitRepository extends EntityRepository
{
    /**
     * @param Product $product
     * @return ProductUnit[]
     */
    public function getProductUnits(Product $product)
    {
        return $this->getProductUnitsQueryBuilder($product)->getQuery()->getResult();
    }

    /**
     * @param Product[] $products
     * @return array
     */
    public function getProductsUnits(array $products)
    {
        if (count($products) === 0) {
            return [];
        }

        $productsUnits = $this->getProductsUnitsQueryBuilder($products)
            ->select(
                'IDENTITY(productUnitPrecision.product) AS productId, unit.code AS code,
                 COALESCE(IDENTITY(product.primaryUnitPrecision), 0) as primary,
                 productUnitPrecision.precision'
            )
            ->getQuery()->getArrayResult();

        $result = [];
        foreach ($productsUnits as $unit) {
            if ($unit['primary'] && isset($result[$unit['productId']])) {
                $result[$unit['productId']] = array_merge(
                    [$unit['code'] => $unit['precision']],
                    $result[$unit['productId']]
                );
            } else {
                $result[$unit['productId']][$unit['code']] = $unit['precision'];
            }
        }

        return $result;
    }

    /**
     * @param Product[] $products
     * @return array
     */
    public function getPrimaryProductsUnits(array $products)
    {
        if (count($products) === 0) {
            return [];
        }

        $productsUnits = $this->getProductsUnitsQueryBuilder($products)
            ->select(
                'IDENTITY(productUnitPrecision.product) AS productId, unit.code AS code,
                 COALESCE(IDENTITY(product.primaryUnitPrecision), 0) as primary'
            )
            ->getQuery()->getArrayResult();

        $result = [];
        foreach ($productsUnits as $unit) {
            if ($unit['primary']) {
                $result[$unit['productId']] = $unit['code'];
            }
        }

        return $result;
    }

    /**
     * @param array $products
     * @return QueryBuilder
     */
    protected function getProductsUnitsQueryBuilder(array $products)
    {
        $qb = $this->createQueryBuilder('unit');
        $qb->join(
            'OroProductBundle:ProductUnitPrecision',
            'productUnitPrecision',
            Join::WITH,
            $qb->expr()->eq('productUnitPrecision.unit', 'unit')
        )
            ->leftJoin(
                'OroProductBundle:Product',
                'product',
                Join::WITH,
                'product.primaryUnitPrecision = productUnitPrecision'
            )
            ->addOrderBy('productUnitPrecision.unit')
            ->andWhere('productUnitPrecision.sell = true')
            ->andWhere($qb->expr()->in('productUnitPrecision.product', ':products'))
            ->setParameter('products', $products);
        return $qb;
    }

    /**
     * @param array $products
     * @param array $codes
     * @return array
     */
    public function getProductsUnitsByCodes(array $products, array $codes)
    {
        if (count($products) === 0 || count($codes) === 0) {
            return [];
        }
        $qb = $this->getProductsUnitsQueryBuilder($products);
        $qb->andWhere($qb->expr()->in('unit', ':units'))
            ->setParameter('units', $codes);

        return array_reduce($qb->getQuery()->execute(), function ($result, ProductUnit $unit) {
            $result[$unit->getCode()] = $unit;
            return $result;
        }, []);
    }

    /**
     * @return ProductUnit[]
     */
    public function getAllUnits()
    {
        return $this->findBy([], ['code' => 'ASC']);
    }

    /**
     * @param Product $product
     *
     * @return QueryBuilder
     */
    public function getProductUnitsQueryBuilder(Product $product)
    {
        $qb = $this->createQueryBuilder('unit');
        $qb
            ->select('unit')
            ->join(
                'OroProductBundle:ProductUnitPrecision',
                'productUnitPrecision',
                Join::WITH,
                $qb->expr()->eq('productUnitPrecision.unit', 'unit')
            )
            ->addOrderBy('unit.code')
            ->andWhere($qb->expr()->eq('productUnitPrecision.product', ':product'))
            ->setParameter('product', $product);

        return $qb;
    }

    /**
     * @param int $productId
     * @return QueryBuilder
     *
     * @throws \InvalidArgumentException if id is not valid
     * @throws EntityNotFoundException if entity not found by id
     */
    public function getProductUnitsQueryBuilderById($productId)
    {
        if (!is_numeric($productId)) {
            throw new \InvalidArgumentException();
        }

        $product = $this->_em->getReference('OroProductBundle:Product', (int)$productId);
        if (!$product) {
            throw new EntityNotFoundException();
        }

        /** @var Product $product */
        return $this->getProductUnitsQueryBuilder($product);
    }

    /**
     * @return array
     */
    public function getAllUnitCodes()
    {
        $results = $this->createQueryBuilder('unit')
            ->select('unit.code')
            ->orderBy('unit.code')
            ->getQuery()
            ->getScalarResult();

        $codes = [];
        foreach ($results as $result) {
            $codes[] = $result['code'];
        }

        return $codes;
    }
}

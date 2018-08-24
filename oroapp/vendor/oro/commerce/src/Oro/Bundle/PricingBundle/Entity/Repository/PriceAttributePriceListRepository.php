<?php

namespace Oro\Bundle\PricingBundle\Entity\Repository;

use Doctrine\ORM\Query\Expr\Join;

class PriceAttributePriceListRepository extends BasePriceListRepository
{
    /**
     * @param array $currencies
     * @return array
     */
    public function getAttributesWithCurrencies($currencies)
    {
        $qb = $this->createQueryBuilder('price_attribute_price_list')
            ->select(
                'price_attribute_price_list.id',
                'price_attribute_price_list.name',
                'price_attribute_currency.currency'
            );
        $qb->innerJoin(
            'OroPricingBundle:PriceAttributeCurrency',
            'price_attribute_currency',
            Join::WITH,
            $qb->expr()->eq('price_attribute_currency.priceList', 'price_attribute_price_list')
        );

        $qb->andWhere($qb->expr()->in('price_attribute_currency.currency', ':currencies'))
            ->setParameter('currencies', $currencies);


        return $qb->getQuery()->getResult();
    }

    /**
     * @return array
     */
    public function getFieldNames()
    {
        $qb = $this->createQueryBuilder('price_attribute_price_list')
            ->select('
                price_attribute_price_list.id,
                price_attribute_price_list.name,
                price_attribute_price_list.fieldName
            ')
            ->orderBy('price_attribute_price_list.id');

        return $qb->getQuery()->getArrayResult();
    }
}

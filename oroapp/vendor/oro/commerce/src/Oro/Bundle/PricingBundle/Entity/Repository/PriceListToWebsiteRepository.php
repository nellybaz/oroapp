<?php

namespace Oro\Bundle\PricingBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

use Oro\Bundle\BatchBundle\ORM\Query\BufferedIdentityQueryResultIterator;
use Oro\Bundle\BatchBundle\ORM\Query\BufferedQueryResultIterator;
use Oro\Bundle\BatchBundle\ORM\Query\BufferedQueryResultIteratorInterface;
use Oro\Bundle\PricingBundle\Entity\BasePriceList;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\PriceListToWebsite;
use Oro\Bundle\PricingBundle\Form\Type\PriceListCollectionType;
use Oro\Bundle\PricingBundle\Model\DTO\PriceListRelationTrigger;
use Oro\Bundle\WebsiteBundle\Entity\Website;

/**
 * Composite primary key fields order:
 *  - priceList
 *  - website
 */
class PriceListToWebsiteRepository extends EntityRepository
{
    /**
     * @param BasePriceList $priceList
     * @param Website $website
     * @return PriceListToWebsite
     */
    public function findByPrimaryKey(BasePriceList $priceList, Website $website)
    {
        return $this->findOneBy(['priceList' => $priceList, 'website' => $website]);
    }

    /**
     * @param Website $website
     * @return PriceListToWebsite[]
     */
    public function getPriceLists(Website $website)
    {
        $qb = $this->createQueryBuilder('relation');
        $qb->innerJoin('relation.priceList', 'priceList')
            ->where($qb->expr()->eq('relation.website', ':website'))
            ->andWhere($qb->expr()->eq('priceList.active', ':active'))
            ->orderBy('relation.sortOrder', PriceListCollectionType::DEFAULT_ORDER)
            ->setParameter('website', $website)
            ->setParameter('active', true);

        return $qb->getQuery()->getResult();
    }

    /**
     * @param int $fallback
     * @return BufferedQueryResultIteratorInterface|Website[]
     */
    public function getWebsiteIteratorByDefaultFallback($fallback)
    {
        $qb = $this->getEntityManager()->createQueryBuilder()
            ->select('distinct website')
            ->from('OroWebsiteBundle:Website', 'website');

        $qb->innerJoin(
            'OroPricingBundle:PriceListToWebsite',
            'plToWebsite',
            Join::WITH,
            $qb->expr()->andX(
                $qb->expr()->eq('plToWebsite.website', 'website')
            )
        );

        if ($fallback !== null) {
            $qb->leftJoin(
                'OroPricingBundle:PriceListWebsiteFallback',
                'priceListFallBack',
                Join::WITH,
                $qb->expr()->andX(
                    $qb->expr()->eq('priceListFallBack.website', 'website')
                )
            )
                ->where(
                    $qb->expr()->orX(
                        $qb->expr()->eq('priceListFallBack.fallback', ':websiteFallback'),
                        $qb->expr()->isNull('priceListFallBack.fallback')
                    )
                )
                ->setParameter('websiteFallback', $fallback);
        }

        return new BufferedIdentityQueryResultIterator($qb->getQuery());
    }

    /**
     * @param PriceList $priceList
     * @return BufferedQueryResultIterator
     */
    public function getIteratorByPriceList(PriceList $priceList)
    {
        return $this->getIteratorByPriceLists([$priceList]);
    }

    /**
     * @param PriceList[] $priceLists
     * @return BufferedQueryResultIterator
     */
    public function getIteratorByPriceLists($priceLists)
    {
        $qb = $this->createQueryBuilder('priceListToWebsite');

        $qb->select(
            sprintf('IDENTITY(priceListToWebsite.website) as %s', PriceListRelationTrigger::WEBSITE)
        )
            ->where($qb->expr()->in('priceListToWebsite.priceList', ':priceLists'))
            ->groupBy('priceListToWebsite.website')
            ->setParameter('priceLists', $priceLists)
            // order required for BufferedIdentityQueryResultIterator on PostgreSql
            ->orderBy('priceListToWebsite.website')
        ;

        return new BufferedQueryResultIterator($qb);
    }

    /**
     * @param Website $website
     * @return mixed
     */
    public function delete(Website $website)
    {
        return $this->getEntityManager()->createQueryBuilder()
            ->delete($this->getEntityName(), 'PriceListToWebsite')
            ->andWhere('PriceListToWebsite.website = :website')
            ->setParameter('website', $website)
            ->getQuery()
            ->execute();
    }
}

<?php

namespace Oro\Bundle\TaxBundle\Manager;

use Doctrine\ORM\EntityManager;

use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\TaxBundle\Entity\Tax;
use Oro\Bundle\TaxBundle\Entity\TaxValue;

class TaxValueManager
{
    /** @var DoctrineHelper */
    protected $doctrineHelper;

    /** @var string */
    protected $taxValueClass;

    /** @var string */
    protected $taxClass;

    /** @var TaxValue[] */
    protected $taxValues = [];

    /**
     * @param DoctrineHelper $doctrineHelper
     * @param string $taxValueClass
     * @param string $taxClass
     */
    public function __construct(DoctrineHelper $doctrineHelper, $taxValueClass, $taxClass)
    {
        $this->doctrineHelper = $doctrineHelper;
        $this->taxValueClass = (string)$taxValueClass;
        $this->taxClass = (string)$taxClass;
    }

    /**
     * @param string $entityClass
     * @param string $entityId
     * @return TaxValue
     */
    public function getTaxValue($entityClass, $entityId)
    {
        $key = $this->getTaxValueCacheKey($entityClass, $entityId);

        if (array_key_exists($key, $this->taxValues)) {
            return $this->taxValues[$key];
        }

        $taxValue = null;

        if ($entityId) {
            $taxValue = $this->findTaxValue($entityClass, $entityId);
        }

        return $this->cacheTaxValue($entityClass, $entityId, $taxValue);
    }

    /**
     * @param string $entityClass
     * @param string $entityId
     * @param TaxValue|null $taxValue
     * @return TaxValue
     */
    private function cacheTaxValue($entityClass, $entityId, $taxValue)
    {
        if (!$taxValue) {
            /** @var TaxValue $taxValue */
            $taxValue = new $this->taxValueClass;
            $taxValue
                ->setEntityClass($entityClass)
                ->setEntityId($entityId);
        }

        // Save taxValues to cache only with entity IDs
        if ($entityId) {
            $key = $this->getTaxValueCacheKey($entityClass, $entityId);
            $this->taxValues[$key] = $taxValue;
        }

        return $taxValue;
    }

    /**
     * @param string $entityClass
     * @param array $entityIds
     * @return bool
     */
    private function isCached($entityClass, array $entityIds)
    {
        foreach ($entityIds as $entityId) {
            $key = $this->getTaxValueCacheKey($entityClass, $entityId);
            if (!array_key_exists($key, $this->taxValues)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param string $entityClass
     * @param array $entityIds
     */
    public function preloadTaxValues($entityClass, array $entityIds)
    {
        if ($this->isCached($entityClass, $entityIds)) {
            return;
        }

        $taxValues = $this->findTaxValues($entityClass, $entityIds);
        $taxValuesByEntityIds = [];

        foreach ($taxValues as $taxValue) {
            $taxValuesByEntityIds[$taxValue->getEntityId()] = $taxValue;
        }

        foreach ($entityIds as $entityId) {
            $taxValue = !empty($taxValuesByEntityIds[$entityId]) ? $taxValuesByEntityIds[$entityId] : null;

            $this->cacheTaxValue($entityClass, $entityId, $taxValue);
        }
    }

    /**
     * @param string $entityClass
     * @param array $entityIds
     * @return array|TaxValue[]
     */
    private function findTaxValues($entityClass, array $entityIds)
    {
        return $this->doctrineHelper->getEntityRepositoryForClass($this->taxValueClass)
            ->findBy(['entityClass' => $entityClass, 'entityId' => $entityIds]);
    }

    /**
     * @param string $entityClass
     * @param string $entityId
     * @return null|TaxValue
     */
    public function findTaxValue($entityClass, $entityId)
    {
        return $this->doctrineHelper->getEntityRepositoryForClass($this->taxValueClass)
            ->findOneBy(['entityClass' => $entityClass, 'entityId' => $entityId]);
    }

    /**
     * @param TaxValue $taxValue
     * @param bool $flush
     */
    public function saveTaxValue(TaxValue $taxValue, $flush = true)
    {
        $em = $this->getTaxValueEntityManager();

        /** todo: BB-3483  */
        $em->getUnitOfWork()->scheduleExtraUpdate($taxValue, ['result' => [null, $taxValue->getResult()]]);

        $em->persist($taxValue);

        if ($flush) {
            $em->flush($taxValue);
        }
    }

    /**
     * @param TaxValue $taxValue
     * @param bool $flush
     * @return bool
     */
    public function removeTaxValue(TaxValue $taxValue, $flush = false)
    {
        $em = $this->getTaxValueEntityManager();

        if (!$em->contains($taxValue)) {
            return false;
        }

        $em->remove($taxValue);

        if ($flush) {
            $em->flush($taxValue);
        }

        return true;
    }

    /**
     * @param string $taxCode
     * @return Tax
     */
    public function getTax($taxCode)
    {
        return $this->doctrineHelper->getEntityRepository($this->taxClass)->findOneBy(['code' => $taxCode]);
    }

    /**
     * Clear caches
     */
    public function clear()
    {
        $this->taxValues = [];
    }

    /**
     * @return EntityManager
     */
    protected function getTaxValueEntityManager()
    {
        return $this->doctrineHelper->getEntityManagerForClass($this->taxValueClass);
    }

    /**
     * @param string $entityClass
     * @param string $entityId
     * @return string
     */
    protected function getTaxValueCacheKey($entityClass, $entityId)
    {
        return sprintf('%s#%s', $entityClass, $entityId);
    }
}

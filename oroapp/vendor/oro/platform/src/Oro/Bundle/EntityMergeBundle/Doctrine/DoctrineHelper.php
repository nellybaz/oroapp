<?php

namespace Oro\Bundle\EntityMergeBundle\Doctrine;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\Common\Util\ClassUtils as DoctrineClassUtils;

use Symfony\Component\Security\Core\Util\ClassUtils;

use Oro\Bundle\EntityBundle\ORM\Mapping\AdditionalMetadataProvider;
use Oro\Bundle\EntityMergeBundle\Exception\InvalidArgumentException;

class DoctrineHelper
{
    /** @var EntityManager */
    private $entityManager;

    /** @var AdditionalMetadataProvider */
    protected $additionalMetadataProvider;

    /**
     * @param EntityManager $entityManager
     * @param AdditionalMetadataProvider $additionalMetadataProvider
     */
    public function __construct(EntityManager $entityManager, AdditionalMetadataProvider $additionalMetadataProvider)
    {
        $this->entityManager = $entityManager;
        $this->additionalMetadataProvider = $additionalMetadataProvider;
    }

    /**
     * Get entities by ids
     *
     * @param string $className
     * @param array $entityIds
     * @return object[]
     */
    public function getEntitiesByIds($className, array $entityIds)
    {
        if (!$entityIds) {
            return array();
        }

        $repository = $this->getEntityRepository($className);
        $queryBuilder = $repository->createQueryBuilder('entity');
        $entityIdentifier = $this->getSingleIdentifierFieldName($className);
        $identifierExpression = sprintf('entity.%s', $entityIdentifier);
        $queryBuilder->where($queryBuilder->expr()->in($identifierExpression, $entityIds));
        $entities = $queryBuilder->getQuery()->execute();

        return $entities;
    }

    /**
     * @param string $entityName
     * @return EntityRepository
     */
    public function getEntityRepository($entityName)
    {
        return $this->entityManager->getRepository($entityName);
    }

    /**
     * @param string $className
     * @return string
     */
    public function getSingleIdentifierFieldName($className)
    {
        return $this->entityManager->getClassMetadata($className)->getSingleIdentifierFieldName();
    }

    /**
     * Get list of entities ids
     *
     * @param array $entities
     * @return array
     */
    public function getEntityIds(array $entities)
    {
        $result = array();

        foreach ($entities as $entity) {
            $result[] = $this->getEntityIdentifierValue($entity);
        }

        return $result;
    }

    /**
     * @param object $entity
     * @return string
     * @throws InvalidArgumentException
     */
    public function getEntityIdentifierValue($entity)
    {
        $idValues = $this->getMetadataFor(DoctrineClassUtils::getClass($entity))->getIdentifierValues($entity);
        if (count($idValues) > 1) {
            throw new InvalidArgumentException(
                "Multiple id is not supported."
            );
        }
        return current($idValues);
    }

    /**
     * Checks if entities are equal
     *
     * @param object $entity
     * @param object $other
     * @return bool
     * @throws InvalidArgumentException
     */
    public function isEntityEqual($entity, $other)
    {
        if (!is_object($entity)) {
            throw new InvalidArgumentException(
                sprintf('$entity argument must be an object, "%s" given.', gettype($entity))
            );
        }

        if (!is_object($other)) {
            throw new InvalidArgumentException(
                sprintf('$other argument must be an object, "%s" given.', gettype($other))
            );
        }

        $firstClass = ClassUtils::getRealClass($entity);
        $secondClass = ClassUtils::getRealClass($other);

        return
            $firstClass == $secondClass &&
            $this->getEntityIdentifierValue($entity) == $this->getEntityIdentifierValue($other);
    }

    /**
     * @param string $className
     * @return array
     */
    public function getInversedUnidirectionalAssociationMappings($className)
    {
        return $this->additionalMetadataProvider->getInversedUnidirectionalAssociationMappings($className);
    }

    /**
     * @param string $className
     * @return ClassMetadata
     */
    public function getMetadataFor($className)
    {
        return $this->getMetadataFactory()->getMetadataFor($className);
    }

    /**
     * @return ClassMetadata[]
     */
    public function getAllMetadata()
    {
        return $this
            ->getMetadataFactory()
            ->getAllMetadata();
    }

    /**
     * @return \Doctrine\ORM\Mapping\ClassMetadataFactory
     */
    protected function getMetadataFactory()
    {
        return $this
            ->entityManager
            ->getMetadataFactory();
    }
}

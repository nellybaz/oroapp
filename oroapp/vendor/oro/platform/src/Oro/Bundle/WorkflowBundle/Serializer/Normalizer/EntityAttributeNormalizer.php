<?php

namespace Oro\Bundle\WorkflowBundle\Serializer\Normalizer;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;

use Oro\Bundle\ActionBundle\Model\ParameterInterface;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\WorkflowBundle\Exception\SerializerException;
use Oro\Bundle\WorkflowBundle\Model\Workflow;

class EntityAttributeNormalizer implements AttributeNormalizer
{
    /**
     * @var ManagerRegistry
     */
    protected $registry;

    /**
     * @var DoctrineHelper
     */
    protected $doctrineHelper;

    /**
     * @param ManagerRegistry $registry
     * @param DoctrineHelper $doctrineHelper
     */
    public function __construct(ManagerRegistry $registry, DoctrineHelper $doctrineHelper)
    {
        $this->registry = $registry;
        $this->doctrineHelper = $doctrineHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize(Workflow $workflow, ParameterInterface $attribute, $attributeValue)
    {
        if (null === $attributeValue) {
            return null;
        }

        $this->validateAttributeValue($workflow, $attribute, $attributeValue);

        $identifier = $this->doctrineHelper->getEntityIdentifier($attributeValue);
        return $identifier ? : null;
    }

    /**
     * Returns EntityManager for entity.
     *
     * @param Workflow $workflow
     * @param ParameterInterface $attribute
     * @param mixed $attributeValue
     * @throws SerializerException
     */
    protected function validateAttributeValue(Workflow $workflow, ParameterInterface $attribute, $attributeValue)
    {
        $expectedType = $attribute->getOption('class');
        if (!$attributeValue instanceof $expectedType) {
            throw new SerializerException(
                sprintf(
                    'Attribute "%s" of workflow "%s" must be an instance of "%s", but "%s" given',
                    $attribute->getName(),
                    $workflow->getName(),
                    $expectedType,
                    is_object($attributeValue) ? get_class($attributeValue) : gettype($attributeValue)
                )
            );
        }
    }

    /**
     * Returns EntityManager for entity.
     *
     * @param Workflow $workflow
     * @param ParameterInterface $attribute
     * @return EntityManager
     * @throws SerializerException
     */
    protected function getEntityManager(Workflow $workflow, ParameterInterface $attribute)
    {
        $entityClass = $attribute->getOption('class');
        $result = $this->registry->getManagerForClass($entityClass);
        if (!$result) {
            throw new SerializerException(
                sprintf(
                    'Attribute "%s" of workflow "%s" contains object of "%s", but it\'s not managed entity class',
                    $attribute->getName(),
                    $workflow->getName(),
                    $entityClass
                )
            );
        }

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize(Workflow $workflow, ParameterInterface $attribute, $attributeValue)
    {
        if (null === $attributeValue || !is_array($attributeValue)) {
            return null;
        }
        $em = $this->getEntityManager($workflow, $attribute);
        return $em->getReference($attribute->getOption('class'), $attributeValue);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization(Workflow $workflow, ParameterInterface $attribute, $attributeValue)
    {
        return $attribute->getType() == 'entity' && !$attribute->getOption('multiple');
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization(Workflow $workflow, ParameterInterface $attribute, $attributeValue)
    {
        return $attribute->getType() == 'entity' && !$attribute->getOption('multiple');
    }
}

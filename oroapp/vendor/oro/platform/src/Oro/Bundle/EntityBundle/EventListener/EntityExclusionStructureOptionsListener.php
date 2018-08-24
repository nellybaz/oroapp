<?php

namespace Oro\Bundle\EntityBundle\EventListener;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping\ClassMetadata;
use Oro\Bundle\EntityBundle\Event\EntityStructureOptionsEvent;
use Oro\Bundle\EntityBundle\Helper\UnidirectionalFieldHelper;
use Oro\Bundle\EntityBundle\Model\EntityFieldStructure;
use Oro\Bundle\EntityBundle\Model\EntityStructure;
use Oro\Bundle\EntityBundle\Provider\ExclusionProviderInterface;

class EntityExclusionStructureOptionsListener
{
    const OPTION_NAME = 'exclude';

    /** @var ManagerRegistry */
    protected $managerRegistry;

    /** @var ExclusionProviderInterface */
    protected $exclusionProvider;

    /**
     * @param ManagerRegistry $managerRegistry
     * @param ExclusionProviderInterface $exclusionProvider
     */
    public function __construct(ManagerRegistry $managerRegistry, ExclusionProviderInterface $exclusionProvider)
    {
        $this->managerRegistry = $managerRegistry;
        $this->exclusionProvider = $exclusionProvider;
    }

    /**
     * @param EntityStructureOptionsEvent $event
     */
    public function onOptionsRequest(EntityStructureOptionsEvent $event)
    {
        $data = $event->getData();

        foreach ($data as $entityStructure) {
            if (!$entityStructure instanceof EntityStructure) {
                continue;
            }

            $className = $entityStructure->getClassName();
            if ($this->exclusionProvider->isIgnoredEntity($className)) {
                $entityStructure->addOption(self::OPTION_NAME, true);
                continue;
            }

            $metadata = $this->getMetadataFor($className);
            if (!$metadata) {
                continue;
            }
            $this->processFields($entityStructure->getFields(), $metadata);
        }

        $event->setData($data);
    }


    /**
     * @param array|EntityFieldStructure[] $fields
     * @param ClassMetadata $entityClassMetadata
     */
    protected function processFields(array $fields, ClassMetadata $entityClassMetadata)
    {
        foreach ($fields as $field) {
            $fieldName = $field->getName();
            if (UnidirectionalFieldHelper::isFieldUnidirectional($fieldName)) {
                $realFieldName = UnidirectionalFieldHelper::getRealFieldName($fieldName);
                $realFieldClass = UnidirectionalFieldHelper::getRealFieldClass($fieldName);
                $fieldClassMetadata = $this->getMetadataFor($realFieldClass);
                if (!$fieldClassMetadata) {
                    continue;
                }
            } else {
                $realFieldName = $fieldName;
                $fieldClassMetadata = $entityClassMetadata;
            }
            $relatedEntity = $field->getRelatedEntityName();
            if (($relatedEntity && $this->exclusionProvider->isIgnoredEntity($relatedEntity)) ||
                $this->exclusionProvider->isIgnoredField($fieldClassMetadata, $realFieldName)
            ) {
                $field->addOption(self::OPTION_NAME, true);
            }
        }
    }

    /**
     * @param string $className
     *
     * @return ClassMetadata
     */
    protected function getMetadataFor($className)
    {
        $manager = $this->managerRegistry->getManagerForClass($className);

        return $manager ? $manager->getClassMetadata($className) : null;
    }
}

<?php

namespace Oro\Bundle\EntityMergeBundle\EventListener\Metadata;

use Oro\Bundle\EntityMergeBundle\Event\EntityMetadataEvent;
use Oro\Bundle\EntityMergeBundle\Metadata\FieldMetadata;
use Oro\Bundle\EntityMergeBundle\Model\MergeModes;

class MergeModesListener
{
    /**
     * @param EntityMetadataEvent $event
     */
    public function onCreateMetadata(EntityMetadataEvent $event)
    {
        $entityMetadata = $event->getEntityMetadata();

        foreach ($entityMetadata->getFieldsMetadata() as $fieldMetadata) {
            $mergeModes = $fieldMetadata->getMergeModes();
            if (empty($mergeModes)) {
                $this->initMergeModes($fieldMetadata);
            }
        }
    }

    /**
     * @param FieldMetadata $fieldMetadata
     * @return array
     */
    protected function initMergeModes(FieldMetadata $fieldMetadata)
    {
        $fieldMetadata->addMergeMode(MergeModes::REPLACE);

        if ($fieldMetadata->isCollection()) {
            $fieldMetadata->addMergeMode(MergeModes::UNITE);
        }
    }
}

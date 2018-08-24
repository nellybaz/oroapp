<?php

namespace Oro\Bundle\ApiBundle\Form\DataMapper;

use Doctrine\Common\Collections\Collection;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\PropertyAccess\PropertyPathInterface;

class AppendRelationshipMapper extends AbstractRelationshipMapper
{
    /**
     * {@inheritdoc}
     */
    protected function mapDataToCollectionFormField(
        $data,
        FormInterface $formField,
        PropertyPathInterface $propertyPath
    ) {
        // do nothing here because only input collection items should be processed by the form
    }

    /**
     * {@inheritdoc}
     */
    protected function mapCollectionFormFieldToData(
        $data,
        FormInterface $formField,
        PropertyPathInterface $propertyPath
    ) {
        $methods = $this->findAdderAndRemover($data, (string)$propertyPath);
        if ($methods) {
            $formData = $formField->getData();
            foreach ($formData as $value) {
                $data->{$methods[0]}($value);
            }
        } else {
            /** @var Collection $dataValue */
            $dataValue = $this->propertyAccessor->getValue($data, $propertyPath);
            $formData = $formField->getData();
            foreach ($formData as $value) {
                if (!$dataValue->contains($value)) {
                    $dataValue->add($value);
                }
            }
        }
    }
}

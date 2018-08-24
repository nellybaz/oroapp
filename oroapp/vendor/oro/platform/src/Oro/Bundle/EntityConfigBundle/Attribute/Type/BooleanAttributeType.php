<?php

namespace Oro\Bundle\EntityConfigBundle\Attribute\Type;

use Oro\Bundle\EntityConfigBundle\Entity\FieldConfigModel;
use Oro\Bundle\LocaleBundle\Entity\Localization;

class BooleanAttributeType implements AttributeTypeInterface
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'boolean';
    }

    /**
     * {@inheritdoc}
     */
    public function isSearchable(FieldConfigModel $attribute = null)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function isFilterable(FieldConfigModel $attribute = null)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function isSortable(FieldConfigModel $attribute = null)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchableValue(FieldConfigModel $attribute, $originalValue, Localization $localization = null)
    {
        throw new \RuntimeException('Not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function getFilterableValue(FieldConfigModel $attribute, $originalValue, Localization $localization = null)
    {
        throw new \RuntimeException('Not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function getSortableValue(FieldConfigModel $attribute, $originalValue, Localization $localization = null)
    {
        return $originalValue ? 1 : 0;
    }
}

<?php

namespace Oro\Bundle\ApiBundle\Config\Traits;

use Oro\Bundle\ApiBundle\Config\FieldConfigInterface;
use Oro\Bundle\ApiBundle\Util\ConfigUtil;

/**
 * @property FieldConfigInterface[] $fields
 */
trait FindFieldTrait
{
    /**
     * Finds a field by its name or property path.
     * If $findByPropertyPath equals to TRUE do the find using a given field name as a property path.
     *
     * @param string $fieldName
     * @param bool   $findByPropertyPath
     *
     * @return FieldConfigInterface|null
     */
    protected function doFindField($fieldName, $findByPropertyPath = false)
    {
        if (isset($this->fields[$fieldName])) {
            $field = $this->fields[$fieldName];
            if (!$findByPropertyPath) {
                return $field;
            }
            $fieldPropertyPath = $field->getPropertyPath();
            if (!$fieldPropertyPath
                || $fieldPropertyPath === $fieldName
                || ConfigUtil::IGNORE_PROPERTY_PATH === $fieldName
            ) {
                return $field;
            }
        }
        if ($findByPropertyPath) {
            foreach ($this->fields as $field) {
                $fieldPropertyPath = $field->getPropertyPath();
                if ($fieldPropertyPath
                    && $fieldPropertyPath === $fieldName
                    && ConfigUtil::IGNORE_PROPERTY_PATH !== $fieldPropertyPath
                ) {
                    return $field;
                }
            }
        }

        return null;
    }

    /**
     * Finds the name of a field by its property path.
     *
     * @param string $propertyPath
     *
     * @return string|null
     */
    protected function doFindFieldNameByPropertyPath($propertyPath)
    {
        if (isset($this->fields[$propertyPath])) {
            $fieldPropertyPath = $this->fields[$propertyPath]->getPropertyPath();
            if (!$fieldPropertyPath
                || $fieldPropertyPath === $propertyPath
                || ConfigUtil::IGNORE_PROPERTY_PATH === $fieldPropertyPath
            ) {
                return $propertyPath;
            }
        }
        foreach ($this->fields as $fieldName => $field) {
            $fieldPropertyPath = $field->getPropertyPath();
            if ($fieldPropertyPath
                && $fieldPropertyPath === $propertyPath
                && ConfigUtil::IGNORE_PROPERTY_PATH !== $fieldPropertyPath
            ) {
                return $fieldName;
            }
        }

        return null;
    }
}

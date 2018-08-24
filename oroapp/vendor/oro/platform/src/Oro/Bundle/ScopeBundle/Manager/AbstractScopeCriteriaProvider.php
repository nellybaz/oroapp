<?php

namespace Oro\Bundle\ScopeBundle\Manager;

use Symfony\Component\PropertyAccess\Exception\NoSuchPropertyException;

use Oro\Bundle\ScopeBundle\Exception\NotSupportedCriteriaValueException;
use Oro\Bundle\ScopeBundle\Model\ScopeCriteria;

use Oro\Component\PropertyAccess\PropertyAccessor;

abstract class AbstractScopeCriteriaProvider implements ScopeCriteriaProviderInterface
{
    /**
     * @var PropertyAccessor
     */
    protected $propertyAccessor;

    /**
     * @param array|object $context
     *
     * @return array
     * @throws \Oro\Bundle\ScopeBundle\Exception\NotSupportedCriteriaValueException
     */
    public function getCriteriaByContext($context)
    {
        $this->propertyAccessor = new PropertyAccessor();
        if (is_object($context) || is_array($context)) {
            $value = $this->getValue($context);
            if ($value === null) {
                return [];
            }
            if ($this->isSupportedValue($value)) {
                return [$this->getCriteriaField() => $value];
            }
            throw new NotSupportedCriteriaValueException(
                sprintf('Context[%s] doesn\'t support value of type %s.', $this->getCriteriaField(), gettype($value))
            );
        }

        return [];
    }

    /**
     * {@inheritdoc}
     */
    abstract public function getCriteriaForCurrentScope();

    /**
     * @return string
     */
    abstract public function getCriteriaField();

    /**
     * @param object|array $context
     * @return mixed|null
     */
    protected function getValue($context)
    {
        try {
            return $this->getPropertyAccessor()
                ->getValue($context, $this->getCriteriaField());
        } catch (NoSuchPropertyException $e) {
            return null;
        }
    }

    /**
     * @return PropertyAccessor
     */
    protected function getPropertyAccessor()
    {
        if (!$this->propertyAccessor) {
            $this->propertyAccessor = new PropertyAccessor();
        }

        return $this->propertyAccessor;
    }

    /**
     * @param $value
     * @return bool
     */
    protected function isSupportedValue($value)
    {
        return is_array($value) || is_a($value, $this->getCriteriaValueType()) || $value === ScopeCriteria::IS_NOT_NULL;
    }
}

<?php

namespace Oro\Bundle\DataGridBundle\Extension\InlineEditing;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Mapping\ClassMetadataInterface;
use Symfony\Component\Validator\Mapping\Loader\AbstractLoader;
use Symfony\Component\Validator\Mapping\PropertyMetadataInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use Oro\Bundle\DataGridBundle\Extension\InlineEditing\InlineEditColumnOptions\GuesserInterface;

class InlineEditColumnOptionsGuesser
{
    /** @var ValidatorInterface */
    protected $validator;

    /** @var GuesserInterface[] */
    protected $guessers;

    /**
     * @param ValidatorInterface $validator
     */
    public function __construct(ValidatorInterface $validator)
    {
        $this->guessers = [];
        $this->validator = $validator;
    }

    /**
     * @param GuesserInterface $guesser
     */
    public function addGuesser(GuesserInterface $guesser)
    {
        $this->guessers[] = $guesser;
    }

    /**
     * @param string $columnName
     * @param string $entityName
     * @param array $column
     * @param string $behaviour
     *
     * @return array
     */
    public function getColumnOptions($columnName, $entityName, $column, $behaviour)
    {
        /** @var ClassMetadataInterface $validatorMetadata */
        $validatorMetadata = $this->validator->getMetadataFor($entityName);
        $isEnabledInline =
            isset($column[Configuration::BASE_CONFIG_KEY][Configuration::CONFIG_ENABLE_KEY]) &&
            $column[Configuration::BASE_CONFIG_KEY][Configuration::CONFIG_ENABLE_KEY] === true;

        if ($behaviour === Configuration::BEHAVIOUR_ENABLE_ALL_VALUE ||
            ($behaviour === Configuration::BEHAVIOUR_ENABLE_SELECTED && $isEnabledInline)) {
            $isEnabledInlineWithBehaviour = true;
        } else {
            $isEnabledInlineWithBehaviour = false;
        }

        foreach ($this->guessers as $guesser) {
            $options = $guesser->guessColumnOptions(
                $columnName,
                $entityName,
                $column,
                $isEnabledInlineWithBehaviour
            );

            if (!empty($options)) {
                if ($validatorMetadata->hasPropertyMetadata($columnName)) {
                    $options[Configuration::BASE_CONFIG_KEY]['validation_rules'] =
                        $this->getValidationRules($validatorMetadata, $columnName);
                }

                return $options;
            }
        }

        return [];
    }

    /**
     * @param ClassMetadataInterface $validatorMetadata
     * @param string $columnName
     *
     * @return array
     */
    protected function getValidationRules($validatorMetadata, $columnName)
    {
        /** @var PropertyMetadataInterface $metadata */
        $metadata = $validatorMetadata->getPropertyMetadata($columnName);
        $metadata = is_array($metadata) && isset($metadata[0]) ? $metadata[0] : $metadata;

        $rules = [];
        foreach ($metadata->getConstraints() as $constraint) {
            $reflectionClass = new \ReflectionClass($constraint);
            $ruleKey = $reflectionClass->getNamespaceName() === substr(AbstractLoader::DEFAULT_NAMESPACE, 1, -1)
                ? $reflectionClass->getShortName()
                : $reflectionClass->getName();
            if (!isset($rules[$ruleKey])) {
                $rules[$ruleKey] = (array)$constraint;
            } elseif (!$this->isDefaultConstraint($rules[$ruleKey])) {
                $rules[$ruleKey][] = $constraint;
            }
        }

        return $rules;
    }

    /**
     * @param Constraint|array $constraint
     *
     * @return bool
     */
    private function isDefaultConstraint($constraint)
    {
        if (is_array($constraint)) {
            return in_array(Constraint::DEFAULT_GROUP, $constraint['groups'], true);
        }

        return in_array(Constraint::DEFAULT_GROUP, $constraint->groups, true);
    }
}

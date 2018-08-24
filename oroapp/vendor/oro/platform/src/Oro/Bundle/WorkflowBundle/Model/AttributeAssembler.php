<?php

namespace Oro\Bundle\WorkflowBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\ActionBundle\Button\ButtonSearchContext;
use Oro\Bundle\ActionBundle\Model\Attribute as BaseAttribute;
use Oro\Bundle\ActionBundle\Model\AttributeGuesser;
use Oro\Bundle\WorkflowBundle\Configuration\WorkflowConfiguration;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;
use Oro\Bundle\WorkflowBundle\Helper\WorkflowTranslationHelper;

use Oro\Component\Action\Exception\AssemblerException;
use Oro\Component\Action\Model\AbstractAssembler as BaseAbstractAssembler;

class AttributeAssembler extends BaseAbstractAssembler
{
    /**
     * @var AttributeGuesser
     */
    protected $attributeGuesser;

    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @param AttributeGuesser $attributeGuesser
     * @param TranslatorInterface $translator
     */
    public function __construct(AttributeGuesser $attributeGuesser, TranslatorInterface $translator)
    {
        $this->attributeGuesser = $attributeGuesser;
        $this->translator = $translator;
    }

    /**
     * @param WorkflowDefinition $definition
     * @param array $configuration
     * @param array $transitionConfigurations
     *
     * @return ArrayCollection
     * @throws AssemblerException If configuration is invalid
     */
    public function assemble(WorkflowDefinition $definition, array $configuration, array $transitionConfigurations = [])
    {
        $entityAttributeName = $definition->getEntityAttributeName();
        if (!array_key_exists($entityAttributeName, $configuration)) {
            $configuration[$entityAttributeName] = array(
                'label' => $entityAttributeName,
                'type' => 'entity',
                'options' => array(
                    'class' => $definition->getRelatedEntity(),
                ),
            );
        }

        foreach ($transitionConfigurations as $transition) {
            if (!array_key_exists(WorkflowConfiguration::NODE_INIT_CONTEXT_ATTRIBUTE, $transition)) {
                continue;
            }

            $initContextAttribute = $transition[WorkflowConfiguration::NODE_INIT_CONTEXT_ATTRIBUTE];
            if (!array_key_exists($initContextAttribute, $configuration)) {
                $configuration[$initContextAttribute] = [
                    'label' => $initContextAttribute,
                    'type' => 'object',
                    'options' => [
                        'class' => ButtonSearchContext::class
                    ],
                ];
            }
        }

        $attributes = new ArrayCollection();
        foreach ($configuration as $name => $options) {
            $attribute = $this->assembleAttribute($definition, $name, $options);
            $attributes->set($name, $attribute);
        }

        return $attributes;
    }

    /**
     * @param WorkflowDefinition $definition
     * @param string $name
     * @param array $options
     * @return BaseAttribute
     */
    protected function assembleAttribute(WorkflowDefinition $definition, $name, array $options)
    {
        if (!empty($options['property_path'])) {
            $options = $this->guessOptions($options, $definition->getRelatedEntity(), $options['property_path']);
            if (empty($options['type'])) {
                throw new AssemblerException(
                    sprintf(
                        'Workflow "%s": Option "type" for attribute "%s" with property path "%s" can not be guessed',
                        $this->translator->trans(
                            $definition->getLabel(),
                            [],
                            WorkflowTranslationHelper::TRANSLATION_DOMAIN
                        ),
                        $name,
                        $options['property_path']
                    )
                );
            }
        }

        $this->assertOptions($options, array('label', 'type'));
        $this->assertAttributeEntityAcl($options);

        $attribute = new BaseAttribute();
        $attribute->setName($name);
        $attribute->setLabel($options['label']);
        $attribute->setType($options['type']);
        $attribute->setEntityAcl($this->getOption($options, 'entity_acl', array()));
        $attribute->setPropertyPath($this->getOption($options, 'property_path'));
        $attribute->setOptions($this->getOption($options, 'options', array()));

        $this->validateAttribute($attribute);

        return $attribute;
    }

    /**
     * @param array $options
     * @param string $rootClass
     * @param string $propertyPath
     * @return array
     */
    protected function guessOptions(array $options, $rootClass, $propertyPath)
    {
        $guessedOptions = array('label', 'type', 'options');
        $needGuess = false;
        foreach ($guessedOptions as $option) {
            if (empty($options[$option])) {
                $needGuess = true;
                break;
            }
        }

        if (!$needGuess) {
            return $options;
        }

        $attributeParameters = $this->attributeGuesser->guessParameters($rootClass, $propertyPath);
        if ($attributeParameters) {
            foreach ($guessedOptions as $option) {
                if (!empty($attributeParameters[$option])) {
                    if (empty($options[$option])) {
                        $options[$option] = $attributeParameters[$option];
                    } elseif ($option === 'label') {
                        $options[$option] = $this->guessOptionLabel($options, $attributeParameters);
                    }
                }
            }
        }

        return $options;
    }

    /**
     * @param array $options
     * @param array $attributeParameters
     * @return string
     */
    private function guessOptionLabel(array $options, array $attributeParameters)
    {
        $domain = WorkflowTranslationHelper::TRANSLATION_DOMAIN;

        if ($this->translator->trans($options['label'], [], $domain) === $options['label']) {
            $options['label'] = $attributeParameters['label'];
        }

        return $options['label'];
    }

    /**
     * @param array $options
     * @throws AssemblerException
     */
    protected function assertAttributeEntityAcl(array $options)
    {
        if ($options['type'] !== 'entity' && array_key_exists('entity_acl', $options)) {
            throw new AssemblerException(
                sprintf(
                    'Attribute "%s" with type "%s" can\'t have entity ACL',
                    $options['label'],
                    $options['type']
                )
            );
        }
    }

    /**
     * @param BaseAttribute $attribute
     * @throws AssemblerException If attribute is invalid
     */
    protected function validateAttribute(BaseAttribute $attribute)
    {
        $this->assertAttributeHasValidType($attribute);

        $attributeType = $attribute->getType();
        if ('object' === $attributeType || 'entity' === $attributeType) {
            $this->assertParameterHasClassOption($attribute);
        } else {
            $this->assertParameterHasNoOptions($attribute, ['class']);
        }
    }

    /**
     * @param BaseAttribute $attribute
     * @throws AssemblerException If attribute is invalid
     */
    protected function assertAttributeHasValidType(BaseAttribute $attribute)
    {
        $attributeType = $attribute->getType();
        $allowedTypes = array('bool', 'boolean', 'int', 'integer', 'float', 'string', 'array', 'object', 'entity');

        if (!in_array($attributeType, $allowedTypes)) {
            throw new AssemblerException(
                sprintf(
                    'Invalid attribute type "%s", allowed types are "%s"',
                    $attributeType,
                    implode('", "', $allowedTypes)
                )
            );
        }
    }
}

<?php

namespace Oro\Bundle\ProductBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Oro\Bundle\ProductBundle\Form\Type\Traits\ProductAwareTrait;
use Oro\Bundle\ProductBundle\Visibility\ProductUnitFieldsSettingsInterface;

class ChoicesProductPrimaryUnitSelectionOwnerTypeExtension extends AbstractTypeExtension
{
    use ProductAwareTrait;

    /**
     * @var ProductUnitFieldsSettingsInterface
     */
    private $productFormUnitFieldsSettings;

    /**
     * @var string
     */
    private $childName;

    /**
     * @var string
     */
    private $extendedType;

    /**
     * @param $childName
     * @param $extendedType
     * @param ProductUnitFieldsSettingsInterface $productFormUnitFieldsSettings
     */
    public function __construct(
        $childName,
        $extendedType,
        ProductUnitFieldsSettingsInterface $productFormUnitFieldsSettings
    ) {
        $this->childName = $childName;
        $this->extendedType = $extendedType;
        $this->productFormUnitFieldsSettings = $productFormUnitFieldsSettings;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(FormEvents::POST_SET_DATA, [$this, 'setAvailableUnits']);
    }

    /**
     * @param FormEvent $event
     */
    public function setAvailableUnits(FormEvent $event)
    {
        $form = $event->getForm();
        $child = $form->get($this->childName);
        if (!$child) {
            throw new \InvalidArgumentException(
                sprintf('Unknown %s child in %s', $this->childName, $this->getExtendedType())
            );
        }
        $options = $child->getConfig()->getOptions();
        $product = $this->getProduct($child);

        $options['choices'] = $this->productFormUnitFieldsSettings->getAvailablePrimaryUnitChoices($product);
        $options['choices_updated'] = true;
        $options['choice_loader'] = null;
        $options['choice_list'] = null;

        $form->add($child->getName(), $child->getConfig()->getType()->getName(), $options);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return $this->extendedType;
    }
}

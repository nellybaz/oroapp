<?php

namespace Oro\Bundle\ProductBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Range;

use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\CurrencyBundle\Rounding\RoundingServiceInterface;
use Oro\Bundle\ValidationBundle\Validator\Constraints\Decimal;

class QuantityType extends AbstractProductAwareType
{
    const NAME = 'oro_quantity';

    /** @var RoundingServiceInterface */
    protected $roundingService;

    /** @var string */
    protected $productClass;

    /**
     * @param RoundingServiceInterface $roundingService
     * @param string $productClass
     */
    public function __construct(RoundingServiceInterface $roundingService, $productClass)
    {
        $this->roundingService = $roundingService;
        $this->productClass = $productClass;
    }

    /** {@inheritdoc} */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(FormEvents::PRE_SET_DATA, [$this, 'roundQuantity'], -2048);
        $builder->addEventListener(FormEvents::POST_SET_DATA, [$this, 'roundQuantity'], -2048);
        $builder->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'roundQuantity'], -2048);
        $builder->addEventListener(FormEvents::POST_SUBMIT, [$this, 'roundQuantity'], -2048);

        $builder->addEventListener(FormEvents::PRE_SET_DATA, [$this, 'setDefaultData'], -1024);
        $builder->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'setDefaultData'], -1024);
    }

    /**
     * @param FormEvent $event
     */
    public function roundQuantity(FormEvent $event)
    {
        $scale = $this->getScale($event->getForm());
        if (null === $scale) {
            return;
        }

        $quantity = $event->getData();
        $formattedQuantity = $this->roundingService->round($quantity, $scale);

        if ($quantity !== $formattedQuantity) {
            if ($formattedQuantity === null) {
                $event->setData(null);
            } else {
                //number type expected string value in submitted data
                $event->setData((string)$formattedQuantity);
            }
        }
    }

    /**
     * @param FormInterface $form
     * @return int|null
     */
    protected function getScale(FormInterface $form)
    {
        $parent = $form->getParent();
        if (!$parent) {
            return null;
        }

        $options = $form->getConfig()->getOptions();
        $product = $this->getProduct($form);
        if (!$product) {
            return null;
        }

        $productUnitField = $options['product_unit_field'];
        if (!$parent->has($productUnitField)) {
            throw new \InvalidArgumentException(sprintf('Missing "%s" on form', $productUnitField));
        }

        $productUnit = $parent->get($productUnitField)->getData();
        if (!$productUnit instanceof ProductUnit) {
            return null;
        }

        $scale = $product->getUnitPrecision($productUnit->getCode());
        if ($scale) {
            return $scale->getPrecision();
        }

        return $productUnit->getDefaultPrecision();
    }

    /**
     * @param FormEvent $event
     */
    public function setDefaultData(FormEvent $event)
    {
        $options = $event->getForm()->getConfig()->getOptions();

        $defaultData = $options['default_data'];
        if (!is_numeric($defaultData)) {
            return;
        }

        $data = $event->getData();
        if (!$data) {
            if ($defaultData === null) {
                $event->setData(null);
            } else {
                //number type expected string value in submitted data
                $event->setData((string)$defaultData);
            }
        }
    }

    /** {@inheritdoc} */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(
            [
                'product_unit_field' => 'productUnit',
                'default_data' => null,
                'constraints' => [new Range(['min' => 0]), new Decimal()],
            ]
        );

        $resolver->setAllowedTypes('product_unit_field', 'string');
    }

    /** {@inheritDoc} */
    public function getParent()
    {
        return 'number';
    }

    /** {@inheritDoc} */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return self::NAME;
    }
}

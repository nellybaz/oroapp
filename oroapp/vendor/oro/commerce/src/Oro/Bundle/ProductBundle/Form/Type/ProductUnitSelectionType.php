<?php

namespace Oro\Bundle\ProductBundle\Form\Type;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Formatter\ProductUnitLabelFormatter;
use Oro\Bundle\ProductBundle\Model\ProductUnitHolderInterface;
use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatorInterface;

class ProductUnitSelectionType extends AbstractProductAwareType
{
    const NAME = 'oro_product_unit_selection';

    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @var ProductUnitLabelFormatter
     */
    protected $productUnitFormatter;

    /**
     * @var string
     */
    protected $entityClass;

    /**
     * @param ProductUnitLabelFormatter $productUnitFormatter
     * @param TranslatorInterface $translator
     */
    public function __construct(ProductUnitLabelFormatter $productUnitFormatter, TranslatorInterface $translator)
    {
        $this->productUnitFormatter = $productUnitFormatter;
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(FormEvents::POST_SET_DATA, [$this, 'setAcceptableUnits']);
        $builder->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'validateUnits']);
    }

    /**
     * @param FormEvent $event
     */
    public function setAcceptableUnits(FormEvent $event)
    {
        $form = $event->getForm();
        $options = $form->getConfig()->getOptions();

        if ($options['choices_updated']) {
            return;
        }

        $formParent = $form->getParent();
        if (!$formParent) {
            return;
        }

        $product = $this->getProduct($form);
        if (!$product) {
            return;
        }

        $options['choices'] = $this->getProductUnits($form, $product);
        $options['choices_updated'] = true;

        $formParent->add($form->getName(), static::class, $options);
    }

    /**
     * @param FormEvent $event
     */
    public function validateUnits(FormEvent $event)
    {
        $form = $event->getForm();
        $product = $this->getProduct($form);
        if (!$product || !$product->getId()) {
            return;
        }

        $units = $this->getProductUnits($form, $product);
        $data = $event->getData();
        foreach ($units as $unit) {
            if ($unit->getCode() === $data) {
                return;
            }
        }

        $form->addError(
            new FormError(
                $this->translator->trans('oro.product.productunit.invalid', [], 'validators')
            )
        );
    }

    /**
     * @param FormInterface $form
     * @param Product|null $product
     * @return ProductUnit[]
     */
    protected function getProductUnits(FormInterface $form, Product $product = null)
    {
        $options = $form->getConfig()->getOptions();
        $sell = $options['sell'];
        $choices = [];

        if ($product) {
            foreach ($product->getAdditionalUnitPrecisions() as $unitPrecision) {
                if ($sell === null) {
                    $choices[] = $unitPrecision->getUnit();
                } elseif ($sell === $unitPrecision->isSell()) {
                    $choices[] = $unitPrecision->getUnit();
                }
            }

            $primaryUnitPrecision = $product->getPrimaryUnitPrecision();
            if ($primaryUnitPrecision) {
                $primaryUnit = $primaryUnitPrecision->getUnit();
                array_unshift($choices, $primaryUnit);
            }
        }

        return $choices;
    }

    /**
     * @param string $entityClass
     */
    public function setEntityClass($entityClass)
    {
        $this->entityClass = $entityClass;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(
            [
                'class' => $this->entityClass,
                'property' => 'code',
                'compact' => false,
                'choices_updated' => false,
                'required' => true,
                'empty_label' => 'oro.product.productunit.removed',
                'sell' => null
            ]
        );
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $formParent = $form->getParent();
        if (!$formParent) {
            return;
        }

        /**
         * @var ProductUnitHolderInterface $productUnitHolder
         */
        $productUnitHolder = $formParent->getData();
        if (!$productUnitHolder) {
            $this->formatChoiceViews($view, $options);
            return;
        }

        $productHolder = $productUnitHolder->getProductHolder();
        if (!$productHolder || !$productHolder->getProduct()) {
            $this->formatChoiceViews($view, $options);
            return;
        }

        $product = $productHolder->getProduct();
        $choices = $this->getProductUnits($form, $product);
        $view->vars['choices'] = [];

        $productUnit = $productUnitHolder->getProductUnit();

        if ($this->isProductUnitRemoved($productUnitHolder, $product, $choices, $productUnit)) {
            $removedValue = $this->translator->trans($productUnitHolder->getProductUnitCode());
            $removedValueTitle = $this->translator->trans(
                $options['empty_label'],
                ['{title}' => $productUnitHolder->getProductUnitCode()]
            );
            $view->vars['choices'][] = new ChoiceView(null, $removedValue, $removedValueTitle, ['selected' => true]);
        }

        $this->setChoicesViews($view, $choices, $options);
    }

    /**
     * @param ProductUnit $productUnit
     * @param ProductUnitHolderInterface $productUnitHolder
     * @param Product $product
     * @param array $choices
     *
     * @return bool
     */
    protected function isProductUnitRemoved(
        ProductUnitHolderInterface $productUnitHolder,
        Product $product,
        array $choices,
        ProductUnit $productUnit = null
    ) {
        return (!$productUnit && $productUnitHolder->getEntityIdentifier())
        || ($product && $productUnit && !in_array($productUnit, $choices, true));
    }

    /**
     * @param FormView $view
     * @param array $options
     */
    protected function formatChoiceViews(FormView $view, array $options)
    {
        /**
         * @var ChoiceView $choiceView
         */
        foreach ($view->vars['choices'] as $choiceView) {
            $choiceView->label = $this->productUnitFormatter->format($choiceView->value, $options['compact']);
        }
    }

    /**
     * @param FormView $view
     * @param array $choices
     * @param array $options
     */
    protected function setChoicesViews(FormView $view, array $choices, array $options)
    {
        $choices = $this->productUnitFormatter->formatChoices($choices, $options['compact']);
        foreach ($choices as $key => $value) {
            $view->vars['choices'][] = new ChoiceView($value, $key, $value);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        return 'entity';
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return static::NAME;
    }
}

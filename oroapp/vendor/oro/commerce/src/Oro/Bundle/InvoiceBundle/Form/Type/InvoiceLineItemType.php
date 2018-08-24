<?php

namespace Oro\Bundle\InvoiceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\CurrencyBundle\Form\Type\PriceType;
use Oro\Bundle\PricingBundle\Rounding\PriceRoundingService;
use Oro\Bundle\ProductBundle\Form\Type\ProductSelectType;
use Oro\Bundle\ProductBundle\Form\Type\ProductUnitSelectionType;
use Oro\Bundle\ProductBundle\Form\Type\QuantityType;
use Oro\Bundle\ProductBundle\Provider\ProductUnitsProvider;
use Oro\Bundle\PricingBundle\Form\Type\PriceTypeSelectorType;
use Oro\Bundle\InvoiceBundle\Entity\InvoiceLineItem;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class InvoiceLineItemType extends AbstractType
{
    const NAME = 'oro_invoice_line_item';

    /**
     * @var string
     */
    protected $dataClass;

    /**
     * @var PriceRoundingService
     */
    protected $priceRounding;

    /**
     * @var ProductUnitsProvider
     */
    protected $productUnitsProvider;

    /**
     * @param PriceRoundingService $priceRoundingService
     * @param ProductUnitsProvider $productUnitsProvider
     */
    public function __construct(
        PriceRoundingService $priceRoundingService,
        ProductUnitsProvider $productUnitsProvider
    ) {
        $this->priceRounding = $priceRoundingService;
        $this->productUnitsProvider = $productUnitsProvider;
    }

    /**
     * @param string $dataClass
     */
    public function setDataClass($dataClass)
    {
        $this->dataClass = $dataClass;
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['page_component'] = $options['page_component'];
        $view->vars['page_component_options'] = $options['page_component_options'];
        $view->vars['page_component_options']['currency'] = $options['currency'];
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'product',
                ProductSelectType::NAME,
                [
                    'required' => false,
                    'label' => 'oro.product.entity_label',
                    'create_enabled' => false,
                ]
            )
            ->add(
                'productSku',
                'text',
                [
                    'required' => false,
                    'label' => 'oro.product.sku.label',
                ]
            )
            ->add(
                'freeFormProduct',
                'text',
                [
                    'required' => false,
                    'label' => 'oro.product.entity_label',
                ]
            )
            ->add(
                'quantity',
                QuantityType::NAME,
                [
                    'required' => true,
                    'label' => 'oro.order.invoicelineitem.quantity.label',
                    'default_data' => 1,
                    'product_holder' => $builder->getData(),
                ]
            )
            ->add(
                'productUnit',
                ProductUnitSelectionType::NAME,
                [
                    'label' => 'oro.product.productunit.entity_label',
                    'required' => true,
                ]
            )
            ->add(
                'price',
                PriceType::NAME,
                [
                    'error_bubbling' => false,
                    'required' => true,
                    'label' => 'oro.invoice.invoicelineitem.price.label',
                    'hide_currency' => true,
                    'default_currency' => $options['currency'],
                ]
            )
            ->add('sortOrder', 'hidden')
            ->add(
                'priceType',
                PriceTypeSelectorType::NAME
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(['currency']);
        $resolver->setDefaults(
            [
                'data_class' => $this->dataClass,
                'intention' => 'invoice_line_item',
                'page_component' => 'oroui/js/app/components/view-component',
                'page_component_options' => [
                    'view' => 'oroinvoice/js/app/views/invoice-line-item-view',
                    'freeFormUnits' => $this->getFreeFormUnits(),
                    'precision' => $this->priceRounding->getPrecision()
                ],
                'currency' => null,
            ]
        );
        $resolver->setAllowedTypes('page_component_options', 'array');
        $resolver->setAllowedTypes('page_component', 'string');
        $resolver->setAllowedTypes('currency', ['null', 'string']);
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $product = null;
        if ($view->vars['value']) {
            /* @var $lineItem InvoiceLineItem */
            $lineItem = $view->vars['value'];

            if ($lineItem->getProduct()) {
                $product = $lineItem->getProduct();
            }
        }

        if ($product) {
            $modelAttr['product_units'] = $product->getAvailableUnitsPrecision();
            $view->vars['page_component_options']['modelAttr'] = $modelAttr;
        }
    }

    /**
     * {@inheritdoc}
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
        return self::NAME;
    }

    /**
     * @return array
     */
    protected function getFreeFormUnits()
    {
        return $this->productUnitsProvider->getAvailableProductUnitsWithPrecision();
    }
}

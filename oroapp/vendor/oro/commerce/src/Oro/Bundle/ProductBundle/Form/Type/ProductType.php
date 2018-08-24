<?php

namespace Oro\Bundle\ProductBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

use Oro\Bundle\EntityBundle\Entity\EntityFieldFallbackValue;
use Oro\Bundle\EntityBundle\Fallback\Provider\SystemConfigFallbackProvider;
use Oro\Bundle\EntityBundle\Form\Type\EntityFieldFallbackValueType;
use Oro\Bundle\FormBundle\Form\Extension\StripTagsExtension;
use Oro\Bundle\FormBundle\Form\Type\OroRichTextType;
use Oro\Bundle\FrontendBundle\Form\DataTransformer\PageTemplateEntityFieldFallbackValueTransformer;
use Oro\Bundle\FrontendBundle\Form\Type\PageTemplateType;
use Oro\Bundle\LocaleBundle\Form\Type\LocalizedFallbackValueCollectionType;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision;
use Oro\Bundle\ProductBundle\Provider\DefaultProductUnitProviderInterface;
use Oro\Bundle\RedirectBundle\Form\Type\LocalizedSlugWithRedirectType;

class ProductType extends AbstractType
{
    const NAME = 'oro_product';
    const PAGE_TEMPLATE_ROUTE_NAME = 'oro_product_frontend_product_view';

    /**
     * @var string
     */
    protected $dataClass;

    /**
     * @var DefaultProductUnitProviderInterface
     */
    private $provider;

    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;

    /**
     * @param DefaultProductUnitProviderInterface $provider
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(
        DefaultProductUnitProviderInterface $provider,
        UrlGeneratorInterface $urlGenerator
    ) {
        $this->provider = $provider;
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param string $dataClass
     */
    public function setDataClass($dataClass)
    {
        $this->dataClass = $dataClass;
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     *
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sku', 'text', ['required' => true, 'label' => 'oro.product.sku.label'])
            ->add('status', ProductStatusType::NAME, ['label' => 'oro.product.status.label'])
            ->add('brand', BrandSelectType::NAME, ['label' => 'oro.product.brand.label'])
            ->add(
                'inventory_status',
                'oro_enum_select',
                [
                    'label'     => 'oro.product.inventory_status.label',
                    'enum_code' => 'prod_inventory_status',
                    'configs'   => ['allowClear' => false]
                ]
            )
            ->add(
                'names',
                LocalizedFallbackValueCollectionType::NAME,
                [
                    'label' => 'oro.product.names.label',
                    'required' => true,
                    'options' => [
                        'constraints' => [new NotBlank(['message' => 'oro.product.names.blank'])],
                        StripTagsExtension::OPTION_NAME => true,
                    ],
                ]
            )
            ->add(
                'descriptions',
                LocalizedFallbackValueCollectionType::NAME,
                [
                    'label' => 'oro.product.descriptions.label',
                    'required' => false,
                    'field' => 'text',
                    'type' => OroRichTextType::NAME,
                    'options' => [
                        'wysiwyg_options' => [
                            'statusbar' => true,
                            'resize' => true,
                            'width' => 500,
                            'height' => 300,
                        ],
                    ],
                ]
            )
            ->add(
                'shortDescriptions',
                LocalizedFallbackValueCollectionType::NAME,
                [
                    'label' => 'oro.product.short_descriptions.label',
                    'required' => false,
                    'field' => 'text',
                    'type' => OroRichTextType::NAME,
                    'options' => [
                        'wysiwyg_options' => [
                            'statusbar' => true,
                            'resize' => true,
                            'width' => 500,
                            'height' => 300,
                        ]
                    ]
                ]
            )
            ->add(
                'primaryUnitPrecision',
                ProductPrimaryUnitPrecisionType::NAME,
                [
                    'label'          => 'oro.product.primary_unit_precision.label',
                    'tooltip'        => 'oro.product.form.tooltip.unit_precision',
                    'error_bubbling' => false,
                    'required'       => true,
                    'mapped'         => false,
                ]
            )
            ->add(
                'additionalUnitPrecisions',
                ProductUnitPrecisionCollectionType::NAME,
                [
                    'label'          => 'oro.product.additional_unit_precisions.label',
                    'tooltip'        => 'oro.product.form.tooltip.unit_precision',
                    'error_bubbling' => false,
                    'required'       => false,
                    'mapped'         => false,
                ]
            )
            ->add(
                'images',
                ProductImageCollectionType::NAME,
                ['required' => false]
            )
            ->add(
                'pageTemplate',
                EntityFieldFallbackValueType::class,
                [
                    'value_type' => PageTemplateType::class,
                    'value_options' => [
                        'route_name' => self::PAGE_TEMPLATE_ROUTE_NAME
                    ]
                ]
            )
            ->add('type', HiddenType::class)

            ->add(
                'slugPrototypesWithRedirect',
                LocalizedSlugWithRedirectType::NAME,
                [
                    'label'    => 'oro.product.slug_prototypes.label',
                    'required' => false,
                    'source_field' => 'names'
                ]
            )
            ->add('featured', ChoiceType::class, [
                'label' => 'oro.product.featured.label',
                'choices' => ['oro.product.featured.no', 'oro.product.featured.yes'],
                'empty_value' => false,
            ])
            ->add('newArrival', ChoiceType::class, [
                'label' => 'oro.product.new_arrival.label',
                'tooltip' => 'oro.product.form.tooltip.new_arrival',
                'choices' => ['oro.product.new_arrival.no', 'oro.product.new_arrival.yes'],
                'empty_value' => false,
            ])
            ->addEventListener(FormEvents::PRE_SET_DATA, [$this, 'preSetDataListener'])
            ->addEventListener(FormEvents::POST_SET_DATA, [$this, 'postSetDataListener'])
            ->addEventListener(FormEvents::SUBMIT, [$this, 'submitListener']);

        $builder->get('pageTemplate')
            ->addModelTransformer(new PageTemplateEntityFieldFallbackValueTransformer(self::PAGE_TEMPLATE_ROUTE_NAME));
    }

    /**
     * @param FormEvent $event
     */
    public function preSetDataListener(FormEvent $event)
    {
        /** @var Product $product */
        $product = $event->getData();
        $form = $event->getForm();

        if (!$product->getPageTemplate()) {
            $entityFallback = new EntityFieldFallbackValue();
            $entityFallback->setFallback(SystemConfigFallbackProvider::FALLBACK_ID);
            $product->setPageTemplate($entityFallback);
        }
        $form->add(
            'variantFields',
            ProductCustomVariantFieldsCollectionType::NAME,
            [
                'label' => 'oro.product.variant_fields.label',
                'tooltip' => 'oro.product.form.tooltip.variant_fields',
                'required' => false,
                'attributeFamily' => $product->getAttributeFamily()
            ]
        );

        if ($product->getId() == null) {
            $form->remove('primaryUnitPrecision');
            $form->add(
                'primaryUnitPrecision',
                ProductPrimaryUnitPrecisionType::NAME,
                [
                    'label'          => 'oro.product.primary_unit_precision.label',
                    'tooltip'        => 'oro.product.form.tooltip.unit_precision',
                    'error_bubbling' => false,
                    'required'       => true,
                    'data'           => $this->provider->getDefaultProductUnitPrecision()
                ]
            );
        }

        if ($product->getId()) {
            $url = $this->urlGenerator->generate('oro_product_get_changed_slugs', ['id' => $product->getId()]);

            $form->add(
                'slugPrototypesWithRedirect',
                LocalizedSlugWithRedirectType::NAME,
                [
                    'label'    => 'oro.product.slug_prototypes.label',
                    'required' => false,
                    'source_field' => 'names',
                    'get_changed_slugs_url' => $url
                ]
            );
        }

        if ($product instanceof Product && $product->isConfigurable()) {
            $form
                ->add(
                    'variantLinks',
                    ProductVariantLinksType::NAME,
                    ['product_class' => $this->dataClass, 'by_reference' => false]
                );
        }
    }

    /**
     * @param FormEvent $event
     */
    public function postSetDataListener(FormEvent $event)
    {
        /** @var Product $product */
        $product = $event->getData();
        $form = $event->getForm();

        // manual mapping
        $precisionForm = $form->get('primaryUnitPrecision');
        if (empty($precisionForm->getData())) {
            // clone is required to prevent data modification by reference
            $precisionForm->setData(clone $product->getPrimaryUnitPrecision());
        }
        $form->get('additionalUnitPrecisions')->setData($product->getAdditionalUnitPrecisions());
    }

    /**
     * @param FormEvent $event
     */
    public function submitListener(FormEvent $event)
    {
        /** @var Product $product */
        $product = $event->getData();
        $form = $event->getForm();

        $primaryPrecision = $form->get('primaryUnitPrecision')->getData();
        if ($primaryPrecision) {
            $product->setPrimaryUnitPrecision($primaryPrecision);
        }

        /** @var ProductUnitPrecision[] $additionalPrecisions */
        $additionalPrecisions = $form->get('additionalUnitPrecisions')->getData();
        foreach ($additionalPrecisions as $key => $precision) {
            $existingPrecision = $product->getUnitPrecision($precision->getProductUnitCode());
            if ($existingPrecision) {
                // refresh precision object data to prevent problems with property accessor
                $product->addAdditionalUnitPrecision($precision);
                $additionalPrecisions[$key] = $existingPrecision;
            }
        }
        PropertyAccess::createPropertyAccessor()->setValue($product, 'additionalUnitPrecisions', $additionalPrecisions);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => $this->dataClass,
            'intention' => 'product',
            'enable_attributes' => true,
            'enable_attribute_family' => true,
        ]);
    }

    /**
     * @return string
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
}

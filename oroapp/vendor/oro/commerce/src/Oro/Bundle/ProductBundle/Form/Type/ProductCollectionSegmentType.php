<?php

namespace Oro\Bundle\ProductBundle\Form\Type;

use Oro\Bundle\FormBundle\Utils\FormUtils;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Service\ProductCollectionDefinitionConverter;
use Oro\Bundle\QueryDesignerBundle\Validator\NotBlankFilters;
use Oro\Bundle\SegmentBundle\Entity\Segment;
use Oro\Bundle\SegmentBundle\Form\Type\SegmentFilterBuilderType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\DataMapperInterface;
use Symfony\Component\Form\Extension\Core\DataMapper\PropertyPathMapper;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccessor;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Valid;

class ProductCollectionSegmentType extends AbstractType implements DataMapperInterface
{
    const NAME = 'oro_product_collection_segment_type';
    const DEFINITION = 'definition';
    const INCLUDED_PRODUCTS = 'includedProducts';
    const EXCLUDED_PRODUCTS = 'excludedProducts';
    const DEFAULT_SCOPE_VALUE = 'productCollectionSegment';

    /**
     * @var ProductCollectionDefinitionConverter
     */
    private $definitionConverter;

    /**
     * @var PropertyAccessor
     */
    private $propertyAccessor;

    /**
     * @var PropertyPathMapper
     */
    private $propertyPathMapper;

    /**
     * @param ProductCollectionDefinitionConverter $definitionConverter
     * @param PropertyAccessor $propertyAccessor
     */
    public function __construct(
        ProductCollectionDefinitionConverter $definitionConverter,
        PropertyAccessor $propertyAccessor
    ) {
        $this->definitionConverter = $definitionConverter;
        $this->propertyAccessor = $propertyAccessor;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(self::INCLUDED_PRODUCTS, HiddenType::class, ['mapped' => false])
            ->add(self::EXCLUDED_PRODUCTS, HiddenType::class, ['mapped' => false])
            ->setDataMapper($this);

        // Make segment name required for existing segments
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($options) {
                $segment = $event->getData();
                if ($options['add_name_field'] && $segment instanceof Segment && $segment->getId()) {
                    FormUtils::replaceField(
                        $event->getForm(),
                        'name',
                        [
                            'required' => true,
                            'constraints' => [new NotBlank()]
                        ]
                    );
                }
            }
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return SegmentFilterBuilderType::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return self::NAME;
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
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'results_grid' => 'product-collection-grid',
            'included_products_grid' => 'product-collection-included-products-grid',
            'excluded_products_grid' => 'product-collection-excluded-products-grid',
            'label' => false,
            'segment_entity' => Product::class,
            'segment_columns' => ['id', 'sku'],
            'segment_name_template' => 'Product Collection %s',
            'constraints' => [
                new NotBlank(),
                new Valid(),
                new NotBlankFilters(['message' => 'oro.product.product_collection.blank_filters_or_included']),
            ],
            'error_bubbling' => false,
            'scope_value' => self::DEFAULT_SCOPE_VALUE,
            'condition_builder_validation' => [
                'condition-item' =>  [
                    'NotBlank' => ['message' => 'oro.product.product_collection.blank_condition_item'],
                ],
                'conditions-group' => [
                    'NotBlank' => ['message' => 'oro.product.product_collection.blank_condition_group'],
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['scopeValue'] = $options['scope_value'];
        $view->vars['results_grid'] = $options['results_grid'];
        $view->vars['includedProductsGrid'] = $options['included_products_grid'];
        $view->vars['excludedProductsGrid'] = $options['excluded_products_grid'];

        $segmentDefinitionView = $view->children[self::DEFINITION];
        $view->vars['segmentDefinitionFieldName'] = $segmentDefinitionView->vars['full_name'];
        $view->vars['segmentDefinition'] = $segmentDefinitionView->vars['value'];
        $view->vars['hasFilters'] = $this->definitionConverter->hasFilters($view->vars['segmentDefinition']);
        $view->vars['addNameField'] = $options['add_name_field'];
    }

    /**
     * {@inheritdoc}
     */
    public function mapDataToForms($data, $forms)
    {
        $this->getPropertyPathMapper()->mapDataToForms($data, $forms);
        /** @var Form[]|\Traversable $forms */
        $forms = iterator_to_array($forms);

        if ($data instanceof Segment) {
            $definitionParts = $this->definitionConverter->getDefinitionParts($data->getDefinition());

            if (isset($forms[self::DEFINITION])) {
                $forms[self::DEFINITION]
                    ->setData($definitionParts[ProductCollectionDefinitionConverter::DEFINITION_KEY]);
            }

            if (isset($forms[self::INCLUDED_PRODUCTS])) {
                $forms[self::INCLUDED_PRODUCTS]
                    ->setData($definitionParts[ProductCollectionDefinitionConverter::INCLUDED_FILTER_KEY]);
            }

            if (isset($forms[self::EXCLUDED_PRODUCTS])) {
                $forms[self::EXCLUDED_PRODUCTS]
                    ->setData($definitionParts[ProductCollectionDefinitionConverter::EXCLUDED_FILTER_KEY]);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function mapFormsToData($forms, &$data)
    {
        $this->getPropertyPathMapper()->mapFormsToData($forms, $data);
        /** @var Form[]|\Traversable $forms */
        $forms = iterator_to_array($forms);

        $segmentDefinition = $this->definitionConverter->putConditionsInDefinition(
            $forms[self::DEFINITION]->getData(),
            $forms[self::EXCLUDED_PRODUCTS]->getData(),
            $forms[self::INCLUDED_PRODUCTS]->getData()
        );

        $data->setDefinition($segmentDefinition);
    }

    /**
     * @return PropertyPathMapper
     */
    private function getPropertyPathMapper()
    {
        if (!$this->propertyPathMapper) {
            $this->propertyPathMapper = new PropertyPathMapper($this->propertyAccessor);
        }

        return $this->propertyPathMapper;
    }
}

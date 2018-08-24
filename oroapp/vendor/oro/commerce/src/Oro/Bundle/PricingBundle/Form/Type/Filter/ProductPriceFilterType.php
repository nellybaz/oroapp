<?php

namespace Oro\Bundle\PricingBundle\Form\Type\Filter;

use Doctrine\Common\Persistence\ManagerRegistry;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\FilterBundle\Form\Type\Filter\NumberRangeFilterType;
use Oro\Bundle\ProductBundle\Formatter\ProductUnitLabelFormatter;

class ProductPriceFilterType extends AbstractType
{
    const NAME = 'oro_pricing_product_price_filter';

    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @var ManagerRegistry
     */
    protected $registry;

    /**
     * @var ProductUnitLabelFormatter
     */
    protected $formatter;

    /**
     * @param TranslatorInterface       $translator
     * @param ManagerRegistry           $registry
     * @param ProductUnitLabelFormatter $formatter
     */
    public function __construct(
        TranslatorInterface $translator,
        ManagerRegistry $registry,
        ProductUnitLabelFormatter $formatter
    ) {
        $this->translator = $translator;
        $this->registry = $registry;
        $this->formatter = $formatter;
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
        return self::NAME;
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        return NumberRangeFilterType::NAME;
    }

    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'unit',
            'choice',
            [
                'required' => true,
                'choices' => $this->getUnitChoices(),
            ]
        );
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $operatorChoices = [
            NumberRangeFilterType::TYPE_BETWEEN            =>
                $this->translator->trans('oro.filter.form.label_type_range_between'),
            NumberRangeFilterType::TYPE_EQUAL              =>
                $this->translator->trans('oro.filter.form.label_type_range_equals'),
            NumberRangeFilterType::TYPE_GREATER_THAN       =>
                $this->translator->trans('oro.filter.form.label_type_range_more_than'),
            NumberRangeFilterType::TYPE_LESS_THAN          =>
                $this->translator->trans('oro.filter.form.label_type_range_less_than'),
            NumberRangeFilterType::TYPE_GREATER_EQUAL      =>
                $this->translator->trans('oro.filter.form.label_type_range_more_equals'),
            NumberRangeFilterType::TYPE_LESS_EQUAL         =>
                $this->translator->trans('oro.filter.form.label_type_range_less_equals'),
        ];

        $resolver->setDefaults([
            'data_type' => NumberRangeFilterType::DATA_DECIMAL,
            'operator_choices' => $operatorChoices,
        ]);
    }

    /**
     * Get choices list for unit field.
     *
     * @return array
     */
    protected function getUnitChoices()
    {
        $unitCodes = $this->registry
            ->getManagerForClass('OroProductBundle:ProductUnit')
            ->getRepository('OroProductBundle:ProductUnit')
            ->getAllUnitCodes();

        $choices = [];
        foreach ($unitCodes as $unitCode) {
            $choices[$unitCode] = $this->formatter->format($unitCode);
        }

        return $choices;
    }
}

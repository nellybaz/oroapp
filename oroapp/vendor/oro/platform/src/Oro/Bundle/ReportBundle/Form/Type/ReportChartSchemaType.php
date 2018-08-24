<?php

namespace Oro\Bundle\ReportBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\QueryDesignerBundle\QueryDesigner\Manager;
use Symfony\Component\Validator\Constraints\NotBlank;

class ReportChartSchemaType extends AbstractType
{
    const VIEW_MODULE_NAME = 'ororeport/js/app/views/report-chart-data-schema-view';

    /**
     * @var Manager
     */
    protected $manager;

    /**
     * @param Manager $manager
     */
    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        foreach ($options['data_schema'] as $schemaOptions) {
            $excludedProperties = [];

            if (isset($schemaOptions['type_filter']) && $schemaOptions['type_filter']) {
                $excludedProperties = array_merge(
                    $excludedProperties,
                    $this->manager->getExcludedProperties($schemaOptions['type_filter'])
                );
            }

            $fieldOptions = [
                'label'    => $schemaOptions['label'],
                'required' => $schemaOptions['required'],
                'attr'     => [
                    'data-type-filter'               => json_encode($excludedProperties),
                    'data-validation-optional-group' => true,
                    'data-validation'                => json_encode(['NotBlank' => []])
                ]
            ];

            $builder->add(
                $schemaOptions['name'],
                $schemaOptions['default_type'] !== 'boolean' ? 'text' : 'checkbox',
                $fieldOptions
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['attr']['data-page-component-view'] = self::VIEW_MODULE_NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setRequired(['data_schema']);
        $resolver->setAllowedTypes(['data_schema' => 'array']);
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
        return 'oro_report_chart_data_schema';
    }
}

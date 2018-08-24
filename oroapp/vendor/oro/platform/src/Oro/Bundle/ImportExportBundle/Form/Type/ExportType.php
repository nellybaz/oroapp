<?php

namespace Oro\Bundle\ImportExportBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\ImportExportBundle\Form\Model\ExportData;
use Oro\Bundle\ImportExportBundle\Processor\ProcessorRegistry;

class ExportType extends AbstractType
{
    const NAME = 'oro_importexport_export';

    /**
     * @var ProcessorRegistry
     */
    protected $processorRegistry;

    /**
     * @param ProcessorRegistry $processorRegistry
     */
    public function __construct(ProcessorRegistry $processorRegistry)
    {
        $this->processorRegistry = $processorRegistry;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'processorAlias',
            'choice',
            [
                'label' => 'oro.importexport.export.popup.options.label',
                'choices' => $this->getExportProcessorsChoices($options),
                'required' => true,
                'placeholder' => false,
            ]
        );
    }

    /**
     * @param array $options
     * @return array
     */
    protected function getExportProcessorsChoices($options)
    {
        $entityName = $options['entityName'];
        $processorAlias = $options['processorAlias'] ?? null;
        
        $aliases = $this->processorRegistry->getProcessorAliasesByEntity(
            $this->getProcessorType(),
            $entityName
        );

        if (is_array($processorAlias) && count($processorAlias) > 0) {
            $aliases = array_intersect($aliases, $processorAlias);
        } elseif (is_string($processorAlias)) {
            $aliases = array_intersect($aliases, [$processorAlias]);
        }

        $result = [];
        foreach ($aliases as $alias) {
            $result[$alias] = $this->generateProcessorLabel($alias);
        }

        return $result;
    }

    /**
     * @return string
     */
    protected function getProcessorType()
    {
        return ProcessorRegistry::TYPE_EXPORT;
    }

    /**
     * @param string $alias
     * @return string
     */
    protected function generateProcessorLabel($alias)
    {
        return sprintf('oro.importexport.export.%s', $alias);
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ExportData::class,
            'processorAlias' => null
        ]);
        $resolver->setRequired(['entityName']);
        $resolver->setAllowedTypes([
            'entityName' => 'string',
            'processorAlias' => ['string', 'array', 'null']
        ]);
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
}

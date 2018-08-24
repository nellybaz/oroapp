<?php

namespace Oro\Bundle\ProductBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\EntityBundle\EntityConfig\DatagridScope;
use Oro\Bundle\EntityConfigBundle\Entity\FieldConfigModel;
use Oro\Bundle\EntityConfigBundle\Form\Extension\AttributeConfigExtensionApplicableTrait;
use Oro\Bundle\EntityConfigBundle\Provider\ConfigProvider;
use Oro\Bundle\ProductBundle\Entity\Product;

class AttributeConfigExtension extends AbstractTypeExtension
{
    use AttributeConfigExtensionApplicableTrait;

    /** @var array */
    protected static $frontendBlocks = ['attribute'];

    /** @var TranslatorInterface */
    protected $translator;

    /**
     * @param ConfigProvider $attributeConfigProvider
     * @param TranslatorInterface $translator
     */
    public function __construct(ConfigProvider $attributeConfigProvider, TranslatorInterface $translator)
    {
        $this->attributeConfigProvider = $attributeConfigProvider;
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $configModel = $options['config_model'];
        if ($configModel instanceof FieldConfigModel) {
            $className = $configModel->getEntity()->getClassName();
            if ($className === Product::class) {
                $builder->addEventListener(FormEvents::PRE_SET_DATA, [$this, 'onPreSetData']);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $configModel = $options['config_model'];
        if ($configModel instanceof FieldConfigModel && $this->isApplicable($configModel)) {
            $this->updateBlockConfig($view);
        }
    }

    /**
     * @param FormView $view
     */
    protected function updateBlockConfig(FormView $view)
    {
        if (!$view->children) {
            return;
        }

        foreach ($view->children as $child) {
            $this->updateBlockConfig($child);

            if (isset($child->vars['block']) && $child->vars['block'] !== 'general') {
                if ($child->vars['block'] === 'attribute') {
                    $child->vars['block'] = 'frontend';
                } else {
                    $child->vars['subblock'] = $child->vars['block'];
                    $child->vars['block'] = 'backend';
                }
            }

            $this->separateBlockConfig($child);
        }
    }

    /**
     * @param FormView $view
     */
    private function separateBlockConfig(FormView $view)
    {
        if (!empty($view->vars['block_config'])) {
            $blockConfig = [];

            foreach ($view->vars['block_config'] as $block => $config) {
                if ($block === 'general') {
                    $blockConfig[$block] = $config;
                    continue;
                }

                if (in_array($block, self::$frontendBlocks, true)) {
                    $parentBlock = 'frontend';
                    $parentBlockTitle = 'oro.product.entity_config.block_titles.frontend.label';
                    $parentBlockPriority = 20;

                    $config['title'] = null;
                } else {
                    $parentBlock = 'backend';
                    $parentBlockTitle = 'oro.product.entity_config.block_titles.backend.label';
                    $parentBlockPriority = 10;
                }

                $blockConfig[$parentBlock]['title'] = $this->translator->trans($parentBlockTitle);
                $blockConfig[$parentBlock]['priority'] = $parentBlockPriority;
                $blockConfig[$parentBlock]['subblocks'][$block] = $config;
            }

            $view->vars['block_config'] = $blockConfig;
        }
    }

    /**
     * @param FormEvent $event
     */
    public function onPreSetData(FormEvent $event)
    {
        $options = $event->getForm()->getConfig()->getOptions();

        /** @var FieldConfigModel $configModel */
        $configModel = $options['config_model'];
        $data = $event->getData();

        $support = $data['attribute']['is_attribute'] && null === $configModel->getId();
        if ($support && $this->hasDefaultValue($data, 'datagrid', 'is_visible')) {
            $data['datagrid']['is_visible'] = DatagridScope::IS_VISIBLE_HIDDEN;
        }

        $event->setData($data);
    }

    /**
     * @param array $data
     * @param string $scope
     * @param string $fieldName
     *
     * @return bool
     */
    private function hasDefaultValue(array $data, $scope, $fieldName)
    {
        return array_key_exists($scope, $data) && array_key_exists($fieldName, $data[$scope]);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return 'oro_entity_config_type';
    }
}

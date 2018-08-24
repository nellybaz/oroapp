<?php

namespace Oro\Bundle\EntityConfigBundle\Layout\Block\Type;

use Oro\Bundle\EntityConfigBundle\Entity\EntityConfigModel;
use Oro\Bundle\EntityConfigBundle\Entity\FieldConfigModel;
use Oro\Bundle\EntityConfigBundle\Manager\AttributeManager;

use Oro\Component\Layout\Block\OptionsResolver\OptionsResolver;
use Oro\Component\Layout\Block\Type\AbstractType;
use Oro\Component\Layout\Block\Type\Options;
use Oro\Component\Layout\BlockInterface;
use Oro\Component\Layout\BlockView;
use Oro\Component\Layout\Util\BlockUtils;

class AttributeTextType extends AbstractType
{
    const NAME = 'attribute_text';

    /** @var AttributeManager */
    protected $attributeManager;

    /**
     * @param AttributeManager $attributeManager
     */
    public function __construct(AttributeManager $attributeManager)
    {
        $this->attributeManager = $attributeManager;
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(BlockView $view, BlockInterface $block, Options $options)
    {
        $attributeProxy = $this->createAttributeProxy($options);
        $view->vars['label'] = $this->attributeManager->getAttributeLabel($attributeProxy);

        BlockUtils::setViewVarsFromOptions($view, $options, ['entity', 'value', 'fieldName', 'className']);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(
            [
                'entity',
                'fieldName',
                'className'
            ]
        );
        $resolver->setDefaults(
            [
                'value' => '=data["property_accessor"].getValue(entity, fieldName)',
                'visible' => '=data["attribute_config"].getConfig(className,fieldName).is("visible") && value !== null'
            ]
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * @param Options $options
     *
     * @return FieldConfigModel
     */
    protected function createAttributeProxy(Options $options)
    {
        $attribute = new FieldConfigModel($options['fieldName']);
        $attribute->setEntity(new EntityConfigModel($options['className']));

        return $attribute;
    }
}

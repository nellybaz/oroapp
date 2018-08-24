<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Form\Extension;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormConfigInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Form\ResolvedFormTypeInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Form\Type\ProductUnitSelectType;
use Oro\Bundle\ProductBundle\Formatter\ProductUnitLabelFormatter;
use Oro\Bundle\ProductBundle\Visibility\ProductUnitFieldsSettingsInterface;
use Oro\Bundle\ProductBundle\Form\Extension\ChoicesProductPrimaryUnitSelectionOwnerTypeExtension;

use Oro\Component\Testing\Unit\FormIntegrationTestCase;

class ChoicesProductPrimaryUnitSelectionOwnerTypeExtensionTest extends FormIntegrationTestCase
{
    /**
     * @var string|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $childName;

    /**
     * @var string|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $extendedType;

    /**
     * @var ProductUnitFieldsSettingsInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $productFormUnitFieldsSettings;

    /**
     * @var ChoicesProductPrimaryUnitSelectionOwnerTypeExtension
     */
    protected $choicesProductPrimaryUnitSelectionOwnerTypeExtension;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->childName = 'testChild';
        $this->productFormUnitFieldsSettings = $this->createMock(ProductUnitFieldsSettingsInterface::class);
        $this->choicesProductPrimaryUnitSelectionOwnerTypeExtension =
            new ChoicesProductPrimaryUnitSelectionOwnerTypeExtension(
                $this->childName,
                $this->extendedType,
                $this->productFormUnitFieldsSettings
            );
        parent::setUp();
    }

    public function testBuildForm()
    {
        /** @var FormBuilderInterface|\PHPUnit_Framework_MockObject_MockObject $builder */
        $builder = $this->createMock(FormBuilderInterface::class);
        $builder->expects($this->once())
            ->method('addEventListener');

        $this->choicesProductPrimaryUnitSelectionOwnerTypeExtension->buildForm($builder, []);
    }

    public function testBuildFormIntegration()
    {
        $choices = ['choice1', 'choice2'];
        $this->productFormUnitFieldsSettings
            ->method('getAvailablePrimaryUnitChoices')
            ->willReturn($choices);
        $formBuilder = $this->factory->createNamedBuilder('test');
        $formBuilder->add($this->childName, ProductUnitSelectType::NAME, $this->getDefaultOptions());
        $this->choicesProductPrimaryUnitSelectionOwnerTypeExtension->buildForm(
            $formBuilder,
            []
        );
        $form = $formBuilder->getForm();
        $form->setData([$this->childName => 'unit']);
        $options = $form->get($this->childName)->getConfig()->getOptions();
        $this->assertArrayHasKey('choices', $options);
        $this->assertSame($choices, $options['choices']);
    }

    public function testSetAvailableUnitsThrowsException()
    {
        /** @var FormEvent|\PHPUnit_Framework_MockObject_MockObject $event * */
        $event = $this->getMockBuilder(FormEvent::class)
            ->disableOriginalConstructor()
            ->getMock();
        $form = $this->createMock(FormInterface::class);
        $event->method('getForm')->willReturn($form);
        $this->expectException(\InvalidArgumentException::class);

        $this->choicesProductPrimaryUnitSelectionOwnerTypeExtension->setAvailableUnits($event);
    }

    /**
     * @return array
     */
    protected function getDefaultOptions()
    {
        return [
            'product_field' => 'test',
            'product' => $this->createMock(Product::class),
            'class' => ProductUnit::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtensions()
    {
        $formatter = $this->createMock(ProductUnitLabelFormatter::class);
        $productUnitSelectType = new ProductUnitSelectType($formatter);
        $type = $this->createMock(FormTypeInterface::class);
        $type->method('getName')->willReturn('entity');
        $type->method('setDefaultOptions')->willReturnCallback(
            function (OptionsResolverInterface $resolver) {
                $resolver->setDefined(['auto_initialize', 'choice_list', 'choice_loader', 'choices']);
            }
        );

        return [
            new PreloadedExtension(
                [
                    ProductUnitSelectType::NAME => $productUnitSelectType,
                    'entity' => $type,
                ],
                []
            ),
            $this->getValidatorExtension(true),
        ];
    }
}

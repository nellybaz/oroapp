<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\FormConfigInterface;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\Form\Test\FormIntegrationTestCase;
use Symfony\Component\Validator\Validation;

use Oro\Bundle\ProductBundle\Formatter\ProductUnitLabelFormatter;
use Oro\Bundle\ProductBundle\Form\Type\ProductUnitSelectType;
use Oro\Bundle\ProductBundle\Form\Extension\IntegerExtension;
use Oro\Bundle\ProductBundle\Form\Type\ProductUnitPrecisionType;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision;
use Oro\Component\Testing\Unit\Form\Type\Stub\EntityType;

class ProductUnitPrecisionTypeTest extends FormIntegrationTestCase
{
    /**
     * @var ProductUnitPrecisionType
     */
    protected $formType;

    /**
     * @var ProductUnitLabelFormatter|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $productUnitLabelFormatter;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->formType = new ProductUnitPrecisionType();
        $this->formType->setDataClass(ProductUnitPrecision::class);
        $this->productUnitLabelFormatter = $this->getMockBuilder(ProductUnitLabelFormatter::class)
            ->disableOriginalConstructor()
            ->getMock();

        parent::setUp();
    }

    /**
     * @return array
     */
    protected function getExtensions()
    {
        $entityType = new EntityType(
            [
                'item' => (new ProductUnit())->setCode('item'),
                'kg' => (new ProductUnit())->setCode('kg')
            ]
        );

        return [
            new PreloadedExtension(
                [
                    ProductUnitSelectType::NAME => new ProductUnitSelectType($this->productUnitLabelFormatter),
                    'entity' => $entityType
                ],
                [
                    'form' => [new IntegerExtension()]
                ]
            ),
            new ValidatorExtension(Validation::createValidator())
        ];
    }

    /**
     * @param ProductUnitPrecision $defaultData
     * @param array $expectedOptions
     * @param array|ProductUnitPrecision $submittedData
     * @param ProductUnitPrecision $expectedData
     * @dataProvider submitProvider
     */
    public function testSubmit(
        ProductUnitPrecision $defaultData,
        array $expectedOptions,
        $submittedData,
        ProductUnitPrecision $expectedData
    ) {
        $form = $this->factory->create($this->formType, $defaultData, []);

        $this->assertEquals($defaultData, $form->getData());

        if ($defaultData->getUnit()) {
            $unitDisabled = $form->get('unit_disabled');

            $this->assertNotNull($unitDisabled);
            $this->assertFormConfig($expectedOptions['unit_disabled'], $unitDisabled->getConfig());
        }

        $this->assertFormConfig($expectedOptions['unit'], $form->get('unit')->getConfig());

        $form->submit($submittedData);
        $this->assertTrue($form->isValid());
        $this->assertEquals($expectedData, $form->getData());
    }

    /**
     * @param array $expectedConfig
     * @param FormConfigInterface $actualConfig
     */
    protected function assertFormConfig(array $expectedConfig, FormConfigInterface $actualConfig)
    {
        foreach ($expectedConfig as $key => $value) {
            $this->assertTrue($actualConfig->hasOption($key));
            $this->assertEquals($value, $actualConfig->getOption($key));
        }
    }

    /**
     * @return array
     */
    public function submitProvider()
    {
        return [
            'existing unit precision' => [
                'defaultData'   => (new ProductUnitPrecision())
                    ->setUnit((new ProductUnit())->setCode('kg'))
                    ->setPrecision(0),
                'expectedOptions' => [
                    'unit' => [
                        'attr' => [
                            'class' => 'hidden-unit'
                        ]
                    ],
                    'unit_disabled' => [
                        'disabled' => false,
                        'mapped'   => false
                    ]
                ],
                'submittedData' => [],
                'expectedData'  => (new ProductUnitPrecision())
                    ->setSell(false)
            ],
            'unit precision without value' => [
                'defaultData'   => new ProductUnitPrecision(),
                'expectedOptions' => [
                    'unit' => [],
                    'unit_disabled' => []
                ],
                'submittedData' => [],
                'expectedData'  => (new ProductUnitPrecision())
                    ->setSell(false)
            ],
            'unit precision with value' => [
                'defaultData'   => new ProductUnitPrecision(),
                'expectedOptions' => [
                    'unit' => [],
                    'unit_disabled' => []
                ],
                'submittedData' => [
                    'unit' => 'kg',
                    'precision' => 5,
                    'conversionRate' => 2,
                    'sell' => true,
                ],
                'expectedData'  => (new ProductUnitPrecision())
                    ->setUnit((new ProductUnit())->setCode('kg'))
                    ->setPrecision(5)
                    ->setConversionRate(2)
                    ->setSell(true)
            ]
        ];
    }

    /**
     * Test getName
     */
    public function testGetName()
    {
        $this->assertEquals(ProductUnitPrecisionType::NAME, $this->formType->getName());
    }
}

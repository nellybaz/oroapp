<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Form\Type;

use Oro\Bundle\ProductBundle\Provider\VariantField;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\ProductBundle\Provider\VariantFieldProvider;
use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeFamily;
use Oro\Bundle\ProductBundle\ProductVariant\Registry\ProductVariantTypeHandlerRegistry;
use Oro\Bundle\ProductBundle\Provider\ProductVariantAvailabilityProvider;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\ProductVariant\Form\Type\FrontendVariantFiledType;
use Oro\Bundle\ProductBundle\ProductVariant\Registry\ProductVariantTypeHandlerInterface;
use Oro\Bundle\ProductBundle\Tests\Unit\Stub\ProductStub;
use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Component\Testing\Unit\Entity\Stub\StubEnumValue;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;

class FrontendVariantFiledTypeTest extends FormIntegrationTestCase
{
    use EntityTrait;

    const FIELD_COLOR = 'testColor';
    const FIELD_NEW = 'testNew';
    const PRODUCT_CLASS = Product::class;

    /** @var FrontendVariantFiledType */
    protected $type;

    /** @var ProductVariantAvailabilityProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $productVariantAvailabilityProvider;

    /** @var ProductVariantTypeHandlerRegistry|\PHPUnit_Framework_MockObject_MockObject */
    protected $productVariantTypeHandlerRegistry;

    /** @var VariantFieldProvider|\PHPUnit_Framework_MockObject_MockObject */
    protected $variantFieldProvider;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->productVariantAvailabilityProvider = $this->getMockBuilder(ProductVariantAvailabilityProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productVariantTypeHandlerRegistry = $this->createMock(ProductVariantTypeHandlerRegistry::class);

        $this->variantFieldProvider = $this->createMock(VariantFieldProvider::class);

        $this->type = new FrontendVariantFiledType(
            $this->productVariantAvailabilityProvider,
            $this->productVariantTypeHandlerRegistry,
            $this->variantFieldProvider,
            $this->getPropertyAccessor(),
            self::PRODUCT_CLASS
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset($this->productVariantAvailabilityProvider, $this->variantFieldProvider, $this->type);
    }

    public function testGetName()
    {
        $this->assertEquals('oro_product_product_variant_frontend_variant_field', $this->type->getName());
    }

    public function testGetBlockPrefix()
    {
        $this->assertEquals('oro_product_product_variant_frontend_variant_field', $this->type->getBlockPrefix());
    }

    /**
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function testBuildFormConfigurableProduct()
    {
        $attributeFamily = $this->getEntity(AttributeFamily::class);

        $parentProduct = $this->getEntity(Product::class, [
            'type' => Product::TYPE_CONFIGURABLE,
            'variantFields' => [self::FIELD_COLOR, self::FIELD_NEW],
            'attributeFamily' => $attributeFamily,
        ]);

        $defaultVariant = new ProductStub();
        $defaultVariant->{self::FIELD_COLOR} = new StubEnumValue('id', 'name');
        $defaultVariant->{self::FIELD_NEW} = true;

        $options = [
            'parentProduct' => $parentProduct,
        ];

        $enumAvailability = [
            'red' => false,
            'green' => true
        ];

        $enumHandler = $this->createTypeHandler(
            self::FIELD_COLOR,
            $enumAvailability,
            [
                'data' => $defaultVariant->{self::FIELD_COLOR},
                'label' => self::FIELD_COLOR,
                'placeholder' => 'oro.product.type.please_select_option',
                'empty_data' => null
            ]
        );

        $booleanAvailability = [
            0 => false,
            1 => true
        ];

        $booleanHandler = $this->createTypeHandler(
            self::FIELD_NEW,
            $booleanAvailability,
            [
                'data' => $defaultVariant->{self::FIELD_NEW},
                'label' => self::FIELD_NEW,
                'placeholder' => 'oro.product.type.please_select_option',
                'empty_data' => null
            ]
        );

        $this->productVariantTypeHandlerRegistry->expects($this->exactly(2))
            ->method('getVariantTypeHandler')
            ->withConsecutive(['enum'], ['boolean'])
            ->willReturnOnConsecutiveCalls($enumHandler, $booleanHandler);

        $this->productVariantAvailabilityProvider->expects($this->exactly(2))
            ->method('getCustomFieldType')
            ->withConsecutive([self::FIELD_COLOR], [self::FIELD_NEW])
            ->willReturnOnConsecutiveCalls('enum', 'boolean');

        $this->productVariantAvailabilityProvider->expects($this->once())
            ->method('getVariantFieldsAvailability')
            ->with($parentProduct, [])
            ->willReturn([
                self::FIELD_COLOR => [
                    'red' => false,
                    'green' => true
                ],
                self::FIELD_NEW => [
                    0 => false,
                    1 => true
                ]
            ]);

        $customFields = [
            self::FIELD_COLOR => new VariantField(self::FIELD_COLOR, self::FIELD_COLOR),
            self::FIELD_NEW => new VariantField(self::FIELD_NEW, self::FIELD_NEW)
        ];
        $this->variantFieldProvider->expects($this->once())
            ->method('getVariantFields')
            ->with($attributeFamily)
            ->willReturn($customFields);

        $form = $this->factory->create($this->type, $defaultVariant, $options);

        $this->assertTrue($form->has(self::FIELD_COLOR));
        $this->assertTrue($form->has(self::FIELD_NEW));

        $variantProduct = new ProductStub();
        $variantProduct->{self::FIELD_COLOR} = new StubEnumValue('id2', 'name2');
        $variantProduct->{self::FIELD_NEW} = false;

        $submittedData = [
            self::FIELD_COLOR => 'green',
            self::FIELD_NEW => true
        ];

        $variantFieldValues = [
            self::FIELD_COLOR => $variantProduct->{self::FIELD_COLOR},
            self::FIELD_NEW => $variantProduct->{self::FIELD_NEW}
        ];

        $this->productVariantAvailabilityProvider->expects($this->once())
            ->method('getVariantFieldsValuesForVariant')
            ->with($parentProduct, $defaultVariant)
            ->willReturn($variantFieldValues);

        $this->productVariantAvailabilityProvider->expects($this->once())
            ->method('getSimpleProductByVariantFields')
            ->with($parentProduct, $variantFieldValues, false)
            ->willReturn($variantProduct);

        $form->submit($submittedData);
        $this->assertEquals(new StubEnumValue('id', 'name'), $defaultVariant->{self::FIELD_COLOR});
        $this->assertEquals(true, $defaultVariant->{self::FIELD_NEW});

        $this->assertEquals($variantProduct, $form->getData());
    }

    public function testConfigureOptions()
    {
        /** @var OptionsResolver|\PHPUnit_Framework_MockObject_MockObject $resolver */
        $resolver = $this->createMock(OptionsResolver::class);
        $resolver->expects($this->once())
            ->method('setRequired')
            ->with(['parentProduct']);

        $this->type->configureOptions($resolver);
    }

    /**
     * @expectedException \Symfony\Component\OptionsResolver\Exception\MissingOptionsException
     * @expectedExceptionMessage The required option "parentProduct" is missing.
     */
    public function testBuildFormWithoutProductInOptions()
    {
        $this->factory->create($this->type);
    }

    // @codingStandardsIgnoreStart
    /**
     * @expectedException \Symfony\Component\OptionsResolver\Exception\InvalidOptionsException
     * @expectedExceptionMessage The option "parentProduct" with value stdClass is expected to be of type "Oro\Bundle\ProductBundle\Entity\Product", but is of type "stdClass".
     */
    // @codingStandardsIgnoreEnd
    public function testBuildWhenRequiredFieldProductHasOtherObject()
    {
        $options['parentProduct'] = new \stdClass();
        $this->factory->create($this->type, [], $options);
    }

    /**
     * @param string $fieldName
     * @param array $availability
     * @param array $expectedOptions
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function createTypeHandler($fieldName, array $availability, array $expectedOptions)
    {
        $form = $this->factory->createNamed($fieldName, FormType::class, null, ['auto_initialize' => false]);

        $handler = $this->createMock(ProductVariantTypeHandlerInterface::class);
        $handler->expects($this->once())
            ->method('createForm')
            ->with($fieldName, $availability, $expectedOptions)
            ->willReturn($form);

        return $handler;
    }

    public function testFinishView()
    {
        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $form */
        $form = $this->createMock(FormInterface::class);

        $formView = new FormView();

        $product = new Product();
        $product->setVariantFields([ 'field_first', 'field_second']);
        $productVariant = new Product();

        $this->productVariantAvailabilityProvider->expects($this->once())
            ->method('getSimpleProductsByVariantFields')
            ->with($product)
            ->willReturn([$productVariant]);

        $this->productVariantAvailabilityProvider->expects($this->exactly(2))
            ->method('getVariantFieldScalarValue')
            ->withConsecutive(
                [$productVariant, 'field_first'],
                [$productVariant, 'field_second']
            )
            ->willReturnOnConsecutiveCalls('value1', 'value2');

        $this->type->finishView($formView, $form, ['parentProduct' => $product]);
    }
}

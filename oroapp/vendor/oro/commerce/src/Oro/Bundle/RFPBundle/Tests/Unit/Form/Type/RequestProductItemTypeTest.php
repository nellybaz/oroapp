<?php

namespace Oro\Bundle\RFPBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Form\Type\ProductUnitSelectionType;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\Stub\ProductUnitSelectionTypeStub;
use Oro\Bundle\PricingBundle\Tests\Unit\Form\Type\Stub\CurrencySelectionTypeStub;

use Oro\Bundle\RFPBundle\Entity\RequestProduct;
use Oro\Bundle\RFPBundle\Entity\RequestProductItem;
use Oro\Bundle\RFPBundle\Form\Type\RequestProductItemType;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\QuantityTypeTrait;

class RequestProductItemTypeTest extends AbstractTest
{
    use QuantityTypeTrait;

    /**
     * @var RequestProductItemType
     */
    protected $formType;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->formType = new RequestProductItemType();
        $this->formType->setDataClass('Oro\Bundle\RFPBundle\Entity\RequestProductItem');
    }

    public function testGetName()
    {
        $this->assertEquals(RequestProductItemType::NAME, $this->formType->getName());
    }

    public function testConfigureOptions()
    {
        /* @var $resolver \PHPUnit_Framework_MockObject_MockObject|OptionsResolver */
        $resolver = $this->createMock('Symfony\Component\OptionsResolver\OptionsResolver');
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with($this->callback(function (array $options) {
                $this->assertArrayHasKey('data_class', $options);
                $this->assertArrayHasKey('compact_units', $options);
                $this->assertArrayHasKey('intention', $options);

                return true;
            }))
        ;

        $this->formType->configureOptions($resolver);
    }

    /**
     * @param RequestProductItem $inputData
     * @param array $expectedData
     *
     * @dataProvider postSetDataProvider
     */
    public function testPostSetData(RequestProductItem $inputData, array $expectedData = [])
    {
        $form = $this->factory->create($this->formType, $inputData);

        foreach ($expectedData as $key => $value) {
            $this->assertEquals($value, $form->get($key)->getData(), $key);
        }
    }

    /**
     * @return array
     */
    public function postSetDataProvider()
    {
        return [
            'empty values' => [
                'input' => new RequestProductItem(),
                'expected' => [
                    'quantity' => 1,
                ],
            ],
            'existing values' => [
                'input' => (new RequestProductItem())->setQuantity(10),
                'expected' => [
                    'quantity' => 10,
                ],
            ],
        ];
    }

    /**
     * @return array
     */
    public function submitProvider()
    {
        return [
            'empty form' => [
                'isValid'       => false,
                'submittedData' => [],
                'expectedData'  => $this->getRequestProductItem(1, 1),
                'defaultData'   => $this->getRequestProductItem(1),
            ],
            'empty quantity' => [
                'isValid'       => true,
                'submittedData' => [
                    'productUnit'   => 'kg',
                    'price'         => [
                        'value'     => 20,
                        'currency'  => 'USD',
                    ],
                ],
                'expectedData'  => $this->getRequestProductItem(2, 1, 'kg', $this->createPrice(20, 'USD')),
                'defaultData'   => $this->getRequestProductItem(2),
            ],
            'empty product unit' => [
                'isValid'       => false,
                'submittedData' => [
                    'quantity'      => 10,
                    'price'         => [
                        'value'     => 20,
                        'currency'  => 'USD',
                    ],
                ],
                'expectedData'  => $this->getRequestProductItem(3, 10, null, $this->createPrice(20, 'USD')),
                'defaultData'   => $this->getRequestProductItem(3),
            ],
            'empty price' => [
                'isValid'       => true,
                'submittedData' => [
                    'quantity'      => 10,
                    'productUnit'   => 'kg',
                ],
                'expectedData'  => $this->getRequestProductItem(2, 10, 'kg'),
                'defaultData'   => $this->getRequestProductItem(2),
            ],
            'empty price value' => [
                'isValid'       => true,
                'submittedData' => [
                    'quantity'      => 10,
                    'productUnit'   => 'kg',
                    'price' => [
                        'currency' => 'USD',
                    ],
                ],
                'expectedData'  => $this->getRequestProductItem(2, 10, 'kg'),
                'defaultData'   => $this->getRequestProductItem(2),
            ],
            'empty price currency' => [
                'isValid'       => false,
                'submittedData' => [
                    'quantity'      => 10,
                    'productUnit'   => 'kg',
                    'price' => [
                        'value' => 10,
                    ],
                ],
                'expectedData'  => $this->getRequestProductItem(2, 10, 'kg', $this->createPrice(10, null)),
                'defaultData'   => $this->getRequestProductItem(2),
            ],
            'empty request product' => [
                'isValid'       => false,
                'submittedData' => [
                    'quantity'      => 10,
                    'productUnit'   => 'kg',
                    'price'         => [
                        'value'     => 20,
                        'currency'  => 'USD',
                    ],
                ],
                'expectedData'  => $this->getRequestProductItem(5, 10, 'kg', $this->createPrice(20, 'USD'))
                    ->setRequestProduct(null),
                'defaultData'   => $this->getRequestProductItem(5)
                    ->setRequestProduct(null),
            ],
            'valid data' => [
                'isValid'       => true,
                'submittedData' => [
                    'quantity'      => 10,
                    'productUnit'   => 'kg',
                    'price'         => [
                        'value'     => 20,
                        'currency'  => 'USD',
                    ],
                ],
                'expectedData'  => $this->getRequestProductItem(5, 10, 'kg', $this->createPrice(20, 'USD')),
                'defaultData'   => $this->getRequestProductItem(5),
            ],
        ];
    }

    /**
     * @param int $id
     * @param array|ProductUnit[] $productUnits
     * @param string $unitCode
     * @return \PHPUnit_Framework_MockObject_MockObject|RequestProductItem
     */
    protected function createRequestProductItem($id, array $productUnits = [], $unitCode = null)
    {
        $productUnit = null;

        $product = new Product();
        foreach ($productUnits as $unit) {
            $product->addUnitPrecision((new ProductUnitPrecision())->setUnit($unit));

            if ($unitCode && $unit->getCode() == $unitCode) {
                $productUnit = $unit;
            }
        }

        /* @var $item \PHPUnit_Framework_MockObject_MockObject|RequestProductItem */
        $item = $this->createMock('Oro\Bundle\RFPBundle\Entity\RequestProductItem');
        $item
            ->expects($this->any())
            ->method('getId')
            ->will($this->returnValue($id))
        ;
        $item
            ->expects($this->any())
            ->method('getRequestProduct')
            ->will($this->returnValue((new RequestProduct())->setProduct($product)))
        ;
        $item
            ->expects($this->any())
            ->method('getProductUnit')
            ->will($this->returnValue($productUnit))
        ;
        $item
            ->expects($this->any())
            ->method('getProductUnitCode')
            ->will($this->returnValue($unitCode))
        ;

        return $item;
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtensions()
    {
        $priceType                  = $this->preparePriceType();
        $currencySelectionType      = new CurrencySelectionTypeStub();
        $productUnitSelectionType   = $this->prepareProductUnitSelectionType();

        return [
            new PreloadedExtension(
                [
                    ProductUnitSelectionType::NAME          => new ProductUnitSelectionTypeStub(),
                    $priceType->getName()                   => $priceType,
                    $currencySelectionType->getName()       => $currencySelectionType,
                    $productUnitSelectionType->getName()    => $productUnitSelectionType,
                    QuantityTypeTrait::$name                => $this->getQuantityType(),
                ],
                []
            ),
            $this->getValidatorExtension(true),
        ];
    }
}

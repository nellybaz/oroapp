<?php

namespace Oro\Bundle\SaleBundle\Tests\Unit\Form\Type;

use Oro\Bundle\CurrencyBundle\Tests\Unit\Form\Type\PriceTypeGenerator;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\CurrencyBundle\Form\Type\CurrencySelectionType;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\PricingBundle\Tests\Unit\Form\Type\Stub\CurrencySelectionTypeStub;

use Oro\Bundle\ProductBundle\Form\Type\ProductUnitSelectionType;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\Stub\ProductUnitSelectionTypeStub;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision;
use Oro\Bundle\ProductBundle\Tests\Unit\Entity\Stub\Product;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\QuantityTypeTrait;

use Oro\Bundle\SaleBundle\Entity\QuoteProduct;
use Oro\Bundle\SaleBundle\Entity\QuoteProductRequest;
use Oro\Bundle\SaleBundle\Form\Type\QuoteProductRequestType;

class QuoteProductRequestTypeTest extends AbstractTest
{
    use QuantityTypeTrait;

    /**
     * @var QuoteProductRequestType
     */
    protected $formType;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->formType = new QuoteProductRequestType();
        $this->formType->setDataClass('Oro\Bundle\SaleBundle\Entity\QuoteProductRequest');
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

    public function testGetName()
    {
        $this->assertEquals('oro_sale_quote_product_request', $this->formType->getName());
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
                'expectedData'  => $this->getQuoteProductRequest(1),
                'defaultData'   => $this->getQuoteProductRequest(1),
            ],
            'empty quote product' => [
                'isValid'       => false,
                'submittedData' => [
                    'quantity'      => 10,
                    'productUnit'   => 'kg',
                    'price'         => [
                        'value'     => 20,
                        'currency'  => 'EUR',
                    ],
                ],
                'expectedData'  => $this
                    ->getQuoteProductRequest(2, 10, 'kg', $this->createPrice(20, 'EUR'))
                    ->setQuoteProduct(null),
                'defaultData'   => $this->getQuoteProductRequest(2)->setQuoteProduct(null),
            ],
            'empty quantity' => [
                'isValid'       => true,
                'submittedData' => [
                    'productUnit'   => 'kg',
                    'price'         => [
                        'value'     => 11,
                        'currency'  => 'EUR',
                    ],
                ],
                'expectedData'  => $this->getQuoteProductRequest(2, null, 'kg', $this->createPrice(11, 'EUR')),
                'defaultData'   => $this->getQuoteProductRequest(2),
            ],
            'empty product unit' => [
                'isValid'       => false,
                'submittedData' => [
                    'quantity'      => 22,
                    'price'         => [
                        'value'     => 33,
                        'currency'  => 'EUR',
                    ],
                ],
                'expectedData'  => $this->getQuoteProductRequest(3, 22, null, $this->createPrice(33, 'EUR')),
                'defaultData'   => $this->getQuoteProductRequest(3),
            ],
            'empty price' => [
                'isValid'       => true,
                'submittedData' => [
                    'quantity'      => 44,
                    'productUnit'   => 'kg',
                ],
                'expectedData'  => $this->getQuoteProductRequest(2, 44, 'kg'),
                'defaultData'   => $this->getQuoteProductRequest(2),
            ],
            'empty request product' => [
                'isValid'       => false,
                'submittedData' => [
                    'quantity'      => 88,
                    'productUnit'   => 'kg',
                    'price'         => [
                        'value'     => 99,
                        'currency'  => 'EUR',
                    ],
                ],
                'expectedData'  => $this->getQuoteProductRequest(5, 88, 'kg', $this->createPrice(99, 'EUR'))
                    ->setQuoteProduct(null),
                'defaultData'   => $this->getQuoteProductRequest(5)
                    ->setQuoteProduct(null),
            ],
            'valid data' => [
                'isValid'       => true,
                'submittedData' => [
                    'quantity'      => 11,
                    'productUnit'   => 'kg',
                    'price'         => [
                        'value'     => 22,
                        'currency'  => 'EUR',
                    ],
                ],
                'expectedData'  => $this->getQuoteProductRequest(5, 11, 'kg', $this->createPrice(22, 'EUR')),
                'defaultData'   => $this->getQuoteProductRequest(5),
            ],
        ];
    }

    /**
     * @param int $id
     * @param ProductUnit[] $productUnits
     * @param string $unitCode
     * @return \PHPUnit_Framework_MockObject_MockObject|QuoteProductRequest
     */
    protected function createQuoteProductRequest($id, array $productUnits = [], $unitCode = null)
    {
        $productUnit = null;

        $product = new Product();
        foreach ($productUnits as $unit) {
            $product->addUnitPrecision((new ProductUnitPrecision())->setUnit($unit));

            if ($unitCode && $unit->getCode() === $unitCode) {
                $productUnit = $unit;
            }
        }

        /* @var $item \PHPUnit_Framework_MockObject_MockObject|QuoteProductRequest */
        $item = $this->createMock('Oro\Bundle\SaleBundle\Entity\QuoteProductRequest');
        $item
            ->expects($this->any())
            ->method('getId')
            ->will($this->returnValue($id))
        ;
        $item
            ->expects($this->any())
            ->method('getQuoteProduct')
            ->will($this->returnValue((new QuoteProduct())->setProduct($product)))
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
     * @param float $value
     * @param string $currency
     * @return Price
     */
    protected function createPrice($value, $currency)
    {
        return Price::create($value, $currency);
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtensions()
    {
        $priceType                  = PriceTypeGenerator::createPriceType($this);
        $productUnitSelectionType   = $this->prepareProductUnitSelectionType();

        return [
            new PreloadedExtension(
                [
                    ProductUnitSelectionType::NAME          => new ProductUnitSelectionTypeStub(),
                    CurrencySelectionType::NAME             => new CurrencySelectionTypeStub(),
                    $priceType->getName()                   => $priceType,
                    $productUnitSelectionType->getName()    => $productUnitSelectionType,
                    QuantityTypeTrait::$name                => $this->getQuantityType(),
                ],
                []
            ),
            $this->getValidatorExtension(true),
        ];
    }
}

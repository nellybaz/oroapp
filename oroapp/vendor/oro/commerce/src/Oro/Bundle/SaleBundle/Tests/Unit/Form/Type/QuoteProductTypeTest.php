<?php

namespace Oro\Bundle\SaleBundle\Tests\Unit\Form\Type;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\PreloadedExtension;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\TranslatorInterface;

use Oro\Bundle\CurrencyBundle\Form\Type\CurrencySelectionType;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\FormBundle\Form\Type\CollectionType;
use Oro\Bundle\PricingBundle\Tests\Unit\Form\Type\Stub\CurrencySelectionTypeStub;

use Oro\Bundle\ProductBundle\Form\Type\ProductSelectType;
use Oro\Bundle\ProductBundle\Form\Type\ProductUnitSelectionType;
use Oro\Bundle\ProductBundle\Formatter\ProductUnitLabelFormatter;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\Stub\ProductUnitSelectionTypeStub;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\Stub\ProductSelectTypeStub;
use Oro\Bundle\ProductBundle\Entity\Repository\ProductUnitRepository;
use Oro\Bundle\ProductBundle\Tests\Unit\Form\Type\QuantityTypeTrait;

use Oro\Bundle\SaleBundle\Entity\QuoteProduct;
use Oro\Bundle\SaleBundle\Form\Type\QuoteProductType;
use Oro\Bundle\SaleBundle\Form\Type\QuoteProductOfferCollectionType;
use Oro\Bundle\SaleBundle\Form\Type\QuoteProductRequestCollectionType;

class QuoteProductTypeTest extends AbstractTest
{
    use QuantityTypeTrait;

    /**
     * @var QuoteProductType
     */
    protected $formType;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|TranslatorInterface
     */
    protected $translator;

    /**
     * @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $registry;

    /**
     * @var ObjectManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $manager;

    /**
     * @var ProductUnitRepository|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $repository;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->translator = $this->getMockBuilder('Symfony\Component\Translation\TranslatorInterface')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        $this->repository = $this->getMockBuilder('Oro\Bundle\ProductBundle\Entity\Repository\ProductUnitRepository')
            ->disableOriginalConstructor()
            ->getMock()
        ;

        $this->manager = $this->createMock('Doctrine\Common\Persistence\ObjectManager');
        $this->manager->expects($this->any())
            ->method('getRepository')
            ->willReturn($this->repository)
        ;

        $this->registry = $this->createMock('Doctrine\Common\Persistence\ManagerRegistry');
        $this->registry->expects($this->any())
            ->method('getManagerForClass')
            ->willReturn($this->manager)
        ;

        /* @var $productUnitLabelFormatter \PHPUnit_Framework_MockObject_MockObject|ProductUnitLabelFormatter */
        $productUnitLabelFormatter = $this->getMockBuilder(
            'Oro\Bundle\ProductBundle\Formatter\ProductUnitLabelFormatter'
        )
            ->disableOriginalConstructor()
            ->getMock();

        $productUnitLabelFormatter->expects($this->any())
            ->method('format')
            ->will($this->returnCallback(function ($unitCode, $isShort) {
                return $unitCode . '-formatted-' . ($isShort ? 'short' : 'full');
            }))
        ;
        $productUnitLabelFormatter->expects($this->any())
            ->method('formatChoices')
            ->will($this->returnCallback(function ($units, $isShort) {
                return array_map(function ($unit) use ($isShort) {
                    return $unit . '-formatted2-' . ($isShort ? 'short' : 'full');
                }, $units);
            }))
        ;

        parent::setUp();

        $this->formType = new QuoteProductType(
            $this->translator,
            $productUnitLabelFormatter,
            $this->quoteProductFormatter,
            $this->registry
        );
        $this->formType->setDataClass('Oro\Bundle\SaleBundle\Entity\QuoteProduct');
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
                $this->assertArrayHasKey('page_component', $options);
                $this->assertArrayHasKey('page_component_options', $options);
                $this->assertArrayHasKey('allow_add_free_form_items', $options);

                return true;
            }))
        ;

        $this->formType->configureOptions($resolver);
    }

    /**
     * @param array $inputData
     * @param array $expectedData
     *
     * @dataProvider finishViewProvider
     */
    public function testFinishView(array $inputData, array $expectedData)
    {
        $this->repository->expects($this->once())
            ->method('getAllUnits')
            ->willReturn($inputData['allUnits'])
        ;

        $view = new FormView();

        $view->vars = $inputData['vars'];

        /* @var $form \PHPUnit_Framework_MockObject_MockObject|FormInterface */
        $form = $this->createMock('Symfony\Component\Form\FormInterface');

        $this->formType->finishView($view, $form, $inputData['options']);

        $this->assertEquals($expectedData, $view->vars);
    }

    /**
     * @return array
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function finishViewProvider()
    {
        $defaultOptions = [
            'compact_units' => true,
            'allow_add_free_form_items' => true,
        ];

        return [
            'empty quote product' => [
                'input'     => [
                    'vars' => [
                        'value' => null,
                    ],
                    'allUnits' => [],
                    'options' => [
                        'compact_units' => false,
                        'allow_add_free_form_items' => false,
                    ],
                ],
                'expected'  => [
                    'value' => null,
                    'componentOptions' => [
                        'units' => [],
                        'allUnits'          => [],
                        'typeOffer'         => QuoteProduct::TYPE_OFFER,
                        'typeReplacement'   => QuoteProduct::TYPE_NOT_AVAILABLE,
                        'compactUnits' => false,
                        'isFreeForm' => false,
                        'allowEditFreeForm' => false,
                    ],
                ],
            ],
            'empty product and replacement' => [
                'input'     => [
                    'vars' => [
                        'value' => new QuoteProduct(),
                    ],
                    'allUnits' => [
                        'unit10'
                    ],
                    'options' => [
                        'compact_units' => false,
                        'allow_add_free_form_items' => true,
                    ],
                ],
                'expected'  => [
                    'value' => new QuoteProduct(),
                    'componentOptions' => [
                        'units' => [],
                        'allUnits' => [
                            'unit10-formatted2-full',
                        ],
                        'typeOffer' => QuoteProduct::TYPE_OFFER,
                        'typeReplacement' => QuoteProduct::TYPE_NOT_AVAILABLE,
                        'compactUnits' => false,
                        'isFreeForm' => false,
                        'allowEditFreeForm' => true,
                    ],
                ],
            ],
            'existing product and replacement' => [
                'input'     => [
                    'vars' => [
                        'value' => (new QuoteProduct())
                            ->setProduct($this->createProduct(1, ['unit1', 'unit2']))
                            ->setProductReplacement($this->createProduct(2, ['unit2', 'unit3'])),
                    ],
                    'allUnits' => [
                        'unit20',
                        'unit30',
                    ],
                    'options' => [
                        'compact_units' => false,
                        'allow_add_free_form_items' => true,
                    ],
                ],
                'expected'  => [
                    'value' => (new QuoteProduct())
                        ->setProduct($this->createProduct(1, ['unit1', 'unit2']))
                        ->setProductReplacement($this->createProduct(2, ['unit2', 'unit3'])),
                    'componentOptions' => [
                        'units' => [
                            1 => [
                                'unit1' => 'unit1-formatted-full',
                                'unit2' => 'unit2-formatted-full',
                            ],
                            2 => [
                                'unit2' => 'unit2-formatted-full',
                                'unit3' => 'unit3-formatted-full',
                            ],
                        ],
                        'allUnits' => [
                            'unit20-formatted2-full',
                            'unit30-formatted2-full',
                        ],
                        'typeOffer' => QuoteProduct::TYPE_OFFER,
                        'typeReplacement' => QuoteProduct::TYPE_NOT_AVAILABLE,
                        'compactUnits' => false,
                        'allowEditFreeForm' => true,
                        'isFreeForm' => false,
                    ],
                ],
            ],
            'existing product and replacement and compact units' => [
                'input'     => [
                    'vars' => [
                        'value' => (new QuoteProduct())
                            ->setProduct($this->createProduct(3, ['unit3', 'unit4']))
                            ->setProductReplacement($this->createProduct(4, ['unit4', 'unit5'])),
                    ],
                    'allUnits' => [
                        'unit3',
                        'unit4',
                    ],
                    'options' => $defaultOptions,
                ],
                'expected'  => [
                    'value' => (new QuoteProduct())
                        ->setProduct($this->createProduct(3, ['unit3', 'unit4']))
                        ->setProductReplacement($this->createProduct(4, ['unit4', 'unit5'])),
                    'componentOptions' => [
                        'units' => [
                            3 => [
                                'unit3' => 'unit3-formatted-short',
                                'unit4' => 'unit4-formatted-short',
                            ],
                            4 => [
                                'unit4' => 'unit4-formatted-short',
                                'unit5' => 'unit5-formatted-short',
                            ],
                        ],
                        'allUnits' => [
                            'unit3-formatted2-short',
                            'unit4-formatted2-short',
                        ],
                        'typeOffer' => QuoteProduct::TYPE_OFFER,
                        'typeReplacement' => QuoteProduct::TYPE_NOT_AVAILABLE,
                        'compactUnits' => true,
                        'allowEditFreeForm' => true,
                        'isFreeForm' => false,
                    ],
                ],
            ],
            'product free form' => [
                'input'     => [
                    'vars' => [
                        'value' => (new QuoteProduct())
                            ->setFreeFormProduct('free form title'),
                    ],
                    'allUnits' => [
                        'unit3',
                        'unit4',
                    ],
                    'options' => $defaultOptions,
                ],
                'expected'  => [
                    'value' => (new QuoteProduct())
                        ->setFreeFormProduct('free form title'),
                    'componentOptions' => [
                        'units' => [],
                        'allUnits' => [
                            'unit3-formatted2-short',
                            'unit4-formatted2-short',
                        ],
                        'typeOffer' => QuoteProduct::TYPE_OFFER,
                        'typeReplacement' => QuoteProduct::TYPE_NOT_AVAILABLE,
                        'compactUnits' => true,
                        'allowEditFreeForm' => true,
                        'isFreeForm' => true,
                    ],
                ],
            ],
            'replacement free form' => [
                'input'     => [
                    'vars' => [
                        'value' => (new QuoteProduct())
                            ->setFreeFormProductReplacement('free form title'),
                    ],
                    'allUnits' => [
                        'unit3',
                        'unit4',
                    ],
                    'options' => $defaultOptions,
                ],
                'expected'  => [
                    'value' => (new QuoteProduct())
                        ->setFreeFormProductReplacement('free form title'),
                    'componentOptions' => [
                        'units' => [],
                        'allUnits' => [
                            'unit3-formatted2-short',
                            'unit4-formatted2-short',
                        ],
                        'typeOffer' => QuoteProduct::TYPE_OFFER,
                        'typeReplacement' => QuoteProduct::TYPE_NOT_AVAILABLE,
                        'compactUnits' => true,
                        'allowEditFreeForm' => true,
                        'isFreeForm' => true,
                    ],
                ],
            ],
        ];
    }

    /**
     * @param int $id
     * @param array $units
     * @return \PHPUnit_Framework_MockObject_MockObject|Product
     */
    protected function createProduct($id, array $units = [])
    {
        $product = $this->getMockEntity(
            'Oro\Bundle\ProductBundle\Entity\Product',
            [
                'getId' => $id,
                'getAvailableUnitCodes' => $units,
            ]
        );

        return $product;
    }

    /**
     * @return array
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function submitProvider()
    {
        $quoteProductOffer = $this->getQuoteProductOffer(2, 10, 'kg', self::QPO_PRICE_TYPE1, Price::create(20, 'USD'));

        return [
            'empty form' => [
                'isValid'       => false,
                'submittedData' => [
                ],
                'expectedData'  => $this->getQuoteProduct(2)->setProduct(null),
                'inputData'     => $this->getQuoteProduct(2)->setProduct(null),
            ],
            'empty quote' => [
                'isValid'       => false,
                'submittedData' => [
                    'product'   => 2,
                    'type'      => self::QP_TYPE1,
                    'comment'   => 'comment1',
                    'commentCustomer' => 'comment2',
                    'quoteProductOffers' => [
                        [
                            'quantity'      => 10,
                            'productUnit'   => 'kg',
                            'priceType'     => self::QPO_PRICE_TYPE1,
                            'price'         => [
                                'value'     => 20,
                                'currency'  => 'USD',
                            ],
                        ],
                    ],
                ],
                'expectedData' => $this->getQuoteProduct(
                    2,
                    self::QP_TYPE1,
                    'comment1',
                    'comment2',
                    [],
                    [
                        clone $quoteProductOffer,
                    ]
                )->setQuote(null),
                'inputData' => $this->getQuoteProduct(2)->setQuote(null)->setProduct(null),
            ],
            'empty product' => [
                'isValid'       => false,
                'submittedData' => [
                    'type'      => self::QP_TYPE1,
                    'comment'   => 'comment1',
                    'commentCustomer' => 'comment2',
                    'quoteProductOffers' => [
                        [
                            'quantity'      => 10,
                            'productUnit'   => 'kg',
                            'priceType'     => self::QPO_PRICE_TYPE1,
                            'price'         => [
                                'value'     => 20,
                                'currency'  => 'USD',
                            ],
                        ],
                    ],
                ],
                'expectedData' => $this->getQuoteProduct(
                    2,
                    self::QP_TYPE1,
                    'comment1',
                    'comment2',
                    [],
                    [
                        clone $quoteProductOffer,
                    ]
                )->setProduct(null),
                'inputData' => $this->getQuoteProduct(2)->setProduct(null),
            ],
            'empty type' => [
                'isValid'       => false,
                'submittedData' => [
                    'product'   => 2,
                    'comment'   => 'comment1',
                    'commentCustomer' => 'comment2',
                    'quoteProductOffers' => [
                        [
                            'quantity'      => 10,
                            'productUnit'   => 'kg',
                            'priceType'     => self::QPO_PRICE_TYPE1,
                            'price'         => [
                                'value'     => 20,
                                'currency'  => 'USD',
                            ],
                        ],
                    ],
                ],
                'expectedData' => $this->getQuoteProduct(
                    2,
                    null,
                    'comment1',
                    'comment2',
                    [],
                    [
                        clone $quoteProductOffer,
                    ]
                ),
                'inputData' => $this->getQuoteProduct(2)->setProduct(null),
            ],
            'empty offers' => [
                'isValid'       => false,
                'submittedData' => [
                    'product'   => 2,
                    'comment'   => 'comment1',
                    'commentCustomer' => 'comment2',
                ],
                'expectedData'  => $this->getQuoteProduct(2, null, 'comment1', 'comment2', [], []),
                'inputData'     => $this->getQuoteProduct(2)->setProduct(null),
            ],
            'valid data' => [
                'isValid'       => true,
                'submittedData' => [
                    'product'   => 2,
                    'type'      => self::QP_TYPE1,
                    'comment'   => 'comment1',
                    'commentCustomer' => 'comment2',
                    'quoteProductOffers' => [
                        [
                            'quantity'      => 10,
                            'productUnit'   => 'kg',
                            'priceType'     => self::QPO_PRICE_TYPE1,
                            'price'         => [
                                'value'     => 20,
                                'currency'  => 'USD',
                            ],
                        ],
                    ],
                ],
                'expectedData' => $this->getQuoteProduct(
                    2,
                    self::QP_TYPE1,
                    'comment1',
                    'comment2',
                    [],
                    [
                        clone $quoteProductOffer,
                    ]
                ),
                'inputData' => $this->getQuoteProduct(2)->setProduct(null),
            ],
        ];
    }

    /**
     * @param int $id
     * @param Product $product
     * @param string $productSku
     * @param Product $replacement
     * @param string $replacementSku
     * @param int $type
     * @return \PHPUnit_Framework_MockObject_MockObject|QuoteProduct
     */
    protected function createQuoteProduct(
        $id,
        Product $product = null,
        $productSku = null,
        Product $replacement = null,
        $replacementSku = null,
        $type = QuoteProduct::TYPE_OFFER
    ) {
        /* @var $quoteProduct \PHPUnit_Framework_MockObject_MockObject|QuoteProduct */
        $quoteProduct = $this->createMock('Oro\Bundle\SaleBundle\Entity\QuoteProduct');
        $quoteProduct
            ->expects($this->any())
            ->method('getId')
            ->willReturn($id)
        ;
        $quoteProduct
            ->expects($this->any())
            ->method('isTypeNotAvailable')
            ->willReturn($type === QuoteProduct::TYPE_NOT_AVAILABLE)
        ;
        $quoteProduct
            ->expects($this->any())
            ->method('getProduct')
            ->willReturn($product)
        ;
        $quoteProduct
            ->expects($this->any())
            ->method('getProductSku')
            ->willReturn($productSku)
        ;
        $quoteProduct
            ->expects($this->any())
            ->method('getProductReplacement')
            ->willReturn($replacement)
        ;
        $quoteProduct
            ->expects($this->any())
            ->method('getProductReplacementSku')
            ->willReturn($replacementSku)
        ;

        return $quoteProduct;
    }

    /**
     * {@inheritdoc}
     */
    protected function getExtensions()
    {
        $priceType                  = $this->preparePriceType();
        $entityType                 = $this->prepareProductEntityType();
        $productUnitSelectionType   = $this->prepareProductUnitSelectionType();
        $quoteProductOfferType      = $this->prepareQuoteProductOfferType();
        $quoteProductRequestType    = $this->prepareQuoteProductRequestType();

        return [
            new PreloadedExtension(
                [
                    CollectionType::NAME                        => new CollectionType(),
                    QuoteProductOfferCollectionType::NAME       => new QuoteProductOfferCollectionType(),
                    QuoteProductRequestCollectionType::NAME     => new QuoteProductRequestCollectionType(),
                    ProductUnitSelectionType::NAME              => new ProductUnitSelectionTypeStub(),
                    ProductSelectType::NAME                     => new ProductSelectTypeStub(),
                    CurrencySelectionType::NAME                 => new CurrencySelectionTypeStub(),
                    $priceType->getName()                       => $priceType,
                    $entityType->getName()                      => $entityType,
                    $quoteProductOfferType->getName()           => $quoteProductOfferType,
                    $quoteProductRequestType->getName()         => $quoteProductRequestType,
                    $productUnitSelectionType->getName()        => $productUnitSelectionType,
                    QuantityTypeTrait::$name                    => $this->getQuantityType(),
                ],
                []
            ),
            $this->getValidatorExtension(true),
        ];
    }
}

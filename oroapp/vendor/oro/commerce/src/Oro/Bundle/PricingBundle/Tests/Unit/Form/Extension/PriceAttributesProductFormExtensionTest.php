<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\Extension;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Form\PreloadedExtension;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Component\Testing\Unit\FormIntegrationTestCase;
use Oro\Bundle\PricingBundle\Entity\PriceAttributePriceList;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision;
use Oro\Bundle\PricingBundle\Form\Extension\PriceAttributesProductFormExtension;
use Oro\Bundle\ProductBundle\Form\Type\ProductType;
use Oro\Bundle\PricingBundle\Tests\Unit\Form\Extension\Stub\ProductTypeStub;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\PricingBundle\Entity\PriceAttributeProductPrice;
use Oro\Bundle\PricingBundle\Form\Type\ProductAttributePriceCollectionType;
use Oro\Bundle\PricingBundle\Form\Type\ProductAttributePriceType;
use Oro\Bundle\PricingBundle\Tests\Unit\Form\Extension\Stub\RoundingServiceStub;
use Symfony\Component\Translation\TranslatorInterface;

class PriceAttributesProductFormExtensionTest extends FormIntegrationTestCase
{
    use EntityTrait;

    /**
     * @var RegistryInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $registry;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->registry = $this->createMock(RegistryInterface::class);

        parent::setUp();
    }

    /**
     * @return array
     */
    protected function getExtensions()
    {
        $translator = $this->getMockForAbstractClass(TranslatorInterface::class);
        $translator->expects(static::any())
            ->method('trans')
            ->will(static::returnCallback(function ($string) {
                return $string . '_translated';
            }));

        $extensions = [
            new PreloadedExtension(
                [
                    ProductType::NAME => new ProductTypeStub(),
                    ProductAttributePriceCollectionType::NAME => new ProductAttributePriceCollectionType($translator),
                    ProductAttributePriceType::NAME => new ProductAttributePriceType(new RoundingServiceStub())
                ],
                [
                    ProductType::NAME => [
                        new PriceAttributesProductFormExtension($this->registry)
                    ]
                ]
            )
        ];

        return $extensions;
    }

    public function testSubmit()
    {
        $em = $this->createMock(ObjectManager::class);

        $priceRepository = $this->createMock(ObjectRepository::class);
        $priceRepository->expects($this->once())->method('findBy')->willReturn([]);

        $attributeRepository = $this->createMock(ObjectRepository::class);
        $attributeRepository->expects($this->once())->method('findAll')->willReturn([]);

        $em->expects($this->exactly(2))->method('getRepository')->willReturnMap([
            ['OroPricingBundle:PriceAttributePriceList', $attributeRepository],
            ['OroPricingBundle:PriceAttributeProductPrice', $priceRepository],
        ]);
        $this->registry->expects($this->once())->method('getManagerForClass')->willReturn($em);

        $form = $this->factory->create(ProductType::NAME, new Product(), []);

        $form->submit([]);
        $this->assertTrue($form->isValid());
    }

    public function testDataAddedOnPostSetData()
    {
        $em = $this->createMock(ObjectManager::class);

        $product = new Product();
        $unit1 = (new ProductUnit())->setCode('item');
        $unit2 = (new ProductUnit())->setCode('set');
        $product->addUnitPrecision((new ProductUnitPrecision())->setUnit($unit1))
            ->addUnitPrecision((new ProductUnitPrecision())->setUnit($unit2));

        $priceAttribute1 = $this->getEntity(PriceAttributePriceList::class, ['id' => 1])
            ->setName('Price Attribute 1')
            ->addCurrencyByCode('USD')
            ->addCurrencyByCode('EUR');
        $priceAttribute2 = $this->getEntity(PriceAttributePriceList::class, ['id' => 2])
            ->setName('Price Attribute 2')
            ->addCurrencyByCode('USD');

        $priceRepository = $this->createMock(ObjectRepository::class);
        $price1USD = (new PriceAttributeProductPrice())->setUnit($unit1)
            ->setPrice(Price::create('0', 'USD'))
            ->setQuantity(1)
            ->setPriceList($priceAttribute1)
            ->setProduct($product);
        $price1EUR = (new PriceAttributeProductPrice())->setUnit($unit1)
            ->setPrice(Price::create('80', 'EUR'))
            ->setQuantity(1)
            ->setPriceList($priceAttribute1)
            ->setProduct($product);
        $price2USD = (new PriceAttributeProductPrice())->setUnit($unit2)
            ->setPrice(Price::create('150', 'USD'))
            ->setQuantity(1)
            ->setPriceList($priceAttribute2)
            ->setProduct($product);
        $priceRepository->expects($this->once())->method('findBy')->willReturn([$price1USD, $price1EUR, $price2USD]);

        $attributeRepository = $this->createMock(ObjectRepository::class);
        $attributeRepository->expects($this->once())
            ->method('findAll')
            ->willReturn([$priceAttribute1, $priceAttribute2]);

        $em->expects($this->exactly(2))->method('getRepository')->willReturnMap([
            ['OroPricingBundle:PriceAttributePriceList', $attributeRepository],
            ['OroPricingBundle:PriceAttributeProductPrice', $priceRepository],
        ]);
        $this->registry->expects($this->once())->method('getManagerForClass')->willReturn($em);

        $form = $this->factory->create(ProductType::NAME, $product, []);
        $expected = [
            1 => [
                $price1USD,
                $price1EUR,
                (new PriceAttributeProductPrice())
                    ->setUnit($unit2)
                    ->setPrice(Price::create(null, 'EUR'))
                    ->setQuantity(1)
                    ->setPriceList($priceAttribute1)
                    ->setProduct($product),
                (new PriceAttributeProductPrice())
                    ->setUnit($unit2)
                    ->setPrice(Price::create(null, 'USD'))
                    ->setQuantity(1)
                    ->setPriceList($priceAttribute1)
                    ->setProduct($product)
            ],
            2 => [
                $price2USD,
                (new PriceAttributeProductPrice())
                    ->setUnit($unit1)
                    ->setPrice(Price::create(null, 'USD'))
                    ->setQuantity(1)
                    ->setPriceList($priceAttribute2)
                    ->setProduct($product)
            ]
        ];

        $actual = $form->get(PriceAttributesProductFormExtension::PRODUCT_PRICE_ATTRIBUTES_PRICES)->getData();
        $this->assertEquals($expected, $actual);
    }

    public function testPostSubmitNewPricesPersisted()
    {
        $em = $this->createMock(ObjectManager::class);

        $product = new Product();
        $unit = (new ProductUnit())->setCode('item');
        $product->addUnitPrecision((new ProductUnitPrecision())->setUnit($unit));

        $priceAttribute = $this->getEntity(PriceAttributePriceList::class, ['id' => 1])
            ->setName('Price Attribute 1')
            ->addCurrencyByCode('USD')
            ->addCurrencyByCode('EUR');

        $priceRepository = $this->createMock(ObjectRepository::class);
        $priceUSD = $this->getEntity(PriceAttributeProductPrice::class, ['id' => 1])
            ->setUnit($unit)
            ->setPrice(Price::create('100', 'USD'))
            ->setQuantity(1)
            ->setPriceList($priceAttribute)
            ->setProduct($product);
        $priceRepository->expects($this->once())->method('findBy')->willReturn([$priceUSD]);

        $attributeRepository = $this->createMock(ObjectRepository::class);
        $attributeRepository->expects($this->once())
            ->method('findAll')
            ->willReturn([$priceAttribute]);

        $em->expects($this->exactly(2))->method('getRepository')->willReturnMap([
            ['OroPricingBundle:PriceAttributePriceList', $attributeRepository],
            ['OroPricingBundle:PriceAttributeProductPrice', $priceRepository],
        ]);
        $this->registry->expects($this->once())->method('getManagerForClass')->willReturn($em);

        $form = $this->factory->create(ProductType::NAME, $product, []);

        // Expect that persist method for new price instance was called on post submit
        $em->expects($this->once())->method('persist')->with(
            (new PriceAttributeProductPrice())
                ->setUnit($unit)
                ->setPrice(Price::create('0', 'EUR'))
                ->setQuantity(1)
                ->setPriceList($priceAttribute)
                ->setProduct($product)
        );

        $form->submit([
            PriceAttributesProductFormExtension::PRODUCT_PRICE_ATTRIBUTES_PRICES => [
                1 => [
                    [ProductAttributePriceType::PRICE => '100'],
                    [ProductAttributePriceType::PRICE => '0'],
                ]
            ]
        ]);
    }

    public function testPostSubmitPricesWithoutValueRemoved()
    {
        $em = $this->createMock(ObjectManager::class);

        $product = new Product();
        $unit = (new ProductUnit())->setCode('item');
        $product->addUnitPrecision((new ProductUnitPrecision())->setUnit($unit));

        $priceAttribute = $this->getEntity(PriceAttributePriceList::class, ['id' => 1])
            ->setName('Price Attribute 1')
            ->addCurrencyByCode('EUR')
            ->addCurrencyByCode('USD');

        $priceRepository = $this->createMock(ObjectRepository::class);
        $priceUSD = $this->getEntity(PriceAttributeProductPrice::class, ['id' => 1])
            ->setUnit($unit)
            ->setPrice(Price::create('100', 'USD'))
            ->setQuantity(1)
            ->setPriceList($priceAttribute)
            ->setProduct($product);
        $priceRepository->expects($this->once())->method('findBy')->willReturn([$priceUSD]);

        $attributeRepository = $this->createMock(ObjectRepository::class);
        $attributeRepository->expects($this->once())
            ->method('findAll')
            ->willReturn([$priceAttribute]);

        $em->expects($this->exactly(2))->method('getRepository')->willReturnMap([
            ['OroPricingBundle:PriceAttributePriceList', $attributeRepository],
            ['OroPricingBundle:PriceAttributeProductPrice', $priceRepository],
        ]);
        $this->registry->expects($this->once())->method('getManagerForClass')->willReturn($em);

        $form = $this->factory->create(ProductType::NAME, $product, []);

        // Expect that remove method for nullable price instance was called on post submit
        $em->expects($this->once())->method('remove')->with($priceUSD);
        // For new objects method persist was never called
        $em->expects($this->never())->method('persist');

        $form->submit([
            PriceAttributesProductFormExtension::PRODUCT_PRICE_ATTRIBUTES_PRICES => [
                1 => [
                    [ProductAttributePriceType::PRICE => ''],
                    [ProductAttributePriceType::PRICE => ''],
                ]
            ]
        ]);
    }

    public function testGetExtendedType()
    {
        $extension = new PriceAttributesProductFormExtension($this->registry);
        $this->assertEquals(ProductType::NAME, $extension->getExtendedType());
    }
}

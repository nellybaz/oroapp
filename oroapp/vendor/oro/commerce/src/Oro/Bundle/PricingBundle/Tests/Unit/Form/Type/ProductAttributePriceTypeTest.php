<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\PreloadedExtension;

use Oro\Component\Testing\Unit\FormIntegrationTestCase;
use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\PricingBundle\Entity\PriceAttributeProductPrice;
use Oro\Bundle\PricingBundle\Form\Type\ProductAttributePriceType;
use Oro\Bundle\PricingBundle\Tests\Unit\Form\Extension\Stub\RoundingServiceStub;

class ProductAttributePriceTypeTest extends FormIntegrationTestCase
{
    /**
     * @return array
     */
    protected function getExtensions()
    {
        $extensions = [
            new PreloadedExtension(
                [
                    ProductAttributePriceType::NAME => new ProductAttributePriceType(new RoundingServiceStub())
                ],
                []
            )
        ];

        return $extensions;
    }

    public function testSubmit()
    {
        $productPrice = new PriceAttributeProductPrice();
        $productPrice->setPrice(Price::create('100', 'USD'));
        $form = $this->factory->create(ProductAttributePriceType::NAME, $productPrice, []);

        $form->submit([ProductAttributePriceType::PRICE => '500']);
        $this->assertTrue($form->isValid());
    }

    public function testSubmittedDataMapping()
    {
        $productPrice = new PriceAttributeProductPrice();
        $productPrice->setPrice(Price::create('100', 'USD'));

        $form = $this->factory->create(ProductAttributePriceType::NAME, $productPrice, []);
        $this->assertSame('100', $form->get(ProductAttributePriceType::PRICE)->getData());

        $form->submit([ProductAttributePriceType::PRICE => '500']);
        $this->assertEquals(Price::create('500', 'USD'), $productPrice->getPrice());
    }

    public function testSubmitWithCorrectPrecision()
    {
        $productPrice = new PriceAttributeProductPrice();
        $productPrice->setPrice(Price::create('100', 'USD'));
        $form = $this->factory->create(ProductAttributePriceType::NAME, $productPrice, []);
        $form->submit([ProductAttributePriceType::PRICE => '500.1234']);
        $this->assertTrue($form->isValid());
        $this->assertEquals('500.1234', $form->get(ProductAttributePriceType::PRICE)->getData());
    }
}

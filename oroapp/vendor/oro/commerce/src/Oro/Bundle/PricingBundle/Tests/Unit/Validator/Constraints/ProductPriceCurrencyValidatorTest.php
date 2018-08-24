<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Validator\Constraints;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\ProductPrice;
use Oro\Bundle\PricingBundle\Validator\Constraints\ProductPriceCurrency;
use Oro\Bundle\PricingBundle\Validator\Constraints\ProductPriceCurrencyValidator;
use Symfony\Component\Validator\Constraint;

class ProductPriceCurrencyValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ProductPriceCurrency
     */
    protected $constraint;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|\Symfony\Component\Validator\ExecutionContextInterface
     */
    protected $context;

    /**
     * @var ProductPriceCurrencyValidator
     */
    protected $validator;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->constraint = new ProductPriceCurrency();
        $this->context = $this->createMock('Symfony\Component\Validator\ExecutionContextInterface');

        $this->validator = new ProductPriceCurrencyValidator();
        $this->validator->initialize($this->context);
    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        unset($this->constraint, $this->context, $this->validator);
    }

    public function testConfiguration()
    {
        $this->assertEquals('oro_pricing_product_price_currency_validator', $this->constraint->validatedBy());
        $this->assertEquals(Constraint::CLASS_CONSTRAINT, $this->constraint->getTargets());
    }

    public function testGetDefaultOption()
    {
        $this->assertNull($this->constraint->getDefaultOption());
    }

    public function testValidateWithAllowedPrice()
    {
        $price = new Price();
        $price
            ->setValue('50')
            ->setCurrency('USD');

        $productPrice = $this->getProductPrice();
        $productPrice->setPrice($price);

        $this->context->expects($this->never())
            ->method('addViolationAt');

        $this->validator->validate($productPrice, $this->constraint);
    }

    public function testValidateWithNotAllowedCurrency()
    {
        $invalidCurrency = 'ABC';

        $price = new Price();
        $price
            ->setValue('50')
            ->setCurrency($invalidCurrency);

        $productPrice = $this->getProductPrice();
        $productPrice->setPrice($price);

        $this->context->expects($this->once())
            ->method('addViolationAt')
            ->with(
                'price.currency',
                $this->constraint->message,
                $this->equalTo(['%invalidCurrency%' => $invalidCurrency])
            );

        $this->validator->validate($productPrice, $this->constraint);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage must be instance of "Oro\Bundle\PricingBundle\Entity\BaseProductPrice", "NULL" given
     */
    public function testNotExpectedValueException()
    {
        $this->validator->validate(null, $this->constraint);
    }

    public function testWithoutPrice()
    {
        $productPrice = new ProductPrice();

        $this->context->expects($this->never())
            ->method('addViolationAt');

        $this->validator->validate($productPrice, $this->constraint);
    }

    public function testWithoutPriceList()
    {
        $productPrice = new ProductPrice();
        $productPrice->setPrice(new Price());

        $this->context
            ->expects($this->never())
            ->method('addViolationAt');

        $this->validator->validate($productPrice, $this->constraint);
    }

    /**
     * @return ProductPrice
     */
    public function getProductPrice()
    {
        $priceList = new PriceList();
        $priceList->setCurrencies(['USD', 'EUR']);

        $productPrice = new ProductPrice();
        $productPrice->setPriceList($priceList);

        return $productPrice;
    }
}

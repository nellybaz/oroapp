<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

use Oro\Bundle\CurrencyBundle\Entity\Price;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\ProductPrice;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;
use Oro\Bundle\ProductBundle\Entity\ProductUnitPrecision;
use Oro\Bundle\PricingBundle\Validator\Constraints\ProductPriceAllowedUnits;
use Oro\Bundle\PricingBundle\Validator\Constraints\ProductPriceAllowedUnitsValidator;

class ProductPriceAllowedUnitsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ProductPriceAllowedUnits
     */
    protected $constraint;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|\Symfony\Component\Validator\ExecutionContextInterface
     */
    protected $context;

    /**
     * @var ProductPriceAllowedUnitsValidator
     */
    protected $validator;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->constraint = new ProductPriceAllowedUnits();
        $this->context = $this->createMock('Symfony\Component\Validator\ExecutionContextInterface');

        $this->validator = new ProductPriceAllowedUnitsValidator();
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
        $this->assertEquals('oro_pricing_product_price_allowed_units_validator', $this->constraint->validatedBy());
        $this->assertEquals(Constraint::CLASS_CONSTRAINT, $this->constraint->getTargets());
    }

    public function testGetDefaultOption()
    {
        $this->assertNull($this->constraint->getDefaultOption());
    }

    public function testValidateWithAllowedUnit()
    {
        $unit = new ProductUnit();
        $unit->setCode('kg');

        $price = $this->getProductPrice();
        $price->setUnit($unit);

        $this->context->expects($this->never())
            ->method('addViolation');

        $this->validator->validate($price, $this->constraint);
    }

    public function testValidateWithNotAllowedUnit()
    {
        $unit = new ProductUnit();
        $unit->setCode('invalidCode');

        $price = $this->getProductPrice();
        $price->setUnit($unit);

        $this->context->expects($this->once())
            ->method('addViolationAt')
            ->with('unit', $this->constraint->notAllowedUnitMessage);

        $this->validator->validate($price, $this->constraint);
    }

    public function testValidateNotExistingUnit()
    {
        $price = $this->getProductPrice();

        // Set null to product unit
        $class = new \ReflectionClass($price);
        $prop  = $class->getProperty('unit');
        $prop->setAccessible(true);
        $prop->setValue($price, null);

        $this->context->expects($this->once())
            ->method('addViolationAt')
            ->with('unit', $this->constraint->notExistingUnitMessage);

        $this->validator->validate($price, $this->constraint);
    }

    public function testValidateNotExistingProduct()
    {
        $price = $this->getProductPrice();

        // Set null to product and productSku
        $class = new \ReflectionClass($price);
        $product  = $class->getProperty('product');
        $product->setAccessible(true);
        $product->setValue($price, null);

        $productSku  = $class->getProperty('productSku');
        $productSku->setAccessible(true);
        $productSku->setValue($price, null);

        $this->context->expects($this->once())
            ->method('addViolationAt')
            ->with('product', $this->constraint->notExistingProductMessage);

        $this->validator->validate($price, $this->constraint);
    }

    /**
     * @return ProductPrice
     */
    public function getProductPrice()
    {
        $unit = new ProductUnit();
        $unit->setCode('kg');

        $unitPrecision = new ProductUnitPrecision();
        $unitPrecision
            ->setUnit($unit)
            ->setPrecision(3);

        $product = new Product();
        $product
            ->setSku('testSku')
            ->addUnitPrecision($unitPrecision);

        $price = new Price();
        $price
            ->setValue('50')
            ->setCurrency('USD');

        $productPrice = new ProductPrice();
        $productPrice
            ->setPriceList(new PriceList())
            ->setProduct($product)
            ->setQuantity('10')
            ->setPrice($price);

        return $productPrice;
    }
}

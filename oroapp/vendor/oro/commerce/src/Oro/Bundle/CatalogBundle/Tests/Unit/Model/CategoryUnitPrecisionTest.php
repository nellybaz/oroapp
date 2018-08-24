<?php

namespace Oro\Bundle\CatalogBundle\Tests\Unit\Model;

use Oro\Component\Testing\Unit\EntityTestCaseTrait;
use Oro\Bundle\CatalogBundle\Model\CategoryUnitPrecision;
use Oro\Bundle\ProductBundle\Entity\ProductUnit;

class CategoryUnitPrecisionTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    /** @var CategoryUnitPrecision $entity */
    protected $entity;

    public function setUp()
    {
        $this->entity = new CategoryUnitPrecision();
    }

    public function tearDown()
    {
        unset($this->entity);
    }

    public function testProperties()
    {
        $properties = [
            ['unit', new ProductUnit()],
            ['precision', 2],
        ];
        $this->assertPropertyAccessors(new CategoryUnitPrecision(), $properties);
    }

    public function testGetEntityIdentifier()
    {
        $this->assertNull($this->entity->getEntityIdentifier());
    }

    public function testGetProduct()
    {
        $this->assertNull($this->entity->getProduct());
    }

    public function testGetProductHolder()
    {
        $this->assertSame($this->entity, $this->entity->getProductHolder());
    }

    public function testGetProductUnitCode()
    {
        $this->assertNull($this->entity->getProductUnitCode());

        $this->entity->setUnit((new ProductUnit)->setCode('code'));

        $this->assertSame('code', $this->entity->getProductUnitCode());
    }

    public function testGetProductUnit()
    {
        $unit = new ProductUnit();
        $unit->setCode('code');

        $this->entity->setUnit($unit);

        $this->assertSame($unit, $this->entity->getProductUnit());
    }

    public function testCreate()
    {
        $unit = (new ProductUnit)->setCode('code');
        $precision = 5;

        $newEntity = $this->entity->create($precision, $unit);
        $this->entity->setUnit($unit)->setPrecision($precision);

        $this->assertEquals($newEntity, $this->entity);
    }
}

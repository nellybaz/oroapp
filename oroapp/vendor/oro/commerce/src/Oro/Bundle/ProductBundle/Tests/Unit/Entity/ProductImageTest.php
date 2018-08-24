<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Oro\Component\Testing\Unit\EntityTestCaseTrait;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\ProductImage;

class ProductImageTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    /**
     * @var ProductImage
     */
    protected $productImage;

    public function setUp()
    {
        $this->productImage = new ProductImage();
    }

    public function testProperties()
    {
        $properties = [
            ['id', '123'],
            ['product', new Product()],
        ];

        $this->assertPropertyAccessors($this->productImage, $properties);
    }

    public function testTypesMutators()
    {
        $this->assertEquals([], $this->productImage->getTypes()->toArray());

        $this->productImage->addType('main');
        $this->productImage->addType('listing');

        $this->assertEquals(
            ['main', 'listing'],
            array_keys(
                $this->productImage->getTypes()->toArray()
            )
        );
    }

    public function testHasType()
    {
        $this->productImage->addType('main');

        $this->assertTrue($this->productImage->hasType('main'));
        $this->assertFalse($this->productImage->hasType('someType'));
    }
}

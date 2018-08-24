<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Provider;

use Oro\Bundle\CatalogBundle\Provider\ProductsContentVariantProvider;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Provider\ProductCollectionContentVariantProvider;
use Oro\Component\WebCatalog\Entity\ContentNodeInterface;

class ProductCollectionContentVariantProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ProductsContentVariantProvider
     */
    protected $provider;

    public function setUp()
    {
        $this->provider = new ProductCollectionContentVariantProvider();
    }

    public function testSupportedClass()
    {
        $this->assertTrue($this->provider->isSupportedClass(Product::class));
        $this->assertFalse($this->provider->isSupportedClass('Test'));
    }

    public function testGetRecordId()
    {
        $array['productCollectionProductId'] = 1;
        $this->assertEquals($array['productCollectionProductId'], $this->provider->getRecordId($array));
    }

    public function testGetLocalizedValues()
    {
        /** @var ContentNodeInterface $node */
        $node = $this->getMockBuilder(ContentNodeInterface::class)->getMock();
        $this->assertEquals([], $this->provider->getLocalizedValues($node));
    }

    public function testGetValues()
    {
        /** @var ContentNodeInterface $node */
        $node = $this->getMockBuilder(ContentNodeInterface::class)->getMock();
        $this->assertEquals([], $this->provider->getValues($node));
    }
}

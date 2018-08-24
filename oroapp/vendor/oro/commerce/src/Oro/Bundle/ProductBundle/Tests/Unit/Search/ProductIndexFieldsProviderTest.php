<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Search;

use Oro\Bundle\ProductBundle\Search\ProductIndexFieldsProvider;

class ProductIndexFieldsProviderTest extends \PHPUnit_Framework_TestCase
{
    /** @var ProductIndexFieldsProvider */
    protected $provider;

    protected function setUp()
    {
        $this->provider = new ProductIndexFieldsProvider();
    }

    public function testAccessors()
    {
        $field = 'test';

        $this->assertFalse($this->provider->isForceIndexed($field));

        $this->provider->addForceIndexed($field);

        $this->assertTrue($this->provider->isForceIndexed($field));
    }
}

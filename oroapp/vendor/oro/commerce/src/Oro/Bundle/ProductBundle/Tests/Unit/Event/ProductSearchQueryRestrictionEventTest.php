<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Event;

use Oro\Bundle\ProductBundle\Event\ProductSearchQueryRestrictionEvent;
use Oro\Bundle\SearchBundle\Query\Query;

class ProductSearchQueryRestrictionEventTest extends \PHPUnit_Framework_TestCase
{
    public function testGetQuery()
    {
        $query = $this->createMock(Query::class);

        $event = new ProductSearchQueryRestrictionEvent($query);

        $this->assertEquals($query, $event->getQuery());
    }
}

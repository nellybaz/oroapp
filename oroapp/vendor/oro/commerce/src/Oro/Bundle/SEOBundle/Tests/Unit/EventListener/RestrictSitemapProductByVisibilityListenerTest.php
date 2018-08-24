<?php

namespace Oro\Bundle\SEOBundle\Tests\Unit\EventListener;

use Doctrine\ORM\QueryBuilder;
use Oro\Bundle\SEOBundle\Event\RestrictSitemapEntitiesEvent;
use Oro\Bundle\SEOBundle\EventListener\RestrictSitemapProductByVisibilityListener;
use Oro\Bundle\VisibilityBundle\Model\ProductVisibilityQueryBuilderModifier;
use Oro\Component\Website\WebsiteInterface;

class RestrictSitemapProductByVisibilityListenerTest extends \PHPUnit_Framework_TestCase
{
    public function testRestrictQueryBuilder()
    {
        /** @var QueryBuilder|\PHPUnit_Framework_MockObject_MockObject $queryBuilder */
        $queryBuilder = $this->createMock(QueryBuilder::class);
        /** @var ProductVisibilityQueryBuilderModifier|\PHPUnit_Framework_MockObject_MockObject $queryModifier */
        $queryModifier = $this->createMock(ProductVisibilityQueryBuilderModifier::class);
        $queryModifier->expects($this->once())
            ->method('restrictForAnonymous')
            ->with($queryBuilder);
        $version = 1;
        $website = $this->createMock(WebsiteInterface::class);
        $event = new RestrictSitemapEntitiesEvent($queryBuilder, $version, $website);
        $listener = new RestrictSitemapProductByVisibilityListener($queryModifier);
        $listener->restrictQueryBuilder($event);
    }
}

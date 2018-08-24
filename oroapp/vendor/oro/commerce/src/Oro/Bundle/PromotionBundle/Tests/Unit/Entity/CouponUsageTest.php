<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Entity;

use Oro\Bundle\PromotionBundle\Entity\Coupon;
use Oro\Bundle\PromotionBundle\Entity\Promotion;
use Oro\Bundle\PromotionBundle\Entity\CouponUsage;
use Oro\Component\Testing\Unit\EntityTestCaseTrait;

class CouponUsageTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    public function testAccessors()
    {
        $this->assertPropertyAccessors(new CouponUsage(), [
            ['id', 42],
            ['coupon', new Coupon()],
            ['promotion', new Promotion()]
        ]);
    }
}

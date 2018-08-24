<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\CouponGeneration;

use Oro\Bundle\ActionBundle\Model\ActionData;
use Oro\Bundle\PromotionBundle\CouponGeneration\Coupon\CouponGeneratorInterface;
use Oro\Bundle\PromotionBundle\CouponGeneration\Options\CouponGenerationOptions;
use Oro\Bundle\PromotionBundle\CouponGeneration\CouponGenerationHandler;

use Symfony\Component\Form\FormInterface;

class CouponGenerationHandlerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CouponGeneratorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $couponGenerator;

    /**
     * @var CouponGenerationHandler
     */
    protected $couponGenerationHandler;

    protected function setUp()
    {
        $this->couponGenerator = $this->createMock(CouponGeneratorInterface::class);
        $this->couponGenerationHandler = new CouponGenerationHandler($this->couponGenerator);
    }

    public function testProcess()
    {
        $options = new CouponGenerationOptions();

        $this->couponGenerator
            ->expects($this->once())
            ->method('generateAndSave')
            ->with($this->identicalTo($options));

        $this->couponGenerationHandler->process($options);
    }
}

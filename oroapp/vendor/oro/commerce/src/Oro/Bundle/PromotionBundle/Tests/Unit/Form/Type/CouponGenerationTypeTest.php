<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Form\Type;

use Oro\Bundle\SecurityBundle\Authentication\TokenAccessorInterface;
use Oro\Bundle\PromotionBundle\Form\Type\CouponGenerationType;

use Symfony\Component\Form\Test\FormIntegrationTestCase;

/**
 * TODO: Will be improved in BB-11517
 */
class CouponGenerationTypeTest extends FormIntegrationTestCase
{
    /**
     * @var TokenAccessorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $tokenAccessor;

    /**
     * @var CouponGenerationType
     */
    protected $couponGenerationType;

    protected function setUp()
    {
        parent::setUp();
        $this->tokenAccessor = $this->createMock(TokenAccessorInterface::class);
        $this->couponGenerationType = new CouponGenerationType($this->tokenAccessor);
    }

    public function testGetName()
    {
        $this->assertEquals(CouponGenerationType::NAME, $this->couponGenerationType->getName());
    }

    public function testGetBlockPrefix()
    {
        $this->assertEquals(CouponGenerationType::NAME, $this->couponGenerationType->getBlockPrefix());
    }
}

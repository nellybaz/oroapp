<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Provider;

use Oro\Bundle\PromotionBundle\Discount\DisabledDiscountDecorator;
use Oro\Bundle\PromotionBundle\Entity\AppliedPromotion;
use Oro\Bundle\PromotionBundle\Entity\Promotion;
use Oro\Bundle\PromotionBundle\Provider\PromotionDiscountsProviderInterface;
use Oro\Bundle\PromotionBundle\Discount\DiscountContext;
use Oro\Bundle\PromotionBundle\Provider\DisabledPromotionDiscountProviderDecorator;
use Oro\Bundle\PromotionBundle\Tests\Unit\Discount\Stub\DiscountStub;
use Oro\Bundle\PromotionBundle\Tests\Unit\Entity\Stub\Order;
use Oro\Component\Testing\Unit\EntityTrait;

class DisabledPromotionDiscountProviderDecoratorTest extends \PHPUnit_Framework_TestCase
{
    const ENABLED_PROMOTION_ID = 7;
    const DISABLED_PROMOTION_ID = 2;

    use EntityTrait;

    /**
     * @var PromotionDiscountsProviderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $promotionDiscountsProvider;

    /**
     * @var DisabledPromotionDiscountProviderDecorator
     */
    private $providerDecorator;

    protected function setUp()
    {
        $this->promotionDiscountsProvider = $this->createMock(PromotionDiscountsProviderInterface::class);
        $this->providerDecorator = new DisabledPromotionDiscountProviderDecorator($this->promotionDiscountsProvider);
    }

    public function testGetDiscountsWithNotSupportedSourceEntity()
    {
        $sourceEntity = new \stdClass();
        $context = new DiscountContext();

        $discounts = [new DiscountStub(), new DiscountStub()];

        $this->promotionDiscountsProvider
            ->expects($this->once())
            ->method('getDiscounts')
            ->with($sourceEntity, $context)
            ->willReturn($discounts);

        $this->assertEquals($discounts, $this->providerDecorator->getDiscounts($sourceEntity, $context));
    }

    public function testGetDiscountsWithSupportedSourceEntity()
    {
        $sourceEntity = new Order();
        $sourceEntity->setAppliedPromotions([
            (new AppliedPromotion())->setActive(false)->setSourcePromotionId(self::DISABLED_PROMOTION_ID),
            (new AppliedPromotion())->setActive(true)->setSourcePromotionId(self::ENABLED_PROMOTION_ID)
        ]);

        $context = new DiscountContext();

        /** @var Promotion $disabledPromotion */
        $disabledPromotion = $this->getEntity(Promotion::class, ['id' => self::DISABLED_PROMOTION_ID]);

        /** @var Promotion $enabledPromotion */
        $enabledPromotion = $this->getEntity(Promotion::class, ['id' => self::ENABLED_PROMOTION_ID]);

        $discountWithDisabledPromotion = (new DiscountStub())->setPromotion($disabledPromotion);
        $discountWithEnabledPromotion = (new DiscountStub())->setPromotion($enabledPromotion);

        $discounts = [$discountWithDisabledPromotion, $discountWithEnabledPromotion];

        $this->promotionDiscountsProvider
            ->expects($this->once())
            ->method('getDiscounts')
            ->with($sourceEntity, $context)
            ->willReturn($discounts);

        $expectedDiscounts = [
            new DisabledDiscountDecorator($discountWithDisabledPromotion),
            $discountWithEnabledPromotion
        ];

        $this->assertEquals($expectedDiscounts, $this->providerDecorator->getDiscounts($sourceEntity, $context));
    }
}

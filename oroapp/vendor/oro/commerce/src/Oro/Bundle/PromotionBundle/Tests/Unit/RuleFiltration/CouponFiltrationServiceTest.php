<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\RuleFiltration;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManager;
use Oro\Bundle\PromotionBundle\Context\ContextDataConverterInterface;
use Oro\Bundle\PromotionBundle\Entity\Coupon;
use Oro\Bundle\PromotionBundle\Entity\Promotion;
use Oro\Bundle\PromotionBundle\Entity\Repository\CouponRepository;
use Oro\Bundle\PromotionBundle\Model\AppliedPromotionData;
use Oro\Bundle\RuleBundle\RuleFiltration\RuleFiltrationServiceInterface;
use Oro\Bundle\PromotionBundle\RuleFiltration\CouponFiltrationService;
use Oro\Component\Testing\Unit\EntityTrait;

class CouponFiltrationServiceTest extends AbstractSkippableFiltrationServiceTest
{
    use EntityTrait;

    /**
     * @var RuleFiltrationServiceInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $filtrationService;

    /**
     * @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject
     */
    private $registry;

    /**
     * @var CouponFiltrationService
     */
    private $couponFiltrationService;

    protected function setUp()
    {
        $this->filtrationService = $this->createMock(RuleFiltrationServiceInterface::class);
        $this->registry = $this->createMock(ManagerRegistry::class);
        $this->couponFiltrationService = new CouponFiltrationService($this->filtrationService, $this->registry);
    }

    public function testGetFilteredRuleOwnersWithNotPromotionDataInterfaceRuleOwners()
    {
        $ruleOwners = [new \stdClass()];
        $context = [];

        $this->filtrationService
            ->expects($this->once())
            ->method('getFilteredRuleOwners')
            ->with([], $context)
            ->willReturnCallback(function ($ruleOwners) {
                return $ruleOwners;
            });

        $this->registry
            ->expects($this->never())
            ->method('getManagerForClass');

        static::assertEmpty($this->couponFiltrationService->getFilteredRuleOwners($ruleOwners, $context));
    }

    public function testGetFilteredRuleOwnersWithNoAppliedCouponsAndRuleOwnerUsesCoupons()
    {
        $appliedPromotion = (new Promotion())->setUseCoupons(true);
        $ruleOwners = [$appliedPromotion];
        $context = [];

        $this->filtrationService
            ->expects($this->once())
            ->method('getFilteredRuleOwners')
            ->with([], $context)
            ->willReturnCallback(function ($ruleOwners) {
                return $ruleOwners;
            });

        $this->registry
            ->expects($this->never())
            ->method('getManagerForClass');

        static::assertEmpty($this->couponFiltrationService->getFilteredRuleOwners($ruleOwners, $context));
    }

    public function testGetFilteredRuleOwnersWithNoAppliedCouponsAndRuleOwnerNotUsesCoupons()
    {
        $appliedPromotion = (new Promotion())->setUseCoupons(false);
        $ruleOwners = [$appliedPromotion];
        $context = [];

        $this->filtrationService
            ->expects($this->once())
            ->method('getFilteredRuleOwners')
            ->with([$appliedPromotion], $context)
            ->willReturnCallback(function ($ruleOwners) {
                return $ruleOwners;
            });

        $this->registry
            ->expects($this->never())
            ->method('getManagerForClass');

        static::assertEquals(
            [$appliedPromotion],
            $this->couponFiltrationService->getFilteredRuleOwners($ruleOwners, $context)
        );
    }

    public function testGetFilteredPromotionsWithAppliedCoupons()
    {
        $appliedPromotionWithCoupon = $this->getEntity(Promotion::class, ['useCoupons' => true, 'id' => 5]);
        $appliedPromotionWithoutCoupon = $this->getEntity(Promotion::class, ['useCoupons' => true, 'id' => 7]);
        $ruleOwners = [$appliedPromotionWithCoupon, $appliedPromotionWithoutCoupon];

        $appliedCoupons = [(new Coupon())->setCode('XYZ')];
        $context = [ContextDataConverterInterface::APPLIED_COUPONS => new ArrayCollection($appliedCoupons)];

        $this->filtrationService
            ->expects($this->once())
            ->method('getFilteredRuleOwners')
            ->with([$appliedPromotionWithCoupon], $context)
            ->willReturnCallback(function ($ruleOwners) {
                return $ruleOwners;
            });

        /** @var CouponRepository|\PHPUnit_Framework_MockObject_MockObject $repository */
        $repository = $this->createMock(CouponRepository::class);
        $repository
            ->expects($this->once())
            ->method('getPromotionsWithMatchedCoupons')
            ->with([$appliedPromotionWithCoupon, $appliedPromotionWithoutCoupon], ['XYZ'])
            ->willReturn([5]);

        /** @var EntityManager|\PHPUnit_Framework_MockObject_MockObject $entityManager */
        $entityManager = $this->createMock(EntityManager::class);

        $entityManager
            ->expects($this->once())
            ->method('getRepository')
            ->with(Coupon::class)
            ->willReturn($repository);

        $this->registry
            ->expects($this->once())
            ->method('getManagerForClass')
            ->with(Coupon::class)
            ->willReturn($entityManager);

        static::assertEquals(
            [$appliedPromotionWithCoupon],
            $this->couponFiltrationService->getFilteredRuleOwners($ruleOwners, $context)
        );
    }

    public function testGetFilteredPromotionsDataWithAppliedCoupons()
    {
        $appliedCoupon = (new Coupon())->setCode('XYZ');
        $removedCoupon = (new Coupon())->setCode('Removed');

        $promotionWithCoupon = (new AppliedPromotionData())->setUseCoupons(true)->addCoupon($appliedCoupon);
        $promotionWithRemovedCoupon = (new AppliedPromotionData())->setUseCoupons(true)->addCoupon($removedCoupon);
        $ruleOwners = [$promotionWithCoupon, $promotionWithRemovedCoupon];

        $context = [ContextDataConverterInterface::APPLIED_COUPONS => new ArrayCollection([$appliedCoupon])];

        $this->filtrationService
            ->expects($this->once())
            ->method('getFilteredRuleOwners')
            ->with([$promotionWithCoupon], $context)
            ->willReturnCallback(function ($ruleOwners) {
                return $ruleOwners;
            });

        $this->registry
            ->expects($this->never())
            ->method('getManagerForClass');

        static::assertEquals(
            [$promotionWithCoupon],
            $this->couponFiltrationService->getFilteredRuleOwners($ruleOwners, $context)
        );
    }

    public function testGetFilteredPromotionsDataAndCheckThatCouponIsUsedOnce()
    {
        $appliedCoupon = (new Coupon())->setCode('XYZ');
        $appliedPromotion = (new AppliedPromotionData())->setUseCoupons(true)->addCoupon($appliedCoupon);

        $context = [ContextDataConverterInterface::APPLIED_COUPONS => new ArrayCollection([$appliedCoupon])];

        $this->filtrationService
            ->expects($this->once())
            ->method('getFilteredRuleOwners')
            ->with([$appliedPromotion], $context)
            ->willReturnCallback(function ($ruleOwners) {
                return $ruleOwners;
            });

        $this->registry
            ->expects($this->never())
            ->method('getManagerForClass');

        static::assertEquals(
            [$appliedPromotion],
            $this->couponFiltrationService->getFilteredRuleOwners([$appliedPromotion], $context)
        );
    }

    public function testFilterIsSkippable()
    {
        $this->assertServiceSkipped($this->couponFiltrationService, $this->filtrationService);
    }
}

<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Datagrid\Extension\MassAction;

use Oro\Bundle\DataGridBundle\Extension\MassAction\MassActionHandlerArgs;
use Oro\Bundle\DataGridBundle\Extension\MassAction\MassActionResponse;
use Oro\Bundle\PromotionBundle\Datagrid\Extension\MassAction\CouponUnassignActionHandler;
use Symfony\Component\Translation\TranslatorInterface;

class CouponUnassignActionHandlerTest extends AbstractCouponMassActionHandlerTest
{
    /**
     * @var TranslatorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $translator;

    protected function setUp()
    {
        $this->translator = $this->createMock(TranslatorInterface::class);

        parent::setUp();
    }

    /**
     * {@inheritdoc}
     */
    protected function createHandler()
    {
        $this->handler = new CouponUnassignActionHandler(
            $this->doctrineHelper,
            $this->aclHelper
        );
        $this->handler->setTranslator($this->translator);
    }

    /**
     * {@inheritdoc}
     */
    protected function assertExecuteCalled(array $coupons, MassActionHandlerArgs $args)
    {
        foreach ($coupons as $couponMock) {
            $couponMock->expects($this->once())
                ->method('setPromotion')
                ->with(null);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function assertGetResponseCalled($entitiesCount)
    {
        $translatedMessage = $entitiesCount . ' processed';
        $this->translator->expects($this->once())
            ->method('transChoice')
            ->with(
                'oro.promotion.mass_action.unassign.success_message',
                $entitiesCount,
                ['%count%' => $entitiesCount]
            )
            ->willReturn($translatedMessage);

        return new MassActionResponse(true, $translatedMessage, ['count' => $entitiesCount]);
    }
}

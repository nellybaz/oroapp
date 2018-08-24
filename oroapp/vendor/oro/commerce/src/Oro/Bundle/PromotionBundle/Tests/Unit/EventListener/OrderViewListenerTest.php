<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\EventListener;

use Symfony\Component\Form\FormView;
use Symfony\Component\Translation\TranslatorInterface;
use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\PromotionBundle\EventListener\OrderViewListener;
use Oro\Bundle\UIBundle\Event\BeforeListRenderEvent;
use Oro\Bundle\UIBundle\View\ScrollData;

class OrderViewListenerTest extends \PHPUnit_Framework_TestCase
{
    /** @var TranslatorInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $translator;

    /** @var OrderViewListener */
    protected $listener;

    public function setUp()
    {
        $this->translator = $this->createMock(TranslatorInterface::class);
        $this->listener = new OrderViewListener($this->translator);
    }

    public function testOnViewWhenNoDiscountBlockExist()
    {
        /** @var \Twig_Environment|\PHPUnit_Framework_MockObject_MockObject $environment */
        $environment = $this->createMock(\Twig_Environment::class);
        $environment
            ->expects($this->never())
            ->method('render');

        $this->listener->onView(new BeforeListRenderEvent($environment, new ScrollData(), new Order()));
    }

    public function testOnView()
    {
        $translatedTitle = 'Discount and Promotions';
        $this->translator
            ->expects($this->once())
            ->method('trans')
            ->with('oro.promotion.sections.promotion_and_discounts.label')
            ->willReturn($translatedTitle);

        $order = new Order();

        $existingTemplate = 'Existing View template';
        $template = 'View template';
        /** @var \Twig_Environment|\PHPUnit_Framework_MockObject_MockObject $environment */
        $environment = $this->createMock(\Twig_Environment::class);
        $environment
            ->expects($this->once())
            ->method('render')
            ->with('OroPromotionBundle:AppliedPromotion:applied_promotions_view_table.html.twig', ['entity' => $order])
            ->willReturn($template);

        $scrollData = new ScrollData();
        $scrollData->addNamedBlock('discounts', 'Discounts');
        $subBlockId = $scrollData->addSubBlock('discounts');
        $scrollData->addSubBlockData('discounts', $subBlockId, $existingTemplate);

        $event = new BeforeListRenderEvent($environment, $scrollData, $order);
        $this->listener->onView($event);

        $expectedScrollData = new ScrollData();
        $expectedScrollData->addNamedBlock('discounts', $translatedTitle);
        $subBlockId = $expectedScrollData->addSubBlock('discounts');
        $expectedScrollData->addSubBlockData('discounts', $subBlockId, $existingTemplate);

        $subBlockId = $expectedScrollData->addSubBlockAsFirst('discounts');
        $expectedScrollData->addSubBlockData('discounts', $subBlockId, $template);

        $this->assertEquals($expectedScrollData, $event->getScrollData());
    }

    public function testOnEditWhenNoDiscountBlockExist()
    {
        $formView = $this->createMock(FormView::class);

        /** @var \Twig_Environment|\PHPUnit_Framework_MockObject_MockObject $environment */
        $environment = $this->createMock(\Twig_Environment::class);
        $environment
            ->expects($this->never())
            ->method('render');

        $this->listener->onEdit(new BeforeListRenderEvent($environment, new ScrollData(), new Order(), $formView));
    }

    public function testOnEdit()
    {
        $translatedTitle = 'Discount and Promotions';
        $this->translator
            ->expects($this->once())
            ->method('trans')
            ->with('oro.promotion.sections.promotion_and_discounts.label')
            ->willReturn($translatedTitle);

        $existingTemplate = 'existing template';
        $template = 'edit template';
        $scrollData = new ScrollData();
        $scrollData->addNamedBlock('discounts', 'Discounts');
        $subBlockId = $scrollData->addSubBlock('discounts');
        $scrollData->addSubBlockData('discounts', $subBlockId, $existingTemplate);

        $formView = $this->createMock(FormView::class);

        /** @var \Twig_Environment|\PHPUnit_Framework_MockObject_MockObject $environment */
        $environment = $this->createMock(\Twig_Environment::class);
        $environment->expects($this->once())
            ->method('render')
            ->with('OroPromotionBundle:Order:applied_promotions_and_coupons.html.twig', ['form' => $formView])
            ->willReturn($template);

        $event = new BeforeListRenderEvent($environment, $scrollData, new Order(), $formView);
        $this->listener->onEdit($event);

        $expectedScrollData = new ScrollData();
        $expectedScrollData->addNamedBlock('discounts', $translatedTitle);
        $subBlockId = $expectedScrollData->addSubBlock('discounts');
        $expectedScrollData->addSubBlockData('discounts', $subBlockId, $existingTemplate);

        $subBlockId = $expectedScrollData->addSubBlockAsFirst('discounts');
        $expectedScrollData->addSubBlockData('discounts', $subBlockId, $template);

        $this->assertEquals($expectedScrollData, $event->getScrollData());
    }
}

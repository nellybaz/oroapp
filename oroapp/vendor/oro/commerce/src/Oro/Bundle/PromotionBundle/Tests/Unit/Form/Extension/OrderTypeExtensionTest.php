<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Form\Extension;

use Oro\Bundle\OrderBundle\Entity\Order;
use Oro\Bundle\OrderBundle\Form\Type\OrderType;
use Oro\Bundle\PromotionBundle\Form\Type\AppliedCouponCollectionType;
use Oro\Bundle\PromotionBundle\Form\Type\AppliedPromotionCollectionTableType;
use Oro\Bundle\PromotionBundle\Form\Extension\OrderTypeExtension;
use Oro\Component\Testing\Unit\EntityTrait;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;

class OrderTypeExtensionTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var OrderTypeExtension
     */
    protected $orderTypeExtension;

    protected function setUp()
    {
        $this->orderTypeExtension = new OrderTypeExtension();
    }

    public function testBuildForm()
    {
        /** @var FormBuilderInterface|\PHPUnit_Framework_MockObject_MockObject $builder * */
        $builder = $this->createMock(FormBuilderInterface::class);

        $builder->expects($this->once())
            ->method('add')
            ->with('appliedPromotions', AppliedPromotionCollectionTableType::class);

        $builder->expects($this->once())
            ->method('addEventListener')
            ->with(FormEvents::POST_SET_DATA, $this->isType('callable'));

        $this->orderTypeExtension->buildForm($builder, []);
    }

    public function testPostSetData()
    {
        $order = $this->getEntity(Order::class, ['id' => 777]);
        /** @var FormInterface|\PHPUnit_Framework_MockObject_MockObject $form */
        $form = $this->createMock(FormInterface::class);
        $form->expects($this->once())
            ->method('add')
            ->with('appliedCoupons', AppliedCouponCollectionType::class, ['entity' => $order]);
        $event = new FormEvent($form, $order);
        $this->orderTypeExtension->postSetData($event);
    }

    public function testGetExtendedType()
    {
        $this->assertEquals(OrderType::class, $this->orderTypeExtension->getExtendedType());
    }
}

<?php

namespace Oro\Bundle\InventoryBundle\Tests\Unit\EventListener;

use Doctrine\Common\Collections\ArrayCollection;
use Oro\Bundle\CheckoutBundle\Entity\CheckoutLineItem;
use Oro\Bundle\InventoryBundle\EventListener\LineItemValidationListener;
use Oro\Bundle\InventoryBundle\Tests\Unit\EventListener\Stub\ProductStub;
use Oro\Bundle\InventoryBundle\Validator\QuantityToOrderValidatorService;
use Oro\Bundle\ShoppingListBundle\Entity\LineItem;
use Oro\Bundle\ShoppingListBundle\Event\LineItemValidateEvent;

class LineItemValidationListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var QuantityToOrderValidatorService|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $quantityValidator;

    /**
     * @var LineItemValidationListener
     */
    protected $lineItemValidationListener;

    /**
     * @var LineItemValidateEvent|\PHPUnit_Framework_MockObject_MockObject $event *
     */
    protected $event;

    protected function setUp()
    {
        $this->quantityValidator = $this->createMock(QuantityToOrderValidatorService::class);
        $this->lineItemValidationListener = new LineItemValidationListener($this->quantityValidator);
        $this->event = $this->createMock(LineItemValidateEvent::class);
    }

    public function testOnLineItemValidateDoesNotValidate()
    {
        $this->event->expects($this->once())
            ->method('getLineItems')
            ->willReturn([]);

        $this->event->expects($this->never())
            ->method('addError');
        $this->lineItemValidationListener->onLineItemValidate($this->event);
    }

    public function testOnLineItemValidateDoesNotValidateIfNotLineItem()
    {
        $this->event->expects($this->once())
            ->method('getLineItems')
            ->willReturn(['xxxx']);

        $this->event->expects($this->never())
            ->method('addError');
        $this->lineItemValidationListener->onLineItemValidate($this->event);
    }

    public function testOnLineItemValidateForCheckoutLineItem()
    {
        $lineItem1 = $this->createMock(CheckoutLineItem::class);
        $lineItem1->expects($this->once())
            ->method('isPriceFixed')
            ->willReturn(false);
        $lineItem2 = $this->createMock(CheckoutLineItem::class);
        $lineItem2->expects($this->once())
            ->method('isPriceFixed')
            ->willReturn(true);
        $lineItem3 = $this->createMock(LineItem::class);

        $this->event->expects($this->once())
            ->method('getLineItems')
            ->willReturn(new ArrayCollection([$lineItem1, $lineItem2, $lineItem3]));

        $lineItem1->expects($this->once())->method('getProduct');
        $lineItem2->expects($this->never())->method('getProduct');
        $lineItem3->expects($this->once())->method('getProduct');
        $this->lineItemValidationListener->onLineItemValidate($this->event);
    }

    public function testOnLineItemValidateAddsMaxErrorToEvent()
    {
        $maxMessage = 'maxMessage';
        $lineItem = new LineItem();
        $product = new ProductStub();
        $lineItem->setProduct($product);
        $lineItems = new ArrayCollection();
        $lineItems->add($lineItem);
        $this->event->expects($this->once())
            ->method('getLineItems')
            ->willReturn($lineItems);

        $this->quantityValidator->expects($this->once())
            ->method('getMaximumErrorIfInvalid')
            ->willReturn($maxMessage);
        $this->quantityValidator->expects($this->never())
            ->method('getMinimumErrorIfInvalid');

        $this->event->expects($this->once())
            ->method('addError');
        $this->lineItemValidationListener->onLineItemValidate($this->event);
    }

    public function testOnLineItemValidateAddsMinErrorToEvent()
    {
        $minMessage = 'minMessage';
        $lineItem = new LineItem();
        $product = new ProductStub();
        $lineItem->setProduct($product);
        $lineItems = new ArrayCollection();
        $lineItems->add($lineItem);
        $this->event->expects($this->once())
            ->method('getLineItems')
            ->willReturn($lineItems);

        $this->quantityValidator->expects($this->once())
            ->method('getMaximumErrorIfInvalid')
            ->willReturn(false);
        $this->quantityValidator->expects($this->once())
            ->method('getMinimumErrorIfInvalid')
            ->willReturn($minMessage);

        $this->event->expects($this->once())
            ->method('addError');
        $this->lineItemValidationListener->onLineItemValidate($this->event);
    }
}

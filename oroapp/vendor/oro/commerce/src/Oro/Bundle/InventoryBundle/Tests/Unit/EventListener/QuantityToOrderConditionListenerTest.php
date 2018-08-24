<?php

namespace Oro\Bundle\InventoryBundle\Tests\Unit\EventListener;

use Doctrine\Common\Collections\ArrayCollection;

use Oro\Bundle\ActionBundle\Model\ActionData;
use Oro\Bundle\CheckoutBundle\Entity\CheckoutLineItem;
use Oro\Bundle\CheckoutBundle\Entity\Checkout;
use Oro\Bundle\CheckoutBundle\Entity\CheckoutSource;
use Oro\Bundle\CheckoutBundle\Event\CheckoutValidateEvent;
use Oro\Bundle\InventoryBundle\EventListener\QuantityToOrderConditionListener;
use Oro\Bundle\InventoryBundle\Tests\Unit\EventListener\Stub\CheckoutSourceStub;
use Oro\Bundle\InventoryBundle\Validator\QuantityToOrderValidatorService;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Event\QuickAddRowCollectionValidateEvent;
use Oro\Bundle\ProductBundle\Model\QuickAddRow;
use Oro\Bundle\ProductBundle\Model\QuickAddRowCollection;
use Oro\Bundle\SaleBundle\Entity\QuoteDemand;
use Oro\Bundle\ShoppingListBundle\Entity\LineItem;
use Oro\Bundle\ShoppingListBundle\Entity\ShoppingList;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowItem;
use Oro\Bundle\WorkflowBundle\Model\WorkflowResult;
use Oro\Component\Action\Event\ExtendableConditionEvent;
use Oro\Component\Testing\Unit\EntityTrait;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class QuantityToOrderConditionListenerTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var QuantityToOrderValidatorService|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $validatorService;

    /**
     * @var QuantityToOrderConditionListener
     */
    protected $quantityToOrderConditionListener;

    /**
     * @var CheckoutValidateEvent
     */
    protected $event;

    protected function setUp()
    {
        $this->validatorService = $this->createMock(QuantityToOrderValidatorService::class);
        $this->quantityToOrderConditionListener = new QuantityToOrderConditionListener($this->validatorService);
        $this->event = new CheckoutValidateEvent();
    }

    public function testOnCheckoutValidateIgnored1()
    {
        $this->event->setContext(null);
        $this->assertCheckoutValidateIgnored();

        $workflowItem = new WorkflowItem();
        $this->event->setContext($workflowItem);
        $this->assertCheckoutValidateIgnored();

        $workflowItem = new WorkflowItem();
        $workflowItem->setWorkflowName('noname');
        $this->assertCheckoutValidateIgnored();

        $workflowItem->setWorkflowName('b2b_flow_checkout');
        $this->assertCheckoutValidateIgnored();

        $workflowItem->setEntity(new Checkout());
        $this->assertCheckoutValidateIgnored();
    }

    public function testOnCheckoutValidateIgnored2()
    {
        $workflowItem = new WorkflowItem();
        $workflowItem->setWorkflowName('b2b_flow_checkout');

        $source = new CheckoutSourceStub();
        $source->setQuoteDemand(new QuoteDemand());

        $checkout = new Checkout();
        $checkout->setSource($source);

        $workflowItem->setEntity($checkout);
        $this->event->setContext($workflowItem);
        $this->assertCheckoutValidateIgnored();
    }

    public function testOnCheckoutValidateNotIgnoredWoSource()
    {
        $workflowItem = new WorkflowItem();
        $workflowItem->setWorkflowName('b2b_flow_checkout');

        $checkout = new Checkout();
        $checkout->setSource(new CheckoutSource());

        $workflowItem->setEntity($checkout);

        $this->event->setContext($workflowItem);
        $this->validatorService->expects($this->once())
            ->method('isLineItemListValid')
            ->willReturn(false);
        $this->quantityToOrderConditionListener->onCheckoutValidate($this->event);
        $this->assertTrue($this->event->isCheckoutRestartRequired());
    }

    public function testOnCheckoutValidateSetsRestartRequired()
    {
        $workflowItem = new WorkflowItem();
        $workflowItem->setWorkflowName('b2b_flow_checkout');

        $source = new CheckoutSourceStub();
        $source->setShoppingList(new ShoppingList());

        $checkout = new Checkout();
        $checkout->setSource($source);

        $workflowItem->setEntity($checkout);
        $this->event->setContext($workflowItem);
        $this->validatorService->expects($this->once())
            ->method('isLineItemListValid')
            ->willReturn(false);
        $this->quantityToOrderConditionListener->onCheckoutValidate($this->event);
        $this->assertTrue($this->event->isCheckoutRestartRequired());
    }

    protected function assertCheckoutValidateIgnored()
    {
        $this->validatorService->expects($this->never())
            ->method('isLineItemListValid');

        $this->quantityToOrderConditionListener->onCheckoutValidate($this->event);
    }

    public function testOnStartCheckoutConditionWhenContextIsNotActionData()
    {
        $event = new ExtendableConditionEvent(new WorkflowItem());

        $this->validatorService->expects($this->never())
            ->method('isLineItemListValid');
        $this->quantityToOrderConditionListener->onStartCheckoutConditionCheck($event);
    }

    public function testOnStartCheckoutConditionWhenCheckoutIsNotOfCheckoutType()
    {
        $event = new ExtendableConditionEvent(new ActionData(['checkout' => new \stdClass()]));

        $this->validatorService->expects($this->never())
            ->method('isLineItemListValid');
        $this->quantityToOrderConditionListener->onStartCheckoutConditionCheck($event);
    }

    public function testOnStartCheckoutConditionWhenSourceEntityIsNotOfQuoteDemandType()
    {
        $checkout = $this->createMock(Checkout::class);
        $checkout->expects($this->once())
            ->method('getSourceEntity')
            ->willReturn(new \stdClass());

        $event = new ExtendableConditionEvent(new ActionData(['checkout' => $checkout]));

        $this->validatorService->expects($this->once())
            ->method('isLineItemListValid');
        $this->quantityToOrderConditionListener->onStartCheckoutConditionCheck($event);
    }

    public function testOnStartCheckoutConditionCheckAddsErrorToEvent()
    {
        $lineItems = new ArrayCollection([$this->getEntity(CheckoutLineItem::class)]);
        $shoppingList = $this->getEntity(ShoppingList::class);
        $checkoutSource = new CheckoutSourceStub();
        $checkoutSource->setShoppingList($shoppingList);
        $checkout = $this->getEntity(Checkout::class, ['source' => $checkoutSource, 'lineItems' => $lineItems]);
        $context = new ActionData(['checkout' => $checkout]);
        $event = new ExtendableConditionEvent($context);

        $this->validatorService
            ->expects($this->once())
            ->method('isLineItemListValid')
            ->with($lineItems)
            ->willReturn(false);

        $this->quantityToOrderConditionListener->onStartCheckoutConditionCheck($event);

        $this->assertNotEmpty($event->getErrors());
    }

    public function testOnStartCheckoutConditionCheckAddsNoErrorToEvent()
    {
        $lineItems = new ArrayCollection([$this->getEntity(CheckoutLineItem::class)]);
        $shoppingList = $this->getEntity(ShoppingList::class);
        $checkoutSource = new CheckoutSourceStub();
        $checkoutSource->setShoppingList($shoppingList);
        $checkout = $this->getEntity(Checkout::class, ['source' => $checkoutSource, 'lineItems' => $lineItems]);
        $context = new ActionData(['checkout' => $checkout]);
        $event = new ExtendableConditionEvent($context);

        $this->validatorService
            ->expects($this->once())
            ->method('isLineItemListValid')
            ->with($lineItems)
            ->willReturn(true);

        $this->quantityToOrderConditionListener->onStartCheckoutConditionCheck($event);

        $this->assertEmpty($event->getErrors());
    }

    public function testOnCheckoutConditionCheckAddsError()
    {
        $workflowItem = new WorkflowItem();
        $workflowItem->setWorkflowName('b2b_flow_checkout');
        $checkout = new Checkout();
        $source = new CheckoutSourceStub();
        $checkout->setSource($source);
        $source->setShoppingList(new ShoppingList());

        $workflowItem->setEntity($checkout);

        /** @var ExtendableConditionEvent|\PHPUnit_Framework_MockObject_MockObject $event * */
        $event = $this->createMock(ExtendableConditionEvent::class);
        $event->expects($this->once())
            ->method('getContext')
            ->willReturn($workflowItem);

        $this->validatorService->expects($this->once())
            ->method('isLineItemListValid')
            ->willReturn(false);

        $event->expects($this->once())
            ->method('addError')
            ->with(QuantityToOrderConditionListener::QUANTITY_CHECK_ERROR);

        $this->quantityToOrderConditionListener->onCheckoutConditionCheck($event);
    }

    public function testOnQuickAddRowCollectionValidate()
    {
        $event = new QuickAddRowCollectionValidateEvent();
        $row = new QuickAddRow(1, 'testSKu', 2);
        $row->setProduct(new Product());
        $collection = new QuickAddRowCollection();
        $collection->add($row);
        $event->setQuickAddRowCollection($collection);
        $this->validatorService->expects($this->once())
            ->method('getMaximumErrorIfInvalid')
            ->willReturn('errorString');
        $this->quantityToOrderConditionListener->onQuickAddRowCollectionValidate($event);
        $errors = $row->getErrors();
        $this->assertCount(1, $errors);
        $this->assertArrayHasKey('message', $errors[0]);
        $this->assertArrayHasKey('parameters', $errors[0]);
        $this->assertArrayHasKey('allowedRFP', $errors[0]['parameters']);
        $this->assertEquals($errors[0]['message'], 'errorString');
        $this->assertTrue($errors[0]['parameters']['allowedRFP']);
    }

    public function testOnShoppingListStart()
    {
        $event = $this->createMock(ExtendableConditionEvent::class);
        $workflowItem = $this->createMock(WorkflowItem::class);
        $workflowItem->method('getWorkflowName')->willReturn('b2b_flow_checkout');
        $workflowResult = $this->createMock(WorkflowResult::class);
        $workflowResult->method('has')->willReturn(true);
        $workflowItem->method('getResult')->willReturn($workflowResult);

        $lineItems = [$this->createMock(LineItem::class, $this->createMock(LineItem::class))];
        $shoppingList = $this->createMock(ShoppingList::class);
        $shoppingList->method('getLineItems')->willReturn($lineItems);
        $workflowResult->method('get')->willReturn($shoppingList);

        $this->validatorService->expects($this->once())->method('isLineItemListValid')->willReturn(false);
        $event->method('getContext')->willReturn($workflowItem);

        $event->expects($this->once())
            ->method('addError');
        $this->quantityToOrderConditionListener->onShoppingListStart($event);
    }
}

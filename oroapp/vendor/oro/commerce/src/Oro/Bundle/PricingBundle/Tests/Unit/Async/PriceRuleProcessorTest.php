<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Async;

use Doctrine\ORM\EntityManagerInterface;
use Oro\Bundle\PricingBundle\Async\NotificationMessages;
use Oro\Bundle\PricingBundle\Async\PriceListProcessor;
use Oro\Bundle\PricingBundle\Async\PriceRuleProcessor;
use Oro\Bundle\PricingBundle\Async\Topics;
use Oro\Bundle\PricingBundle\Builder\ProductPriceBuilder;
use Oro\Bundle\PricingBundle\Entity\PriceList;
use Oro\Bundle\PricingBundle\Entity\Repository\PriceListRepository;
use Oro\Bundle\PricingBundle\Model\DTO\PriceListProductsTrigger;
use Oro\Bundle\PricingBundle\Model\DTO\PriceListTrigger;
use Oro\Bundle\PricingBundle\Model\PriceListTriggerFactory;
use Oro\Bundle\PricingBundle\NotificationMessage\Message;
use Oro\Bundle\PricingBundle\NotificationMessage\Messenger;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Component\MessageQueue\Consumption\MessageProcessorInterface;
use Oro\Component\MessageQueue\Transport\MessageInterface;
use Oro\Component\MessageQueue\Transport\SessionInterface;
use Oro\Component\Testing\Unit\EntityTrait;
use Symfony\Component\Translation\TranslatorInterface;

class PriceRuleProcessorTest extends AbstractPriceProcessorTest
{
    use EntityTrait;

    /**
     * @var ProductPriceBuilder|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $priceBuilder;

    /**
     * @var PriceListProcessor
     */
    protected $priceRuleProcessor;

    /**
     * @var Messenger|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $messenger;

    /**
     * @var TranslatorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $translator;

    protected function setUp()
    {
        parent::setUp();

        $this->priceBuilder = $this->getMockBuilder(ProductPriceBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->messenger = $this->getMockBuilder(Messenger::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->translator = $this->createMock(TranslatorInterface::class);

        $this->priceRuleProcessor = new PriceRuleProcessor(
            $this->triggerFactory,
            $this->priceBuilder,
            $this->logger,
            $this->registry,
            $this->messenger,
            $this->translator
        );
    }

    public function testProcessInvalidArgumentException()
    {
        $message = $this->prepareMessageForProcessInvalidArgumentException();

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session **/
        $session = $this->createMock(SessionInterface::class);

        $this->assertEquals(MessageProcessorInterface::REJECT, $this->priceRuleProcessor->process($message, $session));
    }

    public function testProcessExceptionWithoutTrigger()
    {
        $exception = new \Exception('Some error');

        $message = $this->prepareMessageForProcessExceptionWithoutTrigger($exception);

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session **/
        $session = $this->createMock(SessionInterface::class);

        $this->logger->expects($this->once())
            ->method('error')
            ->with(
                'Unexpected exception occurred during Price Rule build',
                ['exception' => $exception]
            );

        $this->assertEquals(MessageProcessorInterface::REJECT, $this->priceRuleProcessor->process($message, $session));
    }

    public function testProcessExceptionWithTrigger()
    {
        $exception = new \Exception('Some error');
        $data = ['test' => 1];
        $message = $this->prepareMessageWithBody($data);

        /** @var PriceList $priceList */
        $priceList = $this->getEntity(PriceList::class, ['id' => 1]);

        $this->priceListRepository->expects($this->once())
            ->method('find')
            ->with($priceList->getId())
            ->willReturn($priceList);

        $productIds = [2];
        $trigger = new PriceListTrigger($priceList, $productIds);

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session **/
        $session = $this->createMock(SessionInterface::class);

        $this->triggerFactory->expects($this->once())
            ->method('createFromArray')
            ->with($data)
            ->willReturn($trigger);

        $this->priceBuilder->expects($this->once())
            ->method('buildByPriceListWithoutTriggerSend')
            ->with($priceList, $productIds);

        $this->priceBuilder->expects($this->once())
            ->method('buildByPriceListWithoutTriggerSend')
            ->with($priceList, $productIds)
            ->willThrowException($exception);

        $this->logger->expects($this->once())
            ->method('error')
            ->with(
                'Unexpected exception occurred during Price Rule build',
                ['exception' => $exception]
            );

        $this->translator->expects($this->once())
            ->method('trans')
            ->with('oro.pricing.notification.price_list.error.price_rule_build')
            ->willReturn('Error occurred during price rule build');

        $this->messenger->expects($this->once())
            ->method('send')
            ->with(
                NotificationMessages::CHANNEL_PRICE_LIST,
                NotificationMessages::TOPIC_PRICE_RULES_BUILD,
                Message::STATUS_ERROR,
                'Error occurred during price rule build',
                PriceList::class,
                $priceList->getId()
            );

        $this->assertEquals(MessageProcessorInterface::REJECT, $this->priceRuleProcessor->process($message, $session));
    }

    public function testProcess()
    {
        $data = ['test' => 1];
        $body = json_encode($data);

        $updateDate = new \DateTime();
        /** @var PriceList $priceList */
        $priceList = $this->getEntity(PriceList::class, ['id' => 1, 'updatedAt' => $updateDate]);
        /** @var Product $product */
        $productId = 2;
        $trigger = new PriceListTrigger($priceList, [$productId]);

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message **/
        $message = $this->createMock(MessageInterface::class);
        $message->expects($this->any())
            ->method('getBody')
            ->willReturn($body);

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session **/
        $session = $this->createMock(SessionInterface::class);

        $this->triggerFactory->expects($this->once())
            ->method('createFromArray')
            ->with($data)
            ->willReturn($trigger);

        $this->priceBuilder->expects($this->once())
            ->method('buildByPriceListWithoutTriggerSend')
            ->with($priceList, [$productId]);
        $this->priceBuilder->expects($this->once())
            ->method('flush');

        $repository = $this->assertEntityManagerCalled();
        $repository->expects($this->once())
            ->method('updatePriceListsActuality');
        $repository->expects($this->once())
            ->method('find')
            ->with($priceList->getId())
            ->willReturn($priceList);

        $this->messenger->expects($this->once())
            ->method('remove')
            ->with(
                NotificationMessages::CHANNEL_PRICE_LIST,
                NotificationMessages::TOPIC_PRICE_RULES_BUILD,
                PriceList::class,
                $priceList->getId()
            );

        $this->assertEquals(MessageProcessorInterface::ACK, $this->priceRuleProcessor->process($message, $session));
    }

    public function testProcessWithoutPriceList()
    {
        $priceListId = 1001;
        $productId = 2002;
        $updateDate = new \DateTime();

        $data = [PriceListTriggerFactory::PRODUCT => [$priceListId => [$productId]]];

        $this->triggerFactory->expects($this->once())
            ->method('createFromArray')
            ->with($data)
            ->willReturn(new PriceListProductsTrigger($data[PriceListTriggerFactory::PRODUCT]));

        /** @var PriceList $priceList */
        $priceList = $this->getEntity(PriceList::class, ['id' => $priceListId, 'updatedAt' => $updateDate]);

        $this->priceBuilder->expects($this->once())
            ->method('buildByPriceListWithoutTriggerSend')
            ->with($priceList, [$productId]);
        $this->priceBuilder->expects($this->once())
            ->method('flush');

        $repository = $this->assertEntityManagerCalled();
        $repository->expects($this->once())
            ->method('updatePriceListsActuality');
        $repository->expects($this->once())
            ->method('find')
            ->with($priceList->getId())
            ->willReturn($priceList);

        $this->messenger->expects($this->once())
            ->method('remove')
            ->with(
                NotificationMessages::CHANNEL_PRICE_LIST,
                NotificationMessages::TOPIC_PRICE_RULES_BUILD,
                PriceList::class,
                $priceList->getId()
            );

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message **/
        $message = $this->createMock(MessageInterface::class);
        $message->expects($this->any())
            ->method('getBody')
            ->willReturn(json_encode($data));

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session **/
        $session = $this->createMock(SessionInterface::class);

        $this->assertEquals(MessageProcessorInterface::ACK, $this->priceRuleProcessor->process($message, $session));
    }

    /**
     * @return PriceListRepository|\PHPUnit_Framework_MockObject_MockObject
     */
    private function assertEntityManagerCalled()
    {
        $repository = $this->createMock(PriceListRepository::class);

        $manager = $this->createMock(EntityManagerInterface::class);
        $manager->expects($this->any())
            ->method('getRepository')
            ->willReturn($repository);

        $manager->expects($this->once())
            ->method('refresh');

        $manager->expects($this->once())
            ->method('beginTransaction');

        $manager->expects(($this->once()))
            ->method('commit');

        $this->registry->expects($this->any())
            ->method('getManagerForClass')
            ->with(PriceList::class)
            ->willReturn($manager);

        return $repository;
    }

    public function testGetSubscribedTopics()
    {
        $this->assertEquals([Topics::RESOLVE_PRICE_RULES], $this->priceRuleProcessor->getSubscribedTopics());
    }
}

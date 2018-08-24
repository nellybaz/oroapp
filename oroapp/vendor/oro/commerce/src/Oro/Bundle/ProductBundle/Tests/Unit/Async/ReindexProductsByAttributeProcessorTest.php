<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Async;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;
use Oro\Bundle\ProductBundle\Async\ReindexProductsByAttributeProcessor;
use Oro\Bundle\ProductBundle\Async\Topics;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Entity\Repository\ProductRepository;
use Oro\Bundle\WebsiteSearchBundle\Event\ReindexationRequestEvent;
use Oro\Component\MessageQueue\Consumption\MessageProcessorInterface;
use Oro\Component\MessageQueue\Job\Job;
use Oro\Component\MessageQueue\Test\JobRunner;
use Oro\Component\MessageQueue\Transport\MessageInterface;
use Oro\Component\MessageQueue\Transport\SessionInterface;
use Oro\Component\Testing\Unit\EntityTrait;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class ReindexProductsByAttributeProcessorTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /** @var JobRunner|\PHPUnit_Framework_MockObject_MockObject */
    private $jobRunner;

    /** @var LoggerInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $logger;

    /** @var ProductRepository|\PHPUnit_Framework_MockObject_MockObject */
    private $repository;

    /** @var EventDispatcherInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $dispatcher;

    /** @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject */
    private $registry;

    /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject */
    private $session;

    /** @var ReindexProductsByAttributeProcessor */
    private $processor;

    protected function setUp()
    {
        $this->jobRunner = $this->createMock(JobRunner::class);
        $this->registry = $this->createMock(ManagerRegistry::class);
        $this->dispatcher = $this->createMock(EventDispatcherInterface::class);
        $this->logger = $this->createMock(LoggerInterface::class);
        $this->session = $this->createMock(SessionInterface::class);
        $this->repository = $this->createMock(ProductRepository::class);

        $this->processor = new ReindexProductsByAttributeProcessor(
            $this->jobRunner,
            $this->registry,
            $this->dispatcher,
            $this->logger
        );
    }

    public function testGetSubscribedTopics()
    {
        $this->assertEquals(
            [Topics::REINDEX_PRODUCTS_BY_ATTRIBUTE],
            $this->processor->getSubscribedTopics()
        );
    }

    public function testProcessWhenMessageIsInvalid()
    {
        $messageBody = ['some body item'];
        $message = $this->getMessage($messageBody);

        $this->logger->expects($this->once())
            ->method('error')
            ->with('Unexpected exception occurred during queue message processing');

        $result = $this->processor->process($message, $this->session);
        $this->assertEquals(MessageProcessorInterface::REJECT, $result);
    }

    public function testProcessWhenUnexpectedExceptionOccurred()
    {
        $messageBody = ['attributeId' => 1];
        $message = $this->getMessage($messageBody);

        $this->jobRunner->expects($this->once())
            ->method('runUnique')
            ->willThrowException(new \Exception());

        $this->logger->expects($this->once())
            ->method('error')
            ->with('Unexpected exception occurred during queue message processing');

        $result = $this->processor->process($message, $this->session);
        $this->assertEquals(MessageProcessorInterface::REJECT, $result);
    }

    /**
     * @param array $productIds
     * @param \PHPUnit_Framework_MockObject_Matcher_InvokedCount $dispatchExpected
     *
     * @dataProvider getProductIds
     */
    public function testProcess($productIds, $dispatchExpected)
    {
        $attributeId = 1;
        $messageBody = ['attributeId' => $attributeId];
        $message = $this->getMessage($messageBody);

        $this->mockRunUniqueJob();

        $this->repository->expects($this->once())
            ->method('getProductIdsByAttributeId')
            ->with($attributeId)
            ->willReturn($productIds);

        /** @var ObjectManager|\PHPUnit_Framework_MockObject_MockObject $registry */
        $manager = $this->createMock(ObjectManager::class);
        $manager->expects($this->any())
            ->method('getRepository')
            ->with(Product::class)
            ->willReturn($this->repository);
        $this->registry->expects($this->any())
            ->method('getManagerForClass')
            ->with(Product::class)
            ->willReturn($manager);

        $this->dispatcher->expects($dispatchExpected)
            ->method('dispatch')
            ->with(
                ReindexationRequestEvent::EVENT_NAME,
                new ReindexationRequestEvent([Product::class], [], $productIds)
            );

        $result = $this->processor->process($message, $this->session);
        $this->assertEquals(MessageProcessorInterface::ACK, $result);
    }

    public function testProcessWithExceptionDuringReindexEventDispatching()
    {
        $attributeId = 1;
        $messageBody = ['attributeId' => $attributeId];
        $message = $this->getMessage($messageBody);

        $this->mockRunUniqueJob();

        $this->repository->expects($this->once())
            ->method('getProductIdsByAttributeId')
            ->with($attributeId)
            ->willReturn([1]);

        /** @var ObjectManager|\PHPUnit_Framework_MockObject_MockObject $registry */
        $manager = $this->createMock(ObjectManager::class);
        $manager->expects($this->any())
            ->method('getRepository')
            ->with(Product::class)
            ->willReturn($this->repository);
        $this->registry->expects($this->any())
            ->method('getManagerForClass')
            ->with(Product::class)
            ->willReturn($manager);

        $exception = new \Exception();
        $this->dispatcher->expects($this->once())
            ->method('dispatch')
            ->willThrowException($exception);

        $this->logger->expects($this->once())
            ->method('error')
            ->with(
                'Unexpected exception occurred during triggering update of search index ',
                [
                    'exception' => $exception,
                    'topic' => Topics::REINDEX_PRODUCTS_BY_ATTRIBUTE
                ]
            );

        $result = $this->processor->process($message, $this->session);
        $this->assertEquals(MessageProcessorInterface::REJECT, $result);
    }

    /**
     * @return array
     */
    public function getProductIds()
    {
        return [
            'empty array' => [
                'productIds' => [],
                'dispatchExpected' => $this->never()
            ],
            'array with id' => [
                'productIds' => [100, 101, 102],
                'dispatchExpected' => $this->once()
            ]
        ];
    }

    /**
     * @param array $body
     * @return MessageInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private function getMessage(array $body = [])
    {
        $message = $this->createMock(MessageInterface::class);
        $message->expects($this->any())
            ->method('getBody')
            ->willReturn(json_encode($body));
        $message->expects($this->any())
            ->method('getMessageId')
            ->willReturn('msg-1');

        return $message;
    }

    private function mockRunUniqueJob()
    {
        /** @var Job $job */
        $job      = $this->getEntity(Job::class, ['id' => 1]);
        /** @var Job $childJob */
        $childJob = $this->getEntity(
            Job::class,
            [
                'id' => 2,
                'rootJob' => $job,
                'name' =>  Topics::REINDEX_PRODUCTS_BY_ATTRIBUTE
            ]
        );

        $this->jobRunner->expects($this->once())
            ->method('runUnique')
            ->with('msg-1', Topics::REINDEX_PRODUCTS_BY_ATTRIBUTE)
            ->willReturnCallback(function ($jobId, $name, $callback) use ($childJob) {
                $this->assertEquals('msg-1', $jobId);
                $this->assertEquals(Topics::REINDEX_PRODUCTS_BY_ATTRIBUTE, $name);

                return $callback($this->jobRunner, $childJob);
            });
    }
}

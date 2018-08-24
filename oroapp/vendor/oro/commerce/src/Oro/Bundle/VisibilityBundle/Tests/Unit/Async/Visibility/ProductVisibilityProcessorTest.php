<?php

namespace Oro\Bundle\VisibilityBundle\Tests\Unit\Async\Visibility;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\Driver\PDOException;
use Doctrine\ORM\EntityManagerInterface;
use Oro\Bundle\EntityBundle\ORM\DatabaseExceptionHelper;
use Oro\Bundle\VisibilityBundle\Async\Visibility\ProductVisibilityProcessor;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\ProductVisibility;
use Oro\Bundle\VisibilityBundle\Entity\VisibilityResolved\ProductVisibilityResolved;
use Oro\Bundle\VisibilityBundle\Model\Exception\InvalidArgumentException;
use Oro\Bundle\VisibilityBundle\Model\MessageFactoryInterface;
use Oro\Bundle\VisibilityBundle\Visibility\Cache\CacheBuilderInterface;
use Oro\Component\MessageQueue\Consumption\MessageProcessorInterface;
use Oro\Component\MessageQueue\Transport\MessageInterface;
use Oro\Component\MessageQueue\Transport\SessionInterface;
use Psr\Log\LoggerInterface;

class ProductVisibilityProcessorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $registry;

    /**
     * @var MessageFactoryInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $messageFactory;

    /**
     * @var CacheBuilderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $cacheBuilder;

    /**
     * @var LoggerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $logger;

    /**
     * @var DatabaseExceptionHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $databaseExceptionHelper;

    /**
     * @var ProductVisibilityProcessor
     */
    protected $visibilityProcessor;

    protected function setUp()
    {
        $this->registry = $this->createMock(ManagerRegistry::class);
        $this->messageFactory = $this->getMockBuilder(MessageFactoryInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->cacheBuilder = $this->createMock(CacheBuilderInterface::class);
        $this->logger = $this->createMock(LoggerInterface::class);

        $this->databaseExceptionHelper = $this->getMockBuilder(DatabaseExceptionHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->visibilityProcessor = new ProductVisibilityProcessor(
            $this->registry,
            $this->messageFactory,
            $this->logger,
            $this->cacheBuilder,
            $this->databaseExceptionHelper
        );

        $this->visibilityProcessor->setResolvedVisibilityClassName(ProductVisibilityResolved::class);
    }

    public function testProcessInvalidArgumentException()
    {
        $data = ['test' => 42];
        $body = json_encode($data);

        $message = $this->prepareTestProcess($body);

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session * */
        $session = $this->createMock(SessionInterface::class);

        $this->logger->expects($this->once())
            ->method('error')
            ->with(
                sprintf(
                    'Message is invalid: %s',
                    'Test message'
                )
            );

        $this->messageFactory->expects($this->once())
            ->method('getEntityFromMessage')
            ->with($data)
            ->willThrowException(new InvalidArgumentException('Test message'));

        $this->assertEquals(
            MessageProcessorInterface::REJECT,
            $this->visibilityProcessor->process($message, $session)
        );
    }

    public function testProcessDeadlock()
    {
        /** @var PDOException $exception */
        $exception = $this->getMockBuilder(PDOException::class)
            ->disableOriginalConstructor()
            ->getMock();

        $data = ['test' => 42];
        $body = json_encode($data);

        $message = $this->prepareTestProcess($body);

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session * */
        $session = $this->createMock(SessionInterface::class);

        $this->logger->expects($this->once())
            ->method('error')
            ->with(
                'Unexpected exception occurred during Product Visibility resolve',
                ['exception' => $exception]
            );

        $visibilityEntity = new ProductVisibility();

        $this->messageFactory->expects($this->once())
            ->method('getEntityFromMessage')
            ->with($data)
            ->willReturn($visibilityEntity);

        $this->cacheBuilder->expects($this->once())
            ->method('resolveVisibilitySettings')
            ->with($visibilityEntity)
            ->willThrowException($exception);

        $this->databaseExceptionHelper->expects($this->once())
            ->method('isDeadlock')
            ->willReturn(true);

        $this->assertEquals(
            MessageProcessorInterface::REQUEUE,
            $this->visibilityProcessor->process($message, $session)
        );
    }

    public function testProcessException()
    {
        $exception = new \Exception('Exception message');

        $em = $this->createMock(EntityManagerInterface::class);

        $em->expects($this->once())
            ->method('beginTransaction');

        $em->expects(($this->once()))
            ->method('rollback');

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->with(ProductVisibilityResolved::class)
            ->willReturn($em);

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message * */
        $message = $this->createMock(MessageInterface::class);
        $message->expects($this->any())
            ->method('getBody')
            ->will($this->throwException($exception));

        $this->logger->expects($this->once())
            ->method('error')
            ->with(
                'Unexpected exception occurred during Product Visibility resolve',
                ['exception' => $exception]
            );

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session * */
        $session = $this->createMock(SessionInterface::class);

        $this->databaseExceptionHelper->expects($this->never())
            ->method('isDeadlock');

        $this->assertEquals(
            MessageProcessorInterface::REJECT,
            $this->visibilityProcessor->process($message, $session)
        );
    }

    public function testProcess()
    {
        $data = ['test' => 42];
        $body = json_encode($data);

        $em = $this->createMock(EntityManagerInterface::class);

        $em->expects($this->once())
            ->method('beginTransaction');

        $em->expects(($this->never()))
            ->method('rollback');

        $em->expects(($this->once()))
            ->method('commit');

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->with(ProductVisibilityResolved::class)
            ->willReturn($em);

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message * */
        $message = $this->createMock(MessageInterface::class);
        $message->expects($this->any())
            ->method('getBody')
            ->willReturn($body);

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session * */
        $session = $this->createMock(SessionInterface::class);

        $visibilityEntity = new ProductVisibility();

        $this->messageFactory->expects($this->once())
            ->method('getEntityFromMessage')
            ->with($data)
            ->willReturn($visibilityEntity);

        $this->cacheBuilder->expects($this->once())
            ->method('resolveVisibilitySettings')
            ->with($visibilityEntity);
        $this->assertEquals(
            MessageProcessorInterface::ACK,
            $this->visibilityProcessor->process($message, $session)
        );
    }

    public function testSetResolvedVisibilityClassName()
    {
        $this->assertAttributeEquals(
            ProductVisibilityResolved::class,
            'resolvedVisibilityClassName',
            $this->visibilityProcessor
        );
    }

    /**
     * @param string $body
     * @return MessageInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function prepareTestProcess($body)
    {
        $em = $this->createMock(EntityManagerInterface::class);

        $em->expects($this->once())
            ->method('beginTransaction');

        $em->expects(($this->once()))
            ->method('rollback');

        $em->expects(($this->never()))
            ->method('commit');

        $this->registry->expects($this->once())
            ->method('getManagerForClass')
            ->with(ProductVisibilityResolved::class)
            ->willReturn($em);

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message * */
        $message = $this->createMock(MessageInterface::class);
        $message->expects($this->any())
            ->method('getBody')
            ->willReturn($body);

        return $message;
    }
}

<?php

namespace Oro\Bundle\EntityConfigBundle\Tests\Unit\Async;

use Doctrine\DBAL\Driver\AbstractDriverException;
use Doctrine\ORM\EntityManagerInterface;

use Oro\Bundle\EntityBundle\ORM\DatabaseExceptionHelper;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\EntityConfigBundle\Async\DeletedAttributeRelationProcessor;
use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeFamily;
use Oro\Bundle\EntityConfigBundle\Entity\Repository\AttributeFamilyRepository;
use Oro\Bundle\EntityConfigBundle\Provider\DeletedAttributeProviderInterface;
use Oro\Component\MessageQueue\Consumption\MessageProcessorInterface;
use Oro\Component\MessageQueue\Transport\MessageInterface;
use Oro\Component\MessageQueue\Transport\SessionInterface;
use Oro\Component\MessageQueue\Util\JSON;

use Psr\Log\LoggerInterface;

class DeletedAttributeRelationProcessorTest extends \PHPUnit_Framework_TestCase
{
    const ENTITY_CLASS = 'SomeClass';

    /**
     * @var DoctrineHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $doctrineHelper;

    /**
     * @var LoggerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $logger;

    /**
     * @var DatabaseExceptionHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $databaseExceptionHelper;

    /**
     * @var DeletedAttributeProviderInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $deletedAttributeProvider;

    /**
     * @var DeletedAttributeRelationProcessor
     */
    protected $processor;

    protected function setUp()
    {
        $this->doctrineHelper = $this->getMockBuilder(DoctrineHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->logger = $this->createMock(LoggerInterface::class);
        $this->databaseExceptionHelper = $this->getMockBuilder(DatabaseExceptionHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->deletedAttributeProvider = $this->createMock(DeletedAttributeProviderInterface::class);

        $this->processor = new DeletedAttributeRelationProcessor(
            $this->doctrineHelper,
            $this->logger,
            $this->databaseExceptionHelper,
            $this->deletedAttributeProvider
        );
    }

    public function testProcessWithoutAttributeFamilyId()
    {
        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message */
        $message = $this->createMock(MessageInterface::class);
        $message->expects($this->any())
            ->method('getBody')
            ->willReturn(JSON::encode([]));
        $this->doctrineHelper->expects($this->never())
            ->method('getEntityRepositoryForClass');
        $this->logger->expects($this->once())
            ->method('critical')
            ->with('Invalid message: key "attributeFamilyId" is missing.');

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session */
        $session = $this->createMock(SessionInterface::class);
        $result = $this->processor->process($message, $session);
        $this->assertEquals(MessageProcessorInterface::REJECT, $result);
    }

    public function testProcessDriverException()
    {
        $attributeFamilyId = 1;

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message */
        $message = $this->createMock(MessageInterface::class);
        $message->expects($this->any())
            ->method('getBody')
            ->willReturn(JSON::encode([
                'attributeFamilyId' => $attributeFamilyId,
                'attributeNames' => [],
            ]));

        $attributeFamily = $this->getAttributeFamily($attributeFamilyId);
        $entityManager = $this->getEntityManagerMock($attributeFamily);
        $entityManager->expects($this->once())
            ->method('beginTransaction');
        $entityManager->expects($this->never())
            ->method('commit');
        $entityManager->expects($this->once())
            ->method('rollback');

        /** @var \Exception $exception */
        $exception = $this->getMockBuilder(AbstractDriverException::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->databaseExceptionHelper->expects($this->once())
            ->method('isDeadlock')
            ->with($exception)
            ->willReturn(true);

        $this->deletedAttributeProvider->expects($this->once())
            ->method('removeAttributeValues')
            ->with($attributeFamily, [])
            ->willThrowException($exception);

        $this->logger->expects($this->once())
            ->method('error')
            ->with(
                'Unexpected exception occurred during Deleting attribute relation',
                ['exception' => $exception]
            );

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session */
        $session = $this->createMock(SessionInterface::class);
        $result = $this->processor->process(
            $message,
            $session
        );
        $this->assertEquals(MessageProcessorInterface::REQUEUE, $result);
    }

    public function testProcessAnyException()
    {
        $attributeFamilyId = 1;

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message */
        $message = $this->createMock(MessageInterface::class);
        $message->expects($this->any())
            ->method('getBody')
            ->willReturn(JSON::encode([
                'attributeFamilyId' => $attributeFamilyId,
                'attributeNames' => [],
            ]));

        $attributeFamily = $this->getAttributeFamily($attributeFamilyId);
        $entityManager = $this->getEntityManagerMock($attributeFamily);
        $entityManager->expects($this->once())
            ->method('beginTransaction');
        $entityManager->expects($this->never())
            ->method('commit');
        $entityManager->expects($this->once())
            ->method('rollback');

        $exception = new \Exception();

        $this->deletedAttributeProvider->expects($this->once())
            ->method('removeAttributeValues')
            ->with($attributeFamily, [])
            ->willThrowException($exception);

        $this->logger->expects($this->once())
            ->method('error')
            ->with(
                'Unexpected exception occurred during Deleting attribute relation',
                ['exception' => $exception]
            );

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session */
        $session = $this->createMock(SessionInterface::class);
        $result = $this->processor->process(
            $message,
            $session
        );
        $this->assertEquals(MessageProcessorInterface::REJECT, $result);
    }

    public function testProcess()
    {
        $attributeFamilyId = 1;

        /** @var MessageInterface|\PHPUnit_Framework_MockObject_MockObject $message */
        $message = $this->createMock(MessageInterface::class);
        $message->expects($this->any())
            ->method('getBody')
            ->willReturn(JSON::encode([
                'attributeFamilyId' => $attributeFamilyId,
                'attributeNames' => [],
            ]));

        $attributeFamily = $this->getAttributeFamily($attributeFamilyId);
        $entityManager = $this->getEntityManagerMock($attributeFamily);
        $entityManager->expects($this->once())
            ->method('beginTransaction');
        $entityManager->expects($this->once())
            ->method('commit');
        $entityManager->expects($this->never())
            ->method('rollback');

        $this->deletedAttributeProvider->expects($this->once())
            ->method('removeAttributeValues')
            ->with($attributeFamily, []);

        $this->logger->expects($this->never())
            ->method('error');

        /** @var SessionInterface|\PHPUnit_Framework_MockObject_MockObject $session */
        $session = $this->createMock(SessionInterface::class);
        $result = $this->processor->process(
            $message,
            $session
        );
        $this->assertEquals(MessageProcessorInterface::ACK, $result);
    }

    /**
     * @param int $attributeFamilyId
     * @return AttributeFamily
     */
    protected function getAttributeFamily($attributeFamilyId)
    {
        $attributeFamily = new AttributeFamily();
        $attributeFamily->setEntityClass(self::ENTITY_CLASS);

        $repository = $this->getMockBuilder(AttributeFamilyRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $repository->expects($this->any())
            ->method('find')
            ->with($attributeFamilyId)
            ->willReturn($attributeFamily);
        $this->doctrineHelper->expects($this->any())
            ->method('getEntityRepositoryForClass')
            ->with(AttributeFamily::class)
            ->willReturn($repository);

        return $attributeFamily;
    }

    /**
     * @param AttributeFamily $attributeFamily
     * @return EntityManagerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function getEntityManagerMock(AttributeFamily $attributeFamily)
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);

        $this->doctrineHelper->expects($this->any())
            ->method('getEntityManagerForClass')
            ->with($attributeFamily->getEntityClass())
            ->willReturn($entityManager);
        
        return $entityManager;
    }
}

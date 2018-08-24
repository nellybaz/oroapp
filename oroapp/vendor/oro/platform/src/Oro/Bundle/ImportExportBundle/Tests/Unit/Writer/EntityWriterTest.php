<?php

namespace Oro\Bundle\ImportExportBundle\Tests\Unit\Writer;

use Akeneo\Bundle\BatchBundle\Entity\StepExecution;
use Doctrine\DBAL\Driver\DriverException;
use Oro\Bundle\EntityBundle\ORM\DatabaseExceptionHelper;
use Oro\Bundle\EntityBundle\ORM\DoctrineHelper;
use Oro\Bundle\ImportExportBundle\Context\ContextInterface;
use Oro\Bundle\ImportExportBundle\Context\ContextRegistry;
use Oro\Bundle\ImportExportBundle\Writer\EntityDetachFixer;
use Oro\Bundle\ImportExportBundle\Writer\EntityWriter;

class EntityWriterTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $entityManager;

    /** @var \PHPUnit_Framework_MockObject_MockObject|DoctrineHelper */
    protected $doctrineHelper;

    /** @var \PHPUnit_Framework_MockObject_MockObject|EntityDetachFixer */
    protected $detachFixer;

    /** @var \PHPUnit_Framework_MockObject_MockObject|ContextRegistry */
    protected $contextRegistry;

    /** @var \PHPUnit_Framework_MockObject_MockObject|DatabaseExceptionHelper */
    protected $databaseExceptionHelper;

    /** @var EntityWriter */
    protected $writer;

    protected function setUp()
    {
        $this->entityManager = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();

        $this->doctrineHelper = $this->getMockBuilder('Oro\Bundle\EntityBundle\ORM\DoctrineHelper')
            ->disableOriginalConstructor()
            ->getMock();

        $this->doctrineHelper->expects($this->any())
            ->method('getEntityManager')
            ->will($this->returnValue($this->entityManager));

        $this->detachFixer = $this->getMockBuilder('Oro\Bundle\ImportExportBundle\Writer\EntityDetachFixer')
            ->disableOriginalConstructor()
            ->getMock();

        $this->databaseExceptionHelper = $this->createMock(DatabaseExceptionHelper::class);

        $this->contextRegistry = $this->createMock('Oro\Bundle\ImportExportBundle\Context\ContextRegistry');

        $this->writer = new EntityWriter(
            $this->doctrineHelper,
            $this->detachFixer,
            $this->contextRegistry
        );
        $this->writer->setDatabaseExceptionHelper($this->databaseExceptionHelper);
    }

    /**
     * @param array $configuration
     *
     * @dataProvider configurationProvider
     */
    public function testWrite($configuration)
    {
        $fooItem = $this->createMock(\stdClass::class);
        $barItem = $this->createMock(\ArrayObject::class);

        $this->detachFixer->expects($this->at(0))
            ->method('fixEntityAssociationFields')
            ->with($fooItem, 1);

        $this->detachFixer->expects($this->at(1))
            ->method('fixEntityAssociationFields')
            ->with($barItem, 1);

        $this->entityManager->expects($this->at(0))
            ->method('persist')
            ->with($fooItem);

        $this->entityManager->expects($this->at(1))
            ->method('persist')
            ->with($barItem);

        $this->entityManager->expects($this->at(2))
            ->method('flush');

        /** @var StepExecution $stepExecution */
        $stepExecution = $this->getMockBuilder('Akeneo\Bundle\BatchBundle\Entity\StepExecution')
            ->disableOriginalConstructor()
            ->getMock();

        $context = $this->createMock('Oro\Bundle\ImportExportBundle\Context\ContextInterface');
        $context->expects($this->once())
            ->method('getConfiguration')
            ->will($this->returnValue($configuration));

        $this->contextRegistry->expects($this->once())
            ->method('getByStepExecution')
            ->with($stepExecution)
            ->will($this->returnValue($context));

        if (empty($configuration[EntityWriter::SKIP_CLEAR])) {
            $this->entityManager->expects($this->at(3))
                ->method('clear');
        }

        $this->writer->setStepExecution($stepExecution);
        $this->writer->write([$fooItem, $barItem]);
    }

    public function testWriteException()
    {
        $item = $this->createMock(\stdClass::class);

        $this->detachFixer->expects($this->once())
            ->method('fixEntityAssociationFields')
            ->with($item, 1);

        $this->entityManager->expects($this->once())
            ->method('persist')
            ->with($item);

        $this->entityManager->expects($this->once())
            ->method('flush')
            ->willThrowException(new \Exception());

        /** @var StepExecution $stepExecution */
        $stepExecution = $this->getMockBuilder('Akeneo\Bundle\BatchBundle\Entity\StepExecution')
            ->disableOriginalConstructor()
            ->getMock();

        $context = $this->createMock(ContextInterface::class);
        $context->expects($this->any())
            ->method('getConfiguration')
            ->willReturn(['entityName' => \stdClass::class]);

        $this->contextRegistry->expects($this->once())
            ->method('getByStepExecution')
            ->with($stepExecution)
            ->will($this->returnValue($context));

        $this->writer->setStepExecution($stepExecution);

        $this->databaseExceptionHelper->expects($this->once())
            ->method('getDriverException');

        $this->expectException(\Exception::class);

        $this->writer->write([$item]);
    }

    public function testWriteDatabaseExceptionNotDeadlock()
    {
        $exception = new \Exception();
        $item = $this->createMock(\stdClass::class);

        $this->detachFixer->expects($this->once())
            ->method('fixEntityAssociationFields')
            ->with($item, 1);

        $this->entityManager->expects($this->once())
            ->method('persist')
            ->with($item);

        $this->entityManager->expects($this->once())
            ->method('flush')
            ->willThrowException($exception);

        /** @var StepExecution $stepExecution */
        $stepExecution = $this->getMockBuilder('Akeneo\Bundle\BatchBundle\Entity\StepExecution')
            ->disableOriginalConstructor()
            ->getMock();

        $context = $this->createMock(ContextInterface::class);
        $context->expects($this->any())
            ->method('getConfiguration')
            ->willReturn(['entityName' => \stdClass::class]);

        $this->contextRegistry->expects($this->once())
            ->method('getByStepExecution')
            ->with($stepExecution)
            ->will($this->returnValue($context));

        $this->writer->setStepExecution($stepExecution);

        $driverException = $this->createMock(DriverException::class);
        $this->databaseExceptionHelper->expects($this->once())
            ->method('getDriverException')
            ->with($exception)
            ->willReturn($driverException);

        $this->databaseExceptionHelper->expects($this->once())
            ->method('isDeadlock')
            ->willReturn(false);

        $this->expectException(\Exception::class);

        $this->writer->write([$item]);
    }

    public function testWriteDatabaseExceptionDeadlock()
    {
        $exception = new \Exception();
        $item = $this->createMock(\stdClass::class);

        $this->detachFixer->expects($this->once())
            ->method('fixEntityAssociationFields')
            ->with($item, 1);

        $this->entityManager->expects($this->once())
            ->method('persist')
            ->with($item);

        $this->entityManager->expects($this->once())
            ->method('flush')
            ->willThrowException($exception);

        /** @var StepExecution $stepExecution */
        $stepExecution = $this->getMockBuilder('Akeneo\Bundle\BatchBundle\Entity\StepExecution')
            ->disableOriginalConstructor()
            ->getMock();

        $context = $this->createMock(ContextInterface::class);
        $context->expects($this->any())
            ->method('getConfiguration')
            ->willReturn(['entityName' => \stdClass::class]);

        $this->contextRegistry->expects($this->any())
            ->method('getByStepExecution')
            ->with($stepExecution)
            ->will($this->returnValue($context));

        $this->writer->setStepExecution($stepExecution);

        $driverException = $this->createMock(DriverException::class);
        $this->databaseExceptionHelper->expects($this->once())
            ->method('getDriverException')
            ->with($exception)
            ->willReturn($driverException);

        $this->databaseExceptionHelper->expects($this->once())
            ->method('isDeadlock')
            ->willReturn(true);

        $context->expects($this->once())
            ->method('setValue')
            ->with('deadlockDetected', true);

        $this->writer->write([$item]);
    }

    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage entityName not resolved
     */
    public function testMissingClassName()
    {
        /** @var StepExecution $stepExecution */
        $stepExecution = $this->getMockBuilder('Akeneo\Bundle\BatchBundle\Entity\StepExecution')
            ->disableOriginalConstructor()
            ->getMock();

        $context = $this->createMock('Oro\Bundle\ImportExportBundle\Context\ContextInterface');
        $context->expects($this->once())
            ->method('getConfiguration')
            ->will($this->returnValue([]));

        $this->contextRegistry->expects($this->once())
            ->method('getByStepExecution')
            ->with($stepExecution)
            ->will($this->returnValue($context));

        $this->writer->setStepExecution($stepExecution);
        $this->writer->write([]);
    }

    public function testClassResolvedOnce()
    {
        /** @var StepExecution $stepExecution */
        $stepExecution = $this->getMockBuilder('Akeneo\Bundle\BatchBundle\Entity\StepExecution')
            ->disableOriginalConstructor()
            ->getMock();

        $context = $this->createMock('Oro\Bundle\ImportExportBundle\Context\ContextInterface');
        $context->expects($this->once())
            ->method('getConfiguration')
            ->will($this->returnValue(['entityName' => '\stdClass']));

        $this->contextRegistry->expects($this->once())
            ->method('getByStepExecution')
            ->with($stepExecution)
            ->will($this->returnValue($context));

        $this->writer->setStepExecution($stepExecution);
        $this->writer->write([]);

        // trigger detection twice
        $this->writer->write([]);
    }

    /**
     * @return array
     */
    public function configurationProvider()
    {
        return [
            'no clear flag'    => [[]],
            'clear flag false' => [[EntityWriter::SKIP_CLEAR => false]],
            'clear flag true'  => [[EntityWriter::SKIP_CLEAR => true]],
            'className from config'  => [[EntityWriter::SKIP_CLEAR => true, 'entityName' => '\stdClass']],
        ];
    }
}

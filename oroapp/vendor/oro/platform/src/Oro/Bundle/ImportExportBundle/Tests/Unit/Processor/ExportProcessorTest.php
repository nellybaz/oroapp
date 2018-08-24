<?php

namespace Oro\Bundle\ImportExportBundle\Tests\Unit\Processor;

use Oro\Bundle\ImportExportBundle\Processor\ExportProcessor;

class ExportProcessorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ExportProcessor
     */
    protected $processor;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $context;

    protected function setUp()
    {
        $this->context = $this->getMockBuilder('Oro\Bundle\ImportExportBundle\Context\ContextInterface')
            ->setMethods(array('getOption'))
            ->getMockForAbstractClass();
        $this->context->expects($this->any())
            ->method('getConfiguration')
            ->will($this->returnValue([]));

        $this->processor = new ExportProcessor();
    }

    /**
     * @expectedException \Oro\Bundle\ImportExportBundle\Exception\RuntimeException
     * @expectedExceptionMessage Serializer must be injected.
     */
    public function testProcess()
    {
        $entity = $this->createMock(\stdClass::class);

        $this->processor->setImportExportContext($this->context);
        $this->processor->process($entity);
    }

    public function testProcessWithDataConverter()
    {
        $entity = $this->createMock(\stdClass::class);
        $serializedValue = array('serialized');
        $expectedValue = array('expected');

        $serializer = $this->createMock('Symfony\Component\Serializer\SerializerInterface');
        $serializer->expects($this->once())
            ->method('serialize')
            ->with($entity, null)
            ->will($this->returnValue($serializedValue));

        $dataConverter = $this->createMock('Oro\Bundle\ImportExportBundle\Converter\DataConverterInterface');
        $dataConverter->expects($this->once())
            ->method('convertToExportFormat')
            ->with($serializedValue)
            ->will($this->returnValue($expectedValue));

        $this->processor->setSerializer($serializer);
        $this->processor->setDataConverter($dataConverter);
        $this->processor->setImportExportContext($this->context);

        $this->assertEquals($expectedValue, $this->processor->process($entity));
    }

    public function testProcessWithoutDataConverter()
    {
        $entity = $this->createMock(\stdClass::class);
        $expectedValue = array('expected');

        $serializer = $this->createMock('Symfony\Component\Serializer\SerializerInterface');
        $serializer->expects($this->once())
            ->method('serialize')
            ->with($entity, null)
            ->will($this->returnValue($expectedValue));

        $this->processor->setSerializer($serializer);
        $this->processor->setImportExportContext($this->context);

        $this->assertEquals($expectedValue, $this->processor->process($entity));
    }

    public function testSetImportExportContextWithoutQueryBuilder()
    {
        $this->context->expects($this->once())->method('getOption')
            ->will($this->returnValue(null));

        $dataConverter = $this->createMock('Oro\Bundle\ImportExportBundle\Converter\DataConverterInterface');
        $dataConverter->expects($this->never())->method($this->anything());

        $this->processor->setDataConverter($dataConverter);
        $this->processor->setImportExportContext($this->context);
    }

    public function testSetImportExportContextWithQueryBuilderIgnored()
    {
        $queryBuilder = $this->getMockBuilder('Doctrine\ORM\QueryBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $this->context->expects($this->once())->method('getOption')
            ->will($this->returnValue($queryBuilder));

        $dataConverter = $this->createMock('Oro\Bundle\ImportExportBundle\Converter\DataConverterInterface');
        $dataConverter->expects($this->never())->method($this->anything());

        $this->processor->setDataConverter($dataConverter);
        $this->processor->setImportExportContext($this->context);
    }

    public function testSetImportExportContextWithQueryBuilder()
    {
        $queryBuilder = $this->getMockBuilder('Doctrine\ORM\QueryBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $this->context->expects($this->once())->method('getOption')
            ->will($this->returnValue($queryBuilder));

        $dataConverter = $this->createMock(
            'Oro\Bundle\ImportExportBundle\Tests\Unit\Converter\Stub\QueryBuilderAwareDataConverter'
        );
        $dataConverter->expects($this->once())
            ->method('setQueryBuilder')
            ->will($this->returnValue($queryBuilder));

        $this->processor->setDataConverter($dataConverter);
        $this->processor->setImportExportContext($this->context);
    }

    // @codingStandardsIgnoreStart
    /**
     * @expectedException \Oro\Bundle\ImportExportBundle\Exception\InvalidConfigurationException
     * @expectedExceptionMessage Configuration of processor contains invalid "queryBuilder" option. "Doctrine\ORM\QueryBuilder" type is expected, but "stdClass" is given
     */
    // @codingStandardsIgnoreEnd
    public function testSetImportExportContextFailsWithInvalidQueryBuilder()
    {
        $this->context->expects($this->once())->method('getOption')
            ->will($this->returnValue(new \stdClass()));

        $dataConverter = $this->createMock(
            'Oro\Bundle\ImportExportBundle\Tests\Unit\Converter\Stub\QueryBuilderAwareDataConverter'
        );
        $dataConverter->expects($this->never())->method($this->anything());

        $this->processor->setDataConverter($dataConverter);
        $this->processor->setImportExportContext($this->context);
    }

    public function testSetEntityName()
    {
        $entityName = 'TestEntity';

        $dataConverter
            = $this->createMock('Oro\Bundle\ImportExportBundle\Tests\Unit\Converter\Stub\EntityNameAwareDataConverter');
        $dataConverter->expects($this->once())->method('setEntityName')->with($entityName);

        $this->processor->setDataConverter($dataConverter);
        $this->processor->setEntityName($entityName);
        $this->assertAttributeEquals($entityName, 'entityName', $this->processor);
    }
}

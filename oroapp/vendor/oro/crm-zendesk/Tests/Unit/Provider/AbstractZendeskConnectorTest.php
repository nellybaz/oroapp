<?php

namespace Oro\Bundle\ZendeskBundle\Tests\Unit\Provider;

use Oro\Bundle\ZendeskBundle\Provider\AbstractZendeskConnector;

class AbstractZendeskConnectorTest extends \PHPUnit_Framework_TestCase
{
    use ExecutionContextTrait;
    /**
     * @var AbstractZendeskConnector
     */
    protected $connector;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $stepExecutor;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $mediator;

    protected function setUp()
    {
        $registry = $this->getMockBuilder('Oro\Bundle\ImportExportBundle\Context\ContextRegistry')
            ->disableOriginalConstructor()
            ->getMock();
        $logger = $this->getMockBuilder('Oro\Bundle\IntegrationBundle\Logger\LoggerStrategy')
            ->disableOriginalConstructor()
            ->getMock();
        $this->mediator = $this->getMockBuilder('Oro\Bundle\IntegrationBundle\Provider\ConnectorContextMediator')
            ->disableOriginalConstructor()
            ->getMock();
        $syncState = $this->getMockBuilder('Oro\Bundle\ZendeskBundle\Model\SyncState')
            ->disableOriginalConstructor()
            ->getMock();
        $context = $this->createMock('Oro\Bundle\ImportExportBundle\Context\ContextInterface');
        $channel = $this->createMock('Oro\Bundle\IntegrationBundle\Entity\Channel');
        $transportEntity = $this->createMock('Oro\Bundle\IntegrationBundle\Entity\Transport');
        $channel->expects($this->any())
            ->method('getTransport')
            ->will($this->returnValue($transportEntity));
        $this->mediator->expects($this->any())
            ->method('getChannel')
            ->will($this->returnValue($channel));
        $registry->expects($this->any())
            ->method('getByStepExecution')
            ->will($this->returnValue($context));
        $constructorArgs = array(
            $syncState,
            $registry,
            $logger,
            $this->mediator
        );

        $this->connector = $this->getMockBuilder('Oro\Bundle\ZendeskBundle\Provider\AbstractZendeskConnector')
            ->setConstructorArgs($constructorArgs)
            ->setMethods(array('getConnectorSource'))
            ->getMockForAbstractClass();
        $this->stepExecutor = $this->getMockBuilder('Akeneo\Bundle\BatchBundle\Entity\StepExecution')
            ->disableOriginalConstructor()
            ->getMock();

        $this->stepExecutor
            ->expects($this->any())
            ->method('getExecutionContext')
            ->willReturn($this->initExecutionContext());

        $iterator = $this->createMock('\Iterator');
        $this->connector->expects($this->any())
            ->method('getConnectorSource')
            ->will($this->returnValue($iterator));
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        unset(
            $this->connector,
            $this->stepExecutor,
            $this->mediator,
            $this->executionContext
        );
    }

    /**
     * @expectedException \LogicException
     * @expectedExceptionMessage Option "transport" should implement "ZendeskTransportInterface"
     */
    public function testValidateConfigurationThrowExceptionIfTransportInvalid()
    {
        $transport = $this->createMock('Oro\Bundle\IntegrationBundle\Provider\TransportInterface');
        $this->mediator->expects($this->any())
            ->method('getTransport')
            ->will($this->returnValue($transport));
        $this->connector->setStepExecution($this->stepExecutor);
    }

    public function testValidateConfiguration()
    {
        $transport = $this->createMock('Oro\Bundle\ZendeskBundle\Provider\Transport\ZendeskTransportInterface');
        $this->mediator->expects($this->any())
            ->method('getTransport')
            ->will($this->returnValue($transport));

        $isUpdatedLastSyncDateCallback = $this->getIsUpdatedLastSyncDateCallback();
        $this->connector->setStepExecution($this->stepExecutor);
        $this->assertTrue(
            $isUpdatedLastSyncDateCallback(),
            "Last sync date should be saved to context data !"
        );
    }
}

<?php

namespace Oro\Bundle\MagentoBundle\Tests\Unit\Importexport\Processor;

use Symfony\Component\Serializer\SerializerInterface;

use Oro\Bundle\IntegrationBundle\Entity\Channel;
use Oro\Bundle\IntegrationBundle\Exception\TransportException;
use Oro\Bundle\IntegrationBundle\Tests\Unit\Fixture\Entity\TestTransport;
use Oro\Bundle\ImportExportBundle\Context\Context;
use Oro\Bundle\MagentoBundle\Entity\Address;
use Oro\Bundle\MagentoBundle\Entity\Customer;
use Oro\Bundle\MagentoBundle\ImportExport\Processor\CustomerAddressExportProcessor;
use Oro\Bundle\MagentoBundle\Provider\Transport\MagentoTransportInterface;
use Oro\Bundle\MagentoBundle\Service\CustomerStateHandler;
use Oro\Bundle\MagentoBundle\Service\StateManager;

class CustomerAddressExportProcessorTest extends \PHPUnit_Framework_TestCase
{
    /** @var CustomerAddressExportProcessor */
    protected $processor;

    /** @var MagentoTransportInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $transport;

    /** @var CustomerStateHandler */
    protected $stateHandler;

    /** @var SerializerInterface|\PHPUnit_Framework_MockObject_MockObject */
    protected $serializer;

    protected function setUp()
    {
        $this->transport  = $this->createMock(MagentoTransportInterface::class);
        $this->serializer = $this->createMock(SerializerInterface::class);
        $this->processor  = new CustomerAddressExportProcessor();
        $this->processor->setTransport($this->transport);
        $this->processor->setStateHandler(new CustomerStateHandler(new StateManager()));
        $this->processor->setSerializer($this->serializer);
        $this->processor->setImportExportContext(new Context([]));
    }

    public function testStopProcessingRemovedObject()
    {
        $address  = $this->createAddress();
        $customer = $address->getOwner();

        $exception = new TransportException();
        $exception->setFaultCode(CustomerAddressExportProcessor::ADDRESS_NOT_EXISTS_CODE);

        $this->transport
            ->expects(self::once())
            ->method('getCustomerAddressInfo')
            ->willThrowException($exception);

        $result = $this->processor->process($address);

        $this->assertNull($result);
        $this->assertEmpty($customer->getAddresses()->toArray());
    }

    /**
     * @expectedException \Oro\Bundle\ImportExportBundle\Exception\InvalidArgumentException
     * @expectedExceptionMessage Expected instance of Oro\Bundle\MagentoBundle\Entity\Address, "stdClass" given.
     */
    public function testExpectedInvalidArgumentException()
    {
        $object = new \stdClass();
        $this->processor->process($object);
    }

    /**
     * @return Address
     */
    protected function createAddress()
    {
        $customer = new Customer();
        $object   = new Address();
        $object->setOwner($customer);
        $object->setOriginId(12345);
        $object->setChannel((new Channel())->setTransport(new TestTransport()));

        return $object;
    }
}

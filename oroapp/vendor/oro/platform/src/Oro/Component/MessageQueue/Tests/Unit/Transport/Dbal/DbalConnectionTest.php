<?php
namespace Oro\Component\MessageQueue\Tests\Unit\Transport\Dbal;

use Doctrine\DBAL\Connection;
use Oro\Component\MessageQueue\Transport\ConnectionInterface;
use Oro\Component\MessageQueue\Transport\Dbal\DbalConnection;
use Oro\Component\MessageQueue\Transport\Dbal\DbalSession;
use Oro\Component\Testing\ClassExtensionTrait;

class DbalConnectionTest extends \PHPUnit_Framework_TestCase
{
    use ClassExtensionTrait;

    public function testShouldImplementConnectionInterface()
    {
        self::assertClassImplements(ConnectionInterface::class, DbalConnection::class);
    }

    public function testCouldBeConstructedWithRequiredArguments()
    {
        new DbalConnection($this->createDBALConnectionMock(), 'table');
    }

    public function testShouldCreateSessionInstance()
    {
        $connection = new DbalConnection($this->createDBALConnectionMock(), 'table');

        $this->assertInstanceOf(DbalSession::class, $connection->createSession());
    }

    public function testShouldReturnDBALConnectionInstance()
    {
        $connection = new DbalConnection($this->createDBALConnectionMock(), 'table');

        $this->assertInstanceOf(Connection::class, $connection->getDBALConnection());
    }

    public function testShouldReturnTableName()
    {
        $connection = new DbalConnection($this->createDBALConnectionMock(), 'table');

        $this->assertEquals('table', $connection->getTableName());
    }

    public function testShouldCloseConnection()
    {
        $dbalConnection = $this->createDBALConnectionMock();
        $dbalConnection
            ->expects($this->once())
            ->method('close')
        ;

        $connection = new DbalConnection($dbalConnection, 'table');
        $connection->close();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|Connection
     */
    private function createDBALConnectionMock()
    {
        return $this->createMock(Connection::class);
    }
}

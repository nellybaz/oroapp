<?php
namespace Oro\Component\MessageQueue\Tests\Unit\Transport\Dbal;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;
use Oro\Component\MessageQueue\Transport\Dbal\DbalConnection;
use Oro\Component\MessageQueue\Transport\Dbal\DbalDestination;
use Oro\Component\MessageQueue\Transport\Dbal\DbalMessage;
use Oro\Component\MessageQueue\Transport\Dbal\DbalMessageConsumer;
use Oro\Component\MessageQueue\Transport\Dbal\DbalSession;
use Oro\Component\MessageQueue\Transport\Exception\InvalidMessageException;
use Oro\Component\MessageQueue\Transport\Null\NullMessage;

class DbalMessageConsumerTest extends \PHPUnit_Framework_TestCase
{
    public function testCouldBeConstructedWithRequiredArguments()
    {
        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($this->createDBALConnectionMock()))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        new DbalMessageConsumer($session, new DbalDestination('queue'));
    }

    public function testShouldReturnInstanceOfDestination()
    {
        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($this->createDBALConnectionMock()))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $destination = new DbalDestination('queue');

        $consumer = new DbalMessageConsumer($session, $destination);

        $this->assertSame($destination, $consumer->getQueue());
    }

    public function testAcknowledgeShouldThrowIfInstanceOfMessageIsInvalid()
    {
        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($this->createDBALConnectionMock()))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $this->expectException(InvalidMessageException::class);
        $this->expectExceptionMessage(
            'The message must be an instance of '.
            'Oro\Component\MessageQueue\Transport\Dbal\DbalMessage '.
            'but it is Oro\Component\MessageQueue\Transport\Null\NullMessage.'
        );

        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $consumer->acknowledge(new NullMessage());
    }

    public function testCouldSetAndGetPollingInterval()
    {
        $connection = $this->createConnectionMock();

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $destination = new DbalDestination('queue');

        $consumer = new DbalMessageConsumer($session, $destination);
        $consumer->setPollingInterval(123456);

        $this->assertEquals(123456, $consumer->getPollingInterval());
    }

    public function testAcknowledgeShouldShouldDeleteRecordFromDb()
    {
        $statment = $this->createMock(Statement::class);
        $statment
            ->expects($this->once())
            ->method('fetch')
            ->will($this->returnValue(1));

        $dbal = $this->createDBALConnectionMock();
        $dbal
            ->expects($this->once())
            ->method('executeQuery')
            ->with('SELECT id FROM tableName WHERE id=:id FOR UPDATE', ['id' => 123])
            ->willReturn($statment);
        $dbal
            ->expects($this->once())
            ->method('delete')
            ->with('tableName', ['id' => 123])
            ->will($this->returnValue(1));

        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($dbal))
        ;
        $connection
            ->expects($this->exactly(2))
            ->method('getTableName')
            ->will($this->returnValue('tableName'))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $message = new DbalMessage();
        $message->setId(123);

        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $consumer->acknowledge($message);
    }

    public function testAcknowledgeShouldThrowIfMessageWasNotRemoved()
    {
        $statment = $this->createMock(Statement::class);
        $statment
            ->expects($this->once())
            ->method('fetch')
            ->will($this->returnValue(1));

        $dbal = $this->createDBALConnectionMock();
        $dbal
            ->expects($this->once())
            ->method('executeQuery')
            ->with('SELECT id FROM tableName WHERE id=:id FOR UPDATE', ['id' => 123])
            ->willReturn($statment);
        $dbal
            ->expects($this->once())
            ->method('delete')
            ->with('tableName', ['id' => 123])
            ->will($this->returnValue(0))
        ;

        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($dbal))
        ;
        $connection
            ->expects($this->exactly(2))
            ->method('getTableName')
            ->will($this->returnValue('tableName'))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $message = new DbalMessage();
        $message->setId(123);

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Expected record was removed but it is not. id: "123"');
        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $consumer->acknowledge($message);
    }

    public function stestRejectShouldThrowIfInstanceOfMessageIsInvalid()
    {
        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($this->createDBALConnectionMock()))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $this->expectException(InvalidMessageException::class);
        $this->expectExceptionMessage(
            'The message must be an instance of '.
            'Oro\Component\MessageQueue\Transport\Dbal\DbalMessage '.
            'but it is Oro\Component\MessageQueue\Transport\Null\NullMessage.'
        );

        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $consumer->reject(new NullMessage());
    }

    public function testRejectShouldShouldDeleteRecordFromDb()
    {
        $statment = $this->createMock(Statement::class);
        $statment
            ->expects($this->once())
            ->method('fetch')
            ->will($this->returnValue(1));

        $dbal = $this->createDBALConnectionMock();
        $dbal
            ->expects($this->once())
            ->method('executeQuery')
            ->with('SELECT id FROM tableName WHERE id=:id FOR UPDATE', ['id' => 123])
            ->willReturn($statment);
        $dbal
            ->expects($this->once())
            ->method('delete')
            ->with('tableName', ['id' => 123])
            ->will($this->returnValue(1))
        ;

        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($dbal))
        ;
        $connection
            ->expects($this->exactly(2))
            ->method('getTableName')
            ->will($this->returnValue('tableName'))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $message = new DbalMessage();
        $message->setId(123);

        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $consumer->reject($message);
    }

    public function testRejectShouldThrowIfMessageWasNotRemoved()
    {
        $statment = $this->createMock(Statement::class);
        $statment
            ->expects($this->once())
            ->method('fetch')
            ->will($this->returnValue(1));

        $dbal = $this->createDBALConnectionMock();
        $dbal
            ->expects($this->once())
            ->method('executeQuery')
            ->with('SELECT id FROM tableName WHERE id=:id FOR UPDATE', ['id' => 123])
            ->willReturn($statment);
        $dbal
            ->expects($this->once())
            ->method('delete')
            ->with('tableName', ['id' => 123])
            ->will($this->returnValue(0))
        ;

        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($dbal))
        ;
        $connection
            ->expects($this->exactly(2))
            ->method('getTableName')
            ->will($this->returnValue('tableName'))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $message = new DbalMessage();
        $message->setId(123);

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Expected record was removed but it is not. id: "123"');

        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $consumer->reject($message);
    }

    public function testRejectShouldShouldInsertNewMessageIfRequeueIsTrue()
    {
        $statment = $this->createMock(Statement::class);
        $statment
            ->expects($this->once())
            ->method('fetch')
            ->will($this->returnValue(1));

        $dbal = $this->createDBALConnectionMock();
        $dbal
            ->expects($this->once())
            ->method('executeQuery')
            ->with('SELECT id FROM tableName WHERE id=:id FOR UPDATE', ['id' => 123])
            ->willReturn($statment);
        $dbal
            ->expects($this->once())
            ->method('delete')
            ->with('tableName', ['id' => 123])
            ->will($this->returnValue(1))
        ;

        $expectedMessage = [
            'body' => 'body',
            'headers' => '{"hkey":"hvalue"}',
            'properties' => '{"pkey":"pvalue"}',
            'priority' => 5,
            'queue' => 'queue',
            'redelivered' => true,
        ];

        $dbal
            ->expects($this->once())
            ->method('insert')
            ->with('tableName', $expectedMessage)
            ->will($this->returnValue(1))
        ;

        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($dbal))
        ;
        $connection
            ->expects($this->exactly(3))
            ->method('getTableName')
            ->will($this->returnValue('tableName'))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $message = new DbalMessage();
        $message->setId(123);
        $message->setBody('body');
        $message->setHeaders(['hkey' => 'hvalue']);
        $message->setProperties(['pkey' => 'pvalue']);
        $message->setPriority(5);

        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $consumer->reject($message, true);
    }

    public function testRejectAndAckShouldThrowIfRecordWasNotFoundForDeleting()
    {
        $statment = $this->createMock(Statement::class);
        $statment
            ->expects($this->once())
            ->method('fetch')
            ->will($this->returnValue(null));

        $dbal = $this->createDBALConnectionMock();
        $dbal
            ->expects($this->once())
            ->method('executeQuery')
            ->with('SELECT id FROM tableName WHERE id=:id FOR UPDATE', ['id' => 123])
            ->willReturn($statment);

        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($dbal))
        ;
        $connection
            ->expects($this->once())
            ->method('getTableName')
            ->will($this->returnValue('tableName'))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $message = new DbalMessage();
        $message->setId(123);
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage(
            'Expected record was removed but it is not. id: "123"'
        );
        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $consumer->reject($message, true);
        $consumer->acknowledge($message);
    }

    public function testRejectShouldThrowIfRecordWasNotInserted()
    {
        $statment = $this->createMock(Statement::class);
        $statment
            ->expects($this->once())
            ->method('fetch')
            ->will($this->returnValue(1));

        $dbal = $this->createDBALConnectionMock();
        $dbal
            ->expects($this->once())
            ->method('executeQuery')
            ->with('SELECT id FROM tableName WHERE id=:id FOR UPDATE', ['id' => null])
            ->willReturn($statment);
        $dbal
            ->expects($this->once())
            ->method('delete')
            ->will($this->returnValue(1))
        ;
        $dbal
            ->expects($this->once())
            ->method('insert')
            ->will($this->returnValue(0))
        ;

        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($dbal))
        ;
        $connection
            ->expects($this->exactly(3))
            ->method('getTableName')
            ->will($this->returnValue('tableName'))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $message = new DbalMessage();

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage(
            'Expected record was inserted but it is not. message: '.
            '"{"body":null,"headers":"[]","properties":"[]","priority":0,"queue":"queue","redelivered":true}"'
        );
        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $consumer->reject($message, true);
    }

    public function testShouldReceiveMessage()
    {
        $dbalMessage = [
            'id' => 'id',
            'body' => 'body',
            'headers' => '{"hkey":"hvalue","priority":5}',
            'properties' => '{"pkey":"pvalue"}',
            'priority' => 5,
            'queue' => 'queue',
            'redelivered' => true,
        ];

        $statement = $this->createDBALStatementMock();
        $statement
            ->expects($this->at(0))
            ->method('fetch')
            ->will($this->returnValue(1))
        ;
        $statement
            ->expects($this->at(1))
            ->method('fetch')
            ->will($this->returnValue($dbalMessage))
        ;

        $dbal = $this->createDBALConnectionMock();
        $dbal
            ->expects($this->exactly(2))
            ->method('executeQuery')
            ->will($this->returnValue($statement))
        ;

        $dbal
            ->expects($this->once())
            ->method('commit')
        ;

        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($dbal))
        ;
        $connection
            ->expects($this->exactly(3))
            ->method('getTableName')
            ->will($this->returnValue('tableName'))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;
        $session
            ->expects($this->once())
            ->method('createMessage')
            ->will($this->returnValue($message = new DbalMessage()))
        ;

        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $result = $consumer->receiveNoWait();

        $this->assertInstanceOf(DbalMessage::class, $result);
        $this->assertEquals('id', $result->getId());
        $this->assertEquals('body', $result->getBody());
        $this->assertEquals(['hkey' => 'hvalue', 'priority' => 5], $result->getHeaders());
        $this->assertEquals(['pkey' => 'pvalue'], $result->getProperties());
        $this->assertTrue($result->isRedelivered());
        $this->assertEquals(5, $result->getPriority());
    }

    public function testShouldReturnNullIfThereIsNoNewMessage()
    {
        $statement = $this->createDBALStatementMock();
        $statement
            ->expects($this->once())
            ->method('fetch')
            ->will($this->returnValue(0))
        ;
        $dbal = $this->createDBALConnectionMock();

        $dbal
            ->expects($this->once())
            ->method('executeQuery')
            ->will($this->returnValue($statement))
        ;


        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($dbal))
        ;
        $connection
            ->expects($this->once())
            ->method('getTableName')
            ->will($this->returnValue('tableName'))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $consumer->setPollingInterval(1000);
        $result = $consumer->receive(1);

        $this->assertEmpty($result);
    }

    public function testShouldThrowIfMessageWasNotReceived()
    {
        $statement = $this->createDBALStatementMock();
        $statement
            ->expects($this->at(0))
            ->method('fetch')
            ->will($this->returnValue(1))
        ;
        $statement
            ->expects($this->at(1))
            ->method('fetch')
            ->will($this->returnValue(0))
        ;
        $dbal = $this->createDBALConnectionMock();

        $dbal
            ->expects($this->exactly(2))
            ->method('executeQuery')
            ->will($this->returnValue($statement))
        ;

        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($dbal))
        ;
        $connection
            ->expects($this->exactly(3))
            ->method('getTableName')
            ->will($this->returnValue('tableName'))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Expected one record but got nothing. consumer_id:');
        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $consumer->receive();
    }

    public function testShouldRollbackTransactionIfExceptionThrownOnFirstUpdate()
    {
        $statement = $this->createDBALStatementMock();
        $statement
            ->expects($this->once())
            ->method('fetch')
            ->willThrowException(new \Exception())
        ;
        $dbal = $this->createDBALConnectionMock();

        $dbal
            ->expects($this->once())
            ->method('executeQuery')
            ->will($this->returnValue($statement))
        ;
        $dbal
            ->expects($this->once())
            ->method('rollBack')
        ;

        $connection = $this->createConnectionMock();
        $connection
            ->expects($this->once())
            ->method('getDBALConnection')
            ->will($this->returnValue($dbal))
        ;
        $connection
            ->expects($this->once())
            ->method('getTableName')
            ->will($this->returnValue('tableName'))
        ;

        $session = $this->createSessionMock();
        $session
            ->expects($this->once())
            ->method('getConnection')
            ->will($this->returnValue($connection))
        ;

        $consumer = new DbalMessageConsumer($session, new DbalDestination('queue'));
        $consumer->receiveNoWait();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|Statement
     */
    private function createDBALStatementMock()
    {
        return $this->createMock(Statement::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|Connection
     */
    private function createDBALConnectionMock()
    {
        return $this->createMock(Connection::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|DbalConnection
     */
    private function createConnectionMock()
    {
        return $this->createMock(DbalConnection::class);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|DbalSession
     */
    private function createSessionMock()
    {
        return $this->createMock(DbalSession::class);
    }
}

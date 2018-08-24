<?php

namespace Oro\Bundle\DistributionBundle\Tests\Unit\Translation;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\DBAL\Statement;
use Oro\Bundle\DistributionBundle\Translation\Translator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Translation\Loader\LoaderInterface;
use Symfony\Component\Translation\MessageCatalogue;
use Symfony\Component\Translation\MessageSelector;

class TranslatorTest extends \PHPUnit_Framework_TestCase
{
    /** @var Translator */
    protected $translator;

    protected function setUp()
    {
        $statement = $this->createMock(Statement::class);
        $statement->expects($this->any())
            ->method('fetchAll')
            ->willReturn(
                [
                    ['code' => 'de']
                ]
            );

        $qb = $this->createMock(QueryBuilder::class);
        $qb->expects($this->any())->method('select')->willReturnSelf();
        $qb->expects($this->any())->method('from')->willReturnSelf();
        $qb->expects($this->any())->method('execute')->willReturn($statement);

        /** @var Connection|\PHPUnit_Framework_MockObject_MockObject $connection */
        $connection = $this->createMock(Connection::class);
        $connection->expects($this->any())->method('createQueryBuilder')->willReturn($qb);

        /** @var ManagerRegistry|\PHPUnit_Framework_MockObject_MockObject $registry */
        $registry = $this->createMock(ManagerRegistry::class);
        $registry->expects($this->any())->method('getConnection')->willReturn($connection);

        /** @var ContainerInterface|\PHPUnit_Framework_MockObject_MockObject $container */
        $container = $this->createMock(ContainerInterface::class);
        $container->expects($this->any())->method('get')->with('doctrine')->willReturn($registry);

        /** @var MessageSelector|\PHPUnit_Framework_MockObject_MockObject $selector */
        $selector = $this->createMock(MessageSelector::class);

        $this->translator = new Translator($container, $selector);
    }

    public function testAddResource()
    {
        $this->translator->addResource('test', 'test_resource', 'en', 'messages');
        $this->translator->addResource('test', 'test_resource', 'en', 'jsmessages');

        $this->assertAttributeEquals(['messages', 'jsmessages'], 'domains', $this->translator);
    }

    public function testInitialize()
    {
        $catalogue = new MessageCatalogue(
            'en',
            [
                'jsmessages' => [
                    'test_key' => 'test_value'
                ]
            ]
        );

        /** @var LoaderInterface|\PHPUnit_Framework_MockObject_MockObject $loader */
        $loader = $this->createMock(LoaderInterface::class);
        $loader->expects($this->once())
            ->method('load')
            ->with('test_resource', 'en', 'jsmessages')
            ->willReturn($catalogue);

        $this->translator->addResource('test', 'test_resource', 'en', 'jsmessages');
        $this->translator->addLoader('test', $loader);

        $result = $this->translator->getCatalogue('en');

        $this->assertNotSame($catalogue, $result);
        $this->assertEquals($catalogue, $result);
    }
}

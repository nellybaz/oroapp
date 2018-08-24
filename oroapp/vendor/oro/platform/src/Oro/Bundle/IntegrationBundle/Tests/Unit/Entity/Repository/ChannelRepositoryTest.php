<?php

namespace Oro\Bundle\IntegrationBundle\Tests\Unit\Entity\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\ClassMetadata;

use Oro\Bundle\IntegrationBundle\Entity\Repository\ChannelRepository;

class ChannelRepositoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var ChannelRepository */
    protected $repository;

    /** @var EntityManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $entityManager;

    protected function setUp()
    {
        $this->entityManager = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()->getMock();

        $this->repository = new ChannelRepository(
            $this->entityManager,
            new ClassMetadata('Oro\Bundle\IntegrationBundle\Entity\Channel')
        );
    }

    protected function tearDown()
    {
        unset($this->entityManager, $this->repository);
    }

    /**
     * @dataProvider channelsTypeProvider
     *
     * @param null|string $type
     */
    public function testGetConfiguredChannelsForSync($type = null)
    {
        $expectedResult = [];

        $query = $this->getMockBuilder('Doctrine\ORM\AbstractQuery')
            ->disableOriginalConstructor()
            ->setMethods(array('getResult'))
            ->getMockForAbstractClass();
        $query->expects($this->once())->method('getResult')
            ->will($this->returnValue($expectedResult));

        $qb = $this->getMockBuilder('Doctrine\ORM\QueryBuilder')
            ->disableOriginalConstructor()
            ->getMock();
        $qb->expects($this->at(0))
            ->method('select')->with('c')
            ->will($this->returnSelf());
        $qb->expects($this->at(1))
            ->method('from')->with('Oro\Bundle\IntegrationBundle\Entity\Channel')
            ->will($this->returnSelf());
        $qb->expects($this->at(2))
            ->method('where')->with('c.transport is NOT NULL')
            ->will($this->returnSelf());
        $qb->expects($this->at(3))
            ->method('andWhere')->with('c.enabled = :isEnabled')
            ->will($this->returnSelf());
        $qb->expects($this->at(4))
            ->method('setParameter')->with('isEnabled', true)
            ->will($this->returnSelf());

        if (null !== $type) {
            $qb->expects($this->at(5))
                ->method('andWhere')->with('c.type = :type')
                ->will($this->returnSelf());
            $qb->expects($this->at(6))
                ->method('setParameter')->with('type', $type)
                ->will($this->returnSelf());
        }

        $qb->expects($this->once())->method('getQuery')
            ->will($this->returnValue($query));

        $this->entityManager->expects($this->once())
            ->method('createQueryBuilder')->with()
            ->will($this->returnValue($qb));

        $result = $this->repository->getConfiguredChannelsForSync($type);
        $this->assertSame($expectedResult, $result);
    }

    /**
     * @return array
     */
    public function channelsTypeProvider()
    {
        return [
            [null],
            ['simple']
        ];
    }
}

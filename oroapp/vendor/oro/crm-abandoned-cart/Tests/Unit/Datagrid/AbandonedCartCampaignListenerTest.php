<?php

namespace Oro\Bundle\AbandonedCartBundle\Tests\Unit\Datagrid;

use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\QueryBuilder;

use Oro\Bundle\DataGridBundle\Datagrid\DatagridInterface;
use Oro\Bundle\DataGridBundle\Datasource\Orm\OrmDatasource;
use Oro\Bundle\DataGridBundle\Event\BuildAfter;
use Oro\Bundle\AbandonedCartBundle\Datagrid\AbandonedCartCampaignListener;

class AbandonedCartCampaignListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AbandonedCartCampaignListener
     */
    protected $listener;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|DatagridInterface
     */
    protected $datagrid;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|OrmDatasource
     */
    protected $ormDataSource;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|QueryBuilder
     */
    protected $qb;

    /**
     * @var string
     */
    protected $gridName;

    /**
     * @var string
     */
    protected $abandonedCartCampaignClass;

    protected function setUp()
    {
        $this->datagrid = $this->createMock('Oro\Bundle\DataGridBundle\Datagrid\DatagridInterface');
        $this->ormDataSource = $this->getMockBuilder('Oro\Bundle\DataGridBundle\Datasource\Orm\OrmDatasource')
            ->disableOriginalConstructor()
            ->getMock();
        $this->qb = $this->getMockBuilder('Doctrine\ORM\QueryBuilder')
            ->disableOriginalConstructor()
            ->getMock();
        $this->gridName = 'dummy_grid_name';
        $this->abandonedCartCampaignClass = 'className';
        $this->listener = new AbandonedCartCampaignListener($this->gridName, $this->abandonedCartCampaignClass);
    }

    public function testOnBuildAfterWhenIsNotApplicable()
    {
        $event = new BuildAfter($this->datagrid);

        $this->datagrid->expects($this->once())->method('getName')->will($this->returnValue('another_grid_name'));

        $this->datagrid->expects($this->never())->method('getDatasource');

        $this->listener->onBuildAfter($event);
    }

    public function testOnBuildAfterDatasourceIsNotValid()
    {
        $event = new BuildAfter($this->datagrid);

        $this->datagrid->expects($this->once())->method('getName')->will($this->returnValue($this->gridName));

        $notOrmDatasource = $this->createMock('Oro\Bundle\DataGridBundle\Datasource\DatasourceInterface');

        $this->datagrid->expects($this->once())->method('getDatasource')
            ->will($this->returnValue($notOrmDatasource));

        $this->ormDataSource->expects($this->never())->method('getQueryBuilder');

        $this->listener->onBuildAfter($event);
    }

    public function testOnBuildAfter()
    {
        $event = new BuildAfter($this->datagrid);

        $this->datagrid->expects($this->once())->method('getName')->will($this->returnValue($this->gridName));

        $this->datagrid->expects($this->once())->method('getDatasource')
            ->will($this->returnValue($this->ormDataSource));

        $this->ormDataSource->expects($this->once())->method('getQueryBuilder')
            ->will($this->returnValue($this->qb));

        $this->qb->expects($this->once())->method('getRootAliases')
            ->will($this->returnValue(['rootAlias']));

        $this->qb->expects($this->once())->method('join')
            ->with(
                $this->abandonedCartCampaignClass,
                'acc',
                Join::WITH,
                'acc.marketingList = rootAlias.id'
            )
            ->will($this->returnSelf());

        $this->listener->onBuildAfter($event);
    }
}

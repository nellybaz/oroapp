<?php

namespace Oro\Bundle\DataGridBundle\Tests\Unit\Extension\MassAction;

use Oro\Bundle\DataGridBundle\Datasource\ArrayDatasource\ArrayDatasource;
use Oro\Bundle\DataGridBundle\Datasource\Orm\OrmDatasource;
use Oro\Bundle\DataGridBundle\Exception\LogicException;
use Oro\Bundle\SecurityBundle\ORM\Walker\AclHelper;
use Oro\Bundle\DataGridBundle\Extension\Action\ActionConfiguration;
use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;
use Oro\Bundle\DataGridBundle\Extension\MassAction\DTO\SelectedItems;
use Oro\Bundle\DataGridBundle\Extension\MassAction\IterableResultFactory;

class IterableResultFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AclHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $aclHelper;

    /**
     * @var IterableResultFactory
     */
    protected $iterableResultFactory;

    protected function setUp()
    {
        $this->aclHelper = $this->createMock(AclHelper::class);
        $this->iterableResultFactory = new IterableResultFactory($this->aclHelper);
    }

    public function testIsApplicableWhenNotApplicable()
    {
        $this->assertFalse($this->iterableResultFactory->isApplicable(new ArrayDatasource()));
    }

    public function testIsApplicable()
    {
        /** @var OrmDatasource $dataSource */
        $dataSource = $this->createMock(OrmDatasource::class);

        $this->assertTrue($this->iterableResultFactory->isApplicable($dataSource));
    }

    public function testCreateIterableResultWithNotSupportedDatasource()
    {
        /** @var DatagridConfiguration|\PHPUnit_Framework_MockObject_MockObject $gridConfiguration **/
        $gridConfiguration = $this->createMock(DatagridConfiguration::class);
        $selectedItems = SelectedItems::createFromParameters([]);

        $this->expectException(LogicException::class);
        $this->expectExceptionMessage(
            sprintf('Expecting "%s" datasource type, "%s" given', OrmDatasource::class, ArrayDatasource::class)
        );

        $this->iterableResultFactory->createIterableResult(
            new ArrayDatasource(),
            ActionConfiguration::create([]),
            $gridConfiguration,
            $selectedItems
        );
    }
}

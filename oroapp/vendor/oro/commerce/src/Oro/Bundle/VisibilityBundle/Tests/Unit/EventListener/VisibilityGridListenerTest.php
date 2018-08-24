<?php

namespace Oro\Bundle\VisibilityBundle\Tests\Unit\EventListener;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\QueryBuilder;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\DataGridBundle\Datagrid\Common\DatagridConfiguration;
use Oro\Bundle\DataGridBundle\Datagrid\DatagridInterface;
use Oro\Bundle\DataGridBundle\Datagrid\ParameterBag;
use Oro\Bundle\DataGridBundle\Datasource\Orm\OrmDatasource;
use Oro\Bundle\DataGridBundle\Event\BuildAfter;
use Oro\Bundle\DataGridBundle\Event\PreBuild;
use Oro\Bundle\ScopeBundle\Entity\Scope;
use Oro\Bundle\ScopeBundle\Manager\ScopeManager;
use Oro\Bundle\ScopeBundle\Model\ScopeCriteria;
use Oro\Bundle\VisibilityBundle\Entity\Visibility\CustomerCategoryVisibility;
use Oro\Bundle\VisibilityBundle\EventListener\VisibilityGridListener;
use Oro\Bundle\VisibilityBundle\Provider\VisibilityChoicesProvider;
use Oro\Component\TestUtils\ORM\Mocks\EntityManagerMock;

class VisibilityGridListenerTest extends \PHPUnit_Framework_TestCase
{
    const CUSTOMER_CATEGORY_VISIBILITY_GRID = 'customer-category-visibility-grid';
    const CUSTOMER_GROUP_PRODUCT_VISIBILITY_GRID = 'customer-group-product-visibility-grid';

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ManagerRegistry
     */
    protected $registry;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|VisibilityChoicesProvider
     */
    protected $visibilityChoicesProvider;

    /**
     * @var VisibilityGridListener
     */
    protected $listener;

    /**
     * @var array
     */
    protected $choices = [
        'hidden' => 'Hidden',
        'visible' => 'Visible',
    ];

    /**
     * @var ScopeManager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $scopeManager;

    protected function setUp()
    {
        $this->registry = $this->createMock(ManagerRegistry::class);

        $this->visibilityChoicesProvider = $this
            ->getMockBuilder(VisibilityChoicesProvider::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->visibilityChoicesProvider->expects($this->any())
            ->method('getFormattedChoices')
            ->willReturn($this->choices);

        $this->scopeManager = $this->getMockBuilder(ScopeManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->listener = new VisibilityGridListener(
            $this->registry,
            $this->visibilityChoicesProvider,
            $this->scopeManager
        );
    }

    public function testOnPreBuild()
    {
        $repository = $this->createMock(ObjectRepository::class);
        $repository->method('find')->with(1)->willReturn(new Category());
        $this->registry->method('getRepository')->with(Category::class)->willReturn($repository);

        $config = $this->getMockBuilder(DatagridConfiguration::class)
            ->disableOriginalConstructor()
            ->getMock();

        $config->method('getName')->willReturn(self::CUSTOMER_CATEGORY_VISIBILITY_GRID);
        $config->method('offsetGetByPath')
            ->willReturnMap(
                [
                    ['[options][cellSelection][selector]', null, '#customer-category-visibility-changeset'],
                    ['[options][visibilityEntityClass]', null, CustomerCategoryVisibility::class],
                    ['[options][targetEntityClass]', null, Category::class],
                    ['[scope]', null, 'scope'],
                    ['[columns][visibility]', null, []],
                    ['[filters][columns][visibility][options][field_options]', null, []],
                ]
            );

        // assert that grid configuration was modified
        $config->expects($this->exactly(4))
            ->method('offsetSetByPath')
            ->withConsecutive(
                ['[options][cellSelection][selector]', '#customer-category-visibility-changeset-2'],
                ['[scope]', 'scope-2'],
                ['[columns][visibility]', ['choices' => $this->choices]],
                ['[filters][columns][visibility][options][field_options]', ['choices' => $this->choices]]
            );

        $event = new PreBuild($config, new ParameterBag(['target_entity_id' => 1, 'scope_id' => 2]));
        $this->listener->onPreBuild($event);
    }

    public function testOnDatagridBuildAfter()
    {
        $scope = new Scope();
        $repository = $this->createMock(ObjectRepository::class);
        $repository->method('find')->with(1)->willReturn($scope);
        $this->registry->method('getRepository')->with(Scope::class)->willReturn($repository);

        $scopeCriteria = $this->getMockBuilder(ScopeCriteria::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->scopeManager->expects($this->once())->method('getCriteriaByScope')
            ->with($scope, 'customer_category_visibility')
            ->willReturn($scopeCriteria);

        $datagrid = $this->createMock(DatagridInterface::class);
        $datagrid->method('getParameters')->willReturn(new ParameterBag(['scope_id' => 1]));
        $datagrid->method('getName')->willReturn(self::CUSTOMER_CATEGORY_VISIBILITY_GRID);
        $ds = $this->getMockBuilder(OrmDatasource::class)->disableOriginalConstructor()->getMock();
        $qb = $this->getMockBuilder(QueryBuilder::class)->disableOriginalConstructor()->getMock();
        $ds->method('getQueryBuilder')->willReturn($qb);
        $datagrid->method('getDatasource')->willReturn($ds);

        // assert that join with scope was applied properly
        $scopeCriteria->expects($this->once())->method('applyToJoin')
            ->with($qb, 'scope', ['customer']);

        $config = $this->getMockBuilder(DatagridConfiguration::class)->disableOriginalConstructor()->getMock();
        $config->method('getName')->willReturn(self::CUSTOMER_CATEGORY_VISIBILITY_GRID);
        $config->method('offsetGetByPath')
            ->willReturnMap(
                [
                    ['[options][scopeAttr]', null, 'customer'],
                    ['[options][visibilityEntityClass]', null, CustomerCategoryVisibility::class],
                ]
            );
        $datagrid->method('getConfig')->willReturn($config);

        $event = new BuildAfter($datagrid, $qb);
        $this->listener->onDatagridBuildAfter($event);
    }

    public function testOnDatagridBuildAfterDefaultScope()
    {
        $scope = new Scope();
        $this->scopeManager->method('findDefaultScope')->willReturn($scope);
        $scopeCriteria = $this->getMockBuilder(ScopeCriteria::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->scopeManager->expects($this->once())->method('getCriteriaByScope')
            ->with($scope, 'customer_category_visibility')
            ->willReturn($scopeCriteria);

        $datagrid = $this->createMock(DatagridInterface::class);
        $datagrid->method('getParameters')->willReturn(new ParameterBag([]));
        $datagrid->method('getName')->willReturn(self::CUSTOMER_CATEGORY_VISIBILITY_GRID);
        $ds = $this->getMockBuilder(OrmDatasource::class)->disableOriginalConstructor()->getMock();
        $qb = $this->getMockBuilder(QueryBuilder::class)->disableOriginalConstructor()->getMock();
        $ds->method('getQueryBuilder')->willReturn($qb);
        $datagrid->method('getDatasource')->willReturn($ds);

        // assert that join with scope was applied properly
        $scopeCriteria->expects($this->once())->method('applyToJoin')
            ->with($qb, 'scope', ['customer']);

        $config = $this->getMockBuilder(DatagridConfiguration::class)->disableOriginalConstructor()->getMock();
        $config->method('getName')->willReturn(self::CUSTOMER_CATEGORY_VISIBILITY_GRID);
        $config->method('offsetGetByPath')
            ->willReturnMap(
                [
                    ['[options][scopeAttr]', null, 'customer'],
                    ['[options][visibilityEntityClass]', null, CustomerCategoryVisibility::class],
                ]
            );
        $datagrid->method('getConfig')->willReturn($config);

        $event = new BuildAfter($datagrid, $qb);
        $this->listener->onDatagridBuildAfter($event);
    }

    /**
     * @return EntityManagerMock
     */
    protected function getEntityManager()
    {
        /** @var Connection|\PHPUnit_Framework_MockObject_MockObject $connection */
        $connection = $this->getMockBuilder(Connection::class)->disableOriginalConstructor()->getMock();

        return EntityManagerMock::create($connection);
    }
}

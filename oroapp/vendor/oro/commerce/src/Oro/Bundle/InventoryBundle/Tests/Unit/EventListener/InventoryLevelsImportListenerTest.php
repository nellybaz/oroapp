<?php

namespace Oro\Bundle\InventoryBundle\Tests\Unit\EventListener;

use Akeneo\Bundle\BatchBundle\Entity\JobExecution;
use Akeneo\Bundle\BatchBundle\Entity\StepExecution;
use Akeneo\Bundle\BatchBundle\Event\StepExecutionEvent;
use Akeneo\Bundle\BatchBundle\Item\ExecutionContext;

use Oro\Bundle\InventoryBundle\Entity\InventoryLevel;
use Oro\Bundle\InventoryBundle\EventListener\InventoryLevelsImportListener;
use Oro\Bundle\InventoryBundle\ImportExport\Strategy\InventoryLevelStrategy;

class InventoryLevelsImportListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var InventoryLevelStrategy|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $inventoryLevelStrategy;

    /**
     * @var InventoryLevelsImportListener
     */
    protected $inventoryLevelsImportListener;

    protected function setUp()
    {
        $this->inventoryLevelStrategy = $this->getMockBuilder(InventoryLevelStrategy::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->inventoryLevelsImportListener = new InventoryLevelsImportListener(
            $this->inventoryLevelStrategy
        );
    }

    public function testShouldClearCache()
    {
        $event = $this->getEvent(
            InventoryLevelsImportListener::INVENTORY_IMPORT_PROCESSOR_ALIAS,
            InventoryLevel::class
        );

        $this->inventoryLevelStrategy->expects($this->exactly(1))
            ->method('clearCache');

        $this->inventoryLevelsImportListener->onBatchStepCompleted($event);
    }

    public function testShouldNotClearCache()
    {
        $event = $this->getEvent(
            'some other alias',
            'some class'
        );

        $this->inventoryLevelStrategy->expects($this->exactly(0))
            ->method('clearCache');

        $this->inventoryLevelsImportListener->onBatchStepCompleted($event);
    }

    /**
     * @param string $processorAlias
     * @param string $entityName
     *
     * @return StepExecution
     */
    protected function getEvent($processorAlias, $entityName)
    {
        $executionContext = new ExecutionContext();
        $executionContext->put('processorAlias', $processorAlias);
        $executionContext->put('entityName', $entityName);

        $jobExecution = new JobExecution();
        $jobExecution->setExecutionContext($executionContext);

        $stepExecution = new StepExecution('import', $jobExecution);

        return new StepExecutionEvent($stepExecution);
    }
}

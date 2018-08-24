<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Configuration;

use Oro\Bundle\WorkflowBundle\Configuration\ProcessConfigurationBuilder;
use Oro\Bundle\WorkflowBundle\Configuration\ProcessPriority;
use Oro\Bundle\WorkflowBundle\Entity\ProcessDefinition;
use Oro\Bundle\WorkflowBundle\Entity\ProcessTrigger;

/**
 * @SuppressWarnings(PHPMD.TooManyMethods)
 */
class ProcessConfigurationBuilderTest extends \PHPUnit_Framework_TestCase
{
    const TEST_DEFINITION_NAME = 'test_definition';

    /**
     * @var ProcessConfigurationBuilder
     */
    protected $builder;

    protected function setUp()
    {
        $this->builder = new ProcessConfigurationBuilder();
    }

    protected function tearDown()
    {
        unset($this->builder);
    }

    /**
     * @param array $expected
     * @param ProcessDefinition $definition
     */
    protected function assertDefinitionConfiguration(array $expected, ProcessDefinition $definition)
    {
        $this->assertEquals($expected['label'], $definition->getLabel());
        $this->assertEquals($expected['entity'], $definition->getRelatedEntity());
        $this->assertEquals($expected['enabled'], $definition->isEnabled());
        $this->assertEquals($expected['order'], $definition->getExecutionOrder());
        $this->assertEquals($expected['exclude_definitions'], $definition->getExcludeDefinitions());
        $this->assertEquals($expected['actions_configuration'], $definition->getActionsConfiguration());
    }

    /**
     * @param array $expected
     * @param ProcessDefinition $definition
     * @param ProcessTrigger $trigger
     */
    protected function assertProcessTrigger(
        array $expected,
        ProcessDefinition $definition,
        ProcessTrigger $trigger
    ) {
        $this->assertEquals($expected['event'], $trigger->getEvent());
        $this->assertEquals($expected['field'], $trigger->getField());
        $this->assertEquals($expected['queued'], $trigger->isQueued());
        $this->assertEquals($expected['priority'], $trigger->getPriority());
        $this->assertSame($expected['time_shift'], $trigger->getTimeShift());
        $this->assertSame($expected['cron'], $trigger->getCron());
        $this->assertSame($definition, $trigger->getDefinition());
    }

    /**
     * @param string $name
     * @param array $configuration
     * @param array $expected
     * @dataProvider buildProcessDefinitionDataProvider
     */
    public function testBuildProcessDefinition($name, array $configuration, array $expected)
    {
        $definition = $this->builder->buildProcessDefinition($name, $configuration);

        $this->assertInstanceOf('Oro\Bundle\WorkflowBundle\Entity\ProcessDefinition', $definition);
        $this->assertEquals($name, $definition->getName());
        $this->assertDefinitionConfiguration($expected, $definition);
    }

    /**
     * @return array
     */
    public function buildProcessDefinitionDataProvider()
    {
        return [
            'minimum data' => [
                'name' => 'minimum_name',
                'configuration' => [
                    'label' => 'My Label',
                    'entity' => 'My\Entity',
                ],
                'expected' => [
                    'label' => 'My Label',
                    'entity' => 'My\Entity',
                    'enabled' => true,
                    'order' => 0,
                    'exclude_definitions' => [],
                    'actions_configuration' => [],
                ],
            ],
            'maximum data' => [
                'name' => 'maximum_name',
                'configuration' => [
                    'label' => 'My Label',
                    'enabled' => false,
                    'entity' => 'My\Entity',
                    'order' => 10,
                    'exclude_definitions' => ['test_definition'],
                    'actions_configuration' => ['key' => 'value'],
                ],
                'expected' => [
                    'label' => 'My Label',
                    'enabled' => false,
                    'entity' => 'My\Entity',
                    'order' => 10,
                    'exclude_definitions' => ['test_definition'],
                    'actions_configuration' => ['key' => 'value'],
                ],
            ],
        ];
    }

    /**
     * @param array $configuration
     * @param array $expected
     * @dataProvider buildProcessDefinitionsDataProvider
     */
    public function testBuildProcessDefinitions(array $configuration, array $expected)
    {
        $definitions = $this->builder->buildProcessDefinitions($configuration);

        $this->assertSameSize($expected, $definitions);
        foreach ($definitions as $definition) {
            $this->assertInstanceOf('Oro\Bundle\WorkflowBundle\Entity\ProcessDefinition', $definition);
            $this->assertArrayHasKey($definition->getName(), $expected);
            $this->assertDefinitionConfiguration($expected[$definition->getName()], $definition);
        }
    }

    /**
     * @return array
     */
    public function buildProcessDefinitionsDataProvider()
    {
        $basicDataProvider = $this->buildProcessDefinitionDataProvider();

        $configuration = [];
        $expected = [];
        foreach ($basicDataProvider as $dataSet) {
            $definitionName = $dataSet['name'];
            $configuration[$definitionName] = $dataSet['configuration'];
            $expected[$definitionName] = $dataSet['expected'];
        }

        return [
            [
                'configuration' => $configuration,
                'expected' => $expected,
            ]
        ];
    }

    /**
     * @param array $configuration
     * @param array $expected
     * @dataProvider buildProcessTriggerDataProvider
     */
    public function testBuildProcessTrigger(array $configuration, array $expected)
    {
        $triggerDefinition = new ProcessDefinition();
        $trigger = $this->builder->buildProcessTrigger($configuration, $triggerDefinition);
        $this->assertInstanceOf('Oro\Bundle\WorkflowBundle\Entity\ProcessTrigger', $trigger);
        $this->assertProcessTrigger($expected, $triggerDefinition, $trigger);
    }

    /**
     * @return array
     */
    public function buildProcessTriggerDataProvider()
    {
        return [
            'minimum data' => [
                'configuration' => [
                    'event' => ProcessTrigger::EVENT_CREATE,
                ],
                'expected' => [
                    'event'      => ProcessTrigger::EVENT_CREATE,
                    'field'      => null,
                    'priority'   => ProcessPriority::PRIORITY_DEFAULT,
                    'queued'     => false,
                    'time_shift' => null,
                    'cron' => null
                ],
            ],
            'integer time shift' => [
                'configuration' => [
                    'event'      => ProcessTrigger::EVENT_UPDATE,
                    'field'      => 'status',
                    'priority'   => ProcessPriority::PRIORITY_HIGH,
                    'queued'     => true,
                    'time_shift' => 12345,
                    'cron' => null
                ],
                'expected' => [
                    'event'      => ProcessTrigger::EVENT_UPDATE,
                    'field'      => 'status',
                    'priority'   => ProcessPriority::PRIORITY_HIGH,
                    'queued'     => true,
                    'time_shift' => 12345,
                    'cron' => null
                ],
            ],
            'date interval time shift' => [
                'configuration' => [
                    'event'      => ProcessTrigger::EVENT_DELETE,
                    'queued'     => true,
                    'time_shift' => new \DateInterval('P1D'),
                ],
                'expected' => [
                    'event'      => ProcessTrigger::EVENT_DELETE,
                    'field'      => null,
                    'priority'   => ProcessPriority::PRIORITY_DEFAULT,
                    'queued'     => true,
                    'time_shift' => 24 * 3600,
                    'cron' => null
                ],
            ],
            'cron expression' => [
                'configuration' => [
                    'cron' => '* * * * *'
                ],
                'expected' => [
                    'event' => null,
                    'field' => null,
                    'priority' => ProcessPriority::PRIORITY_DEFAULT,
                    'queued' => false,
                    'time_shift' => null,
                    'cron' => '* * * * *'
                ]
            ]
        ];
    }

    /**
     * @param array $configuration
     * @param string $exception
     * @param string $message
     * @dataProvider buildProcessTriggerExceptionDataProvider
     */
    public function testBuildProcessTriggerException(array $configuration, $exception, $message)
    {
        $this->expectException($exception);
        $this->expectExceptionMessage($message);
        $this->builder->buildProcessTrigger($configuration, new ProcessDefinition());
    }

    /**
     * @return array
     */
    public function buildProcessTriggerExceptionDataProvider()
    {
        return [
            'not allowed event' => [
                'configuration' => [
                    'event' => 'my_custom_event',
                ],
                'exception' => 'Oro\Component\Action\Exception\InvalidParameterException',
                'message'   => 'Event "my_custom_event" is not allowed'
            ],
            'incorrect time shift' => [
                'configuration' => [
                    'event' => ProcessTrigger::EVENT_CREATE,
                    'time_shift' => 'invalid_value',
                ],
                'exception' => 'Oro\Component\Action\Exception\InvalidParameterException',
                'message'   => 'Time shift parameter must be either integer or DateInterval'
            ],
            'field is not allowed' => [
                'configuration' => [
                    'event' => ProcessTrigger::EVENT_CREATE,
                    'field' => 'someField',
                ],
                'exception' => 'Oro\Component\Action\Exception\InvalidParameterException',
                'message'   => 'Field is only allowed for update event'
            ],
            'invalid cron expression' => [
                'configuration' => [
                    'cron' => 'invalid string'
                ],
                'exception' => 'InvalidArgumentException',
                'message'   => 'invalid string is not a valid CRON expression'
            ],
            'event and cron expression' => [
                'configuration' => [
                    'event' => ProcessTrigger::EVENT_CREATE,
                    'cron' => '* * * * *'
                ],
                'exception' => 'Oro\Component\Action\Exception\InvalidParameterException',
                'message'   => 'Only one parameter "event" or "cron" must be configured.'
            ]
        ];
    }

    /**
     * @param array $configuration
     * @param array $expected
     * @dataProvider buildProcessTriggersDataProvider
     */
    public function testBuildProcessTriggers(array $configuration, array $expected)
    {
        $testDefinition = new ProcessDefinition();
        $testDefinition->setName(self::TEST_DEFINITION_NAME);
        $definitionsByName = [self::TEST_DEFINITION_NAME => $testDefinition];

        $triggers = $this->builder->buildProcessTriggers($configuration, $definitionsByName);

        $expectedTriggers = [];

        $this->assertSameSize($expected, $configuration);
        foreach ($configuration as $definitionName => $configurationData) {
            $this->assertArrayHasKey($definitionName, $expected);
            $expectedData = $expected[$definitionName];
            $this->assertSameSize($expectedData, $configurationData);
            foreach ($expectedData as $expectedDataSet) {
                $expectedTriggers[] = $expectedDataSet;
            }
        }

        $this->assertSameSize($expectedTriggers, $triggers);
        while ($expectedTrigger = array_shift($expectedTriggers)) {
            /** @var ProcessTrigger $trigger */
            $trigger = array_shift($triggers);

            $this->assertInstanceOf('Oro\Bundle\WorkflowBundle\Entity\ProcessTrigger', $trigger);
            $this->assertNotEmpty($trigger->getDefinition());
            $this->assertInstanceOf('Oro\Bundle\WorkflowBundle\Entity\ProcessDefinition', $trigger->getDefinition());
            $definitionName = $trigger->getDefinition()->getName();
            $this->assertArrayHasKey($definitionName, $definitionsByName);
            $this->assertProcessTrigger($expectedTrigger, $definitionsByName[$definitionName], $trigger);
        }
    }

    /**
     * @return array
     */
    public function buildProcessTriggersDataProvider()
    {
        $definitionName = self::TEST_DEFINITION_NAME;
        $basicDataProvider = $this->buildProcessTriggerDataProvider();

        $configuration = [];
        $expected = [];
        foreach ($basicDataProvider as $dataSet) {
            $configuration[$definitionName][] = $dataSet['configuration'];
            $expected[$definitionName][] = $dataSet['expected'];
        }

        return [
            [
                'configuration' => $configuration,
                'expected' => $expected,
            ]
        ];
    }

    /**
     * @expectedException \LogicException
     * @expectedExceptionMessage Process definition "not_existing_definition" not found
     */
    public function testBuildProcessTriggersException()
    {
        $this->builder->buildProcessTriggers(
            ['not_existing_definition' => ['triggers', 'configuration']],
            ['existing_definition' => new ProcessDefinition()]
        );
    }
}

<?php

namespace Oro\Bundle\WorkflowBundle\Model;

use Oro\Bundle\WorkflowBundle\Configuration\FeatureConfigurationExtension;
use Oro\Bundle\WorkflowBundle\Entity\ProcessDefinition;

use Oro\Component\Action\Action\ActionAssembler;
use Oro\Component\Action\Action\ActionInterface;
use Oro\Component\Action\Condition\AbstractCondition;
use Oro\Component\Action\Condition\Configurable as ConfigurableCondition;
use Oro\Component\ConfigExpression\ExpressionFactory as ConditionFactory;

class Process
{
    /**
     * @var ActionAssembler
     */
    protected $actionAssembler;

    /**
     * @var ConditionFactory
     */
    protected $conditionFactory;

    /**
     * @var ProcessDefinition
     */
    protected $processDefinition;

    /**
     * @var ActionInterface
     */
    protected $action;

    /**
     * @var AbstractCondition
     */
    protected $preCondition;

    /**
     * @param ActionAssembler $actionAssembler
     * @param ConditionFactory $conditionFactory
     * @param ProcessDefinition $processDefinition
     */
    public function __construct(
        ActionAssembler $actionAssembler,
        ConditionFactory $conditionFactory,
        ProcessDefinition $processDefinition
    ) {
        $this->actionAssembler = $actionAssembler;
        $this->conditionFactory = $conditionFactory;
        $this->processDefinition = $processDefinition;
    }

    /**
     * @return ActionInterface
     */
    protected function getAction()
    {
        if (!$this->action) {
            $this->action = $this->actionAssembler->assemble($this->processDefinition->getActionsConfiguration());
        }

        return $this->action;
    }

    /**
     * @return bool|AbstractCondition
     */
    protected function getPreCondition()
    {
        if ($this->preCondition === null) {
            $featureResourceDefinition = [
                '@feature_resource_enabled' => [
                    'resource' => $this->processDefinition->getName(),
                    'resource_type' => FeatureConfigurationExtension::PROCESSES_NODE_NAME
                ]
            ];

            $conditionConfiguration = $this->processDefinition->getPreConditionsConfiguration();
            if ($conditionConfiguration) {
                $conditionConfiguration = [
                    '@and' => [
                        $featureResourceDefinition,
                        $conditionConfiguration
                    ]
                ];
            } else {
                $conditionConfiguration = $featureResourceDefinition;
            }

            $this->preCondition = $this->conditionFactory
                ->create(ConfigurableCondition::ALIAS, $conditionConfiguration);
        }

        return $this->preCondition;
    }

    /**
     * @param mixed $context
     */
    public function execute($context)
    {
        if ($this->isApplicable($context)) {
            $this->getAction()->execute($context);
        }
    }

    /**
     * @param mixed $context
     * @return bool
     */
    public function isApplicable($context)
    {
        if ($this->getPreCondition()) {
            return $this->getPreCondition()->evaluate($context);
        }

        return true;
    }
}

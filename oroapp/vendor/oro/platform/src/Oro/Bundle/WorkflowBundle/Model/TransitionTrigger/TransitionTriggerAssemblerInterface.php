<?php

namespace Oro\Bundle\WorkflowBundle\Model\TransitionTrigger;

use Oro\Bundle\WorkflowBundle\Entity\BaseTransitionTrigger;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowDefinition;

interface TransitionTriggerAssemblerInterface
{
    /**
     * @param array $options
     * @return bool
     */
    public function canAssemble(array $options);

    /**
     * @param array $options
     * @param string $transitionName
     * @param WorkflowDefinition $workflowDefinition
     * @return BaseTransitionTrigger
     */
    public function assemble(array $options, $transitionName, WorkflowDefinition $workflowDefinition);
}

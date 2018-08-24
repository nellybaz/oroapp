<?php

namespace Extend\Entity;

abstract class EX_OroNotificationBundle_EmailNotification implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $workflow_transition_name;
    protected $workflow_definition;
    protected $serialized_data;

    public function setWorkflowTransitionName($value)
    {
        $this->workflow_transition_name = $value; return $this;
    }

    public function setWorkflowDefinition($value)
    {
        $this->workflow_definition = $value; return $this;
    }

    public function setSerializedData($value)
    {
        $this->serialized_data = $value; return $this;
    }

    public function getWorkflowTransitionName()
    {
        return $this->workflow_transition_name;
    }

    public function getWorkflowDefinition()
    {
        return $this->workflow_definition;
    }

    public function getSerializedData()
    {
        return $this->serialized_data;
    }

    public function __construct()
    {
    }
}
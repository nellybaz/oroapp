<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Unit\Translation\KeyTemplate;

use Oro\Bundle\WorkflowBundle\Translation\KeyTemplate\StepTemplate;

class StepTemplateTest extends TemplateTestCase
{
    /** {@inheritdoc} */
    public function getTemplateInstance()
    {
        return new StepTemplate();
    }

    public function testGetName()
    {
        $this->assertName(StepTemplate::NAME);
    }

    public function testGetTemplate()
    {
        $this->assertTemplate('oro.workflow.{{ workflow_name }}.step.{{ step_name }}');
    }

    public function testGetRequiredKeys()
    {
        $this->assertRequiredKeys(['workflow_name', 'step_name']);
    }

    public function testGetKeyTemplates()
    {
        $this->assertKeyTemplates([
            'workflow_name' => '{{ workflow_name }}',
            'step_name' => '{{ step_name }}',
        ]);
    }
}

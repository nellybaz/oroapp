<?php

namespace Oro\Bundle\WorkflowBundle\Tests\Functional\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Oro\Bundle\WorkflowBundle\Entity\WorkflowStep;

class LoadWorkflowSteps extends AbstractFixture
{
    const STEP_1 = 'workflow.step.1';
    const STEP_2 = 'workflow.step.2';

    /**
     * @var array
     */
    private static $workflowSteps = [
        self::STEP_1 => [
            'name' => self::STEP_1,
            'label' => self::STEP_1 . '.label',
        ],
        self::STEP_2 => [
            'name' => self::STEP_2,
            'label' => self::STEP_2 . '.label',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        foreach (self::$workflowSteps as $key => $stepDefinition) {
            $step = new WorkflowStep();
            $step->setName($stepDefinition['name']);
            $step->setLabel($stepDefinition['label']);

            $manager->persist($step);
            $this->setReference($key, $step);
        }

        $manager->flush();
    }
}

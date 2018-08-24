<?php

namespace Oro\Bundle\WorkflowBundle\Model;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

class StepManager
{
    const DEFAULT_START_STEP_NAME = 'step:starting_point';

    /**
     * @var Collection|Step[]
     */
    protected $steps;

    /**
     * @var string
     */
    protected $startStepName;

    /**
     * @param Collection|Step[] $steps
     */
    public function __construct($steps = null)
    {
        $this->setSteps($steps);
    }

    /**
     * Get step by name
     *
     * @param string $stepName
     * @return Step
     */
    public function getStep($stepName)
    {
        return $this->steps->get($stepName);
    }

    /**
     * @param Step[]|Collection $steps
     * @return StepManager
     */
    public function setSteps($steps)
    {
        $this->steps = new ArrayCollection();

        if ($steps) {
            foreach ($steps as $step) {
                $this->addStep($step);
            }
        }

        return $this;
    }

    /**
     * @param Step $step
     * @return $this
     */
    private function addStep(Step $step)
    {
        $this->steps->set($step->getName(), $step);

        return $this;
    }

    /**
     * @return Collection|Step[]
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Get steps sorted by order.
     *
     * @param bool $withoutDefaultStartStep
     * @param bool $onlyNames
     * @return Collection|Step[]
     */
    public function getOrderedSteps($withoutDefaultStartStep = false, $onlyNames = false)
    {
        $steps = $this->steps;

        if ($withoutDefaultStartStep) {
            $steps = $steps->filter(
                function (Step $step) {
                    return $step->getName() !== self::DEFAULT_START_STEP_NAME;
                }
            );
        }

        $steps = $steps->toArray();

        usort(
            $steps,
            function (Step $stepOne, Step $stepTwo) {
                return ($stepOne->getOrder() >= $stepTwo->getOrder()) ? 1 : -1;
            }
        );

        if ($onlyNames) {
            $steps = array_map(
                function (Step $step) {
                    return $step->getName();
                },
                $steps
            );
        }

        return new ArrayCollection($steps);
    }

    /**
     * @param string $transitionName
     * @return Collection|Step[]
     */
    public function getRelatedTransitionSteps($transitionName)
    {
        return $this->steps->filter(function (Step $step) use ($transitionName) {
            return in_array($transitionName, $step->getAllowedTransitions(), true);
        });
    }

    /**
     * @param string $startStepName
     * @return StepManager
     */
    public function setStartStepName($startStepName)
    {
        $this->startStepName = $startStepName;

        return $this;
    }

    /**
     * @return Step|null
     */
    public function getStartStep()
    {
        if ($this->startStepName) {
            return $this->getStep($this->startStepName);
        }

        return null;
    }

    /**
     * @return bool
     */
    public function hasStartStep()
    {
        $startStep = $this->getStartStep();

        return !empty($startStep);
    }

    /**
     * @return null|Transition
     */
    public function getDefaultStartStep()
    {
        return $this->getStep(self::DEFAULT_START_STEP_NAME);
    }
}

<?php

namespace Akeneo\Bundle\BatchBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Akeneo\Bundle\BatchBundle\Entity\StepExecution;

/**
 * Event triggered during stepExecution execution
 *
 * @author    Gildas Quemener <gildas.quemener@gmail.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 */
class StepExecutionEvent extends Event implements EventInterface
{
    /** @var StepExecution */
    protected $stepExecution;

    /**
     * @param StepExecution $stepExecution
     */
    public function __construct(StepExecution $stepExecution)
    {
        $this->stepExecution = $stepExecution;
    }

    /**
     * @return StepExecution
     */
    public function getStepExecution()
    {
        return $this->stepExecution;
    }
}

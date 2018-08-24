<?php

namespace Oro\Bundle\WorkflowBundle\Model;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

use Oro\Bundle\ActionBundle\Model\Attribute;
use Oro\Bundle\WorkflowBundle\Exception\UnknownAttributeException;

use Oro\Component\Action\Exception\InvalidParameterException;
use Oro\Component\Action\Model\AbstractAssembler as BaseAbstractAssembler;

class StepAssembler extends BaseAbstractAssembler
{
    /**
     * @var Attribute[]
     */
    protected $attributes;

    /**
     * @var array
     */
    protected $stepEntities = array();

    /**
     * @param array $configuration
     * @param Attribute[]|Collection $attributes
     * @return ArrayCollection
     */
    public function assemble(array $configuration, $attributes)
    {
        $this->setAttributes($attributes);

        $steps = new ArrayCollection();
        foreach ($configuration as $stepName => $options) {
            $step = $this->assembleStep($stepName, $options);
            $steps->set($stepName, $step);
        }

        $this->attributes = array();

        return $steps;
    }

    /**
     * @param string $stepName
     * @param array $options
     * @return Step
     * @throws InvalidParameterException
     * @throws UnknownAttributeException
     */
    protected function assembleStep($stepName, array $options)
    {
        $this->assertOptions($options, array('label'));

        $step = new Step();
        $step->setName($stepName)
            ->setLabel($options['label'])
            ->setOrder($this->getOption($options, 'order', 0))
            ->setFinal($this->getOption($options, 'is_final', false))
            ->setAllowedTransitions($this->getOption($options, 'allowed_transitions', array()))
            ->setEntityAcls($this->getOption($options, 'entity_acl', array()));

        return $step;
    }

    /**
     * @param Attribute[]|Collection $attributes
     * @return array
     */
    protected function setAttributes($attributes)
    {
        $this->attributes = array();
        if ($attributes) {
            foreach ($attributes as $attribute) {
                $this->attributes[$attribute->getName()] = $attribute;
            }
        }
    }
}

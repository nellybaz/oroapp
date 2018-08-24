<?php

namespace Oro\Bundle\DataGridBundle\Extension\Action\Actions;

use Oro\Bundle\DataGridBundle\Exception\LogicException;
use Oro\Bundle\DataGridBundle\Extension\Action\ActionConfiguration;

abstract class AbstractAction implements ActionInterface
{
    /** @var ActionConfiguration */
    protected $options;

    /** @var array */
    protected $requiredOptions = [];

    public function __construct()
    {
        // empty configuration by default
        $this->options = ActionConfiguration::create([]);
    }

    /**
     * {@inheritDoc}
     */
    public function getAclResource()
    {
        return $this->options->offsetGetOr(self::ACL_KEY);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->options->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * {@inheritDoc}
     */
    public function setOptions(ActionConfiguration $options)
    {
        $this->options = $options;
        $this->assertHasRequiredOptions();

        if (empty($options['frontend_type']) && !empty($options['type'])) {
            $options['frontend_type'] = $options['type'];
        }

        return $this;
    }

    /**
     * Assert required options array
     */
    protected function assertHasRequiredOptions()
    {
        foreach ($this->requiredOptions as $optionName) {
            $this->assertHasRequiredOption($optionName);
        }
    }

    /**
     * Assert required single option
     *
     * @param string $optionName
     *
     * @throws LogicException
     */
    protected function assertHasRequiredOption($optionName)
    {
        if (!isset($this->options[$optionName])) {
            throw new LogicException(
                'There is no option "' . $optionName . '" for action "' . $this->getName() . '".'
            );
        }
    }
}

<?php

namespace Oro\Component\Action\Action;

use Oro\Component\ConfigExpression\ExpressionInterface;

class Configurable implements ActionInterface
{
    const ALIAS = 'configurable';

    /**
     * @var ActionAssembler
     */
    protected $assembler;

    /**
     * @var ActionInterface
     */
    protected $action;

    /**
     * @var array
     */
    protected $configuration = [];

    /**
     * @param ActionAssembler $assembler
     */
    public function __construct(ActionAssembler $assembler)
    {
        $this->assembler = $assembler;
    }

    /**
     * {@inheritDoc}
     */
    public function initialize(array $configuration)
    {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function execute($context)
    {
        if (!$this->action) {
            $this->action = $this->assembler->assemble($this->configuration);
        }

        $this->action->execute($context);
    }

    /**
     * Configurable action is always allowed
     *
     * {@inheritDoc}
     */
    public function setCondition(ExpressionInterface $condition)
    {
    }
}

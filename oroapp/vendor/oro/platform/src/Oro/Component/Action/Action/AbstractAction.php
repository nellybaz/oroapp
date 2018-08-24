<?php

namespace Oro\Component\Action\Action;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use Oro\Component\Action\Event\ExecuteActionEvent;
use Oro\Component\Action\Event\ExecuteActionEvents;
use Oro\Component\ConfigExpression\ContextAccessor;
use Oro\Component\ConfigExpression\ExpressionInterface;

abstract class AbstractAction implements ActionInterface, EventDispatcherAwareActionInterface
{
    /**
     * @var ContextAccessor
     */
    protected $contextAccessor;

    /**
     * @var ExpressionInterface
     */
    protected $condition;

    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @param ContextAccessor $contextAccessor
     */
    public function __construct(ContextAccessor $contextAccessor)
    {
        $this->contextAccessor = $contextAccessor;
    }

    /**
     * {@inheritDoc}
     */
    public function setCondition(ExpressionInterface $condition)
    {
        $this->condition = $condition;
    }

    /**
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function setDispatcher(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param mixed $context
     */
    public function execute($context)
    {
        if ($this->isAllowed($context)) {
            // dispatch oro_action.action.handle_before event
            $this->eventDispatcher->dispatch(
                ExecuteActionEvents::HANDLE_BEFORE,
                new ExecuteActionEvent($context, $this)
            );

            $this->executeAction($context);

            // dispatch oro_action.action.handle_after event
            $this->eventDispatcher->dispatch(
                ExecuteActionEvents::HANDLE_AFTER,
                new ExecuteActionEvent($context, $this)
            );
        }
    }

    /**
     * @param mixed $context
     * @return bool
     */
    protected function isAllowed($context)
    {
        if (!$this->condition) {
            return true;
        }

        return $this->condition->evaluate($context) ? true : false;
    }

    /**
     * @param array $options
     * @param string $key
     * @param mixed|null $default
     * @return null
     */
    protected function getOption(array $options, $key, $default = null)
    {
        return array_key_exists($key, $options) ? $options[$key] : $default;
    }

    /**
     * @param mixed $context
     */
    abstract protected function executeAction($context);
}

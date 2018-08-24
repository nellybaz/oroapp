<?php

namespace Oro\Bundle\FilterBundle\Expression\Exception;

use Oro\Bundle\DataGridBundle\Exception\UserInputErrorExceptionInterface;

class ExpressionDenied extends SyntaxException implements UserInputErrorExceptionInterface
{
    /** @var string */
    private $template = 'Variable of type “%s” cannot be used with a constant!';

    /** @var string */
    private $variableLabel;

    /**
     * @param string $variableLabel
     */
    public function __construct($variableLabel)
    {
        $this->variableLabel = $variableLabel;
        $message             = sprintf($this->template, $variableLabel);
        parent::__construct($message);
    }

    /**
     * {@inheritdoc}
     */
    public function getMessageTemplate()
    {
        return $this->template;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessageParams()
    {
        return ['%s' => $this->variableLabel];
    }
}

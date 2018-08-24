<?php

namespace Oro\Component\Layout\ExpressionLanguage;

use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use Symfony\Component\ExpressionLanguage\Node\NameNode;
use Symfony\Component\ExpressionLanguage\Node\Node;
use Symfony\Component\ExpressionLanguage\ParsedExpression;

use Oro\Component\Layout\ContextInterface;
use Oro\Component\Layout\DataAccessorInterface;
use Oro\Component\Layout\ExpressionLanguage\Encoder\ExpressionEncoderRegistry;
use Oro\Component\Layout\Exception\CircularReferenceException;
use Oro\Component\Layout\OptionValueBag;

class ExpressionProcessor
{
    const STRING_IS_REGULAR = 0;
    const STRING_IS_EXPRESSION = 1;
    const STRING_IS_EXPRESSION_STARTED_WITH_BACKSLASH = -1;

    /** @var ExpressionLanguage */
    protected $expressionLanguage;

    /** @var ExpressionEncoderRegistry */
    protected $encoderRegistry;

    /** @var  array */
    protected $values = [];

    /** @var  array */
    protected $processingValues = [];

    /** @var  array */
    protected $processedValues = [];

    /** @var boolean */
    protected $visible = true;

    /**
     * @param ExpressionLanguage        $expressionLanguage
     * @param ExpressionEncoderRegistry $encoderRegistry
     */
    public function __construct(
        ExpressionLanguage $expressionLanguage,
        ExpressionEncoderRegistry $encoderRegistry
    ) {
        $this->expressionLanguage = $expressionLanguage;
        $this->encoderRegistry = $encoderRegistry;
    }

    /**
     * @param array                 $values
     * @param ContextInterface      $context
     * @param DataAccessorInterface $data
     * @param bool                  $evaluate
     * @param string|null           $encoding
     */
    public function processExpressions(
        array &$values,
        ContextInterface $context,
        DataAccessorInterface $data = null,
        $evaluate = true,
        $encoding = null
    ) {
        if (!$evaluate && $encoding === null) {
            return;
        }
        if (isset($values['data']) || isset($values['context'])) {
            throw new \InvalidArgumentException('"data" and "context" should not be used as value keys.');
        }
        $this->values = $values;
        $this->processingValues = [];
        $this->processedValues = [];

        if (array_key_exists('visible', $values)) {
            $this->visible = $values['visible'];
            $this->processRootValue('visible', $this->visible, $context, $data, $evaluate, $encoding);
        }

        foreach ($values as $key => $value) {
            if (!array_key_exists($key, $this->processedValues)) {
                $this->processRootValue($key, $value, $context, $data, $evaluate, $encoding);
            } else {
                $value = $this->processedValues[$key];
            }
            $values[$key] = $value;
        }
    }

    /**
     * @param string                $key
     * @param mixed                 $value
     * @param ContextInterface      $context
     * @param DataAccessorInterface $data
     * @param bool                  $evaluate
     * @param string|null           $encoding
     */
    protected function processRootValue(
        $key,
        &$value,
        ContextInterface $context,
        DataAccessorInterface $data = null,
        $evaluate = true,
        $encoding = null
    ) {
        $this->processingValues[$key] = $key;
        $this->processValue($value, $context, $data, $evaluate, $encoding);
        $this->processedValues[$key] = $value;
        unset($this->processingValues[$key]);
    }

    /**
     * @param mixed                 $value
     * @param ContextInterface      $context
     * @param DataAccessorInterface $data
     * @param bool                  $evaluate
     * @param string|null           $encoding
     */
    protected function processValue(
        &$value,
        ContextInterface $context,
        DataAccessorInterface $data = null,
        $evaluate = true,
        $encoding = null
    ) {
        if (is_string($value) && !empty($value)) {
            $this->processStringValue($value, $context, $data, $evaluate, $encoding);
        } elseif (is_array($value)) {
            foreach ($value as $key => &$item) {
                $this->processValue($item, $context, $data, $evaluate, $encoding);
                $value[$key] = $item;
            }
            unset($item);
        } elseif ($value instanceof OptionValueBag) {
            foreach ($value->all() as $action) {
                $args = $action->getArguments();
                foreach ($args as $index => $arg) {
                    $this->processValue($arg, $context, $data, $evaluate, $encoding);
                    $action->setArgument($index, $arg);
                }
            }
        } elseif ($value instanceof ParsedExpression) {
            $value = $this->processExpression($value, $context, $data, $evaluate, $encoding);
        }
    }

    /**
     * @param mixed                 $value
     * @param ContextInterface      $context
     * @param DataAccessorInterface $data
     * @param bool                  $evaluate
     * @param null                  $encoding
     */
    protected function processStringValue(
        &$value,
        ContextInterface $context,
        DataAccessorInterface $data = null,
        $evaluate = true,
        $encoding = null
    ) {
        switch ($this->checkStringValue($value)) {
            case self::STRING_IS_REGULAR:
                break;
            case self::STRING_IS_EXPRESSION:
                $expr = $this->parseExpression($value);
                $value = $this->processExpression($expr, $context, $data, $evaluate, $encoding);
                break;
            case self::STRING_IS_EXPRESSION_STARTED_WITH_BACKSLASH:
                // the backslash (\) at the begin of the array key should be removed
                $value = substr($value, 1);
                break;
        }
    }

    /**
     * @param ParsedExpression      $expr
     * @param ContextInterface      $context
     * @param DataAccessorInterface $data
     * @param bool                  $evaluate
     * @param string                $encoding
     * @return mixed|string|ParsedExpression
     * @throws CircularReferenceException
     */
    protected function processExpression(
        ParsedExpression $expr,
        ContextInterface $context,
        DataAccessorInterface $data = null,
        $evaluate = true,
        $encoding = null
    ) {
        if (!$this->visible) {
            return null;
        }

        $node = $expr->getNodes();
        $deps = $this->getNotProcessedDependencies($node);

        if ($data === null && $this->nodeWorkWithData($node)) {
            return $expr;
        }

        foreach ($deps as $key => $dep) {
            if (in_array($key, $this->processingValues, true) && !in_array($key, $this->processedValues)) {
                $path = implode(' > ', array_merge($this->processingValues, [$key]));
                throw new CircularReferenceException(
                    sprintf('Circular reference "%s" on expression "%s".', $path, (string)$expr)
                );
            }
            $this->processRootValue($key, $dep, $context, $data, $evaluate, $encoding);
        }
        $values = array_merge(['context' => $context, 'data' => $data], $this->values, $this->processedValues);

        return $evaluate
            ? $this->expressionLanguage->evaluate($expr, $values)
            : $this->encoderRegistry->get($encoding)->encodeExpr($expr);
    }

    /**
     * @param string $value
     *
     * @return int the checking result
     *             0  - the value is regular string
     *             1  - the value is an expression
     *             -1 - the value is string that starts with "\="
     *                  which should be replaces with "="
     */
    protected function checkStringValue($value)
    {
        if (is_string($value)) {
            $pos = strpos($value, '=');
            if ($pos === 0) {
                // expression
                return self::STRING_IS_EXPRESSION;
            } elseif ($pos === 1 && $value[0] === '\\') {
                // the backslash (\) at the begin of the array key should be removed
                return self::STRING_IS_EXPRESSION_STARTED_WITH_BACKSLASH;
            }
        }

        // regular string
        return self::STRING_IS_REGULAR;
    }

    /**
     * @param Node $node
     * @return array
     */
    protected function getNotProcessedDependencies(Node $node)
    {
        $deps = [];
        if ($node instanceof NameNode) {
            $name = $node->attributes['name'];
            if (array_key_exists($name, $this->values) &&
                !array_key_exists($name, $this->processedValues)
            ) {
                $deps[$name] = $this->values[$name];
            }
        }
        foreach ($node->nodes as $childNode) {
            $deps = array_merge($deps, $this->getNotProcessedDependencies($childNode));
        }

        return $deps;
    }

    /**
     * @param $value
     * @return ParsedExpression
     */
    protected function parseExpression($value)
    {
        $names = array_merge(['context', 'data'], array_keys($this->values));

        return $this->expressionLanguage->parse(substr($value, 1), $names);
    }

    /**
     * @param Node $node
     * @return boolean
     */
    protected function nodeWorkWithData(Node $node)
    {
        $hasData = false;
        if ($node instanceof NameNode) {
            if ($node->attributes['name'] === 'data') {
                return true;
            }
        }
        foreach ($node->nodes as $childNode) {
            $hasData = $this->nodeWorkWithData($childNode) || $hasData;
        }

        return $hasData;
    }
}

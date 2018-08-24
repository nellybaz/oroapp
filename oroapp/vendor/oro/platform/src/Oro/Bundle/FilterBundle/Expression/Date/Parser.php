<?php

namespace Oro\Bundle\FilterBundle\Expression\Date;

use Oro\Bundle\FilterBundle\Expression\Exception\SyntaxException;
use Oro\Bundle\LocaleBundle\Model\LocaleSettings;

class Parser
{
    /** @var LocaleSettings */
    protected $localeSettings;

    /**
     * @param LocaleSettings $localeSettings
     */
    public function __construct(LocaleSettings $localeSettings)
    {
        $this->localeSettings = $localeSettings;
    }

    /**
     * @param array $tokens
     * @param bool $returnRawToken
     * @return mixed
     */
    public function parse($tokens, $returnRawToken = false)
    {
        $this->validate($tokens);
        $RPNTokens = $this->convertExprToRPN($tokens);

        $stack = [];
        foreach ($RPNTokens as $token) {
            if ($token instanceof Token && $token->is(Token::TYPE_OPERATOR)) {
                $a = array_shift($stack);
                $b = array_shift($stack);

                $method = $token->getValue() === '-' ? 'subtract' : 'add';
                $result = $a->{$method}($b);
                array_push($stack, $result);
            } else {
                $stack[] = new ExpressionResult($token, $this->localeSettings->getTimeZone());
            }
        }

        /** @var ExpressionResult $result */
        $result = array_pop($stack);
        if (count($stack) > 0) {
            foreach ($stack as $stackedResult) {
                $result->merge($stackedResult);
            }
        }

        if ($returnRawToken || $result === null) {
            return $result;
        }

        return $result->getValue();
    }

    /**
     * Convert token stream to reverse polish notation
     *
     * @param Token[] $tokens
     *
     * @return Token[]
     * @throws \LogicException
     */
    protected function convertExprToRPN($tokens)
    {
        $result = $stack = [];

        foreach ($tokens as $token) {
            if ($token->is(Token::TYPE_PUNCTUATION, '(')) {
                $stack[] = $token;
            } elseif ($token->is(Token::TYPE_PUNCTUATION, ')')) {
                $stackItem = array_pop($stack);
                while ($stackItem !== null && $stackItem->getValue() !== '(') {
                    $result [] = $stackItem;
                    $stackItem = array_pop($stack);
                }
                if (null === $stackItem) {
                    throw new \LogicException('The open parenthesis is missing.');
                }
            } else {
                if ($token->is(Token::TYPE_OPERATOR)) {
                    $stackItem = array_pop($stack);
                    while ($stackItem !== null) {
                        if ($stackItem->is(Token::TYPE_PUNCTUATION, '(')) {
                            $stack[] = $stackItem;
                            break;
                        } else {
                            $result [] = $stackItem;
                            $stackItem = array_pop($stack);
                        }
                    }
                }
                $stack[] = $token;
            }
        }

        $stackItem = array_pop($stack);
        while (null !== $stackItem) {
            if ($stackItem->is(Token::TYPE_PUNCTUATION, '(')) {
                throw new \LogicException('The close parenthesis is missing.');
            }
            $result [] = $stackItem;
            $stackItem = array_pop($stack);
        }

        return $result;
    }

    /**
     * Validates token stream
     *
     * @param array $tokens
     *
     * @throws SyntaxException
     */
    protected function validate(array $tokens)
    {
        $variables = array_filter(
            $tokens,
            function (Token $token) {
                return $token->is(Token::TYPE_VARIABLE);
            }
        );

        if (count($variables) > 1) {
            throw new SyntaxException('Only one variable allowed in expression');
        }
    }
}

<?php

namespace Oro\Bundle\ApiBundle\Processor\Shared;

use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;

use Oro\Component\ChainProcessor\ContextInterface;
use Oro\Component\ChainProcessor\ProcessorInterface;
use Oro\Component\DoctrineUtils\ORM\QueryHintResolverInterface;
use Oro\Component\DoctrineUtils\ORM\QueryUtil;
use Oro\Component\DoctrineUtils\ORM\SqlQuery;
use Oro\Component\DoctrineUtils\ORM\SqlQueryBuilder;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Processor\Context;
use Oro\Bundle\ApiBundle\Processor\ListContext;
use Oro\Bundle\BatchBundle\ORM\Query\QueryCountCalculator;
use Oro\Bundle\BatchBundle\ORM\QueryBuilder\CountQueryBuilderOptimizer;

/**
 * Calculates the total number of records and sets it
 * to "X-Include-Total-Count" response header,
 * in case if it was requested by "X-Include: totalCount" request header.
 */
class SetTotalCountHeader implements ProcessorInterface
{
    const RESPONSE_HEADER_NAME = 'X-Include-Total-Count';
    const REQUEST_HEADER_VALUE = 'totalCount';

    /** @var CountQueryBuilderOptimizer */
    protected $countQueryBuilderOptimizer;

    /** @var QueryHintResolverInterface */
    protected $queryHintResolver;

    /**
     * @param CountQueryBuilderOptimizer $countQueryOptimizer
     * @param QueryHintResolverInterface $queryHintResolver
     */
    public function __construct(
        CountQueryBuilderOptimizer $countQueryOptimizer,
        QueryHintResolverInterface $queryHintResolver
    ) {
        $this->countQueryBuilderOptimizer = $countQueryOptimizer;
        $this->queryHintResolver = $queryHintResolver;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContextInterface $context)
    {
        /** @var ListContext $context */

        if ($context->getResponseHeaders()->has(self::RESPONSE_HEADER_NAME)) {
            // total count header is already set
            return;
        }

        $xInclude = $context->getRequestHeaders()->get(Context::INCLUDE_HEADER);
        if (empty($xInclude) || !in_array(self::REQUEST_HEADER_VALUE, $xInclude, true)) {
            // total count is not requested
            return;
        }

        $totalCount = null;

        $totalCountCallback = $context->getTotalCountCallback();
        if (null !== $totalCountCallback) {
            $totalCount = $this->executeTotalCountCallback($totalCountCallback);
        }

        $query = $context->getQuery();
        if (null !== $query && null === $totalCount) {
            $totalCount = $this->calculateTotalCount($query, $context->getConfig());
        }

        if (null !== $totalCount) {
            $context->getResponseHeaders()->set(self::RESPONSE_HEADER_NAME, $totalCount);
        }
    }

    /**
     * @param callable $callback
     *
     * @return int
     */
    protected function executeTotalCountCallback($callback)
    {
        if (!is_callable($callback)) {
            throw new \RuntimeException(
                sprintf(
                    'Expected callable for "totalCount", "%s" given.',
                    is_object($callback) ? get_class($callback) : gettype($callback)
                )
            );
        }

        $totalCount = call_user_func($callback);
        if (!is_int($totalCount)) {
            throw new \RuntimeException(
                sprintf(
                    'Expected integer as result of "totalCount" callback, "%s" given.',
                    is_object($totalCount) ? get_class($totalCount) : gettype($totalCount)
                )
            );
        }

        return $totalCount;
    }

    /**
     * @param mixed                       $query
     * @param EntityDefinitionConfig|null $config
     *
     * @return int
     */
    protected function calculateTotalCount($query, EntityDefinitionConfig $config = null)
    {
        if ($query instanceof QueryBuilder) {
            $countQuery = $this->countQueryBuilderOptimizer
                ->getCountQueryBuilder($query)
                ->getQuery();
            $this->resolveQueryHints($countQuery, $config);
        } elseif ($query instanceof Query) {
            $countQuery = $this->cloneQuery($query)
                ->setMaxResults(null)
                ->setFirstResult(null);
            $this->resolveQueryHints($countQuery, $config);
        } elseif ($query instanceof SqlQueryBuilder) {
            $countQuery = $this->cloneQuery($query)
                ->setMaxResults(null)
                ->setFirstResult(null)
                ->getQuery();
        } elseif ($query instanceof SqlQuery) {
            $countQuery = $this->cloneQuery($query)
                ->getQueryBuilder()
                ->setMaxResults(null)
                ->setFirstResult(null);
        } else {
            throw new \RuntimeException(
                sprintf(
                    'Expected instance of Doctrine\ORM\QueryBuilder, Doctrine\ORM\Query'
                    . ', Oro\Bundle\EntityBundle\ORM\SqlQueryBuilder'
                    . ' or Oro\Bundle\EntityBundle\ORM\SqlQuery, "%s" given.',
                    is_object($query) ? get_class($query) : gettype($query)
                )
            );
        }

        return QueryCountCalculator::calculateCount($countQuery);
    }

    /**
     * @param Query                       $query
     * @param EntityDefinitionConfig|null $config
     */
    protected function resolveQueryHints(Query $query, EntityDefinitionConfig $config = null)
    {
        $hints = [];
        if (null !== $config) {
            $hints = $config->getHints();
        }
        $this->queryHintResolver->resolveHints($query, $hints);
    }

    /**
     * Makes full clone of the given query, including its parameters and hints
     *
     * @param object $query
     *
     * @return object
     */
    protected function cloneQuery($query)
    {
        if ($query instanceof Query) {
            return QueryUtil::cloneQuery($query);
        }

        return clone $query;
    }
}

<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Shared;

use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;

use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Component\DoctrineUtils\ORM\QueryHintResolverInterface;
use Oro\Bundle\ApiBundle\Processor\Shared\SetTotalCountHeader;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\GetList\GetListProcessorOrmRelatedTestCase;
use Oro\Bundle\BatchBundle\ORM\QueryBuilder\CountQueryBuilderOptimizer;

class SetTotalCountHeaderTest extends GetListProcessorOrmRelatedTestCase
{
    const REQUEST_INCLUDE_HEADER_NAME      = 'X-Include';
    const REQUEST_TOTAL_COUNT_HEADER_VALUE = 'totalCount';
    const RESPONSE_TOTAL_COUNT_HEADER_NAME = 'X-Include-Total-Count';

    /** @var \PHPUnit_Framework_MockObject_MockObject|CountQueryBuilderOptimizer */
    protected $countQueryBuilderOptimizer;

    /** @var \PHPUnit_Framework_MockObject_MockObject|QueryHintResolverInterface */
    protected $queryHintResolver;

    /** @var SetTotalCountHeader */
    protected $processor;

    protected function setUp()
    {
        parent::setUp();

        $this->countQueryBuilderOptimizer = $this->createMock(CountQueryBuilderOptimizer::class);
        $this->queryHintResolver = $this->createMock(QueryHintResolverInterface::class);

        $this->processor = new SetTotalCountHeader($this->countQueryBuilderOptimizer, $this->queryHintResolver);
    }

    public function testProcessWithoutRequestHeader()
    {
        $this->processor->process($this->context);

        $this->assertFalse($this->context->getResponseHeaders()->has(self::RESPONSE_TOTAL_COUNT_HEADER_NAME));
    }

    public function testProcessOnExistingHeader()
    {
        $testCount = 135;

        $this->context->getResponseHeaders()->set(self::RESPONSE_TOTAL_COUNT_HEADER_NAME, $testCount);
        $this->processor->process($this->context);

        $this->assertEquals(
            $testCount,
            $this->context->getResponseHeaders()->get(self::RESPONSE_TOTAL_COUNT_HEADER_NAME)
        );
    }

    public function testProcessWithTotalCallback()
    {
        $testCount = 135;

        $this->context->setTotalCountCallback(
            function () use ($testCount) {
                return $testCount;
            }
        );
        $this->context->getRequestHeaders()->set(
            self::REQUEST_INCLUDE_HEADER_NAME,
            [self::REQUEST_TOTAL_COUNT_HEADER_VALUE]
        );
        $this->processor->process($this->context);

        $this->assertEquals(
            $testCount,
            $this->context->getResponseHeaders()->get(self::RESPONSE_TOTAL_COUNT_HEADER_NAME)
        );
    }

    public function testProcessWithWrongTotalCallback()
    {
        $this->expectException('\RuntimeException');
        $this->expectExceptionMessage('Expected callable for "totalCount", "stdClass" given.');

        $this->context->setTotalCountCallback(new \stdClass());
        $this->context->getRequestHeaders()->set(
            self::REQUEST_INCLUDE_HEADER_NAME,
            [self::REQUEST_TOTAL_COUNT_HEADER_VALUE]
        );
        $this->processor->process($this->context);
    }

    public function testProcessWithWrongTotalCallbackResult()
    {
        $this->expectException('\RuntimeException');
        $this->expectExceptionMessage('Expected integer as result of "totalCount" callback, "string" given.');

        $this->context->setTotalCountCallback(
            function () {
                return 'non integer value';
            }
        );
        $this->context->getRequestHeaders()->set(
            self::REQUEST_INCLUDE_HEADER_NAME,
            [self::REQUEST_TOTAL_COUNT_HEADER_VALUE]
        );
        $this->processor->process($this->context);
    }

    public function testProcessQueryBuilder()
    {
        $entityClass = 'Oro\Bundle\ApiBundle\Tests\Unit\Fixtures\Entity\Group';
        $hints = ['test_hint'];
        $config = new EntityDefinitionConfig();
        $config->setHints($hints);

        $query = $this->doctrineHelper->getEntityRepositoryForClass($entityClass)->createQueryBuilder('e');

        $this->countQueryBuilderOptimizer->expects($this->once())
            ->method('getCountQueryBuilder')
            ->willReturnCallback(
                function (QueryBuilder $qb) {
                    $qb->setMaxResults(10);

                    return $qb;
                }
            );
        $this->queryHintResolver->expects($this->once())
            ->method('resolveHints')
            ->with(self::isInstanceOf(Query::class), $hints);

        $this->context->getRequestHeaders()->set(
            self::REQUEST_INCLUDE_HEADER_NAME,
            [self::REQUEST_TOTAL_COUNT_HEADER_VALUE]
        );
        $this->context->setQuery($query);
        $this->context->setConfig($config);
        $this->processor->process($this->context);

        // mocked fetchColumn method in StatementMock returns null value (0 records in db)
        $this->assertEquals(
            0,
            $this->context->getResponseHeaders()->get(self::RESPONSE_TOTAL_COUNT_HEADER_NAME)
        );
    }

    public function testProcessQuery()
    {
        $entityClass = 'Oro\Bundle\ApiBundle\Tests\Unit\Fixtures\Entity\Group';
        $hints = ['test_hint'];
        $config = new EntityDefinitionConfig();
        $config->setHints($hints);

        $query = $this->doctrineHelper->getEntityRepositoryForClass($entityClass)->createQueryBuilder('e');

        $this->queryHintResolver->expects($this->once())
            ->method('resolveHints')
            ->with(self::isInstanceOf(Query::class), $hints);

        $this->context->getRequestHeaders()->set(
            self::REQUEST_INCLUDE_HEADER_NAME,
            [self::REQUEST_TOTAL_COUNT_HEADER_VALUE]
        );
        $this->context->setQuery($query->getQuery());
        $this->context->setConfig($config);
        $this->processor->process($this->context);

        // mocked fetchColumn method in StatementMock returns null value (0 records in db)
        $this->assertEquals(
            0,
            $this->context->getResponseHeaders()->get(self::RESPONSE_TOTAL_COUNT_HEADER_NAME)
        );
    }

    public function testProcessOnWrongQuery()
    {
        $this->expectException('\RuntimeException');
        $this->expectExceptionMessage(
            'Expected instance of Doctrine\ORM\QueryBuilder, Doctrine\ORM\Query, '
            . 'Oro\Bundle\EntityBundle\ORM\SqlQueryBuilder or Oro\Bundle\EntityBundle\ORM\SqlQuery, '
            . '"stdClass" given.'
        );

        $config = new EntityDefinitionConfig();
        $config->setHints(['test_hint']);

        $this->context->getRequestHeaders()->set(
            self::REQUEST_INCLUDE_HEADER_NAME,
            [self::REQUEST_TOTAL_COUNT_HEADER_VALUE]
        );
        $this->context->setQuery(new \stdClass());
        $this->context->setConfig($config);
        $this->processor->process($this->context);
    }
}

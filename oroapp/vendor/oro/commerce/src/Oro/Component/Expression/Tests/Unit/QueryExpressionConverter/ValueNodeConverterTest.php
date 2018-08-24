<?php

namespace Oro\Component\Expression\Tests\Unit\QueryExpressionConverter;

use Doctrine\ORM\Query\Expr;
use Oro\Component\Expression\Node\NodeInterface;
use Oro\Component\Expression\QueryExpressionConverter\QueryExpressionConverterInterface;
use Oro\Component\Expression\QueryExpressionConverter\ValueNodeConverter;
use Oro\Component\Expression\Node\ValueNode;

class ValueNodeConverterTest extends \PHPUnit_Framework_TestCase
{
    public function testConvertUnsupported()
    {
        $expr = new Expr();
        $params = [];

        $node = $this->createMock(NodeInterface::class);
        $converter = new ValueNodeConverter();
        $this->assertNull($converter->convert($node, $expr, $params));
    }

    /**
     * @dataProvider valuesDataProvider
     * @param mixed $value
     * @param string|int $expected
     * @param array $expectedParameters
     * @param array $params
     */
    public function testConvert($value, $expected, array $expectedParameters, array $params)
    {
        $expr = new Expr();

        $node = new ValueNode($value);
        $converter = new ValueNodeConverter();
        $this->assertEquals($expected, $converter->convert($node, $expr, $params));
        $this->assertEquals($expectedParameters, $params);
    }

    /**
     * @return array
     */
    public function valuesDataProvider()
    {
        return [
            'scalar value' => [
                'test',
                ':_vn0',
                ['_vn0' => 'test'],
                []
            ],
            'numeric value' => [
                42,
                42,
                [],
                []
            ],
            'scalar value force parametrization' => [
                42,
                ':_vn0',
                [
                    QueryExpressionConverterInterface::REQUIRE_PARAMETRIZATION => true,
                    '_vn0' => 42
                ],
                [QueryExpressionConverterInterface::REQUIRE_PARAMETRIZATION => true]
            ],
            'array value' => [
                [1, 3, 5],
                ':_vn0',
                ['_vn0' => [1, 3, 5]],
                []
            ]
        ];
    }
}

<?php

namespace Oro\Bundle\MarketingActivityBundle\Tests\Unit\QueryDesigner;

use Oro\Bundle\MarketingActivityBundle\QueryDesigner\AbstractTypeCountFunction;
use Oro\Bundle\QueryDesignerBundle\QueryDesigner\AbstractQueryConverter;

abstract class AbstractTypeCountFunctionTestCase extends \PHPUnit_Framework_TestCase
{
    /** @var AbstractTypeCountFunction */
    protected $function;

    /** @var  string */
    protected $type;

    public function testGetExpression()
    {
        $qc = $this->getMockBuilder(AbstractQueryConverter::class)->disableOriginalConstructor()->getMock();
        $expression = $this->function->getExpression('alias', 'fieldName', 'type_enum.id', 'columnAlias', $qc);
        $expected = sprintf(
            "SUM(CASE WHEN type_enum.id = '%s' THEN 1 ELSE 0 END)",
            $this->type
        );
        $this->assertEquals($expected, $expression);
    }
}

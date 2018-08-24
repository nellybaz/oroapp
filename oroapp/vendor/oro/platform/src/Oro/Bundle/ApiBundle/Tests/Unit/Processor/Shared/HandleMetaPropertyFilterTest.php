<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Shared;

use Oro\Bundle\ApiBundle\Config\MetaPropertiesConfigExtra;
use Oro\Bundle\ApiBundle\Filter\FilterValue;
use Oro\Bundle\ApiBundle\Processor\Shared\AddMetaPropertyFilter;
use Oro\Bundle\ApiBundle\Processor\Shared\HandleMetaPropertyFilter;
use Oro\Bundle\ApiBundle\Request\DataType;
use Oro\Bundle\ApiBundle\Request\ValueNormalizer;
use Oro\Bundle\ApiBundle\Tests\Unit\Filter\TestFilterValueAccessor;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\Get\GetProcessorTestCase;

class HandleMetaPropertyFilterTest extends GetProcessorTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $valueNormalizer;

    /** @var HandleMetaPropertyFilter */
    protected $processor;

    protected function setUp()
    {
        parent::setUp();

        $this->valueNormalizer = $this->getMockBuilder(ValueNormalizer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->processor = new HandleMetaPropertyFilter($this->valueNormalizer);
    }

    public function testProcessWhenNoMetaFilterValue()
    {
        $this->processor->process($this->context);

        self::assertFalse($this->context->hasConfigExtra(MetaPropertiesConfigExtra::NAME));
    }

    public function testProcessForEmptyMetaFilterValue()
    {
        $filterValue = new FilterValue('meta', '');

        $this->valueNormalizer->expects(self::once())
            ->method('normalizeValue')
            ->with('', DataType::STRING, $this->context->getRequestType(), true)
            ->willReturn(null);

        $this->context->setFilterValues(new TestFilterValueAccessor());
        $this->context->getFilterValues()->set(AddMetaPropertyFilter::FILTER_KEY, $filterValue);
        $this->processor->process($this->context);

        self::assertFalse($this->context->hasConfigExtra(MetaPropertiesConfigExtra::NAME));
    }

    public function testProcessWhenMetaFilterValueExists()
    {
        $filterValue = new FilterValue('meta', 'test1,test2');

        $this->valueNormalizer->expects(self::once())
            ->method('normalizeValue')
            ->with('test1,test2', DataType::STRING, $this->context->getRequestType(), true)
            ->willReturn(['test1', 'test2']);

        $this->context->setFilterValues(new TestFilterValueAccessor());
        $this->context->getFilterValues()->set(AddMetaPropertyFilter::FILTER_KEY, $filterValue);
        $this->processor->process($this->context);

        $expectedConfigExtra = new MetaPropertiesConfigExtra();
        $expectedConfigExtra->addMetaProperty('test1');
        $expectedConfigExtra->addMetaProperty('test2');

        self::assertEquals(
            $expectedConfigExtra,
            $this->context->getConfigExtra(MetaPropertiesConfigExtra::NAME)
        );
    }
}

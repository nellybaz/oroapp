<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Shared;

use Oro\Bundle\ApiBundle\Processor\Shared\ValidateResultExists;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\Get\GetProcessorTestCase;

class ValidateResultExistsTest extends GetProcessorTestCase
{
    /** @var ValidateResultExists */
    protected $processor;

    protected function setUp()
    {
        parent::setUp();

        $this->processor = new ValidateResultExists();
    }

    public function testProcessWhenResultExists()
    {
        $this->context->setResult([]);
        $this->processor->process($this->context);
    }

    /**
     * @expectedException \Oro\Bundle\ApiBundle\Exception\RuntimeException
     * @expectedExceptionMessage The result does not exist.
     */
    public function testProcessWhenResultDoesNotExist()
    {
        $this->processor->process($this->context);
    }
}

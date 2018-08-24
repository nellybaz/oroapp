<?php

namespace Oro\Bundle\OrderBundle\Tests\Unit\Validator\Constraints;

use Oro\Bundle\OrderBundle\Validator\Constraints\DiscountsValidator;
use Oro\Bundle\OrderBundle\Validator\Constraints\Discounts;

class DiscountsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Discounts
     */
    protected $constraint;

    protected function setUp()
    {
        $this->constraint = new Discounts();
    }

    public function testGetTargets()
    {
        $this->assertEquals(['class', 'property'], $this->constraint->getTargets());
    }

    public function testValidatedBy()
    {
        $this->assertEquals(DiscountsValidator::class, $this->constraint->validatedBy());
    }
}

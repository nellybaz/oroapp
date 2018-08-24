<?php

namespace Oro\Bundle\EntityExtendBundle\Tests\Unit\Validator\Constraints;

use Oro\Bundle\EntityExtendBundle\Validator\Constraints\NotPhpKeyword;
use Oro\Bundle\EntityExtendBundle\Validator\Constraints\NotPhpKeywordValidator;

class NotPhpKeywordValidatorTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $context;

    /** @var NotPhpKeywordValidator */
    protected $validator;

    protected function setUp()
    {
        $this->context = $this->createMock('Symfony\Component\Validator\ExecutionContextInterface');

        $this->validator = new NotPhpKeywordValidator();
        $this->validator->initialize($this->context);
    }

    /**
     * @dataProvider validateDataProvider
     */
    public function testValidate($value, $violation)
    {
        $constraint = new NotPhpKeyword();

        if ($violation) {
            $this->context->expects($this->once())
                ->method('addViolation')
                ->with($constraint->message);
        } else {
            $this->context->expects($this->never())
                ->method('addViolation');
        }

        $this->validator->validate($value, $constraint);
    }

    public function validateDataProvider()
    {
        return [
            ['', false],
            ['test', false],
            ['class', true],
            ['CLASS', true],
        ];
    }
}

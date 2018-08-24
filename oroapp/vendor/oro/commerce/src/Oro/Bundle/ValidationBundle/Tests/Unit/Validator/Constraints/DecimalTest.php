<?php

namespace Oro\Bundle\ValidationBundle\Tests\Unit\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

use Oro\Bundle\ValidationBundle\Validator\Constraints\Decimal;
use Oro\Bundle\ValidationBundle\Validator\Constraints\DecimalValidator;

class DecimalTest extends \PHPUnit_Framework_TestCase
{
    /** @var Decimal */
    protected $constraint;

    /** @var \PHPUnit_Framework_MockObject_MockObject|\Symfony\Component\Validator\ExecutionContextInterface */
    protected $context;

    /** @var DecimalValidator */
    protected $validator;

    /** @var string */
    protected $locale;

    protected function setUp()
    {
        $this->constraint = new Decimal();
        $this->context = $this->createMock('Symfony\Component\Validator\ExecutionContextInterface');
        $this->validator = new DecimalValidator();
        $this->validator->initialize($this->context);

        $this->locale = \Locale::getDefault();
        \Locale::setDefault('en');
    }

    protected function tearDown()
    {
        \Locale::setDefault($this->locale);

        unset($this->constraint, $this->context, $this->validator, $this->locale);
    }

    public function testConfiguration()
    {
        $this->assertEquals(
            'Oro\Bundle\ValidationBundle\Validator\Constraints\DecimalValidator',
            $this->constraint->validatedBy()
        );
        $this->assertEquals(Constraint::PROPERTY_CONSTRAINT, $this->constraint->getTargets());
    }

    public function testGetAlias()
    {
        $this->assertEquals('decimal', $this->constraint->getAlias());
    }

    /**
     * @dataProvider validateDataProvider
     * @param mixed $data
     * @param boolean $correct
     */
    public function testValidate($data, $correct)
    {
        if (!$correct) {
            $this->context->expects($this->once())
                ->method('addViolation')
                ->with($this->constraint->message);
        } else {
            $this->context->expects($this->never())
                ->method('addViolation');
        }

        $this->validator->validate($data, $this->constraint);
    }

    public function validateDataProvider()
    {
        return [
            'int' => [
                'data' => 10,
                'correct' => true
            ],
            'float' => [
                'data' => 10.45650,
                'correct' => true
            ],
            'string float' => [
                'data' => '10.4565',
                'correct' => true
            ],
            'string float with grouping' => [
                'data' => '12,210.4565',
                'correct' => true
            ],
            'null' => [
                'data' => null,
                'correct' => true
            ],
            'string with float' => [
                'data' => '10.45650 string',
                'correct' => false
            ],
        ];
    }

    /**
     * @expectedException \Symfony\Component\Validator\Exception\UnexpectedTypeException
     */
    public function testNotScalar()
    {
        $this->validator->validate(new \stdClass(), $this->constraint);
    }
}

<?php

namespace Oro\Bundle\ValidationBundle\Tests\Unit\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

use Oro\Bundle\ValidationBundle\Validator\Constraints\Integer;
use Oro\Bundle\ValidationBundle\Validator\Constraints\IntegerValidator;

class IntegerTest extends \PHPUnit_Framework_TestCase
{
    /** @var Integer */
    protected $constraint;

    /** @var \PHPUnit_Framework_MockObject_MockObject|\Symfony\Component\Validator\ExecutionContextInterface */
    protected $context;

    /** @var IntegerValidator */
    protected $validator;

    /** @var string */
    protected $locale;

    protected function setUp()
    {
        $this->constraint = new Integer();
        $this->context = $this->createMock('Symfony\Component\Validator\ExecutionContextInterface');
        $this->validator = new IntegerValidator();
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
            'Oro\Bundle\ValidationBundle\Validator\Constraints\IntegerValidator',
            $this->constraint->validatedBy()
        );
        $this->assertEquals(Constraint::PROPERTY_CONSTRAINT, $this->constraint->getTargets());
    }

    public function testGetAlias()
    {
        $this->assertEquals('integer', $this->constraint->getAlias());
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
            'int number' => [
                'data' => 10,
                'correct' => true
            ],
            'string with int' => [
                'data' => '10',
                'correct' => true
            ],
            'int with separator' => [
                'data' => '10,000',
                'correct' => true
            ],
            'int with precision ' => [
                'data' => 10.00,
                'correct' => true
            ],
            'float number' => [
                'data' => 10.50,
                'correct' => false
            ],
            'string' => [
                'data' => 'ten',
                'correct' =>false
            ],
            'null' => [
                'data' => null,
                'correct' => true
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

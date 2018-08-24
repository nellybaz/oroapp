<?php

namespace Oro\Bundle\ValidationBundle\Tests\Unit\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\UrlValidator;

use Oro\Bundle\ValidationBundle\Validator\Constraints\Url;

class UrlTest extends \PHPUnit_Framework_TestCase
{
    /** @var Url */
    protected $constraint;

    /** @var \PHPUnit_Framework_MockObject_MockObject|\Symfony\Component\Validator\ExecutionContextInterface */
    protected $context;

    /** @var UrlValidator */
    protected $validator;

    protected function setUp()
    {
        $this->constraint = new Url();
        $this->context = $this->createMock('Symfony\Component\Validator\ExecutionContextInterface');
        $this->validator = new UrlValidator();
        $this->validator->initialize($this->context);
    }

    public function testConfiguration()
    {
        $this->assertEquals(
            'Symfony\Component\Validator\Constraints\UrlValidator',
            $this->constraint->validatedBy()
        );
        $this->assertEquals(Constraint::PROPERTY_CONSTRAINT, $this->constraint->getTargets());
    }

    public function testGetAlias()
    {
        $this->assertEquals('url', $this->constraint->getAlias());
    }

    /**
     * @dataProvider validateDataProvider
     * @param mixed $data
     * @param boolean $correct
     */
    public function testValidate($data, $correct)
    {
        if ($correct) {
            $this->context->expects($this->never())
                ->method('addViolation');
        } else {
            $this->context->expects($this->once())
                ->method('addViolation')
                ->with($this->constraint->message);
        }

        $this->validator->validate($data, $this->constraint);
    }

    public function validateDataProvider()
    {
        return [
            'Url safe' => [
                'data' => 'http://www.test.com/test',
                'correct' => true
            ],
            'Url not safe' => [
                'data' => '_Abc/test',
                'correct' => false
            ],
        ];
    }
}

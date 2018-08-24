<?php

namespace Oro\Bundle\PromotionBundle\Tests\Unit\Validator\Constraints;

use Symfony\Component\Validator\Context\ExecutionContextInterface;

use Oro\Bundle\PromotionBundle\CouponGeneration\Options\CodeGenerationOptions;
use Oro\Bundle\PromotionBundle\Validator\Constraints\CouponCodeLength;
use Oro\Bundle\PromotionBundle\Validator\Constraints\CouponCodeLengthValidator;

class CouponCodeLengthValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CouponCodeLengthValidator
     */
    protected $validator;

    /**
     * @var ExecutionContextInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $context;

    /**
     * @var CouponCodeLength
     */
    protected $constraint;

    protected function setUp()
    {
        $this->constraint = new CouponCodeLength();
        $this->context = $this->createMock(ExecutionContextInterface::class);

        $this->validator = new CouponCodeLengthValidator();
        $this->validator->initialize($this->context);
    }

    /**
     * @dataProvider validateDataProvider
     *
     * @param CodeGenerationOptions $entity
     * @param bool $violationExpected
     */
    public function testValidate(CodeGenerationOptions $entity, bool $violationExpected)
    {
        $this->context
            ->expects($violationExpected ? $this->once() : $this->never())
            ->method('addViolation');

        $this->validator->validate($entity, $this->constraint);
    }

    /**
     * @return array
     */
    public function validateDataProvider()
    {
        return [
            'max length exceeded' => [
                'entity' => (new CodeGenerationOptions())
                    ->setCodeLength(122)
                    ->setDashesSequence(1)
                    ->setCodePrefix('prefix')
                    ->setCodeSuffix('suffix'),
                'violationExpected' => true,
            ],
            'max length not exceeded' => [
                'entity' => (new CodeGenerationOptions())
                    ->setCodeLength(121)
                    ->setDashesSequence(1)
                    ->setCodePrefix('prefix')
                    ->setCodeSuffix('suffix'),
                'violationExpected' => false,
            ],
            'max length exceeded without dashes' => [
                'entity' => (new CodeGenerationOptions())
                    ->setCodeLength(244)
                    ->setCodePrefix('prefix')
                    ->setCodeSuffix('suffix'),
                'violationExpected' => true,
            ],
            'max length not exceeded without dashes' => [
                'entity' => (new CodeGenerationOptions())
                    ->setCodeLength(243)
                    ->setCodePrefix('prefix')
                    ->setCodeSuffix('suffix'),
                'violationExpected' => false,
            ],
            'max length exceeded only with code length' => [
                'entity' => (new CodeGenerationOptions())
                    ->setCodeLength(256),
                'violationExpected' => true,
            ],
            'max length not exceeded only with code length' => [
                'entity' => (new CodeGenerationOptions())
                    ->setCodeLength(255),
                'violationExpected' => false,
            ],
            'max length exceeded with unicode prefix and suffix' => [
                'entity' => (new CodeGenerationOptions())
                    ->setCodeLength(1)
                    ->setCodePrefix($this->generateUnicodeString(155))
                    ->setCodeSuffix($this->generateUnicodeString(100)),
                'violationExpected' => true,
            ],
            'max length not exceeded with unicode prefix and suffix' => [
                'entity' => (new CodeGenerationOptions())
                    ->setCodeLength(1)
                    ->setCodePrefix($this->generateUnicodeString(154))
                    ->setCodeSuffix($this->generateUnicodeString(100)),
                'violationExpected' => false,
            ],
        ];
    }

    /**
     * @expectedException \Symfony\Component\Validator\Exception\UnexpectedTypeException
     */
    public function testValidateWrongEntity()
    {
        $this->validator->validate(new \stdClass(), $this->constraint);
    }

    /**
     * @param int $length
     * @return string
     */
    protected function generateUnicodeString(int $length)
    {
        // cyrillic symbol
        return str_repeat('Я', $length);
    }
}

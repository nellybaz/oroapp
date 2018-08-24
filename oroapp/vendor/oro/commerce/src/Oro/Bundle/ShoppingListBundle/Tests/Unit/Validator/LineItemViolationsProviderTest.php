<?php

namespace Oro\Bundle\ShoppingListBundle\Tests\Unit\Validator;

use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\ConstraintViolationList;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use Oro\Bundle\ShoppingListBundle\Validator\LineItemViolationsProvider;

class LineItemViolationsProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ValidatorInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $validator;

    /**
     * @var LineItemViolationsProvider
     */
    protected $lineItemErrorsProvider;

    protected function setUp()
    {
        $this->validator = $this->createMock(ValidatorInterface::class);
        $this->lineItemErrorsProvider = new LineItemViolationsProvider($this->validator);
    }

    public function testIsLineItemListValidReturnFalse()
    {
        $this->validator->expects($this->once())
            ->method('validate')
            ->willReturn(['xxx']);
        $this->assertFalse($this->lineItemErrorsProvider->isLineItemListValid([]));
    }

    public function testIsLineItemListValidReturnTrue()
    {
        $this->validator->expects($this->once())
            ->method('validate')
            ->willReturn([]);
        $this->assertTrue($this->lineItemErrorsProvider->isLineItemListValid([]));
    }

    public function testGetLineItemErrorsReturnEmptyArray()
    {
        $this->validator->expects($this->once())
            ->method('validate')
            ->willReturn([]);
        $this->assertEmpty($this->lineItemErrorsProvider->getLineItemErrors([]));
    }

    public function testGetLineItemErrorsReturnIndexedErrors()
    {
        $constraintViolation = $this->createMock(ConstraintViolation::class);
        $constraintViolation->expects($this->once())
            ->method('getPropertyPath')
            ->willReturn('testPath');

        $constraintViolation->expects($this->once())
            ->method('getCause')
            ->willReturn('error');

        /** @var ConstraintViolationListInterface|\PHPUnit_Framework_MockObject_MockObject $errorList */
        $errorList = new ConstraintViolationList();
        $errorList->add($constraintViolation);

        $this->validator->expects($this->once())
            ->method('validate')
            ->willReturn($errorList);

        $errors = $this->lineItemErrorsProvider->getLineItemErrors([]);
        $this->assertArrayHasKey('testPath', $errors);
        $this->assertCount(1, $errors['testPath']);
        $this->assertSame($errors['testPath'][0], $constraintViolation);
    }

    public function testGetLineItemErrorsReturnIndexedWarning()
    {
        $constraintViolation = $this->createMock(ConstraintViolation::class);
        $constraintViolation->expects($this->once())
            ->method('getPropertyPath')
            ->willReturn('testPath');

        $constraintViolation->expects($this->exactly(2))
            ->method('getCause')
            ->willReturn('warning');

        /** @var ConstraintViolationListInterface|\PHPUnit_Framework_MockObject_MockObject $errorList */
        $errorList = new ConstraintViolationList();
        $errorList->add($constraintViolation);

        $this->validator->expects($this->once())
            ->method('validate')
            ->willReturn($errorList);

        $errors = $this->lineItemErrorsProvider->getLineItemErrors([]);
        $this->assertEquals([], $errors);
        $warnings = $this->lineItemErrorsProvider->getLineItemWarnings([]);
        $this->assertArrayHasKey('testPath', $warnings);
        $this->assertCount(1, $warnings['testPath']);
        $this->assertSame($warnings['testPath'][0], $constraintViolation);
    }
}

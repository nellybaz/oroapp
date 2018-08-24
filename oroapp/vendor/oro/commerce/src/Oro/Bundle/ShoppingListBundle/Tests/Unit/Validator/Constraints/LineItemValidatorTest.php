<?php

namespace Oro\Bundle\ShoppingListBundle\Tests\Unit\Validator\Constraints;

use Symfony\Component\Validator\ExecutionContextInterface;

use Doctrine\Bundle\DoctrineBundle\Registry;

use Oro\Bundle\ShoppingListBundle\Entity\LineItem;
use Oro\Bundle\ShoppingListBundle\Entity\Repository\LineItemRepository;
use Oro\Bundle\ShoppingListBundle\Validator\Constraints\LineItemValidator;
use Oro\Bundle\ShoppingListBundle\Validator\Constraints\LineItem as LineItemConstraint;

class LineItemValidatorTest extends \PHPUnit_Framework_TestCase
{
    const LINE_ITEM_SHORTCUT = 'OroShoppingListBundle:LineItem';

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|Registry
     */
    protected $registry;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|LineItemRepository
     */
    protected $repository;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ExecutionContextInterface
     */
    protected $context;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|LineItem
     */
    protected $lineItem;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|LineItemConstraint
     */
    protected $constraint;

    protected function setUp()
    {
        $this->registry = $this->getMockBuilder('Doctrine\Bundle\DoctrineBundle\Registry')
            ->disableOriginalConstructor()
            ->getMock();
        $this->repository = $this
            ->getMockBuilder('Oro\Bundle\ShoppingListBundle\Entity\Repository\LineItemRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $this->context = $this->createMock('Symfony\Component\Validator\ExecutionContextInterface');
        $this->lineItem = $this->createMock('Oro\Bundle\ShoppingListBundle\Entity\LineItem');
        $this->constraint = $this->getMockBuilder('Oro\Bundle\ShoppingListBundle\Validator\Constraints\LineItem')
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testValidateNoDuplicate()
    {
        $this->repository->expects($this->once())
            ->method('findDuplicate')
            ->with($this->lineItem)
            ->will($this->returnValue(null));

        $this->registry->expects($this->once())
            ->method('getRepository')
            ->with(self::LINE_ITEM_SHORTCUT)
            ->will($this->returnValue($this->repository));

        $this->context->expects($this->never())
            ->method('addViolation');

        $validator = new LineItemValidator($this->registry);
        $validator->initialize($this->context);
        $validator->validate($this->lineItem, $this->constraint);
    }

    public function testValidate()
    {
        $this->repository->expects($this->once())
            ->method('findDuplicate')
            ->with($this->lineItem)
            ->will($this->returnValue(true));

        $this->registry->expects($this->once())
            ->method('getRepository')
            ->with(self::LINE_ITEM_SHORTCUT)
            ->will($this->returnValue($this->repository));

        $this->context->expects($this->once())
            ->method('addViolation')
            ->with($this->constraint->message);

        $validator = new LineItemValidator($this->registry);
        $validator->initialize($this->context);
        $validator->validate($this->lineItem, $this->constraint);
    }
}

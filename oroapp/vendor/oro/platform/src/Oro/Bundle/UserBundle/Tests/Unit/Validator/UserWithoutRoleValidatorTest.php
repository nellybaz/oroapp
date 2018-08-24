<?php

namespace Oro\Bundle\UserBundle\Tests\Unit\Validator;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Validator\Context\ExecutionContextInterface;

use Oro\Component\Testing\Unit\EntityTrait;
use Oro\Bundle\UserBundle\Entity\Role;
use Oro\Bundle\UserBundle\Validator\UserWithoutRoleValidator;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\UserBundle\Validator\Constraints\UserWithoutRole;

class UserWithoutRoleValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UserWithoutRoleValidator
     */
    protected $validator;

    /**
     * @var UserWithoutRole
     */
    protected $constraint;

    /**
     * @var ExecutionContextInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $context;

    protected function setUp()
    {
        $this->constraint = new UserWithoutRole();
        $this->context = $this->createMock(ExecutionContextInterface::class);

        $this->validator = new UserWithoutRoleValidator();
        $this->validator->initialize($this->context);
    }

    public function testEmptyUserCollection()
    {
        $this->context->expects($this->never())
            ->method('addViolation');

        $this->validator->validate(new ArrayCollection(), $this->constraint);
    }

    public function testUserWithRole()
    {
        $user = new User();
        $user->addRole(new Role());

        $this->context->expects($this->never())
            ->method('addViolation');

        $this->validator->validate(new ArrayCollection([$user]), $this->constraint);
    }

    public function testUserWithoutRoles()
    {
        $user = (new User())
            ->setFirstName('John')
            ->setLastName('Doe');

        $this->context->expects($this->once())
            ->method('addViolation')
            ->with($this->constraint->message, ['{{ userName }}' => 'John Doe']);

        $this->validator->validate(new ArrayCollection([$user]), $this->constraint);
    }
}

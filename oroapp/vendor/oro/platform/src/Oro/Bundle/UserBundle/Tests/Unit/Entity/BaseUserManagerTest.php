<?php

namespace Oro\Bundle\UserBundle\Tests\Unit\Entity;

use Doctrine\ORM\ORMInvalidArgumentException;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\UserBundle\Entity\BaseUserManager;
use Oro\Bundle\UserBundle\Entity\Role;
use Oro\Bundle\UserBundle\Entity\User;

class BaseUserManagerTest extends \PHPUnit_Framework_TestCase
{
    const USER_CLASS = 'Oro\Bundle\UserBundle\Entity\User';
    const TEST_NAME = 'Jack';
    const TEST_EMAIL = 'jack@jackmail.net';

    /**
     * @var User
     */
    protected $user;

    /**
     * @var BaseUserManager
     */
    protected $userManager;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ObjectManager
     */
    protected $om;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $repository;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|ManagerRegistry
     */
    protected $registry;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|EncoderFactoryInterface
     */
    protected $ef;

    protected function setUp()
    {
        if (!interface_exists('Doctrine\Common\Persistence\ObjectManager')) {
            $this->markTestSkipped('Doctrine Common has to be installed for this test to run.');
        }

        $this->ef = $this->createMock('Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface');
        $class = $this->createMock('Doctrine\Common\Persistence\Mapping\ClassMetadata');

        $this->om = $this->createMock('Doctrine\Common\Persistence\ObjectManager');
        $this->repository = $this->createMock('Doctrine\Common\Persistence\ObjectRepository');

        $this->om
            ->expects($this->any())
            ->method('getRepository')
            ->withAnyParameters()
            ->will($this->returnValue($this->repository));

        $this->om
            ->expects($this->any())
            ->method('getClassMetadata')
            ->with($this->equalTo(static::USER_CLASS))
            ->will($this->returnValue($class));

        $this->registry = $this->createMock('Doctrine\Common\Persistence\ManagerRegistry');
        $this->registry->expects($this->any())
            ->method('getManagerForClass')
            ->will($this->returnValue($this->om));

        $class->expects($this->any())
            ->method('getName')
            ->will($this->returnValue(static::USER_CLASS));

        $this->userManager = new BaseUserManager(static::USER_CLASS, $this->registry, $this->ef);
    }

    public function testGetClass()
    {
        $this->assertEquals(static::USER_CLASS, $this->userManager->getClass());
    }

    public function testCreateUser()
    {
        $this->assertInstanceOf(static::USER_CLASS, $this->getUser());
    }

    public function testDeleteUser()
    {
        $user = $this->getUser();

        $this->om->expects($this->once())->method('remove')->with($this->equalTo($user));
        $this->om->expects($this->once())->method('flush');

        $this->userManager->deleteUser($user);
    }

    public function testUpdateUser()
    {
        $password = 'password';
        $encodedPassword = 'encodedPassword';

        $user = $this->getUser(true);
        $user->setUsername(self::TEST_NAME);
        $user->setEmail(self::TEST_EMAIL);
        $user->setPlainPassword($password);

        $encoder = $this->createMock('Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface');
        $encoder->expects($this->once())
            ->method('encodePassword')
            ->with($user->getPlainPassword(), $user->getSalt())
            ->will($this->returnValue($encodedPassword));

        $this->ef->expects($this->once())
            ->method('getEncoder')
            ->with($user)
            ->will($this->returnValue($encoder));

        $this->om->expects($this->once())->method('persist')->with($this->equalTo($user));
        $this->om->expects($this->once())->method('flush');

        $this->userManager->updateUser($user);

        $this->assertEquals(self::TEST_EMAIL, $user->getEmail());
        $this->assertEquals($encodedPassword, $user->getPassword());
    }

    public function testFindUserBy()
    {
        $crit = ['id' => 0];

        $this->repository
            ->expects($this->once())
            ->method('findOneBy')
            ->with($this->equalTo($crit))
            ->will($this->returnValue([]));

        $this->userManager->findUserBy($crit);
    }

    public function testFindUsers()
    {
        $this->repository
            ->expects($this->once())
            ->method('findAll')
            ->will($this->returnValue([]));

        $this->userManager->findUsers();
    }

    public function testFindUserByUsername()
    {
        $crit = ['username' => self::TEST_NAME];

        $this->repository
            ->expects($this->once())
            ->method('findOneBy')
            ->with($this->equalTo($crit))
            ->will($this->returnValue([]));

        $this->userManager->findUserByUsernameOrEmail(self::TEST_NAME);
    }

    public function testFindUserByEmail()
    {
        $crit = ['username' => self::TEST_EMAIL];

        $this->repository
            ->expects($this->at(0))
            ->method('findOneBy')
            ->with($this->equalTo($crit))
            ->will($this->returnValue([]));

        $crit = ['email' => self::TEST_EMAIL];

        $this->repository
            ->expects($this->at(1))
            ->method('findOneBy')
            ->with($this->equalTo($crit))
            ->will($this->returnValue([]));

        $this->userManager->findUserByUsernameOrEmail(self::TEST_EMAIL);
    }

    public function testFindUserByToken()
    {
        $crit = ['confirmationToken' => self::TEST_NAME];

        $this->repository
            ->expects($this->once())
            ->method('findOneBy')
            ->with($this->equalTo($crit))
            ->will($this->returnValue([]));

        $this->userManager->findUserByConfirmationToken(self::TEST_NAME);
    }

    public function testReloadUser()
    {
        $user = $this->getUser();

        $this->om
            ->expects($this->once())
            ->method('refresh')
            ->with($this->equalTo($user));

        $this->userManager->reloadUser($user);
    }

    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\UsernameNotFoundException
     */
    public function testRefreshUserNotFound()
    {
        $user = $this->createMock(User::class);
        $user->expects($this->any())
            ->method('getId')
            ->willReturn(42);

        $this->om->expects($this->once())
            ->method('refresh')
            ->with($user)
            ->willThrowException(new ORMInvalidArgumentException('Not managed'));

        $this->repository
            ->expects($this->once())
            ->method('find')
            ->with(42);

        $this->userManager->refreshUser($user);
    }

    public function testRefreshUserManaged()
    {
        $user = $this->createMock(User::class);
        $user->expects($this->any())
            ->method('getId')
            ->willReturn(42);

        $this->om->expects($this->once())
            ->method('refresh')
            ->with($user);

        $this->repository->expects($this->never())
            ->method('find');

        $this->userManager->refreshUser($user);
    }

    public function testRefreshManagedUser()
    {
        $user = $this->createMock(User::class);
        $user->expects($this->any())
            ->method('getId')
            ->willReturn(42);

        $this->om->expects($this->once())
            ->method('refresh')
            ->with($user)
            ->willThrowException(new ORMInvalidArgumentException('Not managed'));

        $this->repository
            ->expects($this->once())
            ->method('find')
            ->with(42)
            ->willReturn($user);

        $this->userManager->refreshUser($user);
    }

    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\UnsupportedUserException
     * @expectedExceptionMessage Account is not supported
     */
    public function testRefreshUserNotSupported()
    {
        $user = $this->createMock('Symfony\Component\Security\Core\User\UserInterface');
        $this->userManager->refreshUser($user);
    }

    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\UnsupportedUserException
     * @expectedExceptionMessage Expected an instance of Oro\Bundle\UserBundle\Entity\UserInterface, but got
     */
    public function testRefreshUserNotOroUser()
    {
        $user = $this->createMock('Symfony\Component\Security\Core\User\UserInterface');
        $userManager = new BaseUserManager(
            'Symfony\Component\Security\Core\User\UserInterface',
            $this->registry,
            $this->ef
        );

        $userManager->refreshUser($user);
    }

    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\UsernameNotFoundException
     */
    public function testLoadUserByUsernameNotFound()
    {
        $crit = ['username' => self::TEST_NAME];

        $this->repository
            ->expects($this->once())
            ->method('findOneBy')
            ->with($this->equalTo($crit))
            ->will($this->returnValue(null));

        $this->userManager->loadUserByUsername(self::TEST_NAME);
    }

    public function testLoadUserByUsername()
    {
        $user = $this->getUser();
        $crit = ['username' => self::TEST_NAME];

        $this->repository
            ->expects($this->once())
            ->method('findOneBy')
            ->with($this->equalTo($crit))
            ->will($this->returnValue($user));

        $this->assertEquals($user, $this->userManager->loadUserByUsername(self::TEST_NAME));
    }

    public function testSupportsClass()
    {
        $this->assertTrue($this->userManager->supportsClass(static::USER_CLASS));
        $this->assertFalse($this->userManager->supportsClass('stdClass'));
    }

    /**
     * @param bool $withRole
     *
     * @return User
     */
    protected function getUser($withRole = false)
    {
        $user = $this->userManager->createUser();
        if ($withRole) {
            $role = new Role(User::ROLE_ADMINISTRATOR);
            $user->addRole($role);
        }

        return $user;
    }
}

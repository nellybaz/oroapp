<?php

namespace Oro\Bundle\SecurityBundle\Tests\Unit\Acl\Persistence;

use Symfony\Component\Security\Acl\Domain\RoleSecurityIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;

use Oro\Bundle\SecurityBundle\Acl\Persistence\BaseAclManager;

class AbstractAclManagerTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    private $abstract;

    protected function setUp()
    {
        $this->abstract = $this->getMockBuilder('Oro\Bundle\SecurityBundle\Acl\Persistence\AbstractAclManager')
            ->getMockForAbstractClass();
    }

    public function testGetSid()
    {
        $manager = new BaseAclManager();
        $this->abstract->setBaseAclManager($manager);

        $this->assertEquals(
            new RoleSecurityIdentity('ROLE_TEST'),
            $this->abstract->getSid('ROLE_TEST')
        );

        $src = $this->createMock('Symfony\Component\Security\Core\Role\RoleInterface');
        $src->expects($this->once())
            ->method('getRole')
            ->will($this->returnValue('ROLE_TEST'));
        $this->assertEquals(
            new RoleSecurityIdentity('ROLE_TEST'),
            $this->abstract->getSid($src)
        );

        $src = $this->createMock('Symfony\Component\Security\Core\User\UserInterface');
        $src->expects($this->once())
            ->method('getUsername')
            ->will($this->returnValue('Test'));
        $this->assertEquals(
            new UserSecurityIdentity('Test', get_class($src)),
            $this->abstract->getSid($src)
        );

        $user = $this->createMock('Symfony\Component\Security\Core\User\UserInterface');
        $user->expects($this->once())
            ->method('getUsername')
            ->will($this->returnValue('Test'));
        $src = $this->createMock('Symfony\Component\Security\Core\Authentication\Token\TokenInterface');
        $src->expects($this->once())
            ->method('getUser')
            ->will($this->returnValue($user));
        $this->assertEquals(
            new UserSecurityIdentity('Test', get_class($user)),
            $this->abstract->getSid($src)
        );

        $this->expectException('\InvalidArgumentException');
        $this->abstract->getSid(new \stdClass());
    }

    public function testNoBaseAclManager()
    {
        $this->expectException('Oro\Bundle\SecurityBundle\Acl\Exception\InvalidAclManagerException');
        $this->abstract->getSid('ROLE_TEST');
    }
}

<?php

namespace Oro\Bundle\SearchBundle\Tests\Unit\Security;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Bundle\SearchBundle\Security\SecurityProvider;
use Oro\Bundle\SecurityBundle\Metadata\EntitySecurityMetadataProvider;

class SecurityProviderTest extends \PHPUnit_Framework_TestCase
{
    /** @var SecurityProvider */
    protected $provider;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $authorizationChecker;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $entitySecurityMetadataProvider;

    protected function setUp()
    {
        $this->authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);
        $this->entitySecurityMetadataProvider = $this->createMock(EntitySecurityMetadataProvider::class);

        $this->provider = new SecurityProvider(
            $this->authorizationChecker,
            $this->entitySecurityMetadataProvider
        );
    }

    public function testIisProtectedEntity()
    {
        $this->entitySecurityMetadataProvider->expects($this->once())
            ->method('isProtectedEntity')
            ->with('someClass')
            ->will($this->returnValue(true));
        $this->provider->isProtectedEntity('someClass');
    }

    public function testIsGranted()
    {
        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('VIEW', 'someClass')
            ->will($this->returnValue(true));
        $this->provider->isGranted('VIEW', 'someClass');
    }
}

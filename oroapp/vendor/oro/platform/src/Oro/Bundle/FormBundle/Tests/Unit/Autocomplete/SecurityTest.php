<?php

namespace Oro\Bundle\FormBundle\Tests\Unit\Autocomplete;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Bundle\FormBundle\Autocomplete\Security;

class SecurityTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $authorizationChecker;

    /** @var Security */
    protected $security;

    protected function setUp()
    {
        $this->authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);

        $this->security = new Security($this->authorizationChecker);
    }

    public function testSetAutocompleteAclResource()
    {
        $this->security->setAutocompleteAclResource('test_search', 'test_acl_resource');
        $this->assertAttributeEquals(
            array('test_search' => 'test_acl_resource'),
            'autocompleteAclResources',
            $this->security
        );
    }

    public function testGetAutocompleteAclResource()
    {
        $this->assertNull($this->security->getAutocompleteAclResource('test'));

        $this->security->setAutocompleteAclResource('test_search', 'test_acl_resource');
        $this->assertEquals('test_acl_resource', $this->security->getAutocompleteAclResource('test_search'));
    }

    public function testIsAutocompleteGranted()
    {
        $this->assertTrue($this->security->isAutocompleteGranted('test_acl_resource'));

        $this->security->setAutocompleteAclResource('test_search', 'test_acl_resource');

        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('test_acl_resource')
            ->will($this->returnValue(true));

        $this->assertTrue($this->security->isAutocompleteGranted('test_search'));
    }
}

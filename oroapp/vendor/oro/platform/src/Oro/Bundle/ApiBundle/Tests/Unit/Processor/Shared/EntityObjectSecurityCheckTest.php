<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Shared;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Processor\Shared\EntityObjectSecurityCheck;
use Oro\Bundle\ApiBundle\Tests\Unit\Fixtures\Entity\Product;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\Get\GetProcessorTestCase;

class EntityObjectSecurityCheckTest extends GetProcessorTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject|AuthorizationCheckerInterface */
    protected $authorizationChecker;

    /** @var EntityObjectSecurityCheck */
    protected $processor;

    public function setUp()
    {
        parent::setUp();

        $this->authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);

        $this->processor = new EntityObjectSecurityCheck(
            $this->authorizationChecker,
            'VIEW'
        );
    }

    public function testProcessWhenNoEntity()
    {
        $this->processor->process($this->context);
    }

    public function testProcessWhenAccessGranted()
    {
        $entity = new Product();
        $config = new EntityDefinitionConfig();

        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('VIEW', $this->identicalTo($entity))
            ->willReturn(true);

        $this->context->setClassName(get_class($entity));
        $this->context->setConfig($config);
        $this->context->setResult($entity);
        $this->processor->process($this->context);
    }

    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\AccessDeniedException
     */
    public function testProcessWhenAccessDenied()
    {
        $entity = new Product();
        $config = new EntityDefinitionConfig();

        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('VIEW', $this->identicalTo($entity))
            ->willReturn(false);

        $this->context->setClassName(get_class($entity));
        $this->context->setConfig($config);
        $this->context->setResult($entity);
        $this->processor->process($this->context);
    }

    public function testProcessWhenAccessGrantedByAclResource()
    {
        $entity = new Product();
        $config = new EntityDefinitionConfig();
        $config->setAclResource('test_acl_resource');

        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('test_acl_resource', $this->identicalTo($entity))
            ->willReturn(true);

        $this->context->setClassName(get_class($entity));
        $this->context->setConfig($config);
        $this->context->setResult($entity);
        $this->processor->process($this->context);
    }

    /**
     * @expectedException \Symfony\Component\Security\Core\Exception\AccessDeniedException
     */
    public function testProcessWhenAccessDeniedByAclResource()
    {
        $entity = new Product();
        $config = new EntityDefinitionConfig();
        $config->setAclResource('test_acl_resource');

        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('test_acl_resource', $this->identicalTo($entity))
            ->willReturn(false);

        $this->context->setClassName(get_class($entity));
        $this->context->setConfig($config);
        $this->context->setResult($entity);
        $this->processor->process($this->context);
    }

    public function testProcessWhenAccessCheckDisabledBySettingEmptyAclResource()
    {
        $entity = new Product();
        $config = new EntityDefinitionConfig();
        $config->setAclResource('');

        $this->authorizationChecker->expects($this->never())
            ->method('isGranted');

        $this->context->setClassName(get_class($entity));
        $this->context->setConfig($config);
        $this->context->setResult($entity);
        $this->processor->process($this->context);
    }
}

<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\Subresource\Shared;

use Oro\Bundle\ApiBundle\Collection\IncludedEntityCollection;
use Oro\Bundle\ApiBundle\Config\ConfigAccessorInterface;
use Oro\Bundle\ApiBundle\Form\FormExtensionSwitcherInterface;
use Oro\Bundle\ApiBundle\Form\Guesser\MetadataTypeGuesser;
use Oro\Bundle\ApiBundle\Metadata\MetadataAccessorInterface;
use Oro\Bundle\ApiBundle\Processor\Subresource\ContextParentConfigAccessor;
use Oro\Bundle\ApiBundle\Processor\Subresource\ContextParentMetadataAccessor;
use Oro\Bundle\ApiBundle\Processor\Subresource\Shared\InitializeApiFormExtension;
use Oro\Bundle\ApiBundle\Tests\Unit\Processor\Subresource\ChangeRelationshipTestCase;

class InitializeApiFormExtensionTest extends ChangeRelationshipTestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $formExtensionSwitcher;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $metadataTypeGuesser;

    /** @var InitializeApiFormExtension */
    protected $processor;

    public function setUp()
    {
        parent::setUp();

        $this->formExtensionSwitcher = $this->createMock(FormExtensionSwitcherInterface::class);
        $this->metadataTypeGuesser = $this->getMockBuilder(MetadataTypeGuesser::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->processor = new InitializeApiFormExtension(
            $this->formExtensionSwitcher,
            $this->metadataTypeGuesser
        );
    }

    public function testProcessWhenApiFormExtensionIsNotActivated()
    {
        $this->formExtensionSwitcher->expects($this->once())
            ->method('switchToApiFormExtension');
        $this->metadataTypeGuesser->expects($this->once())
            ->method('getIncludedEntities')
            ->willReturn(null);
        $this->metadataTypeGuesser->expects($this->once())
            ->method('getMetadataAccessor')
            ->willReturn(null);
        $this->metadataTypeGuesser->expects($this->once())
            ->method('getConfigAccessor')
            ->willReturn(null);
        $this->metadataTypeGuesser->expects($this->once())
            ->method('setIncludedEntities')
            ->with(null);
        $this->metadataTypeGuesser->expects($this->once())
            ->method('setMetadataAccessor')
            ->with($this->isInstanceOf(ContextParentMetadataAccessor::class));
        $this->metadataTypeGuesser->expects($this->once())
            ->method('setConfigAccessor')
            ->with($this->isInstanceOf(ContextParentConfigAccessor::class));

        $this->processor->process($this->context);

        self::assertFalse($this->context->has(InitializeApiFormExtension::PREVIOUS_INCLUDED_ENTITIES));
        self::assertFalse($this->context->has(InitializeApiFormExtension::PREVIOUS_METADATA_ACCESSOR));
        self::assertFalse($this->context->has(InitializeApiFormExtension::PREVIOUS_CONFIG_ACCESSOR));
    }

    public function testProcessWhenApiFormExtensionIsActivated()
    {
        $this->formExtensionSwitcher->expects($this->never())
            ->method('switchToApiFormExtension');
        $this->metadataTypeGuesser->expects($this->never())
            ->method('getIncludedEntities');
        $this->metadataTypeGuesser->expects($this->never())
            ->method('getMetadataAccessor');
        $this->metadataTypeGuesser->expects($this->never())
            ->method('getConfigAccessor');
        $this->metadataTypeGuesser->expects($this->never())
            ->method('setIncludedEntities');
        $this->metadataTypeGuesser->expects($this->never())
            ->method('setMetadataAccessor');
        $this->metadataTypeGuesser->expects($this->never())
            ->method('setConfigAccessor');

        $this->context->set(InitializeApiFormExtension::API_FORM_EXTENSION_ACTIVATED, true);
        $this->processor->process($this->context);
    }

    public function testProcessWhenMetadataTypeGuesserHasContext()
    {
        $currentIncludedEntities = $this->createMock(IncludedEntityCollection::class);

        $includedEntities = $this->createMock(IncludedEntityCollection::class);
        $metadataAccessor = $this->createMock(MetadataAccessorInterface::class);
        $configAccessor = $this->createMock(ConfigAccessorInterface::class);

        $this->formExtensionSwitcher->expects($this->once())
            ->method('switchToApiFormExtension');
        $this->metadataTypeGuesser->expects($this->once())
            ->method('getIncludedEntities')
            ->willReturn($includedEntities);
        $this->metadataTypeGuesser->expects($this->once())
            ->method('getMetadataAccessor')
            ->willReturn($metadataAccessor);
        $this->metadataTypeGuesser->expects($this->once())
            ->method('getConfigAccessor')
            ->willReturn($configAccessor);
        $this->metadataTypeGuesser->expects($this->once())
            ->method('setIncludedEntities')
            ->with($this->identicalTo($currentIncludedEntities));
        $this->metadataTypeGuesser->expects($this->once())
            ->method('setMetadataAccessor')
            ->with($this->isInstanceOf(ContextParentMetadataAccessor::class));
        $this->metadataTypeGuesser->expects($this->once())
            ->method('setConfigAccessor')
            ->with($this->isInstanceOf(ContextParentConfigAccessor::class));

        $this->context->setIncludedEntities($currentIncludedEntities);
        $this->processor->process($this->context);

        self::assertSame(
            $includedEntities,
            $this->context->get(InitializeApiFormExtension::PREVIOUS_INCLUDED_ENTITIES)
        );
        self::assertSame(
            $metadataAccessor,
            $this->context->get(InitializeApiFormExtension::PREVIOUS_METADATA_ACCESSOR)
        );
        self::assertSame(
            $configAccessor,
            $this->context->get(InitializeApiFormExtension::PREVIOUS_CONFIG_ACCESSOR)
        );
    }
}

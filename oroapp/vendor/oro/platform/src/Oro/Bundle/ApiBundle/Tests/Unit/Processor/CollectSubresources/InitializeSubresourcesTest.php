<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\Processor\CollectSubresources;

use Oro\Bundle\ApiBundle\Config\Config;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfig;
use Oro\Bundle\ApiBundle\Config\EntityDefinitionConfigExtra;
use Oro\Bundle\ApiBundle\Metadata\AssociationMetadata;
use Oro\Bundle\ApiBundle\Metadata\EntityMetadata;
use Oro\Bundle\ApiBundle\Processor\CollectSubresources\CollectSubresourcesContext;
use Oro\Bundle\ApiBundle\Processor\CollectSubresources\InitializeSubresources;
use Oro\Bundle\ApiBundle\Request\ApiResource;
use Oro\Bundle\ApiBundle\Request\ApiResourceSubresources;
use Oro\Bundle\ApiBundle\Request\ApiSubresource;
use Oro\Bundle\ApiBundle\Request\RequestType;

class InitializeSubresourcesTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $configProvider;

    /** @var \PHPUnit_Framework_MockObject_MockObject */
    protected $metadataProvider;

    /** @var CollectSubresourcesContext */
    protected $context;

    /** @var InitializeSubresources */
    protected $processor;

    protected function setUp()
    {
        $this->configProvider = $this->getMockBuilder('Oro\Bundle\ApiBundle\Provider\ConfigProvider')
            ->disableOriginalConstructor()
            ->getMock();
        $this->metadataProvider = $this->getMockBuilder('Oro\Bundle\ApiBundle\Provider\MetadataProvider')
            ->disableOriginalConstructor()
            ->getMock();

        $this->context = new CollectSubresourcesContext($this->configProvider, $this->metadataProvider);
        $this->processor = new InitializeSubresources($this->configProvider, $this->metadataProvider);
    }

    public function testProcessWhenSubresourcesAreAlreadyInitialized()
    {
        $this->context->getResult()->add(new ApiResourceSubresources('Test\Class'));
        $this->processor->process($this->context);

        $this->assertEquals(
            ['Test\Class' => new ApiResourceSubresources('Test\Class')],
            $this->context->getResult()->toArray()
        );
    }

    public function testProcessForExcludedAssociation()
    {
        $resource = new ApiResource('Test\Class');

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());
        $resourceConfig->getDefinition()->addField('association1')->setExcluded();
        $resourceMetadata = new EntityMetadata();
        $association = new AssociationMetadata();
        $association->setName('association1');
        $association->setTargetClassName('Test\Association1Target');
        $association->setAcceptableTargetClassNames(['Test\Association1Target']);
        $association->setIsCollection(false);
        $resourceMetadata->addAssociation($association);

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);
        $this->context->setAccessibleResources([]);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn($resourceMetadata);

        $this->processor->process($this->context);

        $expectedSubresources = new ApiResourceSubresources($resource->getEntityClass());

        $this->assertEquals(
            ['Test\Class' => $expectedSubresources],
            $this->context->getResult()->toArray()
        );
    }

    public function testProcessForToOneAssociationForNotAccessibleResource()
    {
        $resource = new ApiResource('Test\Class');

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());
        $resourceMetadata = new EntityMetadata();
        $toOneAssociation = new AssociationMetadata();
        $toOneAssociation->setName('association1');
        $toOneAssociation->setTargetClassName('Test\Association1Target');
        $toOneAssociation->setAcceptableTargetClassNames(['Test\Association1Target']);
        $toOneAssociation->setIsCollection(false);
        $resourceMetadata->addAssociation($toOneAssociation);

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);
        $this->context->setAccessibleResources([]);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn($resourceMetadata);

        $this->processor->process($this->context);

        $expectedSubresources = new ApiResourceSubresources($resource->getEntityClass());
        $toOneAssociationSubresource = new ApiSubresource();
        $toOneAssociationSubresource->setTargetClassName($toOneAssociation->getTargetClassName());
        $toOneAssociationSubresource->setAcceptableTargetClassNames(
            $toOneAssociation->getAcceptableTargetClassNames()
        );
        $toOneAssociationSubresource->setIsCollection($toOneAssociation->isCollection());
        $toOneAssociationSubresource->setExcludedActions(
            [
                'get_subresource',
                'get_relationship',
                'update_relationship',
                'add_relationship',
                'delete_relationship'
            ]
        );
        $expectedSubresources->addSubresource($toOneAssociation->getName(), $toOneAssociationSubresource);

        $this->assertEquals(
            ['Test\Class' => $expectedSubresources],
            $this->context->getResult()->toArray()
        );
    }

    public function testProcessForToManyAssociationForNotAccessibleResource()
    {
        $resource = new ApiResource('Test\Class');

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());
        $resourceMetadata = new EntityMetadata();
        $toManyAssociation = new AssociationMetadata();
        $toManyAssociation->setName('association1');
        $toManyAssociation->setTargetClassName('Test\Association1Target');
        $toManyAssociation->setAcceptableTargetClassNames(['Test\Association1Target']);
        $toManyAssociation->setIsCollection(true);
        $resourceMetadata->addAssociation($toManyAssociation);

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);
        $this->context->setAccessibleResources([]);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn($resourceMetadata);

        $this->processor->process($this->context);

        $expectedSubresources = new ApiResourceSubresources($resource->getEntityClass());
        $toManyAssociationSubresource = new ApiSubresource();
        $toManyAssociationSubresource->setTargetClassName($toManyAssociation->getTargetClassName());
        $toManyAssociationSubresource->setAcceptableTargetClassNames(
            $toManyAssociation->getAcceptableTargetClassNames()
        );
        $toManyAssociationSubresource->setIsCollection($toManyAssociation->isCollection());
        $toManyAssociationSubresource->setExcludedActions(
            [
                'get_subresource',
                'get_relationship',
                'update_relationship',
                'add_relationship',
                'delete_relationship'
            ]
        );
        $expectedSubresources->addSubresource($toManyAssociation->getName(), $toManyAssociationSubresource);

        $this->assertEquals(
            ['Test\Class' => $expectedSubresources],
            $this->context->getResult()->toArray()
        );
    }

    public function testProcessForToOneAssociationForResourceWithoutExcludedActions()
    {
        $resource = new ApiResource('Test\Class');

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());
        $resourceMetadata = new EntityMetadata();
        $toOneAssociation = new AssociationMetadata();
        $toOneAssociation->setName('association1');
        $toOneAssociation->setTargetClassName('Test\Association1Target');
        $toOneAssociation->setAcceptableTargetClassNames(['Test\Association1Target']);
        $toOneAssociation->setIsCollection(false);
        $resourceMetadata->addAssociation($toOneAssociation);

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);
        $this->context->setAccessibleResources(['Test\Association1Target']);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn($resourceMetadata);

        $this->processor->process($this->context);

        $expectedSubresources = new ApiResourceSubresources($resource->getEntityClass());
        $toOneAssociationSubresource = new ApiSubresource();
        $toOneAssociationSubresource->setTargetClassName($toOneAssociation->getTargetClassName());
        $toOneAssociationSubresource->setAcceptableTargetClassNames(
            $toOneAssociation->getAcceptableTargetClassNames()
        );
        $toOneAssociationSubresource->setIsCollection($toOneAssociation->isCollection());
        $toOneAssociationSubresource->setExcludedActions(['add_relationship', 'delete_relationship']);
        $expectedSubresources->addSubresource($toOneAssociation->getName(), $toOneAssociationSubresource);

        $this->assertEquals(
            ['Test\Class' => $expectedSubresources],
            $this->context->getResult()->toArray()
        );
    }

    public function testProcessForToManyAssociationForResourceWithoutExcludedActions()
    {
        $resource = new ApiResource('Test\Class');

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());
        $resourceMetadata = new EntityMetadata();
        $toManyAssociation = new AssociationMetadata();
        $toManyAssociation->setName('association1');
        $toManyAssociation->setTargetClassName('Test\Association1Target');
        $toManyAssociation->setAcceptableTargetClassNames(['Test\Association1Target']);
        $toManyAssociation->setIsCollection(true);
        $resourceMetadata->addAssociation($toManyAssociation);

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);
        $this->context->setAccessibleResources(['Test\Association1Target']);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn($resourceMetadata);

        $this->processor->process($this->context);

        $expectedSubresources = new ApiResourceSubresources($resource->getEntityClass());
        $toManyAssociationSubresource = new ApiSubresource();
        $toManyAssociationSubresource->setTargetClassName($toManyAssociation->getTargetClassName());
        $toManyAssociationSubresource->setAcceptableTargetClassNames(
            $toManyAssociation->getAcceptableTargetClassNames()
        );
        $toManyAssociationSubresource->setIsCollection($toManyAssociation->isCollection());
        $expectedSubresources->addSubresource($toManyAssociation->getName(), $toManyAssociationSubresource);

        $this->assertEquals(
            ['Test\Class' => $expectedSubresources],
            $this->context->getResult()->toArray()
        );
    }

    public function testProcessForToOneAssociationForResourceWithExcludedActions()
    {
        $resource = new ApiResource('Test\Class');
        $resource->setExcludedActions(['delete']);

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());
        $resourceMetadata = new EntityMetadata();
        $toOneAssociation = new AssociationMetadata();
        $toOneAssociation->setName('association1');
        $toOneAssociation->setTargetClassName('Test\Association1Target');
        $toOneAssociation->setAcceptableTargetClassNames(['Test\Association1Target']);
        $toOneAssociation->setIsCollection(false);
        $resourceMetadata->addAssociation($toOneAssociation);

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);
        $this->context->setAccessibleResources(['Test\Association1Target']);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn($resourceMetadata);

        $this->processor->process($this->context);

        $expectedSubresources = new ApiResourceSubresources($resource->getEntityClass());
        $toOneAssociationSubresource = new ApiSubresource();
        $toOneAssociationSubresource->setTargetClassName($toOneAssociation->getTargetClassName());
        $toOneAssociationSubresource->setAcceptableTargetClassNames(
            $toOneAssociation->getAcceptableTargetClassNames()
        );
        $toOneAssociationSubresource->setIsCollection($toOneAssociation->isCollection());
        $toOneAssociationSubresource->setExcludedActions(['add_relationship', 'delete_relationship']);
        $expectedSubresources->addSubresource($toOneAssociation->getName(), $toOneAssociationSubresource);

        $this->assertEquals(
            ['Test\Class' => $expectedSubresources],
            $this->context->getResult()->toArray()
        );
    }

    public function testProcessForToManyAssociationForResourceWithExcludedActions()
    {
        $resource = new ApiResource('Test\Class');
        $resource->setExcludedActions(['delete']);

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());
        $resourceMetadata = new EntityMetadata();
        $toManyAssociation = new AssociationMetadata();
        $toManyAssociation->setName('association1');
        $toManyAssociation->setTargetClassName('Test\Association1Target');
        $toManyAssociation->setAcceptableTargetClassNames(['Test\Association1Target']);
        $toManyAssociation->setIsCollection(true);
        $resourceMetadata->addAssociation($toManyAssociation);

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);
        $this->context->setAccessibleResources(['Test\Association1Target']);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn($resourceMetadata);

        $this->processor->process($this->context);

        $expectedSubresources = new ApiResourceSubresources($resource->getEntityClass());
        $toManyAssociationSubresource = new ApiSubresource();
        $toManyAssociationSubresource->setTargetClassName($toManyAssociation->getTargetClassName());
        $toManyAssociationSubresource->setAcceptableTargetClassNames(
            $toManyAssociation->getAcceptableTargetClassNames()
        );
        $toManyAssociationSubresource->setIsCollection($toManyAssociation->isCollection());
        $expectedSubresources->addSubresource($toManyAssociation->getName(), $toManyAssociationSubresource);

        $this->assertEquals(
            ['Test\Class' => $expectedSubresources],
            $this->context->getResult()->toArray()
        );
    }

    public function testProcessForToOneAssociationForResourceWithUpdateInExcludedActions()
    {
        $resource = new ApiResource('Test\Class');
        $resource->setExcludedActions(['update']);

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());
        $resourceMetadata = new EntityMetadata();
        $toOneAssociation = new AssociationMetadata();
        $toOneAssociation->setName('association1');
        $toOneAssociation->setTargetClassName('Test\Association1Target');
        $toOneAssociation->setAcceptableTargetClassNames(['Test\Association1Target']);
        $toOneAssociation->setIsCollection(false);
        $resourceMetadata->addAssociation($toOneAssociation);

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);
        $this->context->setAccessibleResources(['Test\Association1Target']);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn($resourceMetadata);

        $this->processor->process($this->context);

        $expectedSubresources = new ApiResourceSubresources($resource->getEntityClass());
        $toOneAssociationSubresource = new ApiSubresource();
        $toOneAssociationSubresource->setTargetClassName($toOneAssociation->getTargetClassName());
        $toOneAssociationSubresource->setAcceptableTargetClassNames(
            $toOneAssociation->getAcceptableTargetClassNames()
        );
        $toOneAssociationSubresource->setIsCollection($toOneAssociation->isCollection());
        $toOneAssociationSubresource->setExcludedActions(
            ['update_relationship', 'add_relationship', 'delete_relationship']
        );
        $expectedSubresources->addSubresource($toOneAssociation->getName(), $toOneAssociationSubresource);

        $this->assertEquals(
            ['Test\Class' => $expectedSubresources],
            $this->context->getResult()->toArray()
        );
    }

    public function testProcessForToManyAssociationForResourceWithUpdateInExcludedActions()
    {
        $resource = new ApiResource('Test\Class');
        $resource->setExcludedActions(['update']);

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());
        $resourceMetadata = new EntityMetadata();
        $toManyAssociation = new AssociationMetadata();
        $toManyAssociation->setName('association1');
        $toManyAssociation->setTargetClassName('Test\Association1Target');
        $toManyAssociation->setAcceptableTargetClassNames(['Test\Association1Target']);
        $toManyAssociation->setIsCollection(true);
        $resourceMetadata->addAssociation($toManyAssociation);

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);
        $this->context->setAccessibleResources(['Test\Association1Target']);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn($resourceMetadata);

        $this->processor->process($this->context);

        $expectedSubresources = new ApiResourceSubresources($resource->getEntityClass());
        $toManyAssociationSubresource = new ApiSubresource();
        $toManyAssociationSubresource->setTargetClassName($toManyAssociation->getTargetClassName());
        $toManyAssociationSubresource->setAcceptableTargetClassNames(
            $toManyAssociation->getAcceptableTargetClassNames()
        );
        $toManyAssociationSubresource->setIsCollection($toManyAssociation->isCollection());
        $toManyAssociationSubresource->setExcludedActions(
            ['update_relationship', 'add_relationship', 'delete_relationship']
        );
        $expectedSubresources->addSubresource($toManyAssociation->getName(), $toManyAssociationSubresource);

        $this->assertEquals(
            ['Test\Class' => $expectedSubresources],
            $this->context->getResult()->toArray()
        );
    }

    /**
     * @expectedException \Oro\Bundle\ApiBundle\Exception\RuntimeException
     * @expectedExceptionMessage A metadata for "Test\Class" entity does not exist.
     */
    public function testProcessForAssociationWithoutTargetMetadata()
    {
        $resource = new ApiResource('Test\Class');
        $resource->setExcludedActions(['update']);

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn(null);

        $this->processor->process($this->context);
    }

    /**
     * @dataProvider getAssociationAsFieldDataTypeProvider
     */
    public function testProcessForAssociationThatShouldBeRepresentedAsField($dataType)
    {
        $resource = new ApiResource('Test\Class');

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());
        $resourceConfig->getDefinition()->addField('association1')->setDataType($dataType);
        $resourceMetadata = new EntityMetadata();
        $association = new AssociationMetadata();
        $association->setName('association1');
        $association->setTargetClassName('Test\Association1Target');
        $association->setAcceptableTargetClassNames(['Test\Association1Target']);
        $association->setIsCollection(false);
        $resourceMetadata->addAssociation($association);

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);
        $this->context->setAccessibleResources([]);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn($resourceMetadata);

        $this->processor->process($this->context);

        $expectedSubresources = new ApiResourceSubresources($resource->getEntityClass());

        $this->assertEquals(
            ['Test\Class' => $expectedSubresources],
            $this->context->getResult()->toArray()
        );
    }

    public function getAssociationAsFieldDataTypeProvider()
    {
        return [
            ['array'],
            ['object'],
            ['scalar'],
        ];
    }

    public function testProcessForToOneAssociationWithEmptyAcceptableTargetClassNames()
    {
        $resource = new ApiResource('Test\Class');

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());
        $resourceMetadata = new EntityMetadata();
        $toOneAssociation = new AssociationMetadata();
        $toOneAssociation->setName('association1');
        $toOneAssociation->setTargetClassName('Test\Association1Target');
        $toOneAssociation->setIsCollection(false);
        $resourceMetadata->addAssociation($toOneAssociation);

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);
        $this->context->setAccessibleResources(['Test\Association1Target']);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn($resourceMetadata);

        $this->processor->process($this->context);

        $expectedSubresources = new ApiResourceSubresources($resource->getEntityClass());
        $toOneAssociationSubresource = new ApiSubresource();
        $toOneAssociationSubresource->setTargetClassName($toOneAssociation->getTargetClassName());
        $toOneAssociationSubresource->setAcceptableTargetClassNames(
            $toOneAssociation->getAcceptableTargetClassNames()
        );
        $toOneAssociationSubresource->setIsCollection($toOneAssociation->isCollection());
        $toOneAssociationSubresource->setExcludedActions(
            ['add_relationship', 'delete_relationship']
        );
        $expectedSubresources->addSubresource($toOneAssociation->getName(), $toOneAssociationSubresource);

        $this->assertEquals(
            ['Test\Class' => $expectedSubresources],
            $this->context->getResult()->toArray()
        );
    }

    public function testProcessForToManyAssociationWithEmptyAcceptableTargetClassNames()
    {
        $resource = new ApiResource('Test\Class');

        $resourceConfig = new Config();
        $resourceConfig->setDefinition(new EntityDefinitionConfig());
        $resourceMetadata = new EntityMetadata();
        $toManyAssociation = new AssociationMetadata();
        $toManyAssociation->setName('association1');
        $toManyAssociation->setTargetClassName('Test\Association1Target');
        $toManyAssociation->setIsCollection(true);
        $resourceMetadata->addAssociation($toManyAssociation);

        $this->context->getRequestType()->add(RequestType::REST);
        $this->context->setVersion('1.1');
        $this->context->setResources([$resource]);
        $this->context->setAccessibleResources(['Test\Association1Target']);

        $this->configProvider->expects($this->once())
            ->method('getConfig')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                [new EntityDefinitionConfigExtra()]
            )
            ->willReturn($resourceConfig);
        $this->metadataProvider->expects($this->once())
            ->method('getMetadata')
            ->with(
                $resource->getEntityClass(),
                $this->context->getVersion(),
                $this->context->getRequestType(),
                $resourceConfig->getDefinition(),
                [],
                true
            )
            ->willReturn($resourceMetadata);

        $this->processor->process($this->context);

        $expectedSubresources = new ApiResourceSubresources($resource->getEntityClass());
        $toManyAssociationSubresource = new ApiSubresource();
        $toManyAssociationSubresource->setTargetClassName($toManyAssociation->getTargetClassName());
        $toManyAssociationSubresource->setAcceptableTargetClassNames(
            $toManyAssociation->getAcceptableTargetClassNames()
        );
        $toManyAssociationSubresource->setIsCollection($toManyAssociation->isCollection());
        $toManyAssociationSubresource->setExcludedActions(
            []
        );
        $expectedSubresources->addSubresource($toManyAssociation->getName(), $toManyAssociationSubresource);

        $this->assertEquals(
            ['Test\Class' => $expectedSubresources],
            $this->context->getResult()->toArray()
        );
    }
}

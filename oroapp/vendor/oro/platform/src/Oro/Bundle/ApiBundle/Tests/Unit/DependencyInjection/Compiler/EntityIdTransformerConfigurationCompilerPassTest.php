<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

use Oro\Bundle\ApiBundle\DependencyInjection\Compiler\EntityIdTransformerConfigurationCompilerPass;
use Oro\Bundle\ApiBundle\Request\EntityIdTransformerRegistry;

class EntityIdTransformerConfigurationCompilerPassTest extends \PHPUnit_Framework_TestCase
{
    /** @var EntityIdTransformerConfigurationCompilerPass */
    private $compiler;

    /** @var ContainerBuilder */
    private $container;

    /** @var Definition */
    private $registry;

    protected function setUp()
    {
        $this->container = new ContainerBuilder();
        $this->compiler = new EntityIdTransformerConfigurationCompilerPass();

        $this->registry = $this->container->setDefinition(
            EntityIdTransformerConfigurationCompilerPass::TRANSFORMER_REGISTRY_SERVICE_ID,
            new Definition(EntityIdTransformerRegistry::class, [[]])
        );
    }

    public function testProcessWhenNoDataTransformers()
    {
        $this->compiler->process($this->container);

        self::assertEquals([], $this->registry->getArgument(0));
    }

    public function testProcess()
    {
        $transformer1 = $this->container->setDefinition('transformer1', new Definition());
        $transformer1->addTag(
            EntityIdTransformerConfigurationCompilerPass::TRANSFORMER_TAG,
            ['requestType' => 'rest']
        );
        $transformer2 = $this->container->setDefinition('transformer2', new Definition());
        $transformer2->addTag(
            EntityIdTransformerConfigurationCompilerPass::TRANSFORMER_TAG,
            ['priority' => -10]
        );
        $transformer2->addTag(
            EntityIdTransformerConfigurationCompilerPass::TRANSFORMER_TAG,
            ['requestType' => 'json_api', 'priority' => 10]
        );

        $this->compiler->process($this->container);

        self::assertEquals(
            [
                [new Reference('transformer2'), 'json_api'],
                [new Reference('transformer1'), 'rest'],
                [new Reference('transformer2'), null]
            ],
            $this->registry->getArgument(0)
        );
    }
}

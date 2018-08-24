<?php

namespace Oro\Bundle\ApiBundle\Tests\Unit\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

use Oro\Bundle\ApiBundle\DependencyInjection\Compiler\ErrorCompleterConfigurationCompilerPass;
use Oro\Bundle\ApiBundle\Request\ErrorCompleterRegistry;

class ErrorCompleterConfigurationCompilerPassTest extends \PHPUnit_Framework_TestCase
{
    /** @var ErrorCompleterConfigurationCompilerPass */
    private $compiler;

    /** @var ContainerBuilder */
    private $container;

    /** @var Definition */
    private $registry;

    protected function setUp()
    {
        $this->container = new ContainerBuilder();
        $this->compiler = new ErrorCompleterConfigurationCompilerPass();

        $this->registry = $this->container->setDefinition(
            ErrorCompleterConfigurationCompilerPass::ERROR_COMPLETER_REGISTRY_SERVICE_ID,
            new Definition(ErrorCompleterRegistry::class, [[]])
        );
    }

    public function testProcessWhenNoDataTransformers()
    {
        $this->compiler->process($this->container);

        self::assertEquals([], $this->registry->getArgument(0));
    }

    public function testProcess()
    {
        $errorCompleter1 = $this->container->setDefinition('error_completer1', new Definition());
        $errorCompleter1->addTag(
            ErrorCompleterConfigurationCompilerPass::ERROR_COMPLETER_TAG,
            ['requestType' => 'rest']
        );
        $errorCompleter2 = $this->container->setDefinition('error_completer2', new Definition());
        $errorCompleter2->addTag(
            ErrorCompleterConfigurationCompilerPass::ERROR_COMPLETER_TAG,
            ['priority' => -10]
        );
        $errorCompleter2->addTag(
            ErrorCompleterConfigurationCompilerPass::ERROR_COMPLETER_TAG,
            ['requestType' => 'json_api', 'priority' => 10]
        );

        $this->compiler->process($this->container);

        self::assertEquals(
            [
                ['error_completer2', 'json_api'],
                ['error_completer1', 'rest'],
                ['error_completer2', null]
            ],
            $this->registry->getArgument(0)
        );
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\LogicException
     * @expectedExceptionMessage The error completer service "error_completer1" should be public.
     */
    public function testProcessWhenErrorCompleterIsNotPublic()
    {
        $errorCompleter1 = $this->container->setDefinition('error_completer1', new Definition());
        $errorCompleter1->setPublic(false);
        $errorCompleter1->addTag(
            ErrorCompleterConfigurationCompilerPass::ERROR_COMPLETER_TAG,
            ['requestType' => 'rest']
        );

        $this->compiler->process($this->container);
    }
}

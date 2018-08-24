<?php

namespace Oro\Bundle\ActionBundle\Tests\Unit;

use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use Oro\Bundle\ActionBundle\OroActionBundle;

class OroActionBundleTest extends \PHPUnit_Framework_TestCase
{
    public function testBuild()
    {
        /** @var ContainerBuilder|\PHPUnit_Framework_MockObject_MockObject $containerBuilder */
        $containerBuilder = $this->getMockBuilder('Symfony\Component\DependencyInjection\ContainerBuilder')
            ->disableOriginalConstructor()
            ->setMethods(['addCompilerPass'])
            ->getMock();

        $compilerPasses = [
            [
                'class' => 'Oro\Bundle\ActionBundle\DependencyInjection\CompilerPass\ConditionPass',
                'type' => PassConfig::TYPE_AFTER_REMOVING
            ],
            [
                'class' => 'Oro\Bundle\ActionBundle\DependencyInjection\CompilerPass\ActionPass',
                'type' => PassConfig::TYPE_AFTER_REMOVING
            ],
            [
                'class' => 'Oro\Bundle\ActionBundle\DependencyInjection\CompilerPass\MassActionProviderPass',
                'type' => PassConfig::TYPE_AFTER_REMOVING
            ],
            [
                'class' => 'Oro\Bundle\ActionBundle\DependencyInjection\CompilerPass\ButtonProviderPass',
                'type' => PassConfig::TYPE_AFTER_REMOVING
            ],
            [
                'class' => 'Oro\Bundle\ActionBundle\DependencyInjection\CompilerPass\DoctrineTypeMappingProviderPass',
                'type' => PassConfig::TYPE_BEFORE_OPTIMIZATION
            ],
            [
                'class' => 'Oro\Bundle\ActionBundle\DependencyInjection\CompilerPass\OperationRegistryFilterPass',
                'type' => PassConfig::TYPE_BEFORE_OPTIMIZATION
            ],
        ];

        foreach ($compilerPasses as $index => $data) {
            $containerBuilder->expects($this->at($index))
                ->method('addCompilerPass')
                ->with(
                    $this->isInstanceOf($data['class']),
                    $data['type']
                );
        }

        $bundle = new OroActionBundle();
        $bundle->build($containerBuilder);
    }
}

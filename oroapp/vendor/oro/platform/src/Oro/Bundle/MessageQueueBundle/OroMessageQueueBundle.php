<?php

namespace Oro\Bundle\MessageQueueBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

use Oro\Component\MessageQueue\DependencyInjection\DbalTransportFactory;
use Oro\Component\MessageQueue\DependencyInjection\DefaultTransportFactory;
use Oro\Component\MessageQueue\DependencyInjection\NullTransportFactory;
use Oro\Component\MessageQueue\Job\Topics;

use Oro\Bundle\MessageQueueBundle\DependencyInjection\Compiler\AddTopicMetaPass;
use Oro\Bundle\MessageQueueBundle\DependencyInjection\Compiler\BuildDestinationMetaRegistryPass;
use Oro\Bundle\MessageQueueBundle\DependencyInjection\Compiler\BuildExtensionsPass;
use Oro\Bundle\MessageQueueBundle\DependencyInjection\Compiler\BuildMessageProcessorRegistryPass;
use Oro\Bundle\MessageQueueBundle\DependencyInjection\Compiler\BuildMessageToArrayConverterPass;
use Oro\Bundle\MessageQueueBundle\DependencyInjection\Compiler\BuildRouteRegistryPass;
use Oro\Bundle\MessageQueueBundle\DependencyInjection\Compiler\BuildTopicMetaSubscribersPass;
use Oro\Bundle\MessageQueueBundle\DependencyInjection\Compiler\ConfigureClearersPass;
use Oro\Bundle\MessageQueueBundle\DependencyInjection\Compiler\ConfigureDbalTransportExtensionsPass;
use Oro\Bundle\MessageQueueBundle\DependencyInjection\Compiler\MakeAnnotationReaderServicesPersistentPass;
use Oro\Bundle\MessageQueueBundle\DependencyInjection\Compiler\MakeLoggerServicesPersistentPass;
use Oro\Bundle\MessageQueueBundle\DependencyInjection\OroMessageQueueExtension;

class OroMessageQueueBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ConfigureDbalTransportExtensionsPass());
        $container->addCompilerPass(new BuildExtensionsPass());
        $container->addCompilerPass(new BuildRouteRegistryPass());
        $container->addCompilerPass(new BuildMessageProcessorRegistryPass());
        $container->addCompilerPass(new BuildTopicMetaSubscribersPass());
        $container->addCompilerPass(new BuildDestinationMetaRegistryPass());
        $container->addCompilerPass(new BuildMessageToArrayConverterPass());
        $container->addCompilerPass(new ConfigureClearersPass());
        $container->addCompilerPass(new MakeLoggerServicesPersistentPass());
        $container->addCompilerPass(new MakeAnnotationReaderServicesPersistentPass());

        /** @var OroMessageQueueExtension $extension */
        $extension = $container->getExtension('oro_message_queue');
        $extension->addTransportFactory(new DefaultTransportFactory());
        $extension->addTransportFactory(new NullTransportFactory());
        $extension->addTransportFactory(new DbalTransportFactory());

        $addTopicPass = AddTopicMetaPass::create()
            ->add(Topics::CALCULATE_ROOT_JOB_STATUS, 'Calculate root job status')
            ->add(Topics::ROOT_JOB_STOPPED, 'Root job stopped');
        $container->addCompilerPass($addTopicPass);
    }
}

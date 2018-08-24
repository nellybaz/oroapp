<?php

namespace Oro\Bundle\MessageQueueBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use Oro\Component\MessageQueue\Client\TopicSubscriberInterface;

class BuildMessageProcessorRegistryPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $processorTagName = 'oro_message_queue.client.message_processor';
        $processorRegistryId = 'oro_message_queue.client.message_processor_registry';

        if (!$container->hasDefinition($processorRegistryId)) {
            return;
        }

        $processorIds = [];
        foreach ($container->findTaggedServiceIds($processorTagName) as $serviceId => $tagAttributes) {
            $class = $container->getDefinition($serviceId)->getClass();
            if (is_subclass_of($class, TopicSubscriberInterface::class)) {
                $this->addConfigsFromTopicSubscriber($processorIds, $class, $serviceId);
            } else {
                $this->addConfigsFromTags($processorIds, $tagAttributes, $serviceId, $processorTagName);
            }
        }

        $processorRegistryDef = $container->getDefinition($processorRegistryId);
        $processorRegistryDef->replaceArgument(0, $processorIds);
    }

    /**
     * @param array  $processorIds
     * @param string $class
     * @param string $serviceId
     */
    protected function addConfigsFromTopicSubscriber(&$processorIds, $class, $serviceId)
    {
        foreach ($class::getSubscribedTopics() as $topicName => $params) {
            if (is_string($params)) {
                $processorIds[$serviceId] = $serviceId;
            } elseif (is_array($params)) {
                $processorName = empty($params['processorName']) ? $serviceId : $params['processorName'];

                $processorIds[$processorName] = $serviceId;
            } else {
                throw new \LogicException(sprintf(
                    'Topic subscriber configuration is invalid. "%s"',
                    json_encode($class::getSubscribedTopics())
                ));
            }
        }
    }

    /**
     * @param array  $processorIds
     * @param array  $tagAttributes
     * @param string $serviceId
     * @param string $processorTagName
     */
    protected function addConfigsFromTags(&$processorIds, $tagAttributes, $serviceId, $processorTagName)
    {
        foreach ($tagAttributes as $tagAttribute) {
            if (!isset($tagAttribute['topicName']) || !$tagAttribute['topicName']) {
                throw new \LogicException(sprintf(
                    'Topic name is not set but it is required. service: "%s", tag: "%s"',
                    $serviceId,
                    $processorTagName
                ));
            }

            $processorName = empty($tagAttribute['processorName']) ? $serviceId : $tagAttribute['processorName'];

            $processorIds[$processorName] = $serviceId;
        }
    }
}

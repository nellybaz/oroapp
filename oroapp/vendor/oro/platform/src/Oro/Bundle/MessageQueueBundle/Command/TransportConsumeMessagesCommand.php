<?php

namespace Oro\Bundle\MessageQueueBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Oro\Component\MessageQueue\Consumption\ConsumeMessagesCommand;
use Oro\Component\MessageQueue\Consumption\Extension\LoggerExtension;
use Oro\Component\MessageQueue\Consumption\ExtensionInterface;
use Oro\Component\MessageQueue\Consumption\QueueConsumer;

use Oro\Bundle\MessageQueueBundle\Consumption\Extension\ChainExtension;
use Oro\Bundle\MessageQueueBundle\Log\ConsumerState;

class TransportConsumeMessagesCommand extends ConsumeMessagesCommand
{
    /**
     * {@inheritdoc}
     */
    protected function consume(QueueConsumer $consumer, ExtensionInterface $extension)
    {
        $consumerState = $this->getConsumerState();
        $consumerState->startConsumption();
        try {
            parent::consume($consumer, $extension);
        } finally {
            $consumerState->stopConsumption();
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function getConsumerExtension(array $extensions)
    {
        return new ChainExtension($extensions, $this->getConsumerState());
    }

    /**
     * {@inheritdoc}
     */
    protected function getLoggerExtension(InputInterface $input, OutputInterface $output)
    {
        return new LoggerExtension($this->container->get('logger'));
    }

    /**
     * @return ConsumerState
     */
    protected function getConsumerState()
    {
        return $this->container->get('oro_message_queue.log.consumer_state');
    }
}

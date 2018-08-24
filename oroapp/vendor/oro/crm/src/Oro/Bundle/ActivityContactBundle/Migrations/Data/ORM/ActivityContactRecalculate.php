<?php

namespace Oro\Bundle\ActivityContactBundle\Migrations\Data\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use Oro\Bundle\ActivityContactBundle\Command\ActivityContactRecalculateCommand;
use Oro\Bundle\CronBundle\Async\Topics;

use Oro\Component\MessageQueue\Client\MessageProducerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ActivityContactRecalculate extends AbstractFixture implements ContainerAwareInterface
{
    /** @var ContainerInterface */
    protected $container;

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        /** @var MessageProducerInterface $producer */
        $producer = $this->container->get('oro_message_queue.client.message_producer');
        $producer->send(Topics::RUN_COMMAND, [
            'command' => ActivityContactRecalculateCommand::COMMAND_NAME,
            'arguments' => ['-v' => 1, '--disabled-listeners' => ['all']]
        ]);
    }
}

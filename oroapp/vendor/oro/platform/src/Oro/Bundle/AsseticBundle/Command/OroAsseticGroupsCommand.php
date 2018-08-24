<?php

namespace Oro\Bundle\AsseticBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

use Oro\Bundle\AsseticBundle\AssetsConfiguration;

class OroAsseticGroupsCommand extends ContainerAwareCommand
{
    /**
     * @var AssetsConfiguration
     */
    protected $assetsConfiguration;

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('oro:assetic:groups')
            ->setDescription('Information about oro assetics');
    }

    /**
     * {@inheritdoc}
     */
    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $this->assetsConfiguration = $this->getContainer()->get('oro_assetic.configuration');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Get list of css groups');

        $cssGroups = $this->assetsConfiguration->getCssGroups();
        $debugGroups = $this->assetsConfiguration->getCssDebugGroups();

        $output->writeln('');
        $output->writeln('<comment>CSS</comment> groups:');
        $this->writeGroups($cssGroups, $debugGroups, $output);
    }

    /**
     * @param array $groups
     * @param array $debugGroups
     * @param OutputInterface $output
     */
    protected function writeGroups(array $groups, array $debugGroups, OutputInterface $output)
    {
        foreach ($groups as $group) {
            if (in_array($group, $debugGroups)) {
                $output->writeln(
                    sprintf(
                        '<comment>%s</comment> (debug)',
                        $group
                    )
                );
            } else {
                $output->writeln(
                    sprintf(
                        '<info>%s</info>',
                        $group
                    )
                );
            }
        }
    }
}

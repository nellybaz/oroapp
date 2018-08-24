<?php

namespace Oro\Bundle\SEOBundle\Tests\Functional\Command;

use Oro\Bundle\CronBundle\Entity\Repository\ScheduleRepository;
use Oro\Bundle\CronBundle\Entity\Schedule;
use Oro\Bundle\MessageQueueBundle\Test\Functional\MessageQueueExtension;
use Oro\Bundle\SEOBundle\Async\Topics;
use Oro\Bundle\SEOBundle\Command\GenerateSitemapCommand;
use Oro\Bundle\SEOBundle\DependencyInjection\Configuration;
use Oro\Bundle\SEOBundle\EventListener\UpdateCronDefinitionConfigListener;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;

class GenerateSitemapCommandTest extends WebTestCase
{
    use MessageQueueExtension;

    protected function setUp()
    {
        $this->initClient();
    }

    public function testCommand()
    {
        self::runCommand(GenerateSitemapCommand::NAME, []);

        $traces = self::getMessageCollector()->getTopicSentMessages(Topics::GENERATE_SITEMAP);
        $this->assertCount(1, $traces);
        $this->assertEquals(['topic' => Topics::GENERATE_SITEMAP, 'message' => ''], $traces[0]);
    }

    public function testGetDefaultDefinitions()
    {
        /** @var ScheduleRepository $repo */
        $repo = $this->getContainer()->get('oro_entity.doctrine_helper')->getEntityRepositoryForClass(Schedule::class);
        /** @var Schedule $commandSchedule */
        $commandSchedule = $repo->findOneBy(['command' => GenerateSitemapCommand::NAME]);
        $this->assertNotEmpty($commandSchedule);
        $this->assertSame(Configuration::DEFAULT_CRON_DEFINITION, $commandSchedule->getDefinition());

        $configManager = $this->getContainer()->get('oro_config.manager');
        $configManager->set(UpdateCronDefinitionConfigListener::CONFIG_FIELD, '0 0 0 0 *');
        $configManager->flush();
        self::runCommand('oro:cron:definitions:load', []);

        $commandSchedule = $repo->findOneBy(['command' => GenerateSitemapCommand::NAME]);
        $this->assertSame('0 0 0 0 *', $commandSchedule->getDefinition());
    }
}

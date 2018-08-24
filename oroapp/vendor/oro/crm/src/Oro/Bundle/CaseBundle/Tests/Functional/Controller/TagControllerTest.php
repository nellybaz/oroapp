<?php

namespace Oro\Bundle\CaseBundle\Tests\Functional;

use Oro\Bundle\CaseBundle\Tests\Functional\DataFixtures\LoadCaseMailboxSettingsData;
use Oro\Bundle\TagBundle\Entity\Tag;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\CaseBundle\Entity\CaseMailboxProcessSettings;

/**
 * @dbIsolationPerTest
 */
class TagControllerTest extends WebTestCase
{
    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());

        $this->loadFixtures([
            LoadCaseMailboxSettingsData::class,
        ]);

        $this->client->useHashNavigation(true);
    }

    public function testSearch()
    {
        /** @var CaseMailboxProcessSettings $processSettings */
        $processSettings = $this->getReference(LoadCaseMailboxSettingsData::PROCESS_SETTINGS);
        $this->getContainer()->get('oro_tag.tag.manager')->loadTagging(
            $processSettings,
            $processSettings->getOwner()->getOrganization()
        );

        /** @var Tag $tag */
        $tag = $processSettings->getTags()->first();

        $this->client->request('GET', $this->getUrl('oro_tag_search', ['id' => $tag->getId()]));
        $response = $this->client->getResponse();

        static::assertResponseStatusCodeEquals($response, 200);

        static::assertContains($processSettings->getMailbox()->getLabel(), $response->getContent());
    }
}

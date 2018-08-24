<?php

namespace Oro\Bundle\WebsiteBundle\Tests\Functional\Entity\Repository;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\WebsiteBundle\Entity\Repository\WebsiteRepository;
use Oro\Bundle\WebsiteBundle\Entity\Website;
use Oro\Bundle\WebsiteBundle\Tests\Functional\DataFixtures\LoadWebsiteData;

class WebsiteRepositoryTest extends WebTestCase
{
    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);
        $this->loadFixtures([LoadWebsiteData::class]);
    }

    /**
     * @param array $expectedData
     *
     * @dataProvider getAllWebsitesProvider
     */
    public function testGetAllWebsites(array $expectedData)
    {
        $websites = $this->getRepository()->getAllWebsites();
        foreach ($websites as $key => $website) {
            static::assertEquals($key, $website->getId());
        }
        $websites = array_map(
            function (Website $website) {
                return $website->getName();
            },
            $websites
        );
        $this->assertEquals($expectedData, array_values($websites));
    }

    /**
     * @return array
     */
    public function getAllWebsitesProvider()
    {
        return [
            [
                'expected' => [
                    'Default',
                    'US',
                    'Canada',
                    'CA'
                ],
            ],
        ];
    }

    public function testGetDefaultWebsite()
    {
        $defaultWebsite = $this->getRepository()->getDefaultWebsite();
        $this->assertEquals('Default', $defaultWebsite->getName());
    }

    /**
     * @dataProvider getAllWebsitesProvider
     *
     * @param array $expectedWebsiteNames
     */
    public function testBatchIterator(array $expectedWebsiteNames)
    {
        $websitesIterator = $this->getRepository()->getBatchIterator();

        $websiteNames = [];
        foreach ($websitesIterator as $website) {
            $websiteNames[] = $website->getName();
        }

        $this->assertEquals($expectedWebsiteNames, $websiteNames);
    }

    /**
     * @dataProvider getAllWebsitesProvider
     * @param array $websites
     */
    public function testGetWebsiteIdentifiers(array $websites)
    {
        $websites = array_map(
            function ($websiteReference) {
                if ($websiteReference === 'Default') {
                    return $this->getRepository()->getDefaultWebsite()->getId();
                } else {
                    return $this->getReference($websiteReference)->getId();
                }
            },
            $websites
        );
        $this->assertEquals($websites, $this->getRepository()->getWebsiteIdentifiers());
    }

    /**
     * @return WebsiteRepository
     */
    protected function getRepository()
    {
        return $this->getContainer()->get('doctrine')->getRepository(
            $this->getContainer()->getParameter('oro_website.entity.website.class')
        );
    }

    public function testCheckWebsiteExists()
    {
        $website = $this->getReference(LoadWebsiteData::WEBSITE1);
        $result = $this->getRepository()->checkWebsiteExists($website->getId());
        $this->assertNotEmpty($result);
    }
}

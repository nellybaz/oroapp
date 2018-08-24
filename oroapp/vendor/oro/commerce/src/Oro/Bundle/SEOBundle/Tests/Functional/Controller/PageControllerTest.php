<?php

namespace Oro\Bundle\SEOBundle\Tests\Functional\Controller;

use Doctrine\ORM\EntityRepository;
use Oro\Bundle\CMSBundle\Tests\Functional\DataFixtures\LoadPageData;
use Oro\Bundle\SEOBundle\Tests\Functional\DataFixtures\LoadPageMetaData;
use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Crawler;

class PageControllerTest extends WebTestCase
{
    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);
        $this->loadFixtures([LoadPageData::class]);
    }

    public function testViewLandingPage()
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_cms_page_view', ['id' => $this->getPageId()]));

        $this->checkSeoSectionExistence($crawler);
    }

    public function testEditLandingPage()
    {
        $this->markTestSkipped('Due to BB-7722');
        $crawler = $this->client->request('GET', $this->getUrl('oro_cms_page_update', ['id' => $this->getPageId()]));

        $this->checkSeoSectionExistence($crawler);

        $crfToken = $this->getContainer()->get('security.csrf.token_manager')->getToken('category');
        $parameters = [
            'input_action' => 'save_and_stay',
            'oro_catalog_category' => ['_token' => $crfToken],
        ];
        $parameters['oro_cms_page']['metaTitles']['values']['default'] = LoadPageMetaData::META_TITLES;
        $parameters['oro_cms_page']['metaDescriptions']['values']['default'] = LoadPageMetaData::META_DESCRIPTIONS;
        $parameters['oro_cms_page']['metaKeywords']['values']['default'] = LoadPageMetaData::META_KEYWORDS;

        $form = $crawler->selectButton('Save')->form();

        $this->client->followRedirects(true);
        $crawler = $this->client->request($form->getMethod(), $form->getUri(), $parameters);
        $result = $this->client->getResponse();

        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $html = $crawler->html();

        $this->assertContains(LoadPageMetaData::META_TITLES, $html);
        $this->assertContains(LoadPageMetaData::META_DESCRIPTIONS, $html);
        $this->assertContains(LoadPageMetaData::META_KEYWORDS, $html);
    }

    /**
     * @return int|null
     */
    protected function getPageId()
    {
        return $this->getReference(LoadPageData::PAGE_1)->getId();
    }

    /**
     * @param Crawler $crawler
     */
    public function checkSeoSectionExistence(Crawler $crawler)
    {
        $result = $this->client->getResponse();

        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains('SEO', $crawler->filter('.nav')->html());
        $this->assertContains('Meta title', $crawler->html());
        $this->assertContains('Meta description', $crawler->html());
        $this->assertContains('Meta keywords', $crawler->html());
    }
}

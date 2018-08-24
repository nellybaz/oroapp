<?php

namespace Oro\Bundle\CMSBundle\Tests\Functional\Controller;

use Symfony\Component\DomCrawler\Crawler;

use Oro\Bundle\TestFrameworkBundle\Test\WebTestCase;
use Oro\Bundle\CMSBundle\Entity\LoginPage;

class LoginPageControllerTest extends WebTestCase
{
    const TOP_CONTENT = 'html top content';
    const BOTTOM_CONTENT = 'html bottom content';
    const CSS = 'css styles';

    const TOP_CONTENT_UPDATE = 'html top content update';
    const BOTTOM_CONTENT_UPDATE = 'html bottom content update';
    const CSS_UPDATE = 'css styles update';

    const LOGIN_PAGE_ID = 1;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->initClient([], $this->generateBasicAuthHeader());
        $this->client->useHashNavigation(true);
    }

    public function testIndex()
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_cms_loginpage_index'));
        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $this->assertContains('cms-login-page-grid', $crawler->html());
        $this->assertEquals('Customer Login Pages', $crawler->filter('h1.oro-subtitle')->html());
        $this->assertNotContains('Create Login Page', $crawler->filter('div.title-buttons-container')->html());
    }

    /**
     * @return int
     */
    public function testCreate()
    {
        $crawler = $this->client->request('GET', $this->getUrl('oro_cms_loginpage_create'));

        $this->assertLoginPageSave($crawler, static::TOP_CONTENT, static::BOTTOM_CONTENT, static::CSS);

        /** @var LoginPage $page */
        $page = $this->getContainer()->get('doctrine')
            ->getManagerForClass('OroCMSBundle:LoginPage')
            ->getRepository('OroCMSBundle:LoginPage')
            ->findOneBy(['id' => static::LOGIN_PAGE_ID]);
        $this->assertNotEmpty($page);

        return $page->getId();
    }

    /**
     * @param int
     * @depends testCreate
     */
    public function testUpdate($id)
    {
        $crawler = $this->client->request(
            'GET',
            $this->getUrl('oro_cms_loginpage_update', ['id' => $id])
        );

        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        $this->assertLoginPageSave(
            $crawler,
            static::TOP_CONTENT_UPDATE,
            static::BOTTOM_CONTENT_UPDATE,
            static::CSS_UPDATE
        );

        return $id;
    }

    /**
     * @depends testUpdate
     * @param int $id
     */
    public function testView($id)
    {
        $crawler = $this->client->request(
            'GET',
            $this->getUrl('oro_cms_loginpage_view', ['id' => $id])
        );

        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);
        $html = $crawler->html();

        $this->assertContains(static::TOP_CONTENT_UPDATE, $html);
        $this->assertContains(static::BOTTOM_CONTENT_UPDATE, $html);
        $this->assertContains(static::CSS_UPDATE, $html);
    }

    /**
     * @param Crawler $crawler
     * @param string $topContent
     * @param string $bottomContent
     * @param string $css
     */
    protected function assertLoginPageSave(Crawler $crawler, $topContent, $bottomContent, $css)
    {
        $form = $crawler->selectButton('Save and Close')->form();

        $form['oro_cms_login_page[topContent]'] = $topContent;
        $form['oro_cms_login_page[bottomContent]'] = $bottomContent;
        $form['oro_cms_login_page[css]'] = $css;

        $this->client->followRedirects(true);
        $crawler = $this->client->submit($form);

        $result = $this->client->getResponse();
        $this->assertHtmlResponseStatusCodeEquals($result, 200);

        $html = $crawler->html();
        $this->assertContains('Login form has been saved', $html);
        $this->assertContains($topContent, $html);
        $this->assertContains($bottomContent, $html);
        $this->assertContains($css, $html);
    }
}

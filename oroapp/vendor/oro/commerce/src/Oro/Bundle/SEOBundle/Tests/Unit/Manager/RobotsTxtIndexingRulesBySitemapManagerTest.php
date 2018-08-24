<?php

namespace Oro\Bundle\SEOBundle\Tests\Unit\Manager;

use Oro\Bundle\ConfigBundle\Config\ConfigManager;
use Oro\Bundle\SEOBundle\Manager\RobotsTxtFileManager;
use Oro\Bundle\SEOBundle\Manager\RobotsTxtIndexingRulesBySitemapManager;
use Oro\Bundle\SEOBundle\Sitemap\Provider\UrlItemsProviderRegistryInterface;
use Oro\Component\SEO\Model\DTO\UrlItemInterface;
use Oro\Component\SEO\Provider\UrlItemsProviderInterface;
use Oro\Component\Website\WebsiteInterface;

class RobotsTxtIndexingRulesBySitemapManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RobotsTxtFileManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $robotsTxtFileManager;

    /**
     * @var ConfigManager|\PHPUnit_Framework_MockObject_MockObject
     */
    private $configManager;

    /**
     * @var UrlItemsProviderRegistryInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $itemsProviderRegistry;

    /**
     * @var RobotsTxtIndexingRulesBySitemapManager
     */
    private $robotsTxtIndexingRulesBySitemapManager;

    protected function setUp()
    {
        $this->robotsTxtFileManager = $this->createMock(RobotsTxtFileManager::class);
        $this->configManager = $this->createMock(ConfigManager::class);
        $this->itemsProviderRegistry = $this->createMock(UrlItemsProviderRegistryInterface::class);
        $this->robotsTxtIndexingRulesBySitemapManager = new RobotsTxtIndexingRulesBySitemapManager(
            $this->robotsTxtFileManager,
            $this->configManager,
            $this->itemsProviderRegistry
        );
    }

    /**
     * @dataProvider onConfigUpdateDataProvider
     *
     * @param bool   $isAccessEnabled
     * @param string $url
     * @param string $content
     * @param string $contentResult
     */
    public function testFlush(
        $isAccessEnabled,
        $url,
        $content,
        $contentResult
    ) {
        $website = $this->createMock(WebsiteInterface::class);
        $version = '1';
        $urlItem = $this->createMock(UrlItemInterface::class);
        $urlItem
            ->expects(static::any())
            ->method('getLocation')
            ->willReturn($url);

        $provider = $this->createMock(UrlItemsProviderInterface::class);
        $provider
            ->expects(static::any())
            ->method('getUrlItems')
            ->willReturn([$urlItem]);

        $this->robotsTxtFileManager
            ->expects(static::any())
            ->method('getContent')
            ->willReturn($content);

        $this->robotsTxtFileManager
            ->expects(static::any())
            ->method('dumpContent')
            ->with($this->equalTo($contentResult));

        $this->configManager
            ->expects(static::once())
            ->method('get')
            ->with('oro_frontend.guest_access_enabled', false, false, $website)
            ->willReturn($isAccessEnabled);

        $this->itemsProviderRegistry
            ->expects(static::any())
            ->method('getProvidersIndexedByNames')
            ->willReturn(['provider1' => $provider]);

        $this->robotsTxtIndexingRulesBySitemapManager->flush($website, $version);
    }

    /**
     * @return array
     */
    public function onConfigUpdateDataProvider()
    {
        return [
            'access disabled' => [
                'isAccessEnabled' => false,
                'url' => 'http://test-domain.com/test-url',
                'content' => 'Allow: /test-url2',
                'contentResult' => 'Allow: /test-url2
User-Agent: * # auto-generated
Allow: /test-url # auto-generated
Disallow: / # auto-generated'
            ],
            'access enabled' => [
                'isAccessEnabled' => true,
                'url' => 'http://test-domain.com/test-url',
                'content' => 'Allow: /test-url # auto-generated',
                'contentResult' => ''
            ],
            'updates with several lines' => [
                'isAccessEnabled' => false,
                'url' => 'http://test-domain.com/test/url/2',
                'content' => 'Allow: /test-url
Allow: /test/url/2 # auto-generated
Disallow: / # auto-generated',
                'contentResult' => 'Allow: /test-url
User-Agent: * # auto-generated
Allow: /test/url/2 # auto-generated
Disallow: / # auto-generated'
            ],
        ];
    }
}

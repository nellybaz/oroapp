<?php

namespace Oro\Bundle\SEOBundle\Tests\Unit\Sitemap\Provider;

use Symfony\Component\Routing\Router;

use Oro\Component\Website\WebsiteInterface;
use Oro\Bundle\SEOBundle\Model\DTO\UrlItem;
use Oro\Bundle\SEOBundle\Sitemap\Provider\RouterSitemapUrlsProvider;
use Oro\Bundle\RedirectBundle\Generator\CanonicalUrlGenerator;

class SitemapLoginUrlsProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Router|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $router;

    /**
     * @var CanonicalUrlGenerator|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $canonicalUrlGenerator;

    /**
     * @var array
     */
    protected $routes = [
        "oro_customer_customer_user_security_login",
        "oro_customer_frontend_customer_user_reset_request",
        "oro_customer_frontend_customer_user_register"
    ];

    /**
     * @var RouterSitemapUrlsProvider
     */
    private $sitemapLoginUrlsProvider;

    protected function setUp()
    {
        $this->router = $this->createMock(Router::class);
        $this->canonicalUrlGenerator = $this->createMock(CanonicalUrlGenerator::class);

        $this->sitemapLoginUrlsProvider = new RouterSitemapUrlsProvider(
            $this->router,
            $this->canonicalUrlGenerator,
            $this->routes
        );
    }

    public function testGetUrlItems()
    {
        /** @var WebsiteInterface|\PHPUnit_Framework_MockObject_MockObject $website */
        $website = $this->createMock(WebsiteInterface::class);
        $version = '1';
        $url = '/sitemaps/1/actual/test.xml';
        $absoluteUrl = 'http://test.com/sitemaps/1/actual/test.xml';
        $this->router->expects(static::any())
            ->method('generate')
            ->willReturn($url);
        $this->canonicalUrlGenerator->expects(static::any())
            ->method('getAbsoluteUrl')
            ->with($url, $website)
            ->willReturn($absoluteUrl);

        $actual = iterator_to_array($this->sitemapLoginUrlsProvider->getUrlItems($website, $version));
        $this->assertCount(3, $actual);
        /** @var UrlItem $urlItem */
        $urlItem = reset($actual);
        $this->assertInstanceOf(UrlItem::class, $urlItem);
        $this->assertEquals($absoluteUrl, $urlItem->getLocation());
        $this->assertEmpty($urlItem->getPriority());
        $this->assertEmpty($urlItem->getChangeFrequency());
    }
}

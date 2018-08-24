<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Provider;

use Oro\Bundle\EntityBundle\Fallback\EntityFallbackResolver;
use Oro\Bundle\ProductBundle\Provider\PageTemplateProvider;
use Oro\Bundle\ProductBundle\Tests\Unit\Entity\Stub\Product;
use Oro\Component\Layout\Extension\Theme\Model\PageTemplate;
use Oro\Component\Layout\Extension\Theme\Model\Theme;
use Oro\Component\Layout\Extension\Theme\Model\ThemeManager;

class PageTemplateProviderTest extends \PHPUnit_Framework_TestCase
{
    /** @var PageTemplateProvider */
    private $pageTemplateProvider;

    /** @var ThemeManager|\PHPUnit_Framework_MockObject_MockObject */
    private $themeManagerMock;

    /** @var EntityFallbackResolver|\PHPUnit_Framework_MockObject_MockObject */
    private $fallbackResolverMock;

    /** @var Product */
    private $product;

    protected function setUp()
    {
        $this->themeManagerMock = $this->getMockBuilder(ThemeManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->fallbackResolverMock = $this->getMockBuilder(EntityFallbackResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->pageTemplateProvider = new PageTemplateProvider($this->themeManagerMock, $this->fallbackResolverMock);

        $this->product = new Product();
    }

    public function testGetPageTemplateWithNoFallback()
    {
        $this->fallbackResolverMock->expects($this->once())
            ->method('getFallbackValue')
            ->with($this->product, 'pageTemplate')
            ->willReturn([]);

        $this->assertNull($this->pageTemplateProvider->getPageTemplate($this->product, 'not_resolved_route'));
    }

    public function testGetPageTemplateWithNoFoundInTheme()
    {
        $this->fallbackResolverMock->expects($this->once())
            ->method('getFallbackValue')
            ->with($this->product, 'pageTemplate')
            ->willReturn(['resolved_route' => 'some_template_key']);

        $this->themeManagerMock->expects($this->once())
            ->method('getAllThemes')
            ->willReturn([]);

        $this->assertNull($this->pageTemplateProvider->getPageTemplate($this->product, 'resolved_route'));
    }

    public function testGetPageTemplate()
    {
        $this->fallbackResolverMock->expects($this->once())
            ->method('getFallbackValue')
            ->with($this->product, 'pageTemplate')
            ->willReturn(['resolved_route' => 'some_template_key']);

        $theme = new Theme('some theme name');
        $pageTemplate = new PageTemplate('some label', 'some_template_key', 'resolved_route');
        $theme->addPageTemplate($pageTemplate);

        $this->themeManagerMock->expects($this->once())
            ->method('getAllThemes')
            ->willReturn([$theme]);

        $this->assertSame(
            $pageTemplate,
            $this->pageTemplateProvider->getPageTemplate($this->product, 'resolved_route')
        );
    }
}

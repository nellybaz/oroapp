<?php

namespace Oro\Bundle\CatalogBundle\Tests\Unit\Layout\DataProvider;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Router;

use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\Entity\Repository\CategoryRepository;
use Oro\Bundle\CatalogBundle\Handler\RequestProductHandler;
use Oro\Bundle\CatalogBundle\Layout\DataProvider\CategoryBreadcrumbProvider;
use Oro\Bundle\CatalogBundle\Provider\CategoryTreeProvider;
use Oro\Bundle\LocaleBundle\Helper\LocalizationHelper;
use Oro\Bundle\CatalogBundle\Layout\DataProvider\CategoryProvider;

class CategoryBreadcrumbProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CategoryProvider|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $categoryProvider;

    /**
     * @var CategoryBreadcrumbProvider
     */
    protected $categoryBreadcrumbProvider;

    /**
     * @var LocalizationHelper|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $localizationHelper;

    /**
     * @var Router|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $router;

    /**
     * @var Category|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $category;

    /**
     * @var RequestStack|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $requestStack;

    /**
     * @inheritdoc
     */
    protected function setUp()
    {
        $this->category        = $this->createMock(Category::class);
        $requestProductHandler = $this->createMock(RequestProductHandler::class);
        $categoryRepository    = $this->createMock(CategoryRepository::class);
        $categoryTreeProvider  = $this->createMock(CategoryTreeProvider::class);

        $this->categoryProvider = $this->getMockBuilder(CategoryProvider::class)
            ->setConstructorArgs([$requestProductHandler, $categoryRepository, $categoryTreeProvider])
            ->getMock();

        $this->categoryProvider
            ->method('getCurrentCategory')
            ->willReturn($this->category);

        $this->router             = $this->createMock(Router::class);
        $this->localizationHelper = $this->createMock(LocalizationHelper::class);
        $this->requestStack       = $this->createMock(RequestStack::class);

        $this->categoryBreadcrumbProvider = new CategoryBreadcrumbProvider(
            $this->categoryProvider,
            $this->localizationHelper,
            $this->router,
            $this->requestStack
        );
    }

    public function testGetItemsRoot()
    {
        $collection = $this->createMock(Collection::class);

        $this->router->method('generate')
            ->willReturn('/');

        $this->category->method('getTitles')
            ->willReturn($collection);

        $this->categoryProvider
            ->method('getParentCategories')
            ->willReturn([]);

        $this->localizationHelper
            ->method('getLocalizedValue')
            ->with($collection)
            ->willReturn('root');

        $result     = $this->categoryBreadcrumbProvider->getItems();
        $breadcrumb = [
            'label' => 'root',
            'url'   => '/'
        ];
        $this->assertEquals([$breadcrumb], $result);
    }

    public function testGetItems()
    {
        $collection1 = new ArrayCollection();
        $collection2 = new ArrayCollection();

        $parentCategory = $this->createMock(Category::class);

        $this->category->method('getTitles')
            ->willReturn($collection1);

        $parentCategory->method('getTitles')
            ->willReturn($collection2);

        $this->category->method('getId')
            ->willReturn(2);

        $this->localizationHelper->expects($this->at(0))
            ->method('getLocalizedValue')
            ->with($collection1)
            ->willReturn('root');

        $this->localizationHelper->expects($this->at(1))
            ->method('getLocalizedValue')
            ->with($collection2)
            ->willReturn('office');

        $this->categoryProvider
            ->method('getParentCategories')
            ->willReturn([$parentCategory]);

        $this->categoryProvider
            ->method('getIncludeSubcategoriesChoice')
            ->willReturn(1);

        $this->router->expects($this->at(0))
            ->method('generate')
            ->with(
                'oro_product_frontend_product_index'
            )->willReturn('/');

        $this->router->expects($this->at(1))
            ->method('generate')
            ->with(
                'oro_product_frontend_product_index',
                [
                    'categoryId'           => 2,
                    'includeSubcategories' => 1
                ]
            )->willReturn('/?c=2');

        $result      = $this->categoryBreadcrumbProvider->getItems();
        $breadcrumbs = [
            [
                'label' => 'root',
                'url'   => '/'
            ],
            [
                'label' => 'office',
                'url'   => '/?c=2'
            ]
        ];
        $this->assertEquals($breadcrumbs, $result);
    }

    public function testGetItemsForProduct()
    {
        $categoryId = 4;

        $collection1 = new ArrayCollection();
        $collection2 = new ArrayCollection();

        $parentCategory = $this->createMock(Category::class);
        $parentCategory->method('getTitles')
            ->willReturn($collection2);

        $this->category->method('getTitles')
            ->willReturn($collection1);
        $this->category->method('getId')
            ->willReturn($categoryId);

        $this->localizationHelper->expects($this->exactly(2))
            ->method('getLocalizedValue')
            ->withConsecutive(
                [$collection1],
                [$collection2]
            )
            ->willReturnOnConsecutiveCalls('root', 'office');

        $this->categoryProvider
            ->method('getParentCategories')
            ->willReturn([$parentCategory]);
        $this->categoryProvider
            ->method('getIncludeSubcategoriesChoice')
            ->willReturn(1);

        $this->router->expects($this->exactly(2))
            ->method('generate')
            ->withConsecutive(
                ['oro_product_frontend_product_index'],
                [
                    'oro_product_frontend_product_index',
                    [
                        'categoryId'           => $categoryId,
                        'includeSubcategories' => 1
                    ]
                ]
            )
            ->willReturnOnConsecutiveCalls('/', '/?c=2');

        $currentRequest             = Request::create('/', Request::METHOD_GET);
        $currentRequest->attributes = new ParameterBag();
        $this->requestStack->expects($this->once())
            ->method('getCurrentRequest')
            ->willReturn($currentRequest);

        $currentPageTitle    = '220 Lumen Rechargeable Headlamp';
        $result              = $this->categoryBreadcrumbProvider->getItemsForProduct($categoryId, $currentPageTitle);
        $expectedBreadcrumbs = [
            [
                'label' => 'root',
                'url'   => '/'
            ],
            [
                'label' => 'office',
                'url'   => '/?c=2'
            ],
            [
                'label' => $currentPageTitle,
                'url'   => null
            ]
        ];
        $this->assertEquals($expectedBreadcrumbs, $result);
    }
}

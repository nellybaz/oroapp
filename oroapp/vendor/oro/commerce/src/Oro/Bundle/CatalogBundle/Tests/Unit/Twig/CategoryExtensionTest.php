<?php

namespace Oro\Bundle\CatalogBundle\Tests\Unit\Twig;

use Oro\Bundle\LocaleBundle\Entity\LocalizedFallbackValue;
use Oro\Bundle\CatalogBundle\JsTree\CategoryTreeHandler;
use Oro\Bundle\CatalogBundle\Tests\Unit\Entity\Stub\Category;
use Oro\Bundle\CatalogBundle\Twig\CategoryExtension;
use Oro\Component\Testing\Unit\TwigExtensionTestCaseTrait;

class CategoryExtensionTest extends \PHPUnit_Framework_TestCase
{
    use TwigExtensionTestCaseTrait;

    /** @var \PHPUnit_Framework_MockObject_MockObject|CategoryTreeHandler */
    protected $categoryTreeHandler;

    /** @var CategoryExtension */
    protected $extension;

    public function setUp()
    {
        $this->categoryTreeHandler = $this->getMockBuilder(CategoryTreeHandler::class)
            ->disableOriginalConstructor()
            ->getMock();

        $container = self::getContainerBuilder()
            ->add('oro_catalog.category_tree_handler', $this->categoryTreeHandler)
            ->getContainer($this);

        $this->extension = new CategoryExtension($container);
    }

    public function testGetName()
    {
        $this->assertEquals(CategoryExtension::NAME, $this->extension->getName());
    }

    public function testGetCategoryList()
    {
        $tree = [
            [
                'id' => 1,
                'parent' => '#',
                'text' => 'Master catalog',
                'state' => [
                    'opened' => true,
                ],
            ],
        ];

        $this->categoryTreeHandler->expects($this->once())
            ->method('createTree')
            ->willReturn($tree);

        $this->assertEquals(
            $tree,
            self::callTwigFunction($this->extension, 'oro_category_list', [])
        );
    }

    public function testGetCategoryListWithRootLabel()
    {
        $tree = [
            [
                'id' => 1,
                'parent' => '#',
                'text' => 'oro.catalog.frontend.category.master_category.label',
                'state' => [
                    'opened' => true,
                ],
            ],
        ];

        $this->categoryTreeHandler->expects($this->once())
            ->method('createTree')
            ->will($this->returnValue($tree));

        $this->assertEquals(
            $tree,
            self::callTwigFunction(
                $this->extension,
                'oro_category_list',
                ['oro.catalog.frontend.category.master_category.label']
            )
        );
    }

    public function testGetProductCategoryWithTwoCategories()
    {
        $category = new Category();
        $category->addTitle((new LocalizedFallbackValue())->setString('some string'));

        $parent = new Category();
        $parent->addTitle((new LocalizedFallbackValue())->setString('parent category title'));
        $category->setParentCategory($parent);

        $this->assertEquals(
            'parent category title / some string',
            $this->extension->getProductCategoryPath($category)
        );
        $this->assertEquals(
            'parent category title / some string',
            $this->extension->getProductCategoryTitle($category)
        );
    }

    public function testGetProductCategoryWithOneCategory()
    {
        $category = new Category();
        $category->addTitle((new LocalizedFallbackValue())->setString('some string'));

        $this->assertEquals('some string', $this->extension->getProductCategoryPath($category));
        $this->assertEquals('some string', $this->extension->getProductCategoryTitle($category));
    }

    public function testGetProductCategoryWithMoreThanTwoCategories()
    {
        $category = new Category();
        $category->addTitle((new LocalizedFallbackValue())->setString('some string'));

        $parent = new Category();
        $parent->addTitle((new LocalizedFallbackValue())->setString('parent category title'));
        $category->setParentCategory($parent);

        $rootCategory = new Category();
        $rootCategory->addTitle((new LocalizedFallbackValue())->setString('root category title'));
        $parent->setParentCategory($rootCategory);

        $this->assertEquals(
            'root category title /.../ some string',
            $this->extension->getProductCategoryTitle($category)
        );
        $this->assertEquals(
            'root category title / parent category title / some string',
            $this->extension->getProductCategoryPath($category)
        );
    }

    public function testGetProductCategoryWithCategoryWithoutTitle()
    {
        $category = new Category();

        $this->assertEquals('', $this->extension->getProductCategoryPath($category));
        $this->assertEquals('', $this->extension->getProductCategoryTitle($category));
    }
}

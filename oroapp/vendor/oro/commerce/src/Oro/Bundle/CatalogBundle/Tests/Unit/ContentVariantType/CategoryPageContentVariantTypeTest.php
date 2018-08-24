<?php

namespace Oro\Bundle\CatalogBundle\Tests\Unit\ContentVariantType;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Bundle\CatalogBundle\ContentVariantType\CategoryPageContentVariantType;
use Oro\Bundle\CatalogBundle\Entity\Category;
use Oro\Bundle\CatalogBundle\Form\Type\CategoryPageVariantType;
use Oro\Bundle\CatalogBundle\Tests\Unit\ContentVariantType\Stub\ContentVariantStub;
use Oro\Component\Routing\RouteData;
use Oro\Component\Testing\Unit\EntityTrait;

class CategoryPageContentVariantTypeTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var AuthorizationCheckerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $authorizationChecker;

    /**
     * @var CategoryPageContentVariantType
     */
    private $type;

    protected function setUp()
    {
        $this->authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);

        $this->type = new CategoryPageContentVariantType(
            $this->authorizationChecker,
            $this->getPropertyAccessor()
        );
    }

    public function testGetName()
    {
        $this->assertEquals('category_page', $this->type->getName());
    }

    public function testGetTitle()
    {
        $this->assertEquals('oro.catalog.category.entity_label', $this->type->getTitle());
    }

    public function testGetFormType()
    {
        $this->assertEquals(CategoryPageVariantType::class, $this->type->getFormType());
    }

    public function testIsAllowed()
    {
        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('oro_catalog_category_view')
            ->willReturn(true);
        $this->assertTrue($this->type->isAllowed());
    }

    /**
     * @dataProvider getRouteDataProvider
     *
     * @param ContentVariantStub $contentVariant
     * @param bool $expectedIncludeSubcategories
     */
    public function testGetRouteData(ContentVariantStub $contentVariant, $expectedIncludeSubcategories)
    {
        /** @var Category $category */
        $category = $this->getEntity(Category::class, ['id' => 42]);
        $contentVariant->setCategoryPageCategory($category);

        $this->assertEquals(
            new RouteData(
                'oro_product_frontend_product_index',
                ['categoryId' => 42, 'includeSubcategories' => $expectedIncludeSubcategories]
            ),
            $this->type->getRouteData($contentVariant)
        );
    }

    /**
     * @return array
     */
    public function getRouteDataProvider()
    {
        return [
            'include subcategories' => [
                'contentVariant' => (new ContentVariantStub())->setExcludeSubcategories(false),
                'expectedIncludeSubcategories' => true
            ],
            'exclude subcategories' => [
                'contentVariant' => (new ContentVariantStub())->setExcludeSubcategories(true),
                'expectedIncludeSubcategories' => false
            ]
        ];
    }
}

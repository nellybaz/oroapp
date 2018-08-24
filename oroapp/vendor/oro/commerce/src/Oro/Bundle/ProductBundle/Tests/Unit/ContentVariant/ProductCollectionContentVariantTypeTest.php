<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\ContentVariant;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

use Oro\Bundle\ProductBundle\ContentVariantType\ProductCollectionContentVariantType;
use Oro\Bundle\ProductBundle\Form\Type\ProductCollectionVariantType;
use Oro\Bundle\ProductBundle\Tests\Unit\ContentVariant\Stub\ContentVariantStub;
use Oro\Component\Routing\RouteData;
use Oro\Component\Testing\Unit\EntityTrait;

class ProductCollectionContentVariantTypeTest extends \PHPUnit_Framework_TestCase
{
    use EntityTrait;

    /**
     * @var AuthorizationCheckerInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $authorizationChecker;

    /**
     * @var ProductCollectionContentVariantType
     */
    private $type;

    protected function setUp()
    {
        $this->authorizationChecker = $this->createMock(AuthorizationCheckerInterface::class);

        $this->type = new ProductCollectionContentVariantType($this->authorizationChecker);
    }

    public function testGetName()
    {
        $this->assertEquals('product_collection', $this->type->getName());
    }

    public function testGetTitle()
    {
        $this->assertEquals('oro.product.content_variant.product_collection.label', $this->type->getTitle());
    }

    public function testGetFormType()
    {
        $this->assertEquals(ProductCollectionVariantType::NAME, $this->type->getFormType());
    }

    public function testIsAllowed()
    {
        $this->authorizationChecker->expects($this->once())
            ->method('isGranted')
            ->with('oro_product_view')
            ->willReturn(true);
        $this->assertTrue($this->type->isAllowed());
    }

    public function testGetRouteData()
    {
        /** @var ContentVariantStub **/
        $contentVariant = new ContentVariantStub();

        $this->assertEquals(
            new RouteData(
                ProductCollectionContentVariantType::PRODUCT_COLLECTION_ROUTE_NAME,
                [ProductCollectionContentVariantType::CONTENT_VARIANT_ID_KEY => $contentVariant->getId()]
            ),
            $this->type->getRouteData($contentVariant)
        );
    }
}

<?php

namespace Oro\Bundle\PricingBundle\Tests\Unit\Layout\Block\Type;

use Symfony\Component\ExpressionLanguage\Expression;

use Oro\Bundle\PricingBundle\Layout\Block\Type\ProductPricesType;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeFamily;
use Oro\Bundle\EntityConfigBundle\Attribute\Entity\AttributeGroup;
use Oro\Bundle\EntityConfigBundle\Layout\AttributeRenderRegistry;
use Oro\Bundle\LayoutBundle\Tests\Unit\BlockTypeTestCase;
use Oro\Bundle\EntityConfigBundle\Manager\AttributeManager;
use Oro\Bundle\PricingBundle\Form\Extension\PriceAttributesProductFormExtension;
use Oro\Bundle\EntityConfigBundle\Entity\FieldConfigModel;

use Oro\Component\Layout\Block\Type\ContainerType;
use Oro\Component\Layout\LayoutFactoryBuilderInterface;

class ProductPricesTypeTest extends BlockTypeTestCase
{
    /** @var AttributeRenderRegistry */
    protected $attributeRenderRegistry;

    /** @var AttributeManager|\PHPUnit_Framework_MockObject_MockObject */
    protected $attributeManager;

    /**
     * @param LayoutFactoryBuilderInterface $layoutFactoryBuilder
     */
    protected function initializeLayoutFactoryBuilder(LayoutFactoryBuilderInterface $layoutFactoryBuilder)
    {
        $this->attributeRenderRegistry = new AttributeRenderRegistry();

        $this->attributeManager = $this->getMockBuilder(AttributeManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $ProductPricesType = new ProductPricesType($this->attributeRenderRegistry, $this->attributeManager);

        $layoutFactoryBuilder
            ->addType($ProductPricesType);

        parent::initializeLayoutFactoryBuilder($layoutFactoryBuilder);
    }

    public function testGetBlockView()
    {
        $attributeGroup = new AttributeGroup();
        $attributeGroup->setCode('prices');

        $attributeFamily = new AttributeFamily();
        $attributeFamily->setCode('family_code');
        $attributeFamily->addAttributeGroup($attributeGroup);

        $attribute = new FieldConfigModel('attribute');

        $product = new Product();
        $pricesExpression = new Expression('context["productPrices"]');

        $this->assertFalse($this->attributeRenderRegistry->isAttributeRendered($attributeFamily, 'attribute'));

        $this->attributeManager->expects($this->once())
            ->method('getAttributeByFamilyAndName')
            ->with($attributeFamily, PriceAttributesProductFormExtension::PRODUCT_PRICE_ATTRIBUTES_PRICES)
            ->willReturn($attribute);

        $view = $this->getBlockView(
            ProductPricesType::NAME,
            [
                'productPrices' => $pricesExpression,
                'attributeFamily' => $attributeFamily,
                'product' => $product,
                'isPriceUnitsVisible' => false
            ]
        );

        $this->assertEquals($pricesExpression, $view->vars['productPrices']);
        $this->assertFalse($view->vars['isPriceUnitsVisible']);
        $this->assertEquals($product, $view->vars['product']);

        $this->assertTrue($this->attributeRenderRegistry->isAttributeRendered($attributeFamily, 'attribute'));
    }

    public function testGetBlockViewWithoutAttributeFamily()
    {
        $pricesExpression = new Expression('context["productPrices"]');

        $view = $this->getBlockView(
            ProductPricesType::NAME,
            [
                'productPrices' => $pricesExpression,
                'isPriceUnitsVisible' => false
            ]
        );

        $this->assertEquals($pricesExpression, $view->vars['productPrices']);
        $this->assertFalse($view->vars['isPriceUnitsVisible']);
        $this->assertNull($view->vars['product']);
    }

    public function testGetName()
    {
        $type = $this->getBlockType(ProductPricesType::NAME);

        $this->assertSame(ProductPricesType::NAME, $type->getName());
    }

    public function testGetParent()
    {
        $type = $this->getBlockType(ProductPricesType::NAME);

        $this->assertSame(ContainerType::NAME, $type->getParent());
    }
}

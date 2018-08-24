<?php

namespace Oro\Bundle\InventoryBundle\Tests\Unit\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

use Oro\Bundle\CatalogBundle\Fallback\Provider\CategoryFallbackProvider;
use Oro\Bundle\InventoryBundle\Tests\Unit\Form\Extension\Stub\ProductStub;

abstract class ProductInventoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AbstractTypeExtension
     */
    protected $productFormExtension;

    /**
     * @dataProvider providerTestBuildForm
     */
    public function testBuildForm(ProductStub $product, $expectedFallBackId)
    {
        /** @var FormBuilderInterface|\PHPUnit_Framework_MockObject_MockObject $builder * */
        $builder = $this->createMock(FormBuilderInterface::class);

        $builder->expects($this->once())
            ->method('getData')
            ->willReturn($product);
        $builder->expects($this->once())
            ->method('add')
            ->willReturn($builder);

        $options = [];
        $this->productFormExtension->buildForm($builder, $options);

        $this->assertProductFallBack($product, $expectedFallBackId);
    }

    /**
     * @param ProductStub $product
     * @param string $expectedFallBackId
     *
     * @return mixed
     */
    abstract protected function assertProductFallBack(ProductStub $product, $expectedFallBackId);

    /**
     * @return array
     */
    public function providerTestBuildForm()
    {
        return [
            'product without data' => [
                'product' => $this->getProduct(),
                'expectedFallBackId' => CategoryFallbackProvider::FALLBACK_ID
            ]
        ];
    }

    /**
     * @return ProductStub
     */
    protected function getProduct()
    {
        return new ProductStub();
    }
}

<?php

namespace Oro\Bundle\ProductBundle\Tests\Unit\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\FormBundle\Form\Type\OroEntitySelectOrCreateInlineType;
use Oro\Bundle\ProductBundle\Form\Type\BrandSelectType;

class BrandSelectTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BrandSelectType
     */
    protected $type;

    protected function setUp()
    {
        $this->type = new BrandSelectType();
    }

    public function testGetName()
    {
        $this->assertEquals(BrandSelectType::NAME, $this->type->getName());
    }

    public function testGetParent()
    {
        $this->assertEquals(OroEntitySelectOrCreateInlineType::NAME, $this->type->getParent());
    }

    public function testConfigureOptions()
    {
        $resolver = $this->createMock(OptionsResolver::class);
        $resolver->expects($this->once())
            ->method('setDefaults')
            ->with(
                $this->callback(
                    function (array $options) {
                        $this->assertArrayHasKey('autocomplete_alias', $options);
                        $this->assertArrayHasKey('create_form_route', $options);
                        $this->assertArrayHasKey('configs', $options);
                        $this->assertEquals('oro_product_brand', $options['autocomplete_alias']);
                        $this->assertEquals('oro_product_brand_create', $options['create_form_route']);
                        $this->assertEquals(
                            ['placeholder' => 'oro.product.brand.form.choose'],
                            $options['configs']
                        );

                        return true;
                    }
                )
            );

        $this->type->configureOptions($resolver);
    }
}

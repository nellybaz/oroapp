<?php

namespace Oro\Bundle\CustomerBundle\Tests\Unit\Form\Extension;

use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\ProductBundle\Form\Type\ProductSelectType;
use Oro\Bundle\CustomerBundle\Form\Extension\FrontendProductSelectExtension;

class FrontendProductSelectExtensionTest extends AbstractCustomerUserAwareExtensionTest
{
    protected function setUp()
    {
        parent::setUp();

        $this->extension = new FrontendProductSelectExtension($this->tokenStorage);
    }

    public function testGetExtendedType()
    {
        $this->assertEquals(ProductSelectType::NAME, $this->extension->getExtendedType());
    }

    public function testConfigureOptionsNonCustomerUser()
    {
        $this->assertOptionsNotChangedForNonCustomerUser();
    }

    public function testConfigureOptionsCustomerUser()
    {
        $this->assertCustomerUserTokenCall();
        /** @var \PHPUnit_Framework_MockObject_MockObject|OptionsResolver $resolver */
        $resolver = $this->getMockBuilder('Symfony\Component\OptionsResolver\OptionsResolver')
            ->disableOriginalConstructor()
            ->getMock();
        $resolver->expects($this->once())
            ->method('setDefault')
            ->with('grid_name', 'products-select-grid-frontend');

        $this->extension->configureOptions($resolver);
    }
}

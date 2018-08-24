<?php

namespace Oro\Bundle\MagentoBundle\Tests\Unit\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolver;

use Oro\Bundle\MagentoBundle\Form\Type\WebsiteSelectType;

class WebsiteSelectTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testFormInterface()
    {
        $type = new WebsiteSelectType();

        $this->assertSame('oro_magento_website_select', $type->getName());
        $this->assertSame('choice', $type->getParent());
    }

    public function testSetDefaultOptions()
    {
        $type = new WebsiteSelectType();

        $resolver = new OptionsResolver();
        $type->setDefaultOptions($resolver);

        $options = $resolver->resolve();
        $this->assertArrayHasKey('tooltip', $options);
    }
}

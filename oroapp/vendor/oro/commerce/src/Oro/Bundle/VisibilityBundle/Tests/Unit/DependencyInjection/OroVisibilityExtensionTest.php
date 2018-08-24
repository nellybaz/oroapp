<?php

namespace Oro\Bundle\VisibilityBundle\Tests\Unit\DependencyInjection;

use Oro\Bundle\SecurityBundle\Tests\Unit\DependencyInjection\AbstractPrependExtensionTest;
use Oro\Bundle\VisibilityBundle\DependencyInjection\OroVisibilityExtension;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class OroVisibilityExtensionTest extends AbstractPrependExtensionTest
{
    /**
     * Test Extension
     */
    public function testExtension()
    {
        $extension = new OroVisibilityExtension();

        $this->loadExtension($extension);

        $expectedParameters = [
            'oro_visibility.entity.product_visibility.class',
            'oro_visibility.entity.product_visibility_resolved.class'
        ];

        $this->assertParametersLoaded($expectedParameters);

        $this->assertEquals('oro_visibility', $extension->getAlias());
    }

    /**
     * Test Get Alias
     */
    public function testGetAlias()
    {
        $this->assertEquals(OroVisibilityExtension::ALIAS, $this->getExtension()->getAlias());
    }

    /**
     * @return Extension
     */
    protected function getExtension()
    {
        return new OroVisibilityExtension();
    }
}

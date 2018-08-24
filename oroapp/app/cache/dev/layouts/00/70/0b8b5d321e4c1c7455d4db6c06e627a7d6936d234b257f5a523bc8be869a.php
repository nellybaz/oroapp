<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/default/layout.yml
 */

class __Oro_Layout_Update_00700b8b5d321e4c1c7455d4db6c06e627a7d6936d234b257f5a523bc8be869a implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( 'OroPricingBundle:layouts:default/layout.html.twig' );
    }
}
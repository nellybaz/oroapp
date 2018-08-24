<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SEOBundle/Resources/views/layouts/default/layout.yml
 */

class __Oro_Layout_Update_20fd5ccd230a1538d946d1ad8ee3fdb1607932b3781021da77060a819b1c26c7 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( 'OroSEOBundle:layouts:default/layout.html.twig' );
    }
}
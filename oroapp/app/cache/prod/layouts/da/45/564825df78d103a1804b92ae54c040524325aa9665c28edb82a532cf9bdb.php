<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/page-header.yml
 */

class __Oro_Layout_Update_da45564825df78d103a1804b92ae54c040524325aa9665c28edb82a532cf9bdb implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/page-header.html.twig' );
        $layoutManipulator->add( 'page_header', 'page_container', 'container', array (
        ), NULL, true );
    }
}
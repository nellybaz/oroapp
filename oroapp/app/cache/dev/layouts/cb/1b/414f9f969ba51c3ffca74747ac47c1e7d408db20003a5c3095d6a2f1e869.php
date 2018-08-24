<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/middle_bar.yml
 */

class __Oro_Layout_Update_cb1b414f9f969ba51c3ffca74747ac47c1e7d408db20003a5c3095d6a2f1e869 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/middle_bar.html.twig' );
        $layoutManipulator->add( 'middle_bar', 'page_header', 'container', array (
        ), NULL, true );
        $layoutManipulator->add( 'middle_bar_logo', 'middle_bar', 'container' );
        $layoutManipulator->add( 'middle_bar_center', 'middle_bar', 'container' );
        $layoutManipulator->add( 'middle_bar_right', 'middle_bar', 'container' );
    }
}
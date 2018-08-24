<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/layout.yml
 */

class __Oro_Layout_Update_86ee5a03e8af3c0773e23572e539a120d8ff3a10eedd18faeb2cd884e13dec1e implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/layout.html.twig' );
        $layoutManipulator->setOption( 'top_sticky_panel', 'sticky_name', 'top-sticky-panel' );
        $layoutManipulator->add( 'scripts_before', 'head', 'container' );
        $layoutManipulator->add( 'requirejs_scripts_after', 'require_js', 'container' );
        $layoutManipulator->add( 'notification', 'page_container', 'block', array (
        ), 'page_header' );
        $layoutManipulator->add( 'sticky_header_row', 'top_sticky_panel_content', 'block' );
        $layoutManipulator->add( 'sticky_element_notification', 'top_sticky_panel_content', 'block' );
        $layoutManipulator->move( 'top_sticky_panel', 'page_container', 'page_header' );
    }

    public function getImports()
    {
        return array (
          0 => 
          array (
            'id' => 'sticky_panel',
            'root' => 'page_container',
            'namespace' => 'top',
          ),
          1 => 
          array (
            'id' => 'scroll_top',
            'root' => 'page_main',
          ),
        );
    }
}
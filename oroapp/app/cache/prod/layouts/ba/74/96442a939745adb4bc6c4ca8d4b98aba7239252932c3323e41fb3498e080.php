<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/layout.yml
 */

class __Oro_Layout_Update_ba7496442a939745adb4bc6c4ca8d4b98aba7239252932c3323e41fb3498e080 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/layout.html.twig' );
        $layoutManipulator->add( 'page_title_container', 'page_content', 'container' );
        $layoutManipulator->add( 'page_title', 'page_title_container', 'page_title', array (
          'defaultValue' => NULL,
          'value' => '=defaultValue',
        ) );
        $layoutManipulator->setOption( 'bottom_sticky_panel', 'sticky_name', 'bottom-sticky-panel' );
        $layoutManipulator->setOption( 'bottom_sticky_panel', 'stick_to', 'bottom' );
    }

    public function getImports()
    {
        return array (
          0 => 
          array (
            'id' => 'sticky_panel',
            'root' => 'body',
            'namespace' => 'bottom',
          ),
        );
    }
}
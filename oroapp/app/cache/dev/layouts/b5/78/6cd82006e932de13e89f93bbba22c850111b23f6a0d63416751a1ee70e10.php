<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/page-footer.yml
 */

class __Oro_Layout_Update_b5786cd82006e932de13e89f93bbba22c850111b23f6a0d63416751a1ee70e10 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/page-footer.html.twig' );
        $layoutManipulator->add( 'page_footer', 'page_container', 'container', array (
        ), NULL, false );
        $layoutManipulator->add( 'page_footer_container', 'page_footer', 'container' );
        $layoutManipulator->add( 'page_footer_base', 'page_footer_container', 'container' );
        $layoutManipulator->add( 'page_footer_side', 'page_footer_container', 'container' );
    }
}
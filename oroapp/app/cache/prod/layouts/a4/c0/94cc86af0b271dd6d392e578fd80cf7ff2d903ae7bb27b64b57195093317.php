<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/top_nav.yml
 */

class __Oro_Layout_Update_a4c094cc86af0b271dd6d392e578fd80cf7ff2d903ae7bb27b64b57195093317 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/top_nav.html.twig' );
        $layoutManipulator->add( 'top_nav_container', 'page_header', 'container', array (
        ), NULL, true );
        $layoutManipulator->add( 'top_nav_menu_container', 'top_nav_container', 'container' );
        $layoutManipulator->add( 'top_nav', 'top_nav_menu_container', 'menu', array (
          'item' => '=data["menu"].getMenu("commerce_top_nav")',
          'allow_safe_labels' => true,
        ) );
    }
}
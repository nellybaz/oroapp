<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/quick_access.yml
 */

class __Oro_Layout_Update_453511b5f48a1fcc443b413debe7dbae38cd7d52d6090bc891837059aa4b0583 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/quick_access.html.twig' );
        $layoutManipulator->add( 'quick_access_container', 'middle_bar_right', 'container', array (
        ), NULL, false );
        $layoutManipulator->add( 'quick_access_menu', 'quick_access_container', 'menu', array (
          'item' => '=data["menu"].getMenu("commerce_quick_access")',
        ) );
    }
}
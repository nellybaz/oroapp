<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu_logged.yml
 */

class __Oro_Layout_Update_4cd294b3963c3949f202e5b534d4c4ea35b493808852f6988b6a5643e873abf5 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu_logged.html.twig' );
        $layoutManipulator->add( 'header_row_shopping', 'header_row', 'container', array (
          'visible' => 'context["is_logged_in"]',
        ), NULL, false );
    }
}
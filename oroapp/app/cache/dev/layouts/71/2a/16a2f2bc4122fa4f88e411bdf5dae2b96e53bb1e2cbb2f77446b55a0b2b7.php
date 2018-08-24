<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/search_row.yml
 */

class __Oro_Layout_Update_712a16a2f2bc4122fa4f88e411bdf5dae2b96e53bb1e2cbb2f77446b55a0b2b7 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/search_row.html.twig' );
        $layoutManipulator->add( 'search_row_main_container', 'header_row', 'container', array (
        ), 'header_row_main_menu', false );
        $layoutManipulator->add( 'search_row_trigger', 'search_row_main_container', 'container' );
        $layoutManipulator->add( 'search_row_extra_container', 'search_row_trigger', 'block' );
    }
}
<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/oro_frontend_exception/exception.yml
 */

class __Oro_Layout_Update_2b7a87e986d5815d4cb30d9f22507872c79bd62e39fc55661bb7ed5ba80b526f implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->remove( 'head_customer_menu_list' );
    }
}
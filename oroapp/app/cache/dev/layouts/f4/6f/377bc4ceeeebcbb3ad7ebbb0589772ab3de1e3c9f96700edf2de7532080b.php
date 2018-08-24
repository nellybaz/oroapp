<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/page/top_nav_logged_dropdown.yml
 */

class __Oro_Layout_Update_f46f377bc4ceeeebcbb3ad7ebbb0589772ab3de1e3c9f96700edf2de7532080b implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/page/top_nav_logged_dropdown.html.twig' );
        $layoutManipulator->add( 'top_nav_controls_dropdown_container', 'top_nav_container', 'container', array (
          'visible' => '=data["system_config_provider"].getValue("oro_customer.user_menu_show_items")=="subitems_in_popup"',
        ), NULL, true );
        $layoutManipulator->add( 'top_nav_customer_dropdown_trigger', 'top_nav_controls_dropdown_container', 'container' );
        $layoutManipulator->add( 'top_nav_customer_dropdown_trigger_welcome_label', 'top_nav_customer_dropdown_trigger', 'text', array (
          'text' => 'oro.customer.frontend.menu.customer_user_welcome.label',
        ) );
        $layoutManipulator->add( 'top_nav_user_name', 'top_nav_customer_dropdown_trigger', 'text', array (
          'text' => '=data["current_user"].getCurrentUser().getFullName()',
        ) );
        $layoutManipulator->add( 'top_nav_customer_dropdown_menu', 'top_nav_controls_dropdown_container', 'container' );
        $layoutManipulator->add( 'top_nav_customer_menu_list', 'top_nav_customer_dropdown_menu', 'container' );
        $layoutManipulator->add( 'top_nav_customer_menu', 'top_nav_customer_menu_list', 'menu', array (
          'item' => '=data["menu"].getMenu("oro_customer_menu")',
        ) );
        $layoutManipulator->add( 'top_nav_customer_dropdown_sign_out_link', 'top_nav_customer_dropdown_menu', 'link', array (
          'route_name' => 'oro_customer_customer_user_security_logout',
          'text' => 'oro.customer.frontend.menu.customer_user_sign_out.label',
        ) );
    }

    public function isApplicable(\Oro\Component\Layout\ContextInterface $context)
    {
        return $context["is_logged_in"];
    }
}
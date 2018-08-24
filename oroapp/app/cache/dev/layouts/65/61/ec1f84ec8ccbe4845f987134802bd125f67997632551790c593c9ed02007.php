<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/page/top_nav_logged.yml
 */

class __Oro_Layout_Update_6561ec1f84ec8ccbe4845f987134802bd125f67997632551790c593c9ed02007 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/page/top_nav_logged.html.twig' );
        $layoutManipulator->add( 'top_nav_controls', 'top_nav_container', 'container', array (
          'visible' => '=data["system_config_provider"].getValue("oro_customer.user_menu_show_items")=="all_at_once"',
        ), NULL, true );
        $layoutManipulator->add( 'top_nav_logged_user', 'top_nav_controls', 'container' );
        $layoutManipulator->add( 'top_nav_signed_in_as_label', 'top_nav_logged_user', 'text', array (
          'text' => 'oro.customer.frontend.menu.customer_user_signed_in_as.label',
        ) );
        $layoutManipulator->add( 'top_nav_signed_in_as', 'top_nav_logged_user', 'text', array (
          'text' => '=data["current_user"].getCurrentUser().getFullName()',
        ) );
        $layoutManipulator->add( 'top_nav_my_customer_item', 'top_nav_controls', 'container' );
        $layoutManipulator->add( 'top_nav_my_customer_link', 'top_nav_my_customer_item', 'link', array (
          'route_name' => 'oro_customer_frontend_customer_user_profile',
          'text' => 'oro.customer.frontend.menu.customer_user_profile.label',
          'visible' => '=data["acl"].isGranted("oro_customer_frontend_customer_user_view")',
        ) );
        $layoutManipulator->add( 'top_nav_sign_out_item', 'top_nav_controls', 'container' );
        $layoutManipulator->add( 'top_nav_sign_out_link', 'top_nav_sign_out_item', 'link', array (
          'route_name' => 'oro_customer_customer_user_security_logout',
          'text' => 'oro.customer.frontend.menu.customer_user_sign_out.label',
        ) );
    }

    public function isApplicable(\Oro\Component\Layout\ContextInterface $context)
    {
        return $context["is_logged_in"];
    }
}
<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/page/top_nav_anonymous.yml
 */

class __Oro_Layout_Update_59b584ff600093734af2caeb8f763365afa76488ee9e1aef674f9accb6063929 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }
        $layoutManipulator->setBlockTheme( 'OroCustomerBundle:layouts:blank/page/top_nav_anonymous.html.twig' );
        $layoutManipulator->add( 'top_authorization_container', 'top_nav_container', 'container', array (
        ), NULL, true );
        $layoutManipulator->add( 'top_sign_in_link', 'top_authorization_container', 'link', array (
          'route_name' => 'oro_customer_customer_user_security_login',
          'text' => 'oro.customer.customeruser.profile.login',
        ) );
        $layoutManipulator->add( 'top_registration_link', 'top_authorization_container', 'link', array (
          'visible' => '=data["system_config_provider"].getValue("oro_customer.registration_link_enabled") && data["system_config_provider"].getValue("oro_customer.registration_allowed")',
          'route_name' => 'oro_customer_frontend_customer_user_register',
          'text' => 'oro.customer.customeruser.profile.registration',
        ) );
    }

    public function isApplicable(\Oro\Component\Layout\ContextInterface $context)
    {
        return (!$context["is_logged_in"]);
    }
}
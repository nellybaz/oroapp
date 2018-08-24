<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_frontend_customer_user_register/customer_user_register_form.yml
 */

class __Oro_Layout_Update_c5d07f4ab304c72ff66c9d7067c1105793a96446b7024885fcae2d52059e4e5c implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_frontend_customer_user_register/customer_user_register_form.html.twig' );
        $layoutManipulator->setOption( 'registration_label', 'text', 'oro.customer.customeruser.profile.register' );
        $layoutManipulator->setOption( 'registration_description', 'text', 'oro.customer.customeruser.profile.register.description' );
        $layoutManipulator->setOption( 'registration_form', 'form', '=data["oro_customer_frontend_customer_user_register"].getRegisterFormView()' );
        $layoutManipulator->setOption( 'registration_form_submit', 'text', 'oro.customer.customeruser.profile.create_an_customer' );
        $layoutManipulator->add( 'registration_link_back', 'registration_links', 'link', array (
          'route_name' => 'oro_customer_customer_user_security_login',
          'text' => 'oro.customer.frontend.action.back_to_login.label',
        ) );
    }

    public function getImports()
    {
        return array (
          0 => 
          array (
            'id' => 'oro_customer_form',
            'namespace' => 'registration',
            'root' => 'page_content',
          ),
        );
    }
}
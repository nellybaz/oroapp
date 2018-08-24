<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form.yml
 */

class __Oro_Layout_Update_6fc5f909e9937faab34e974241e203583c907f078dfb798b927de240a62d5b8d implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form.html.twig' );
        $layoutManipulator->setOption( 'login_label', 'text', 'oro.customer.customeruser.profile.login' );
        $layoutManipulator->setOption( 'login_form_submit', 'text', 'oro.customer.customeruser.profile.login' );
        $layoutManipulator->add( 'login_link_forgot', 'login_links', 'link', array (
          'route_name' => 'oro_customer_frontend_customer_user_reset_request',
          'text' => 'oro.customer.customeruser.profile.forgot_password',
        ) );
        $layoutManipulator->add( 'login_link_register', 'login_links', 'link', array (
          'visible' => '=data["registrationAllowed"]==true',
          'route_name' => 'oro_customer_frontend_customer_user_register',
          'text' => 'oro.customer.customeruser.profile.create_an_customer',
        ) );
        $layoutManipulator->changeBlockType( 'login_form', 'container' );
        $layoutManipulator->move( 'registration_instructions_text', 'login_page', NULL, false );
        $layoutManipulator->add( 'login_form_start', 'login_form', 'block' );
        $layoutManipulator->add( 'login_form_notifications', 'login_form', 'text', array (
          'visible' => '=data["oro_customer_sign_in"].getError()!=null',
          'text' => '=data["oro_customer_sign_in"].getError()',
        ) );
        $layoutManipulator->add( 'login_form_fields', 'login_form', 'container' );
        $layoutManipulator->add( 'login_form_username', 'login_form_fields', 'input', array (
          'type' => 'email',
          'id' => 'userNameSignIn',
          'name' => '_username',
          'value' => '=data["oro_customer_sign_in"].getLastName()',
          'placeholder' => 'oro.customer.customeruser.placeholder.email',
          'label' => 'oro.customer.customeruser.email.label',
        ) );
        $layoutManipulator->add( 'login_form_password', 'login_form_fields', 'input', array (
          'type' => 'password',
          'id' => 'passwordSignIn',
          'name' => '_password',
          'placeholder' => 'oro.customer.customeruser.placeholder.password',
          'label' => 'oro.customer.customeruser.password.label',
        ) );
        $layoutManipulator->add( 'login_form_remember', 'login_form_fields', 'input', array (
          'type' => 'checkbox',
          'id' => 'rememberMe',
          'name' => '_remember_me',
          'value' => 'on',
          'label' => 'oro.customer.customeruser.profile.remember_me',
        ) );
        $layoutManipulator->add( 'login_form_target', 'login_form_fields', 'input', array (
          'type' => 'hidden',
          'name' => '_target_path',
        ) );
        $layoutManipulator->add( 'login_form_csrf', 'login_form_fields', 'input', array (
          'type' => 'hidden',
          'name' => '_csrf_token',
          'value' => '=data["oro_customer_sign_in"].getCSRFToken()',
        ) );
        $layoutManipulator->add( 'login_form_end', 'login_form', 'block' );
    }

    public function getImports()
    {
        return array (
          0 => 
          array (
            'id' => 'oro_customer_form',
            'namespace' => 'login',
            'root' => 'page_content',
          ),
          1 => 
          array (
            'id' => 'oro_customer_registration_instructions',
            'root' => 'login_page',
            'namespace' => 'registration_instructions',
          ),
        );
    }
}
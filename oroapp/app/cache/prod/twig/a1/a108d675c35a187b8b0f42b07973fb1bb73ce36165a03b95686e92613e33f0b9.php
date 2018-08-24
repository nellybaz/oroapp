<?php

/* @OroCustomer/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form.yml */
class __TwigTemplate_af3697e1d94b16819ecd91bbc314fa19f96e0622658e1bdae3a7c55f044cf9e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "layout:
    imports:
        -
            id: oro_customer_form
            namespace: login
            root: page_content
        -
            id: oro_customer_registration_instructions
            root: login_page
            namespace: registration_instructions
    actions:
        - '@setBlockTheme':
            themes: 'customer_user_login_form.html.twig'
        - '@setOption':
            id: login_label
            optionName: text
            optionValue: oro.customer.customeruser.profile.login
        - '@setOption':
            id: login_form_submit
            optionName: text
            optionValue: oro.customer.customeruser.profile.login
        - '@add':
            id: login_link_forgot
            parentId: login_links
            blockType: link
            options:
                route_name: oro_customer_frontend_customer_user_reset_request
                text: oro.customer.customeruser.profile.forgot_password
        - '@add':
            id: login_link_register
            parentId: login_links
            blockType: link
            options:
                visible: '=data[\"registrationAllowed\"]==true'
                route_name: oro_customer_frontend_customer_user_register
                text: oro.customer.customeruser.profile.create_an_customer

        - '@changeBlockType':
            id: login_form
            blockType: container

        - '@move':
            id: registration_instructions_text
            parentId: login_page
            prepend: false

        - '@addTree':
            items:
                login_form_start:
                    blockType: block
                login_form_fields:
                    blockType: container
                login_form_end:
                    blockType: block
                login_form_notifications:
                    blockType: text
                    options:
                        visible: '=data[\"oro_customer_sign_in\"].getError()!=null'
                        text: '=data[\"oro_customer_sign_in\"].getError()'
                login_form_username:
                    blockType: input
                    options:
                        type: email
                        id: userNameSignIn
                        name: _username
                        value: '=data[\"oro_customer_sign_in\"].getLastName()'
                        placeholder: oro.customer.customeruser.placeholder.email
                        label: oro.customer.customeruser.email.label
                login_form_password:
                    blockType: input
                    options:
                        type: password
                        id: passwordSignIn
                        name: _password
                        placeholder: oro.customer.customeruser.placeholder.password
                        label: oro.customer.customeruser.password.label
                login_form_remember:
                    blockType: input
                    options:
                        type: checkbox
                        id: rememberMe
                        name: _remember_me
                        value: on
                        label: oro.customer.customeruser.profile.remember_me
                login_form_target:
                    blockType: input
                    options:
                        type: hidden
                        name: _target_path
                login_form_csrf:
                    blockType: input
                    options:
                        type: hidden
                        name: _csrf_token
                        value: '=data[\"oro_customer_sign_in\"].getCSRFToken()'
            tree:
                login_form:
                    login_form_start: ~
                    login_form_notifications: ~
                    login_form_fields:
                        login_form_username: ~
                        login_form_password: ~
                        login_form_remember: ~
                        login_form_target: ~
                        login_form_csrf: ~
                    login_form_end: ~

#                login_form_remember_item:
#                    blockType: container
#
#
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form.yml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroCustomer/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form.yml");
    }
}

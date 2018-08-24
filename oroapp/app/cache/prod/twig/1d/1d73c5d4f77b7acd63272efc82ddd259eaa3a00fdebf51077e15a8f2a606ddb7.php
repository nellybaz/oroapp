<?php

/* @OroCustomer/layouts/blank/oro_customer_frontend_customer_user_reset_request/customer_user_forgot_password_form.yml */
class __TwigTemplate_28b21bb183603bbea634289dd005dceca3c623e14894d0287340298e714d685b extends Twig_Template
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
            namespace: forgot_password
            root: page_content
    actions:
        - '@setBlockTheme':
            themes: 'customer_user_forgot_password_form.html.twig'
        - '@setOption':
            id: forgot_password_label
            optionName: text
            optionValue: oro.customer.customeruser.profile.forgot_password
        - '@setOption':
            id: forgot_password_form
            optionName: form
            optionValue: '=data[\"oro_customer_frontend_customer_user_form\"].getForgotPasswordFormView()'
        - '@setOption':
            id: forgot_password_form_submit
            optionName: text
            optionValue: oro.customer.customeruser.profile.request_password.label
        - '@add':
            id: forgot_password_link_back
            parentId: forgot_password_links
            blockType: link
            options:
                route_name: oro_customer_customer_user_security_login
                text: oro.customer.customeruser.profile.return_to_login
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_reset_request/customer_user_forgot_password_form.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_reset_request/customer_user_forgot_password_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_frontend_customer_user_reset_request/customer_user_forgot_password_form.yml");
    }
}

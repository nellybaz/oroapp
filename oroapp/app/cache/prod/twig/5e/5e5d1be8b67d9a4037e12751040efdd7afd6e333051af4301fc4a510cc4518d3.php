<?php

/* @OroCustomer/layouts/blank/oro_customer_frontend_customer_user_reset_check_email/customer_user_reset_password_success.yml */
class __TwigTemplate_8a9fee3684f672b63affb46b7d734d8c46385797e1ebae546a0e61286f34ad2c extends Twig_Template
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
            namespace: check_email
            root: page_content
    actions:
        - '@setBlockTheme':
            themes: 'customer_user_reset_password_success.html.twig'
        - '@setOption':
            id: check_email_label
            optionName: text
            optionValue: oro.customer.customeruser.profile.check_email.title
        - '@setOption':
            id: check_email_description
            optionName: text
            optionValue:
                label: oro.customer.customeruser.profile.check_email.message
                parameters:
                    '%email%': '=data[\"email\"]'
        - '@remove':
            id: check_email_form
        - '@add':
            id: check_email_link_back
            parentId: check_email_links
            blockType: link
            options:
                route_name: oro_customer_customer_user_security_login
                text: oro.customer.customeruser.profile.return_to_login
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_reset_check_email/customer_user_reset_password_success.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_reset_check_email/customer_user_reset_password_success.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_frontend_customer_user_reset_check_email/customer_user_reset_password_success.yml");
    }
}

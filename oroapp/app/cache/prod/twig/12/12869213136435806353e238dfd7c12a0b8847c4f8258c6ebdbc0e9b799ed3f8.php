<?php

/* @OroCustomer/layouts/blank/oro_customer_frontend_customer_user_register/customer_user_register_form.yml */
class __TwigTemplate_7c7d7c8113da778e31b3b57b6b9800624fde1819c911182aaefa83d7deeac8e4 extends Twig_Template
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
            namespace: registration
            root: page_content
    actions:
        - '@setBlockTheme':
            themes: 'customer_user_register_form.html.twig'
        - '@setOption':
            id: registration_label
            optionName: text
            optionValue: oro.customer.customeruser.profile.register
        - '@setOption':
            id: registration_description
            optionName: text
            optionValue: oro.customer.customeruser.profile.register.description
        - '@setOption':
            id: registration_form
            optionName: form
            optionValue: '=data[\"oro_customer_frontend_customer_user_register\"].getRegisterFormView()'
        - '@setOption':
            id: registration_form_submit
            optionName: text
            optionValue: oro.customer.customeruser.profile.create_an_customer
        - '@add':
            id: registration_link_back
            parentId: registration_links
            blockType: link
            options:
                route_name: oro_customer_customer_user_security_login
                text: oro.customer.frontend.action.back_to_login.label
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_register/customer_user_register_form.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_register/customer_user_register_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_frontend_customer_user_register/customer_user_register_form.yml");
    }
}

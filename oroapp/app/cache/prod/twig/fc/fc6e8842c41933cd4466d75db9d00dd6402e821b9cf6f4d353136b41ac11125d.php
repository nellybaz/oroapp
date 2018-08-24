<?php

/* @OroCustomer/layouts/blank/page/top_nav_anonymous.yml */
class __TwigTemplate_fa2d2713761aa9541be8bcf0e0b692b876cf5ac9b249f10194f09e33bf1a7be3 extends Twig_Template
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
    actions:
        - '@setBlockTheme':
            themes: 'OroCustomerBundle:layouts:blank/page/top_nav_anonymous.html.twig'
        - '@addTree':
            items:
                top_authorization_container:
                    blockType: container
                    prepend: true
                top_sign_in_link:
                    blockType: link
                    options:
                        route_name: oro_customer_customer_user_security_login
                        text: oro.customer.customeruser.profile.login
                top_registration_link:
                    blockType: link
                    options:
                        visible: '=data[\"system_config_provider\"].getValue(\"oro_customer.registration_link_enabled\") && data[\"system_config_provider\"].getValue(\"oro_customer.registration_allowed\")'
                        route_name: oro_customer_frontend_customer_user_register
                        text: oro.customer.customeruser.profile.registration
            tree:
                top_nav_container:
                    top_authorization_container:
                        top_sign_in_link: ~
                        top_registration_link: ~

    conditions: '!context[\"is_logged_in\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/page/top_nav_anonymous.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/page/top_nav_anonymous.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/page/top_nav_anonymous.yml");
    }
}

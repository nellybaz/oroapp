<?php

/* @OroCustomer/layouts/blank/page/top_nav_logged.yml */
class __TwigTemplate_99df3687f44d9bcb2066a6d743ba363de3394f098e384d4d23f8ec1544438e73 extends Twig_Template
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
            themes: 'top_nav_logged.html.twig'
        - '@addTree':
            items:
                top_nav_controls:
                    blockType: container
                    prepend: true
                    options:
                        visible: '=data[\"system_config_provider\"].getValue(\"oro_customer.user_menu_show_items\")==\"all_at_once\"'
                top_nav_logged_user:
                    blockType: container
                top_nav_signed_in_as_label:
                    blockType: text
                    options:
                        text: 'oro.customer.frontend.menu.customer_user_signed_in_as.label'
                top_nav_signed_in_as:
                    blockType: text
                    options:
                        text: '=data[\"current_user\"].getCurrentUser().getFullName()'
                top_nav_sign_out_item:
                    blockType: container
                top_nav_my_customer_item:
                    blockType: container
                top_nav_sign_out_link:
                    blockType: link
                    options:
                        route_name: oro_customer_customer_user_security_logout
                        text: 'oro.customer.frontend.menu.customer_user_sign_out.label'
                top_nav_my_customer_link:
                    blockType: link
                    options:
                        route_name: oro_customer_frontend_customer_user_profile
                        text: 'oro.customer.frontend.menu.customer_user_profile.label'
                        visible: '=data[\"acl\"].isGranted(\"oro_customer_frontend_customer_user_view\")'
            tree:
                top_nav_container:
                    top_nav_controls:
                        top_nav_logged_user:
                            top_nav_signed_in_as_label: ~
                            top_nav_signed_in_as: ~
                        top_nav_my_customer_item:
                            top_nav_my_customer_link: ~
                        top_nav_sign_out_item:
                            top_nav_sign_out_link: ~
    conditions: 'context[\"is_logged_in\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/page/top_nav_logged.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/page/top_nav_logged.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/page/top_nav_logged.yml");
    }
}

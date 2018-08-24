<?php

/* @OroCustomer/layouts/blank/page/top_nav_logged_dropdown.yml */
class __TwigTemplate_7855926140c68c3c36075d0ffa95463d58de5b58eee99b7ea1907fe4a5142658 extends Twig_Template
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
            themes: 'top_nav_logged_dropdown.html.twig'
        - '@addTree':
            items:
                top_nav_controls_dropdown_container:
                    blockType: container
                    prepend: true
                    options:
                        visible: '=data[\"system_config_provider\"].getValue(\"oro_customer.user_menu_show_items\")==\"subitems_in_popup\"'
                top_nav_user_name:
                    blockType: text
                    options:
                        text: '=data[\"current_user\"].getCurrentUser().getFullName()'
                top_nav_customer_menu:
                      blockType: menu
                      options:
                          item: '=data[\"menu\"].getMenu(\"oro_customer_menu\")'
                top_nav_customer_menu_list:
                    blockType: container
                top_nav_customer_dropdown_menu:
                    blockType: container
                top_nav_customer_dropdown_trigger:
                    blockType: container
                top_nav_customer_dropdown_trigger_welcome_label:
                    blockType: text
                    options:
                        text: 'oro.customer.frontend.menu.customer_user_welcome.label'
                top_nav_customer_dropdown_sign_out_link:
                    blockType: link
                    options:
                        route_name: oro_customer_customer_user_security_logout
                        text: 'oro.customer.frontend.menu.customer_user_sign_out.label'
            tree:
                top_nav_container:
                    top_nav_controls_dropdown_container:
                        top_nav_customer_dropdown_trigger:
                            top_nav_customer_dropdown_trigger_welcome_label: ~
                            top_nav_user_name: ~
                        top_nav_customer_dropdown_menu:
                            top_nav_customer_menu_list:
                                top_nav_customer_menu: ~
                            top_nav_customer_dropdown_sign_out_link: ~
    conditions: 'context[\"is_logged_in\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/page/top_nav_logged_dropdown.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/page/top_nav_logged_dropdown.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/page/top_nav_logged_dropdown.yml");
    }
}

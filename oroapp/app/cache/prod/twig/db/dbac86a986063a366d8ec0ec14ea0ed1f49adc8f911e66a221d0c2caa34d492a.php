<?php

/* @OroCustomer/layouts/blank/imports/oro_customer_user_address_list/layout.yml */
class __TwigTemplate_e9b1a923c9c391d5ca5adb14766d5c542010caf7ba28f7a87c1c5f2fb4763a59 extends Twig_Template
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
            themes: 'layout.html.twig'
        - '@addTree':
            items:
                __user_addresses_head:
                    blockType: container
                __user_addresses_head_title:
                    blockType: page_subtitle
                    options:
                        text: 'oro.customer.frontend.sections.customer_user.default_addresses'
                        icon: 'map-o'
                __user_addresses_list:
                    blockType: address_book
                    options:
                        entity: '=data[\"entity\"]'
                        componentOptions: '=data[\"customer_user_default_address_provider\"].getComponentOptions(data[\"entity\"])'
                __user_addresses_list_template:
                        blockType: container
                __user_addresses_list_template_item:
                    blockType: container
                __user_addresses_list_template_item_address:
                    blockType: block
                __user_addresses_list_template_item_primary:
                    blockType: block
                __user_addresses_list_template_item_type:
                    blockType: block
                __user_addresses_list_template_item_actions:
                    blockType: container
                __user_addresses_list_template_item_actions_open_map:
                    blockType: block
                    options:
                        visible: '=data[\"system_config_provider\"].getValue(\"oro_customer.maps_enabled\")'
                __user_addresses_list_template_item_actions_edit:
                    blockType: block
                __user_addresses_list_template_item_actions_remove:
                    blockType: block
                __user_addresses_list_template__manage_addresses:
                    blockType: container
                __user_addresses_list_template__manage_addresses_link:
                    blockType: link
                    options:
                        route_name: 'oro_customer_frontend_customer_user_address_index'
                        text: 'oro.customer.address.manage'
                        visible: '=data[\"acl\"].isGranted(\"oro_customer_frontend_customer_view\") or data[\"acl\"].isGranted(\"oro_customer_frontend_customer_user_view\")'
            tree:
                __root:
                    __user_addresses_head:
                        __user_addresses_head_title: ~
                    __user_addresses_list: ~
                    __user_addresses_list_template:
                        __user_addresses_list_template_item:
                            __user_addresses_list_template_item_address: ~
                            __user_addresses_list_template_item_type: ~
                            __user_addresses_list_template_item_primary: ~
                            __user_addresses_list_template_item_actions:
                                __user_addresses_list_template_item_actions_open_map: ~
                                __user_addresses_list_template_item_actions_edit: ~
                                __user_addresses_list_template_item_actions_remove: ~
                    __user_addresses_list_template__manage_addresses:
                        __user_addresses_list_template__manage_addresses_link: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/imports/oro_customer_user_address_list/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/imports/oro_customer_user_address_list/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_user_address_list/layout.yml");
    }
}

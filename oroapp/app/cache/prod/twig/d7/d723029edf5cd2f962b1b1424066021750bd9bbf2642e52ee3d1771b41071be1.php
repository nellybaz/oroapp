<?php

/* @OroCustomer/layouts/blank/imports/oro_customer_user_view/layout.yml */
class __TwigTemplate_b77ec63e8abde79450e43a3760c6b7e057a467762070d5342ce7a8c1e5e2c93b extends Twig_Template
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
            id: oro_customer_user_address_list
            root: __customer_user_address_book

    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'

        - '@setOption':
            id: customer_user_address_book
            optionName: visible
            optionValue: '=data[\"acl\"].isGranted(\"oro_customer_frontend_customer_user_address_view\")'

        - '@setOption':
            id: user_addresses_list_template_item_actions_edit
            optionName: visible
            optionValue: '=data[\"acl\"].isGranted(\"oro_customer_frontend_customer_user_address_update\")'

        - '@setOption':
            id: user_addresses_list_template_item_actions_remove
            optionName: visible
            optionValue: '=data[\"acl\"].isGranted(\"oro_customer_frontend_customer_user_address_remove\")'

        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: 'oro.customer.frontend.title.customer_user.my_profile'

        - '@setOption':
            id: customer_user_view_information_title
            optionName: text
            optionValue: 'oro.customer.frontend.sections.customer_user.account_info'

        - '@add':
            id: __customer_user_view_information_content
            parentId: __customer_user_view_information
            blockType: customer_user_awere_block
            prepend: false
            options:
                customerUser: '=data[\"entity\"]'
                vars:
                    companyNameEnabled: '=data[\"system_config_provider\"].getValue(\"oro_customer.company_name_field_enabled\")'

        - '@addTree':
            items:
                __customer_user_view_page:
                    blockType: container
                    options:
                        class_prefix: 'customer-profile'
                __customer_user_profile_controls_wrapper:
                    blockType: container
                __customer_user_profile_controls:
                    blockType: line_buttons
                    options:
                        visible: '=data[\"entity\"]!=null'
                        buttons: '=data[\"buttons\"].getAll(data[\"entity\"])'
                __customer_user_view_information:
                    blockType: container
                __customer_user_view_information_title:
                    blockType: page_subtitle
                    options:
                        text: 'oro.customer.frontend.sections.customer_user.user_profile'
                        icon: 'user'
                        badge: 'light'
                __customer_user_address_book:
                    blockType: container
            tree:
                __root:
                    __customer_user_view_page:
                        __customer_user_profile_controls_wrapper: ~
                        __customer_user_view_information:
                            __customer_user_view_information_title:
                                __customer_user_profile_controls: ~
                        __customer_user_address_book: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/imports/oro_customer_user_view/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/imports/oro_customer_user_view/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_user_view/layout.yml");
    }
}

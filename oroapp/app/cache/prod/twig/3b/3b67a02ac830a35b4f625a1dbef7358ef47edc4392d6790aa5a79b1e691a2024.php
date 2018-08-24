<?php

/* @OroCustomer/layouts/custom/oro_customer_frontend_customer_user_address_index/customer_address_book_company_addresses_list.yml */
class __TwigTemplate_d6593075154146ed45e1913dbf1c1c92ec9635180c3c3947f473cabf143d6e61 extends Twig_Template
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
           root: customer_address_book_addresses_list
           namespace: company_addresses

    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'

        - '@add':
            id: customer_address_book_addresses_list
            blockType: container
            parentId: customer_address_book_page
            prepend: true

        - '@add':
            id: customer_address_book_addresses_list_create_button
            blockType: link
            parentId: company_addresses_user_addresses_head
            options:
                visible: '=data[\"acl\"].isGranted(\"oro_customer_frontend_customer_address_create\")'
                route_name: oro_customer_frontend_customer_address_create
                route_parameters:
                    entityId: '=data[\"entity\"].getCustomer().getId()'
                text: 'oro.customer.frontend.customer_user_address_book.create.label'
                icon: plus fa--small
                attr:
                    class: 'btn btn--size-s btn--info'

        - '@setOption':
            id: customer_address_book_addresses_list
            optionName: visible
            optionValue: '=data[\"acl\"].isGranted(\"oro_customer_frontend_customer_address_view\")'

        - '@setOption':
            id: company_addresses_user_addresses_list
            optionName: componentOptions
            optionValue: '=data[\"customer_address_provider\"].getComponentOptions(data[\"entity\"].getCustomer())'

        - '@setOption':
            id: company_addresses_user_addresses_head_title
            optionName: text
            optionValue: 'oro.customer.frontend.customer_user_address_book.customer_addresses'

        - '@setOption':
            id: company_addresses_user_addresses_head_title
            optionName: icon
            optionValue: 'university'

        - '@setOption':
            id: company_addresses_user_addresses_list_template_item_actions_edit
            optionName: visible
            optionValue: '=data[\"acl\"].isGranted(\"oro_customer_frontend_customer_user_address_update\")'

        - '@setOption':
            id: company_addresses_user_addresses_list_template_item_actions_remove
            optionName: visible
            optionValue: '=data[\"acl\"].isGranted(\"oro_customer_frontend_customer_user_address_remove\")'

        - '@remove':
            id: customer_address_book_addresses

        - '@remove':
            id: company_addresses_user_addresses_list_template__manage_addresses

    conditions: 'context[\"customer_address_count\"] <= 3'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/custom/oro_customer_frontend_customer_user_address_index/customer_address_book_company_addresses_list.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/custom/oro_customer_frontend_customer_user_address_index/customer_address_book_company_addresses_list.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/custom/oro_customer_frontend_customer_user_address_index/customer_address_book_company_addresses_list.yml");
    }
}

<?php

/* @OroCustomer/layouts/default/imports/oro_customer_address_grid/layout.yml */
class __TwigTemplate_e91a33137369c69bdc8e07295fa5f843657a4bff575b3385e4bec67a15a55d9f extends Twig_Template
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
            id: datagrid
            root: __root
            namespace: addresses

    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'

        - '@addTree':
            items:
                __addresses_view_additional_container:
                    blockType: container

            tree:
                __addresses_datagrid_views_toolbar:
                    __addresses_view_additional_container: ~

        - '@add':
            id: __addresses_create_link
            parentId: __addresses_view_additional_container
            blockType: link
            options:
                visible: '=data[\"acl\"].isGranted(\"oro_customer_frontend_customer_address_create\") && data[\"acl\"].isGranted(\"oro_customer_frontend_customer_address_view\")'
                route_name: oro_customer_frontend_customer_address_create
                route_parameters:
                    entityId: '=data[\"entity\"].getCustomer().getId()'
                text: 'oro.customer.frontend.customer_user_address_book.create.label'
                icon: plus fa--small
                attr:
                    class: 'btn btn--size-s btn--info'

        - '@setOption':
            id: __addresses_datagrid
            optionName: grid_name
            optionValue: frontend-customer-customer-address-grid

        - '@appendOption':
            id: __addresses_datagrid
            optionName: grid_render_parameters.themeOptions
            optionValue:
                toolbarTemplateSelector: '#template-customer-address-book-addresses-grid-toolbar'
                cellActionsHideCount: 4
                cellLauncherOptions:
                    launcherMode: 'icon-only'

        - '@setOption':
            id: __addresses_datagrid
            optionName: grid_render_parameters.gridViewsOptions.text
            optionValue: 'oro.customer.customer_address_book.customer_addresses'

        - '@setOption':
            id: __addresses_datagrid
            optionName: grid_render_parameters.gridViewsOptions.icon
            optionValue: 'map-marker'

        - '@appendOption':
            id: __addresses_datagrid
            optionName: grid_render_parameters.toolbarOptions.itemsCounter
            optionValue:
                transTemplate: 'oro_frontend.datagrid.pagination.totalRecords.companyAddresses'

        - '@setOption':
            id: __addresses_datagrid_views
            optionName: attr.data-datagrid-views-name
            optionValue: frontend-customer-customer-address-grid

        - '@setOption':
              id: __addresses_datagrid_toolbar_button_container
              optionName: visible
              optionValue: true

        - '@setOption':
            id: __addresses_datagrid_toolbar_sorting
            optionName: visible
            optionValue: '=false'

        - '@setOption':
            id: __addresses_datagrid_toolbar_mass_actions
            optionName: visible
            optionValue: '=false'

        - '@setOption':
            id: __addresses_datagrid_toolbar_extra_actions
            optionName: visible
            optionValue: '=false'

        - '@remove':
            id: __addresses_datagrid_toolbar_actions_container

        - '@remove':
            id: __addresses_datagrid_toolbar_tools_container

        - '@setOption':
            id: __addresses_datagrid_toolbar
            optionName: attr.class
            optionValue: 'datagrid-toolbar extended datagrid-toolbar--offset-s'

#    TODO: return condition in BB-4263
#    conditions: 'context[\"customer_address_count\"]>=8'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/imports/oro_customer_address_grid/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/imports/oro_customer_address_grid/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/imports/oro_customer_address_grid/layout.yml");
    }
}

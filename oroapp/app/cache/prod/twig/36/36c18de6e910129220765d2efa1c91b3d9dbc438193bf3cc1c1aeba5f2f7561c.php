<?php

/* @OroCustomer/layouts/default/imports/oro_customer_user_address_grid/layout.yml */
class __TwigTemplate_0315475964b248ed3a01a727600b9b8d4aeaabf4cdee8f9576c0eb31e4bbf732 extends Twig_Template
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
            namespace: user_addresses

    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'

        - '@addTree':
            items:
                __user_addresses_view_additional_container:
                    blockType: container
            tree:
                __user_addresses_datagrid_views_toolbar:
                    __user_addresses_view_additional_container: ~

        - '@add':
            id: __user_addresses_create_link
            parentId: __user_addresses_view_additional_container
            blockType: link
            options:
                visible: '=data[\"acl\"].isGranted(\"oro_customer_frontend_customer_user_address_create\")'
                route_name: oro_customer_frontend_customer_user_address_create
                route_parameters:
                    entityId: '=data[\"entity\"].getId()'
                text: 'oro.customer.address.add'
                icon: plus fa--small
                attr:
                    class: 'btn btn--size-s btn--info'

        - '@setOption':
            id: __user_addresses_datagrid_views
            optionName: attr.data-datagrid-views-name
            optionValue: frontend-customer-customer-user-address-grid

        - '@setOption':
            id: __user_addresses_datagrid
            optionName: grid_render_parameters.gridViewsOptions.text
            optionValue: 'oro.customer.customer_user_address_book.customer_user_addresses'

        - '@setOption':
            id: __user_addresses_datagrid
            optionName: grid_render_parameters.gridViewsOptions.icon
            optionValue: 'map-marker'

        - '@setOption':
            id: __user_addresses_datagrid
            optionName: grid_name
            optionValue: frontend-customer-customer-user-address-grid

        - '@setOption':
            id: __user_addresses_datagrid
            optionName: grid_parameters
            optionValue:
                frontend_owner_id: '=data[\"entity\"].getId()'

        - '@appendOption':
            id: __user_addresses_datagrid
            optionName: grid_render_parameters.themeOptions
            optionValue:
                toolbarTemplateSelector: '#template-customer-user-address-book-addresses-grid-toolbar'
                cellActionsHideCount: 4
                cellLauncherOptions:
                    launcherMode: 'icon-only'

        - '@appendOption':
            id: __user_addresses_datagrid
            optionName: grid_render_parameters.toolbarOptions.itemsCounter
            optionValue:
                transTemplate: 'oro_frontend.datagrid.pagination.totalRecords.addresses'

        - '@setOption':
              id: __user_addresses_datagrid_toolbar_button_container
              optionName: visible
              optionValue: true

        - '@setOption':
            id: __user_addresses_datagrid_toolbar_sorting
            optionName: visible
            optionValue: '=false'

        - '@setOption':
            id: __user_addresses_datagrid_toolbar_mass_actions
            optionName: visible
            optionValue: '=false'

        - '@setOption':
            id: __user_addresses_datagrid_toolbar_extra_actions
            optionName: visible
            optionValue: '=false'

        - '@remove':
            id: __user_addresses_datagrid_toolbar_actions_container

        - '@remove':
            id: __user_addresses_datagrid_toolbar_tools_container

        - '@setOption':
            id: __user_addresses_datagrid_toolbar
            optionName: attr.class
            optionValue: 'datagrid-toolbar grid__toolbar--offset-s extended'

#    TODO: return condition in BB-4263
#    conditions: 'context[\"customer_address_count\"]>=8'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/imports/oro_customer_user_address_grid/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/imports/oro_customer_user_address_grid/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/imports/oro_customer_user_address_grid/layout.yml");
    }
}

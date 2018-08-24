<?php

/* @OroProduct/layouts/blank/imports/oro_product_grid/grid.yml */
class __TwigTemplate_bcef305340078b1d94a894556391a083a13a17dbf6c0d0b650e10cb71464d473 extends Twig_Template
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
            id: oro_datagrid_server_render
            root: product_grid_container
            namespace: product

        -
            id: oro_product_list_item
            root: product_datagrid_row
            namespace: product_datagrid_row

        -
            id: product_list_matrix_grid_order
            root: product_datagrid_cell_matrixForm
            namespace: product_datagrid_cell

    actions:
        - '@setBlockTheme':
            themes:
                - 'grid.html.twig'
                - 'grid_row.html.twig'

        - '@add':
            id: product_datagrid_cell_matrixForm
            parentId: product_datagrid_row_product_primary_content_container
            blockType: container

        - '@setOption':
            id: product_datagrid
            optionName: grid_render_parameters.enableViews
            optionValue: false

        - '@addTree':
            items:
                product_index_page:
                    blockType: container
                product_grid_container:
                    blockType: container
            tree:
                page_content:
                    product_index_page:
                        product_grid_container: ~

        - '@add':
            id: product_require_js_config
            parentId: require_js
            blockType: block

        - '@changeBlockType':
            id: product_datagrid
            blockType: product_datagrid

        - '@setOption':
            id: product_datagrid
            optionName: grid_render_parameters.toolbarOptions.addResetAction
            optionValue: false

        - '@setOption':
            id: product_datagrid
            optionName: grid_render_parameters.toolbarOptions.addRefreshAction
            optionValue: false

        - '@setOption':
            id: product_datagrid
            optionName: grid_render_parameters.toolbarOptions.addColumnManager
            optionValue: false

        - '@setOption':
            id: product_datagrid
            optionName: grid_render_parameters.multiSelectRowEnabled
            optionValue: '=data[\"system_config_provider\"].getValue(\"oro_shopping_list.mass_adding_on_product_listing_enabled\") && (data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\") || context[\"is_logged_in\"])'

        - '@move':
            id: product_datagrid_cell_sku
            parentId: product_datagrid_row_product_sku

        - '@move':
            id: product_datagrid_cell_name
            parentId: product_datagrid_row_product_title

        - '@move':
            id: product_datagrid_cell_shortDescription
            parentId: product_datagrid_row_product_short_description

        - '@setOption':
            id: product_datagrid_toolbar_sorting
            optionName: visible
            optionValue: true

        - '@remove':
            id: product_datagrid_toolbar_filter_container

        - '@add':
            id: product_datagrid_toolbar_display_options
            parentId: product_datagrid_toolbar_rightside_container
            blockType: product_datagrid_options

        - '@add':
            id: product_mass_actions_container
            parentId: product_datagrid_toolbar_leftside_container
            siblingId: product_datagrid_toolbar_sorting
            prepend: true
            blockType: block

        - '@add':
            id: product_mass_actions_sticky_container
            parentId: bottom_sticky_panel_content
            prepend: true
            blockType: block

        - '@setOption':
            id: product_mass_actions_sticky_container
            optionName: visible
            optionValue: '=data[\"system_config_provider\"].getValue(\"oro_shopping_list.mass_adding_on_product_listing_enabled\") && (data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\") || context[\"is_logged_in\"])'

        - '@setOption':
            id: product_mass_actions_container
            optionName: visible
            optionValue: '=data[\"system_config_provider\"].getValue(\"oro_shopping_list.mass_adding_on_product_listing_enabled\") && (data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\") || context[\"is_logged_in\"])'

        - '@add':
            id: product_item_select_row
            parentId: product_datagrid_row_product_image_holder
            blockType: block

        - '@setOption':
            id: product_item_select_row
            optionName: visible
            optionValue: '=data[\"system_config_provider\"].getValue(\"oro_shopping_list.mass_adding_on_product_listing_enabled\") && (data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\") || context[\"is_logged_in\"])'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/imports/oro_product_grid/grid.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/imports/oro_product_grid/grid.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_grid/grid.yml");
    }
}

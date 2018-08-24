<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_grid/grid.yml
 */

class __Oro_Layout_Update_2e718c508e17cc499730d853dbf73655901d6bedcb0a4f02777ab386e988ffcf implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    private $parentLayoutUpdate;
    private $import;

    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (null === $this->import) {
            throw new \RuntimeException('Missing import configuration for layout update');
        }

        if ($this->parentLayoutUpdate instanceof Oro\Component\Layout\IsApplicableLayoutUpdateInterface
            && !$this->parentLayoutUpdate->isApplicable($item->getContext())) {
            return;
        }

        $layoutManipulator  = new ImportLayoutManipulator($layoutManipulator, $this->import);
        $layoutManipulator->setBlockTheme( array (
          0 => '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_grid/grid.html.twig',
          1 => '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_grid/grid_row.html.twig',
        ) );
        $layoutManipulator->add( 'product_datagrid_cell_matrixForm', 'product_datagrid_row_product_primary_content_container', 'container' );
        $layoutManipulator->setOption( 'product_datagrid', 'grid_render_parameters.enableViews', false );
        $layoutManipulator->add( 'product_index_page', 'page_content', 'container' );
        $layoutManipulator->add( 'product_grid_container', 'product_index_page', 'container' );
        $layoutManipulator->add( 'product_require_js_config', 'require_js', 'block' );
        $layoutManipulator->changeBlockType( 'product_datagrid', 'product_datagrid' );
        $layoutManipulator->setOption( 'product_datagrid', 'grid_render_parameters.toolbarOptions.addResetAction', false );
        $layoutManipulator->setOption( 'product_datagrid', 'grid_render_parameters.toolbarOptions.addRefreshAction', false );
        $layoutManipulator->setOption( 'product_datagrid', 'grid_render_parameters.toolbarOptions.addColumnManager', false );
        $layoutManipulator->setOption( 'product_datagrid', 'grid_render_parameters.multiSelectRowEnabled', '=data["system_config_provider"].getValue("oro_shopping_list.mass_adding_on_product_listing_enabled") && (data["feature"].isFeatureEnabled("guest_shopping_list") || context["is_logged_in"])' );
        $layoutManipulator->move( 'product_datagrid_cell_sku', 'product_datagrid_row_product_sku' );
        $layoutManipulator->move( 'product_datagrid_cell_name', 'product_datagrid_row_product_title' );
        $layoutManipulator->move( 'product_datagrid_cell_shortDescription', 'product_datagrid_row_product_short_description' );
        $layoutManipulator->setOption( 'product_datagrid_toolbar_sorting', 'visible', true );
        $layoutManipulator->remove( 'product_datagrid_toolbar_filter_container' );
        $layoutManipulator->add( 'product_datagrid_toolbar_display_options', 'product_datagrid_toolbar_rightside_container', 'product_datagrid_options' );
        $layoutManipulator->add( 'product_mass_actions_container', 'product_datagrid_toolbar_leftside_container', 'block', array (
        ), 'product_datagrid_toolbar_sorting', true );
        $layoutManipulator->add( 'product_mass_actions_sticky_container', 'bottom_sticky_panel_content', 'block', array (
        ), NULL, true );
        $layoutManipulator->setOption( 'product_mass_actions_sticky_container', 'visible', '=data["system_config_provider"].getValue("oro_shopping_list.mass_adding_on_product_listing_enabled") && (data["feature"].isFeatureEnabled("guest_shopping_list") || context["is_logged_in"])' );
        $layoutManipulator->setOption( 'product_mass_actions_container', 'visible', '=data["system_config_provider"].getValue("oro_shopping_list.mass_adding_on_product_listing_enabled") && (data["feature"].isFeatureEnabled("guest_shopping_list") || context["is_logged_in"])' );
        $layoutManipulator->add( 'product_item_select_row', 'product_datagrid_row_product_image_holder', 'block' );
        $layoutManipulator->setOption( 'product_item_select_row', 'visible', '=data["system_config_provider"].getValue("oro_shopping_list.mass_adding_on_product_listing_enabled") && (data["feature"].isFeatureEnabled("guest_shopping_list") || context["is_logged_in"])' );
    }

    public function setParentUpdate(\Oro\Component\Layout\ImportsAwareLayoutUpdateInterface $parentLayoutUpdate)
    {
        $this->parentLayoutUpdate = $parentLayoutUpdate;
    }

    public function setImport(\Oro\Component\Layout\Model\LayoutUpdateImport $import)
    {
        $this->import = $import;
    }

    public function isApplicable(\Oro\Component\Layout\ContextInterface $context)
    {
        return true;
    }

    public function getImports()
    {
        return array (
          0 => 
          array (
            'id' => 'oro_datagrid_server_render',
            'root' => 'product_grid_container',
            'namespace' => 'product',
          ),
          1 => 
          array (
            'id' => 'oro_product_list_item',
            'root' => 'product_datagrid_row',
            'namespace' => 'product_datagrid_row',
          ),
          2 => 
          array (
            'id' => 'product_list_matrix_grid_order',
            'root' => 'product_datagrid_cell_matrixForm',
            'namespace' => 'product_datagrid_cell',
          ),
        );
    }

    public function getImport()
    {
        return $this->import;
    }
}
<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_list_matrix_grid_order/product_list_matrix_grid_order.yml
 */

class __Oro_Layout_Update_f821d9853d2411ba7ccaacdfd5b602592c4a4e5cd63fcacb43a00dcd896818f6 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_list_matrix_grid_order/product_list_matrix_grid_order.html.twig' );
        $layoutManipulator->move( '__matrix_line_item_buttons', '__matrix_totals', NULL, false );
        $layoutManipulator->setOption( '__matrix_wrapper', 'form', '=data["oro_shopping_list_matrix_order_form"].getMatrixOrderFormView(product, shoppingList)' );
        $layoutManipulator->setOption( '__matrix_wrapper', 'visible', '=data["feature"].isFeatureEnabled("guest_shopping_list") || context["is_logged_in"]' );
        $layoutManipulator->setOption( '__matrix_line_item_form_buttons_shopping_list', 'productShoppingLists', 'undefined' );
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
            'id' => 'matrix_grid_order',
            'root' => '__root',
            'namespace' => 'matrix',
          ),
          1 => 
          array (
            'id' => 'line_item_buttons',
            'root' => '__matrix_form_summary',
            'namespace' => 'matrix',
          ),
        );
    }

    public function getImport()
    {
        return $this->import;
    }
}
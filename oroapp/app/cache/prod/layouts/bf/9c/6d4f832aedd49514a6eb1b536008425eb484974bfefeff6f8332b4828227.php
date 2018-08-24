<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/matrix_grid_order/matrix_grid_order.yml
 */

class __Oro_Layout_Update_bf9c6d4f832aedd49514a6eb1b536008425eb484974bfefeff6f8332b4828227 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/matrix_grid_order/matrix_grid_order.html.twig' );
        $layoutManipulator->setFormTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/matrix_grid_order/matrix_grid_order_form.html.twig' );
        $layoutManipulator->add( '__matrix_form_clear_button', '__totals', 'button', array (
          'icon' => 'times',
          'style' => 'btn btn--link clear-button',
          'attr' => 
          array (
            'title' => 'oro.frontend.shoppinglist.matrix_grid_order.clear.tooltip',
            'data-role' => 'clear',
          ),
          'text' => 
          array (
            'label' => 'oro.frontend.shoppinglist.matrix_grid_order.clear.text',
          ),
        ), NULL, true );
        $layoutManipulator->add( '__wrapper', '__root', 'matrix_grid_order', array (
          'visible' => '=data.offsetExists("product") ? data["product_view_form_availability_provider"].isMatrixFormAvailable(product) : true',
          'product' => '=data.offsetExists("product") ? data["product"]',
          'shoppingList' => '=data.offsetExists("shoppingList") ? data["shoppingList"] : data["oro_shopping_list_customer_user_shopping_lists"].getCurrent()',
          'form' => '=data.offsetExists("product") ? data["oro_shopping_list_matrix_order_form"].getMatrixOrderFormView(product, shoppingList)',
          'prices' => '=data.offsetExists("product") ? data["frontend_product_prices"].getVariantsPricesByProduct(product)',
          'totals' => 
          array (
            'quantity' => '=data.offsetExists("product") ? data["oro_shopping_list_matrix_grid_order"].getTotalQuantity(product)',
            'price' => '=data.offsetExists("product") ? data["oro_shopping_list_matrix_grid_order"].getTotalPriceFormatted(product)',
          ),
        ) );
        $layoutManipulator->add( '__form_start', '__wrapper', 'form_start' );
        $layoutManipulator->add( '__form_fields', '__wrapper', 'form_fields' );
        $layoutManipulator->add( '__form_summary', '__wrapper', 'container' );
        $layoutManipulator->add( '__form_end', '__wrapper', 'form_end' );
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
            'id' => 'oro_product_totals',
            'root' => '__form_summary',
          ),
        );
    }

    public function getImport()
    {
        return $this->import;
    }
}
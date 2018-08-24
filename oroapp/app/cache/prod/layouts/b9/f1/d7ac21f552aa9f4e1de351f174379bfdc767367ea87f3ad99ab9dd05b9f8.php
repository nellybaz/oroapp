<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_shopping_lists/product_shopping_lists.yml
 */

class __Oro_Layout_Update_b9f1d7ac21f552aa9f4e1de351f174379bfdc767367ea87f3ad99ab9dd05b9f8 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/product_shopping_lists/product_shopping_lists.html.twig' );
        $layoutManipulator->add( '__shopping_lists', '__root', 'product_shopping_lists', array (
          'productShoppingLists' => '=data.offsetExists("product") ? data["oro_shopping_list_product_units_quantity"].getByProduct(data["oro_product_variant"].getProductVariantOrProduct(data)) : []',
          'vars' => 
          array (
            'product' => '=data.offsetExists("product") ? data["oro_product_variant"].getProductVariantOrProduct(data)',
          ),
        ) );
        $layoutManipulator->add( '__shopping_lists_template', '__shopping_lists', 'container' );
        $layoutManipulator->add( '__shopping_lists_template_preview', '__shopping_lists_template', 'block' );
        $layoutManipulator->add( '__shopping_lists_popup', '__shopping_lists_template', 'container', array (
          'vars' => 
          array (
            'shoppingLists' => '=data["oro_shopping_list_customer_user_shopping_lists"].getShoppingLists()',
            'defaultUnitCode' => '=data["oro_product_single_unit_mode"].getDefaultUnitCode()',
            'singleUnitMode' => '=data["oro_product_single_unit_mode"].isSingleUnitMode()',
            'singleUnitModeCodeVisible' => '=data["oro_product_single_unit_mode"].isSingleUnitModeCodeVisible()',
          ),
        ) );
        $layoutManipulator->add( '__shopping_lists_popup_template', '__shopping_lists_popup', 'block' );
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

    public function getImport()
    {
        return $this->import;
    }
}
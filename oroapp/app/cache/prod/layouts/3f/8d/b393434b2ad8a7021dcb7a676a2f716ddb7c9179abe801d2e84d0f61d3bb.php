<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/shopping_list_buttons/shopping_list_buttons.yml
 */

class __Oro_Layout_Update_3f8db393434b2ad8a7021dcb7a676a2f716ddb7c9179abe801d2e84d0f61d3bb implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/shopping_list_buttons/shopping_list_buttons.html.twig' );
        $layoutManipulator->add( '__line_item_form_buttons_shopping_list', '__root', 'add_to_shopping_list_form_button', array (
          'visible' => '=data["acl"].isGranted("oro_shopping_list_frontend_update") || data["feature"].isFeatureEnabled("guest_shopping_list")',
          'shoppingLists' => '=data["oro_shopping_list_customer_user_shopping_lists"].getShoppingLists()',
          'productShoppingLists' => '=data.offsetExists("product") ? data["oro_shopping_list_product_units_quantity"].getByProduct(data["oro_product_variant"].getProductVariantOrProduct(data)) : []',
          'vars' => 
          array (
            'matrixFormType' => '=data.offsetExists("product") ? data["product_view_form_availability_provider"].getAvailableMatrixFormType(data["product"]) : "none"',
            'product' => '=data.offsetExists("product") ? data["oro_product_variant"].getProductVariantOrProduct(data)',
          ),
        ), NULL, true );
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
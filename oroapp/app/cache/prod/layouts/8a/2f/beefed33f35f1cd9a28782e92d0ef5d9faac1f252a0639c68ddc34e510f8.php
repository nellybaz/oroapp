<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_line_item_form/oro_product_line_item_form.yml
 */

class __Oro_Layout_Update_8a2fbeefed33f35f1cd9a28782e92d0ef5d9faac1f252a0639c68ddc34e510f8 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_line_item_form/oro_product_line_item_form.html.twig' );
        $layoutManipulator->add( '__line_item_form', '__root', 'container' );
        $layoutManipulator->add( '__line_item_form_start', '__line_item_form', 'form_start', array (
          'form' => '=data["oro_product_form"].getLineItemFormView(data.offsetExists("product")?data["product"], instance_name)',
        ) );
        $layoutManipulator->add( '__line_item_form_fields', '__line_item_form', 'form_fields', array (
          'vars' => 
          array (
            'form' => '=data["oro_product_form"].getLineItemFormView(data.offsetExists("product")?data["product"], instance_name)',
            'singleUnitMode' => '=data["oro_product_single_unit_mode"].isSingleUnitMode()',
            'singleUnitModeCodeVisible' => '=data["oro_product_single_unit_mode"].isSingleUnitModeCodeVisible()',
            'defaultUnitCode' => '=data["oro_product_single_unit_mode"].getDefaultUnitCode()',
          ),
        ) );
        $layoutManipulator->add( '__line_item_form_buttons', '__line_item_form', 'container' );
        $layoutManipulator->add( '__line_item_view_details', '__line_item_form_buttons', 'link', array (
          'visible' => '=data["feature"].isFeatureEnabled("guest_shopping_list") || data["feature"].isFeatureEnabled("guest_rfp") || context["is_logged_in"]',
          'text' => 
          array (
            'label' => 'oro.product.frontend.index.view_details',
          ),
        ) );
        $layoutManipulator->add( '__line_item_form_end', '__line_item_form', 'form_end', array (
          'form' => '=data["oro_product_form"].getLineItemFormView(data.offsetExists("product")?data["product"], instance_name)',
        ) );
        $layoutManipulator->move( '__line_item_form_buttons', '__line_item_form', '__line_item_form_fields' );
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
            'id' => 'line_item_buttons',
            'root' => '__line_item_form_buttons',
          ),
        );
    }

    public function getImport()
    {
        return $this->import;
    }
}
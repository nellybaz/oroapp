<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_totals/oro_product_totals.yml
 */

class __Oro_Layout_Update_31a58f97372f28b67758e7866c5969a835b4e83a03f75b14b6d06a8b13572ca6 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_totals/oro_product_totals.html.twig' );
        $layoutManipulator->add( '__totals', '__root', 'container', array (
          'visible' => '=data["feature"].isFeatureEnabled("guest_shopping_list") || data["feature"].isFeatureEnabled("guest_rfp") || context["is_logged_in"]',
        ) );
        $layoutManipulator->add( '__totals_wrapper', '__totals', 'container' );
        $layoutManipulator->add( '__quantity', '__totals_wrapper', 'container' );
        $layoutManipulator->add( '__quantity_text', '__quantity', 'text', array (
          'text' => 'oro.frontend.shoppinglist.matrix_grid_order.total_qty',
        ) );
        $layoutManipulator->add( '__quantity_value', '__quantity', 'block' );
        $layoutManipulator->add( '__separator', '__totals_wrapper', 'block' );
        $layoutManipulator->add( '__total', '__totals_wrapper', 'container' );
        $layoutManipulator->add( '__total_text', '__total', 'text', array (
          'text' => 'oro.frontend.shoppinglist.matrix_grid_order.total',
        ) );
        $layoutManipulator->add( '__total_value', '__total', 'block' );
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
<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_price/oro_product_price.yml
 */

class __Oro_Layout_Update_6511847d84e7411ce418276ec921240c8b141746b4bd30a13adaaffc22455dc0 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_price/oro_product_price.html.twig' );
        $layoutManipulator->add( '__product_price_container', '__root', 'product_prices', array (
          'productPrices' => '=product ? data["frontend_product_prices"].getByProduct(product) : []',
          'attributeFamily' => '=context.offsetExists("attribute_family") ? context["attribute_family"] : null',
          'isPriceUnitsVisible' => '=product ? data["oro_price_unit_visibility"].isPriceUnitsVisibleByProduct(product) : true',
        ) );
        $layoutManipulator->add( '__product_price_hint', '__product_price_container', 'container' );
        $layoutManipulator->add( '__product_price_hint_content', '__product_price_hint', 'block' );
        $layoutManipulator->add( '__product_price', '__product_price_hint', 'container' );
        $layoutManipulator->add( '__product_price_value', '__product_price', 'block' );
        $layoutManipulator->add( '__product_price_not_found', '__product_price', 'block' );
        $layoutManipulator->add( '__product_price_listed', '__product_price_hint', 'block' );
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
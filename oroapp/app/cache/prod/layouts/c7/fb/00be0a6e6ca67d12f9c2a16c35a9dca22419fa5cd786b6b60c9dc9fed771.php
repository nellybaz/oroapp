<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_grid/grid.yml
 */

class __Oro_Layout_Update_c7fb00be0a6e6ca67d12f9c2a16c35a9dca22419fa5cd786b6b60c9dc9fed771 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
          0 => '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_grid/grid.html.twig',
          1 => '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_grid/grid_row.html.twig',
        ) );
        $layoutManipulator->add( 'sticky_element_toolbar', 'top_sticky_panel_content', 'block', array (
        ), 'sticky_header_row' );
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
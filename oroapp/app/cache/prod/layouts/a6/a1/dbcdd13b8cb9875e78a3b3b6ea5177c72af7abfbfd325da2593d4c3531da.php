<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/imports/datagrid_toolbar/layout_mobile.yml
 */

class __Oro_Layout_Update_a6a1dbcdd13b8cb9875e78a3b3b6ea5177c72af7abfbfd325da2593d4c3531da implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    private $parentLayoutUpdate;
    private $import;

    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }
        if (null === $this->import) {
            throw new \RuntimeException('Missing import configuration for layout update');
        }

        if ($this->parentLayoutUpdate instanceof Oro\Component\Layout\IsApplicableLayoutUpdateInterface
            && !$this->parentLayoutUpdate->isApplicable($item->getContext())) {
            return;
        }

        $layoutManipulator  = new ImportLayoutManipulator($layoutManipulator, $this->import);
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/imports/datagrid_toolbar/layout_mobile.html.twig' );
        $layoutManipulator->remove( '__datagrid_toolbar_extra_actions' );
        $layoutManipulator->remove( '__datagrid_toolbar_tools_container' );
        $layoutManipulator->move( '__datagrid_toolbar_actions', 'datagrid_toolbar', NULL, true );
        $layoutManipulator->add( '__datagrid_toolbar_pagination_container', '__datagrid_toolbar', 'container' );
        $layoutManipulator->move( '__datagrid_toolbar_pagination', '__datagrid_toolbar_pagination_container' );
        $layoutManipulator->move( '__datagrid_toolbar_page_size', '__datagrid_toolbar_pagination_container', '__datagrid_toolbar_pagination' );
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
        return ($context["is_mobile"] == true);
    }

    public function getImport()
    {
        return $this->import;
    }
}
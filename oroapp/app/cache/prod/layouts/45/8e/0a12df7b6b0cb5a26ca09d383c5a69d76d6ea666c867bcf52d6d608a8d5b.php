<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/datagrid_views/datagrid_views.yml
 */

class __Oro_Layout_Update_458e0a12df7b6b0cb5a26ca09d383c5a69d76d6ea666c867bcf52d6d608a8d5b implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/datagrid_views/datagrid_views.html.twig' );
        $layoutManipulator->add( '__datagrid_views', '__root', 'container' );
        $layoutManipulator->add( '__datagrid_views_toolbar', '__datagrid_views', 'container' );
        $layoutManipulator->add( '__datagrid_views_toolbar_header', '__datagrid_views_toolbar', 'container' );
        $layoutManipulator->add( '__datagrid_views_container_label', '__datagrid_views_toolbar_header', 'block' );
        $layoutManipulator->add( '__datagrid_views_container_edit_label', '__datagrid_views_toolbar', 'container' );
        $layoutManipulator->add( '__datagrid_views_popup', '__datagrid_views_toolbar', 'container' );
        $layoutManipulator->add( '__datagrid_views_popup_close', '__datagrid_views_popup', 'block' );
        $layoutManipulator->add( '__datagrid_views_popup_container', '__datagrid_views_popup', 'container' );
        $layoutManipulator->add( '__datagrid_views_popup_title', '__datagrid_views_popup_container', 'block' );
        $layoutManipulator->add( '__datagrid_views_popup_list', '__datagrid_views_popup_container', 'container' );
        $layoutManipulator->add( '__datagrid_views_popup_list_item', '__datagrid_views_popup_list', 'container' );
        $layoutManipulator->add( '__datagrid_views_popup_footer', '__datagrid_views_popup_container', 'container' );
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
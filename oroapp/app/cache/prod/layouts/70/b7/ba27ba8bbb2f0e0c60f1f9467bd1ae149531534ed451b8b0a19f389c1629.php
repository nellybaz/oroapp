<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/datagrid_toolbar/datagrid.yml
 */

class __Oro_Layout_Update_70b7ba27ba8bbb2f0e0c60f1f9467bd1ae149531534ed451b8b0a19f389c1629 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/datagrid_toolbar/datagrid.html.twig' );
        $layoutManipulator->setOption( '__datagrid_toolbar_sorting', 'visible', false );
        $layoutManipulator->setOption( '__datagrid_toolbar_mass_actions', 'visible', false );
        $layoutManipulator->setOption( '__datagrid_toolbar_extra_actions', 'visible', false );
        $layoutManipulator->move( '__datagrid_toolbar_sorting', '__datagrid_toolbar_leftside_container' );
        $layoutManipulator->move( '__datagrid_toolbar_mass_actions', '__datagrid_toolbar_leftside_container' );
        $layoutManipulator->move( '__datagrid_toolbar_extra_actions', '__datagrid_toolbar_leftside_container', '__datagrid_toolbar_mass_actions' );
        $layoutManipulator->move( '__datagrid_toolbar_pagination', '__datagrid_toolbar_base_container' );
        $layoutManipulator->move( '__datagrid_toolbar_page_size', '__datagrid_toolbar_rightside_container' );
        $layoutManipulator->move( '__datagrid_toolbar_actions', '__datagrid_toolbar_rightside_container' );
        $layoutManipulator->move( '__datagrid_toolbar_items_counter', '__datagrid_toolbar_leftside_container' );
        $layoutManipulator->move( '__datagrid_items_counter', '__datagrid_toolbar_leftside_container', '__datagrid_toolbar_sorting' );
        $layoutManipulator->remove( '__datagrid_toolbar_actions_container' );
        $layoutManipulator->remove( '__datagrid_toolbar_tools_container' );
        $layoutManipulator->add( '__datagrid_toolbar_button_container', '__datagrid_toolbar_leftside_container', 'container', array (
          'visible' => false,
          'class_prefix' => 'datagrid_toolbar_button_container',
        ) );
        $layoutManipulator->add( '__datagrid_toolbar_leftside_container', '__datagrid_toolbar', 'container' );
        $layoutManipulator->add( '__datagrid_toolbar_base_container', '__datagrid_toolbar', 'container' );
        $layoutManipulator->add( '__datagrid_toolbar_rightside_container', '__datagrid_toolbar', 'container' );
        $layoutManipulator->add( '__datagrid_toolbar_filter_container', '__datagrid_toolbar', 'container' );
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
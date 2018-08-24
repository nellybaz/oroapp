<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/datagrid/datagrid.yml
 */

class __Oro_Layout_Update_b01be9a0118d00fc24b098f44b6567ac67060ac1cc72751f0eb9664dab1e802b implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/datagrid/datagrid.html.twig' );
        $layoutManipulator->setOption( '__datagrid', 'grid_render_parameters', array (
          'cssClass' => 'frontend-datagrid',
          'enableFloatingHeaderPlugin' => false,
          'enableToggleFilters' => true,
          'themeOptions' => 
          array (
            'actionsDropdown' => 'auto',
            'actionOptions' => 
            array (
              'refreshAction' => 
              array (
                'launcherOptions' => 
                array (
                  'className' => 'btn btn--default btn--size-s refresh-action',
                  'icon' => 'undo fa--no-offset',
                  'iconHideText' => true,
                ),
              ),
              'resetAction' => 
              array (
                'launcherOptions' => 
                array (
                  'className' => 'btn btn--default btn--size-s reset-action',
                  'icon' => 'refresh fa--no-offset',
                  'iconHideText' => true,
                ),
              ),
            ),
            'customModules' => 
            array (
              'columnManagerComponent' => 'orofrontend/js/app/components/column-manager/frontend-column-manager-component',
            ),
          ),
          'toolbarOptions' => 
          array (
            'actionsPanel' => 
            array (
              'className' => 'btn-group not-expand frontend-datagrid__panel',
            ),
            'itemsCounter' => 
            array (
              'className' => 'datagrid-tool',
            ),
            'hideItemsCounter' => false,
          ),
          'filterContainerSelector' => '[data-grid-toolbar="top"] [data-datafilter-container]',
        ) );
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
            'id' => 'datagrid_views',
            'root' => '__root',
          ),
        );
    }

    public function getImport()
    {
        return $this->import;
    }
}
<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/imports/datagrid/layout.yml
 */

class __Oro_Layout_Update_246229e67b5e044c1225278141fba5e16b969e292899a3c8d963e7838e001330 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->add( '__datagrid', '__root', 'datagrid' );
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
            'id' => 'datagrid_toolbar',
            'root' => '__root',
          ),
        );
    }

    public function getImport()
    {
        return $this->import;
    }
}
<?php

use Oro\Component\Layout\ImportLayoutManipulator;

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_form/oro_customer_form.yml
 */

class __Oro_Layout_Update_23fdd064215b452043d189fc62fa72bc7765c8a678da3f487f940ea00956b2d3 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\LayoutUpdateImportInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
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
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_form/oro_customer_form.html.twig' );
        $layoutManipulator->add( '__page_wrapper', '__root', 'vertical_container' );
        $layoutManipulator->add( '__page', '__page_wrapper', 'container' );
        $layoutManipulator->add( '__label_wrapper', '__page', 'container' );
        $layoutManipulator->add( '__label', '__label_wrapper', 'text', array (
          'text' => '',
        ) );
        $layoutManipulator->add( '__description', '__page', 'text', array (
          'visible' => '=text!=null',
          'text' => '',
        ) );
        $layoutManipulator->add( '__form', '__page', 'form' );
        $layoutManipulator->add( '__form_submit_wrapper', '__page', 'container' );
        $layoutManipulator->add( '__form_submit', '__form_submit_wrapper', 'button', array (
          'type' => 'input',
          'action' => 'submit',
          'style' => 'auto',
          'text' => '',
        ) );
        $layoutManipulator->add( '__links', '__page', 'container' );
        $layoutManipulator->move( '__form_submit_wrapper', '__form', '__form_end', true );
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
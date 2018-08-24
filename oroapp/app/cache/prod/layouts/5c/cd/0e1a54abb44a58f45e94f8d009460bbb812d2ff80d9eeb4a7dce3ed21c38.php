<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/main_menu_logged.yml
 */

class __Oro_Layout_Update_5ccd0e1a54abb44a58f45e94f8d009460bbb812d2ff80d9eeb4a7dce3ed21c38 implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\ImportsAwareLayoutUpdateInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/main_menu_logged.html.twig' );
        $layoutManipulator->add( 'header_row_customer', 'header_row', 'container', array (
        ), 'header_row_shopping', true );
        $layoutManipulator->add( 'header_row_customer_trigger', 'header_row_customer', 'container' );
        $layoutManipulator->add( 'header_row_customer_container', 'header_row_customer_trigger', 'container' );
    }

    public function isApplicable(\Oro\Component\Layout\ContextInterface $context)
    {
        return $context["is_logged_in"];
    }

    public function getImports()
    {
        return array (
          0 => 
          array (
            'id' => 'oro_customer_menu',
            'root' => 'header_row_customer_container',
            'namespace' => 'head_customer_menu',
          ),
        );
    }
}
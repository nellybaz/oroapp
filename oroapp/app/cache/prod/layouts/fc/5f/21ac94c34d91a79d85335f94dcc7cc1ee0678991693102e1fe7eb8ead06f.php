<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/main_menu_anonymous.yml
 */

class __Oro_Layout_Update_fc5f21ac94c34d91a79d85335f94dcc7cc1ee0678991693102e1fe7eb8ead06f implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/main_menu_anonymous.html.twig' );
        $layoutManipulator->add( 'header_row_customer', 'header_row', 'link', array (
          'route_name' => 'oro_customer_customer_user_security_login',
        ) );
    }

    public function isApplicable(\Oro\Component\Layout\ContextInterface $context)
    {
        return (!$context["is_logged_in"]);
    }
}
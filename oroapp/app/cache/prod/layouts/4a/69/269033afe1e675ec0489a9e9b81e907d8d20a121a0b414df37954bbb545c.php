<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/top_nav_logged.yml
 */

class __Oro_Layout_Update_4a69269033afe1e675ec0489a9e9b81e907d8d20a121a0b414df37954bbb545c implements \Oro\Component\Layout\LayoutUpdateInterface, \Oro\Component\Layout\IsApplicableLayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        if (!$this->isApplicable($item->getContext())) {
            return;
        }
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/top_nav_logged.html.twig' );
    }

    public function isApplicable(\Oro\Component\Layout\ContextInterface $context)
    {
        return $context["is_logged_in"];
    }
}
<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/middle_bar.yml
 */

class __Oro_Layout_Update_3a205e49ed68738b49ee1492900ef10f2e7b214bd7002b85e88cbbb986c2ede4 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/middle_bar.html.twig' );
        $layoutManipulator->add( 'middle_bar_search', 'middle_bar_center', 'block' );
    }
}
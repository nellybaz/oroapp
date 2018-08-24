<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/require_js_config.yml
 */

class __Oro_Layout_Update_ebc924e12ba7f55a8df36952d362e8930d0c070fd2c5caba97824632f7438950 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/require_js_config.html.twig' );
        $layoutManipulator->add( 'require_js_config', 'require_js', 'block' );
        $layoutManipulator->add( 'require_js_multi_select_filter_config', 'require_js', 'block', array (
          'visible' => '=data["system_config_provider"].getValue("oro_frontend.filter_value_selectors")=="all_at_once"',
        ) );
    }
}
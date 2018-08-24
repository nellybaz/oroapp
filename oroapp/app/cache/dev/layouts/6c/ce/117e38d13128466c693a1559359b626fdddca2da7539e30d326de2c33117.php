<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FrontendLocalizationBundle/Resources/views/layouts/default/page/localization_switcher.yml
 */

class __Oro_Layout_Update_6cce117e38d13128466c693a1559359b626fdddca2da7539e30d326de2c33117 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->add( 'localization_switcher', 'top_nav_menu_container', 'localization_switcher', array (
          'localizations' => '=data["frontend_localization"].getEnabledLocalizations()',
          'selected_localization' => '=data["frontend_localization"].getCurrentLocalization()',
        ), 'top_nav' );
    }
}
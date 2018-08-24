<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FrontendLocalizationBundle/Resources/views/layouts/default/layout.yml
 */

class __Oro_Layout_Update_b2a7602839ed716bee0e831c9991df5df1664655d3a8975121055cc6006ec971 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FrontendLocalizationBundle/Resources/views/layouts/default/layout.html.twig' );
        $layoutManipulator->add( 'localization_switcher_trigger', 'header_row', 'localization_switcher', array (
          'localizations' => '=data["frontend_localization"].getEnabledLocalizations()',
          'selected_localization' => '=data["frontend_localization"].getCurrentLocalization()',
        ), 'header_row_customer', false );
    }
}
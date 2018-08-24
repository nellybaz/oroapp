<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/default/page/currency_switcher.yml
 */

class __Oro_Layout_Update_364fe3462dc7ec3fb1601c39a20c3f74077042729d1cbdf68fa5bc7cb827ac66 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->add( 'currency_switcher', 'top_nav_menu_container', 'currency_switcher', array (
          'currencies' => '=data["oro_pricing_currency"].getAvailableCurrencies()',
          'selected_currency' => '=data["oro_pricing_currency"].getUserCurrency()',
        ), 'top_nav' );
    }
}
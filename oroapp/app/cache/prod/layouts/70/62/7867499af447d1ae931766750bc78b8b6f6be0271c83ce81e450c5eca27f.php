<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/layout.yml
 */

class __Oro_Layout_Update_70627867499af447d1ae931766750bc78b8b6f6be0271c83ce81e450c5eca27f implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/layout.html.twig' );
        $layoutManipulator->add( 'contact_info', 'page_footer_side', 'sale_representative_info', array (
          'blockView' => '=data["oro_sale_contact_info_widget_provider"].getContactInfoBlock()',
        ) );
    }
}
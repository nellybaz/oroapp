<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_cms_frontend_page_view/layout.yml
 */

class __Oro_Layout_Update_56a3454656dc0613780fd5e129288ccf4ebd1ce73fc6ed39a9091870396c3af3 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_cms_frontend_page_view/layout.html.twig' );
        $layoutManipulator->setOption( 'title', 'params', array (
          '%title%' => '=data["locale"].getLocalizedValue(data["page"].getTitles())',
        ) );
        $layoutManipulator->setOption( 'page_title', 'defaultValue', '=data["locale"].getLocalizedValue(data["page"].getTitles())' );
        $layoutManipulator->add( 'cms_page_content', 'page_content', 'text_with_placeholders', array (
          'text' => '=data["page"].getContent()',
        ) );
    }
}
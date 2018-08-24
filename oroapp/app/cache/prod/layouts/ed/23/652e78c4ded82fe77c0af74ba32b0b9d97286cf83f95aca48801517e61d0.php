<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_frontend_root/home_page_slider.yml
 */

class __Oro_Layout_Update_ed23652e78c4ded82fe77c0af74ba32b0b9d97286cf83f95aca48801517e61d0 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_frontend_root/default.html.twig' );
        $layoutManipulator->add( 'hero_promo', 'page_content', 'content_block', array (
          'alias' => 'home-page-slider',
        ), NULL, true );
    }
}
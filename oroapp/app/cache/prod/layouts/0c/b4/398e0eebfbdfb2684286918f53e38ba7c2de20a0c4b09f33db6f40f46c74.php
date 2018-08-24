<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/components.yml
 */

class __Oro_Layout_Update_0cb4398e0eebfbdfb2684286918f53e38ba7c2de20a0c4b09f33db6f40f46c74 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/components.html.twig' );
        $layoutManipulator->add( 'copyright', 'page_footer', 'text', array (
          'text' => 'oro_frontend.copyright',
          'escape' => false,
        ), NULL, false );
    }
}
<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/logo.yml
 */

class __Oro_Layout_Update_72e24d44b26b1c450e685a64e9d1192b0df6a7c29cb52335932c8a0a5012fb89 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->add( 'logo', 'middle_bar_logo', 'logo' );
        $layoutManipulator->add( 'logo_print', 'page_container', 'logo', array (
          'attr' => 
          array (
            'class' => 'logo--print-only',
          ),
          'renderLink' => false,
        ), 'page_header' );
    }
}
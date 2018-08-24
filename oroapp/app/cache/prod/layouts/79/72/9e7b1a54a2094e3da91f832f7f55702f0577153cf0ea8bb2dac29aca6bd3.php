<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/oro_frontend_exception/exception.yml
 */

class __Oro_Layout_Update_79729e7b1a54a2094e3da91f832f7f55702f0577153cf0ea8bb2dac29aca6bd3 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( 'OroFrontendBundle:layouts:default/oro_frontend_exception/exception.html.twig' );
        $layoutManipulator->setOption( 'title', 'params', array (
          '%status%' => '=data["status_text"]',
        ) );
        $layoutManipulator->add( 'exception', 'page_content', 'exception', array (
          'status_code' => '=data["status_code"]',
          'status_text' => '=data["status_text"]',
        ) );
    }
}
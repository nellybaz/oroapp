<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.yml
 */

class __Oro_Layout_Update_cf51f4eaf57216a7a7aff0c2de64b327a0072277c2551ed0c6239a3fb4d7d43e implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->setBlockTheme( '/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig' );
        $layoutManipulator->add( 'head', 'root', 'head' );
        $layoutManipulator->add( 'title', 'head', 'title', array (
          'defaultValue' => '=data["title_provider"].getTitle(context["route_name"], params)',
          'value' => '=defaultValue',
          'params' => 
          array (
          ),
        ) );
        $layoutManipulator->add( 'meta_charset', 'head', 'meta', array (
          'charset' => 'utf-8',
        ) );
        $layoutManipulator->add( 'meta_viewport', 'head', 'meta', array (
          'name' => 'viewport',
          'content' => 'width=device-width, initial-scale=1',
        ) );
        $layoutManipulator->add( 'theme_icon', 'head', 'external_resource', array (
          'visible' => '=data["theme"].getIcon(context["theme"])!=null',
          'href' => '=data["asset"].getUrl(data["theme"].getIcon(context["theme"]))',
          'rel' => 'shortcut icon',
        ) );
        $layoutManipulator->add( 'styles', 'head', 'style', array (
          'src' => '=data["asset"].getUrl(data["theme"].getStylesOutput(context["theme"]))',
        ) );
        $layoutManipulator->add( 'require_js', 'head', 'container' );
        $layoutManipulator->add( 'requirejs_scripts', 'require_js', 'requires', array (
          'provider_alias' => 'oro_layout_requirejs_config_provider',
        ) );
        $layoutManipulator->add( 'require_modules', 'head', 'container' );
        $layoutManipulator->add( 'app_script', 'require_modules', 'script', array (
          'content' => 'require(["oroui/js/app"]);',
        ) );
        $layoutManipulator->add( 'body', 'root', 'body' );
        $layoutManipulator->add( 'wrapper', 'body', 'container' );
        $layoutManipulator->add( 'page_container', 'wrapper', 'container' );
        $layoutManipulator->add( 'page_main', 'page_container', 'container' );
        $layoutManipulator->add( 'page_main_content', 'page_main', 'container' );
        $layoutManipulator->add( 'page_main_header', 'page_main_content', 'container' );
        $layoutManipulator->add( 'page_sidebar', 'page_main_content', 'container' );
        $layoutManipulator->add( 'page_content', 'page_main_content', 'container' );
    }
}
<?php

/**
 * Filename: /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/favicon.yml
 */

class __Oro_Layout_Update_ffd5892aeb202afc4a15a530369de4e46f224bfbb2524c174d4c050c89e42ee6 implements \Oro\Component\Layout\LayoutUpdateInterface
{
    public function updateLayout(\Oro\Component\Layout\LayoutManipulatorInterface $layoutManipulator, \Oro\Component\Layout\LayoutItemInterface $item)
    {
        $layoutManipulator->add( 'apple_57x57', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/apple-touch-icon-57x57.png")',
          'rel' => 'apple-touch-icon',
          'attr' => 
          array (
            'sizes' => '57x57',
          ),
        ) );
        $layoutManipulator->add( 'apple_60x60', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/apple-touch-icon-60x60.png")',
          'rel' => 'apple-touch-icon',
          'attr' => 
          array (
            'sizes' => '60x60',
          ),
        ) );
        $layoutManipulator->add( 'apple_72x72', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/apple-touch-icon-72x72.png")',
          'rel' => 'apple-touch-icon',
          'attr' => 
          array (
            'sizes' => '72x72',
          ),
        ) );
        $layoutManipulator->add( 'apple_76x76', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/apple-touch-icon-76x76.png")',
          'rel' => 'apple-touch-icon',
          'attr' => 
          array (
            'sizes' => '76x76',
          ),
        ) );
        $layoutManipulator->add( 'apple_114x114', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/apple-touch-icon-114x114.png")',
          'rel' => 'apple-touch-icon',
          'attr' => 
          array (
            'sizes' => '114x114',
          ),
        ) );
        $layoutManipulator->add( 'apple_120x120', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/apple-touch-icon-120x120.png")',
          'rel' => 'apple-touch-icon',
          'attr' => 
          array (
            'sizes' => '120x120',
          ),
        ) );
        $layoutManipulator->add( 'apple_144x144', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/apple-touch-icon-144x144.png")',
          'rel' => 'apple-touch-icon',
          'attr' => 
          array (
            'sizes' => '144x144',
          ),
        ) );
        $layoutManipulator->add( 'apple_152x152', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/apple-touch-icon-152x152.png")',
          'rel' => 'apple-touch-icon',
          'attr' => 
          array (
            'sizes' => '152x152',
          ),
        ) );
        $layoutManipulator->add( 'apple_180x180', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/apple-touch-icon-180x180.png")',
          'rel' => 'apple-touch-icon',
          'attr' => 
          array (
            'sizes' => '180x180',
          ),
        ) );
        $layoutManipulator->add( 'favicon_32x32', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/favicon-32x32.png")',
          'type' => 'image/png',
          'rel' => 'icon',
          'attr' => 
          array (
            'sizes' => '32x32',
          ),
        ) );
        $layoutManipulator->add( 'android_chrome_192x192', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/android-chrome-192x192.png")',
          'type' => 'image/png',
          'rel' => 'icon',
          'attr' => 
          array (
            'sizes' => '192x192',
          ),
        ) );
        $layoutManipulator->add( 'favicon_96x96', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/favicon-96x96.png")',
          'type' => 'image/png',
          'rel' => 'icon',
          'attr' => 
          array (
            'sizes' => '96x96',
          ),
        ) );
        $layoutManipulator->add( 'favicon_16x16', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/favicon-16x16.png")',
          'type' => 'image/png',
          'rel' => 'icon',
          'attr' => 
          array (
            'sizes' => '16x16',
          ),
        ) );
        $layoutManipulator->add( 'favicon_manifest', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/manifest.json")',
          'rel' => 'manifest',
        ) );
        $layoutManipulator->add( 'favicon_mask_icon', 'head', 'external_resource', array (
          'href' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/safari-pinned-tab.svg")',
          'rel' => 'mask-icon',
          'attr' => 
          array (
            'color' => '#BE481F',
          ),
        ) );
        $layoutManipulator->add( 'msapplication_tilecolor', 'head', 'meta', array (
          'name' => 'msapplication-TileColor',
          'content' => '#BE481F',
        ) );
        $layoutManipulator->add( 'msapplication_tileimage', 'head', 'meta', array (
          'name' => 'msapplication-TileImage',
          'content' => '=data["asset"].getUrl("bundles/orofrontend/default/favicons/mstile-144x144.png")',
        ) );
        $layoutManipulator->add( 'favicon_theme_icon', 'head', 'meta', array (
          'name' => 'theme-color',
          'content' => '#ffffff',
        ) );
    }
}
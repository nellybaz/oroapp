<?php

/* @OroFrontend/layouts/default/page/favicon.yml */
class __TwigTemplate_c45af622a5282c1ebfafcfe17463a582da6148e921073dc32e1e76234fa5ddf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "layout:
    actions:
        - '@addTree':
            items:
                apple_57x57:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/apple-touch-icon-57x57.png\")'
                        rel: apple-touch-icon
                        attr:
                            sizes: 57x57
                apple_60x60:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/apple-touch-icon-60x60.png\")'
                        rel: apple-touch-icon
                        attr:
                            sizes: 60x60
                apple_72x72:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/apple-touch-icon-72x72.png\")'
                        rel: apple-touch-icon
                        attr:
                            sizes: 72x72
                apple_76x76:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/apple-touch-icon-76x76.png\")'
                        rel: apple-touch-icon
                        attr:
                            sizes: 76x76
                apple_114x114:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/apple-touch-icon-114x114.png\")'
                        rel: apple-touch-icon
                        attr:
                            sizes: 114x114
                apple_120x120:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/apple-touch-icon-120x120.png\")'
                        rel: apple-touch-icon
                        attr:
                            sizes: 120x120
                apple_144x144:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/apple-touch-icon-144x144.png\")'
                        rel: apple-touch-icon
                        attr:
                            sizes: 144x144
                apple_152x152:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/apple-touch-icon-152x152.png\")'
                        rel: apple-touch-icon
                        attr:
                            sizes: 152x152
                apple_180x180:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/apple-touch-icon-180x180.png\")'
                        rel: apple-touch-icon
                        attr:
                            sizes: 180x180
                favicon_32x32:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/favicon-32x32.png\")'
                        type: image/png
                        rel: icon
                        attr:
                            sizes: 32x32
                android_chrome_192x192:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/android-chrome-192x192.png\")'
                        type: image/png
                        rel: icon
                        attr:
                            sizes: 192x192
                favicon_96x96:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/favicon-96x96.png\")'
                        type: image/png
                        rel: icon
                        attr:
                            sizes: 96x96
                favicon_16x16:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/favicon-16x16.png\")'
                        type: image/png
                        rel: icon
                        attr:
                            sizes: 16x16
                favicon_manifest:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/manifest.json\")'
                        rel: manifest
                favicon_mask_icon:
                    blockType: external_resource
                    options:
                        href: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/safari-pinned-tab.svg\")'
                        rel: mask-icon
                        attr:
                            color: '#BE481F'
                msapplication_tilecolor:
                    blockType: meta
                    options:
                        name: msapplication-TileColor
                        content: '#BE481F'
                msapplication_tileimage:
                    blockType: meta
                    options:
                        name: msapplication-TileImage
                        content: '=data[\"asset\"].getUrl(\"bundles/orofrontend/default/favicons/mstile-144x144.png\")'
                favicon_theme_icon:
                    blockType: meta
                    options:
                        name: theme-color
                        content: '#ffffff'
            tree:
                head:
                    apple_57x57: ~
                    apple_60x60: ~
                    apple_72x72: ~
                    apple_76x76: ~
                    apple_114x114: ~
                    apple_120x120: ~
                    apple_144x144: ~
                    apple_152x152: ~
                    apple_180x180: ~
                    favicon_32x32: ~
                    android_chrome_192x192: ~
                    favicon_96x96: ~
                    favicon_16x16: ~
                    favicon_manifest: ~
                    favicon_mask_icon: ~
                    msapplication_tilecolor: ~
                    msapplication_tileimage: ~
                    favicon_theme_icon: ~
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/page/favicon.yml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroFrontend/layouts/default/page/favicon.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/favicon.yml");
    }
}

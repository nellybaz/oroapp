<?php

/* @OroUI/layouts/blank/page/layout.yml */
class __TwigTemplate_90fcba898e7bca3b3f711180139f87e743b4d9d3b73bbe80e61248aa35fd9b14 extends Twig_Template
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
        - '@setBlockTheme':
            themes: 'layout.html.twig'
        - '@addTree':
            items:
                head:
                    blockType: head
                title:
                    blockType: title
                    options:
                        defaultValue: '=data[\"title_provider\"].getTitle(context[\"route_name\"], params)'
                        value: '=defaultValue'
                        params: []
                meta_charset:
                    blockType: meta
                    options:
                        charset: 'utf-8'
                meta_viewport:
                    blockType: meta
                    options:
                        name: viewport
                        content: 'width=device-width, initial-scale=1'
                theme_icon:
                    blockType: external_resource
                    options:
                        visible: '=data[\"theme\"].getIcon(context[\"theme\"])!=null'
                        href: '=data[\"asset\"].getUrl(data[\"theme\"].getIcon(context[\"theme\"]))'
                        rel: shortcut icon
                styles:
                    blockType: style
                    options:
                        src: '=data[\"asset\"].getUrl(data[\"theme\"].getStylesOutput(context[\"theme\"]))'
                body:
                    blockType: body
                wrapper:
                      blockType: container
                page_container:
                    blockType: container
                page_main:
                    blockType: container
                page_main_content:
                    blockType: container
                page_main_header:
                    blockType: container
                page_sidebar:
                    blockType: container
                page_content:
                    blockType: container
                require_js:
                    blockType: container
                requirejs_scripts:
                    blockType: requires
                    options:
                        provider_alias: oro_layout_requirejs_config_provider
                require_modules:
                    blockType: container
                app_script:
                    blockType: script
                    options:
                        content: 'require([\"oroui/js/app\"]);'
            tree:
                root:
                    head:
                        title: ~
                        meta_charset: ~
                        meta_viewport: ~
                        theme_icon: ~
                        styles: ~
                        require_js:
                            requirejs_scripts: ~
                        require_modules:
                            app_script: ~
                    body:
                        wrapper:
                            page_container:
                                page_main:
                                    page_main_content:
                                        page_main_header: ~
                                        page_sidebar: ~
                                        page_content: ~
";
    }

    public function getTemplateName()
    {
        return "@OroUI/layouts/blank/page/layout.yml";
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
        return new Twig_Source("", "@OroUI/layouts/blank/page/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.yml");
    }
}

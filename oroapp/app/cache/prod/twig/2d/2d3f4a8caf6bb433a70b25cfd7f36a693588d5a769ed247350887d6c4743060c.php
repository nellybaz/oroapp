<?php

/* @OroFrontend/layouts/blank/imports/style-book/layout.yml */
class __TwigTemplate_53d6116861dac6a65bd4dfc331e1191bf9584944c1367d9747065c7e6bb4ae4c extends Twig_Template
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
    imports:
        -
            id: style-book-menu
    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'

        - '@remove':
            id: wrapper

        - '@move':
            id: logo
            parentId: style_book_header_inner

        - '@move':
            id: page_title_container
            parentId: style_book_content
            prepend: true

        - '@add':
            id: stylebook_styles
            parentId: head
            blockType: style
            options:
                src: '=data[\"asset\"].getUrl(data[\"theme\"].getStylesOutput(context[\"theme\"], \"stylebook_styles\"))'

        - '@add':
            id: style_book_init_code_highlighter
            parentId: head
            blockType: block

        - '@addTree':
            items:
                style_book:
                    blockType: container
                style_book_container:
                    blockType: container
                style_book_header:
                    blockType: container
                style_book_header_inner:
                    blockType: container
                style_book_groups_nav_container:
                    blockType: container
                style_book_groups_menu:
                    blockType: container
                style_book_sticky_panel:
                    blockType: container
                style_book_sticky_panel_content:
                    blockType: container
                style_book_sticky_element:
                    blockType: container
                style_book_sticky_element_sidebar:
                    blockType: container
                style_book_main:
                    blockType: container
                style_book_content:
                    blockType: container
                style_book_elements_nav_container:
                    blockType: container
                style_book_elements_nav_title:
                    blockType: block
                style_book_elements_nav:
                    blockType: container

            tree:
                body:
                    style_book:
                        style_book_container:
                            style_book_header:
                                style_book_header_inner: ~
                                style_book_groups_nav_container:
                                    style_book_groups_menu: ~
                            style_book_sticky_panel:
                                style_book_sticky_panel_content:
                                    style_book_sticky_element:
                                        style_book_sticky_element_sidebar: ~
                            style_book_main:
                                style_book_content: ~
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/imports/style-book/layout.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/imports/style-book/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/style-book/layout.yml");
    }
}

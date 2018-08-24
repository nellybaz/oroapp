<?php

/* @OroFrontend/layouts/blank/imports/style-book-sidebar/sidebar.yml */
class __TwigTemplate_a6697f5cf42304b56b2354b6247beb79fcb2d10f1f9e76eef856eee75a05d53a extends Twig_Template
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
            themes: 'sidebar.html.twig'

        - '@addTree':
            items:
                style_book_main:
                    blockType: container
                style_book_sidebar:
                    blockType: container
                style_book_elements_nav_container:
                    blockType: container
                style_book_elements_nav_title:
                    blockType: block
                style_book_elements_nav:
                    blockType: container

            tree:
                style_book_main:
                    style_book_sidebar:
                        style_book_elements_nav_container:
                            style_book_elements_nav_title: ~
                            style_book_elements_nav: ~
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/imports/style-book-sidebar/sidebar.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/imports/style-book-sidebar/sidebar.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/style-book-sidebar/sidebar.yml");
    }
}

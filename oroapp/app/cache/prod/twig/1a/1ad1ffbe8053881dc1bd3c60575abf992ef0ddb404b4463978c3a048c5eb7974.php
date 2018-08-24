<?php

/* @OroCommerceMenu/layouts/blank/page/footer_menu.yml */
class __TwigTemplate_5c82ffa769e5664ac14dcf50be43adcdec9c47f0cfd59ba216d83f0facfb4f34 extends Twig_Template
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
            themes: 'footer_menu.html.twig'
        - '@addTree':
            items:
                footer_menu_container:
                    blockType: container
                footer_menu_row:
                    blockType: container
                footer_menu:
                    blockType: menu
                    options:
                        item: '=data[\"menu\"].getMenu(\"commerce_footer_links\")'
                        depth: 2
            tree:
                page_footer_base:
                    footer_menu_container:
                        footer_menu_row:
                            footer_menu: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCommerceMenu/layouts/blank/page/footer_menu.yml";
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
        return new Twig_Source("", "@OroCommerceMenu/layouts/blank/page/footer_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/footer_menu.yml");
    }
}

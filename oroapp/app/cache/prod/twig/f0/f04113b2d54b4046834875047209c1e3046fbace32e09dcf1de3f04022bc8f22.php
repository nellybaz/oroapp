<?php

/* @OroCMS/layouts/blank/oro_frontend_root/home_page_slider.yml */
class __TwigTemplate_2811a6b78c59c2ce8cbb61f00ec237eac0ffd997a91bc5dffc6f1354942e03f2 extends Twig_Template
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
            themes: 'default.html.twig'
        - '@addTree':
            items:
                hero_promo:
                    blockType: content_block
                    prepend: true
                    options:
                        alias: home-page-slider
            tree:
                page_content:
                    hero_promo: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCMS/layouts/blank/oro_frontend_root/home_page_slider.yml";
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
        return new Twig_Source("", "@OroCMS/layouts/blank/oro_frontend_root/home_page_slider.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_frontend_root/home_page_slider.yml");
    }
}

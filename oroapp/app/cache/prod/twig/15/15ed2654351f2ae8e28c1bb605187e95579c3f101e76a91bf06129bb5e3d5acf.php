<?php

/* @OroCommerceMenu/layouts/blank/oro_frontend_root/featured_menu.yml */
class __TwigTemplate_43f133703ac5b14bec1042d85a5e660d1c0dc5adb569676d2bf7af07e4d23b75 extends Twig_Template
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
            themes: 'featured_menu.twig'
        - '@addTree':
            items:
                featured_menu_container:
                    blockType: container
                    siblingId: featured_products_container
                    prepend: true
                featured_menu:
                    blockType: menu
                    options:
                        item: '=data[\"menu\"].getMenu(\"featured_menu\")'
            tree:
                page_content:
                    featured_menu_container:
                        featured_menu: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCommerceMenu/layouts/blank/oro_frontend_root/featured_menu.yml";
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
        return new Twig_Source("", "@OroCommerceMenu/layouts/blank/oro_frontend_root/featured_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/oro_frontend_root/featured_menu.yml");
    }
}

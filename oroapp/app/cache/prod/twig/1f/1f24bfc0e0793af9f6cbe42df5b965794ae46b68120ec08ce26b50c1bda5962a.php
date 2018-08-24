<?php

/* @OroCommerceMenu/layouts/blank/page/top_nav.yml */
class __TwigTemplate_2c6d2e692e2c03ab5cf5ea6edcaba7afac0737e5dcd488acde1b3106b7129bde extends Twig_Template
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
            themes: 'top_nav.html.twig'
        - '@addTree':
            items:
                top_nav_container:
                    blockType: container
                    siblingId: ~
                    prepend: true
                top_nav_menu_container:
                    blockType: container
                top_nav:
                    blockType: menu
                    options:
                        item: '=data[\"menu\"].getMenu(\"commerce_top_nav\")'
                        allow_safe_labels: true
            tree:
                page_header:
                    top_nav_container:
                        top_nav_menu_container:
                            top_nav: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCommerceMenu/layouts/blank/page/top_nav.yml";
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
        return new Twig_Source("", "@OroCommerceMenu/layouts/blank/page/top_nav.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/blank/page/top_nav.yml");
    }
}

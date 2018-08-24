<?php

/* @OroCustomTheme/layouts/custom/page/main_menu.yml */
class __TwigTemplate_6611b5cb957cfd34a421674b3af1bea26b3cc73b1bedd0157101c0180f48bf1c extends Twig_Template
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
            themes: 'main_menu.html.twig'
        - '@move':
            id: web_catalog_menu
            parentId: sidebar_product_categories_container
        - '@move':
            id: categories_main_menu
            parentId: sidebar_product_categories_container
        - '@remove':
            id: web_catalog_menu_list
        - '@remove':
            id: main_menu_container

";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/page/main_menu.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/page/main_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/page/main_menu.yml");
    }
}

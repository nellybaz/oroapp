<?php

/* @OroCustomTheme/layouts/custom/page/commerce_menu_main_menu.yml */
class __TwigTemplate_4c79cd058bd2c07f2312e8309c88f9720bcb5ac4ccff1949b4fb5242a7345704 extends Twig_Template
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
            themes: 'commerce_menu_main_menu.html.twig'
        - '@setOption':
            id: main_menu_shopping_lists_wrapper
            optionName: attr.class
            optionValue: middlebar__shopping-list
        - '@addTree':
            items:
                sidebar_quick_access_menu_container:
                    blockType: container
                sidebar_product_categories_container:
                    blockType: container
                sidebar_main_menu_container:
                    blockType: container
            tree:
                page_sidebar:
                    sidebar_quick_access_menu_container: ~
                    sidebar_product_categories_container: ~
                    sidebar_main_menu_container: ~
        - '@move':
            id: main_menu
            parentId: sidebar_main_menu_container
        - '@move':
            id: quick_access_menu
            parentId: sidebar_quick_access_menu_container
        - '@move':
            id: header_row
            parentId: quick_access_container
        - '@move':
            id: search_row_extra_container
            parentId: main_menu_extra_container
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/page/commerce_menu_main_menu.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/page/commerce_menu_main_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/page/commerce_menu_main_menu.yml");
    }
}

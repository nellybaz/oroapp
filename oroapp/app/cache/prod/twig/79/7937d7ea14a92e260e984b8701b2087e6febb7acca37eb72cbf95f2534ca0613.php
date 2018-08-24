<?php

/* @OroCatalog/layouts/blank/page/main_menu.yml */
class __TwigTemplate_c1a933ca268be3cc6a74fbaba0d544aff5bd22738be8e315276b6d9298e58daa extends Twig_Template
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
        - '@addTree':
            items:
                categories_main_menu_list:
                    blockType: container
                    prepend: true
                categories_main_menu:
                    blockType: category_list
                    siblingId: ~
                    prepend: true
                    options:
                        categories: '=data[\"category\"].getCategoryTreeArray(data[\"current_user\"].getCurrentUser())'
                        max_size: 4
                categories_main_menu_first_level_item:
                    blockType: container
                categories_main_menu_second_level:
                    blockType: container
                categories_main_menu_third_level:
                    blockType: container
            tree:
                main_menu_container:
                    categories_main_menu_list:
                        categories_main_menu:
                            categories_main_menu_first_level_item:
                                categories_main_menu_second_level:
                                    categories_main_menu_third_level: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCatalog/layouts/blank/page/main_menu.yml";
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
        return new Twig_Source("", "@OroCatalog/layouts/blank/page/main_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/page/main_menu.yml");
    }
}

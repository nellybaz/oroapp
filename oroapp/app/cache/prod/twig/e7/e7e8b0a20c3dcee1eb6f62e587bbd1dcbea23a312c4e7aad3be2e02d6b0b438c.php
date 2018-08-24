<?php

/* @OroWebCatalog/layouts/blank/page/main_menu.yml */
class __TwigTemplate_e91a415c0ad286034517bb00d29463a116c1027ed059f58070738740cda4afee extends Twig_Template
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
                web_catalog_menu_list:
                    blockType: container
                    prepend: true
                web_catalog_menu:
                    blockType: category_list
                    siblingId: ~
                    prepend: true
                    options:
                        categories: '=data[\"web_catalog_menu\"].getItems()'
                        max_size: 6
                web_catalog_menu_first_level_item_simple:
                    blockType: menu_item
                    options:
                        not_use_for:
                            root__products: ~
                            root__new-arrivals: ~
                web_catalog_menu_first_level_item_head:
                    blockType: menu_item
                    options:
                        use_for:
                            root__new-arrivals: ~
                web_catalog_menu_first_level_item_mega:
                    blockType: menu_item
                    options:
                        use_for:
                            root__products: ~
                web_catalog_menu_second_level_item_simple:
                    blockType: menu_item
                web_catalog_menu_second_level_item_head:
                    blockType: menu_item
                web_catalog_menu_second_level_item_mega:
                    blockType: menu_item
                web_catalog_menu_third_level_item_mega:
                    blockType: menu_item
                web_catalog_menu_four_level_item_mega:
                    blockType: menu_item
                web_catalog_menu_second_level_sale_head:
                    blockType: block
                web_catalog_menu_second_level_sale_mega:
                    blockType: block
            tree:
                main_menu_container:
                    web_catalog_menu_list:
                        web_catalog_menu:
                            web_catalog_menu_first_level_item_simple:
                                web_catalog_menu_second_level_item_simple:
                            web_catalog_menu_first_level_item_head:
                                web_catalog_menu_second_level_item_head: ~
                                web_catalog_menu_second_level_sale_head: ~
                            web_catalog_menu_first_level_item_mega:
                                web_catalog_menu_second_level_item_mega:
                                    web_catalog_menu_third_level_item_mega:
                                        web_catalog_menu_four_level_item_mega: ~
                                web_catalog_menu_second_level_sale_mega: ~
        - '@remove':
            id: 'categories_main_menu_list'
        - '@remove':
            id: 'categories_main_menu'
    conditions: 'context[\"web_catalog_id\"] !== null'
";
    }

    public function getTemplateName()
    {
        return "@OroWebCatalog/layouts/blank/page/main_menu.yml";
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
        return new Twig_Source("", "@OroWebCatalog/layouts/blank/page/main_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/blank/page/main_menu.yml");
    }
}

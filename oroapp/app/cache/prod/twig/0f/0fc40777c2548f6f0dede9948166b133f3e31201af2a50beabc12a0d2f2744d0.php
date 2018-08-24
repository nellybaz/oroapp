<?php

/* @OroCatalog/layouts/blank/oro_frontend_root/default.yml */
class __TwigTemplate_97eb4894cbb599281a83cff8dce635841eb8ce1fba425b8521e0a8e841eb433c extends Twig_Template
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
        - '@appendOption':
            id: page_main
            optionName: attr.class
            optionValue: ' offset-none'
        - '@addTree':
            items:
                featured_categories_container:
                    blockType: container
                    siblingId: featured_menu_container
                    options:
                        attr:
                            itemprop: 'hasOfferCatalog'
                            itemscope: ~
                            itemtype: 'http://schema.org/OfferCatalog'
                featured_categories:
                    blockType: embedded_list
                    options:
                        label: 'oro.catalog.featured_categories.label'
                        item_key: 'category'
                        items: '=data[\"featured_categories\"].getAll([2,3,4,6,7,8,9,10])'
                        items_data:
                            categoryProductsCount: '=data[\"categories_products\"].getCountByCategories([2,3,4,6,7,8,9,10])'
                        item_extra_class: 'embedded-list__item--hide-same'
                featured_category:
                    blockType: container
                    options:
                        attr:
                            itemprop: 'itemListElement'
                            itemscope: ~
                            itemtype: 'http://schema.org/OfferCatalog'
                featured_category_link:
                    blockType: container
                    options:
                        attr:
                            itemprop: 'url'
                featured_category_image:
                    blockType: block
                    options:
                        attr:
                            itemprop: 'image'
                featured_category_desc:
                    blockType: container
                featured_category_label:
                    blockType: block
                    options:
                        attr:
                            itemprop: 'name'
                featured_category_products:
                    blockType: block
            tree:
                page_content:
                    featured_categories_container:
                        featured_categories:
                            featured_category:
                                featured_category_link:
                                    featured_category_image: ~
                                    featured_category_desc:
                                        featured_category_label: ~
                                        featured_category_products: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCatalog/layouts/blank/oro_frontend_root/default.yml";
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
        return new Twig_Source("", "@OroCatalog/layouts/blank/oro_frontend_root/default.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_frontend_root/default.yml");
    }
}

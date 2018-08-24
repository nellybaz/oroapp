<?php

/* @OroCatalog/layouts/blank/oro_catalog_frontend_product_allproducts/product_index.yml */
class __TwigTemplate_d662669876e2163cf4bd9ec7c633f14543c1f499b52cac06cf1482bb3b99a301 extends Twig_Template
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
    imports:
        - oro_allproducts_grid

    actions:
        - '@setBlockTheme':
            themes: 'product_index.html.twig'

        - '@setOption':
            id: product_datagrid
            optionName: grid_name
            optionValue: frontend-catalog-allproducts-grid

        - '@setOption':
            id: product_datagrid
            optionName: current_row_view
            optionValue: '=data[\"oro_product_datagrid_row_view\"].getThemeByGridName(\"frontend-catalog-allproducts-grid\")'

        - '@setOption':
            id: product_datagrid_toolbar_display_options
            optionName: current_row_view
            optionValue: '=data[\"oro_product_datagrid_row_view\"].getThemeByGridName(\"frontend-catalog-allproducts-grid\")'

        - '@setOption':
            id: product_datagrid_row_product_sticker_new
            optionName: visible
            optionValue: '=data[\"oro_product_datagrid_row_view\"].getThemeByGridName(\"frontend-catalog-allproducts-grid\")!=\"no-image-view\"'

        - '@setOption':
            id: product_datagrid_row_product_sticker_new_text
            optionName: visible
            optionValue: '=data[\"oro_product_datagrid_row_view\"].getThemeByGridName(\"frontend-catalog-allproducts-grid\")==\"no-image-view\"'

        - '@addTree':
            items:
                category_title:
                    blockType: text
                    options:
                        text: 'oro.catalog.all_products.label'
            tree:
                page_main_header:
                    category_title: ~

        - '@remove':
            id: product_datagrid_cell_categoryId
        - '@remove':
            id: product_datagrid_cell_categoryTitle
        - '@remove':
            id: product_datagrid_toolbar_pagination
        - '@remove':
             id: product_datagrid_toolbar_page_size
        - '@remove':
             id: product_datagrid_toolbar_sorting
";
    }

    public function getTemplateName()
    {
        return "@OroCatalog/layouts/blank/oro_catalog_frontend_product_allproducts/product_index.yml";
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
        return new Twig_Source("", "@OroCatalog/layouts/blank/oro_catalog_frontend_product_allproducts/product_index.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/oro_catalog_frontend_product_allproducts/product_index.yml");
    }
}

<?php

/* @OroProduct/layouts/blank/oro_product_frontend_product_index/product_index.yml */
class __TwigTemplate_785891c77266b04be61f2b1d162ca00072da76db6ff2e1fabc68ea79b7d7eef2 extends Twig_Template
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
        - oro_product_grid
    actions:
        - '@setOption':
            id: product_datagrid
            optionName: grid_name
            optionValue: frontend-product-search-grid

        - '@setOption':
            id: product_datagrid
            optionName: current_row_view
            optionValue: '=data[\"oro_product_datagrid_row_view\"].getThemeByGridName(\"frontend-product-search-grid\")'

        - '@setOption':
            id: product_datagrid_toolbar_display_options
            optionName: current_row_view
            optionValue: '=data[\"oro_product_datagrid_row_view\"].getThemeByGridName(\"frontend-product-search-grid\")'

        - '@setOption':
            id: product_datagrid_row_product_sticker_new
            optionName: visible
            optionValue: '=data[\"oro_product_datagrid_row_view\"].getThemeByGridName(\"frontend-product-search-grid\")!=\"no-image-view\"'

        - '@setOption':
            id: product_datagrid_row_product_sticker_new_text
            optionName: visible
            optionValue: '=data[\"oro_product_datagrid_row_view\"].getThemeByGridName(\"frontend-product-search-grid\")==\"no-image-view\"'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/oro_product_frontend_product_index/product_index.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/oro_product_frontend_product_index/product_index.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_product_frontend_product_index/product_index.yml");
    }
}

<?php

/* @OroProduct/layouts/default/oro_product_frontend_product_view/related_products.yml */
class __TwigTemplate_16f815c293e7938173959d36c8e5ff350d3fe5aaf99bce5da18e13716a862a86 extends Twig_Template
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
        -
            id: oro_product_list
            root: product_view_related_products_container
            namespace: related
    actions:
        - '@setBlockTheme':
            themes: 'related_products.html.twig'
        - '@setOption':
            id: related_products
            optionName: items
            optionValue: '=data[\"oro_product_related_products\"].getRelatedItems(data[\"product\"])'
        - '@setOption':
            id: related_products
            optionName: items_data.stickers
            optionValue: '=data[\"oro_product_stickers\"].getStickersForProducts(data[\"oro_product_related_products\"].getRelatedItems(data[\"product\"]))'
        - '@setOption':
            id: related_products
            optionName: label
            optionValue: oro.product.related_products.label
        - '@setOption':
            id: related_products
            optionName: use_slider
            optionValue: '=data[\"oro_product_related_products\"].isSliderEnabled()'
        - '@setOption':
            id: related_product_line_item_form_fields
            optionName: instance_name
            optionValue: related_products
        - '@setOption':
            id: related_product_line_item_form_start
            optionName: instance_name
            optionValue: related_products
        - '@setOption':
            id: related_product_line_item_form_end
            optionName: instance_name
            optionValue: related_products
        - '@setOption':
            id: related_product_line_item_form
            optionName: visible
            optionValue: '=data[\"oro_product_related_products\"].isAddButtonVisible()'
        - '@setOption':
            id: related_product_price
            optionName: visible
            optionValue: '=data[\"oro_product_related_products\"].isAddButtonVisible()'
        - '@setOption':
            id: product_view_related_products_container
            optionName: visible
            optionValue: '=data[\"oro_product_related_products\"].getRelatedItems(data[\"product\"])'
        - '@add':
            id: product_view_related_products_container
            parentId: product_view_container
            blockType: container
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/oro_product_frontend_product_view/related_products.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/oro_product_frontend_product_view/related_products.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/oro_product_frontend_product_view/related_products.yml");
    }
}

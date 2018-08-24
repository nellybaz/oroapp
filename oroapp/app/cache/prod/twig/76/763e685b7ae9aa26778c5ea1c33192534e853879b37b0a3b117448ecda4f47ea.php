<?php

/* @OroProduct/layouts/default/oro_product_frontend_product_view/page_template/two-columns/upsell_products.yml */
class __TwigTemplate_b65014fdb0c9e3c69f3cbc62ddec22188f8d6c95bb8deb7909c4dae7c050e600 extends Twig_Template
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
            root: two_column_upsell_container
            namespace: two_column_upsell
    actions:
        - '@setBlockTheme':
            themes: 'upsell_products.html.twig'
        - '@setOption':
            id: two_column_upsell_products
            optionName: items
            optionValue: '=data[\"oro_product_upsell_products\"].getRelatedItems(data[\"product\"])'
        - '@setOption':
            id: two_column_upsell_products
            optionName: items_data.stickers
            optionValue: '=data[\"oro_product_stickers\"].getStickersForProducts(data[\"oro_product_upsell_products\"].getRelatedItems(data[\"product\"]))'
        - '@setOption':
            id: two_column_upsell_products
            optionName: label
            optionValue: oro.product.upsell_products.label
        - '@setOption':
            id: two_column_upsell_product_line_item_form_fields
            optionName: instance_name
            optionValue: two_column_upsell_products
        - '@setOption':
            id: two_column_upsell_product_line_item_form_start
            optionName: instance_name
            optionValue: two_column_upsell_products
        - '@setOption':
            id: two_column_upsell_product_line_item_form_end
            optionName: instance_name
            optionValue: two_column_upsell_products
        - '@setOption':
            id: two_column_upsell_product_line_item_form
            optionName: visible
            optionValue: '=data[\"oro_product_upsell_products\"].isAddButtonVisible()'
        - '@setOption':
            id: two_column_upsell_products
            optionName: use_slider
            optionValue: false
        - '@setOption':
            id: two_column_upsell_product_view_image
            optionName: product_image_size
            optionValue: 'product_extra_large'
        - '@add':
            id: two_column_upsell_container
            parentId: product_view_related_items_container
            blockType: container
            prepend: false
    conditions: '!context[\"is_mobile\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/oro_product_frontend_product_view/page_template/two-columns/upsell_products.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/oro_product_frontend_product_view/page_template/two-columns/upsell_products.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/oro_product_frontend_product_view/page_template/two-columns/upsell_products.yml");
    }
}

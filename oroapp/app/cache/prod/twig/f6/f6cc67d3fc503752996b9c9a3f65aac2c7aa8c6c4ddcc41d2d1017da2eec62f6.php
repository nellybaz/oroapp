<?php

/* @OroProduct/layouts/blank/oro_product_frontend_product_view/line_item_form.yml */
class __TwigTemplate_d10731838abd0579a079631d21a6300aef95ea86e0da757bc8132f01e2e18456 extends Twig_Template
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
            id: line_item_buttons
            root: product_line_item_form_buttons
    actions:
        - '@setBlockTheme':
            themes: 'line_item_form.html.twig'
        - '@addTree':
            items:
                line_item_form_update:
                    blockType: layout_subtree_update
                    options:
                        reloadEvents: ['layout-subtree:update:product']
                        visible: '=context[\"is_logged_in\"]'
                line_item_form:
                    blockType: container
                    options:
                        visible: '=data[\"product_view_form_availability_provider\"].isSimpleFormAvailable(data[\"product\"]) or data[\"product_view_form_availability_provider\"].isPopupMatrixFormAvailable(data[\"product\"])'
                line_item_form_start:
                    blockType: form_start
                    options:
                        form: '=data[\"oro_product_form\"].getLineItemFormView(data[\"oro_product_variant\"].getProductVariantOrProduct(data))'
                line_item_form_fields:
                    blockType: form_fields
                    options:
                        visible: '=data[\"product_view_form_availability_provider\"].isSimpleFormAvailable(data[\"product\"])'
                        vars:
                            form: '=data[\"oro_product_form\"].getLineItemFormView(data[\"oro_product_variant\"].getProductVariantOrProduct(data))'
                            isProductUnitSelectionVisible: '=data.offsetExists(\"product\")?data[\"oro_product_unit_fields_settings\"].isProductUnitSelectionVisible(data[\"oro_product_variant\"].getProductVariantOrProduct(data))'
                            isUnitVisible: '=data.offsetExists(\"product\")?data[\"oro_unit_visibility\"].isUnitCodeVisible(data[\"oro_product_variant\"].getProductVariantOrProduct(data).getPrimaryUnitPrecision().getUnit().getCode())'
                            product: '=data[\"oro_product_variant\"].getProductVariantOrProduct(data)'
                line_item_form_end:
                    blockType: form_end
                    options:
                        render_rest: false
                        form: '=data[\"oro_product_form\"].getLineItemFormView(data[\"oro_product_variant\"].getProductVariantOrProduct(data))'
                product_line_item_form_buttons:
                    blockType: container
            tree:
                product_view_line_item_container:
                    line_item_form_update:
                        line_item_form:
                            line_item_form_start: ~
                            line_item_form_fields: ~
                            product_line_item_form_buttons: ~
                            line_item_form_end: ~
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/oro_product_frontend_product_view/line_item_form.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/oro_product_frontend_product_view/line_item_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/line_item_form.yml");
    }
}

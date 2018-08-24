<?php

/* @OroRFP/layouts/blank/oro_product_frontend_product_view/layout.yml */
class __TwigTemplate_14a659bb1eba6b0f2c68b41940de36ff9ca966bf6ca249387992b1a7db13045a extends Twig_Template
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
            themes: 'layout.html.twig'
        - '@add':
            id: units_request_for_quote
            parentId: product_price_table
            prepend: false
            blockType: units_request_for_quote
            options:
                visible: '=data[\"feature\"].isFeatureEnabled(\"rfp_frontend\")'
                units: '=data[\"product_units_without_prices\"].getProductUnits(data[\"oro_product_variant\"].getProductVariantOrProduct(data))'
                isPriceUnitsVisible: '=data[\"oro_price_unit_visibility\"].isPriceUnitsVisibleByProduct(data[\"oro_product_variant\"].getProductVariantOrProduct(data))'
        - '@add':
            id: request_a_quote_form_button
            parentId: line_item_buttons
            blockType: block
            options:
                visible: '=data[\"product_units_without_prices\"].getProductUnits(data[\"oro_product_variant\"].getProductVariantOrProduct(data))!=null && data[\"feature\"].isFeatureEnabled(\"rfp_frontend\")'
                vars:
                    product: '=data[\"oro_product_variant\"].getProductVariantOrProduct(data)'
";
    }

    public function getTemplateName()
    {
        return "@OroRFP/layouts/blank/oro_product_frontend_product_view/layout.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/blank/oro_product_frontend_product_view/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/layout.yml");
    }
}

<?php

/* @OroPricing/layouts/blank/imports/oro_product_list/products_prices.yml */
class __TwigTemplate_cb3b9cd2635838e2ec4d064035157e6abdb88b98027e76550f235947ae5c55da extends Twig_Template
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
        - '@setOption':
            id: __products
            optionName: items_data.productPrices
            optionValue: '=data[\"frontend_product_prices\"].getByProducts(items)'
        - '@setOption':
            id: __products
            optionName: items_data.isPriceUnitsVisible
            optionValue: '=data[\"oro_price_unit_visibility\"].getPriceUnitsVisibilityByProducts(items)'
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/blank/imports/oro_product_list/products_prices.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/blank/imports/oro_product_list/products_prices.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_list/products_prices.yml");
    }
}

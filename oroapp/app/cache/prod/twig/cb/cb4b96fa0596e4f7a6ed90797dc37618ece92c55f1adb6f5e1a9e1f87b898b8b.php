<?php

/* @OroPricing/layouts/blank/imports/oro_product_price_table/oro_product_price_table.yml */
class __TwigTemplate_9740eb1dd69cad53281ff5d31f64a0043c602cb5bd8435a83f53d344abd8fcc1 extends Twig_Template
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
            themes: 'oro_product_price_table.html.twig'
        - '@addTree':
            items:
                __product_price_container:
                    blockType: product_prices
                    options:
                        productPrices: '=product ? data[\"frontend_product_prices\"].getByProduct(product) : []'
                        attributeFamily: '=context.offsetExists(\"attribute_family\") ? context[\"attribute_family\"] : null'
                        isPriceUnitsVisible: '=product ? data[\"oro_price_unit_visibility\"].isPriceUnitsVisibleByProduct(product) : true'
                __product_price_table:
                    blockType: container
                __product_price_table_body:
                    blockType: block
            tree:
                __root:
                    __product_price_container:
                        __product_price_table:
                            __product_price_table_body: ~
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/blank/imports/oro_product_price_table/oro_product_price_table.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/blank/imports/oro_product_price_table/oro_product_price_table.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_price_table/oro_product_price_table.yml");
    }
}

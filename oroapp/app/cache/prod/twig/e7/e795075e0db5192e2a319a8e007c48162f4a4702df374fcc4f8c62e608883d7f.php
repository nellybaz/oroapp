<?php

/* @OroPricing/layouts/blank/oro_product_frontend_product_view/layout.yml */
class __TwigTemplate_a6e80c8942d65df1147d286da16c8235e8cda10719c9eb7f90d4ed91228f319a extends Twig_Template
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
        - '@add':
            id: product_price_subtree_update
            parentId: product_view_specification_container
            blockType: layout_subtree_update
            options:
                reloadEvents: ['layout-subtree:update:product']
        - '@move':
            id: product_price_container
            parentId: product_price_subtree_update
        - '@setOption':
            id: product_price_container
            optionName: product
            optionValue: '=data[\"oro_product_variant\"].getProductVariantOrProduct(data)'
        - '@setOption':
            id: product_price_container
            optionName: vars.visible
            optionValue: '=data[\"frontend_product_prices\"].isShowProductPriceContainer(product)'
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/blank/oro_product_frontend_product_view/layout.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/blank/oro_product_frontend_product_view/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/layout.yml");
    }
}

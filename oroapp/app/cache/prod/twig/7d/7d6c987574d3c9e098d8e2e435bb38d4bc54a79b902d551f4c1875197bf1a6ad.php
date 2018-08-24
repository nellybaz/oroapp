<?php

/* @OroPricing/layouts/blank/imports/oro_product_grid/oro_product_price.yml */
class __TwigTemplate_c514d7d07626c43e3df3cec4d8724d532e1bcfb00b2c60bd6fa766f84d8f3dbb extends Twig_Template
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
            id: product_datagrid_row_product_price_container
            optionName: productPrices
            optionValue: null
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/blank/imports/oro_product_grid/oro_product_price.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/blank/imports/oro_product_grid/oro_product_price.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_grid/oro_product_price.yml");
    }
}

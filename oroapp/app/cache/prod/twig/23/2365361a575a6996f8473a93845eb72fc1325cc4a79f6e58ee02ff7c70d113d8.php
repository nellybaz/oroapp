<?php

/* @OroPricing/layouts/blank/config/assets.yml */
class __TwigTemplate_88fed002cc026e2cd756b6221dcc30b0402b5f906253ffd30a424c73f50c8573 extends Twig_Template
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
        echo "styles:
    inputs:
        - 'bundles/oropricing/blank/scss/variables/product-price-filter-config.scss'
        - 'bundles/oropricing/blank/scss/variables/product-price-config.scss'
        - 'bundles/oropricing/blank/scss/variables/product-prices-config.scss'
        - 'bundles/oropricing/blank/scss/variables/product-totals-config.scss'
        - 'bundles/oropricing/blank/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}

<?php

/* @OroPricing/layouts/default/config/assets.yml */
class __TwigTemplate_b80a96a275791cb450660c1c69ecf5b59b7e51e125cfcb05e00d97eda21b65e5 extends Twig_Template
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
        - 'bundles/oropricing/default/scss/variables/product-price-config.scss'
        - 'bundles/oropricing/default/scss/variables/product-prices-config.scss'
        - 'bundles/oropricing/default/scss/variables/quick-order-add-config.scss'
        - 'bundles/oropricing/default/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/default/config/assets.yml");
    }
}

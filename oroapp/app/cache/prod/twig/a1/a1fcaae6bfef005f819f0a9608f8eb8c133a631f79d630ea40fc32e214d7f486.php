<?php

/* @OroPricing/layouts/default/page/currency_switcher.yml */
class __TwigTemplate_4abde3630dd74c90a6852be36441d3029f80bc09bc3b5684ed44fe801eca9edd extends Twig_Template
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
            id: currency_switcher
            parentId: top_nav_menu_container
            siblingId: top_nav
            blockType: currency_switcher
            options:
                currencies: '=data[\"oro_pricing_currency\"].getAvailableCurrencies()'
                selected_currency: '=data[\"oro_pricing_currency\"].getUserCurrency()'
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/default/page/currency_switcher.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/default/page/currency_switcher.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/default/page/currency_switcher.yml");
    }
}

<?php

/* @OroPricing/layouts/blank/config/requirejs.yml */
class __TwigTemplate_86a8ee0f680453f1f07f8b00b07bf8928f441de5663453409785c634051516ee extends Twig_Template
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
        echo "config:
    map:
        '*':
            'oropricing/templates/order/subtotals.html': 'oropricing/templates/order/frontend/subtotals.html'
            'oropricing/templates/order/totals.html': 'oropricing/templates/order/frontend/totals.html'
    paths:
        'oropricing/js/app/components/products-prices-component': 'bundles/oropricing/js/app/components/products-prices-component.js'
        'oropricing/js/app/components/totals-component': 'bundles/oropricing/js/app/components/totals-component.js'
        'oropricing/js/app/components/currency-switcher-component': 'bundles/oropricing/js/app/components/currency-switcher-component.js'

        'oropricing/js/app/views/base-product-prices-view': 'bundles/oropricing/js/app/views/base-product-prices-view.js'
        'oropricing/js/app/views/line-item-product-prices-view': 'bundles/oropricing/js/app/views/line-item-product-prices-view.js'
        'oropricing/js/app/views/product-prices-editable-view': 'bundles/oropricing/js/app/views/product-prices-editable-view.js'
        'oropricing/js/app/views/product-total-price-view': 'bundles/oropricing/js/app/views/product-total-price-view.js'
        'oropricing/js/app/views/quick-add-item-price-view': 'bundles/oropricing/js/app/views/quick-add-item-price-view.js'
        'oropricing/js/app/views/abstract-switcher': 'bundles/oropricing/js/app/views/abstract-switcher.js'
        'oropricing/js/app/views/base-product-matrix-view': 'bundles/oropricing/js/app/views/base-product-matrix-view.js'

        'oro/filter/product-price-filter': 'bundles/oropricing/js/filter/product-price-filter.js'
        'oro/filter/frontend-product-price-filter': 'bundles/oropricing/js/filter/frontend-product-price-filter.js'
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

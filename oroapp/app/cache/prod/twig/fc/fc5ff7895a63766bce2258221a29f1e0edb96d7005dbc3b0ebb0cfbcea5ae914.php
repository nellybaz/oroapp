<?php

/* @OroCheckout/layouts/blank/config/requirejs.yml */
class __TwigTemplate_4f852d8a0d8ef4577e91081cab85ba05ce67d80439a99cb308d9d173b68efdc4 extends Twig_Template
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
    paths:
        'orocheckout/js/app/components/transition-button-component': 'bundles/orocheckout/js/app/components/transition-button-component.js'
        'orocheckout/js/app/components/payment-transition-button-component': 'bundles/orocheckout/js/app/components/payment-transition-button-component.js'
        'orocheckout/js/app/components/shipping-transition-button-component': 'bundles/orocheckout/js/app/components/shipping-transition-button-component.js'
        'orocheckout/js/app/components/single-page-transition-button-component': 'bundles/orocheckout/js/app/components/single-page-transition-button-component.js'
        'orocheckout/js/app/views/single-page-checkout-view': 'bundles/orocheckout/js/app/views/single-page-checkout-view.js'
        'orocheckout/js/app/views/address-view': 'bundles/orocheckout/js/app/views/address-view.js'
        'orocheckout/js/app/components/clear-field-data-component': 'bundles/orocheckout/js/app/components/clear-field-data-component.js'
        'orocheckout/js/app/components/payment-save-for-later-component': 'bundles/orocheckout/js/app/components/payment-save-for-later-component.js'
        'orocheckout/js/app/components/payment-validate-component': 'bundles/orocheckout/js/app/components/payment-validate-component.js'
        'orocheckout/js/app/components/payment-additional-data-component': 'bundles/orocheckout/js/app/components/payment-additional-data-component.js'
        'orocheckout/js/app/views/checkout-content-view': 'bundles/orocheckout/js/app/views/checkout-content-view.js'
        'orocheckout/js/app/views/checkout-inner-content-view': 'bundles/orocheckout/js/app/views/checkout-inner-content-view.js'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

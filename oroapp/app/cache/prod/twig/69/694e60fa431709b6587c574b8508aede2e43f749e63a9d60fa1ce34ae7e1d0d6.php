<?php

/* @OroPayment/layouts/blank/config/requirejs.yml */
class __TwigTemplate_abb4279ab3553bb5fbb3ee3356494b513bfc74d52ce5f9dfdb790504c54b1519 extends Twig_Template
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
        'oropayment/js/app/components/payment-method-selector-component': 'bundles/oropayment/js/app/components/payment-method-selector-component.js'
        'oropayment/js/app/components/payment-method-component': 'bundles/oropayment/js/app/components/payment-method-component.js'
        'oropayment/js/validator/credit-card-expiration-date': 'bundles/oropayment/js/validator/credit-card-expiration-date.js'
        'oropayment/js/validator/credit-card-expiration-date-not-blank': 'bundles/oropayment/js/validator/credit-card-expiration-date-not-blank.js'
        'oropayment/js/lib/jquery-credit-card-validator': 'bundles/bowerassets/jquery-creditcardvalidator/jquery.creditCardValidator.js'
        'oropayment/js/adapter/credit-card-validator-adapter': 'bundles/oropayment/js/adapter/credit-card-validator-adapter.js'
        'oropayment/js/validator/credit-card-number': 'bundles/oropayment/js/validator/credit-card-number.js'
        'oropayment/js/validator/credit-card-type': 'bundles/oropayment/js/validator/credit-card-type.js'
";
    }

    public function getTemplateName()
    {
        return "@OroPayment/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroPayment/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PaymentBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

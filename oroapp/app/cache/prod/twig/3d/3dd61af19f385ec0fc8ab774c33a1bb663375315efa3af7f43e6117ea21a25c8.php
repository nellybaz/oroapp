<?php

/* @OroPayPal/layouts/blank/config/requirejs.yml */
class __TwigTemplate_d4fbe8ced0669f83cc22f00f47d2ca85f498f1632d896107f926e270c31d3d92 extends Twig_Template
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
        'oropaypal/js/app/components/credit-card-component': 'bundles/oropaypal/js/app/components/credit-card-component.js'
        'oropaypal/js/app/components/authorized-credit-card-component': 'bundles/oropaypal/js/app/components/authorized-credit-card-component.js'
        'oropaypal/js/app/components/payflow-express-checkout-component': 'bundles/oropaypal/js/app/components/payflow-express-checkout-component.js'
";
    }

    public function getTemplateName()
    {
        return "@OroPayPal/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroPayPal/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PayPalBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

<?php

/* @OroSale/layouts/blank/config/requirejs.yml */
class __TwigTemplate_aa36d4047169aadfaac001448cbe438217daef6940fcb7130021996aa6dd133b extends Twig_Template
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
        'orosale/js/app/components/quote-demand-component': 'bundles/orosale/js/app/components/quote-demand-component.js'
        'orosale/js/app/components/quote-product-to-order-component': 'bundles/orosale/js/app/components/quote-product-to-order-component.js'
        'orosale/js/app/views/product-add-to-rfq-view': 'bundles/orosale/js/app/views/product-add-to-rfq-view.js'
";
    }

    public function getTemplateName()
    {
        return "@OroSale/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroSale/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

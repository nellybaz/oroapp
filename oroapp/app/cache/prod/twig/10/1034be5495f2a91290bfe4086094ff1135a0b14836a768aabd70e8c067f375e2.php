<?php

/* @OroTax/layouts/blank/config/requirejs.yml */
class __TwigTemplate_d29951e92e3ce1976aeb1c696323d599ce0e1a330fe7417c9f75097890462254 extends Twig_Template
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
        'orotax/js/formatter/tax': 'bundles/orotax/js/formatter/tax.js'
        'orotax/js/app/components/order-taxes-component': 'bundles/orotax/js/app/components/order-taxes-component.js'
";
    }

    public function getTemplateName()
    {
        return "@OroTax/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroTax/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/TaxBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

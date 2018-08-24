<?php

/* @OroShipping/layouts/blank/config/requirejs.yml */
class __TwigTemplate_7eb8cf0bcd56d919e198037d9bb25881255567f583a7a0436f350c0b297a47b1 extends Twig_Template
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
        'oroshipping/js/app/views/shipping-methods-view': 'bundles/oroshipping/js/app/views/shipping-methods-view.js'
";
    }

    public function getTemplateName()
    {
        return "@OroShipping/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroShipping/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShippingBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

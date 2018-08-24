<?php

/* @OroCurrency/layouts/blank/config/requirejs.yml */
class __TwigTemplate_6d6fec2c2ae7a39a588784bc36e3c531b0e3bb804c81e569c6d8c6b9c236fb11 extends Twig_Template
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
        'oro/datagrid/cell/multi-currency-cell': 'orocurrency/js/datagrid/cell/multi-currency-cell.js'
";
    }

    public function getTemplateName()
    {
        return "@OroCurrency/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroCurrency/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/CurrencyBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

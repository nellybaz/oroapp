<?php

/* @OroSale/layouts/default/config/assets.yml */
class __TwigTemplate_cf1a3f64492118cdca6b98738f02201f24f6f91e9c93a499c6581acc9c671ea3 extends Twig_Template
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
        - 'bundles/orosale/default/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroSale/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroSale/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/default/config/assets.yml");
    }
}
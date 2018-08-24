<?php

/* @OroOrder/layouts/default/config/assets.yml */
class __TwigTemplate_28eb6d74697a135aee183869bff0c3be90d7436341fbeb15819b22237b536d3a extends Twig_Template
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
        - 'bundles/oroorder/default/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroOrder/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroOrder/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/OrderBundle/Resources/views/layouts/default/config/assets.yml");
    }
}

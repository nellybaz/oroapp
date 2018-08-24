<?php

/* OroShippingBundle:Product:shipping_options_view.html.twig */
class __TwigTemplate_67a60e1ec75b529ba52b896b9cbbfac373b4c717468b5e9623e9b32b8066fb1b extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroShippingBundle:Product:shipping_options_view.html.twig", 1);
        // line 2
        $context["PSO"] = $this->loadTemplate("OroShippingBundle::macros.html.twig", "OroShippingBundle:Product:shipping_options_view.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        echo $context["PSO"]->getrenderProductShippingOptions(($context["shippingOptions"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroShippingBundle:Product:shipping_options_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShippingBundle:Product:shipping_options_view.html.twig", "");
    }
}

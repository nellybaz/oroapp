<?php

/* OroShippingBundle:Datagrid:Column/productShippingOptions.html.twig */
class __TwigTemplate_806a6f9200490db09ef75d059e8cc52f4d6196881eb600cc49fa9b3cecdded3d extends Twig_Template
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
        $context["PSO"] = $this->loadTemplate("OroShippingBundle::macros.html.twig", "OroShippingBundle:Datagrid:Column/productShippingOptions.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((($context["value"] ?? null) && (twig_length_filter($this->env, ($context["value"] ?? null)) > 0))) {
            // line 4
            echo "    ";
            echo $context["PSO"]->getrenderProductShippingOptions(($context["value"] ?? null));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroShippingBundle:Datagrid:Column/productShippingOptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShippingBundle:Datagrid:Column/productShippingOptions.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShippingBundle/Resources/views/Datagrid/Column/productShippingOptions.html.twig");
    }
}

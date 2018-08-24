<?php

/* OroTaxBundle:Order/Datagrid:taxes.html.twig */
class __TwigTemplate_5ab4a75593b58c8b97b00488f441cb7d2374b63063787ecf86ef86a4c7d280cf extends Twig_Template
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
        $context["result"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "result"), "method");
        // line 2
        $context["TAX"] = $this->loadTemplate("OroTaxBundle::macros.html.twig", "OroTaxBundle:Order/Datagrid:taxes.html.twig", 2);
        // line 3
        echo $context["TAX"]->getrenderTaxes(($context["result"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:Order/Datagrid:taxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:Order/Datagrid:taxes.html.twig", "");
    }
}

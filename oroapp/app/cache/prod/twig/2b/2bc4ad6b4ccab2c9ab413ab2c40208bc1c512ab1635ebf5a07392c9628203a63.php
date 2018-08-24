<?php

/* OroSalesBundle:Customer:leadsGrid.html.twig */
class __TwigTemplate_895c010c3e1be72721211fe45720528e847797b38cf1dfe55121e365d43baacd extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroSalesBundle:Customer:leadsGrid.html.twig", 1);
        // line 2
        echo "<div class=\"widget-content\">
    ";
        // line 3
        echo $context["dataGrid"]->getrenderGrid("sales-customers-leads-grid", ($context["gridParams"] ?? null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Customer:leadsGrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Customer:leadsGrid.html.twig", "");
    }
}

<?php

/* OroSalesBundle:Customer:opportunitiesGrid.html.twig */
class __TwigTemplate_83e46664c39d8858d0914d28db7fd683b241b7a5bed4482ad598b48b62cbad2b extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroSalesBundle:Customer:opportunitiesGrid.html.twig", 1);
        // line 2
        echo "<div class=\"widget-content\">
    ";
        // line 3
        echo $context["dataGrid"]->getrenderGrid("sales-customers-opportunities-grid", ($context["gridParams"] ?? null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Customer:opportunitiesGrid.html.twig";
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
        return new Twig_Source("", "OroSalesBundle:Customer:opportunitiesGrid.html.twig", "");
    }
}

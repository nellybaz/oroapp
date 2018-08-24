<?php

/* OroTaxBundle:Js:totals.html.twig */
class __TwigTemplate_80613f66996ca3765f218a5302bee0852ddddbc13a387d631d913676773aa3d3 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"order-taxes-totals-template\">
    <div class=\"control-group\">
        <label class=\"control-label\"><%= item.label %></label>
        <div class=\"controls\">
            <label class=\"control-label\" data-toggle=\"collapse\" data-target=\"#order-taxes-totals-table\">
                <%= item.formattedAmount %>
            </label>
        </div>
    </div>
    <% var collapseIn = _.defaults(item.data.in, true); %>
    <div class=\"collapse<%= collapseIn ? ' in' : '' %>\" id=\"order-taxes-totals-table\">
        <div class=\"controls\">
            ";
        // line 13
        $context["TAX"] = $this->loadTemplate("OroTaxBundle::macros.html.twig", "OroTaxBundle:Js:totals.html.twig", 13);
        // line 14
        echo "            <% var total = item.data.total %>
            <% var shipping = item.data.shipping %>
            ";
        // line 16
        echo $context["TAX"]->getrenderJsItems();
        echo "
            <% var taxes = item.data.taxes %>
            ";
        // line 18
        echo $context["TAX"]->getrenderJsTaxes();
        echo "
        </div>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:Js:totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  39 => 16,  35 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:Js:totals.html.twig", "");
    }
}

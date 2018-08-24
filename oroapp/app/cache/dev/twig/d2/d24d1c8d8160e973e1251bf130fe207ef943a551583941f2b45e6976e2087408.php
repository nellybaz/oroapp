<?php

/* OroTaxBundle:Js:totals.html.twig */
class __TwigTemplate_8c2d6bbd0ccfeae0c3c0b5c4193d5862d0fe6ef0e7a1257bc08ed8568861a88f extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroTaxBundle:Js:totals.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  47 => 18,  42 => 16,  38 => 14,  36 => 13,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/html\" id=\"order-taxes-totals-template\">
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
            {% import 'OroTaxBundle::macros.html.twig' as TAX %}
            <% var total = item.data.total %>
            <% var shipping = item.data.shipping %>
            {{ TAX.renderJsItems() }}
            <% var taxes = item.data.taxes %>
            {{ TAX.renderJsTaxes() }}
        </div>
    </div>
</script>
", "OroTaxBundle:Js:totals.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/TaxBundle/Resources/views/Js/totals.html.twig");
    }
}

<?php

/* OroTaxBundle:Js:item_taxes.html.twig */
class __TwigTemplate_444a0d4a969cde504fb9343c3f851d67ee320b91f919bdcad48983c4b8d47122 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroTaxBundle:Js:item_taxes.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"line-item-taxes-template\">
    ";
        // line 2
        $context["TAX"] = $this->loadTemplate("OroTaxBundle::macros.html.twig", "OroTaxBundle:Js:item_taxes.html.twig", 2);
        // line 3
        echo "    <div class=\"line-item-taxes-container\">
        <div class=\"line-item-taxes-items\">
            ";
        // line 5
        echo $context["TAX"]->getrenderJsItems();
        echo "
        </div>

        <% if (!_.isEmpty(taxes)) { %>
            <div class=\"line-item-taxes-results\">
                ";
        // line 10
        echo $context["TAX"]->getrenderJsTaxes();
        echo "
            </div>
        <% } %>
    </div>
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroTaxBundle:Js:item_taxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/html\" id=\"line-item-taxes-template\">
    {% import 'OroTaxBundle::macros.html.twig' as TAX %}
    <div class=\"line-item-taxes-container\">
        <div class=\"line-item-taxes-items\">
            {{ TAX.renderJsItems() }}
        </div>

        <% if (!_.isEmpty(taxes)) { %>
            <div class=\"line-item-taxes-results\">
                {{ TAX.renderJsTaxes() }}
            </div>
        <% } %>
    </div>
</script>
", "OroTaxBundle:Js:item_taxes.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/TaxBundle/Resources/views/Js/item_taxes.html.twig");
    }
}

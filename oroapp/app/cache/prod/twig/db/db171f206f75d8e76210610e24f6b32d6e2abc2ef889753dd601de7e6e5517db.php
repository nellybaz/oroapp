<?php

/* OroTaxBundle:Js:item_taxes.html.twig */
class __TwigTemplate_ace7eca28fb3d1d7475550e7bd4ef59a486db45aa5cab08e31bec774bc744f4d extends Twig_Template
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
        return array (  36 => 10,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:Js:item_taxes.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/TaxBundle/Resources/views/Js/item_taxes.html.twig");
    }
}

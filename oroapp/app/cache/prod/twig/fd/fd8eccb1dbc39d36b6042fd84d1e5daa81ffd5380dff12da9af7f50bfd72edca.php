<?php

/* OroSalesBundle:Opportunity:relevantOpportunities.html.twig */
class __TwigTemplate_593af94961a387c980176c2968bf25439b938ec6f10c2fb07c616ea8921e1b72 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroSalesBundle:Opportunity:relevantOpportunities.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["gridName"] = "sales-customers-opportunities-grid";
        // line 4
        echo "
";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "grid"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "grid"), "method", false, true), ($context["gridName"] ?? null), array(), "array", true, true))) {
            // line 6
            echo "    ";
            $context["gridName"] = "sales-customers-opportunities-alternate-grid";
        }
        // line 8
        echo "
<div class=\"widget-content\">
    ";
        // line 10
        echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ($context["gridParams"] ?? null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Opportunity:relevantOpportunities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 8,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Opportunity:relevantOpportunities.html.twig", "");
    }
}

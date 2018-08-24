<?php

/* OroQuoteSalesBridgeBundle:Opportunity:opportunityQuotes.html.twig */
class __TwigTemplate_2280b162253be6e1333b8661776fc94dc11b3fa8ff93cae5594dcdb68de693a7 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroQuoteSalesBridgeBundle:Opportunity:opportunityQuotes.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["gridName"] = "opportunity-quotes-grid";
        // line 4
        echo "
<div class=\"widget-content\">
    ";
        // line 6
        echo $context["dataGrid"]->getrenderGrid(($context["gridName"] ?? null), ($context["gridParams"] ?? null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroQuoteSalesBridgeBundle:Opportunity:opportunityQuotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroQuoteSalesBridgeBundle:Opportunity:opportunityQuotes.html.twig", "");
    }
}

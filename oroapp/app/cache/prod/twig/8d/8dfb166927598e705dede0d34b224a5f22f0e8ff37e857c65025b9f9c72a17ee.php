<?php

/* OroMagentoBundle:Order/widget:customerRecentPurchasesWidget.html.twig */
class __TwigTemplate_3bdabdcdace84f33fb77ea507f43a243aa1c4a77d191f128dba4c1da6df5777c extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroMagentoBundle:Order/widget:customerRecentPurchasesWidget.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        echo         // line 5
$context["dataGrid"]->getrenderGrid("magento-customer-recent-purchases-widget-grid", array("customerId" => $this->getAttribute(        // line 7
($context["customer"] ?? null), "id", array()), "channelId" => $this->getAttribute(        // line 8
($context["channel"] ?? null), "id", array())));
        // line 11
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Order/widget:customerRecentPurchasesWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 11,  28 => 8,  27 => 7,  26 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Order/widget:customerRecentPurchasesWidget.html.twig", "");
    }
}

<?php

/* OroMagentoBundle:CreditMemo/widget:customerCreditMemosWidget.html.twig */
class __TwigTemplate_302db8b0b5a2bde40ae5f14ebbf46a514042be4f392cc194c05de00a466b159a extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroMagentoBundle:CreditMemo/widget:customerCreditMemosWidget.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        echo         // line 5
$context["dataGrid"]->getrenderGrid("magento-customer-credit-memo-widget-grid", array("customerId" => $this->getAttribute(        // line 8
($context["customer"] ?? null), "id", array()), "channelId" => $this->getAttribute(        // line 9
($context["channel"] ?? null), "id", array())));
        // line 12
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:CreditMemo/widget:customerCreditMemosWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 12,  28 => 9,  27 => 8,  26 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:CreditMemo/widget:customerCreditMemosWidget.html.twig", "");
    }
}

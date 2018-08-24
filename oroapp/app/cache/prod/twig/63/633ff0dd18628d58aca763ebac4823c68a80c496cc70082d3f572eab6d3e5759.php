<?php

/* OroMagentoBundle:CreditMemo/widget:orderCreditMemosWidget.html.twig */
class __TwigTemplate_28429956453f69b264fd3fb988937742f3f0d0a8d2751c6825f8a999f5a636c3 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroMagentoBundle:CreditMemo/widget:orderCreditMemosWidget.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        echo         // line 5
$context["dataGrid"]->getrenderGrid("magento-order-credit-memo-widget-grid", array("orderId" => $this->getAttribute(        // line 8
($context["order"] ?? null), "id", array())));
        // line 11
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:CreditMemo/widget:orderCreditMemosWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  27 => 8,  26 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:CreditMemo/widget:orderCreditMemosWidget.html.twig", "");
    }
}

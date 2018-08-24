<?php

/* OroMagentoBundle:Cart/widget:customerCartsWidget.html.twig */
class __TwigTemplate_c2e0696bf7a13668cae44105e993f681cd22509381a7e11c13cc0b845a6a28c6 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroMagentoBundle:Cart/widget:customerCartsWidget.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        echo         // line 5
$context["dataGrid"]->getrenderGrid("magento-customer-cart-widget-grid", array("customerId" => $this->getAttribute(        // line 8
($context["customer"] ?? null), "id", array()), "channelId" => $this->getAttribute(        // line 9
($context["channel"] ?? null), "id", array())));
        // line 12
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Cart/widget:customerCartsWidget.html.twig";
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
        return new Twig_Source("", "OroMagentoBundle:Cart/widget:customerCartsWidget.html.twig", "");
    }
}

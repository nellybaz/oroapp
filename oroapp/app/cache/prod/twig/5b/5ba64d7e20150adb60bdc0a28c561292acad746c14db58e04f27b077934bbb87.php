<?php

/* OroMagentoBundle:Order/widget:orderNotesWidget.html.twig */
class __TwigTemplate_019c92b4e0a61a81383bc9562040550a560a87cbfe7434ddf1f6d99d89b7c81c extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroMagentoBundle:Order/widget:orderNotesWidget.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        echo $context["dataGrid"]->getrenderGrid("magento-order-notes-widget-grid", array("orderId" => $this->getAttribute(        // line 7
($context["order"] ?? null), "id", array())));
        // line 9
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Order/widget:orderNotesWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 9,  26 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Order/widget:orderNotesWidget.html.twig", "");
    }
}

<?php

/* OroMagentoBundle:Order/widget:customerOrderNotes.html.twig */
class __TwigTemplate_7af611b4e86e99959e2c971022cb4ee10cfd56f24f401df388efacc408cceaeb extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroMagentoBundle:Order/widget:customerOrderNotes.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        $context["scope"] = twig_replace_filter("customer-%customer%-channel-%channel%", array("%customer%" => $this->getAttribute(($context["customer"] ?? null), "id", array()), "%channel%" => $this->getAttribute(($context["channel"] ?? null), "id", array())));
        // line 5
        echo "    ";
        echo $context["dataGrid"]->getrenderGrid($this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName("magento-account-order-notes-widget-grid",         // line 6
($context["scope"] ?? null)), array("customerId" => $this->getAttribute(        // line 7
($context["customer"] ?? null), "id", array()), "channelId" => $this->getAttribute(($context["channel"] ?? null), "id", array())));
        // line 8
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Order/widget:customerOrderNotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  30 => 7,  29 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Order/widget:customerOrderNotes.html.twig", "");
    }
}

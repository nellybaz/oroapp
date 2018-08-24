<?php

/* OroMagentoBundle:Order/widget:items.html.twig */
class __TwigTemplate_bff3212c9705ac1db80e2b8c67faf5135e5eefd0c693a8c38f888b0b9d5b1f9b extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroMagentoBundle:Order/widget:items.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        echo $context["dataGrid"]->getrenderGrid("magento-orderitem-grid", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Order/widget:items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Order/widget:items.html.twig", "");
    }
}

<?php

/* OroTaxBundle:Order/Datagrid/Property:rowIncludingTax.html.twig */
class __TwigTemplate_7a79c14de8f5e01f78e81c16f4f46543fb1dd4b80348796f9fdf0ecd11dbd597 extends Twig_Template
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
        $context["result"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "result"), "method");
        // line 2
        if (($this->getAttribute(($context["result"] ?? null), "row", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["result"] ?? null), "row", array(), "any", false, true), "includingTax", array(), "any", true, true))) {
            // line 3
            echo "    ";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute(($context["result"] ?? null), "row", array()), "includingTax", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["result"] ?? null), "row", array()), "currency", array())));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:Order/Datagrid/Property:rowIncludingTax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:Order/Datagrid/Property:rowIncludingTax.html.twig", "");
    }
}

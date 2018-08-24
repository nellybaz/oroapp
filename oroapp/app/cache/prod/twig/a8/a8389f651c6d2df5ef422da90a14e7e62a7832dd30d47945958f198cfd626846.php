<?php

/* OroTaxBundle:Order/Datagrid/Property:unitTaxAmount.html.twig */
class __TwigTemplate_b000f0fd47e3dc31add5dd66bbea723476a2585fccd9e1cd04beaff9cd5ae699 extends Twig_Template
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
        if (($this->getAttribute(($context["result"] ?? null), "unit", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["result"] ?? null), "unit", array(), "any", false, true), "taxAmount", array(), "any", true, true))) {
            // line 3
            echo "    ";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute(($context["result"] ?? null), "unit", array()), "taxAmount", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["result"] ?? null), "unit", array()), "currency", array())));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:Order/Datagrid/Property:unitTaxAmount.html.twig";
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
        return new Twig_Source("", "OroTaxBundle:Order/Datagrid/Property:unitTaxAmount.html.twig", "");
    }
}

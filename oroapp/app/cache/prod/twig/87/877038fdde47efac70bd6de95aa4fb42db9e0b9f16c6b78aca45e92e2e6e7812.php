<?php

/* OroTaxBundle:Order/Form:unitPriceTaxAmount.html.twig */
class __TwigTemplate_071f4b50dacdc058592b9e02e43584eb15bd5e7734d6bdcaa3c477060e28b87b extends Twig_Template
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
        $context["result"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "result", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "result", array()), array())) : (array()));
        // line 2
        echo "<div data-page-component-module=\"orotax/js/app/components/order-line-item-item-component\"
     data-page-component-options=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("type" => "unit", "value" => "taxAmount")), "html", null, true);
        echo "\">
    <span data-value-container>
        ";
        // line 5
        if (($this->getAttribute(($context["result"] ?? null), "unit", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["result"] ?? null), "unit", array(), "any", false, true), "taxAmount", array(), "any", true, true))) {
            // line 6
            echo "            ";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute(($context["result"] ?? null), "unit", array()), "taxAmount", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["result"] ?? null), "unit", array()), "currency", array())));
            echo "
        ";
        }
        // line 8
        echo "    </span>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:Order/Form:unitPriceTaxAmount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:Order/Form:unitPriceTaxAmount.html.twig", "");
    }
}

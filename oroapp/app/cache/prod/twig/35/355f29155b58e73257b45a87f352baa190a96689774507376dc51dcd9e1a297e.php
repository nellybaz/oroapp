<?php

/* OroCheckoutBundle:Checkout/Datagrid:shippingCost.html.twig */
class __TwigTemplate_7fab3789d2c8574a3a03b384f352e16b7487a076737fda4d51d2e5fbde8a74f8 extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "shippingEstimateAmount"), "method"), array("currency" => $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "shippingEstimateCurrency"), "method")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:Checkout/Datagrid:shippingCost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCheckoutBundle:Checkout/Datagrid:shippingCost.html.twig", "");
    }
}

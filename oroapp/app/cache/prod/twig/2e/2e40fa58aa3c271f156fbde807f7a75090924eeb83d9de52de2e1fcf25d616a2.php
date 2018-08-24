<?php

/* OroPromotionBundle:Datagrid/Order:rowTotalDiscountAmount.html.twig */
class __TwigTemplate_e9a5d20cc2f86eb608db090beb33371e13c4bd3bdfcbaddf4f6f35c9284eaa9b extends Twig_Template
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
        $context["discountAmount"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "discountAmount"), "method");
        // line 2
        $context["currency"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "currency"), "method");
        // line 3
        echo "
";
        // line 4
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["discountAmount"] ?? null), array("currency" => ($context["currency"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Datagrid/Order:rowTotalDiscountAmount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Datagrid/Order:rowTotalDiscountAmount.html.twig", "");
    }
}

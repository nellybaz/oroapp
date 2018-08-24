<?php

/* OroPromotionBundle:Datagrid/Order:rowTotalAfterDiscount.html.twig */
class __TwigTemplate_4702c4d25e116d0f5057d1df60f3f00fd8c0c40bfcbf43dadb55da8eafc866f2 extends Twig_Template
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
        $context["quantity"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "quantity"), "method");
        // line 2
        $context["price"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "value"), "method");
        // line 3
        $context["currency"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "currency"), "method");
        // line 4
        $context["discountAmount"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "discountAmount"), "method");
        // line 5
        echo "
";
        // line 6
        $context["rowTotalAfterDiscount"] = ((($context["price"] ?? null) * ($context["quantity"] ?? null)) - ($context["discountAmount"] ?? null));
        // line 7
        echo "
";
        // line 8
        if ((($context["rowTotalAfterDiscount"] ?? null) < 0)) {
            // line 9
            echo "    ";
            $context["rowTotalAfterDiscount"] = 0;
        }
        // line 11
        echo "
";
        // line 12
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["rowTotalAfterDiscount"] ?? null), array("currency" => ($context["currency"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Datagrid/Order:rowTotalAfterDiscount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  41 => 11,  37 => 9,  35 => 8,  32 => 7,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Datagrid/Order:rowTotalAfterDiscount.html.twig", "");
    }
}

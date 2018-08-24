<?php

/* OroPromotionBundle:Datagrid/Order:rowTotalAfterDiscountIncludingTax.html.twig */
class __TwigTemplate_f36aa4b6fc66d1f345dcf2c0ac5a15305d631b6b54de34d9ddb73e7c66d7c173 extends Twig_Template
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
        $context["currency"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "currency"), "method");
        // line 3
        $context["discountAmount"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "discountAmount"), "method");
        // line 4
        $context["rowTotalAfterDiscountIncludintTax"] = 0;
        // line 5
        echo "
";
        // line 6
        if (($this->getAttribute(($context["result"] ?? null), "row", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["result"] ?? null), "row", array(), "any", false, true), "includingTax", array(), "any", true, true))) {
            // line 7
            echo "    ";
            $context["rowTotalAfterDiscountIncludintTax"] = ($this->getAttribute($this->getAttribute(($context["result"] ?? null), "row", array()), "includingTax", array()) - ($context["discountAmount"] ?? null));
            // line 8
            echo "    ";
            if ((($context["rowTotalAfterDiscountIncludintTax"] ?? null) < 0)) {
                // line 9
                echo "        ";
                $context["rowTotalAfterDiscountIncludintTax"] = 0;
                // line 10
                echo "    ";
            }
        }
        // line 12
        echo "
";
        // line 13
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["rowTotalAfterDiscountIncludintTax"] ?? null), array("currency" => ($context["currency"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Datagrid/Order:rowTotalAfterDiscountIncludingTax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  45 => 12,  41 => 10,  38 => 9,  35 => 8,  32 => 7,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Datagrid/Order:rowTotalAfterDiscountIncludingTax.html.twig", "");
    }
}

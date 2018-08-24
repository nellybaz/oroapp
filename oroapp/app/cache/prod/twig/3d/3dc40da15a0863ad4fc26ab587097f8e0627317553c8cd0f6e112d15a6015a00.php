<?php

/* OroPromotionBundle:Datagrid/Order:rowTotalAfterDiscountExcludingTax.html.twig */
class __TwigTemplate_c34e3896adb810ad05dee971c70db9241f9c4e6f46bcf50b73c6ba9eb18f050e extends Twig_Template
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
        $context["rowTotalAfterDiscountExcludintTax"] = 0;
        // line 5
        echo "
";
        // line 6
        if (($this->getAttribute(($context["result"] ?? null), "row", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["result"] ?? null), "row", array(), "any", false, true), "excludingTax", array(), "any", true, true))) {
            // line 7
            echo "    ";
            $context["rowTotalAfterDiscountExcludintTax"] = ($this->getAttribute($this->getAttribute(($context["result"] ?? null), "row", array()), "excludingTax", array()) - ($context["discountAmount"] ?? null));
            // line 8
            echo "    ";
            if ((($context["rowTotalAfterDiscountExcludintTax"] ?? null) < 0)) {
                // line 9
                echo "        ";
                $context["rowTotalAfterDiscountExcludintTax"] = 0;
                // line 10
                echo "    ";
            }
        }
        // line 12
        echo "
";
        // line 13
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["rowTotalAfterDiscountExcludintTax"] ?? null), array("currency" => ($context["currency"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Datagrid/Order:rowTotalAfterDiscountExcludingTax.html.twig";
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
        return new Twig_Source("", "OroPromotionBundle:Datagrid/Order:rowTotalAfterDiscountExcludingTax.html.twig", "");
    }
}

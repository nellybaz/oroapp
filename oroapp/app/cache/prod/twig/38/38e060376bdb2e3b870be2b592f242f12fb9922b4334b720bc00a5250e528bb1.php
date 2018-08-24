<?php

/* OroPromotionBundle:Order/Form:applied_discounts_with_taxes.html.twig */
class __TwigTemplate_5160563b571679e033eecfd6cacb0a658576ec29968ce331a536b454ef232471 extends Twig_Template
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
        $context["appliedDiscounts"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "applied_discounts", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "applied_discounts", array()), array())) : (array()));
        // line 2
        echo "
";
        // line 3
        $context["appliedDiscountsAmount"] = (($this->getAttribute(($context["appliedDiscounts"] ?? null), "discountAmount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["appliedDiscounts"] ?? null), "discountAmount", array()), 0)) : (0));
        // line 4
        $context["currency"] = (($this->getAttribute(($context["appliedDiscountsAmount"] ?? null), "currency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["appliedDiscountsAmount"] ?? null), "currency", array()), "")) : (""));
        // line 5
        $context["taxes"] = (($this->getAttribute(($context["appliedDiscounts"] ?? null), "taxes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["appliedDiscounts"] ?? null), "taxes", array()), array())) : (array()));
        // line 6
        echo "
";
        // line 7
        $context["rowTotalAfterDiscountIncludingTax"] = 0;
        // line 8
        if (((array_key_exists("taxes", $context) && $this->getAttribute(($context["taxes"] ?? null), "row", array(), "any", true, true)) && $this->getAttribute($this->getAttribute(($context["taxes"] ?? null), "row", array(), "any", false, true), "includingTax", array(), "any", true, true))) {
            // line 9
            echo "    ";
            $context["rowTotalAfterDiscountIncludingTax"] = ($this->getAttribute($this->getAttribute(($context["taxes"] ?? null), "row", array()), "includingTax", array()) - ($context["appliedDiscountsAmount"] ?? null));
        }
        // line 11
        echo "
";
        // line 12
        $context["rowTotalAfterDiscountExcludingTax"] = 0;
        // line 13
        if (((array_key_exists("taxes", $context) && $this->getAttribute(($context["taxes"] ?? null), "row", array(), "any", true, true)) && $this->getAttribute($this->getAttribute(($context["taxes"] ?? null), "row", array(), "any", false, true), "excludingTax", array(), "any", true, true))) {
            // line 14
            echo "    ";
            $context["rowTotalAfterDiscountExcludingTax"] = ($this->getAttribute($this->getAttribute(($context["taxes"] ?? null), "row", array()), "excludingTax", array()) - ($context["appliedDiscountsAmount"] ?? null));
        }
        // line 16
        echo "
<div data-page-component-module=\"oropromotion/js/app/components/order-line-item-discounts-tax-component\">
    <span data-value-container>
        <table class=\"grid table table-condensed table-bordered applied_discounts-result-grid\">
            <thead>
                <tr>
                    <th class=\"renderable\">&nbsp;</th>
                    <th class=\"renderable\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.edit.order_line_item.short.includingTax.label"), "html", null, true);
        echo "</th>
                    <th class=\"renderable\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.edit.order_line_item.short.excludingTax.label"), "html", null, true);
        echo "</th>
                    <th class=\"renderable\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.edit.order_line_item.short.discount_amount.label"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"renderable\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.edit.order_line_item.row_total"), "html", null, true);
        echo "</td>
                    <td class=\"renderable applied-discount-row-total-after-discount-including-tax\">";
        // line 31
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["rowTotalAfterDiscountIncludingTax"] ?? null), array("currency" => ($context["currency"] ?? null)));
        echo "</td>
                    <td class=\"renderable applied-discount-row-total-after-discount-excluding-tax\">";
        // line 32
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["rowTotalAfterDiscountExcludingTax"] ?? null), array("currency" => ($context["currency"] ?? null)));
        echo "</td>
                    <td class=\"renderable applied-discount-row-total-discount-amount\">";
        // line 33
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["appliedDiscountsAmount"] ?? null), array("currency" => ($context["currency"] ?? null)));
        echo "</td>
                </tr>
            </tbody>
        </table>
    </span>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Order/Form:applied_discounts_with_taxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  85 => 32,  81 => 31,  77 => 30,  69 => 25,  65 => 24,  61 => 23,  52 => 16,  48 => 14,  46 => 13,  44 => 12,  41 => 11,  37 => 9,  35 => 8,  33 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Order/Form:applied_discounts_with_taxes.html.twig", "");
    }
}

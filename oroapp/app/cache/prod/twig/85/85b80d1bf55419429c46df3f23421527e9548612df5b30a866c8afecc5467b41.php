<?php

/* OroPromotionBundle:Order/Form:applied_discounts_without_taxes.html.twig */
class __TwigTemplate_5b5416468c647cd5d92fa2b7a59d6c3fc6408c1c32d2b3a335fc57f2c3ce4ef9 extends Twig_Template
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
        $context["currency"] = (($this->getAttribute(($context["appliedDiscounts"] ?? null), "currency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["appliedDiscounts"] ?? null), "currency", array()), "")) : (""));
        // line 5
        $context["rowTotalWithoutDiscount"] = (($this->getAttribute(($context["appliedDiscounts"] ?? null), "rowTotalWithoutDiscount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["appliedDiscounts"] ?? null), "rowTotalWithoutDiscount", array()), 0)) : (0));
        // line 6
        $context["rowTotalAfterDiscount"] = (($context["rowTotalWithoutDiscount"] ?? null) - ($context["appliedDiscountsAmount"] ?? null));
        // line 7
        echo "
<div data-page-component-module=\"oropromotion/js/app/components/order-line-item-discounts-no-tax-component\">
    <span data-value-container>
        <table class=\"grid table table-condensed table-bordered applied_discount-result-grid\">
            <thead>
                <tr>
                    <th class=\"renderable\">&nbsp;</th>
                    <th class=\"renderable\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.edit.order_line_item.short.row_total_after_discount.label"), "html", null, true);
        echo "</th>
                    <th class=\"renderable\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.edit.order_line_item.short.discount_amount.label"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"renderable\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf("oro.tax.result.row", "row")), "html", null, true);
        echo "</td>
                    <td class=\"renderable applied-discount-row-total-after-discount\">";
        // line 21
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["rowTotalAfterDiscount"] ?? null), array("currency" => ($context["currency"] ?? null)));
        echo "</td>
                    <td class=\"renderable applied-discount-row-total-discount-amount\">";
        // line 22
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
        return "OroPromotionBundle:Order/Form:applied_discounts_without_taxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 22,  57 => 21,  53 => 20,  45 => 15,  41 => 14,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Order/Form:applied_discounts_without_taxes.html.twig", "");
    }
}

<?php

/* OroPromotionBundle:Coupon:addedCouponsTable.html.twig */
class __TwigTemplate_af73cbb43ca8901100a481be98173301eadba18f1b4128f3ec8afdbbc8c3ee04 extends Twig_Template
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
        if ((twig_length_filter($this->env, ($context["coupons"] ?? null)) > 0)) {
            // line 2
            echo "    <div class=\"grid-container\">
        <table class=\"grid table table-bordered table-condensed\">
            <thead>
                <tr>
                    <th>";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.coupon.code.label"), "html", null, true);
            echo "</th>
                    <th>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.entity_label"), "html", null, true);
            echo "</th>
                    <th>";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.discountconfiguration.type.label"), "html", null, true);
            echo "</th>
                    <th>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.discountconfiguration.options.discount_value.label"), "html", null, true);
            echo "</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 15
                echo "                    <tr>
                        <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "code", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["coupon"], "promotion", array()), "rule", array()), "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.discount.type.choices." . $this->getAttribute($this->getAttribute($this->getAttribute($context["coupon"], "promotion", array()), "discountConfiguration", array()), "type", array()))), "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 20
                $context["options"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["coupon"], "promotion", array()), "discountConfiguration", array()), "options", array());
                // line 21
                echo "                            ";
                if (($this->getAttribute(($context["options"] ?? null), "discount_type", array(), "array") == twig_constant("Oro\\Bundle\\PromotionBundle\\Discount\\DiscountInterface::TYPE_AMOUNT"))) {
                    // line 22
                    echo "                                ";
                    echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["options"] ?? null), "discount_value", array(), "array"), array("currency" => $this->getAttribute(($context["options"] ?? null), "discount_currency", array(), "array")));
                    echo "
                            ";
                } else {
                    // line 24
                    echo "                                ";
                    echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(($context["options"] ?? null), "discount_value", array(), "array"));
                    echo "
                            ";
                }
                // line 26
                echo "                        </td>
                        <td><i data-remove-coupon-id=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "id", array()), "html", null, true);
                echo "\" class=\"fa-remove hide-text\"></i></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            </tbody>
        </table>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:Coupon:addedCouponsTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  87 => 27,  84 => 26,  78 => 24,  72 => 22,  69 => 21,  67 => 20,  62 => 18,  58 => 17,  54 => 16,  51 => 15,  47 => 14,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:Coupon:addedCouponsTable.html.twig", "");
    }
}

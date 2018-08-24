<?php

/* OroPromotionBundle:AppliedPromotion:applied_promotions_table.html.twig */
class __TwigTemplate_02e5b0a7180dcd0a49cab2bec47a69e13eafb949638712ff83017903d48fee7e extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPromotionBundle:AppliedPromotion:applied_promotions_table.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (twig_length_filter($this->env, ($context["collection"] ?? null))) {
            // line 4
            echo "    <table class=\"grid table-hover table table-bordered table-condensed\">
        <thead>
            <tr>
                <th>
                    <span>";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.table_columns.code"), "html", null, true);
            echo "</span>
                </th>
                <th class=\"promotion\">
                    <span>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.table_columns.promotion"), "html", null, true);
            echo "</span>
                </th>
                <th>
                    <span>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.table_columns.type"), "html", null, true);
            echo "</span>
                </th>
                <th>
                    <span>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.table_columns.status"), "html", null, true);
            echo "</span>
                </th>
                <th class=\"discount\">
                    <span>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.table_columns.discount"), "html", null, true);
            echo "</span>
                </th>
                <th ";
            // line 22
            if ((array_key_exists("editable", $context) && ($context["editable"] ?? null))) {
                echo " colspan=\"3\" ";
            }
            echo "></th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "                <tr
                    data-role=\"applied-discount-table-row\"
                    ";
                // line 29
                if ($this->getAttribute($context["item"], "sourcePromotionId", array(), "any", true, true)) {
                    // line 30
                    echo "                        data-source-promotion-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sourcePromotionId", array()), "html", null, true);
                    echo "\"
                    ";
                }
                // line 32
                echo "                    ";
                if (($this->getAttribute($context["item"], "sourceCouponId", array(), "any", true, true) && $this->getAttribute($context["item"], "sourceCouponId", array()))) {
                    // line 33
                    echo "                        data-source-coupon-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sourceCouponId", array()), "html", null, true);
                    echo "\"
                    ";
                }
                // line 35
                echo "                    ";
                echo (($this->getAttribute($context["item"], "active", array())) ? ("") : (" class=\"disabled\""));
                echo "
                >
                    <td>
                        ";
                // line 38
                if ($this->getAttribute($context["item"], "couponCode", array())) {
                    // line 39
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "couponCode", array()), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 41
                    echo "                            <span class=\"not-available\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 43
                echo "                    </td>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "promotionName", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.discount.type.choices." . $this->getAttribute($context["item"], "type", array()))), "html", null, true);
                echo "</td>
                    <td>
                        ";
                // line 47
                if ($this->getAttribute($context["item"], "active", array())) {
                    // line 48
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.active.active"), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 50
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.active.inactive"), "html", null, true);
                    echo "
                        ";
                }
                // line 52
                echo "                    </td>
                    <td class=\"discount\">
                        ";
                // line 54
                $context["amount"] = ((($this->getAttribute($context["item"], "amount", array()) > 0)) ? ( -$this->getAttribute($context["item"], "amount", array())) : ($this->getAttribute($context["item"], "amount", array())));
                // line 55
                echo "                        ";
                echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["amount"] ?? null), array("currency" => $this->getAttribute($context["item"], "currency", array())));
                echo "
                    </td>
                    <td class=\"action\">
                        ";
                // line 58
                if ($this->getAttribute($context["item"], "id", array())) {
                    // line 59
                    echo "                            ";
                    $context["route"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_get_promotion_by_applied_promotion", array("id" => $this->getAttribute($context["item"], "id", array())));
                    // line 60
                    echo "                        ";
                } else {
                    // line 61
                    echo "                            ";
                    $context["route"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_promotion_get_promotion_by_promotion", array("id" => $this->getAttribute($context["item"], "sourcePromotionId", array())));
                    // line 62
                    echo "                        ";
                }
                // line 63
                echo "
                        ";
                // line 64
                echo $context["UI"]->getclientLink(array("dataUrl" =>                 // line 65
($context["route"] ?? null), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.ui.add"), "class" => "fa-eye hide-text", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.actions.view"), "widget" => array("type" => "dialog", "multiple" => false, "options" => array("alias" => "promotion-details-dialog", "dialogOptions" => array("title" => $this->getAttribute(                // line 75
$context["item"], "promotionName", array()), "resizable" => true, "allowMaximize" => false, "allowMinimize" => false, "width" => 1400, "modal" => true)))));
                // line 84
                echo "
                    </td>
                    ";
                // line 86
                if ((array_key_exists("editable", $context) && ($context["editable"] ?? null))) {
                    // line 87
                    echo "                        <td class=\"action\">
                            <a data-role=\"applied-promotion-change-active-button\" href=\"javascript:void(0);\">
                                ";
                    // line 89
                    if ($this->getAttribute($context["item"], "active", array())) {
                        // line 90
                        echo "                                    <i class=\"fa-close hide-text\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.actions.deactivate"), "html", null, true);
                        echo "\">
                                        ";
                        // line 91
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.actions.deactivate"), "html", null, true);
                        echo "
                                    </i>
                                ";
                    } else {
                        // line 94
                        echo "                                    <i class=\"fa-check hide-text\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.actions.activate"), "html", null, true);
                        echo "\">
                                        ";
                        // line 95
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.actions.activate"), "html", null, true);
                        echo "
                                    </i>
                                ";
                    }
                    // line 98
                    echo "                            </a>
                        </td>
                        <td class=\"action\">
                            <a data-role=\"applied-promotion-remove-button\" href=\"javascript:void(0);\">
                                <i class=\"fa-trash hide-text\" title=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.actions.remove"), "html", null, true);
                    echo "\">
                                    ";
                    // line 103
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.actions.remove"), "html", null, true);
                    echo "
                                </i>
                            </a>
                        </td>
                    ";
                }
                // line 108
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "        </tbody>
    </table>
";
        } elseif (( !        // line 112
array_key_exists("editable", $context) ||  !($context["editable"] ?? null))) {
            // line 113
            echo "    <div class=\"no-data\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.promotion.appliedpromotion.no_entities"), "html", null, true);
            echo "<span></span></span></div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:AppliedPromotion:applied_promotions_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 113,  239 => 112,  235 => 110,  228 => 108,  220 => 103,  216 => 102,  210 => 98,  204 => 95,  199 => 94,  193 => 91,  188 => 90,  186 => 89,  182 => 87,  180 => 86,  176 => 84,  174 => 75,  173 => 65,  172 => 64,  169 => 63,  166 => 62,  163 => 61,  160 => 60,  157 => 59,  155 => 58,  148 => 55,  146 => 54,  142 => 52,  136 => 50,  130 => 48,  128 => 47,  123 => 45,  119 => 44,  116 => 43,  110 => 41,  104 => 39,  102 => 38,  95 => 35,  89 => 33,  86 => 32,  80 => 30,  78 => 29,  74 => 27,  70 => 26,  61 => 22,  56 => 20,  50 => 17,  44 => 14,  38 => 11,  32 => 8,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:AppliedPromotion:applied_promotions_table.html.twig", "");
    }
}

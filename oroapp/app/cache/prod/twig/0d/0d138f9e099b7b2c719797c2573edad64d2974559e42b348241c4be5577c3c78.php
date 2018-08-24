<?php

/* OroPromotionBundle:layouts/default/oro_shopping_list_frontend_view:discount_information.html.twig */
class __TwigTemplate_21e81d4982da5206acdaa4fd7f103fe6dbd37192c87681c7b03216af165e3cb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_promotion_line_items_list_discount_info_widget' => array($this, 'block__promotion_line_items_list_discount_info_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_promotion_line_items_list_discount_info_widget', $context, $blocks);
    }

    public function block__promotion_line_items_list_discount_info_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["matchedDiscount"] = (($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "lineItemDiscounts", array()), "contains", array(0 => ($context["lineItem"] ?? null)), "method")) ? ($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "lineItemDiscounts", array()), "get", array(0 => ($context["lineItem"] ?? null)), "method")) : (null));
        // line 3
        echo "    ";
        if (( !(null === ($context["matchedDiscount"] ?? null)) && ($this->getAttribute($this->getAttribute(($context["matchedDiscount"] ?? null), "total", array()), "value", array()) > 0))) {
            // line 4
            echo "        <table class=\"price-table\">
            <tbody>
            <tr>
                <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.view.discount.label"), "html", null, true);
            echo "</td>
                <td class=\"text-right\">
                    <span data-name=\"discount-value\">
                        ";
            // line 10
            echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute(($context["matchedDiscount"] ?? null), "total", array()));
            echo "
                    </span>
                </td>
            </tr>
            </tbody>
        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:layouts/default/oro_shopping_list_frontend_view:discount_information.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  37 => 7,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:layouts/default/oro_shopping_list_frontend_view:discount_information.html.twig", "");
    }
}

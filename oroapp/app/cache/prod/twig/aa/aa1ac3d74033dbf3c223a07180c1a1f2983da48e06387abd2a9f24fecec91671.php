<?php

/* OroPromotionBundle:layouts/default/oro_checkout_frontend_checkout:discount_information.html.twig */
class __TwigTemplate_bc6232298e04703194cbbada9198886430dbaf0978a2a7e746857873c96f685c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_promotion_checkout_line_items_list_discount_info_widget' => array($this, 'block__promotion_checkout_line_items_list_discount_info_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_promotion_checkout_line_items_list_discount_info_widget', $context, $blocks);
    }

    public function block__promotion_checkout_line_items_list_discount_info_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-dom-relocation-options" => twig_jsonencode_filter(array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "mobile-landscape"), "moveTo" => (("[data-checkout-order-summary-line-item-price_" . twig_lower_filter($this->env,         // line 9
($context["productSku"] ?? null))) . "]"))))), "~class" => " checkout-order-summary__lineitem-total"));
        // line 15
        echo "    ";
        $context["matchedDiscount"] = (($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "lineItemDiscounts", array()), "contains", array(0 => ($context["lineItem"] ?? null)), "method")) ? ($this->getAttribute($this->getAttribute(($context["parent"] ?? null), "lineItemDiscounts", array()), "get", array(0 => ($context["lineItem"] ?? null)), "method")) : (null));
        // line 16
        echo "    ";
        if (( !(null === ($context["matchedDiscount"] ?? null)) && ($this->getAttribute($this->getAttribute(($context["matchedDiscount"] ?? null), "total", array()), "value", array()) > 0))) {
            // line 17
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency( -$this->getAttribute($this->getAttribute(($context["matchedDiscount"] ?? null), "total", array()), "value", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["matchedDiscount"] ?? null), "total", array()), "currency", array())));
            echo "</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroPromotionBundle:layouts/default/oro_checkout_frontend_checkout:discount_information.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 17,  33 => 16,  30 => 15,  28 => 9,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPromotionBundle:layouts/default/oro_checkout_frontend_checkout:discount_information.html.twig", "");
    }
}

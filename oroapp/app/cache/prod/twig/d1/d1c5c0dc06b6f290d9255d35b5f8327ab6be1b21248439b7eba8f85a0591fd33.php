<?php

/* @OroPromotion/layouts/default/oro_checkout_frontend_checkout/discount_information.yml */
class __TwigTemplate_b14c147c1a03e8a5e911ff3d5da1ec5a8027812245c35a7349042e94a66cf5e7 extends Twig_Template
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
        echo "layout:
    actions:
        - '@setBlockTheme':
            themes: 'discount_information.html.twig'
        - '@setOption':
            id: 'checkout_order_summary_line_items'
            optionName: 'lineItemDiscounts'
            optionValue: '=data[\"oro_promotion_discounts_information\"].getDiscountLineItemDiscounts(data[\"checkout\"])'
        - '@add':
            id: 'promotion_checkout_line_items_list_discount_info'
            blockType: block
            parentId: 'checkout_order_summary_line_item_price_total_column'
            siblingId: 'checkout_order_summary_line_item_price_total'
";
    }

    public function getTemplateName()
    {
        return "@OroPromotion/layouts/default/oro_checkout_frontend_checkout/discount_information.yml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroPromotion/layouts/default/oro_checkout_frontend_checkout/discount_information.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PromotionBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/discount_information.yml");
    }
}

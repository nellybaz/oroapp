<?php

/* @OroPromotion/layouts/default/oro_checkout_frontend_checkout/coupon_form.yml */
class __TwigTemplate_e0e0607b6311a26748566cdebf0d22b1f8f7a5d1caa05c20bc3874b43ccb9c05 extends Twig_Template
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
    imports:
        -
            id: oro_promotion_coupon_form
            namespace: coupon_form
            root: checkout_order_summary_totals_container
    actions:
        - '@move':
            id: coupon_form_container
            parentId: checkout_order_summary_totals_container
            siblingId: checkout_order_summary_totals
            prepend: true

        - '@setOption':
            id: coupon_form_applied_coupons_list_rows_container
            optionName: appliedCoupons
            optionValue: '=data[\"oro_promotion_applied_coupons\"].getAppliedCoupons(data[\"checkout\"])'

        - '@setOption':
            id: coupon_form_applied_coupons_list_rows_container
            optionName: appliedCouponsPromotions
            optionValue: '=data[\"oro_promotion_applied_coupons\"].getPromotionsForAppliedCoupons(data[\"checkout\"])'

        - '@setOption':
            id: coupon_form_applied_coupons_list_container
            optionName: visible
            optionValue: '=data[\"oro_promotion_applied_coupons\"].hasAppliedCoupons(data[\"checkout\"])'

        - '@setOption':
            id: coupon_form_expand_link
            optionName: visible
            optionValue: '=data[\"oro_promotion_applied_coupons\"].hasAppliedCoupons(data[\"checkout\"]) != true'

        - '@setOption':
            id: coupon_form_widget_container
            optionName: opened
            optionValue: '=data[\"oro_promotion_applied_coupons\"].hasAppliedCoupons(data[\"checkout\"])'

        - '@setOption':
            id: coupon_form_container
            optionName: entity
            optionValue: '=data[\"checkout\"]'

        - '@setOption':
            id: coupon_form_applied_coupons_list_row_delete_button
            optionName: attr.class
            optionValue: 'btn btn--link btn--baseline'

    conditions: 'context[\"isAppliedCouponsAware\"] == true'
";
    }

    public function getTemplateName()
    {
        return "@OroPromotion/layouts/default/oro_checkout_frontend_checkout/coupon_form.yml";
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
        return new Twig_Source("", "@OroPromotion/layouts/default/oro_checkout_frontend_checkout/coupon_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PromotionBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/coupon_form.yml");
    }
}

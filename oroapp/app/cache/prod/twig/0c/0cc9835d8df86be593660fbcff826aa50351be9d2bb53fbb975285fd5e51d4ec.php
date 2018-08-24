<?php

/* @OroPromotion/layouts/default/imports/oro_promotion_coupon_form/oro_promotion_coupon_form.yml */
class __TwigTemplate_02f3318258354b6501b639b11771c39dc9fa92583897e6be6b8b79c6cd772489 extends Twig_Template
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
            themes: 'oro_promotion_coupon_form.html.twig'
        - '@addTree':
            items:
                __container:
                    blockType: promotion_applied_coupons_container
                __expand_link:
                    blockType: block
                __expandable_container:
                    blockType: container
                __widget_container:
                    blockType: promotion_coupons_expandable
                __widget_header:
                    blockType: block
                __form_container:
                    blockType: container
                __coupon_input:
                    blockType: block
                __apply_button:
                    blockType: block
                __applied_coupons_list_container:
                    blockType: container
                __applied_coupons_list_header:
                    blockType: block
                __applied_coupons_list_rows_container:
                    blockType: promotion_applied_coupons
                __applied_coupons_list_row_container:
                    blockType: container
                __applied_coupons_list_row_text_container:
                    blockType: container
                __applied_coupons_list_row_coupon_code:
                    blockType: block
                __applied_coupons_list_row_promotion_name:
                    blockType: block
                __applied_coupons_list_row_delete_button:
                    blockType: block
            tree:
                __root:
                    __container:
                        __widget_container:
                            __expand_link: ~
                            __expandable_container:
                                __widget_header: ~
                                __form_container:
                                    __coupon_input: ~
                                    __apply_button: ~
                                __applied_coupons_list_container:
                                    __applied_coupons_list_header: ~
                                    __applied_coupons_list_rows_container:
                                        __applied_coupons_list_row_container:
                                            __applied_coupons_list_row_text_container:
                                                __applied_coupons_list_row_coupon_code: ~
                                                __applied_coupons_list_row_promotion_name: ~
                                            __applied_coupons_list_row_delete_button: ~
";
    }

    public function getTemplateName()
    {
        return "@OroPromotion/layouts/default/imports/oro_promotion_coupon_form/oro_promotion_coupon_form.yml";
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
        return new Twig_Source("", "@OroPromotion/layouts/default/imports/oro_promotion_coupon_form/oro_promotion_coupon_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PromotionBundle/Resources/views/layouts/default/imports/oro_promotion_coupon_form/oro_promotion_coupon_form.yml");
    }
}

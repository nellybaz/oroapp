<?php

/* @OroPricing/layouts/blank/imports/oro_product_totals/oro_product_totals.yml */
class __TwigTemplate_8fe605e8c8d03d329d08cbda6f946cfef02dac2c100ddcfebcff33dd837d7996 extends Twig_Template
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
            themes: 'oro_product_totals.html.twig'
        - '@addTree':
            items:
                __totals:
                    blockType: container
                    options:
                        visible: '=data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\") || data[\"feature\"].isFeatureEnabled(\"guest_rfp\") || context[\"is_logged_in\"]'
                __totals_wrapper:
                    blockType: container
                __quantity:
                    blockType: container
                __quantity_value:
                  blockType: block
                __quantity_text:
                    blockType: text
                    options:
                        text: 'oro.frontend.shoppinglist.matrix_grid_order.total_qty'
                __separator:
                  blockType: block
                __total:
                    blockType: container
                __total_value:
                  blockType: block
                __total_text:
                    blockType: text
                    options:
                        text: 'oro.frontend.shoppinglist.matrix_grid_order.total'
            tree:
                __root:
                    __totals:
                        __totals_wrapper:
                            __quantity:
                                __quantity_text: ~
                                __quantity_value: ~
                            __separator: ~
                            __total:
                                __total_text: ~
                                __total_value: ~
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/blank/imports/oro_product_totals/oro_product_totals.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/blank/imports/oro_product_totals/oro_product_totals.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_totals/oro_product_totals.yml");
    }
}

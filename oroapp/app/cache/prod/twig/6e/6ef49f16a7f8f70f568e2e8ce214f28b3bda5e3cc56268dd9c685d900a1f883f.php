<?php

/* @OroPromotion/layouts/default/oro_shopping_list_frontend_view/discount_information.yml */
class __TwigTemplate_82c9e4c03bc7152cf76bcea6743dc1c222be179b00ddb4726decc2885895856d extends Twig_Template
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
            id: 'shopping_list_line_items_list'
            optionName: 'lineItemDiscounts'
            optionValue: '=data[\"oro_promotion_discounts_information\"].getDiscountLineItemDiscounts(data[\"entity\"])'
        - '@add':
            id: 'promotion_line_items_list_discount_info'
            parentId: 'shopping_list_line_items_list_price'
            blockType: block
";
    }

    public function getTemplateName()
    {
        return "@OroPromotion/layouts/default/oro_shopping_list_frontend_view/discount_information.yml";
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
        return new Twig_Source("", "@OroPromotion/layouts/default/oro_shopping_list_frontend_view/discount_information.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PromotionBundle/Resources/views/layouts/default/oro_shopping_list_frontend_view/discount_information.yml");
    }
}

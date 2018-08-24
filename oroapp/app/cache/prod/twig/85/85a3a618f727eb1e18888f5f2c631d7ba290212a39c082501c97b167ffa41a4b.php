<?php

/* @OroShoppingList/layouts/blank/oro_product_frontend_product_view/line_item_form.yml */
class __TwigTemplate_eeadc49c097faa38fd7f4c544a114cfac735942851b07e110dd5eb98c2b297c0 extends Twig_Template
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
        - '@setOption':
            id: line_item_form_update
            optionName: visible
            optionValue: '=data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\") || data[\"feature\"].isFeatureEnabled(\"guest_rfp\")'
        - '@setOption':
            id: product_view_variant_field_container
            optionName: visible
            optionValue: '=data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\")'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/oro_product_frontend_product_view/line_item_form.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/oro_product_frontend_product_view/line_item_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/line_item_form.yml");
    }
}

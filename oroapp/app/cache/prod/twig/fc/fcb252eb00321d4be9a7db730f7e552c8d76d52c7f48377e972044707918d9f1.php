<?php

/* @OroPricing/layouts/blank/imports/oro_product_quick_add_validation/quick_add_validation_subtotal.yml */
class __TwigTemplate_36d69034a19f0933c42f7334fc132a95c2489f3fdd9dbcb61e13f460db9f72e4 extends Twig_Template
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
            themes: 'quick_add_validation_subtotal.html.twig'
        - '@add':
            id: quick_add_validation_additional_fields_subtotal
            parentId: quick_add_validation_additional_fields
            blockType: price
            options:
                price: '=data[\"collection\"].getAdditionalFields()[\"price\"].getValue()'
        - '@add':
            id: quick_add_validation_valid_items_additional_fields_subtotal
            parentId: quick_add_validation_valid_items_additional_fields
            blockType: block
        - '@add':
            id: quick_add_validation_items_table_header_additional_data_subtotal
            parentId: quick_add_validation_valid_items_additional_fields_header
            blockType: block

    conditions: 'context[\"import_step\"]==\"result\"'
";
    }

    public function getTemplateName()
    {
        return "@OroPricing/layouts/blank/imports/oro_product_quick_add_validation/quick_add_validation_subtotal.yml";
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
        return new Twig_Source("", "@OroPricing/layouts/blank/imports/oro_product_quick_add_validation/quick_add_validation_subtotal.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/PricingBundle/Resources/views/layouts/blank/imports/oro_product_quick_add_validation/quick_add_validation_subtotal.yml");
    }
}

<?php

/* @OroProduct/layouts/blank/imports/oro_product_line_item_form/oro_product_line_item_form.yml */
class __TwigTemplate_0cffd77d1e72e73c2445bd28fc9c3191e4f1ea35c814243ab1d9702594c9f256 extends Twig_Template
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
            id: line_item_buttons
            root: __line_item_form_buttons
    actions:
        - '@setBlockTheme':
            themes: 'oro_product_line_item_form.html.twig'
        - '@addTree':
            items:
                __line_item_form:
                    blockType: container
                __line_item_form_start:
                    blockType: form_start
                    options:
                        form: '=data[\"oro_product_form\"].getLineItemFormView(data.offsetExists(\"product\")?data[\"product\"], instance_name)'
                __line_item_form_fields:
                    blockType: form_fields
                    options:
                        vars:
                            form: '=data[\"oro_product_form\"].getLineItemFormView(data.offsetExists(\"product\")?data[\"product\"], instance_name)'
                            singleUnitMode: '=data[\"oro_product_single_unit_mode\"].isSingleUnitMode()'
                            singleUnitModeCodeVisible: '=data[\"oro_product_single_unit_mode\"].isSingleUnitModeCodeVisible()'
                            defaultUnitCode: '=data[\"oro_product_single_unit_mode\"].getDefaultUnitCode()'
                __line_item_form_end:
                    blockType: form_end
                    options:
                        form: '=data[\"oro_product_form\"].getLineItemFormView(data.offsetExists(\"product\")?data[\"product\"], instance_name)'
                __line_item_form_buttons:
                    blockType: container
                __line_item_view_details:
                    blockType: link
                    options:
                        visible: '=data[\"feature\"].isFeatureEnabled(\"guest_shopping_list\") || data[\"feature\"].isFeatureEnabled(\"guest_rfp\") || context[\"is_logged_in\"]'
                        text:
                            label: oro.product.frontend.index.view_details
            tree:
                __root:
                    __line_item_form:
                        __line_item_form_start: ~
                        __line_item_form_fields: ~
                        __line_item_form_buttons:
                            __line_item_view_details: ~
                        __line_item_form_end: ~
        - '@move':
            id: __line_item_form_buttons
            parentId: __line_item_form
            siblingId: __line_item_form_fields
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/imports/oro_product_line_item_form/oro_product_line_item_form.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/imports/oro_product_line_item_form/oro_product_line_item_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_line_item_form/oro_product_line_item_form.yml");
    }
}

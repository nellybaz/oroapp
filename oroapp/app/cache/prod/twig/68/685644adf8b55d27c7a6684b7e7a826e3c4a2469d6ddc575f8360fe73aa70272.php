<?php

/* @OroProduct/layouts/default/imports/oro_product_quick_add_validation/quick_add_validation.yml */
class __TwigTemplate_b5604cf7ec941c43b2d39d36545ff28e2647703534e24ce747de89a9f7d046ef extends Twig_Template
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
            themes: 'quick_add_validation.html.twig'
        - '@addTree':
            items:
                __quick_add_validation:
                    blockType: quick_add_validation_container
                    options:
                        collection: '=data[\"collection\"]'
                __quick_add_validation_items_table_container:
                    blockType: container
                    options:
                        attr:
                            'class': 'quick_add_validation_items__container'
                __quick_add_validation_invalid_items_warning:
                    blockType: invalid_items_warning
                    options:
                        collection: '=data[\"collection\"]'
                __quick_add_validation_items_table:
                    blockType: container
                    options:
                        attr:
                            'class': 'quick_add_validation_items'
                __quick_add_validation_items_table_header:
                    blockType: container
                __quick_add_validation_valid_items_additional_fields_header:
                    blockType: container
                __quick_add_validation_items_table_body:
                    blockType: container
                __quick_add_validation_valid_items:
                    blockType: quick_add_validation_container
                    options:
                        collection: '=data[\"collection\"]'
                __quick_add_validation_valid_items_additional_fields:
                    blockType: container
                __quick_add_validation_additional_fields:
                    blockType: container
                __quick_add_validation_buttons:
                    blockType: container
                __quick_add_import_form_cancel:
                    blockType: button
                    options:
                        type: button
                        action: reset
                        text: 'oro.product.frontend.quick_add.cancel.label'
                        style: ''
                __quick_add_import_form_submit:
                    blockType: button
                    options:
                        type: button
                        action: submit
                        text: 'oro.product.frontend.quick_add.add_to_form.label'
                        attr:
                            class: 'btn btn--info'
            tree:
                __root:
                    __quick_add_validation:
                        __quick_add_validation_items_table_container:
                            __quick_add_validation_invalid_items_warning: ~
                            __quick_add_validation_items_table:
                                __quick_add_validation_items_table_header:
                                    __quick_add_validation_valid_items_additional_fields_header: ~
                                __quick_add_validation_items_table_body:
                                    __quick_add_validation_valid_items:
                                        __quick_add_validation_valid_items_additional_fields: ~
                        __quick_add_validation_additional_fields: ~
                    __quick_add_validation_buttons:
                        __quick_add_import_form_cancel: ~
                        __quick_add_import_form_submit: ~

    conditions: 'context[\"import_step\"]==\"result\"'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/imports/oro_product_quick_add_validation/quick_add_validation.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/imports/oro_product_quick_add_validation/quick_add_validation.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_quick_add_validation/quick_add_validation.yml");
    }
}

<?php

/* @OroProduct/layouts/blank/imports/oro_product_variant_form/oro_product_variant_form.yml */
class __TwigTemplate_690ed771c0b2bedc4ac6db88a739ee41f0e0f898e219100440df754da7a73702 extends Twig_Template
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
            themes: 'oro_product_variant_form.html.twig'
        - '@addTree':
            items:
                __variant_field_form:
                    blockType: container
                    options:
                        visible: '=data[\"oro_product_variant\"].hasProductAnyAvailableVariant(data[\"product\"]) and data[\"product_view_form_availability_provider\"].isSimpleFormAvailable(data[\"product\"])'
                __variant_field_form_start:
                    blockType: form_start
                    options:
                        form: '=data[\"oro_product_form\"].getVariantFieldsFormView(data[\"product\"])'
                __variant_field_form_fields:
                    blockType: form_fields
                    options:
                        form: '=data[\"oro_product_form\"].getVariantFieldsFormView(data[\"product\"])'
                __variant_field_form_end:
                    blockType: form_end
                    options:
                        form: '=data[\"oro_product_form\"].getVariantFieldsFormView(data[\"product\"])'
            tree:
                __root:
                    __variant_field_form:
                        __variant_field_form_start: ~
                        __variant_field_form_fields: ~
                        __variant_field_form_end: ~

    conditions: 'context[\"product_type\"] === \"configurable\"'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/imports/oro_product_variant_form/oro_product_variant_form.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/imports/oro_product_variant_form/oro_product_variant_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_variant_form/oro_product_variant_form.yml");
    }
}

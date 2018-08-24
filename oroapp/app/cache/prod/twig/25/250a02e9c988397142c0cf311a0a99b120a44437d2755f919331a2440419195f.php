<?php

/* @OroProduct/layouts/blank/oro_product_frontend_product_view/layout.yml */
class __TwigTemplate_47fee445180cc0655775e6390972dc34a69d558865e254539768f6b223a100ee extends Twig_Template
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
            id: oro_product_variant_form
            root: product_view_variant_field_container
    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'
        - '@setOption':
            id: title
            optionName: params
            optionValue:
                '%name%': '=data[\"locale\"].getLocalizedValue(data[\"product\"].getNames())'
        - '@addTree':
            items:
                product_view_container:
                    blockType: product_view_container
                    options:
                        product: '=data[\"oro_product_variant\"].getProductVariantOrProduct(data)'
                        parentProduct: '=data[\"parentProduct\"]'
                        productTheme: '=context[\"page_template\"]'
                product_view_primary_wrapper:
                    blockType: container
                product_view_primary_container:
                    blockType: container
                product_view_aside_container:
                    blockType: container
                product_sticker_new:
                    blockType: product_sticker
                    options:
                        mode: text
                        stickers: '=data[\"oro_product_stickers\"].getStickers(data[\"product\"])'
                        visible: '=data[\"oro_product_stickers\"].isStickersEnabledOnView()'
                product_view_main_container:
                    blockType: container
                product_view_content_container:
                    blockType: container
                product_view_specification_container:
                    blockType: container
                product_view_line_item_container:
                    blockType: container
                product_view_description_container:
                    blockType: container
                product_view_brand_container:
                    blockType: container
                product_view_additional_container:
                    blockType: container
                product_view_attribute_group_general:
                    blockType: attribute_group
                    options:
                        entity: '=data[\"product\"]'
                        attribute_family: '=context[\"attribute_family\"]'
                        group: 'general'
                product_view_main_attributes_container:
                    blockType: container
            tree:
                page_content:
                    product_view_container:
                        product_view_primary_wrapper:
                            product_view_primary_container:
                                product_sticker_new: ~
                            product_view_aside_container: ~
                        product_view_main_container:
                            product_view_content_container:
                                product_view_specification_container: ~
                                product_view_description_container:
                                    product_view_line_item_container: ~
                                product_view_brand_container: ~
                                product_view_attribute_group_general: ~
                                product_view_main_attributes_container: ~
                        product_view_additional_container: ~
        - '@move':
            id: product_view_attribute_group_general_attribute_text_sku
            parentId: product_view_primary_container
            prepend: true
        - '@move':
            id: product_view_attribute_group_general_attribute_localized_fallback_descriptions
            parentId: product_view_description_container
        - '@move':
            id: product_view_attribute_group_general_attribute_text_brand
            parentId: product_view_brand_container
        - '@setOption':
            id: product_view_attribute_group_general_attribute_localized_fallback_shortDescriptions
            optionName: visible
            optionValue: false
        - '@move':
            id: product_view_attribute_group_general_attribute_localized_fallback_names
            parentId: product_view_primary_container
            prepend: true
        - '@move':
            id: product_view_attribute_group_general_attribute_product_images_images
            parentId: product_view_media_container
        - '@setOption':
            id: product_view_attribute_group_general_attribute_product_images_images
            optionName: popup_gallery
            optionValue: '=data[\"system_config_provider\"].getValue(\"oro_product.popup_gallery_on_product_view\")'
        - '@add':
            id: product_require_js_config
            parentId: require_js
            blockType: block
        - '@add':
            id: product_view_variant_field_container
            blockType: container
            parentId: product_view_line_item_container
            siblingId: ~
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/oro_product_frontend_product_view/layout.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/oro_product_frontend_product_view/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/layout.yml");
    }
}
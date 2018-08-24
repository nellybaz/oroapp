<?php

/* @OroProduct/layouts/blank/imports/oro_product_list_item/oro_product_list_item.yml */
class __TwigTemplate_e036e3fbea5fe47b2c305b673f66a06578443e351c37728d0075713532664ba8 extends Twig_Template
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
            id: oro_product_line_item_form
            root: __product_secondary_content_second_container
            namespace: product
    actions:
        - '@setBlockTheme':
            themes: 'oro_product_list_item.html.twig'
        - '@addTree':
            items:
                __product:
                    blockType: container
                __product_box:
                    blockType: container
                __product_content:
                    blockType: container
                __product_sticker_new:
                    blockType: product_sticker
                __product_sticker_new_text:
                    blockType: product_sticker
                    options:
                        visible: '=false'
                        mode: 'text'
                __product_image_holder:
                    blockType: container
                    options:
                        attr:
                            class: 'product-item__image-holder--aspect-ratio'
                __product_view:
                    blockType: product_listing_view
                    options:
                        popup_gallery: '=data[\"system_config_provider\"].getValue(\"oro_product.image_preview_on_product_listing_enabled\")'
                __product_view_image:
                    blockType: product_list_item_image
                __product_popup_gallery:
                    blockType: block
                    options:
                        visible: '=data[\"system_config_provider\"].getValue(\"oro_product.image_preview_on_product_listing_enabled\")'
                __product_quick_view:
                    blockType: block
                    options:
                        visible: '=false'
                __product_title:
                    blockType: container
                __product_primary_content_container:
                    blockType: container
                __product_specification:
                    blockType: container
                __product_sku:
                    blockType: container
                __product_mfg:
                    blockType: block
                    options:
                        visible: '=false'
                __product_short_description:
                    blockType: container
                __product_details:
                    blockType: block
                __product_secondary_content_container:
                    blockType: container
                __product_secondary_content_first_container:
                    blockType: container
                __product_specification_delivery:
                    blockType: block
                    options:
                        visible: '=false'
                __product_secondary_content_second_container:
                    blockType: container
                __product_more_info:
                    blockType: block
                    options:
                        visible: '=false'
            tree:
                __root:
                    __product:
                        __product_box:
                            __product_content:
                                __product_image_holder:
                                    __product_view:
                                        __product_view_image: ~
                                        __product_popup_gallery: ~
                                    __product_sticker_new: ~
                                    __product_quick_view: ~
                                __product_title: ~
                                __product_primary_content_container:
                                    __product_specification:
                                        __product_sku: ~
                                        __product_mfg: ~
                                        __product_sticker_new_text: ~
                                    __product_short_description: ~
                                    __product_details: ~
                                __product_secondary_content_container:
                                    __product_secondary_content_first_container:
                                        __product_specification_delivery: ~
                                    __product_secondary_content_second_container:
                                        __product_more_info: ~
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/imports/oro_product_list_item/oro_product_list_item.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/imports/oro_product_list_item/oro_product_list_item.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_list_item/oro_product_list_item.yml");
    }
}

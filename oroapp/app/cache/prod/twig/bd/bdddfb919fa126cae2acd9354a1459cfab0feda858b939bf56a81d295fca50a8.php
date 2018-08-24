<?php

/* @OroProduct/layouts/blank/oro_product_frontend_product_view/product_media.yml */
class __TwigTemplate_6a07dd0db989f5fbc02d3c96d78de1d4c032198180be182b9231570c43a08cbb extends Twig_Template
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
            themes: 'product_media.html.twig'
        - '@addTree':
            items:
                product_view_media_container:
                    blockType: container
                product_view_attribute_group_images:
                    blockType: attribute_group
                    options:
                        entity: '=data[\"product\"]'
                        attribute_family: '=context[\"attribute_family\"]'
                        group: 'images'
            tree:
                product_view_aside_container:
                    product_view_media_container:
                        product_view_attribute_group_images: ~
        - '@setOption':
            id: product_view_attribute_group_images_attribute_product_images_images
            optionName: popup_gallery
            optionValue: '=data[\"system_config_provider\"].getValue(\"oro_product.popup_gallery_on_product_view\")'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/oro_product_frontend_product_view/product_media.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/oro_product_frontend_product_view/product_media.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/product_media.yml");
    }
}

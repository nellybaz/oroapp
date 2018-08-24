<?php

/* @OroProduct/layouts/default/config/images.yml */
class __TwigTemplate_3d3a76d219e4b029764e4e91b6edceeba45a30343e21cada391d22790543dfc9 extends Twig_Template
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
        echo "types:
    main:
        label: oro.product.productimage.type.main.label
        dimensions:
            - product_original
            - product_gallery_popup
            - product_gallery_main
            - product_large
            - product_extra_large
            - product_medium
            - product_small
        max_number: 1
    listing:
        label: oro.product.productimage.type.listing.label
        dimensions:
            - product_extra_large
            - product_small
            - product_large
        max_number: 1
    additional:
        label: oro.product.productimage.type.additional.label
        dimensions:
            - product_original
            - product_extra_large
            - product_small
        max_number: ~
dimensions:
    product_original:
        width: ~
        height: ~
        options:
            applyProductImageWatermark: true
    product_gallery_popup:
        width: 610
        height: 610
        options:
            applyProductImageWatermark: true
    product_gallery_main:
        width: 378
        height: auto
        options:
            applyProductImageWatermark: true
    product_extra_large:
        width: 378
        height: 378
        options:
            applyProductImageWatermark: true
    product_large:
        width: 316
        height: auto
        options:
            applyProductImageWatermark: true
    product_medium:
        width: 262
        height: auto
        options:
            applyProductImageWatermark: true
    product_small:
        width: 82
        height: 82
        options:
            applyProductImageWatermark: true
    category_medium:
        width: 315
        height: 260
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/config/images.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/config/images.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/config/images.yml");
    }
}

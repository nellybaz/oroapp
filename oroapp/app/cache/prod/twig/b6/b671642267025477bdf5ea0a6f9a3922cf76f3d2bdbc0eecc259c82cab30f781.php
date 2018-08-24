<?php

/* @OroProduct/layouts/blank/imports/oro_product_list/oro_product_list.yml */
class __TwigTemplate_377e585380b8cdd1dd4f6ac1187434e4301b7e3c063a1cbfc708a978c51cb38b extends Twig_Template
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
            id: oro_product_list_item
            root: __products
    actions:
        - '@setBlockTheme':
            themes: 'oro_product_list.html.twig'
        - '@add':
            id: __products
            parentId: __root
            blockType: embedded_list
            options:
                item_key: product
                use_slider: true
                slider_options:
                    slidesToShow: 4
                    arrows: true
                    responsive:
                        - {breakpoint: 1100, settings: {arrows: true}}
                        - {breakpoint: 993, settings: {slidesToShow: 3, arrows: true}}
                        - {breakpoint: 641, settings: {slidesToShow: 2, arrows: true}}
                        - {breakpoint: 415, settings: {slidesToShow: 1, arrows: true}}
                use_footer_align: true
                footer_align_component_options:
                    view: 'orofrontend/default/js/app/views/footer-align-view'
                    elements:
                        items: '.embedded-list__item'
                        footer: '.product-item__qty'
                visible: '=items'
                item_extra_class: 'embedded-products__item'
                attr:
                    class: 'embedded-products'

        - '@setOption':
            id: __product
            optionName: class_prefix
            optionValue: gallery-view
        - '@setOption':
            id: __products
            optionName: items_data.matrixFormType
            optionValue:
                '=data[\"product_list_form_availability_provider\"].getAvailableMatrixFormTypes(items, \"gallery-view\")'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/imports/oro_product_list/oro_product_list.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/imports/oro_product_list/oro_product_list.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_list/oro_product_list.yml");
    }
}

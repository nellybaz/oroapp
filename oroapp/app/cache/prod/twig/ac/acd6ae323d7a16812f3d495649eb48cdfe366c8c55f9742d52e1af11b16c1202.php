<?php

/* @OroProduct/layouts/default/oro_product_frontend_product_view/page_template/list/layout.yml */
class __TwigTemplate_c6ae3b1e0fbc3c9af6b0ba1b31b7c510a79e47a36dc0bc449c1c3860fa83f48a extends Twig_Template
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
            themes: 'layout.html.twig'
        - '@move':
            id: product_view_line_item_container
            parentId: product_view_content_container
            siblingId: product_view_description_container
            prepend: false
        - '@remove':
            id: attribute_group_rest
        - '@move':
            id: line_item_form_shopping_lists
            parentId: line_item_form
            siblingId: line_item_form_end
            prepend: true
        - '@add':
            id: product_main_container
            parentId: product_view_container
            blockType: container
        - '@add':
            id: product_aside_container
            parentId: product_view_container
            blockType: container
        - '@move':
            id: product_view_primary_wrapper
            parentId: product_main_container
        - '@move':
            id: product_view_main_container
            parentId: product_main_container
        - '@move':
            id: product_view_additional_container
            parentId: product_main_container
        - '@move':
            id: product_view_related_products_container
            parentId: product_aside_container
        - '@setOption':
            id: related_products
            optionName: use_slider
            optionValue: false
        - '@move':
            id: product_view_upsell_products_container
            parentId: product_aside_container
        - '@setOption':
            id: upsell_products
            optionName: use_slider
            optionValue: false

    conditions: '!context[\"is_mobile\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/oro_product_frontend_product_view/page_template/list/layout.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/oro_product_frontend_product_view/page_template/list/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/oro_product_frontend_product_view/page_template/list/layout.yml");
    }
}

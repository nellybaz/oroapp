<?php

/* @OroProduct/layouts/blank/oro_frontend_root/featured_products.yml */
class __TwigTemplate_34b2ec86f34a1982f1cd96481c1954c94672517ed49e88e239e1a222ec5e61aa extends Twig_Template
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
            id: oro_product_list
            root: featured_products_container
            namespace: featured
    actions:
        - '@setOption':
            id: featured_products
            optionName: items
            optionValue: '=data[\"featured_products\"].getProducts()'
        - '@setOption':
            id: featured_products
            optionName: items_data.stickers
            optionValue: '=data[\"oro_product_stickers\"].getStickersForProducts(data[\"featured_products\"].getProducts())'
        - '@appendOption':
            id: featured_product
            optionName: attr.class
            optionValue: featured-product
        - '@setOption':
            id: featured_products
            optionName: label
            optionValue: oro.product.featured_products.label
        - '@setOption':
            id: featured_product_line_item_form_fields
            optionName: instance_name
            optionValue: featured_products
        - '@setOption':
            id: featured_product_line_item_form_start
            optionName: instance_name
            optionValue: featured_products
        - '@setOption':
            id: featured_product_line_item_form_end
            optionName: instance_name
            optionValue: featured_products
        - '@add':
            id: featured_products_container
            parentId: page_content
            blockType: container
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/oro_frontend_root/featured_products.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/oro_frontend_root/featured_products.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_frontend_root/featured_products.yml");
    }
}

<?php

/* @OroProduct/layouts/blank/oro_frontend_root/new_arrivals.yml */
class __TwigTemplate_55a0746d856775f0120e275435a2c8f88b8ba925dec0a0f32a60ec96d2921a6b extends Twig_Template
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
            root: new_arrival_products_container
            namespace: new_arrival
    actions:
        - '@add':
            id: new_arrival_products_container
            parentId: page_content
            blockType: container
        - '@setOption':
            id: new_arrival_products
            optionName: items
            optionValue: '=data[\"new_arrivals\"].getProducts()'
        - '@appendOption':
            id: new_arrival_product
            optionName: attr.class
            optionValue: new-arrival-product
        - '@setOption':
            id: new_arrival_products
            optionName: label
            optionValue: oro.product.new_arrivals.label
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/oro_frontend_root/new_arrivals.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/oro_frontend_root/new_arrivals.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/oro_frontend_root/new_arrivals.yml");
    }
}

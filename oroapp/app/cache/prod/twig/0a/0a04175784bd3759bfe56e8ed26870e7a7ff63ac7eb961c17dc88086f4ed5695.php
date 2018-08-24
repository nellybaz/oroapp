<?php

/* @OroOrder/layouts/blank/oro_frontend_root/top_selling_items.yml */
class __TwigTemplate_e5bb25538a8b8ba810c27c2ab811dcbe0e4a0cf843d8ad5d0641b42a1c32ea7c extends Twig_Template
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
            root: top_selling_items_container
            namespace: top_selling
    actions:
        - '@setOption':
            id: top_selling_products
            optionName: items
            optionValue: '=data[\"top_selling_items\"].getProducts()'
        - '@setOption':
            id: top_selling_products
            optionName: items_data.stickers
            optionValue: '=data[\"oro_product_stickers\"].getStickersForProducts(data[\"top_selling_items\"].getProducts())'
        - '@setOption':
            id: top_selling_products
            optionName: label
            optionValue: oro.order.top_selling_items.label
        - '@setOption':
            id: top_selling_product_line_item_form_fields
            optionName: instance_name
            optionValue: top_selling_products
        - '@setOption':
            id: top_selling_product_line_item_form_start
            optionName: instance_name
            optionValue: top_selling_products
        - '@setOption':
            id: top_selling_product_line_item_form_end
            optionName: instance_name
            optionValue: top_selling_products
        - '@add':
            id: top_selling_items_container
            parentId: page_content
            blockType: container
";
    }

    public function getTemplateName()
    {
        return "@OroOrder/layouts/blank/oro_frontend_root/top_selling_items.yml";
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
        return new Twig_Source("", "@OroOrder/layouts/blank/oro_frontend_root/top_selling_items.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/OrderBundle/Resources/views/layouts/blank/oro_frontend_root/top_selling_items.yml");
    }
}

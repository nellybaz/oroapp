<?php

/* @OroInventory/layouts/blank/oro_product_frontend_product_view/low_inventory.yml */
class __TwigTemplate_61bb29ec3d51e3c6f8415643793fa77563ecc12b919ca3f90cf2d7fb718cad3b extends Twig_Template
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
            themes: 'low_inventory.html.twig'
        - '@add':
            id: low_inventory_label
            parentId: product_view_specification_container
            siblingId: product_price_subtree_update
            blockType: block
            options:
                vars:
                    product: '=data[\"product\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroInventory/layouts/blank/oro_product_frontend_product_view/low_inventory.yml";
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
        return new Twig_Source("", "@OroInventory/layouts/blank/oro_product_frontend_product_view/low_inventory.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/low_inventory.yml");
    }
}

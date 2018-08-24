<?php

/* @OroInventory/layouts/blank/imports/oro_product_list/low_inventory.yml */
class __TwigTemplate_a5e1bb07d001570e062dd4cfe571279e750aea36e49f81bc90b91f4538ed09f2 extends Twig_Template
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
            id: __product_low_inventory_label
            parentId: __product_specification
            blockType: container
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroInventory/layouts/blank/imports/oro_product_list/low_inventory.yml";
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
        return new Twig_Source("", "@OroInventory/layouts/blank/imports/oro_product_list/low_inventory.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/layouts/blank/imports/oro_product_list/low_inventory.yml");
    }
}

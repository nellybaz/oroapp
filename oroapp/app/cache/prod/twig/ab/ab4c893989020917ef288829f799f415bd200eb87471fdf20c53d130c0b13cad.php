<?php

/* @OroInventory/layouts/blank/imports/oro_product_list/upcoming.yml */
class __TwigTemplate_ac679eeeeb16734ad988820269234d40e1489f5bbeb46c3fc855b7fa586cdc6a extends Twig_Template
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
            themes: 'upcoming.html.twig'
        - '@add':
            id: __product_upcoming_label
            parentId: __product_specification
            blockType: container
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroInventory/layouts/blank/imports/oro_product_list/upcoming.yml";
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
        return new Twig_Source("", "@OroInventory/layouts/blank/imports/oro_product_list/upcoming.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/layouts/blank/imports/oro_product_list/upcoming.yml");
    }
}

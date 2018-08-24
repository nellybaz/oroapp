<?php

/* @OroInventory/layouts/default/imports/oro_product_grid/upcoming.yml */
class __TwigTemplate_44ba438e60e738c2b2716edb3b8e5963391f26181beb84e97939ca66253dfd99 extends Twig_Template
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
            id: product_datagrid_row__product_upcoming_label
            parentId: product_datagrid_row_product_specification
            blockType: container
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroInventory/layouts/default/imports/oro_product_grid/upcoming.yml";
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
        return new Twig_Source("", "@OroInventory/layouts/default/imports/oro_product_grid/upcoming.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/InventoryBundle/Resources/views/layouts/default/imports/oro_product_grid/upcoming.yml");
    }
}

<?php

/* @OroProduct/layouts/default/imports/oro_product_grid/grid.yml */
class __TwigTemplate_0722ba36a3efa5e79eaf522c48b8a77c0e29c52448b26a466a2f21d6486e4895 extends Twig_Template
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
            themes:
                - 'grid.html.twig'
                - 'grid_row.html.twig'
        - '@add':
            id: sticky_element_toolbar
            parentId: top_sticky_panel_content
            siblingId: sticky_header_row
            blockType: block
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/default/imports/oro_product_grid/grid.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/default/imports/oro_product_grid/grid.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/default/imports/oro_product_grid/grid.yml");
    }
}

<?php

/* @OroCatalog/layouts/blank/imports/oro_allproducts_grid/grid.yml */
class __TwigTemplate_ff787f4f86ff2c78a0b55983a286083efe77dfe4f3a0d2f422cf1407a01ff0dc extends Twig_Template
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
            id: oro_product_grid

    actions:
        - '@setBlockTheme':
            themes:
                - 'grid.html.twig'

        - '@add':
            id: product_datagrid_category_title
            parentId: product_datagrid
            blockType: block
";
    }

    public function getTemplateName()
    {
        return "@OroCatalog/layouts/blank/imports/oro_allproducts_grid/grid.yml";
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
        return new Twig_Source("", "@OroCatalog/layouts/blank/imports/oro_allproducts_grid/grid.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/imports/oro_allproducts_grid/grid.yml");
    }
}

<?php

/* @OroProduct/layouts/blank/imports/oro_datagrid_server_render/datagrid.yml */
class __TwigTemplate_9f1499365e55178685818c3d40780062ab6d276f349e652a41945c50655935b9 extends Twig_Template
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
            id: datagrid
            root: __root

    actions:
        - '@setBlockTheme':
            themes:
                - 'server_render_datagrid.html.twig'
                - 'server_render_datagrid_toolbar.html.twig'

        - '@removeOption':
            id: __datagrid
            optionName: grid_render_parameters.cssClass

        - '@setOption':
            id: __datagrid
            optionName: split_to_cells
            optionValue: true

        - '@move':
            id: __datagrid_toolbar
            parentId: __datagrid

        - '@add':
            id: product_datagrid_category_product_list
            parentId: __datagrid
            blockType: block
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/imports/oro_datagrid_server_render/datagrid.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/imports/oro_datagrid_server_render/datagrid.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_datagrid_server_render/datagrid.yml");
    }
}

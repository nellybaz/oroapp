<?php

/* @OroProduct/layouts/blank/imports/oro_product_grid/grid_theme_gallery-view.yml */
class __TwigTemplate_e7122305ebc6a7a31decd484efc369508f54043595efb49a05a9a4cf12bca059 extends Twig_Template
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
        - '@move':
            id: product_item_select_row
            parentId: product_datagrid_row_product

    conditions: 'context.has(\"theme_name\") && context[\"theme_name\"] == \"gallery-view\"'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/imports/oro_product_grid/grid_theme_gallery-view.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/imports/oro_product_grid/grid_theme_gallery-view.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_grid/grid_theme_gallery-view.yml");
    }
}

<?php

/* @OroProduct/layouts/blank/imports/oro_product_grid/grid_theme_no-image-view.yml */
class __TwigTemplate_735e7917242e1d8e383cc273e946f5e32d2d68ef3eaf7f6bedbb8a9c3b5b431b extends Twig_Template
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
        - '@setOption':
            id: product_datagrid_row_product_sticker_new_text
            optionName: visible
            optionValue: true

        - '@move':
            id: product_item_select_row
            parentId: product_datagrid_row_product_price_container

    conditions: 'context.has(\"theme_name\") && context[\"theme_name\"] == \"no-image-view\"'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/imports/oro_product_grid/grid_theme_no-image-view.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/imports/oro_product_grid/grid_theme_no-image-view.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/imports/oro_product_grid/grid_theme_no-image-view.yml");
    }
}

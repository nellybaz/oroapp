<?php

/* @OroSale/layouts/default/imports/oro_sale_quote_grid/layout.yml */
class __TwigTemplate_de3903229284f8d6e781c6fb8ee06e7337b20ae1e2c085a84ef2ec2d315a4cb3 extends Twig_Template
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
        - '@setOption':
            id: __datagrid
            optionName: grid_name
            optionValue: frontend-quotes-grid

        - '@setOption':
            id: __datagrid
            optionName: grid_render_parameters.gridViewsOptions.text
            optionValue: 'oro.sale.quote.label'

        - '@setOption':
            id: __datagrid
            optionName: grid_render_parameters.gridViewsOptions.hideTitle
            optionValue: '.page-title-wrapper'
";
    }

    public function getTemplateName()
    {
        return "@OroSale/layouts/default/imports/oro_sale_quote_grid/layout.yml";
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
        return new Twig_Source("", "@OroSale/layouts/default/imports/oro_sale_quote_grid/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/default/imports/oro_sale_quote_grid/layout.yml");
    }
}

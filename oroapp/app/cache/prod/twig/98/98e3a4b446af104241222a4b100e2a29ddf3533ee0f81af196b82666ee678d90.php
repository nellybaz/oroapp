<?php

/* @OroSale/layouts/default/oro_sale_quote_frontend_index/layout.yml */
class __TwigTemplate_15bc724cf7825943d057b13f2c6c1268c327c47bd0bbea0df6577d86ee40eb44 extends Twig_Template
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
            id: oro_sale_quote_grid
            root: page_content
            namespace: quotes

    actions:
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: 'oro.frontend.sale.quote.entity_plural_label'

        - '@appendOption':
            id: quotes_datagrid
            optionName: grid_render_parameters.toolbarOptions.itemsCounter
            optionValue:
                transTemplate: 'oro_frontend.datagrid.pagination.totalRecords.quotes'
";
    }

    public function getTemplateName()
    {
        return "@OroSale/layouts/default/oro_sale_quote_frontend_index/layout.yml";
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
        return new Twig_Source("", "@OroSale/layouts/default/oro_sale_quote_frontend_index/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/default/oro_sale_quote_frontend_index/layout.yml");
    }
}

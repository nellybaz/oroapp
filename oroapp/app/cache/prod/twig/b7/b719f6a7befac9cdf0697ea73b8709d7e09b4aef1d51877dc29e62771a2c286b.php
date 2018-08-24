<?php

/* @OroSale/layouts/default/oro_sale_quote_frontend_subtotals/ajax/layout.yml */
class __TwigTemplate_b26b6be9639ce1dc96bdb644da7612d637bb4981b6e4c976dfeda97e04c86a5f extends Twig_Template
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
            themes: 'OroSaleBundle:layouts:default/oro_sale_quote_frontend_choice/layout.html.twig'

        - '@add':
            id: quote_choice_subtotals
            parentId: root
            blockType: order_total
            options:
                total: '=data[\"totals\"].total'
                subtotals: '=data[\"totals\"].subtotals'
";
    }

    public function getTemplateName()
    {
        return "@OroSale/layouts/default/oro_sale_quote_frontend_subtotals/ajax/layout.yml";
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
        return new Twig_Source("", "@OroSale/layouts/default/oro_sale_quote_frontend_subtotals/ajax/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/default/oro_sale_quote_frontend_subtotals/ajax/layout.yml");
    }
}

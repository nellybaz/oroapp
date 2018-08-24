<?php

/* @OroOrder/layouts/default/imports/oro_order_grid/layout.yml */
class __TwigTemplate_33630c520bdf2287bf3defef89ea93386f66a879af6e681df8ba4acdd5c21976 extends Twig_Template
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
            themes: 'layout.html.twig'

        - '@setOption':
            id: __datagrid
            optionName: grid_name
            optionValue: frontend-orders-grid

        - '@setOption':
            id: __datagrid_toolbar_button_container
            optionName: visible
            optionValue: true

        - '@setOption':
            id: __datagrid
            optionName: grid_render_parameters.gridViewsOptions.text
            optionValue: 'oro.order.past_orders.label'
";
    }

    public function getTemplateName()
    {
        return "@OroOrder/layouts/default/imports/oro_order_grid/layout.yml";
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
        return new Twig_Source("", "@OroOrder/layouts/default/imports/oro_order_grid/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/OrderBundle/Resources/views/layouts/default/imports/oro_order_grid/layout.yml");
    }
}

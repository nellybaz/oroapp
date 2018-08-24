<?php

/* @OroCheckout/layouts/default/imports/oro_checkout_grid/layout.yml */
class __TwigTemplate_0b79808431cf2cf56e55d2d27ea7136fd2b4d6555a031e3b863a8b804f0986b3 extends Twig_Template
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
            optionValue: frontend-checkouts-grid

        - '@appendOption':
            id: __datagrid
            optionName: grid_render_parameters.toolbarOptions.itemsCounter
            optionValue:
                transTemplate: 'oro_frontend.datagrid.pagination.totalRecords.orders'

        - '@setOption':
            id: __datagrid
            optionName: grid_render_parameters.gridViewsOptions.text
            optionValue: 'oro.checkout.open_order.plural_label'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/imports/oro_checkout_grid/layout.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/imports/oro_checkout_grid/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/imports/oro_checkout_grid/layout.yml");
    }
}

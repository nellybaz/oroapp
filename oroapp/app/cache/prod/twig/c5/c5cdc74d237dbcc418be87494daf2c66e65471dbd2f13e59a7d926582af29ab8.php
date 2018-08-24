<?php

/* @OroOrder/layouts/default/oro_order_frontend_index/layout.yml */
class __TwigTemplate_703d9b51282fb42a6b503353eecda6e12b6f3ca1883345e8216ad576b27c41fe extends Twig_Template
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
            id: oro_order_grid
            root: orders_container
            namespace: orders

    actions:
        - '@setBlockTheme':
            themes: 'OroOrderBundle:layouts:default/oro_order_frontend_index/layout.html.twig'

        - '@appendOption':
            id: orders_datagrid
            optionName: grid_render_parameters.toolbarOptions.itemsCounter
            optionValue:
                transTemplate: 'oro_frontend.datagrid.pagination.totalRecords.orders'

        - '@setOption':
            id: page_content
            optionName: class_prefix
            optionValue: 'orders'

        - '@add':
            id: orders_container
            parentId: page_content
            blockType: container
";
    }

    public function getTemplateName()
    {
        return "@OroOrder/layouts/default/oro_order_frontend_index/layout.yml";
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
        return new Twig_Source("", "@OroOrder/layouts/default/oro_order_frontend_index/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/OrderBundle/Resources/views/layouts/default/oro_order_frontend_index/layout.yml");
    }
}

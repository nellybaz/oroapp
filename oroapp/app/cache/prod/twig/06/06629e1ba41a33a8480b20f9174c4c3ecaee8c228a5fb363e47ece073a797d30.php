<?php

/* @OroOrder/layouts/default/imports/oro_line_items_grid/layout.yml */
class __TwigTemplate_fb158e040bb97df45d7cd8861dcabbd9196c0acdfad51e830253819c9e0e2311 extends Twig_Template
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
            root: __grid_container_body
            namespace: grid_container

    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'
        - '@addTree':
            items:
                __grid_container:
                    blockType: container
                __grid_container_head:
                    blockType: container
                    options:
                        additional_block_prefixes: ['order_head_block_container']
                __grid_container_head_title:
                    blockType: container
                __grid_container_head_title_text:
                    blockType: text
                    options:
                        text: 'oro.order.frontend.ordered_items.title'
                __grid_container_body:
                    blockType: container
                    options:
                        additional_block_prefixes: ['order_body_block_container']
            tree:
                __root:
                    __grid_container:
                        __grid_container_head:
                            __grid_container_head_title:
                                __grid_container_head_title_text: ~
                        __grid_container_body: ~

        - '@move':
            id: __grid_container
            siblingId: order_body

        - '@setOption':
            id: __grid_container_datagrid
            optionName: grid_name
            optionValue: order-line-items-grid-frontend

        - '@setOption':
            id: __grid_container_datagrid
            optionName: grid_parameters
            optionValue:
                order_id: '=data[\"order\"].getId()'

        - '@setOption':
            id: __datagrid_toolbar
            optionName: attr.class
            optionValue: 'datagrid-toolbar simplistic'
";
    }

    public function getTemplateName()
    {
        return "@OroOrder/layouts/default/imports/oro_line_items_grid/layout.yml";
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
        return new Twig_Source("", "@OroOrder/layouts/default/imports/oro_line_items_grid/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/OrderBundle/Resources/views/layouts/default/imports/oro_line_items_grid/layout.yml");
    }
}

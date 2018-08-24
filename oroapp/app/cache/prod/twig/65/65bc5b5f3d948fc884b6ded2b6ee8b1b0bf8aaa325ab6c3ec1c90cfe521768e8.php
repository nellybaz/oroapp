<?php

/* @OroCheckout/layouts/default/oro_order_frontend_index/layout.yml */
class __TwigTemplate_9d6903521235b102268e0ec94bc61f503055eb07d94391507e4821e314dee341 extends Twig_Template
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
            id: oro_checkout_grid
            root: checkouts_container
            namespace: checkouts

    actions:
        - '@setBlockTheme':
            themes: 'OroCheckoutBundle:layouts:default/oro_order_frontend_index/layout.html.twig'

        - '@add':
            id: checkouts_container
            parentId: page_content
            blockType: container
            siblingId: page_title_container

        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: 'oro.checkout.order_history.label'

        - '@setOption':
            id: checkouts_datagrid
            optionName: visible
            optionValue: '=data[\"oro_checkout_separate_open_orders\"].getOpenOrdersSeparatePageConfig()!=true'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/oro_order_frontend_index/layout.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/oro_order_frontend_index/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/oro_order_frontend_index/layout.yml");
    }
}

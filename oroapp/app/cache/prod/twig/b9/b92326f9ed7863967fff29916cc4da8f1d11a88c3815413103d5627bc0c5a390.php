<?php

/* @OroCheckout/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml */
class __TwigTemplate_a37edeae6f3437aa7912550f8548796b549b157522f7499027fe4a30e3d6bea4 extends Twig_Template
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
        - '@add':
            id: customer_sidebar_order
            parentId: customer_sidebar
            blockType: link
            options:
                visible: '=data[\"acl\"].isGranted(\"oro_order_frontend_view\")'
                route_name: oro_order_frontend_index
                text: oro.order.order_history.label
            siblingId: customer_sidebar_sign_out
            prepend: true
        - '@add':
            id: customer_sidebar_open_orders
            parentId: customer_sidebar
            blockType: link
            options:
                route_name: oro_checkout_frontend_open_orders
                text: oro.checkout.open_order.plural_label
                visible: '=data[\"oro_checkout_separate_open_orders\"].getOpenOrdersSeparatePageConfig()'
            siblingId: customer_sidebar_sign_out
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/imports/oro_customer_menu/oro_customer_menu.yml");
    }
}

<?php

/* @OroCheckout/layouts/default/oro_checkout_frontend_open_orders/layout.yml */
class __TwigTemplate_c8f5bc894a1ece2289d1e79a6496a10b4c07fd287e6cfa56e0a02c415096c37e extends Twig_Template
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
            root: page_content
            namespace: checkouts

    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'

        - '@add':
            id: checkouts_title
            parentId: page_content
            blockType: text
            siblingId: ~
            prepend: true
            options:
                text: 'oro.checkout.open_order.plural_label'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/oro_checkout_frontend_open_orders/layout.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/oro_checkout_frontend_open_orders/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_open_orders/layout.yml");
    }
}

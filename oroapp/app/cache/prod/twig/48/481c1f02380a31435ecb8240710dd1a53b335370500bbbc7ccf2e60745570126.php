<?php

/* @OroCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/widget_checkout.yml */
class __TwigTemplate_c2e7eef5f9953ea316cda04203044e808d2832e9e3495a7504b81f15ccc6891c extends Twig_Template
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
            themes: '../templates/widget_checkout.html.twig'

        - '@setOption':
            id: checkout_order_summary_line_items_container
            optionName: keepState
            optionValue: true

        - '@addTree':
            items:
                head:
                    blockType: head
                title:
                    blockType: title
                    options:
                        value: '=data[\"title_provider\"].getTitle(context[\"route_name\"], params)'
                        params:
                            '%step_label%': '=data[\"translator\"].getTrans(data[\"workflowStep\"].getLabel(),[],\"workflows\")'
                body:
                    blockType: body
                raw_notification:
                    blockType: block
            tree:
                root:
                    head:
                        title: ~
                    body:
                        raw_notification: ~
    imports:
        -
            id: oro_checkout_content
            root: body
        -
            id: oro_checkout_sidebar
            root: body

    conditions: 'context[\"workflowStepName\"]!=\"order_created\"'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/widget_checkout.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/widget_checkout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/ajax/widget_checkout.yml");
    }
}

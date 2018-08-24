<?php

/* @OroCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/success.yml */
class __TwigTemplate_d26e757729094592ff7b204e3b61b3b56cb41c49070e67f2593ef1d60a0b70f3 extends Twig_Template
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
            themes: '../templates/success.html.twig'

        - '@addTree':
            items:
                head:
                    blockType: head
                title:
                    blockType: title
                    options:
                        value: '=data[\"title_provider\"].getTitle(context[\"route_name\"], params)'
                        params:
                            '%step_label%': '=data[\"translator\"].getTrans(\"oro.checkout.workflow.success.thank_you.label\")'
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

        - '@add':
            id: success_order
            parentId: body
            blockType: success_order
            options:
                order: '=data[\"workflowItem\"].getData().get(\"order\")'

    conditions: 'context[\"workflowStepName\"]==\"order_created\"'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/success.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/success.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/ajax/success.yml");
    }
}

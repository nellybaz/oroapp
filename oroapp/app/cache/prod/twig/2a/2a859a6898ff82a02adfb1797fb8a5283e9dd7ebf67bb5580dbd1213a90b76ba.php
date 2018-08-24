<?php

/* @OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/success.yml */
class __TwigTemplate_6a17572d69a2f50ffd6faeeb95f4cf6284de7f6892ea7c5d70974c3ee388377a extends Twig_Template
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

        - '@setOption':
            id: title
            optionName: params
            optionValue:
                 '%step_label%': '=data[\"translator\"].getTrans(\"oro.checkout.workflow.success.thank_you.label\")'

        - '@add':
            id: success_order
            parentId: page_content
            blockType: success_order
            options:
                order: '=data[\"workflowItem\"].getData().get(\"order\")'

    conditions: 'context[\"workflowStepName\"]==\"order_created\"'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/success.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/success.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/page/success.yml");
    }
}

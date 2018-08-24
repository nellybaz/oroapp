<?php

/* @OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/payment.yml */
class __TwigTemplate_9e0a412416efae4911aec6c65951420916dede8695a9a1fb9b578002cf14519a extends Twig_Template
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
        - 'oro_payment_method_options'
    actions:
        - '@setBlockTheme':
            themes:
                - '../templates/payment.html.twig'

        - '@setOption':
            id: checkout_information_title
            optionName: stepOrder
            optionValue: 4

        - '@add':
            id: payment_methods
            parentId: checkout_information_body
            blockType: payment_methods
            prepend: true
            options:
                attr:
                    class: 'grid__column grid__column--offset-y grid__column--6'
                class_prefix: 'checkout'
                views: '=data[\"oro_payment_method_views_provider\"].getViews(data[\"checkout_payment_context\"].getContext(data[\"checkout\"]))'
                currentPaymentMethod: '=data[\"checkout\"].getPaymentMethod()'

    conditions: 'context[\"workflowStepName\"]==\"enter_payment\"'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/payment.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/payment.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/page/payment.yml");
    }
}

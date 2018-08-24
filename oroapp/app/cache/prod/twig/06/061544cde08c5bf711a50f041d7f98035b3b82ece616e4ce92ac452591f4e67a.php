<?php

/* @OroAlternativeCheckout/layouts/default/oro_checkout_frontend_checkout/page/approve_request.yml */
class __TwigTemplate_a3d0e4ee3c71800e2d0c5796001f22d054c1c790f2785098cdc6b865bca25a7a extends Twig_Template
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
        - 'oro_payment_method_order_submit'
    actions:
        - '@setBlockTheme':
            themes:
                - 'OroCheckoutBundle:layouts:default/oro_checkout_frontend_checkout/templates/right_buttons.html.twig'
                - '../templates/approve_request.html.twig'

        - '@setOption':
            id: checkout_information_title
            optionName: stepOrder
            optionValue: 7

        - '@add':
            id: payment_additional_data
            parentId: checkout_information
            blockType: payment_additional_data
            options:
                block_name: '=data[\"oro_payment_method_widget_provider\"].getPaymentMethodWidgetName(data[\"checkout\"], \"order_review\")'
                options:
                    payment_method: '=data[\"checkout\"].getPaymentMethod()'

        - '@addTree':
            items:
                checkout_button_continue_right:
                    blockType: checkout_transition_continue
                    options:
                        transitionData: '=data[\"oro_checkout_transition\"].getContinueTransition(data[\"workflowItem\"])'
                        checkout: '=data[\"checkout\"]'
                checkout_button_back_right:
                    blockType: checkout_transition_back
                    options:
                        transitionData: '=data[\"oro_checkout_transition\"].getBackTransition(data[\"workflowItem\"])'
                        checkout: '=data[\"checkout\"]'
            tree:
                checkout_form_buttons:
                    checkout_button_continue_right: ~
                    checkout_button_back_right: ~

        - '@move':
            id: checkout_order_summary_subtitle
            parentId: checkout_information_title
        - '@move':
            id: checkout_order_summary_edit_link
            parentId: checkout_information_head
            siblingId: checkout_information_title
        - '@move':
            id: checkout_order_summary_content
            parentId: checkout_form_fields
            prepend: true
        - '@move':
            id: checkout_order_summary_totals_container
            parentId: checkout_form_fields
            siblingId: checkout_additional_options
        - '@move':
            id: checkout_form_buttons
            siblingId: checkout_form_fields
            prepend: false

        - '@remove':
            id: checkout_button_continue
        - '@remove':
            id: checkout_button_back

    conditions: 'context[\"workflowStepName\"]==\"approve_request\" && context[\"workflowName\"]==\"b2b_flow_alternative_checkout\" && !context[\"widget_container\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroAlternativeCheckout/layouts/default/oro_checkout_frontend_checkout/page/approve_request.yml";
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
        return new Twig_Source("", "@OroAlternativeCheckout/layouts/default/oro_checkout_frontend_checkout/page/approve_request.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/AlternativeCheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/page/approve_request.yml");
    }
}

<?php

/* @OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/order_review.yml */
class __TwigTemplate_2042158fffe9afbcb040a7633508d0f31562765d18e419ddd4241f35c7b9307f extends Twig_Template
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
                - '../templates/right_buttons.html.twig'
                - '../templates/order_review.html.twig'

        - '@setOption':
            id: checkout_information_title
            optionName: stepOrder
            optionValue: 5

        - '@add':
            id: payment_additional_data
            blockType: payment_additional_data
            parentId: checkout_information_head
            options:
                block_name: '=data[\"oro_payment_method_widget_provider\"].getPaymentMethodWidgetName(data[\"checkout\"], \"order_review\")'
                options:
                    views: '=data[\"oro_payment_method_views_provider\"].getViews(data[\"checkout_payment_context\"].getContext(data[\"checkout\"]))'
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

        - '@remove':
            id: checkout_order_summary_container
        - '@remove':
            id: checkout_button_continue
        - '@remove':
            id: checkout_button_back

    conditions: 'context[\"workflowStepName\"]==\"order_review\" && !context[\"widget_container\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/order_review.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/order_review.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/page/order_review.yml");
    }
}

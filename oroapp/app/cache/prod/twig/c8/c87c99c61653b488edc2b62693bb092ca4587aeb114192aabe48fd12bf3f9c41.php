<?php

/* @OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/single_page.yml */
class __TwigTemplate_4c80082650b11fda17bbe772f6f4807387e8ca44bcad1e02a050ec2992d4f36f extends Twig_Template
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
        - 'oro_payment_method_order_submit'

    actions:
        - '@setBlockTheme':
            themes: '../templates/single_page.html.twig'

        - '@addTree':
            items:
                checkout_view:
                    blockType: container
                checkout_shipping_information:
                    blockType: container
                checkout_billing_information:
                    blockType: container
                checkout_summary:
                    blockType: container
                billing_address:
                    blockType: checkout_form_fields
                    options:
                        attr:
                            class: 'checkout-billing-address'
                        checkout: '=data[\"checkout\"]'
                        form: '=data[\"oro_checkout_transition_form\"].getTransitionFormView(data[\"workflowItem\"])'
                        workflowItem: '=data[\"workflowItem\"]'

                shipping_address:
                    blockType: checkout_form_fields
                    options:
                        attr:
                            class: 'checkout-shipping-address'
                        checkout: '=data[\"checkout\"]'
                        form: '=data[\"oro_checkout_transition_form\"].getTransitionFormView(data[\"workflowItem\"])'
                        workflowItem: '=data[\"workflowItem\"]'

                shipping_methods_wrapper:
                    blockType: layout_subtree_update
                    options:
                        reloadEvents: ['shipping-methods:refresh']
                        restoreFormState: true

                shipping_methods_hidden:
                    blockType: checkout_form_fields
                    options:
                        checkout: '=data[\"checkout\"]'
                        form: '=data[\"oro_checkout_transition_form\"].getTransitionFormView(data[\"workflowItem\"])'
                        workflowItem: '=data[\"workflowItem\"]'

                shipping_methods:
                    blockType: shipping_methods
                    options:
                        class_prefix: 'checkout'
                        methods: '=data[\"checkout_shipping_methods\"].getApplicableMethodsViews(data[\"checkout\"]).toArray()'
                        currentShippingMethod: '=data[\"checkout\"].getShippingMethod()'
                        currentShippingMethodType: '=data[\"checkout\"].getShippingMethodType()'

                shipping_methods_template:
                    blockType: container

                shipping_methods_template_methods:
                    blockType: container

                payment_methods_wrapper:
                    blockType: layout_subtree_update
                    options:
                        reloadEvents: ['payment-methods:refresh']
                        restoreFormState: true

                payment_methods_hidden:
                    blockType: checkout_form_fields
                    options:
                        checkout: '=data[\"checkout\"]'
                        form: '=data[\"oro_checkout_transition_form\"].getTransitionFormView(data[\"workflowItem\"])'
                        workflowItem: '=data[\"workflowItem\"]'

                payment_methods:
                    blockType: payment_methods
                    options:
                        attr:
                            class: 'checkout-payment-methods'
                        class_prefix: 'checkout'
                        views: '=data[\"oro_payment_method_views_provider\"].getViews(data[\"checkout_payment_context\"].getContext(data[\"checkout\"]))'
                        currentPaymentMethod: '=data[\"checkout\"].getPaymentMethod()'

                payment_additional_data:
                    blockType: payment_additional_data
                    options:
                        block_name: payment_additional_data
                        options:
                            views: '=data[\"oro_payment_method_views_provider\"].getViews(data[\"checkout_payment_context\"].getContext(data[\"checkout\"]))'
                            block_prefix: \"order_review\"

                shipping_date:
                    blockType: checkout_form_fields
                    options:
                        checkout: '=data[\"checkout\"]'
                        form: '=data[\"oro_checkout_transition_form\"].getTransitionFormView(data[\"workflowItem\"])'
                        workflowItem: '=data[\"workflowItem\"]'

            tree:
                checkout_form_fields:
                    checkout_view:
                        checkout_billing_information:
                            billing_address: ~
                            payment_methods_wrapper:
                                payment_methods_hidden: ~
                                payment_methods: ~
                                payment_additional_data: ~
                        checkout_shipping_information:
                            shipping_address: ~
                            shipping_methods_wrapper:
                                shipping_methods_hidden: ~
                                shipping_methods:
                                    shipping_methods_template:
                                        shipping_methods_template_methods: ~
                            shipping_date: ~
                        checkout_summary: ~

        - '@move':
            id: checkout_order_summary
            parentId: checkout_summary

        - '@add':
            id: checkout_summary_additional_options
            blockType: checkout_form_fields
            parentId: checkout_order_summary_content
            siblingId: checkout_order_summary_line_items_container
            options:
                checkout: '=data[\"checkout\"]'
                form: '=data[\"oro_checkout_transition_form\"].getTransitionFormView(data[\"workflowItem\"])'
                workflowItem: '=data[\"workflowItem\"]'

        - '@add':
            id: checkout_order_summary_totals_sticky_container
            blockType: container
            parentId: checkout_order_summary_totals_container
        - '@move':
            id: checkout_order_summary_totals
            parentId: checkout_order_summary_totals_sticky_container
        - '@add':
            id: checkout_button_continue_right
            blockType: checkout_transition_continue
            parentId: checkout_order_summary_totals_sticky_container
            siblingId: checkout_order_summary_totals
            options:
                transitionData: '=data[\"oro_checkout_transition\"].getContinueTransition(data[\"workflowItem\"])'
                checkout: '=data[\"checkout\"]'

        - '@add':
            id: checkout_summary_badge
            blockType: container
            parentId: checkout_order_summary_title
            prepend: true
        - '@add':
            id: single_page_checkout_sticky_panel
            blockType: container
            parentId: top_sticky_panel_content
        - '@add':
            id: single_page_checkout_sticky_titles
            blockType: container
            parentId: single_page_checkout_sticky_panel
        - '@add':
            id: single_page_checkout_sticky_billing
            blockType: container
            parentId: single_page_checkout_sticky_titles
        - '@add':
            id: single_page_checkout_sticky_shipping
            blockType: container
            parentId: single_page_checkout_sticky_titles
        - '@add':
            id: single_page_checkout_sticky_summary
            blockType: container
            parentId: single_page_checkout_sticky_titles
        - '@add':
            id: single_page_checkout_sticky_totals
            blockType: container
            parentId: single_page_checkout_sticky_panel

        - '@remove':
            id: checkout_sidebar
        - '@remove':
            id: checkout_information_head
        - '@remove':
            id: checkout_order_summary_container
        - '@remove':
            id: checkout_button_continue
        - '@remove':
            id: checkout_button_back

    conditions: 'context[\"workflowStepName\"]==\"checkout\" && !context[\"widget_container\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/single_page.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/single_page.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/page/single_page.yml");
    }
}

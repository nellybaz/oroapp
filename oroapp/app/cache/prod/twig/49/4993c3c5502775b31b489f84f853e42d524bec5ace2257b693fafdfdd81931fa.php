<?php

/* @OroCheckout/layouts/default/imports/oro_checkout_content/content.yml */
class __TwigTemplate_79cab23d6c6d35594e45b949302c8176f50a35b6a6aea00b0193d53bb81893b2 extends Twig_Template
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
            themes: 'content.html.twig'
        - '@add':
            id: order_taxes_template
            blockType: block
            parentId: head
            siblingId: ~
            prepend: false
        - '@addTree':
            items:
                __checkout_content:
                    blockType: container
                __checkout_information:
                    blockType: container
                __checkout_information_head:
                    blockType: container
                __checkout_information_title:
                    blockType: checkout_information_title
                    options:
                        workflowStep: '=data[\"workflowStep\"]'
                        stepOrder: '-'
                __checkout_information_body:
                    blockType: container
                __checkout_form:
                    blockType: checkout_form
                    options:
                        checkout: '=data[\"checkout\"]'
                        form: '=data[\"oro_checkout_transition_form\"].getTransitionFormView(data[\"workflowItem\"])'
                __checkout_form_fields:
                    blockType: checkout_form_fields
                    options:
                        checkout: '=data[\"checkout\"]'
                        form: '=data[\"oro_checkout_transition_form\"].getTransitionFormView(data[\"workflowItem\"])'
                        workflowItem: '=data[\"workflowItem\"]'
                __checkout_additional_options:
                    blockType: checkout_form_fields
                    options:
                        checkout: '=data[\"checkout\"]'
                        form: '=data[\"oro_checkout_transition_form\"].getTransitionFormView(data[\"workflowItem\"])'
                        workflowItem: '=data[\"workflowItem\"]'
                __checkout_order_summary_container:
                    blockType: container
                __checkout_order_summary:
                    blockType: checkout_order_summary
                    options:
                        visible: '=context[\"workflowStepName\"]!=\"order_review\"'
                        checkout: '=data[\"checkout\"]'
                __checkout_order_summary_header:
                    blockType: container
                __checkout_order_summary_title:
                    blockType: container
                __checkout_order_summary_title_text:
                    blockType: container
                __checkout_order_summary_subtitle:
                    blockType: checkout_order_summary_total_line_items
                    options:
                        lineItemsWithTotals: '=data[\"oro_checkout_line_items_totals\"].getData(data[\"checkout\"])'
                __checkout_order_summary_edit_link:
                    blockType: checkout_order_summary_edit_link
                    options:
                        workflowItem: '=data[\"workflowItem\"]'
                __checkout_order_summary_content:
                    blockType: container
                __checkout_order_summary_line_items_container:
                    blockType: checkout_order_summary_total_line_items
                    options:
                        lineItemsWithTotals: '=data[\"oro_checkout_line_items_totals\"].getData(data[\"checkout\"])'
                __checkout_order_summary_line_items:
                    blockType: checkout_order_summary_line_items
                    options:
                        checkout: '=data[\"checkout\"]'
                        lineItemErrors: '=data[\"oro_line_item_violations\"].getLineItemErrors(data[\"checkout\"].getLineItems(), data[\"workflowItem\"])'
                        lineItemWarnings: '=data[\"oro_line_item_violations\"].getLineItemWarnings(data[\"checkout\"].getLineItems(), data[\"workflowItem\"])'
                        lineItemsWithTotals: '=data[\"oro_checkout_line_items_totals\"].getData(data[\"checkout\"])'
                        workflowItem: '=data[\"workflowItem\"]'
                        configurableProducts: '=data[\"oro_product_configurable_products\"].getProducts(data[\"checkout\"].getLineItems())'

                __checkout_order_summary_line_item_row:
                    blockType: container
                __checkout_order_summary_line_item_info_column:
                    blockType: container
                __checkout_order_summary_line_item_name:
                    blockType: block
                __checkout_order_summary_line_item_sku_column:
                    blockType: container
                __checkout_order_summary_line_item_sku:
                    blockType: block
                __checkout_order_summary_line_item_configurable_products:
                    blockType: block
                __checkout_order_summary_line_item_quantity_column:
                    blockType: container
                __checkout_order_summary_line_item_quantity:
                    blockType: block
                __checkout_order_summary_line_item_price_per_item_column:
                    blockType: container
                __checkout_order_summary_line_item_price_per_item:
                    blockType: block
                __checkout_order_summary_line_item_price_total_column:
                    blockType: container
                __checkout_order_summary_line_item_price_total:
                    blockType: block
                __checkout_order_summary_line_item_edit:
                    blockType: block

                __checkout_order_summary_totals_container:
                    blockType: container
                __checkout_order_summary_totals:
                    blockType: price_totals
                    options:
                        totals: '=data[\"oro_checkout_totals\"].getData(data[\"checkout\"])'
                        entityClassName: 'Oro\\Bundle\\CheckoutBundle\\Entity\\Checkout'
                        entityId: '=data[\"checkout\"].getId()'
                        events:
                            - 'checkout:shipping-method:changed'
                        selectors:
                            form: '[name\$=\"oro_workflow_transition\"]'
                        skipMaskView: true
                        route: 'oro_checkout_frontend_totals'
                __checkout_form_buttons:
                    blockType: container
                __checkout_button_continue:
                    blockType: checkout_transition_continue
                    options:
                        transitionData: '=data[\"oro_checkout_transition\"].getContinueTransition(data[\"workflowItem\"])'
                        checkout: '=data[\"checkout\"]'
                __checkout_button_back:
                    blockType: checkout_transition_back
                    options:
                        transitionData: '=data[\"oro_checkout_transition\"].getBackTransition(data[\"workflowItem\"])'
                        checkout: '=data[\"checkout\"]'
            tree:
                __root:
                    __checkout_content:
                        __checkout_information:
                            __checkout_information_head:
                                __checkout_information_title: ~
                            __checkout_information_body:
                                __checkout_form:
                                    __checkout_form_fields:
                                        __checkout_additional_options: ~
                                    __checkout_form_buttons:
                                        __checkout_button_continue: ~
                                        __checkout_button_back: ~
                        __checkout_order_summary_container:
                            __checkout_order_summary:
                                __checkout_order_summary_header:
                                    __checkout_order_summary_title:
                                        __checkout_order_summary_title_text:
                                            __checkout_order_summary_subtitle: ~
                                    __checkout_order_summary_edit_link: ~
                                __checkout_order_summary_content:
                                    __checkout_order_summary_line_items_container:
                                        __checkout_order_summary_line_items:
                                            __checkout_order_summary_line_item_row:
                                                __checkout_order_summary_line_item_info_column:
                                                    __checkout_order_summary_line_item_name: ~
                                                    __checkout_order_summary_line_item_configurable_products: ~
                                                __checkout_order_summary_line_item_sku_column:
                                                    __checkout_order_summary_line_item_sku: ~
                                                __checkout_order_summary_line_item_quantity_column:
                                                    __checkout_order_summary_line_item_quantity: ~
                                                __checkout_order_summary_line_item_price_per_item_column:
                                                    __checkout_order_summary_line_item_price_per_item: ~
                                                __checkout_order_summary_line_item_price_total_column:
                                                    __checkout_order_summary_line_item_price_total: ~
                                    __checkout_order_summary_totals_container:
                                        __checkout_order_summary_totals: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/imports/oro_checkout_content/content.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/imports/oro_checkout_content/content.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/imports/oro_checkout_content/content.yml");
    }
}

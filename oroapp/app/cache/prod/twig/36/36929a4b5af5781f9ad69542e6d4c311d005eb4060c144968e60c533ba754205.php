<?php

/* @OroShoppingList/layouts/default/oro_shopping_list_frontend_view/view.yml */
class __TwigTemplate_6057b7952224c7aa789a63a3e1e333520d94754c676443cfa63b90554db86f0d extends Twig_Template
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
            id: shopping_list_matrix_grid_order
            root: shopping_list_line_items_list_item_inline_matrix_form
            namespace: shopping_list
        -
            id: oro_product_totals
            root: shopping_list_line_items_list_specification_wrapper
            namespace: matrix_shopping_list
    actions:
        - '@setBlockTheme':
            themes: 'view.html.twig'

        - '@setOption':
            id:  matrix_shopping_list_total_text
            optionName: text
            optionValue: 'oro.frontend.shoppinglist.matrix_grid_order.subtotal'
        - '@setOption':
            id: title
            optionName: params
            optionValue:
                '%label%': '=data[\"title\"]'

        - '@add':
            id: shopping_list_line_items_list_item_matrix_popup_button
            blockType: container
            parentId: matrix_shopping_list_totals

        - '@add':
            id: order_taxes_template
            blockType: block
            parentId: head
            siblingId: ~
            prepend: false
        - '@addTree':
            items:
                shopping_list_view_container:
                    blockType: container
                no_shopping_lists:
                    blockType: block
                    options:
                        visible: '=!data[\"entity\"]'
                shopping_list_title:
                    blockType: shopping_list_awere_block
                    options:
                        visible: '=data[\"entity\"]!=null'
                        shoppingList: '=data[\"entity\"]'
                shopping_list_top_actions:
                    blockType: line_buttons
                    options:
                        visible: '=data[\"entity\"]!=null'
                        buttons: '=data[\"buttons\"].getAll(data[\"entity\"])'
                shopping_list_options:
                    blockType: shopping_list_awere_block
                    options:
                        visible: '=data[\"entity\"]!=null'
                        shoppingList: '=data[\"entity\"]'
                shopping_list_line_items:
                    blockType: container
                shopping_list_line_items_list:
                    blockType: shopping_list_line_items_list
                    options:
                        visible: '=data[\"entity\"]!=null && data[\"entity\"].getLineItems()!=null'
                        lineItems: '=data[\"oro_shopping_list_matrix_grid_shopping_list\"].getSortedLineItems(data[\"entity\"])'
                        shoppingList: '=data[\"entity\"]'
                        lineItemErrors: '=data[\"oro_line_item_violations\"].getLineItemErrors(data[\"entity\"].getLineItems())'
                        productsMatchedPrice: '=data[\"oro_shopping_list_products\"].getMatchedPrice(data[\"entity\"])'
                        productsAllPrices: '=data[\"oro_shopping_list_products\"].getAllPrices(data[\"entity\"])'
                        productsUnits: '=data[\"oro_shopping_list_products_units\"].getProductsUnits(data[\"entity\"])'
                        productsUnitSelectionVisibilities: '=data[\"oro_shopping_list_product_unit_code_visibility\"].getProductsUnitSelectionVisibilities(data[\"entity\"])'
                        configurableProducts: '=data[\"oro_product_configurable_products\"].getProducts(data[\"entity\"].getLineItems())'
                        lineItemsUnitVisibilities: '=data[\"oro_shopping_list_product_unit_code_visibility\"].getLineItemsUnitVisibilities(data[\"entity\"])'
                        vars:
                            totalPrices: '=data[\"oro_shopping_list_matrix_grid_order\"].getTotalsQuantityPrice(data[\"oro_shopping_list_products\"].getConfigurableProductsFromShoppingList(data[\"entity\"]), data[\"entity\"])'

                shopping_list_line_items_list_row:
                    blockType: container
                shopping_list_line_items_list_item:
                    blockType: container
                shopping_list_line_items_list_item_description:
                    blockType: container
                shopping_list_line_items_list_specification:
                    blockType: container
                shopping_list_line_items_list_specification_wrapper:
                    blockType: container
                shopping_list_line_items_list_price:
                    blockType: container
                shopping_list_line_items_list_actions:
                    blockType: container

                shopping_list_line_items_list_item_image:
                    blockType: block
                shopping_list_line_items_list_item_name:
                    blockType: block
                shopping_list_line_items_list_item_sku:
                    blockType: block
                shopping_list_line_items_list_item_inventory_status:
                    blockType: block
                shopping_list_line_items_list_item_configurable_products:
                    blockType: container
                shopping_list_line_items_list_item_inline_matrix_form:
                    blockType: container

                shopping_list_line_items_list_quantity_form:
                    blockType: block

                shopping_list_line_items_list_price_info:
                    blockType: block

                shopping_list_line_items_list_actions_remove:
                    blockType: block

                shopping_list_line_items_list_errors:
                    blockType: block
                shopping_list_line_items_list_notes:
                    blockType: block

                shopping_list_line_items_empty:
                    blockType: block
                    options:
                        visible: '=data[\"entity\"]!=null && data[\"entity\"].getLineItems()==null'
                shopping_list_checkout_container:
                    blockType: container
                shopping_list_button_container:
                    blockType: container
                shopping_list_delete_button:
                    blockType: shopping_list_awere_block
                    options:
                        visible: '=data[\"entity\"]!=null'
                        shoppingList: '=data[\"entity\"]'
                shopping_list_totals:
                    blockType: price_totals
                    options:
                        visible: '=data[\"entity\"]!=null'
                        totals: '=data[\"totals\"]'
                        events:
                            - 'frontend:item:delete'
                            - 'frontend:shopping-list-item-quantity:update'
                        entityClassName: 'Oro\\Bundle\\ShoppingListBundle\\Entity\\ShoppingList'
                        entityId: '=data[\"entity\"]!=null ? data[\"entity\"].getId() : null'
                        skipMaskView: true
                shopping_list_combined_button:
                    blockType: combined_buttons
                    options:
                        visible: '=data[\"entity\"]!=null'
                        buttons: '=data[\"buttons\"].getAll(data[\"entity\"])'
                shopping_list_view_container_content:
                    blockType: container
                shopping_list_view_container_checkout_message:
                    blockType: block
                    options:
                        visible: '=!data[\"feature\"].isFeatureEnabled(\"guest_checkout\") && !context[\"is_logged_in\"]'
            tree:
                page_content:
                    shopping_list_view_container:
                        shopping_list_view_container_content:
                            no_shopping_lists: ~
                            shopping_list_title: ~
                            shopping_list_top_actions: ~
                            shopping_list_line_items:
                                shopping_list_options: ~
                                shopping_list_line_items_list:
                                    shopping_list_line_items_list_row:
                                        shopping_list_line_items_list_item:
                                            shopping_list_line_items_list_item_image: ~
                                            shopping_list_line_items_list_item_description:
                                                shopping_list_line_items_list_item_name: ~
                                                shopping_list_line_items_list_item_sku: ~
                                                shopping_list_line_items_list_item_inventory_status: ~
                                                shopping_list_line_items_list_item_configurable_products: ~
                                        shopping_list_line_items_list_specification_wrapper:
                                            shopping_list_line_items_list_specification:
                                                shopping_list_line_items_list_quantity_form: ~
                                                shopping_list_line_items_list_price:
                                                    shopping_list_line_items_list_price_info: ~
                                        shopping_list_line_items_list_actions:
                                            shopping_list_line_items_list_actions_remove: ~
                                        shopping_list_line_items_list_item_inline_matrix_form: ~
                                    shopping_list_line_items_list_errors: ~
                                    shopping_list_line_items_list_notes: ~
                                shopping_list_line_items_empty: ~
                            shopping_list_checkout_container:
                                shopping_list_button_container:
                                    shopping_list_delete_button: ~
                                shopping_list_totals: ~
                                shopping_list_combined_button: ~
                    shopping_list_view_container_checkout_message: ~
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/default/oro_shopping_list_frontend_view/view.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/default/oro_shopping_list_frontend_view/view.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/oro_shopping_list_frontend_view/view.yml");
    }
}

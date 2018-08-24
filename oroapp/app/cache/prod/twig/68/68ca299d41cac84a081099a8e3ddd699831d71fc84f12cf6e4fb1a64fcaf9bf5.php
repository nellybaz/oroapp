<?php

/* @OroSale/layouts/default/oro_sale_quote_frontend_choice/layout.yml */
class __TwigTemplate_52e7b81d1e46ee158aaa7c75afd9e020955f0ea554d04a36a061f6e959cd090d extends Twig_Template
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
            themes: 'OroSaleBundle:layouts:default/oro_sale_quote_frontend_choice/layout.html.twig'
        - '@setFormTheme':
            themes: 'OroSaleBundle:layouts:default/oro_sale_quote_frontend_choice/form_theme.html.twig'

        - '@setOption':
            id: title
            optionName: params
            optionValue:
                '%id%': '=data[\"quote\"].getQid()'

        - '@setOption':
            id: page_title
            optionName: class_prefix
            optionValue: 'customer'

        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue:
                label: 'oro.frontend.sale.quote.title.label'
                parameters:
                    '%id%': '=data[\"quote\"].getQid()'

        - '@addTree':
            items:
                quote_view_information:
                    blockType: quote_view_information
                    options:
                        quote: '=data[\"quote\"]'
                quote_choice_page:
                    blockType: container
                quote_choice_form:
                    blockType: quote_choice_form_container
                    options:
                        form: '=data[\"form\"]'
                        quoteDemand: '=data[\"data\"]'
                quote_choice_back_button:
                    blockType: back_link
                    options:
                        route_name: oro_sale_quote_frontend_view
                        route_parameters:
                            id: '=data[\"quote\"].getId()'
                        text: 'oro.frontend.sale.quote.sections.back.label'
                quote_choice_submit_button:
                    blockType: block
                quote_choice_subtotals:
                    blockType: order_total
                    options:
                        total: '=data[\"totals\"].total'
                        subtotals: '=data[\"totals\"].subtotals'
                quote_shipping_address:
                    blockType: address
                    options:
                        address: '=data[\"quote\"].getShippingAddress()'
                        label: 'oro.sale.quote.shipping_address.label'
                        additional_block_prefixes: ['quote_body_column_element']
            tree:
                page_content:
                    quote_choice_page:
                        quote_view_information:
                            quote_shipping_address: ~
                        quote_choice_form:
                            quote_choice_back_button: ~
                            quote_choice_subtotals: ~
                            quote_choice_submit_button: ~

    conditions: '!context[\"widget_container\"]'

";
    }

    public function getTemplateName()
    {
        return "@OroSale/layouts/default/oro_sale_quote_frontend_choice/layout.yml";
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
        return new Twig_Source("", "@OroSale/layouts/default/oro_sale_quote_frontend_choice/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/SaleBundle/Resources/views/layouts/default/oro_sale_quote_frontend_choice/layout.yml");
    }
}

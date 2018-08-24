<?php

/* @OroRFP/layouts/default/oro_rfp_frontend_request_view/layout.yml */
class __TwigTemplate_24f7b0b1c91ba43b225091cd83397fef9774797e3b49147015789a096c46ca7b extends Twig_Template
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
            id: oro_customer_toolbar_actions
            root: rfp_request_view_page
            namespace: rfp_request_view_toolbar

    actions:
        - '@setBlockTheme':
            themes: 'OroRFPBundle:layouts:default/oro_rfp_frontend_request_view/layout.html.twig'
        - '@setOption':
            id: title
            optionName: params
            optionValue:
                '%id%': '=data[\"entity\"].getId()'
                '%firstName%': '=data[\"entity\"].getFirstName()'
                '%lastName%': '=data[\"entity\"].getLastName()'
        - '@setOption':
            id: page_title
            optionName: class_prefix
            optionValue: 'customer'
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue:
                label: 'oro.frontend.rfp.request.title.label'
                parameters:
                    '%id%': '=data[\"entity\"].getId()'
        - '@addTree':
            items:
                rfp_request_view_page:
                    blockType: container
                rfp_request_view_toolbar_actions:
                    blockType: line_buttons
                    options:
                        visible: '=data[\"entity\"]!=null'
                        buttons: '=data[\"buttons\"].getAll(data[\"entity\"])'
                rfp_request_view_information:
                    blockType: rfp_request_information
                    options:
                        request: '=data[\"entity\"]'
                rfp_request_view_additional_notes:
                    blockType: rfp_additional_notes
                    options:
                        visible: '=data[\"entity\"].getRequestAdditionalNotes().count()>0'
                        requestAdditionalNotes: '=data[\"entity\"].getRequestAdditionalNotes()'
                rfp_request_view_line_items:
                    blockType: rfp_request_line_items
                    options:
                        requestProducts: '=data[\"entity\"].getRequestProducts()'
                rfp_request_view_bottom:
                    blockType: container
                rfp_request_view_back_btn:
                    blockType: link
                    options:
                        route_name: oro_rfp_frontend_request_index
                        text: 'oro.frontend.rfp.request.sections.back.label'
                        icon: angle-left
                        attr:
                            class: 'link pull-left hide-on-print'
            tree:
                page_content:
                    rfp_request_view_page:
                        rfp_request_view_information: ~
                        rfp_request_view_additional_notes: ~
                        rfp_request_view_line_items: ~
                        rfp_request_view_bottom:
                            rfp_request_view_back_btn: ~
        - '@add':
            id: rfp_request_view_customer_status
            parentId: rfp_request_view_toolbar_wrapper
            blockType: text
            prepend: true
            options:
                visible: '=data[\"entity\"].getCustomerStatus()!=null'
                text: '=data[\"entity\"].getCustomerStatus().getName()'
        - '@add':
            id: rfp_request_view_toolbar_actions
            parentId: rfp_request_view_toolbar_actions_container
            blockType: line_buttons
            options:
                visible: '=data[\"entity\"]!=null'
                buttons: '=data[\"buttons\"].getAll(data[\"entity\"])'
        - '@setOption':
            id: rfp_request_view_toolbar_print_button
            optionName: text
            optionValue: 'oro.frontend.rfp.toolbar-actions.btn.print'
";
    }

    public function getTemplateName()
    {
        return "@OroRFP/layouts/default/oro_rfp_frontend_request_view/layout.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/default/oro_rfp_frontend_request_view/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/default/oro_rfp_frontend_request_view/layout.yml");
    }
}

<?php

/* @OroRFP/layouts/default/imports/oro_rfp_frontend_request_edit/layout.yml */
class __TwigTemplate_b36acae9ba0f17e85dd58813d4becb346133501ff014c49b6a10af612510889c extends Twig_Template
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
            themes: 'layout.html.twig'

        - '@addTree':
            items:
                __rfp_form_container:
                    blockType: container
                __rfp_form_start:
                    blockType: form_start
                    options:
                        form: '=data[\"oro_rfp_request_form\"].getRequestFormView(data[\"entity\"])'
                __rfp_form_edit_container:
                    blockType: container
                __rfp_form_fields:
                    blockType: form_fields
                    options:
                        form: '=data[\"oro_rfp_request_form\"].getRequestFormView(data[\"entity\"])'
                __rfp_form_field_assigned_to:
                    blockType: form_field
                    options:
                        visible: '=context[\"is_logged_in\"]'
                        form: '=data[\"oro_rfp_request_form\"].getRequestFormView(data[\"entity\"])[\"assignedCustomerUsers\"]'
                __rfp_form_lineitems_container:
                    blockType: container
                __rfp_form_lineitems:
                    blockType: form_fields
                    options:
                        form: '=data[\"oro_rfp_request_form\"].getRequestFormView(data[\"entity\"])'
                __rfp_form_end:
                    blockType: form_end
                    options:
                        form: '=data[\"oro_rfp_request_form\"].getRequestFormView(data[\"entity\"])'
                        render_rest: false
                __rfp_form_actions:
                    blockType: container
                __rfp_form_actions_back:
                    blockType: link
                    options:
                        path: '=data[\"backToUrl\"]'
                        text: oro.frontend.rfp.request.create_form.back.label
                __rfp_form_actions_create:
                    blockType: button
                    options:
                        action: submit
                        text: oro.frontend.rfp.request.create_form.send.label
                        style: auto
            tree:
                __root:
                    __rfp_form_container:
                        __rfp_form_start: ~
                        __rfp_form_edit_container:
                            __rfp_form_fields: ~
                            __rfp_form_field_assigned_to: ~
                        __rfp_form_lineitems_container:
                            __rfp_form_lineitems: ~
                        __rfp_form_actions:
                            __rfp_form_actions_create: ~
                            __rfp_form_actions_back: ~
                        __rfp_form_end: ~
        - '@appendOption':
            id: rfp_form_lineitems_container
            optionName: vars.tierPrices
            optionValue: '=data[\"oro_rfp_product_prices\"].getPrices(data[\"entity\"])'

        - '@add':
            id: __rfp_form_lineitems_view_js
            parentId: head
            blockType: block
";
    }

    public function getTemplateName()
    {
        return "@OroRFP/layouts/default/imports/oro_rfp_frontend_request_edit/layout.yml";
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
        return new Twig_Source("", "@OroRFP/layouts/default/imports/oro_rfp_frontend_request_edit/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/RFPBundle/Resources/views/layouts/default/imports/oro_rfp_frontend_request_edit/layout.yml");
    }
}

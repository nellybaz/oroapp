<?php

/* @OroCustomer/layouts/blank/imports/oro_customer_user_form/layout.yml */
class __TwigTemplate_1427b3a429447d350291322883c1afdd941905a2c8a38e26c4d2806a39416166 extends Twig_Template
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
        - '@setFormTheme':
            themes: 'form.html.twig'
        - '@addTree':
            items:
                __customer_user_page:
                    blockType: container
                    options:
                        class_prefix: 'customer-profile-edit-page'
                __customer_user_form_errors:
                    blockType: form_errors
                    options:
                        form: '=data[\"oro_customer_frontend_customer_user_form\"].getCustomerUserFormView(data[\"entity\"])'
                __customer_user_form:
                    blockType: form
                    options:
                        form: '=data[\"oro_customer_frontend_customer_user_form\"].getCustomerUserFormView(data[\"entity\"])'
                        render_rest: false
                __customer_user_form_fields_container:
                    blockType: container
                __customer_user_form_fields_customer:
                    blockType: container
                __customer_user_form_fields_information:
                    blockType: container
                __customer_user_form_fields_password:
                    blockType: container
                __customer_user_form_fields_roles:
                    blockType: container
                __customer_user_form_actions:
                    blockType: container
                __customer_user_form_actions_cancel:
                    blockType: link
                    options:
                        route_name: oro_customer_frontend_customer_user_index
                        text: oro.customer.form.action.cancel.label
                        attr:
                            'class': 'btn '
                __customer_user_form_actions_create:
                    blockType: button
                    options:
                        action: submit
                        text: oro.customer.form.action.save.label
                        style: auto
                        attr:
                            'class': 'role-submit '
                __customer_user_form_required_label:
                    blockType: block
            tree:
                __root:
                    __customer_user_page:
                        __customer_user_form_errors: ~
                        __customer_user_form:
                            __customer_user_form_fields_container:
                                __customer_user_form_fields_information: ~
                                __customer_user_form_fields_password: ~
                                __customer_user_form_fields_roles: ~
                            __customer_user_form_actions:
                                __customer_user_form_actions_create: ~
                                __customer_user_form_actions_cancel: ~
                            __customer_user_form_required_label: ~
        - '@move':
            id: __customer_user_form_fields_container
            parentId: __customer_user_form_fields
        - '@move':
            id: __customer_user_form_actions
            parentId: __customer_user_form
            siblingId: __customer_user_form_fields
        - '@move':
            id: __customer_user_form_required_label
            parentId: __customer_user_form
            siblingId: __customer_user_form_end
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/imports/oro_customer_user_form/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/imports/oro_customer_user_form/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_user_form/layout.yml");
    }
}
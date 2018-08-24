<?php

/* @OroCustomer/layouts/default/imports/oro_customer_user_role_form/form.yml */
class __TwigTemplate_fa93f10896ba269d815f732696e7076416a0728b08264b007a5c949f2e1537b0 extends Twig_Template
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
                __customer_user_role_container:
                    blockType: container
                __customer_user_role_form_errors:
                    blockType: form_errors
                    options:
                        form: '=data[\"oro_customer_frontend_customer_user_role_form\"].getRoleFormView(data[\"entity\"])'
                __customer_user_role_form_start:
                    blockType: form_start
                    options:
                        form: '=data[\"oro_customer_frontend_customer_user_role_form\"].getRoleFormView(data[\"entity\"])'
                __customer_user_role_form_fields:
                    blockType: form_fields
                    options:
                        form: '=data[\"oro_customer_frontend_customer_user_role_form\"].getRoleFormView(data[\"entity\"])'
                __customer_user_role_form_users:
                    blockType: customer_user_role_users_datagrid
                    options:
                        grid_name: frontend-customer-customer-users-grid-update
                        grid_parameters:
                            role: '=data[\"entity\"].getId()'
                            customer: '=data[\"customizableRole\"].getCustomer().getId()'
                        grid_render_parameters:
                            cssClass: 'frontend-datagrid'
                            gridViewsOptions:
                                text: 'oro.customer.customer_user.role.users'
                            themeOptions:
                                actionOptions:
                                    refreshAction:
                                        launcherOptions:
                                            className: 'btn btn--default btn--size-s'
                                            icon: 'undo fa--no-offset'
                                            iconHideText: true
                                    resetAction:
                                        launcherOptions:
                                            className: 'btn btn--default btn--size-s'
                                            icon: 'refresh fa--no-offset'
                                            iconHideText: true
                            toolbarOptions:
                                actionsPanel:
                                    className: 'btn-group not-expand frontend-datagrid__panel'
                                itemsCounter:
                                    className: 'datagrid-tool'
                                    transTemplate: 'oro_frontend.datagrid.pagination.totalRecords.users'
                                hideItemsCounter: false
                            filterContainerSelector: '[data-grid-toolbar=\"top\"] [data-datafilter-container]'
                        form: '=data[\"oro_customer_frontend_customer_user_role_form\"].getRoleFormView(data[\"entity\"])'
                __customer_user_role_form_end:
                    blockType: form_end
                    options:
                        form: '=data[\"oro_customer_frontend_customer_user_role_form\"].getRoleFormView(data[\"entity\"])'
                __customer_user_role_form_container:
                    blockType: container
                __customer_user_role_form_actions_top:
                    blockType: container
                __customer_user_role_form_actions_update_top:
                    blockType: button
                    options:
                        action: submit
                        text: oro.customer.action.customer_user_role.save_label
                        style: auto
                        attr:
                            'class': 'role-submit '
                __customer_user_role_form_actions_cancel_top:
                    blockType: link
                    options:
                        route_name: oro_customer_frontend_customer_user_role_index
                        text: oro.customer.action.customer_user_role.cancel_label
                        attr:
                            'class': 'btn '
                __customer_user_role_form_actions_bottom:
                    blockType: container
                __customer_user_role_form_actions_update_bottom:
                    blockType: button
                    options:
                        action: submit
                        text: oro.customer.action.customer_user_role.save_label
                        style: auto
                        attr:
                            'class': 'role-submit '
                __customer_user_role_form_actions_cancel_bottom:
                    blockType: link
                    options:
                        route_name: oro_customer_frontend_customer_user_role_index
                        text: oro.customer.action.customer_user_role.cancel_label
                        attr:
                            'class': 'btn btn-primary '
            tree:
                __root:
                    __customer_user_role_container:
                        __customer_user_role_form_errors: ~
                        __customer_user_role_form_start: ~
                        __customer_user_role_form_container:
                            __customer_user_role_form_fields: ~
                            __customer_user_role_form_actions_top:
                                __customer_user_role_form_actions_update_top: ~
                                __customer_user_role_form_actions_cancel_top: ~
                        __customer_user_role_form_users: ~
                        __customer_user_role_form_actions_bottom:
                            __customer_user_role_form_actions_update_bottom: ~
                            __customer_user_role_form_actions_cancel_bottom: ~
                        __customer_user_role_form_end: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/imports/oro_customer_user_role_form/form.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/imports/oro_customer_user_role_form/form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/imports/oro_customer_user_role_form/form.yml");
    }
}

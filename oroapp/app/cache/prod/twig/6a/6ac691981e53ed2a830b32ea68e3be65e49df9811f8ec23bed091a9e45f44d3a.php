<?php

/* @OroCustomer/layouts/default/imports/oro_customer_user_role_permission_grid/layout.yml */
class __TwigTemplate_7ae306475fb0845143aa33d0c923e78762ed85c313785ca850b9ccf9a22b87c7 extends Twig_Template
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
            id: datagrid
            root: __root

    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'

        - '@setOption':
            id: __datagrid
            optionName: grid_name
            optionValue: frontend-customer-user-role-permission-grid

        - '@setOption':
            id: __datagrid
            optionName: grid_parameters
            optionValue:
                role: '=data[\"entity\"]'

        - '@setOption':
            id: __datagrid
            optionName: grid_render_parameters.cssClass
            optionValue: 'inner-permissions-grid'

        - '@setOption':
            id: __datagrid
            optionName: vars
            optionValue:
                options:
                    tabsOptions: '=data[\"oro_customer_fronted_customer_user_role_tab_options\"].getOptions(data[\"entity\"])'
                    capabilitySetOptions: '=data[\"oro_customer_fronted_customer_user_role_capability_set_options\"].getOptions(data[\"entity\"])'

        - '@setOption':
            id: __datagrid
            optionName: grid_render_parameters.gridViewsOptions.text
            optionValue: 'oro.customer.customer_user.role.users'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/imports/oro_customer_user_role_permission_grid/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/imports/oro_customer_user_role_permission_grid/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/imports/oro_customer_user_role_permission_grid/layout.yml");
    }
}

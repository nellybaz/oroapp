<?php

/* @OroCustomer/layouts/default/oro_customer_frontend_customer_user_index/layout.yml */
class __TwigTemplate_9bc10c2450580c77c28d4d70d6127fc73f94c5164fade645f43011060027e409 extends Twig_Template
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
            id: oro_customer_user_grid
            root: page_content
            namespace: customer_users

    actions:
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: 'oro.customer.frontend.customer_user.entity_plural_label'

        - '@appendOption':
            id: customer_users_datagrid
            optionName: grid_render_parameters.themeOptions
            optionValue:
                cellActionsHideCount: 3

        - '@appendOption':
            id: customer_users_datagrid
            optionName: grid_render_parameters.toolbarOptions.itemsCounter
            optionValue:
                transTemplate: 'oro_frontend.datagrid.pagination.totalRecords.users'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/oro_customer_frontend_customer_user_index/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/oro_customer_frontend_customer_user_index/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/oro_customer_frontend_customer_user_index/layout.yml");
    }
}

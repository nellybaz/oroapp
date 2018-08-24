<?php

/* @OroCustomer/layouts/default/oro_customer_frontend_customer_user_role_index/layout.yml */
class __TwigTemplate_7826ecefa53cb5aa2506b31297e150c2c6b37030c024228660dabedd90905ebb extends Twig_Template
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
            id: oro_customer_user_role_grid
            root: page_content
            namespace: customer_user_roles

    actions:
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: 'oro.customer.frontend.customer_user.role.entity_plural_label'

        - '@appendOption':
            id: customer_user_roles_datagrid
            optionName: grid_render_parameters.toolbarOptions.itemsCounter
            optionValue:
                transTemplate: 'oro_frontend.datagrid.pagination.totalRecords.roles'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/oro_customer_frontend_customer_user_role_index/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/oro_customer_frontend_customer_user_role_index/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/oro_customer_frontend_customer_user_role_index/layout.yml");
    }
}

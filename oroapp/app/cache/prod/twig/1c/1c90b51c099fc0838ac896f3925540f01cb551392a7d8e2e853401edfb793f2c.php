<?php

/* @OroCustomer/layouts/default/imports/oro_customer_user_grid/layout.yml */
class __TwigTemplate_c75e5fbba2f5cf6113f1dcf7610fdc0a27a15d04e98625d756b52583466dc3f1 extends Twig_Template
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
            optionValue: frontend-customer-customer-user-grid

        - '@setOption':
            id: __datagrid
            optionName: grid_render_parameters.gridViewsOptions.text
            optionValue: 'oro.customer.customer_user.entity_plural_label'

        - '@setOption':
            id: __datagrid
            optionName: grid_render_parameters.gridViewsOptions.hideTitle
            optionValue: '.page-title-wrapper'

        - '@setOption':
            id: __datagrid_toolbar_button_container
            optionName: visible
            optionValue: true

        - '@add':
            id: __additional_views_container      
            parentId: __datagrid_views_toolbar        
            blockType: container

        - '@add':
            id: __button_container_create_customer_user
            parentId: __additional_views_container
            blockType: combined_buttons
            options:
                buttons: '=data[\"buttons\"].getAll()'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/imports/oro_customer_user_grid/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/imports/oro_customer_user_grid/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/imports/oro_customer_user_grid/layout.yml");
    }
}

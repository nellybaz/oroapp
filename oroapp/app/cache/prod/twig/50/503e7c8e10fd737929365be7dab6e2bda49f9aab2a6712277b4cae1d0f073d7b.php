<?php

/* @OroCustomer/layouts/default/oro_customer_frontend_customer_user_role_update/layout.yml */
class __TwigTemplate_c2119e55bbe9fc4e65d608999b13e3be4484cecdcb3c2c7fc4a1261e65372977 extends Twig_Template
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
            id: oro_customer_user_role_form
            root: page_content
        -
            id: oro_customer_user_role_permission_grid
            root: customer_user_role_container
            namespace: customer_user_role_form_privileges

    actions:
        - '@setFormTheme':
            themes: 'form.html.twig'
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue:
                label: 'oro.customer.frontend.title.page.customer_user_role.edit'
        - '@setOption':
            id: customer_user_role_form_fields
            optionName: vars
            optionValue:
                entity: '=data[\"entity\"]'
        - '@move':
            id: customer_user_role_form_privileges_datagrid
            siblingId: customer_user_role_form_container
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/oro_customer_frontend_customer_user_role_update/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/oro_customer_frontend_customer_user_role_update/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/oro_customer_frontend_customer_user_role_update/layout.yml");
    }
}

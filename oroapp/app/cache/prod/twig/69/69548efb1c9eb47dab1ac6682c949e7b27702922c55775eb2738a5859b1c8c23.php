<?php

/* @OroCustomer/layouts/blank/oro_customer_frontend_customer_user_create/layout.yml */
class __TwigTemplate_5f38fe36f6209662bebdb0bd6d5542aa270c269f294b531d882a060b8fd48430 extends Twig_Template
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
            id: oro_customer_page
        -
            id: oro_customer_user_form
            root: page_content
    actions:
        - '@setOption':
            id: title
            optionName: params
            optionValue:
                '%entityName%': ''

        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue:
                label: 'oro.customer.frontend.title.customer_user.create'

        - '@setOption':
            id: customer_user_edit_form_actions_create
            optionName: text
            optionValue: oro.customer.form.action.create.label
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_create/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_create/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_frontend_customer_user_create/layout.yml");
    }
}

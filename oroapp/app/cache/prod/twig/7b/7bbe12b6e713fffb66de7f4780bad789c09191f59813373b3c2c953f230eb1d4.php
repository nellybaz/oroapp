<?php

/* @OroCustomer/layouts/blank/oro_customer_frontend_customer_user_view/layout.yml */
class __TwigTemplate_9faeae08eef2f1adf83e0124101edafde04fdd0d392a2aae2c282c188954e567 extends Twig_Template
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
            id: oro_customer_user_view
            root: page_content
    actions:
        - '@setOption':
            id: title
            optionName: params
            optionValue:
                '%user%': '=data[\"entity\"].getFullName()'

        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue:
                label: 'oro.customer.frontend.title.customer_user.view'
                parameters:
                    '%identifier%': '=data[\"entity\"].getFullName()'

        - '@add':
            id: customer_user_list_link
            blockType: link
            parentId: customer_user_profile_controls_wrapper
            prepend: true
            options:
                route_name: oro_customer_frontend_customer_user_index
                text: 'oro.customer.frontend.customer_user_link.text'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_view/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_view/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_frontend_customer_user_view/layout.yml");
    }
}

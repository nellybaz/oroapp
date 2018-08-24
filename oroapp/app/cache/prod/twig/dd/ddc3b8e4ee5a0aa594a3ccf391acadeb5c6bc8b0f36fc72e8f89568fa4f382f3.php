<?php

/* @OroCustomer/layouts/blank/oro_customer_frontend_customer_user_update/layout.yml */
class __TwigTemplate_fecb563d26d72885674029669ccff37b1cdfaf9f3455e8f82c1e0108ba7c2c83 extends Twig_Template
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
            id: page_title
            optionName: defaultValue
            optionValue:
                label: 'oro.customer.frontend.title.page.customer_user.edit'
                parameters:
                    '%identifier%': '=data[\"entity\"].getFullName()'

        - '@setOption':
            id: title
            optionName: params
            optionValue:
                '%user%': '=data[\"entity\"].getFullName()'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_update/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_update/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_frontend_customer_user_update/layout.yml");
    }
}

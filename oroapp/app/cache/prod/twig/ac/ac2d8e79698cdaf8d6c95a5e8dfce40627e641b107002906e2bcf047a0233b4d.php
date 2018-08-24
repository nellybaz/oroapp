<?php

/* @OroCustomer/layouts/default/oro_customer_frontend_customer_address_update/layout.yml */
class __TwigTemplate_f71d2faa4eb992a8b5d4cdabeef21d38ffd372f2d63dc02540ef995eae9446b9 extends Twig_Template
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
            id: oro_customer_address_form
            namespace: customer_address_edit
            root: page_content
    actions:
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue:
                label: oro.customer.frontend.address.page_title.edit
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/oro_customer_frontend_customer_address_update/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/oro_customer_frontend_customer_address_update/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/oro_customer_frontend_customer_address_update/layout.yml");
    }
}

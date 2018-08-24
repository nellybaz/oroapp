<?php

/* @OroCustomer/layouts/blank/config/requirejs.yml */
class __TwigTemplate_9218ac7f214bf0f534bab24c1fc1acc3fd16186dc4692dec055026a6f2cbb133 extends Twig_Template
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
        echo "config:
    paths:
        'orocustomer/js/app/components/customer-user-role-component': 'bundles/orocustomer/js/app/components/customer-user-role-component.js'
        'oro/select2-autocomplete-customeruser-component': 'bundles/orocustomer/js/app/components/select2-autocomplete-customeruser-component.js'
        'orocustomer/js/address-book': 'bundles/orocustomer/js/address-book.js'
        'orocustomer/js/app/components/frontend-customer-address-book-component': 'bundles/orocustomer/js/app/components/frontend-customer-address-book-component.js'
        'oro/datagrid/action/frontend-map-action': 'bundles/orocustomer/js/datagrid/action/frontend-map-action.js'
        'orocustomer/js/app/components/customer-address-component': 'bundles/orocustomer/js/app/components/customer-address-component.js'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

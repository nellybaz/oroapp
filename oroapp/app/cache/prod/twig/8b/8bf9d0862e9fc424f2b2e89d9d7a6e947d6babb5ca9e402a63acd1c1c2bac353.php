<?php

/* @OroCustomer/layouts/default/imports/oro_customer_user_address_form/form.yml */
class __TwigTemplate_8cf3a7fc2561ebb2297bdce95d1f50f3eeaececab80ed4fe57a890dedd9e8e96 extends Twig_Template
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
            root: __root
    actions:
        - '@setOption':
            id: __form_errors
            optionName: form
            optionValue: '=data[\"oro_customer_frontend_customer_user_address_form\"].getAddressFormView(data[\"entity\"], data[\"customerUser\"])'
        - '@setOption':
            id: __form
            optionName: form
            optionValue: '=data[\"oro_customer_frontend_customer_user_address_form\"].getAddressFormView(data[\"entity\"], data[\"customerUser\"])'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/imports/oro_customer_user_address_form/form.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/imports/oro_customer_user_address_form/form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/imports/oro_customer_user_address_form/form.yml");
    }
}

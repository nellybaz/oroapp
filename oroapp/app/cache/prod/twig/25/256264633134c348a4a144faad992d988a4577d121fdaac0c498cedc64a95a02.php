<?php

/* @OroCustomer/layouts/blank/oro_customer_frontend_customer_user_profile_update/layout.yml */
class __TwigTemplate_0e74230f1191df3a1a26a1dfaaa46ca0c7d487cf8ac143cfaeb96bafe7bd2fe7 extends Twig_Template
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
                label: 'oro.customer.customeruser.profile.edit'

        - '@setOption':
            id: customer_user_form
            optionName: form
            optionValue: '=data[\"oro_customer_frontend_customer_user_form\"].getProfileFormView(data[\"entity\"])'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_profile_update/layout.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/oro_customer_frontend_customer_user_profile_update/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/oro_customer_frontend_customer_user_profile_update/layout.yml");
    }
}

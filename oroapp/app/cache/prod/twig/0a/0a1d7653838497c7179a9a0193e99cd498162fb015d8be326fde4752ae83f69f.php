<?php

/* @OroCustomer/layouts/blank/config/assets.yml */
class __TwigTemplate_075b16a942e667bba32b88f69790195aba15480074233981da4f860f31910d2c extends Twig_Template
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
        echo "styles:
    inputs:
        - 'bundles/orocustomer/blank/scss/variables/single-form-page-config.scss'
        - 'bundles/orocustomer/blank/scss/variables/check-email-config.scss'
        - 'bundles/orocustomer/blank/scss/variables/registration-instructions-config.scss'
        - 'bundles/orocustomer/blank/scss/variables/topbar-customer-menu-config.scss'
        - 'bundles/orocustomer/blank/scss/variables/customer-info-grid-config.scss'
        - 'bundles/orocustomer/blank/scss/variables/customer-line-items-config.scss'


        - 'bundles/orocustomer/blank/scss/components/topbar-customer-menu.scss'
        - 'bundles/orocustomer/blank/scss/components/address-list.scss'
        - 'bundles/orocustomer/blank/scss/components/customer-profile.scss'
        - 'bundles/orocustomer/blank/scss/components/info-list.scss'
        - 'bundles/orocustomer/blank/scss/components/info-list-status.scss'

        - 'bundles/orocustomer/blank/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}

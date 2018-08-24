<?php

/* @OroCustomer/layouts/default/config/assets.yml */
class __TwigTemplate_b8c06b17c1854b8bbfa7125e3d8324f89ad27144304e9686e8bbf9644e9eae3f extends Twig_Template
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
        - 'bundles/orocustomer/default/scss/settings/global-settings.scss'
        - 'bundles/orocustomer/default/scss/variables/primary-menu-container-config.scss'
        - 'bundles/orocustomer/default/scss/variables/primary-menu-title-config.scss'
        - 'bundles/orocustomer/default/scss/variables/map-popover-config.scss'
        - 'bundles/orocustomer/default/scss/variables/registration-instructions-config.scss'
        - 'bundles/orocustomer/default/scss/variables/topbar-customer-menu-config.scss'
        - 'bundles/orocustomer/default/scss/variables/permissions-grid-config.scss'
        - 'bundles/orocustomer/default/scss/variables/action-permissions-config.scss'
        - 'bundles/orocustomer/default/scss/variables/customer-user-role-edit-config.scss'

        - 'bundles/orocustomer/default/scss/components/customer-form.scss'
        - 'bundles/orocustomer/default/scss/components/address-form.scss'
        - 'bundles/orocustomer/default/scss/components/address-form-actions.scss'
        - 'bundles/orocustomer/default/scss/components/address-form-outer.scss'
        - 'bundles/orocustomer/default/scss/components/capabilities.scss'
        - 'bundles/orocustomer/default/scss/components/address-list.scss'
        - 'bundles/orocustomer/default/scss/components/topbar-customer-menu.scss'
        - 'bundles/orocustomer/default/scss/components/info-list.scss'

        - 'bundles/orocustomer/default/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomer/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroCustomer/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/config/assets.yml");
    }
}

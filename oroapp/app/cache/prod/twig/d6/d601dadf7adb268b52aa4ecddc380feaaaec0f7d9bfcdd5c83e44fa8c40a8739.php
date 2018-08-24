<?php

/* @OroCheckout/layouts/default/config/assets.yml */
class __TwigTemplate_33c09e454959f9fddbb86d959a723fb4dd0cb16369fa22cb700a3871404fb4ee extends Twig_Template
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
        - 'bundles/orocheckout/default/scss/variables/checkout-config.scss'
        - 'bundles/orocheckout/default/scss/variables/checkout-form-config.scss'
        - 'bundles/orocheckout/default/scss/variables/checkout-order-summary-config.scss'
        - 'bundles/orocheckout/default/scss/variables/checkout-order-summary-container-config.scss'
        - 'bundles/orocheckout/default/scss/variables/single-page-checkout-view-config.scss'
        - 'bundles/orocheckout/default/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/config/assets.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/config/assets.yml");
    }
}

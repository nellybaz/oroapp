<?php

/* @OroCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/shipping_information.yml */
class __TwigTemplate_c3d897fa81442caee50b7d2b82f47182d13db143f48906306a16a45672d4a893 extends Twig_Template
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
    actions:
        - '@setBlockTheme':
            themes: '../templates/shipping_information.html.twig'

        - '@setOption':
            id: checkout_information_title
            optionName: stepOrder
            optionValue: 2

    conditions: 'context[\"workflowStepName\"]==\"enter_shipping_address\"'

";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/shipping_information.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/shipping_information.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/ajax/shipping_information.yml");
    }
}

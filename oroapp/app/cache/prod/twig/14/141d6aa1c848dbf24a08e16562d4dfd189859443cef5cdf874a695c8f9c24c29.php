<?php

/* @OroCheckout/layouts/default/imports/oro_checkout_sidebar/sidebar.yml */
class __TwigTemplate_2ede0e07bdd5725d8dfb0005fc5b4eeabd7069f6628fd8e418b66b205608d0b7 extends Twig_Template
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
            themes: 'sidebar.html.twig'
        - '@addTree':
            items:
                __checkout_sidebar:
                    blockType: checkout_sidebar
                    options:
                        checkout: '=data[\"checkout\"]'
                        steps: '=data[\"oro_checkout_steps\"].getSteps(data[\"workflowItem\"])'
                        currentStep: '=data[\"workflowStep\"]'
                        editTransitions: '=data[\"oro_checkout_transition\"].getBackTransitions(data[\"workflowItem\"])'
                __enter_billing_address_information:
                    blockType: block
                __enter_shipping_address_information:
                    blockType: block
                __enter_shipping_method_information:
                    blockType: block
                __enter_payment_information:
                    blockType: block
                __step_edit_button:
                    blockType: checkout_transition_step_edit
                    options:
                        transitionData: true
                        checkout: true
            tree:
                __root:
                    __checkout_sidebar:
                        __enter_billing_address_information: ~
                        __enter_shipping_address_information: ~
                        __enter_shipping_method_information: ~
                        __enter_payment_information: ~
                        __step_edit_button: ~
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/imports/oro_checkout_sidebar/sidebar.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/imports/oro_checkout_sidebar/sidebar.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/imports/oro_checkout_sidebar/sidebar.yml");
    }
}

<?php

/* @OroAlternativeCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/widget_checkout.yml */
class __TwigTemplate_20267f8719a92f5b035f224578854ff1567054bce6826b8c4835b06b60bc36ec extends Twig_Template
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
        - '@setOption':
            id: checkout_order_summary
            optionName: visible
            optionValue: '=context[\"workflowStepName\"]!=\"order_review\" && context[\"workflowStepName\"]!=\"approve_request\"'

    conditions: 'context[\"workflowName\"]==\"b2b_flow_alternative_checkout\"'
";
    }

    public function getTemplateName()
    {
        return "@OroAlternativeCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/widget_checkout.yml";
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
        return new Twig_Source("", "@OroAlternativeCheckout/layouts/default/oro_checkout_frontend_checkout/ajax/widget_checkout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/AlternativeCheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/ajax/widget_checkout.yml");
    }
}
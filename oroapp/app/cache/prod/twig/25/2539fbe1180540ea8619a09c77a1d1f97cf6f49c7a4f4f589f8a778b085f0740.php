<?php

/* @OroAlternativeCheckout/layouts/default/oro_checkout_frontend_checkout/page/request_approval.yml */
class __TwigTemplate_9832344786bd8607914046169da4f883f8223311125cb8198770a393fe942f2c extends Twig_Template
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
            themes: '../templates/request_approval.html.twig'

        - '@setOption':
            id: checkout_information_title
            optionName: stepOrder
            optionValue: 6
        - '@setOption':
            id: checkout_form_fields
            optionName: transitionData
            optionValue: '=data[\"oro_checkout_transition\"].getContinueTransition(data[\"workflowItem\"])'

    conditions: 'context[\"workflowStepName\"]==\"request_approval\" && context[\"workflowName\"]==\"b2b_flow_alternative_checkout\" && !context[\"widget_container\"]'

";
    }

    public function getTemplateName()
    {
        return "@OroAlternativeCheckout/layouts/default/oro_checkout_frontend_checkout/page/request_approval.yml";
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
        return new Twig_Source("", "@OroAlternativeCheckout/layouts/default/oro_checkout_frontend_checkout/page/request_approval.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/AlternativeCheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/page/request_approval.yml");
    }
}

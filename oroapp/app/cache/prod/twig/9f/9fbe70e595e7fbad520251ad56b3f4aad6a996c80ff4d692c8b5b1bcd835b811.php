<?php

/* @OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/main.yml */
class __TwigTemplate_5bda1fad7deaeb44e89ff8eef5e300b9bc4c243f0658011abf36db63f2dd1398 extends Twig_Template
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
            id: title
            optionName: params
            optionValue:
                 '%step_label%': '=data[\"translator\"].getTrans(data[\"workflowStep\"].getLabel(),[],\"workflows\")'
        - '@setOption':
            id: page_title
            optionName: defaultValue
            optionValue: 'oro.checkout.open_order.label'
        - '@setOption':
            id: checkout_order_summary_line_items_container
            optionName: keepState
            optionValue: true

    imports:
        -
            id: oro_checkout_content
            root: page_content
        -
            id: oro_checkout_sidebar
            root: page_sidebar

    conditions: 'context[\"workflowStepName\"]!=\"order_created\"'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/main.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/oro_checkout_frontend_checkout/page/main.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/oro_checkout_frontend_checkout/page/main.yml");
    }
}

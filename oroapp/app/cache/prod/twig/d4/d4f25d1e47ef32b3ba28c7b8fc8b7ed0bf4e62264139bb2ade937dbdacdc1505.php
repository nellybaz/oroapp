<?php

/* @OroCheckout/layouts/default/imports/oro_payment_method_order_submit/layout.yml */
class __TwigTemplate_33b480313afdd206653fe8bed2171e71ed7b569d31deac6eaba077540a525c4c extends Twig_Template
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
    actions: []

    # Layout \"oro_payment_method_order_review\" is deprecated since v1.3,
    # will be removed in v1.6. Use 'oro_payment_method_order_submit' instead.
    imports:
        - 'oro_payment_method_order_review'
";
    }

    public function getTemplateName()
    {
        return "@OroCheckout/layouts/default/imports/oro_payment_method_order_submit/layout.yml";
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
        return new Twig_Source("", "@OroCheckout/layouts/default/imports/oro_payment_method_order_submit/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/imports/oro_payment_method_order_submit/layout.yml");
    }
}

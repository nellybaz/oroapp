<?php

/* OroPayPalBundle:layouts/default/imports/oro_payment_method_order_submit:layout.html.twig */
class __TwigTemplate_1134640aca4c7b0219b7961937deffedb8f81d564ef510840c230d2dfeaffc41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_order_review_payment_methods_paypal_express_checkout_widget' => array($this, 'block__order_review_payment_methods_paypal_express_checkout_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_order_review_payment_methods_paypal_express_checkout_widget', $context, $blocks);
    }

    public function block__order_review_payment_methods_paypal_express_checkout_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute(($context["options"] ?? null), "payment_method", array(), "any", true, true)) {
            // line 3
            echo "        <div class=\"hidden\"
             data-page-component-module=\"oropaypal/js/app/components/payflow-express-checkout-component\"
             data-page-component-options=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("paymentMethod" => $this->getAttribute(($context["options"] ?? null), "payment_method", array()))), "html", null, true);
            echo "\">
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroPayPalBundle:layouts/default/imports/oro_payment_method_order_submit:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPayPalBundle:layouts/default/imports/oro_payment_method_order_submit:layout.html.twig", "");
    }
}

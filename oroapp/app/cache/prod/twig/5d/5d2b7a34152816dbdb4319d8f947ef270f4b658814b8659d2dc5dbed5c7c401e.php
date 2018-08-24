<?php

/* OroMoneyOrderBundle:layouts/default/imports/oro_payment_method_order_submit:layout.html.twig */
class __TwigTemplate_8f83124b04bebbb5faa5a57e06bfe462bcbeb37f2015c29a274048537501dea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_order_review_payment_methods_money_order_widget' => array($this, 'block__order_review_payment_methods_money_order_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_order_review_payment_methods_money_order_widget', $context, $blocks);
    }

    public function block__order_review_payment_methods_money_order_widget($context, array $blocks = array())
    {
        // line 2
        if ($this->getAttribute(($context["options"] ?? null), "payment_method", array(), "any", true, true)) {
            // line 3
            echo "        <div class=\"hidden\"
             data-page-component-module=\"oropayment/js/app/components/payment-method-component\"
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
        return "OroMoneyOrderBundle:layouts/default/imports/oro_payment_method_order_submit:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  28 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMoneyOrderBundle:layouts/default/imports/oro_payment_method_order_submit:layout.html.twig", "");
    }
}

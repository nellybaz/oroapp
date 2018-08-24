<?php

/* OroPaymentTermBundle:PaymentTerm/Autocomplete:selection.html.twig */
class __TwigTemplate_4a0f1c3d5cf2f7168e0b5792842e05c191d871dfb179b74694d8a5cb969408c6 extends Twig_Template
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
        echo "<%- label %>
<% if (isCustomerDefault) { %>
    (<%- _.__('oro.paymentterm.autocomplete.customer') %>)
<% } else if (isCustomerGroupDefault) { %>
    (<%- _.__('oro.paymentterm.autocomplete.customer_group') %>)
<% } %>
";
    }

    public function getTemplateName()
    {
        return "OroPaymentTermBundle:PaymentTerm/Autocomplete:selection.html.twig";
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
        return new Twig_Source("", "OroPaymentTermBundle:PaymentTerm/Autocomplete:selection.html.twig", "");
    }
}

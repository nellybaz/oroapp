<?php

/* OroCheckoutBundle:Checkout/Datagrid:paymentMethod.html.twig */
class __TwigTemplate_a5475c972f83f1c90bfd6709509e8b46925d91c5be23367b449461cd7c065c23 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\PaymentBundle\Twig\PaymentMethodExtension')->formatPaymentMethodLabel($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "paymentMethod"), "method")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCheckoutBundle:Checkout/Datagrid:paymentMethod.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("", "OroCheckoutBundle:Checkout/Datagrid:paymentMethod.html.twig", "");
    }
}

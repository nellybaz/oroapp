<?php

/* OroPaymentBundle:PaymentTransaction/Datagrid:paymentMethod.html.twig */
class __TwigTemplate_89f858d76d2948a78cd5d1a97b67371c42d9403e34b90bc2605671af8646f7ec extends Twig_Template
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
        $context["paymentMethod"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "paymentMethod"), "method");
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->env->getExtension('Oro\Bundle\PaymentBundle\Twig\PaymentMethodExtension')->formatPaymentMethodAdminLabel(($context["paymentMethod"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:PaymentTransaction/Datagrid:paymentMethod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentBundle:PaymentTransaction/Datagrid:paymentMethod.html.twig", "");
    }
}

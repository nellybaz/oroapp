<?php

/* OroPaymentBundle:PaymentMethodsConfigsRule:paymentMethodWithOptions.html.twig */
class __TwigTemplate_86ca50b0a0827a583b273fe26012d0a6c208cbbcf564defdba67d81133063b37 extends Twig_Template
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
        ob_start();
        // line 2
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->env->getExtension('Oro\Bundle\PaymentBundle\Twig\PaymentMethodExtension')->formatPaymentMethodAdminLabel($this->getAttribute(($context["methodData"] ?? null), "type", array())));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:PaymentMethodsConfigsRule:paymentMethodWithOptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPaymentBundle:PaymentMethodsConfigsRule:paymentMethodWithOptions.html.twig", "");
    }
}

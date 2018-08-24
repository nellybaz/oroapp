<?php

/* OroPaymentBundle:PaymentTransaction/Datagrid:price.html.twig */
class __TwigTemplate_cb673ac46d554ab3c79df49ba6d72047d04178f7ecc4135577cd3f2fbedc8677 extends Twig_Template
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
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "amount"), "method"), array("currency" => $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "currency"), "method")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:PaymentTransaction/Datagrid:price.html.twig";
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
        return new Twig_Source("", "OroPaymentBundle:PaymentTransaction/Datagrid:price.html.twig", "");
    }
}

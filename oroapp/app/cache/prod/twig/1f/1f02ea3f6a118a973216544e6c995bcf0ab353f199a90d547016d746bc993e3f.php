<?php

/* OroPaymentBundle:PaymentMethodsConfigsRule/Datagrid:configurations.html.twig */
class __TwigTemplate_7c246a437973da45659b08d7fc4a86bfd4b6b5e62e2284cc68bed5998739a382 extends Twig_Template
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
        $context["PayRuleMacro"] = $this->loadTemplate("OroPaymentBundle:PaymentMethodsConfigsRule:macros.html.twig", "OroPaymentBundle:PaymentMethodsConfigsRule/Datagrid:configurations.html.twig", 1);
        // line 2
        echo $context["PayRuleMacro"]->getrenderPaymentMethodsConfigs($this->getAttribute($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "methodConfigs"), "method"), "toArray", array(), "method"), $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "currency"), "method"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroPaymentBundle:PaymentMethodsConfigsRule/Datagrid:configurations.html.twig";
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
        return new Twig_Source("", "OroPaymentBundle:PaymentMethodsConfigsRule/Datagrid:configurations.html.twig", "");
    }
}

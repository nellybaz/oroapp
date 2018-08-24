<?php

/* OroShippingBundle:ShippingMethodsConfigsRule/Datagrid:configurations.html.twig */
class __TwigTemplate_e117891bc27f97cfa18c29a4657f6d5b6fa82078bb482a50cecb9585b3753181 extends Twig_Template
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
        $context["ShipRuleMacro"] = $this->loadTemplate("OroShippingBundle:ShippingMethodsConfigsRule:macros.html.twig", "OroShippingBundle:ShippingMethodsConfigsRule/Datagrid:configurations.html.twig", 1);
        // line 2
        echo $context["ShipRuleMacro"]->getrenderShippingMethodsConfigs($this->getAttribute($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "methodConfigs"), "method"), "toArray", array(), "method"), $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "currency"), "method"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroShippingBundle:ShippingMethodsConfigsRule/Datagrid:configurations.html.twig";
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
        return new Twig_Source("", "OroShippingBundle:ShippingMethodsConfigsRule/Datagrid:configurations.html.twig", "");
    }
}

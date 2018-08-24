<?php

/* OroMarketingListBundle:MarketingList/ExtendField:phone.html.twig */
class __TwigTemplate_2571a7d9fbdd81d72bb3b3374cc61ba46f376081d580e20e66325542b103df09 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMarketingListBundle:MarketingList/ExtendField:phone.html.twig", 1);
        // line 2
        echo $context["UI"]->getrenderPhoneWithActions($this->getAttribute(($context["value"] ?? null), "value", array()), $this->getAttribute(($context["value"] ?? null), "entity", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMarketingListBundle:MarketingList/ExtendField:phone.html.twig";
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
        return new Twig_Source("", "OroMarketingListBundle:MarketingList/ExtendField:phone.html.twig", "");
    }
}

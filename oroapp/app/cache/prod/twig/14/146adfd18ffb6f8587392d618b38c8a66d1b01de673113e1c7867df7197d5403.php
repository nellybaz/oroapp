<?php

/* OroMarketingListBundle:MarketingList/ExtendField:email.html.twig */
class __TwigTemplate_bd52e1a311c7235a4f009b9f70c1db2da1792d94993ccf82e85515eed01a0e03 extends Twig_Template
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
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroMarketingListBundle:MarketingList/ExtendField:email.html.twig", 1);
        // line 2
        echo $context["email"]->getrenderEmailWithActions($this->getAttribute(($context["value"] ?? null), "value", array()), $this->getAttribute(($context["value"] ?? null), "entity", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroMarketingListBundle:MarketingList/ExtendField:email.html.twig";
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
        return new Twig_Source("", "OroMarketingListBundle:MarketingList/ExtendField:email.html.twig", "");
    }
}

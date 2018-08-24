<?php

/* OroUserBundle:Role:clone.html.twig */
class __TwigTemplate_1bb970c4f8e9ecdb644fc860a6b7a564e161f41f4d42d4dcfc81caee5a8604bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUserBundle:Role:update.html.twig", "OroUserBundle:Role:clone.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUserBundle:Role:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["entity"] = $this->getAttribute(($context["context"] ?? null), "data", array());
        // line 3
        $context["form"] = $this->getAttribute(($context["context"] ?? null), "formView", array());
        // line 4
        $context["privilegesConfig"] = $this->getAttribute(($context["context"] ?? null), "privilegesConfig", array());
        // line 5
        $context["allow_delete"] = false;
        // line 6
        $context["tabsOptions"] = array("data" => $this->getAttribute(($context["context"] ?? null), "tabs", array()));
        // line 7
        $context["capabilitySetOptions"] = $this->getAttribute(($context["context"] ?? null), "capabilitySetOptions", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Role:clone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,  34 => 7,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  24 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUserBundle:Role:clone.html.twig", "");
    }
}

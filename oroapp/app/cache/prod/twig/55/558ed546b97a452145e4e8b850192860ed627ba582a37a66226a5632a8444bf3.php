<?php

/* OroEntityConfigBundle:Attribute:attributeView.html.twig */
class __TwigTemplate_6d82b351d10e7d111ce5ff08311fb660bd1545373b54d93ad849a1987624a01d extends Twig_Template
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
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroEntityConfigBundle:Attribute:attributeView.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["entityConfig"]->getrenderDynamicField(($context["entity"] ?? null), ($context["field"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Attribute:attributeView.html.twig";
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
        return new Twig_Source("", "OroEntityConfigBundle:Attribute:attributeView.html.twig", "");
    }
}

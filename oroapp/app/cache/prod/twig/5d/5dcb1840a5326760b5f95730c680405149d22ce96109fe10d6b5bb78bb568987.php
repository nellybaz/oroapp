<?php

/* OroEntityConfigBundle:Datagrid/Property:attributes.html.twig */
class __TwigTemplate_c6eb95507325d7b0b3a3002d185cdbc2f1bfe292780652729a5ef9729388d4b1 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle:Datagrid/Property:attributes.html.twig", 1);
        // line 2
        $context["attributes"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "attributes"), "method");
        // line 3
        echo "
";
        // line 4
        echo $context["UI"]->getrenderList(($context["attributes"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Datagrid/Property:attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEntityConfigBundle:Datagrid/Property:attributes.html.twig", "");
    }
}

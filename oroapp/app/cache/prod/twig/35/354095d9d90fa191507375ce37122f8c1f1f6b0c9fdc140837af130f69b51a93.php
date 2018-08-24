<?php

/* OroEntityConfigBundle:Datagrid/Column:attributeFamilies.html.twig */
class __TwigTemplate_5544192e3667a467fab683884544e8b9baefd0838aac1d82ccca68550c834d47 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle:Datagrid/Column:attributeFamilies.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["UI"]->getentityViewLinks($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "attributeFamilies"), "method"), "label", "oro_attribute_family_view", "oro_attribute_family_view");
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Datagrid/Column:attributeFamilies.html.twig";
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
        return new Twig_Source("", "OroEntityConfigBundle:Datagrid/Column:attributeFamilies.html.twig", "");
    }
}

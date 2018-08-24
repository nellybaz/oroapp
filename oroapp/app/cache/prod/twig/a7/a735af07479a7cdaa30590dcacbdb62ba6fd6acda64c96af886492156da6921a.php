<?php

/* OroCronBundle:Schedule/Datagrid:definition.html.twig */
class __TwigTemplate_53a6344a62a3ac66a1c3a9ee95f995bc0feb41e751d41dfc65b345d43db91b5e extends Twig_Template
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
        echo "<b>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "definition"), "method"), "html", null, true);
        echo "</b>
";
    }

    public function getTemplateName()
    {
        return "OroCronBundle:Schedule/Datagrid:definition.html.twig";
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
        return new Twig_Source("", "OroCronBundle:Schedule/Datagrid:definition.html.twig", "");
    }
}

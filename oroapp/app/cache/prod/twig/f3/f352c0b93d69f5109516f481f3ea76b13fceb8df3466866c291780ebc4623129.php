<?php

/* OroIntegrationBundle:Integration/Datagrid:message.html.twig */
class __TwigTemplate_4c8bc57942cac9bf525b1fbdf64d251d9cbd73d3b017f7732f8981733d9a29b3 extends Twig_Template
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
        echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroIntegrationBundle:Integration/Datagrid:message.html.twig";
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
        return new Twig_Source("", "OroIntegrationBundle:Integration/Datagrid:message.html.twig", "");
    }
}

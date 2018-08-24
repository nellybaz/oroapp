<?php

/* OroRFPBundle:RequestAdditionalNote/Datagrid:text.html.twig */
class __TwigTemplate_0ff2143a00e4ac7b82319ee9df1f9e9db9977b78663b5cfc320cd5b24294563b extends Twig_Template
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
        echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroRFPBundle:RequestAdditionalNote/Datagrid:text.html.twig";
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
        return new Twig_Source("", "OroRFPBundle:RequestAdditionalNote/Datagrid:text.html.twig", "");
    }
}

<?php

/* OroCronBundle:Schedule/Datagrid:command.html.twig */
class __TwigTemplate_b4d53df5e4e697ea4cf7b147f2da7d73784f011d7257daf60f9bc5569a99a255 extends Twig_Template
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
        echo "<code>
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "command"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_join_filter($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "arguments"), "method"), " ")), "html", null, true);
        echo "
</code>
";
    }

    public function getTemplateName()
    {
        return "OroCronBundle:Schedule/Datagrid:command.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCronBundle:Schedule/Datagrid:command.html.twig", "");
    }
}

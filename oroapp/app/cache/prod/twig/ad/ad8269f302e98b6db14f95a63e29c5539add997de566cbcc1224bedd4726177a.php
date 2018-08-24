<?php

/* OroTagBundle:Tag/Datagrid/Property:background_color.html.twig */
class __TwigTemplate_1f87c2f07f875622448c4401e83ad0931bece24253a421e4e12574af268a1c2a extends Twig_Template
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
        $context["backgroundColor"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "backgroundColor"), "method");
        // line 2
        echo "
<span class=\"tags-container\">
        <a href=\"\"
           class=\"tags-container__tag-entry\"
           style=\"width: 45px; ";
        // line 6
        if (($context["backgroundColor"] ?? null)) {
            echo "background-color:";
            echo twig_escape_filter($this->env, ($context["backgroundColor"] ?? null), "html", null, true);
        }
        echo "\">&nbsp;</a>
</span>
";
    }

    public function getTemplateName()
    {
        return "OroTagBundle:Tag/Datagrid/Property:background_color.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTagBundle:Tag/Datagrid/Property:background_color.html.twig", "");
    }
}

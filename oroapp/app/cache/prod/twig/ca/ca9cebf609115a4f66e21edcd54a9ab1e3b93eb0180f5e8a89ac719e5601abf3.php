<?php

/* OroCaseBundle:Case/Datagrid/Property:subject.html.twig */
class __TwigTemplate_3d2632f9a555c382306007a5066c6bb05e31bea41010fddb148a8d76e33a8985 extends Twig_Template
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
        if ((twig_length_filter($this->env, ($context["value"] ?? null)) > 30)) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, twig_slice($this->env, ($context["value"] ?? null), 0, 30), "html", null, true);
            echo "...
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "
";
        }
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCaseBundle:Case/Datagrid/Property:subject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCaseBundle:Case/Datagrid/Property:subject.html.twig", "");
    }
}

<?php

/* OroWorkflowBundle:Datagrid/Column:applications.html.twig */
class __TwigTemplate_a0a2bae7ddd22e8cd9cef4d9260bc37cb3845f837f6a392e09909ff4b05565b9 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroWorkflowBundle:Datagrid/Column:applications.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ( !twig_test_empty($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "applications"), "method"))) {
            // line 4
            echo "    ";
            echo $context["UI"]->getrenderList($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "applications"), "method"));
            echo "
";
        } else {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroWorkflowBundle:Datagrid/Column:applications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroWorkflowBundle:Datagrid/Column:applications.html.twig", "");
    }
}

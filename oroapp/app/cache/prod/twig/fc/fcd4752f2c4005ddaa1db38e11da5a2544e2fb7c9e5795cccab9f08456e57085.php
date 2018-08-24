<?php

/* OroWorkflowBundle:Datagrid/Column:exclusiveGroups.html.twig */
class __TwigTemplate_ee0cf09dae76810a5a1309e0603ae5bf07183a4bc63cc4d06788a28dcd3f7ed3 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroWorkflowBundle:Datagrid/Column:exclusiveGroups.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute(($context["value"] ?? null), 0, array(), "array", true, true) &&  !twig_test_empty($this->getAttribute(($context["value"] ?? null), 0, array(), "array")))) {
            // line 4
            echo "    ";
            echo $context["UI"]->getrenderList(($context["value"] ?? null));
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
        return "OroWorkflowBundle:Datagrid/Column:exclusiveGroups.html.twig";
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
        return new Twig_Source("", "OroWorkflowBundle:Datagrid/Column:exclusiveGroups.html.twig", "");
    }
}

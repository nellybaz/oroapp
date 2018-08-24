<?php

/* OroMessageQueueBundle:Job/Datagrid:status.html.twig */
class __TwigTemplate_02ed184f7a75c31ea5da31480590356e111ec3c685f271c345bed5094342e7b9 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroMessageQueueBundle::macros.html.twig", "OroMessageQueueBundle:Job/Datagrid:status.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["job"] = $this->getAttribute(($context["record"] ?? null), "rootEntity", array());
        // line 4
        echo "
<span class=\"label ";
        // line 5
        echo $context["UI"]->getgetJobStatusClass(($context["job"] ?? null));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["job"] ?? null), "status", array())), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "OroMessageQueueBundle:Job/Datagrid:status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMessageQueueBundle:Job/Datagrid:status.html.twig", "");
    }
}

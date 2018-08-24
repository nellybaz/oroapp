<?php

/* OroMessageQueueBundle:Job/Datagrid:percent.html.twig */
class __TwigTemplate_fe1722609faac32d2e4f6e843ab26144896086678420c9d0b5be5412bf5e1ba8 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroMessageQueueBundle::macros.html.twig", "OroMessageQueueBundle:Job/Datagrid:percent.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["job"] = $this->getAttribute(($context["record"] ?? null), "rootEntity", array());
        // line 4
        $context["progress"] = ($this->getAttribute(($context["job"] ?? null), "jobProgress", array()) * 100);
        // line 5
        echo "
<div class=\"progress job-progress\">
    <div class=\"label ";
        // line 7
        echo $context["UI"]->getgetJobStatusClass(($context["job"] ?? null));
        echo "\" style=\"width:";
        echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
        echo "%;\">
        <span> ";
        // line 8
        echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
        echo "%</span>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMessageQueueBundle:Job/Datagrid:percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  32 => 7,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMessageQueueBundle:Job/Datagrid:percent.html.twig", "");
    }
}

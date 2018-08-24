<?php

/* OroCallBundle:Call:activity.html.twig */
class __TwigTemplate_a2daca92410359bcb24ce682e42fc34c607f5b72322d124748d35ff769dee864 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCallBundle:Call:activity.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        echo $context["dataGrid"]->getrenderGrid("activity-call-grid", array("entityClass" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getClassName(        // line 5
($context["entity"] ?? null), true), "entityId" => $this->getAttribute(        // line 6
($context["entity"] ?? null), "id", array())));
        // line 7
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCallBundle:Call:activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  27 => 6,  26 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCallBundle:Call:activity.html.twig", "");
    }
}

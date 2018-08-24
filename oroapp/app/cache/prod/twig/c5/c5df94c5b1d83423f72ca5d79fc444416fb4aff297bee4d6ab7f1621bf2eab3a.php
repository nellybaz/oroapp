<?php

/* OroEmailBundle:AutoResponseRule/Datagrid/Property:active.html.twig */
class __TwigTemplate_4d3da727757dab09e253c7e9e720eafa15dbc2354f6619247cbf923c6b404e3a extends Twig_Template
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
        $context["status"] = (($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "active"), "method")) ? ("active") : ("inactive"));
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.email.autoresponserule.status." . ($context["status"] ?? null))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:AutoResponseRule/Datagrid/Property:active.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:AutoResponseRule/Datagrid/Property:active.html.twig", "");
    }
}

<?php

/* OroReportBundle:Report:viewFromGrid.html.twig */
class __TwigTemplate_eddfa6e47ffab0387ad8cf1c4be6f7d78a795f2713c5201bca414e75dec1bf7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroReportBundle:Report:viewFromGrid.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroReportBundle:Report:viewFromGrid.html.twig", 2);
        // line 3
        $context["gridName"] = ($context["gridName"] ?? null);
        // line 4
        $context["pageTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["pageTitle"] ?? null));

        $this->env->getExtension("oro_title")->set(array("titleTemplate" => "%title%", "params" => array("%title%" => twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(        // line 9
($context["pageTitle"] ?? null))))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroReportBundle:Report:viewFromGrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,  31 => 9,  28 => 4,  26 => 3,  24 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroReportBundle:Report:viewFromGrid.html.twig", "");
    }
}

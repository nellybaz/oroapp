<?php

/* OroReportCRMBundle:Report:index.html.twig */
class __TwigTemplate_621b67acabd06daf74f355cd9e246ff3b3fe3a89f804283ae9f1a1c172bc1e12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroReportCRMBundle:Report:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroReportCRMBundle:Report:index.html.twig", 3);
        // line 5
        $context["reportGroupName"] = (("oro.reportcrm.menu." . $this->getAttribute(($context["params"] ?? null), "reportGroupName", array())) . "_report_tab.label");

        $this->env->getExtension("oro_title")->set(array("params" => array("%reportName%" => twig_title_string_filter($this->env,         // line 6
($context["pageTitle"] ?? null)), "%reportGroup%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["reportGroupName"] ?? null)))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["buttons"] = array();
        // line 10
        echo "    ";
        $context["renderParams"] = twig_array_merge(array("enableViews" => false), ((array_key_exists("renderParams", $context)) ? (_twig_default_filter(($context["renderParams"] ?? null), array())) : (array())));
        // line 11
        echo "    ";
        $context["params"] = twig_array_merge(((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), array("_grid_view" => array("_disabled" => true), "_tags" => array("_disabled" => true)));
        // line 20
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroReportCRMBundle:Report:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  32 => 1,  30 => 6,  27 => 5,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroReportCRMBundle:Report:index.html.twig", "");
    }
}

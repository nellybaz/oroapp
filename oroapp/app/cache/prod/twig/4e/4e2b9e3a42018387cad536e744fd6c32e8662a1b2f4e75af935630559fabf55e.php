<?php

/* OroSalesBundle:Dashboard:leadsList.html.twig */
class __TwigTemplate_52aecb033c6ad4dbbba4b6c411268df93b9c3fa7c40b0aec65f0bb8e58387519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:grid.html.twig", "OroSalesBundle:Dashboard:leadsList.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["gridName"] = "dashboard-my-sales-lead-grid";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dataGrid"] ?? null), "renderGrid", array(0 => ($context["gridName"] ?? null), 1 => ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), array())) : (array())), 2 => twig_array_merge(array("routerEnabled" => false, "enableFilters" => false), ((        // line 8
array_key_exists("renderParams", $context)) ? (_twig_default_filter(($context["renderParams"] ?? null), array())) : (array())))), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Dashboard:leadsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Dashboard:leadsList.html.twig", "");
    }
}

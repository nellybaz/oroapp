<?php

/* OroSalesBundle:Dashboard:opportunitiesList.html.twig */
class __TwigTemplate_18ef4eaa170d13a10d3a8600d0db68fa6a87513156dac863159126e439cc6d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:grid.html.twig", "OroSalesBundle:Dashboard:opportunitiesList.html.twig", 1);
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
        $context["gridName"] = "dashboard-my-sales-opportunity-grid";
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
        return "OroSalesBundle:Dashboard:opportunitiesList.html.twig";
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
        return new Twig_Source("", "OroSalesBundle:Dashboard:opportunitiesList.html.twig", "");
    }
}

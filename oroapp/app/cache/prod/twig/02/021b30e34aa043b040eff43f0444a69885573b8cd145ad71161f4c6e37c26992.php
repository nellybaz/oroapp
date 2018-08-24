<?php

/* OroChartBundle:Chart:stackedbar.html.twig */
class __TwigTemplate_929c3fde4cb0588ef0296cc7870036bc4f5047d71346919078f48bd601891ac4 extends Twig_Template
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
        $context["chart"] = $this->loadTemplate("OroChartBundle::macros.html.twig", "OroChartBundle:Chart:stackedbar.html.twig", 1);
        // line 2
        echo "
";
        // line 22
        echo "
";
        // line 23
        $context["lableTrans"] = array("data_schema" => array("label" => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute($this->getAttribute(        // line 26
($context["options"] ?? null), "data_schema", array(), "any", false, true), "label", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "data_schema", array(), "any", false, true), "label", array(), "any", false, true), "label", array()), "N/A")) : ("N/A")))), "value" => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute($this->getAttribute(        // line 29
($context["options"] ?? null), "data_schema", array(), "any", false, true), "value", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "data_schema", array(), "any", false, true), "value", array(), "any", false, true), "label", array()), "N/A")) : ("N/A"))))));
        // line 33
        echo "
";
        // line 34
        $context["options"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(($context["options"] ?? null), ($context["lableTrans"] ?? null));
        // line 35
        if ((twig_length_filter($this->env, ($context["data"] ?? null)) > 0)) {
            // line 36
            echo "    <div class=\"stackedbar-chart\">
        ";
            // line 37
            echo $context["chart"]->getrenderChart(($context["data"] ?? null), ($context["options"] ?? null), ($context["config"] ?? null));
            echo "
        <p class=\"chart-hint\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.chart.stackedbar_chart.hint"), "html", null, true);
            echo " </p>
    </div>
";
        } else {
            // line 41
            echo "    <div class=\"clearfix no-data\">
        <span>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.no_data_found"), "html", null, true);
            echo "</span>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroChartBundle:Chart:stackedbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 42,  51 => 41,  45 => 38,  41 => 37,  38 => 36,  36 => 35,  34 => 34,  31 => 33,  29 => 29,  28 => 26,  27 => 23,  24 => 22,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroChartBundle:Chart:stackedbar.html.twig", "");
    }
}

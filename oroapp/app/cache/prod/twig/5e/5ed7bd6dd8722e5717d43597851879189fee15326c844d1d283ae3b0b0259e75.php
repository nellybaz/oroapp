<?php

/* OroChartBundle:Chart:bar.html.twig */
class __TwigTemplate_d98168f05ac016b4cc217926681b2622347f7d28d91a280051c372f0d0aa3586 extends Twig_Template
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
        $context["chart"] = $this->loadTemplate("OroChartBundle::macros.html.twig", "OroChartBundle:Chart:bar.html.twig", 1);
        // line 2
        echo "
";
        // line 22
        echo "
";
        // line 23
        if ((twig_length_filter($this->env, ($context["data"] ?? null)) > 0)) {
            // line 24
            echo "    ";
            echo $context["chart"]->getrenderChart(($context["data"] ?? null), ($context["options"] ?? null), ($context["config"] ?? null));
            echo "
";
        } else {
            // line 26
            echo "    <div class=\"clearfix no-data\">
        <span>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.no_data_found"), "html", null, true);
            echo "</span>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroChartBundle:Chart:bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 27,  35 => 26,  29 => 24,  27 => 23,  24 => 22,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroChartBundle:Chart:bar.html.twig", "");
    }
}

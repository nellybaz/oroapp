<?php

/* OroChartBundle:Chart:pie.html.twig */
class __TwigTemplate_d06bcb7ce527fb4d0ff96a5952ccb886f619691441ad22ec71014cb6cc391ff0 extends Twig_Template
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
        $context["chart"] = $this->loadTemplate("OroChartBundle::macros.html.twig", "OroChartBundle:Chart:pie.html.twig", 1);
        // line 2
        echo "
";
        // line 22
        if ((twig_length_filter($this->env, ($context["data"] ?? null)) > 0)) {
            // line 23
            echo "    ";
            echo $context["chart"]->getrenderChart(($context["data"] ?? null), ($context["options"] ?? null), ($context["config"] ?? null), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile());
            echo "
";
        } else {
            // line 25
            echo "    <div class=\"clearfix no-data\">
        <span>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.no_data_found"), "html", null, true);
            echo "</span>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroChartBundle:Chart:pie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 26,  32 => 25,  26 => 23,  24 => 22,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroChartBundle:Chart:pie.html.twig", "");
    }
}

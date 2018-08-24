<?php

/* OroChartBundle:Chart:multiline.html.twig */
class __TwigTemplate_59a27a411c1a3216e23df62416195fe898dcbf18dfbc5676b28515e63a43881e extends Twig_Template
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
        $context["chart"] = $this->loadTemplate("OroChartBundle::macros.html.twig", "OroChartBundle:Chart:multiline.html.twig", 1);
        // line 2
        echo "
";
        // line 22
        $context["lableTrans"] = array("data_schema" => array("label" => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(        // line 25
($context["options"] ?? null), "data_schema", array()), "label", array()), "label", array()))), "value" => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["options"] ?? null), "data_schema", array()), "value", array()), "label", array())))));
        // line 32
        $context["options"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(($context["options"] ?? null), ($context["lableTrans"] ?? null));
        // line 33
        if ((twig_length_filter($this->env, ($context["data"] ?? null)) > 0)) {
            // line 34
            echo "    ";
            echo $context["chart"]->getrenderChart(($context["data"] ?? null), ($context["options"] ?? null), ($context["config"] ?? null), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile());
            echo "
";
        } else {
            // line 36
            echo "    <div class=\"clearfix no-data\">
        <span>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.no_data_found"), "html", null, true);
            echo "</span>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroChartBundle:Chart:multiline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 37,  38 => 36,  32 => 34,  30 => 33,  28 => 32,  26 => 28,  25 => 25,  24 => 22,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroChartBundle:Chart:multiline.html.twig", "");
    }
}

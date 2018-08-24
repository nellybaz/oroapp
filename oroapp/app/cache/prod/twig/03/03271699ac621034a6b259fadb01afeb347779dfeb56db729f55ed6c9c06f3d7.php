<?php

/* OroSalesBundle:Dashboard:forecastOfOpportunitiesSubwidget.html.twig */
class __TwigTemplate_7a38b14e8be86d62badab5ce437af64d466cc2e6ae7a4c7e8c6769a5e88fc5b8 extends Twig_Template
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
        $this->loadTemplate("OroSalesBundle:Dashboard:forecastOfOpportunitiesSimpleSubwidget.html.twig", "OroSalesBundle:Dashboard:forecastOfOpportunitiesSubwidget.html.twig", 1)->display($context);
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array(), "any", false, true), "deviation", array(), "any", true, true)) {
            // line 3
            echo "<div class=\"deviation\">
    <span class=\"deviation ";
            // line 4
            if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array(), "any", false, true), "isPositive", array(), "any", true, true)) {
                if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array()), "isPositive", array())) {
                    echo "positive";
                } else {
                    echo "negative";
                }
            }
            echo "\">
        ";
            // line 5
            echo $this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array()), "deviation", array());
            echo "
    </span>
</div>
<div class=\"deviation\">
    <span class=\"deviation\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.dashboard.e_commerce_statistic.compare_to.label"), "html", null, true);
            echo ":
    </span>
    <span class=\"date-range\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array()), "previousRange", array()), "html", null, true);
            echo "</span>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Dashboard:forecastOfOpportunitiesSubwidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  44 => 10,  36 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Dashboard:forecastOfOpportunitiesSubwidget.html.twig", "");
    }
}

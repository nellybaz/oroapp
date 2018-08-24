<?php

/* OroMarketingCRMBridgeBundle:Customer:websiteChart.html.twig */
class __TwigTemplate_546bb45c24b4addb1acc129e72ea451b72d89bb73b0645ab51c3d2719f38215f extends Twig_Template
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
        echo "<div class=\"responsive-cell\">
    <div class=\"box-type1\">
        <div class=\"title\">
            <span class=\"widget-title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.website_activity.chart.label"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"row-fluid\">
            ";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["data"] ?? null), "chartView", array()), "render", array(), "method");
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMarketingCRMBridgeBundle:Customer:websiteChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMarketingCRMBridgeBundle:Customer:websiteChart.html.twig", "");
    }
}

<?php

/* OroReportBundle:Form:fields.html.twig */
class __TwigTemplate_85032830ffa22d890bd2e0d89dd83f92b5a8975c06d7a12ebb53d391c23c2604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroChartBundle:Form:fields.html.twig", "OroReportBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'oro_report_chart_widget' => array($this, 'block_oro_report_chart_widget'),
            'oro_report_chart_data_schema_collection_row' => array($this, 'block_oro_report_chart_data_schema_collection_row'),
            'oro_report_chart_data_schema_row' => array($this, 'block_oro_report_chart_data_schema_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroChartBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_oro_report_chart_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock("oro_chart_widget", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_oro_report_chart_data_schema_collection_row($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    // line 11
    public function block_oro_report_chart_data_schema_row($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroReportBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroReportBundle:Form:fields.html.twig", "");
    }
}

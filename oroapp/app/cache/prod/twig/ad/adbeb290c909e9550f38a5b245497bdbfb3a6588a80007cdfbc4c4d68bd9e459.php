<?php

/* OroChartBundle:Form:fields.html.twig */
class __TwigTemplate_2c29b43dc8af8ace9a4655efba945381c6ccec701f0d098fc1503d07b5b63a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_chart_widget' => array($this, 'block_oro_chart_widget'),
            'oro_chart_setting_row' => array($this, 'block_oro_chart_setting_row'),
            'oro_chart_settings_collection_row' => array($this, 'block_oro_chart_settings_collection_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_chart_widget', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('oro_chart_setting_row', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('oro_chart_settings_collection_row', $context, $blocks);
    }

    // line 1
    public function block_oro_chart_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form');
        echo "
";
    }

    // line 5
    public function block_oro_chart_setting_row($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    // line 9
    public function block_oro_chart_settings_collection_row($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroChartBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  56 => 9,  49 => 6,  46 => 5,  39 => 2,  36 => 1,  32 => 9,  29 => 8,  27 => 5,  24 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroChartBundle:Form:fields.html.twig", "");
    }
}

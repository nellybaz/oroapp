<?php

/* OroAnalyticsBundle:Form:fields.html.twig */
class __TwigTemplate_cee33b75dc7dd1cc38523cbe5136f6febabf3dc4c5f865728030000d7902e9a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_analytics_rfm_category_row' => array($this, 'block_oro_analytics_rfm_category_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_analytics_rfm_category_row', $context, $blocks);
    }

    public function block_oro_analytics_rfm_category_row($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"rfm-settings-row\">
        ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "category_index", array()), 'widget');
        echo "
        ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "min_value", array()), 'widget');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "max_value", array()), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroAnalyticsBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAnalyticsBundle:Form:fields.html.twig", "");
    }
}

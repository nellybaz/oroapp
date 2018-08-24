<?php

/* OroSalesBundle:Dashboard:forecastOfOpportunitiesSimpleSubwidget.html.twig */
class __TwigTemplate_0738a2813d7671d077f5d7e34519cf7dbff253c98b3ee87c1f7d06ff93af7d6c extends Twig_Template
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
        echo "<span class=\"title\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? null), "label", array())), "html", null, true);
        echo "</span>
<h3 class=\"value\">";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["item"] ?? null), "value", array()), "value", array());
        echo "</h3>
";
    }

    public function getTemplateName()
    {
        return "OroSalesBundle:Dashboard:forecastOfOpportunitiesSimpleSubwidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSalesBundle:Dashboard:forecastOfOpportunitiesSimpleSubwidget.html.twig", "");
    }
}

<?php

/* OroSEOBundle:SEO:title_view.html.twig */
class __TwigTemplate_8c6d8c9c3ab62d8c044660b09bcfb6d8589402cded922f69fc4f61fd359418a5 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSEOBundle:SEO:title_view.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($context["labelPrefix"] ?? null) . ".meta_titles.label")), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute(($context["entity"] ?? null), "metaTitles", array())));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroSEOBundle:SEO:title_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSEOBundle:SEO:title_view.html.twig", "");
    }
}
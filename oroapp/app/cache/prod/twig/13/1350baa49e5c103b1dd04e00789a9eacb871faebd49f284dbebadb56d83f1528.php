<?php

/* OroTaxBundle:CustomerGroup:tax_code_view.html.twig */
class __TwigTemplate_3769c0cd45bd6d217cd27edbfaef4a29b5bd91b17a9778f2964f752efedaabe5 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroTaxBundle:CustomerGroup:tax_code_view.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.taxcode.label"),         // line 5
$context["UI"]->getentityViewLink(($context["entity"] ?? null), ((($context["entity"] ?? null)) ? ($this->getAttribute(($context["entity"] ?? null), "code", array())) : (null)), "oro_tax_customer_tax_code_view"));
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:CustomerGroup:tax_code_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  25 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:CustomerGroup:tax_code_view.html.twig", "");
    }
}

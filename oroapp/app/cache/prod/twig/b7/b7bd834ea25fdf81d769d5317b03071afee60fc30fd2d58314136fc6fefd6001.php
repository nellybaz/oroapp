<?php

/* OroTaxBundle:CustomerGroup:tax_code_update.html.twig */
class __TwigTemplate_6b6bce1dbabbf09a7e79f69995b58d68b74ef0e3b6c02226d85132644d5fe650 extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "taxCode", array()), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:CustomerGroup:tax_code_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:CustomerGroup:tax_code_update.html.twig", "");
    }
}

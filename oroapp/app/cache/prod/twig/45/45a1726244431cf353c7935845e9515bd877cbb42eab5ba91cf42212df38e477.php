<?php

/* OroTaxBundle:CustomerTaxCode:searchResult.html.twig */
class __TwigTemplate_ea836b8b82dd7f55dc76fe1599d30c864c0e766af7aedd7d681f2c3588799c39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroTaxBundle:CustomerTaxCode:searchResult.html.twig", 7);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroSearchBundle:Search:searchResultItem.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["showImage"] = false;
        // line 10
        $context["recordUrl"] = $this->getAttribute(($context["indexer_item"] ?? null), "recordUrl", array());
        // line 11
        $context["title"] = $this->getAttribute(($context["indexer_item"] ?? null), "recordTitle", array());
        // line 12
        $context["entityType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.tax.customertaxcode.entity_label");
        // line 7
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroTaxBundle:CustomerTaxCode:searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  30 => 12,  28 => 11,  26 => 10,  24 => 9,  11 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTaxBundle:CustomerTaxCode:searchResult.html.twig", "");
    }
}

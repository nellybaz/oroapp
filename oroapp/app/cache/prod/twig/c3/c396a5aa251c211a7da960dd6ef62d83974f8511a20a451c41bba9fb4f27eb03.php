<?php

/* OroProductBundle:Product:searchResult.html.twig */
class __TwigTemplate_9b4c1f039c9b1b249c9383073199353596653aaa2d4cd13f9001371ba1dd9f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroProductBundle:Product:searchResult.html.twig", 6);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroSearchBundle:Search:searchResultItem.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        $context["showImage"] = false;
        // line 10
        $context["recordUrl"] = $this->getAttribute(($context["indexer_item"] ?? null), "recordUrl", array());
        // line 12
        $context["titles"] = array();
        // line 14
        if ($this->getAttribute(($context["entity"] ?? null), "sku", array(), "any", true, true)) {
            // line 15
            $context["titles"] = twig_array_merge(($context["titles"] ?? null), array(0 => $this->getAttribute(($context["entity"] ?? null), "sku", array())));
        }
        // line 18
        if ($this->getAttribute(($context["entity"] ?? null), "defaultName", array(), "any", true, true)) {
            // line 19
            $context["titles"] = twig_array_merge(($context["titles"] ?? null), array(0 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "defaultName", array()), "string", array())));
        }
        // line 22
        $context["title"] = twig_join_filter(($context["titles"] ?? null), " - ");
        // line 24
        $context["entityType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_label");
        // line 26
        $context["entityInfo"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "value" => (($this->getAttribute(        // line 27
($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "value" => (($this->getAttribute(        // line 28
($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")))));
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroProductBundle:Product:searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  46 => 28,  45 => 27,  44 => 26,  42 => 24,  40 => 22,  37 => 19,  35 => 18,  32 => 15,  30 => 14,  28 => 12,  26 => 10,  24 => 8,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Product:searchResult.html.twig", "");
    }
}

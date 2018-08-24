<?php

/* OroMagentoBundle:Customer:searchResult.html.twig */
class __TwigTemplate_2d9028312f56a55ab45814bfd7f0ce86ed8d850d2a4713b739deaecda3bbb81d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroMagentoBundle:Customer:searchResult.html.twig", 6);
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
        // line 11
        $context["title"] = ((($context["entity"] ?? null)) ? ($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(($context["entity"] ?? null))) : ($this->getAttribute(($context["indexer_item"] ?? null), "recordTitle", array())));
        // line 13
        $context["entityType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.entity_label");
        // line 15
        $context["entityInfo"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.channel.label"), "value" => (($this->getAttribute(        // line 16
($context["entity"] ?? null), "channel", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "channel", array()), "name", array())) : ("N/A"))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.website.label"), "value" => (($this->getAttribute(        // line 17
($context["entity"] ?? null), "website", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "website", array()), "name", array())) : ("N/A"))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.customer.store.label"), "value" => (($this->getAttribute(        // line 18
($context["entity"] ?? null), "store", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "store", array()), "name", array())) : ("N/A"))), 3 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "value" => (($this->getAttribute(        // line 19
($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"))), 4 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "value" => (($this->getAttribute(        // line 20
($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"))));
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:Customer:searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  37 => 20,  36 => 19,  35 => 18,  34 => 17,  33 => 16,  32 => 15,  30 => 13,  28 => 11,  26 => 10,  24 => 8,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:Customer:searchResult.html.twig", "");
    }
}
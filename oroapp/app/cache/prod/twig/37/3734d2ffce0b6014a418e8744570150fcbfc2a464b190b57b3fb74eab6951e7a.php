<?php

/* OroMagentoBundle:CreditMemo:searchResult.html.twig */
class __TwigTemplate_41daabf6b6e59b04be5276612ac76ae28cd41ee39f1c2f0b79bedc4a6157723e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroMagentoBundle:CreditMemo:searchResult.html.twig", 6);
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
        $context["title"] = ((($context["entity"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.entity_number", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.entity_label"), "%entityNumber%" => $this->getAttribute(        // line 12
($context["entity"] ?? null), "incrementId", array())))) : ($this->getAttribute(        // line 13
($context["indexer_item"] ?? null), "recordTitle", array())));
        // line 16
        $context["entityType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.entity_label");
        // line 18
        $context["entityInfo"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.channel.label"), "value" => (((($this->getAttribute(        // line 19
($context["entity"] ?? null), "channel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "channel", array()), false)) : (false))) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "channel", array()), "name", array())) : ("N/A"))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.store.label"), "value" => (((($this->getAttribute(        // line 20
($context["entity"] ?? null), "store", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "store", array()), false)) : (false))) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "store", array()), "name", array())) : ("N/A"))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "value" => (($this->getAttribute(        // line 21
($context["entity"] ?? null), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "createdAt", array()))) : ("N/A"))), 3 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "value" => (($this->getAttribute(        // line 22
($context["entity"] ?? null), "updatedAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updatedAt", array()))) : ("N/A"))), 4 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.grand_total.label"), "value" => (($this->getAttribute(        // line 23
($context["entity"] ?? null), "grandTotal", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "grandTotal", array()))) : ("N/A"))), 5 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.magento.creditmemo.subtotal.label"), "value" => (($this->getAttribute(        // line 24
($context["entity"] ?? null), "subtotal", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["entity"] ?? null), "subtotal", array()))) : ("N/A"))));
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroMagentoBundle:CreditMemo:searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  40 => 24,  39 => 23,  38 => 22,  37 => 21,  36 => 20,  35 => 19,  34 => 18,  32 => 16,  30 => 13,  29 => 12,  28 => 11,  26 => 10,  24 => 8,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMagentoBundle:CreditMemo:searchResult.html.twig", "");
    }
}

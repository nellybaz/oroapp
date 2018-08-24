<?php

/* OroTagBundle:Search:result.html.twig */
class __TwigTemplate_d38d7bce6935ef8892d6dcb9838320c1d22814082e1dc10371436a3acbe6cc21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroTagBundle:Search:result.html.twig", 6);
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
        if (($context["entity"] ?? null)) {
            // line 11
            $context["recordUrl"] = $this->getAttribute(($context["indexer_item"] ?? null), "recordUrl", array());
        }
        // line 14
        $context["title"] = (($this->getAttribute(($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A"));
        // line 15
        $context["entityType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue($this->getAttribute(($context["indexer_item"] ?? null), "entityName", array()), "label"));
        // line 17
        $context["entityInfo"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "value" => (($this->getAttribute(        // line 18
($context["entity"] ?? null), "created", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "created", array()))) : ("N/A"))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.updated_at"), "value" => (($this->getAttribute(        // line 19
($context["entity"] ?? null), "updated", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "updated", array()))) : ("N/A"))));
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroTagBundle:Search:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  37 => 19,  36 => 18,  35 => 17,  33 => 15,  31 => 14,  28 => 11,  26 => 10,  24 => 8,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroTagBundle:Search:result.html.twig", "");
    }
}

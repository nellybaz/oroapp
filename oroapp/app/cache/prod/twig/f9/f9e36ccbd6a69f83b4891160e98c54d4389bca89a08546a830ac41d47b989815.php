<?php

/* OroEmailBundle:Email:searchResult.html.twig */
class __TwigTemplate_92c63bcce4d7b87ea52a7313ff81401092e203f92425c3fd4c18ef29ab5d1cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroEmailBundle:Email:searchResult.html.twig", 6);
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Email:searchResult.html.twig", 8);
        // line 9
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email:searchResult.html.twig", 9);
        // line 11
        $context["iconType"] = "envelope";
        // line 13
        $context["recordUrl"] = $this->getAttribute(($context["indexer_item"] ?? null), "recordUrl", array());
        // line 14
        $context["title"] = ((($context["entity"] ?? null)) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "email", array()), "subject", array())) : ($this->getAttribute(($context["indexer_item"] ?? null), "recordTitle", array())));
        // line 16
        $context["entityType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.entity_label");
        // line 18
        $context["entityInfo"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.sent_at.label"), "value" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute(        // line 19
($context["entity"] ?? null), "email", array()), "sentAt", array()))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.from_name.label"), "value" =>         // line 20
$context["EA"]->getemail_address($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "email", array()), "fromEmailAddress", array()), $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "email", array()), "fromName", array()))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.to.label"), "value" =>         // line 21
$context["EA"]->getrecipient_email_addresses($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "email", array()), "recipients", array(0 => "to"), "method"))), 3 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.email.emailuser.owner.label"), "value" =>         // line 22
$context["UI"]->getentityOwnerLink(($context["entity"] ?? null), false)));
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email:searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  40 => 22,  39 => 21,  38 => 20,  37 => 19,  36 => 18,  34 => 16,  32 => 14,  30 => 13,  28 => 11,  26 => 9,  24 => 8,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroEmailBundle:Email:searchResult.html.twig", "");
    }
}

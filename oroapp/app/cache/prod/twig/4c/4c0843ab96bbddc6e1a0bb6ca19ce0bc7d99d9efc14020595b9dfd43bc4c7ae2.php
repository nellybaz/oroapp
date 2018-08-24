<?php

/* OroCaseBundle:CaseMailboxProcessSettings:searchResult.html.twig */
class __TwigTemplate_253ae51916ab5f530c64b87ffe0c092ff35330dd81a3ec1ad8f6ac4927f81b1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroCaseBundle:CaseMailboxProcessSettings:searchResult.html.twig", 6);
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
        $context["recordUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_mailbox_update", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "mailbox", array()), "id", array())));
        // line 11
        $context["title"] = $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "mailbox", array()), "label", array());
        // line 13
        $context["entityType"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.case.casemailboxprocesssettings.entity_label");
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroCaseBundle:CaseMailboxProcessSettings:searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  30 => 13,  28 => 11,  26 => 10,  24 => 8,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCaseBundle:CaseMailboxProcessSettings:searchResult.html.twig", "");
    }
}

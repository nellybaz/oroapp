<?php

/* OroContactBundle:Dashboard:contactsLaunchpad.html.twig */
class __TwigTemplate_fc498bfb2348a39a5299a069b5e75646f1ab4e58e607a306e0f883f09a47ab3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:launchpad.html.twig", "OroContactBundle:Dashboard:contactsLaunchpad.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:launchpad.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["widgetName"] = "contacts_launchpad";
        // line 4
        $context["widgetLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.entity_plural_label");
        // line 5
        $context["widgetIcon"] = "users";
        // line 6
        $context["widgetAcl"] = "oro_contact_view";
        // line 8
        $context["items"] = array("index" => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.list"), "route" => "oro_contact_index", "acl" => "oro_contact_view"), "create" => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.entity_label"))), "route" => "oro_contact_create", "acl" => "oro_contact_create"), "group" => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.contact.group.manage"), "route" => "oro_contact_group_index", "acl" => "oro_contact_group_view"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroContactBundle:Dashboard:contactsLaunchpad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,  32 => 8,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroContactBundle:Dashboard:contactsLaunchpad.html.twig", "");
    }
}

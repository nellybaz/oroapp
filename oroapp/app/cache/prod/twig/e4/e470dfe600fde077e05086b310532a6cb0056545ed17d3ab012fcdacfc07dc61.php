<?php

/* OroMailChimpBundle:MailChimp:marketingListSyncStatus.html.twig */
class __TwigTemplate_ac77f2bd1121572a8153585a354d4e5c1a62ed1c36607dfdd6b59efa121ce5d2 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMailChimpBundle:MailChimp:marketingListSyncStatus.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\" xmlns=\"http://www.w3.org/1999/html\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            <div class=\"control-group\">
                ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.syncstatus.list_is_connected.lebel", array("%segment%" => (("<strong>" . $this->getAttribute(        // line 8
($context["static_segment"] ?? null), "name", array())) . "</strong>"), "%list%" => (("<strong>" . $this->getAttribute($this->getAttribute(        // line 9
($context["static_segment"] ?? null), "subscribersList", array()), "name", array())) . "</strong>"), "%synced%" => (("<strong>" . _twig_default_filter($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(        // line 11
($context["static_segment"] ?? null), "lastSynced", array())), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))) . "</strong>"), "%status%" => (("<strong>" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.mailchimp.syncstatus." . $this->getAttribute(        // line 14
($context["static_segment"] ?? null), "syncStatus", array())))) . "</strong>")));
        // line 17
        echo "
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMailChimpBundle:MailChimp:marketingListSyncStatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 17,  32 => 14,  31 => 11,  30 => 9,  29 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMailChimpBundle:MailChimp:marketingListSyncStatus.html.twig", "");
    }
}

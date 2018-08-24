<?php

/* OroMailChimpBundle:MailChimp:emailCampaignActivityUpdateButtons.html.twig */
class __TwigTemplate_941ebd4a605b5540750b6a0ec41a1dc9a346994c185c1b88bb082ecde85399c7 extends Twig_Template
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
        if (($this->getAttribute(($context["campaign"] ?? null), "activityUpdateState", array()) != "expired")) {
            // line 2
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMailChimpBundle:MailChimp:emailCampaignActivityUpdateButtons.html.twig", 2);
            // line 3
            echo "    ";
            if (($this->getAttribute(($context["campaign"] ?? null), "activityUpdateState", array()) == "enabled")) {
                // line 4
                echo "        ";
                echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_mailchimp_email_campaign_activity_update_toggle", array("id" => $this->getAttribute(                // line 5
($context["emailCampaign"] ?? null), "id", array()))), "aCss" => "no-hash btn", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.emailcampaign.stop_receiving_activities.label"), "iCss" => "fa-power-off", "dataAttributes" => array("page-component-module" => "oromailchimp/js/app/components/activities-toggle-btn-component")));
                // line 12
                echo "
    ";
            } else {
                // line 14
                echo "        ";
                echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_mailchimp_email_campaign_activity_update_toggle", array("id" => $this->getAttribute(                // line 15
($context["emailCampaign"] ?? null), "id", array()))), "aCss" => "no-hash btn", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.emailcampaign.start_receive_activities.label"), "iCss" => "fa-check", "dataAttributes" => array("page-component-module" => "oromailchimp/js/app/components/activities-toggle-btn-component")));
                // line 22
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "OroMailChimpBundle:MailChimp:emailCampaignActivityUpdateButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 22,  37 => 15,  35 => 14,  31 => 12,  29 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMailChimpBundle:MailChimp:emailCampaignActivityUpdateButtons.html.twig", "");
    }
}

<?php

/* OroCampaignBundle:EmailCampaign/widget:view.html.twig */
class __TwigTemplate_a483b20c0ade70194601eeebfcba35b29fedd592fc3c079a1eb2d9737e637ab5 extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCampaignBundle:EmailCampaign/widget:view.html.twig", 1);
        // line 2
        $context["email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroCampaignBundle:EmailCampaign/widget:view.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        echo "
            ";
        // line 8
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.sender_email.label"), $this->getAttribute(($context["entity"] ?? null), "senderEmail", array()));
        echo "
            ";
        // line 9
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.sender_name.label"), $this->getAttribute(($context["entity"] ?? null), "senderName", array()));
        echo "
            ";
        // line 10
        echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.schedule.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.campaign.emailcampaign.schedule." . $this->getAttribute(($context["entity"] ?? null), "schedule", array()))));
        echo "

            ";
        // line 12
        if (($this->getAttribute(($context["entity"] ?? null), "schedule", array()) == twig_constant("Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign::SCHEDULE_DEFERRED"))) {
            // line 13
            echo "                ";
            echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.scheduled_for.label"), (($this->getAttribute(($context["entity"] ?? null), "scheduledFor", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "scheduledFor", array()))) : ("")));
            echo "
            ";
        }
        // line 15
        echo "
            ";
        // line 16
        if ($this->getAttribute(($context["entity"] ?? null), "sent", array())) {
            // line 17
            echo "                ";
            echo $context["ui"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.sent_at.label"), (($this->getAttribute(($context["entity"] ?? null), "sentAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "sentAt", array()))) : ("")));
            echo "
            ";
        }
        // line 20
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "campaign", array()))) {
            // line 21
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_campaign_view")) {
                // line 22
                $context["campaignView"] = (((("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_campaign_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "campaign", array()), "id", array())))) . "\">") . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "campaign", array()), "name", array()))) . "</a>");
            } else {
                // line 24
                $context["campaignView"] = twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "campaign", array()), "name", array()));
            }
            // line 26
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.campaign.label"), ($context["campaignView"] ?? null));
        }
        // line 29
        if (($this->getAttribute(($context["entity"] ?? null), "marketingList", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_marketing_list_view"))) {
            // line 30
            $context["marketingListView"] = (((("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_marketing_list_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "marketingList", array()), "id", array())))) . "\">") . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "marketingList", array()), "name", array()))) . "</a>");
        } elseif ($this->getAttribute(        // line 31
($context["entity"] ?? null), "marketingList", array())) {
            // line 32
            $context["marketingListView"] = twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "marketingList", array()), "name", array()));
        }
        // line 35
        if (array_key_exists("marketingListView", $context)) {
            // line 36
            echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.marketing_list.label"), ($context["marketingListView"] ?? null));
        }
        // line 39
        echo $context["ui"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.description.label"), $this->env->getExtension('Oro\Bundle\UIBundle\Twig\HtmlTagExtension')->htmlSanitize($this->getAttribute(($context["entity"] ?? null), "description", array())));
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCampaignBundle:EmailCampaign/widget:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  89 => 36,  87 => 35,  84 => 32,  82 => 31,  80 => 30,  78 => 29,  75 => 26,  72 => 24,  69 => 22,  67 => 21,  65 => 20,  59 => 17,  57 => 16,  54 => 15,  48 => 13,  46 => 12,  41 => 10,  37 => 9,  33 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCampaignBundle:EmailCampaign/widget:view.html.twig", "");
    }
}

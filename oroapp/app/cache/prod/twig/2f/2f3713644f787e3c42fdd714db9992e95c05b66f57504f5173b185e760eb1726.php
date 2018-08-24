<?php

/* OroMailChimpBundle:MailChimp:emailCampaignStats.html.twig */
class __TwigTemplate_85ddb64569e1b7e5926881c6b570d667990669c37402953a2f95018b9fbe3e3c extends Twig_Template
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
        $context["ui"] = $this->loadTemplate("OroMailChimpBundle::macros.html.twig", "OroMailChimpBundle:MailChimp:emailCampaignStats.html.twig", 1);
        // line 2
        $context["platform"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroMailChimpBundle:MailChimp:emailCampaignStats.html.twig", 2);
        // line 3
        echo "
<div class=\"row-fluid\">
    <h5 class=\"user-fieldset\">
        <span>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.emailcampaign.statistics.label"), "html", null, true);
        echo "</span>
    </h5>

    ";
        // line 9
        echo $context["platform"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.campaign.entity_label"), $this->getAttribute(($context["campaignStats"] ?? null), "subject", array()));
        echo "
    ";
        // line 10
        echo $context["platform"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.emailcampaign.activity_update_state.label"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("oro.mailchimp.emailcampaign.activity_update_state." . $this->getAttribute(        // line 12
($context["campaignStats"] ?? null), "activityUpdateState", array()))));
        // line 13
        echo "
</div>

<div class=\"row-fluid row-fluid-divider form-horizontal\">
    <div class=\"responsive-cell\">
        <div class=\"responsive-block\">
            <strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.emailcampaign.positive.label"), "html", null, true);
        echo "</strong>

            ";
        // line 21
        echo $context["ui"]->getrenderAttributeWithTooltip("oro.mailchimp.emailcampaign.emailsSent.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(        // line 23
($context["campaignStats"] ?? null), "emailsSent", array())), "oro.mailchimp.emailcampaign.emailsSent.tooltip");
        // line 25
        echo "
            ";
        // line 26
        echo $context["ui"]->getrenderAttributeWithTooltip("oro.mailchimp.emailcampaign.opens.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(        // line 28
($context["campaignStats"] ?? null), "opens", array())), "oro.mailchimp.emailcampaign.opens.tooltip");
        // line 30
        echo "
            ";
        // line 31
        echo $context["ui"]->getrenderAttributeWithTooltip("oro.mailchimp.emailcampaign.clicks.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(        // line 33
($context["campaignStats"] ?? null), "clicks", array())), "oro.mailchimp.emailcampaign.clicks.tooltip");
        // line 35
        echo "
            ";
        // line 36
        echo $context["ui"]->getrenderAttributeWithTooltip("oro.mailchimp.emailcampaign.forwards.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(        // line 38
($context["campaignStats"] ?? null), "forwards", array())), "oro.mailchimp.emailcampaign.forwards.tooltip");
        // line 40
        echo "
        </div>
    </div>

    <div class=\"responsive-cell\">
        <div class=\"responsive-block\">
            <strong>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.mailchimp.emailcampaign.negative.label"), "html", null, true);
        echo "</strong>

            ";
        // line 48
        echo $context["ui"]->getrenderAttributeWithTooltip("oro.mailchimp.emailcampaign.hardBounces.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(        // line 50
($context["campaignStats"] ?? null), "hardBounces", array())), "oro.mailchimp.emailcampaign.hardBounces.tooltip");
        // line 52
        echo "
            ";
        // line 53
        echo $context["ui"]->getrenderAttributeWithTooltip("oro.mailchimp.emailcampaign.softBounces.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(        // line 55
($context["campaignStats"] ?? null), "softBounces", array())), "oro.mailchimp.emailcampaign.softBounces.tooltip");
        // line 57
        echo "
            ";
        // line 58
        echo $context["ui"]->getrenderAttributeWithTooltip("oro.mailchimp.emailcampaign.unsubscribes.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(        // line 60
($context["campaignStats"] ?? null), "unsubscribes", array())), "oro.mailchimp.emailcampaign.unsubscribes.tooltip");
        // line 62
        echo "
            ";
        // line 63
        echo $context["ui"]->getrenderAttributeWithTooltip("oro.mailchimp.emailcampaign.abuseReports.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(        // line 65
($context["campaignStats"] ?? null), "abuseReports", array())), "oro.mailchimp.emailcampaign.abuseReports.tooltip");
        // line 67
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroMailChimpBundle:MailChimp:emailCampaignStats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 67,  107 => 65,  106 => 63,  103 => 62,  101 => 60,  100 => 58,  97 => 57,  95 => 55,  94 => 53,  91 => 52,  89 => 50,  88 => 48,  83 => 46,  75 => 40,  73 => 38,  72 => 36,  69 => 35,  67 => 33,  66 => 31,  63 => 30,  61 => 28,  60 => 26,  57 => 25,  55 => 23,  54 => 21,  49 => 19,  41 => 13,  39 => 12,  38 => 10,  34 => 9,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMailChimpBundle:MailChimp:emailCampaignStats.html.twig", "");
    }
}

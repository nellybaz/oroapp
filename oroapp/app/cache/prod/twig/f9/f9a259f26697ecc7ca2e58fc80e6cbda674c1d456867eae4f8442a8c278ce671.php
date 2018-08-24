<?php

/* OroDotmailerBundle:Dotmailer:emailCampaignStats.html.twig */
class __TwigTemplate_64010422f389c0e66231edbccab024956388b168de1f8bbe0c993993bfb23c46 extends Twig_Template
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
        if ( !twig_test_empty(($context["campaignStats"] ?? null))) {
            // line 2
            echo "    ";
            $context["ui"] = $this->loadTemplate("OroDotmailerBundle::macros.html.twig", "OroDotmailerBundle:Dotmailer:emailCampaignStats.html.twig", 2);
            // line 3
            echo "
    <div class=\"row-fluid\">
        <h5 class=\"user-fieldset\">
            <span>";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.emailcampaign.statistics.label"), "html", null, true);
            echo "</span>
        </h5>
    </div>

    <div class=\"row-fluid row-fluid-divider form-horizontal\">
        <div class=\"responsive-cell\">
            <div class=\"responsive-block\">
                <strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.emailcampaign.positive.label"), "html", null, true);
            echo "</strong>

                ";
            // line 15
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.emailsSent.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(            // line 17
($context["campaignStats"] ?? null), "numTotalSent", array())), "oro.dotmailer.emailcampaign.emailsSent.tooltip");
            // line 19
            echo "

                ";
            // line 21
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.totalDelivered.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(            // line 23
($context["campaignStats"] ?? null), "numTotalDelivered", array())), "oro.dotmailer.emailcampaign.totalDelivered.tooltip");
            // line 25
            echo "
                ";
            // line 26
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.percentageDelivered.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(            // line 28
($context["campaignStats"] ?? null), "percentageDelivered", array())), "oro.dotmailer.emailcampaign.percentageDelivered.tooltip");
            // line 30
            echo "

                <h5>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.emailcampaign.engagement.label"), "html", null, true);
            echo "</h5>
                ";
            // line 33
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.opens.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(            // line 35
($context["campaignStats"] ?? null), "numTotalOpens", array())), "oro.dotmailer.emailcampaign.opens.tooltip");
            // line 37
            echo "
                ";
            // line 38
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.unique_opens.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(            // line 40
($context["campaignStats"] ?? null), "numTotalUniqueOpens", array())), "oro.dotmailer.emailcampaign.unique_opens.tooltip");
            // line 42
            echo "
                ";
            // line 43
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.percentageUniqueOpens.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(            // line 45
($context["campaignStats"] ?? null), "percentageUniqueOpens", array())), "oro.dotmailer.emailcampaign.percentageUniqueOpens.tooltip");
            // line 47
            echo "
                ";
            // line 48
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.estimatedForwards.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(            // line 50
($context["campaignStats"] ?? null), "numTotalEstimatedForwards", array())), "oro.dotmailer.emailcampaign.estimatedForwards.tooltip");
            // line 52
            echo "

                <h5>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.emailcampaign.interaction.label"), "html", null, true);
            echo "</h5>
                ";
            // line 55
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.user_clicks.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(            // line 57
($context["campaignStats"] ?? null), "numRecipientsClicked", array())), "oro.dotmailer.emailcampaign.user_clicks.tooltip");
            // line 59
            echo "
                ";
            // line 60
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.user_clicks_percentage.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(            // line 62
($context["campaignStats"] ?? null), "percentageUsersClicked", array())), "oro.dotmailer.emailcampaign.user_clicks_percentage.tooltip");
            // line 64
            echo "
                ";
            // line 65
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.clicks.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(            // line 67
($context["campaignStats"] ?? null), "numTotalClicks", array())), "oro.dotmailer.emailcampaign.clicks.tooltip");
            // line 69
            echo "
                ";
            // line 70
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.click_to_open.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(            // line 72
($context["campaignStats"] ?? null), "percentageClicksToOpens", array())), "oro.dotmailer.emailcampaign.click_to_open.tooltip");
            // line 74
            echo "
                ";
            // line 75
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.page_views.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(            // line 77
($context["campaignStats"] ?? null), "numTotalPageViews", array())), "oro.dotmailer.emailcampaign.page_views.tooltip");
            // line 79
            echo "
                ";
            // line 80
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.total_replies.label", $this->getAttribute(            // line 82
($context["campaignStats"] ?? null), "numTotalReplies", array()), "oro.dotmailer.emailcampaign.total_replies.tooltip");
            // line 84
            echo "
                ";
            // line 85
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.replies_percentage.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(            // line 87
($context["campaignStats"] ?? null), "percentageReplies", array())), "oro.dotmailer.emailcampaign.replies_percentage.tooltip");
            // line 89
            echo "

                ";
            // line 91
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.forwards.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(            // line 93
($context["campaignStats"] ?? null), "numForwards", array())), "oro.dotmailer.emailcampaign.forwards.tooltip");
            // line 95
            echo "
            </div>
        </div>

        <div class=\"responsive-cell\">
            <div class=\"responsive-block\">
                <strong>";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dotmailer.emailcampaign.negative.label"), "html", null, true);
            echo "</strong>

                ";
            // line 103
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.hardBounces.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(            // line 105
($context["campaignStats"] ?? null), "numTotalHardBounces", array())), "oro.dotmailer.emailcampaign.hardBounces.tooltip");
            // line 107
            echo "
                ";
            // line 108
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.hardBouncesPercentage.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(            // line 110
($context["campaignStats"] ?? null), "percentageHardBounces", array())), "oro.dotmailer.emailcampaign.hardBouncesPercentage.tooltip");
            // line 112
            echo "

                ";
            // line 114
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.softBounces.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(            // line 116
($context["campaignStats"] ?? null), "numTotalSoftBounces", array())), "oro.dotmailer.emailcampaign.softBounces.tooltip");
            // line 118
            echo "
                ";
            // line 119
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.softBouncesPercentage.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(            // line 121
($context["campaignStats"] ?? null), "percentageSoftBounces", array())), "oro.dotmailer.emailcampaign.softBouncesPercentage.tooltip");
            // line 123
            echo "

                ";
            // line 125
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.unsubscribes.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(            // line 127
($context["campaignStats"] ?? null), "numTotalUnsubscribes", array())), "oro.dotmailer.emailcampaign.unsubscribes.tooltip");
            // line 129
            echo "
                ";
            // line 130
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.unsubscribesPercentage.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatPercent($this->getAttribute(            // line 132
($context["campaignStats"] ?? null), "percentageUnsubscribes", array())), "oro.dotmailer.emailcampaign.unsubscribesPercentage.tooltip");
            // line 134
            echo "

                ";
            // line 136
            echo $context["ui"]->getrenderAttributeWithTooltip("oro.dotmailer.emailcampaign.isp_complaints.label", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatDecimal($this->getAttribute(            // line 138
($context["campaignStats"] ?? null), "numTotalIspComplaints", array())), "oro.dotmailer.emailcampaign.isp_complaints.tooltip");
            // line 140
            echo "
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroDotmailerBundle:Dotmailer:emailCampaignStats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 140,  196 => 138,  195 => 136,  191 => 134,  189 => 132,  188 => 130,  185 => 129,  183 => 127,  182 => 125,  178 => 123,  176 => 121,  175 => 119,  172 => 118,  170 => 116,  169 => 114,  165 => 112,  163 => 110,  162 => 108,  159 => 107,  157 => 105,  156 => 103,  151 => 101,  143 => 95,  141 => 93,  140 => 91,  136 => 89,  134 => 87,  133 => 85,  130 => 84,  128 => 82,  127 => 80,  124 => 79,  122 => 77,  121 => 75,  118 => 74,  116 => 72,  115 => 70,  112 => 69,  110 => 67,  109 => 65,  106 => 64,  104 => 62,  103 => 60,  100 => 59,  98 => 57,  97 => 55,  93 => 54,  89 => 52,  87 => 50,  86 => 48,  83 => 47,  81 => 45,  80 => 43,  77 => 42,  75 => 40,  74 => 38,  71 => 37,  69 => 35,  68 => 33,  64 => 32,  60 => 30,  58 => 28,  57 => 26,  54 => 25,  52 => 23,  51 => 21,  47 => 19,  45 => 17,  44 => 15,  39 => 13,  29 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDotmailerBundle:Dotmailer:emailCampaignStats.html.twig", "");
    }
}

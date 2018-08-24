<?php

/* OroCampaignBundle:Campaign:view.html.twig */
class __TwigTemplate_57d236bfbff952f1613000c86eef1dfb39d2559f2574f612791ab358d6e1e207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCampaignBundle:Campaign:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCampaignBundle:Campaign:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.name%" => (($this->getAttribute(        // line 4
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_campaign_update", array("id" => $this->getAttribute(            // line 9
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.entity_label"))), "method"), "html", null, true);
            // line 11
            echo "
    ";
        }
        // line 13
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_navButtons", $context)) ? (_twig_default_filter(($context["update_navButtons"] ?? null), "update_navButtons")) : ("update_navButtons")), array("entity" => ($context["entity"] ?? null)));
    }

    // line 16
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 18
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_campaign_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 21
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")));
        // line 23
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block_stats($context, array $blocks = array())
    {
        // line 27
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "createdAt", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "createdAt", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.start_date.label"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "startDate", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "startDate", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.end_date.label"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "endDate", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute($this->getAttribute(($context["breadcrumbs"] ?? null), "entity", array()), "endDate", array()))) : ("N/A"));
        echo "</li>
";
    }

    // line 32
    public function block_content_data($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        ";
        $this->loadTemplate("OroCampaignBundle:Campaign:widget/view.html.twig", "OroCampaignBundle:Campaign:view.html.twig", 34)->display($context);
        // line 35
        echo "    ";
        $context["campaignInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        echo "
    ";
        // line 37
        ob_start();
        // line 38
        echo "        ";
        $context["trackingTotalGrid"] = "campaign-tracking-total-report-grid";
        // line 39
        echo "        ";
        if ( !($this->getAttribute(($context["entity"] ?? null), "reportPeriod", array()) === constant("Oro\\Bundle\\CampaignBundle\\Entity\\Campaign::PERIOD_HOURLY"))) {
            // line 40
            echo "            ";
            $context["trackingTotalGrid"] = (($context["trackingTotalGrid"] ?? null) . "-precalculated");
            // line 41
            echo "        ";
        }
        // line 42
        echo "        ";
        echo $context["dataGrid"]->getrenderGrid(($context["trackingTotalGrid"] ?? null), array("campaign" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        echo "
    ";
        $context["trackingEventsReport"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 44
        echo "
    ";
        // line 45
        ob_start();
        // line 46
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_campaign_event_plot", array("period" => $this->getAttribute(        // line 51
($context["entity"] ?? null), "reportPeriod", array()), "campaign" => $this->getAttribute(        // line 52
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.block.detailed_report")));
        // line 56
        echo "
    ";
        $context["trackingPlot"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 58
        echo "
    ";
        // line 59
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.block.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 64
($context["campaignInformationWidget"] ?? null))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.block.events"), "subblocks" => array(0 => array("data" => array(0 =>         // line 71
($context["trackingPlot"] ?? null), 1 =>         // line 72
($context["trackingEventsReport"] ?? null))))), 2 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.tracking_code.label"), "subblocks" => array(0 => array("data" => array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.tracking_code.info", array("%campaignCode%" => twig_escape_filter($this->env, $this->getAttribute(        // line 80
($context["entity"] ?? null), "code", array())))))))));
        // line 86
        ob_start();
        // line 87
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_content_data_marketing_activities_summary", $context)) ? (_twig_default_filter(($context["view_content_data_marketing_activities_summary"] ?? null), "view_content_data_marketing_activities_summary")) : ("view_content_data_marketing_activities_summary")), array("campaignId" => $this->getAttribute(($context["entity"] ?? null), "id", array())));
        $context["marketingActivitiesSummary"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 90
        if ( !twig_test_empty(($context["marketingActivitiesSummary"] ?? null))) {
            // line 91
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.marketingactivity.summary.label"), "priority" => 1000, "subblocks" => array(0 => array("spanClass" => "empty", "data" => array(0 =>             // line 97
($context["marketingActivitiesSummary"] ?? null)))))));
            // line 101
            echo "    ";
        }
        // line 102
        echo "
    ";
        // line 103
        $context["id"] = "campaignView";
        // line 104
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 105
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCampaignBundle:Campaign:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 105,  172 => 104,  170 => 103,  167 => 102,  164 => 101,  162 => 97,  160 => 91,  158 => 90,  155 => 87,  153 => 86,  151 => 80,  150 => 72,  149 => 71,  148 => 64,  147 => 59,  144 => 58,  140 => 56,  138 => 52,  137 => 51,  135 => 46,  133 => 45,  130 => 44,  124 => 42,  121 => 41,  118 => 40,  115 => 39,  112 => 38,  110 => 37,  107 => 36,  104 => 35,  101 => 34,  98 => 33,  95 => 32,  87 => 29,  81 => 28,  74 => 27,  71 => 26,  64 => 23,  62 => 21,  61 => 18,  59 => 17,  56 => 16,  51 => 13,  47 => 11,  45 => 9,  43 => 8,  40 => 7,  37 => 6,  33 => 1,  31 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCampaignBundle:Campaign:view.html.twig", "");
    }
}

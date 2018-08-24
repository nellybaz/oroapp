<?php

/* OroCampaignBundle:EmailCampaign:view.html.twig */
class __TwigTemplate_e9b089156a8fe8bb16d93f2aab0cc80f43f1b6acc5fdda60b1c12c559f7bd980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCampaignBundle:EmailCampaign:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCampaignBundle:EmailCampaign:view.html.twig", 2);

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
        if (($context["send_allowed"] ?? null)) {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_campaign_send", array("id" => $this->getAttribute(            // line 9
($context["entity"] ?? null), "id", array()))), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.send"), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.send"), "iCss" => "fa-envelope")), "method"), "html", null, true);
            // line 13
            echo "
    ";
        }
        // line 15
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "editButton", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_campaign_update", array("id" => $this->getAttribute(            // line 17
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.entity_label"))), "method"), "html", null, true);
            // line 19
            echo "
    ";
        }
        // line 21
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_navButtons", $context)) ? (_twig_default_filter(($context["update_navButtons"] ?? null), "update_navButtons")) : ("update_navButtons")), array("entity" => ($context["entity"] ?? null)));
    }

    // line 24
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 26
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_campaign_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 29
($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), "N/A")) : ("N/A")));
        // line 31
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 34
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"status-enabled pull-left\">
        ";
        // line 37
        if ($this->getAttribute(($context["entity"] ?? null), "sent", array())) {
            // line 38
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.status.sent"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 40
            echo "            <div class=\"badge badge-disabled status-disabled\"><i class=\"icon-status-disabled fa-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.status.not_sent"), "html", null, true);
            echo "</div>
        ";
        }
        // line 42
        echo "    </div>
";
    }

    // line 45
    public function block_content_data($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        ob_start();
        // line 47
        echo "        ";
        $this->loadTemplate("OroCampaignBundle:EmailCampaign:widget/view.html.twig", "OroCampaignBundle:EmailCampaign:view.html.twig", 47)->display($context);
        // line 48
        echo "    ";
        $context["campaignInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 50
        ob_start();
        // line 51
        if (($context["show_stats"] ?? null)) {
            // line 52
            echo "            ";
            $this->loadTemplate("OroCampaignBundle:EmailCampaign:widget/stats.html.twig", "OroCampaignBundle:EmailCampaign:view.html.twig", 52)->display($context);
            // line 53
            echo "        ";
        }
        $context["emailCampaignStatisticsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 56
        ob_start();
        // line 57
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("view_content_data_email_campaign_status", $context)) ? (_twig_default_filter(($context["view_content_data_email_campaign_status"] ?? null), "view_content_data_email_campaign_status")) : ("view_content_data_email_campaign_status")), array("entity" => ($context["entity"] ?? null)));
        $context["emailCampaignStatusData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        ob_start();
        // line 61
        if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "marketingList", array()))) {
            // line 62
            echo "            ";
            echo $context["dataGrid"]->getrenderGrid((twig_constant("Oro\\Bundle\\MarketingListBundle\\Datagrid\\ConfigurationProvider::GRID_PREFIX") . $this->getAttribute($this->getAttribute(            // line 63
($context["entity"] ?? null), "marketingList", array()), "id", array())), array("emailCampaign" => $this->getAttribute(            // line 65
($context["entity"] ?? null), "id", array())));
            // line 67
            echo "
        ";
        }
        $context["listData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 71
        $context["generalSectionSubblocks"] = array(0 => array("data" => array(0 => ($context["campaignInformationWidget"] ?? null))));
        // line 72
        echo "    ";
        if ( !twig_test_empty(($context["emailCampaignStatisticsData"] ?? null))) {
            // line 73
            echo "        ";
            $context["generalSectionSubblocks"] = twig_array_merge(($context["generalSectionSubblocks"] ?? null), array(0 => array("data" => array(0 =>             // line 74
($context["emailCampaignStatisticsData"] ?? null)), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaignstatistics.block.label"))));
            // line 77
            echo "    ";
        }
        // line 78
        echo "
    ";
        // line 79
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.block.general"), "class" => "active", "subblocks" =>         // line 83
($context["generalSectionSubblocks"] ?? null)));
        // line 86
        echo "    ";
        if ( !twig_test_empty(($context["emailCampaignStatusData"] ?? null))) {
            // line 87
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.block.status"), "subblocks" => array(0 => array("data" => array(0 =>             // line 90
($context["emailCampaignStatusData"] ?? null)))))));
            // line 94
            echo "    ";
        }
        // line 95
        echo "    ";
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.block.recipients"), "subblocks" => array(0 => array("spanClass" => "empty", "data" => array(0 =>         // line 100
($context["listData"] ?? null)))))));
        // line 104
        echo "
    ";
        // line 105
        $context["id"] = "emailCampaignView";
        // line 106
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 107
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCampaignBundle:EmailCampaign:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 107,  189 => 106,  187 => 105,  184 => 104,  182 => 100,  180 => 95,  177 => 94,  175 => 90,  173 => 87,  170 => 86,  168 => 83,  167 => 79,  164 => 78,  161 => 77,  159 => 74,  157 => 73,  154 => 72,  152 => 71,  147 => 67,  145 => 65,  144 => 63,  142 => 62,  140 => 61,  138 => 60,  135 => 57,  133 => 56,  129 => 53,  126 => 52,  124 => 51,  122 => 50,  119 => 48,  116 => 47,  113 => 46,  110 => 45,  105 => 42,  99 => 40,  93 => 38,  91 => 37,  85 => 35,  82 => 34,  75 => 31,  73 => 29,  72 => 26,  70 => 25,  67 => 24,  62 => 21,  58 => 19,  56 => 17,  54 => 16,  51 => 15,  47 => 13,  45 => 9,  43 => 8,  40 => 7,  37 => 6,  33 => 1,  31 => 4,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCampaignBundle:EmailCampaign:view.html.twig", "");
    }
}

<?php

/* OroCampaignBundle:EmailCampaign:update.html.twig */
class __TwigTemplate_a75411994ef1eaae54123b107e061dcf0100c1521369369dded89c16141cf295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCampaignBundle:EmailCampaign:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "OroFormBundle:Form:fields.html.twig"));
        // line 4
        $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array());

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.name%" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "name", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.entity_label"))));
        // line 6
        $context["formAction"] = ((($context["entityId"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_campaign_update", array("id" => ($context["entityId"] ?? null)))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_campaign_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("update_navButtons", $context)) ? (_twig_default_filter(($context["update_navButtons"] ?? null), "update_navButtons")) : ("update_navButtons")), array("entity" => ($context["entity"] ?? null)));
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_campaign_index")), "method"), "html", null, true);
        echo "
    ";
        // line 11
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_email_campaign_view", "params" => array("id" => "\$id"))), "method");
        // line 15
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_campaign_create")) {
            // line 16
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_email_campaign_create")), "method"));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_email_campaign_update"))) {
            // line 21
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_email_campaign_update", "params" => array("id" => "\$id"))), "method"));
            // line 25
            echo "    ";
        }
        // line 26
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
";
    }

    // line 29
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 31
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 32
($context["form"] ?? null), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_email_campaign_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.entity_plural_label"), "entityTitle" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 35
($context["form"] ?? null), "vars", array()), "value", array()), "name", array()));
            // line 37
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 39
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.entity_label")));
            // line 40
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroCampaignBundle:EmailCampaign:update.html.twig", 40)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 41
            echo "    ";
        }
    }

    // line 44
    public function block_content_data($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        $context["id"] = "oro_email_campaign_form-profile";
        // line 46
        echo "
    ";
        // line 47
        $context["transportFormData"] = array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "transport", array()), 'row'));
        // line 48
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "transportSettings", array(), "any", true, true)) {
            // line 49
            echo "        ";
            $context["transportFormData"] = twig_array_merge(($context["transportFormData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "transportSettings", array()), 'widget')));
            // line 50
            echo "    ";
        }
        // line 51
        echo "
    ";
        // line 52
        $context["hideScheduleFor"] = "";
        // line 53
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "schedule", array()) != twig_constant("Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign::SCHEDULE_DEFERRED"))) {
            // line 54
            echo "        ";
            $context["hideScheduleFor"] = "hide";
            // line 55
            echo "    ";
        }
        // line 56
        echo "
    ";
        // line 57
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.block.general"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row'), 1 =>         // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "marketingList", array()), 'row'), 2 =>         // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "schedule", array()), 'row'), 3 =>         // line 68
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "scheduledFor", array()), 'row', array("attr" => array("class" => (($context["hideScheduleFor"] ?? null) . " scheduledFor")))), 4 =>         // line 69
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "senderEmail", array()), 'row'), 5 =>         // line 70
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "senderName", array()), 'row'), 6 =>         // line 71
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "campaign", array()), 'row'), 7 =>         // line 72
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row'))))), 1 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.campaign.emailcampaign.block.email_settings"), "subblocks" => array(0 => array("title" => "", "data" =>         // line 82
($context["transportFormData"] ?? null)))));
        // line 87
        echo "
    ";
        // line 88
        $context["data"] = array("formErrors" => ((        // line 90
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 91
($context["dataBlocks"] ?? null));
        // line 94
        echo "
    ";
        // line 95
        $context["componentOptions"] = array("scheduleEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 96
($context["form"] ?? null), "schedule", array()), "vars", array()), "id", array())), "scheduledForEl" => ".scheduledFor", "transportEl" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 98
($context["form"] ?? null), "transport", array()), "vars", array()), "id", array())), "hideOn" => array(0 => twig_constant("Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign::SCHEDULE_MANUAL")), "showOn" => array(0 => twig_constant("Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign::SCHEDULE_DEFERRED")));
        // line 102
        echo "    <div data-page-component-module=\"orocampaign/js/app/components/email-campaign-form\"
         data-page-component-options=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["componentOptions"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 104
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroCampaignBundle:EmailCampaign:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 104,  171 => 103,  168 => 102,  166 => 98,  165 => 96,  164 => 95,  161 => 94,  159 => 91,  158 => 90,  157 => 88,  154 => 87,  152 => 82,  151 => 72,  150 => 71,  149 => 70,  148 => 69,  147 => 68,  146 => 67,  145 => 66,  144 => 65,  143 => 57,  140 => 56,  137 => 55,  134 => 54,  131 => 53,  129 => 52,  126 => 51,  123 => 50,  120 => 49,  117 => 48,  115 => 47,  112 => 46,  109 => 45,  106 => 44,  101 => 41,  98 => 40,  95 => 39,  89 => 37,  87 => 35,  86 => 32,  84 => 31,  81 => 30,  78 => 29,  71 => 26,  68 => 25,  65 => 21,  62 => 20,  59 => 19,  56 => 16,  53 => 15,  51 => 11,  46 => 10,  43 => 9,  40 => 8,  36 => 1,  34 => 6,  32 => 5,  29 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCampaignBundle:EmailCampaign:update.html.twig", "");
    }
}

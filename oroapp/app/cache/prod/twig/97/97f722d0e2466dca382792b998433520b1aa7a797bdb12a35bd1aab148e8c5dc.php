<?php

/* OroCalendarBundle:CalendarEvent:view.html.twig */
class __TwigTemplate_48da8258b7917b5c76d6e0abd5e2a7baeec3cefea0e3edcf1d9871e7ce3c9202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCalendarBundle:CalendarEvent:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'stats' => array($this, 'block_stats'),
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle:CalendarEvent:view.html.twig", 2);
        // line 3
        $context["CalendarUI"] = $this->loadTemplate("OroCalendarBundle::macros.html.twig", "OroCalendarBundle:CalendarEvent:view.html.twig", 3);
        // line 4
        $context["invitations"] = $this->loadTemplate("OroCalendarBundle::invitations.html.twig", "OroCalendarBundle:CalendarEvent:view.html.twig", 4);
        // line 5
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroCalendarBundle:CalendarEvent:view.html.twig", 5);
        // line 6
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroCalendarBundle:CalendarEvent:view.html.twig", 6);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.title%" => (($this->getAttribute(        // line 8
($context["entity"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "title", array()), "N/A")) : ("N/A")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_navButtons($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if ((twig_test_empty($this->getAttribute(($context["entity"] ?? null), "parent", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null)))) {
            // line 12
            echo "        ";
            // line 13
            echo "        ";
            echo $context["AC"]->getaddContextButton(($context["entity"] ?? null));
            echo "
        ";
            // line 14
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_calendar_event_update", array("id" => $this->getAttribute(            // line 15
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.entity_label")));
            // line 17
            echo "
    ";
        }
        // line 19
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", ($context["entity"] ?? null))) {
            // line 20
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_calendar_event_delete", array("id" => $this->getAttribute(            // line 21
($context["entity"] ?? null), "id", array()), "notifyAttendees" => "all")), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_calendar_event_index"), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 24
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.entity_label")));
            // line 26
            echo "
    ";
        }
    }

    // line 30
    public function block_stats($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        // line 32
        echo "    <li class=\"context-data activity-context-activity-block\">
        ";
        // line 33
        echo $context["AC"]->getactivity_contexts(($context["entity"] ?? null));
        echo "
    </li>
";
    }

    // line 37
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 39
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_calendar_event_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 42
($context["entity"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "title", array()), "N/A")) : ("N/A")));
        // line 44
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 47
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"pull-left\">
        ";
        // line 50
        $context["statusCode"] = $this->getAttribute(($context["entity"] ?? null), "invitationStatus", array());
        // line 51
        echo "        ";
        $context["invitationClass"] = $context["invitations"]->getget_invitatition_badge_class(($context["statusCode"] ?? null));
        // line 52
        echo "        ";
        if (($context["invitationClass"] ?? null)) {
            // line 53
            echo "            <div class=\"invitation-status badge badge-";
            echo twig_escape_filter($this->env, ($context["invitationClass"] ?? null), "html", null, true);
            echo " status-";
            echo twig_escape_filter($this->env, ($context["invitationClass"] ?? null), "html", null, true);
            echo "\">
                <i class=\"icon-status-";
            // line 54
            echo twig_escape_filter($this->env, ($context["invitationClass"] ?? null), "html", null, true);
            echo " fa-circle\"></i>
                ";
            // line 55
            echo $context["invitations"]->getcalendar_event_invitation_status(($context["statusCode"] ?? null));
            echo "
            </div>
        ";
        }
        // line 58
        echo "    </div>
";
    }

    // line 61
    public function block_content_data($context, array $blocks = array())
    {
        // line 62
        ob_start();
        // line 63
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 65
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.title.label"), $this->getAttribute(($context["entity"] ?? null), "title", array()));
        echo "
                ";
        // line 66
        echo $context["UI"]->getrenderSwitchableHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.description.label"), $this->getAttribute(($context["entity"] ?? null), "description", array()));
        echo "
                ";
        // line 67
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.start.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "start", array())));
        echo "
                ";
        // line 68
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.end.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "end", array())));
        echo "
                ";
        // line 69
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.all_day.label"), (($this->getAttribute(($context["entity"] ?? null), "allDay", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No"))));
        echo "
                ";
        // line 70
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.organizer.label"), $context["CalendarUI"]->getrenderOrganizer(($context["entity"] ?? null)));
        echo "
                ";
        // line 71
        $context["invitationEvent"] = (($this->getAttribute(($context["entity"] ?? null), "parent", array())) ? ($this->getAttribute(($context["entity"] ?? null), "parent", array())) : (($context["entity"] ?? null)));
        // line 72
        echo "                ";
        if ((($context["invitationEvent"] ?? null) &&  !twig_test_empty($this->getAttribute(($context["invitationEvent"] ?? null), "attendees", array())))) {
            // line 73
            echo "                    ";
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.attendees.label"), $context["invitations"]->getcalendar_event_invitation(($context["invitationEvent"] ?? null)));
            echo "
                ";
        }
        // line 75
        echo "                ";
        if ($this->getAttribute(($context["entity"] ?? null), "recurrence", array())) {
            // line 76
            echo "                    ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.recurrence.label"), $this->env->getExtension('Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension')->getRecurrenceTextValue($this->getAttribute(($context["entity"] ?? null), "recurrence", array())));
            echo "
                ";
        }
        // line 78
        echo "                ";
        if ($this->getAttribute(($context["entity"] ?? null), "recurringEvent", array())) {
            // line 79
            echo "                    ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.recurrence.exception.label"), $this->env->getExtension('Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension')->getRecurrenceTextValue((($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "recurringEvent", array()), "recurrence", array())) ? ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "recurringEvent", array()), "recurrence", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "parent", array()), "recurringEvent", array()), "recurrence", array())))));
            echo "
                ";
        }
        // line 81
        echo "                ";
        if ((array_key_exists("canChangeInvitationStatus", $context) && ($context["canChangeInvitationStatus"] ?? null))) {
            // line 82
            echo "                    ";
            $this->loadTemplate("OroCalendarBundle:CalendarEvent:invitationControl.html.twig", "OroCalendarBundle:CalendarEvent:view.html.twig", 82)->display(array_merge($context, array("entity" => ($context["entity"] ?? null), "triggerEventName" => "")));
            // line 83
            echo "                ";
        }
        // line 84
        echo "            </div>
            <div class=\"responsive-block\">
                ";
        // line 86
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
            </div>
        </div>";
        $context["calendarEventInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 91
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 96
($context["calendarEventInformation"] ?? null))))));
        // line 100
        echo "
    ";
        // line 101
        $context["id"] = "calendarEventView";
        // line 102
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 103
        echo "
    ";
        // line 104
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 104,  241 => 103,  238 => 102,  236 => 101,  233 => 100,  231 => 96,  230 => 91,  224 => 86,  220 => 84,  217 => 83,  214 => 82,  211 => 81,  205 => 79,  202 => 78,  196 => 76,  193 => 75,  187 => 73,  184 => 72,  182 => 71,  178 => 70,  174 => 69,  170 => 68,  166 => 67,  162 => 66,  158 => 65,  154 => 63,  152 => 62,  149 => 61,  144 => 58,  138 => 55,  134 => 54,  127 => 53,  124 => 52,  121 => 51,  119 => 50,  113 => 48,  110 => 47,  103 => 44,  101 => 42,  100 => 39,  98 => 38,  95 => 37,  88 => 33,  85 => 32,  83 => 31,  80 => 30,  74 => 26,  72 => 24,  71 => 21,  69 => 20,  66 => 19,  62 => 17,  60 => 15,  59 => 14,  54 => 13,  52 => 12,  49 => 11,  46 => 10,  42 => 1,  40 => 8,  37 => 6,  35 => 5,  33 => 4,  31 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:CalendarEvent:view.html.twig", "");
    }
}

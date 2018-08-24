<?php

/* OroCalendarBundle:CalendarEvent:update.html.twig */
class __TwigTemplate_d343edc9cf6168972322866da6641c7d7ef3bb6638f25ff8a884cf5e03e9bcc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCalendarBundle:CalendarEvent:update.html.twig", 1);
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
        $context["invitations"] = $this->loadTemplate("OroCalendarBundle::invitations.html.twig", "OroCalendarBundle:CalendarEvent:update.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.title%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "title", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.entity_label"))));
        // line 5
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_calendar_event_view", "params" => array("id" => "\$id"))), "method");
        // line 12
        echo "
    ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_calendar_event_create")) {
            // line 14
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_calendar_event_create")), "method"));
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_calendar_event_update")) {
            // line 20
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_calendar_event_update", "params" => array("id" => "\$id"))), "method"));
            // line 24
            echo "    ";
        }
        // line 25
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
    ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_calendar_event_index")), "method"), "html", null, true);
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
            $context["breadcrumbs"] = array("entity" =>             // line 32
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_calendar_event_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.entity_plural_label"), "entityTitle" => $this->getAttribute(            // line 35
($context["entity"] ?? null), "title", array()));
            // line 37
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 39
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.entity_label")));
            // line 40
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroCalendarBundle:CalendarEvent:update.html.twig", 40)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 41
            echo "    ";
        }
    }

    // line 44
    public function block_content_data($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        $context["id"] = "calendarevent-form";
        // line 46
        echo "    ";
        $context["calendarEventDateRange"] = array("module" => "orocalendar/js/app/components/calendar-event-date-range-component", "name" => "calendar-event-date-range", "options" => array("nativeMode" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()));
        // line 53
        echo "
    ";
        // line 54
        $context["general_subblocks_data"] = array();
        // line 55
        echo "
    ";
        // line 56
        if (( !($context["entityId"] ?? null) && $this->getAttribute(($context["form"] ?? null), "calendar", array(), "any", true, true))) {
            // line 57
            echo "        ";
            $context["general_subblocks_data"] = twig_array_merge(($context["general_subblocks_data"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "calendar", array()), 'row')));
            // line 58
            echo "    ";
        }
        // line 59
        echo "
    ";
        // line 60
        $context["general_subblocks_data"] = twig_array_merge(($context["general_subblocks_data"] ?? null), array(0 =>         // line 61
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'row'), 1 =>         // line 62
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row'), 2 =>         // line 63
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "backgroundColor", array()), 'row'), 3 => (($this->getAttribute(        // line 64
($context["form"] ?? null), "calendarUid", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "calendarUid", array()), 'row')) : (null)), 4 =>         // line 65
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attendees", array()), 'row'), 5 => (((null === $this->getAttribute(        // line 66
($context["entity"] ?? null), "recurrence", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reminders", array()), 'row')) : (null)), 6 =>         // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "notifyAttendees", array()), 'row'), 7 =>         // line 68
$context["invitations"]->getnotify_attendees_component()));
        // line 70
        echo "
    ";
        // line 72
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" =>         // line 78
($context["general_subblocks_data"] ?? null)), 1 => array("title" => "", "data" => array(0 => (((((("<div " . $this->getAttribute(        // line 83
($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => ($context["calendarEventDateRange"] ?? null)), "method")) . ">") .         // line 84
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "start", array()), 'row')) .         // line 85
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "end", array()), 'row')) .         // line 86
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "allDay", array()), 'row')) . "</div>"), 1 => (($this->getAttribute(        // line 88
($context["form"] ?? null), "recurrence", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "recurrence", array()), 'row')) : (null)))))));
        // line 93
        echo "
    ";
        // line 94
        $context["additionalData"] = array();
        // line 95
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 96
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 97
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 99
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 104
($context["additionalData"] ?? null))))));
            // line 107
            echo "    ";
        }
        // line 108
        echo "
    ";
        // line 109
        $context["data"] = array("formErrors" => ((        // line 110
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 111
($context["dataBlocks"] ?? null));
        // line 113
        echo "
    ";
        // line 114
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 114,  193 => 113,  191 => 111,  190 => 110,  189 => 109,  186 => 108,  183 => 107,  181 => 104,  179 => 99,  176 => 98,  169 => 97,  166 => 96,  160 => 95,  158 => 94,  155 => 93,  153 => 88,  152 => 86,  151 => 85,  150 => 84,  149 => 83,  148 => 78,  146 => 72,  143 => 70,  141 => 68,  140 => 67,  139 => 66,  138 => 65,  137 => 64,  136 => 63,  135 => 62,  134 => 61,  133 => 60,  130 => 59,  127 => 58,  124 => 57,  122 => 56,  119 => 55,  117 => 54,  114 => 53,  111 => 46,  108 => 45,  105 => 44,  100 => 41,  97 => 40,  94 => 39,  88 => 37,  86 => 35,  85 => 32,  83 => 31,  80 => 30,  77 => 29,  71 => 26,  66 => 25,  63 => 24,  60 => 20,  58 => 19,  55 => 18,  52 => 17,  49 => 14,  47 => 13,  44 => 12,  41 => 8,  38 => 7,  34 => 1,  32 => 5,  30 => 4,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:CalendarEvent:update.html.twig", "");
    }
}

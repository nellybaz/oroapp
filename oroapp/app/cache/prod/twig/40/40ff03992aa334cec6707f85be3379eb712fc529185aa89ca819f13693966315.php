<?php

/* OroCalendarBundle:Calendar:view.html.twig */
class __TwigTemplate_97e4aac798f7ef1b4e67d241e6943d5258d7f0f7a638e5473f8bfc6ced653c03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCalendarBundle:Calendar:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
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
        $context["calendarTemplates"] = $this->loadTemplate("OroCalendarBundle::templates.html.twig", "OroCalendarBundle:Calendar:view.html.twig", 2);
        // line 4
        $context["name"] = _twig_default_filter($this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName($this->getAttribute(($context["entity"] ?? null), "owner", array())), "N/A");

        $this->env->getExtension("oro_title")->set(array("params" => array("%username%" =>         // line 5
($context["name"] ?? null), "%calendarname%" => (($this->getAttribute(($context["entity"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "name", array()), ($context["name"] ?? null))) : (($context["name"] ?? null))))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_calendar_event_view")) {
            // line 9
            echo "        <div class=\"btn-group\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "button", array(0 => array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_calendar_event_index"), "iCss" => "fa-clock-o", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.view_events"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.view_events"))), "method"), "html", null, true);
            // line 15
            echo "
        </div>
    ";
        }
    }

    // line 20
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if ( !array_key_exists("breadcrumbs", $context)) {
            // line 22
            echo "        ";
            $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.entity_label")));
            // line 23
            echo "        ";
            if ( !twig_test_empty($this->getAttribute(($context["entity"] ?? null), "name", array()))) {
                // line 24
                echo "            ";
                $context["breadcrumbs"] = twig_array_merge(($context["breadcrumbs"] ?? null), array(0 => array("label" => $this->getAttribute(($context["entity"] ?? null), "name", array()))));
                // line 25
                echo "        ";
            }
            // line 26
            echo "    ";
        }
        // line 27
        echo "    ";
        $this->loadTemplate("OroNavigationBundle:Menu:breadcrumbs.html.twig", "OroCalendarBundle:Calendar:view.html.twig", 27)->display($context);
    }

    // line 30
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"calendar-title-wrapper\">
        ";
        // line 32
        if ( !array_key_exists("breadcrumbs", $context)) {
            // line 33
            echo "            ";
            $context["breadcrumbs"] = array("entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.entity_label"));
            // line 34
            echo "        ";
        }
        // line 35
        echo "        ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
    </div>
";
    }

    // line 39
    public function block_stats($context, array $blocks = array())
    {
    }

    // line 41
    public function block_content_data($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $context["calendarOptions"] = array("calendar" => $this->getAttribute(        // line 43
($context["entity"] ?? null), "id", array()), "calendarOptions" =>         // line 44
($context["calendar"] ?? null), "eventsItemsJson" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_get_calendarevents", array("calendar" => $this->getAttribute(        // line 45
($context["entity"] ?? null), "id", array()), "start" => twig_date_format_filter($this->env, ($context["startDate"] ?? null), "c"), "end" => twig_date_format_filter($this->env, ($context["endDate"] ?? null), "c"), "subordinate" => true))), "connectionsItemsJson" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_get_calendar_connections", array("id" => $this->getAttribute(        // line 46
($context["entity"] ?? null), "id", array())))), "eventsOptions" => array("defaultDate" => twig_date_format_filter($this->env, "now", "c", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getTimeZone()), "containerSelector" => ".calendar-events", "itemViewTemplateSelector" => "#template-view-calendar-event", "itemFormTemplateSelector" => "#template-calendar-event", "leftHeader" => "prev,next today title", "centerHeader" => "", "rightHeader" => "month,agendaWeek,agendaDay"), "connectionsOptions" => array("containerSelector" => ".calendar-connections", "containerTemplateSelector" => "#template-calendar-connections", "itemTemplateSelector" => "#template-calendar-connection-item"), "colorManagerOptions" => array("colors" => $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_calendar.calendar_colors")), "invitationStatuses" => array(0 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_ACCEPTED"), 1 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_TENTATIVE"), 2 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED")));
        // line 71
        echo "    <div class=\"oro-page collapsible-sidebar clearfix\" id=\"calendar\"
         data-page-component-module=\"orocalendar/js/app/components/calendar-component\"
         data-page-component-options=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["calendarOptions"] ?? null)), "html", null, true);
        echo "\">
        <div class=\"oro-page-sidebar search-entity-types-column dropdown\">
            <a href=\"javascript: void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa-filter\"></i>
                Select calendars
                <i class=\"fa-sort-desc\"></i>
            </a>
            <div class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                <div class=\"calendars\">
                    <div class=\"calendar-connections\"></div>
                    <form action=\"#\">
                        ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["user_select_form"] ?? null), 'row');
        echo "
                    </form>
                </div>
            </div>
        </div>
        <div class=\"oro-page-body search-results-column\">
            <div class=\"calendar-events\"></div>
        </div>
    </div>
    <script type=\"text/html\" id=\"template-calendar-menu\">
        ";
        // line 94
        echo $this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\MenuExtension')->render("calendar_menu");
        echo "
    </script>

    <script type=\"text/html\" id=\"template-calendar-connections\">
        <ul class=\"oro-page-menu-items connection-container\">
        </ul>
    </script>

    <script type=\"text/html\" id=\"template-calendar-connection-item\">
        <li class=\"connection-item<% if (visible) { %> active<% } %>\" >
            <div class=\"pull-right\">
                <div class=\"connection-menu-container dropdown pull-left icons-holder\">
                    <a href=\"javascript: void(0);\" class=\"icons-holder-text no-hash context-menu-button\">
                        <i class=\"fa-ellipsis-h\"></i>
                    </a>
                </div>
            </div>
            <a href=\"javascript: void(0);\" class=\"no-action\">
                <span
                    <% if (visible) { %>
                    class=\"calendar-color\"
                        <% if (!_.isEmpty(backgroundColor)) { %>
                        style=\"background-color: <%- backgroundColor %>; border-color: <%- backgroundColor %>\"
                        <% } %>
                    <% } else { %>
                        class=\"calendar-color un-color\"
                    <% } %>
                ></span>
                <span class=\"user-calendar\" title=\"<%- calendarName %>\"><%- calendarName %></span>
            </a>
        </li>
    </script>

    ";
        // line 127
        echo $context["calendarTemplates"]->getcalendar_event_view_template("template-view-calendar-event");
        echo "
    ";
        // line 128
        echo $context["calendarTemplates"]->getcalendar_event_form_template("template-calendar-event", ($context["event_form"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Calendar:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 128,  188 => 127,  152 => 94,  139 => 84,  125 => 73,  121 => 71,  119 => 46,  118 => 45,  117 => 44,  116 => 43,  114 => 42,  111 => 41,  106 => 39,  98 => 35,  95 => 34,  92 => 33,  90 => 32,  87 => 31,  84 => 30,  79 => 27,  76 => 26,  73 => 25,  70 => 24,  67 => 23,  64 => 22,  61 => 21,  58 => 20,  51 => 15,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  36 => 1,  34 => 5,  31 => 4,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:Calendar:view.html.twig", "");
    }
}

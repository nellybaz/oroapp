<?php

/* OroCalendarBundle:Dashboard:myCalendar.html.twig */
class __TwigTemplate_8c6234d740b6a223d908ecc58a6cf8170b937913e4b8174a9df5b0774711bf00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroCalendarBundle:Dashboard:myCalendar.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["calendarTemplates"] = $this->loadTemplate("OroCalendarBundle::templates.html.twig", "OroCalendarBundle:Dashboard:myCalendar.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["dashboardCalendarOptions"] = array("widgetId" =>         // line 6
($context["widgetId"] ?? null), "calendar" => $this->getAttribute(        // line 7
($context["entity"] ?? null), "id", array()), "aspectRatio" => 2, "calendarOptions" =>         // line 9
($context["calendar"] ?? null), "eventsItemsJson" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_get_calendarevents", array("calendar" => $this->getAttribute(        // line 10
($context["entity"] ?? null), "id", array()), "start" => twig_date_format_filter($this->env, ($context["startDate"] ?? null), "c"), "end" => twig_date_format_filter($this->env, ($context["endDate"] ?? null), "c"), "subordinate" => true))), "connectionsItemsJson" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_get_calendar_connections", array("id" => $this->getAttribute(        // line 11
($context["entity"] ?? null), "id", array())))), "eventsOptions" => array("defaultDate" => twig_date_format_filter($this->env, "now", "c", $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocaleExtension')->getTimeZone()), "containerSelector" => ".calendar-events", "itemViewTemplateSelector" => ("#template-view-calendar-event-" .         // line 15
($context["widgetId"] ?? null)), "itemFormTemplateSelector" => ("#template-calendar-event-" .         // line 16
($context["widgetId"] ?? null)), "defaultView" => "agendaDay", "firstHour" =>         // line 18
($context["firstHour"] ?? null), "aspectRatio" => 2, "recoverView" => false), "connectionsOptions" => array(), "colorManagerOptions" => array("colors" => $this->env->getExtension('Oro\Bundle\ConfigBundle\Twig\ConfigExtension')->getConfigValue("oro_calendar.calendar_colors")));
        // line 28
        echo "    <div class=\"calendar-dashboard-widget\" data-page-component-module=\"orocalendar/js/app/components/dashboard-calendar-component\"
         data-page-component-options=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["dashboardCalendarOptions"] ?? null)), "html", null, true);
        echo "\">
        <div class=\"calendar-events\"></div>
    </div>
    ";
        // line 32
        echo $context["calendarTemplates"]->getcalendar_event_view_template(("template-view-calendar-event-" . ($context["widgetId"] ?? null)));
        echo "
    ";
        // line 33
        echo $context["calendarTemplates"]->getcalendar_event_form_template(("template-calendar-event-" . ($context["widgetId"] ?? null)), ($context["event_form"] ?? null));
        echo "
";
    }

    // line 36
    public function block_actions($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $context["actions"] = array(0 => array("icon" => "plus-circle", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.calendar.new_event"), "data" => array("action-name" => "new-event")), 1 => array("type" => "link", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.calendar.view_calendar"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_calendar_view_default")));
        // line 49
        echo "
    ";
        // line 50
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Dashboard:myCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 50,  71 => 49,  68 => 37,  65 => 36,  59 => 33,  55 => 32,  49 => 29,  46 => 28,  44 => 18,  43 => 16,  42 => 15,  41 => 11,  40 => 10,  39 => 9,  38 => 7,  37 => 6,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:Dashboard:myCalendar.html.twig", "");
    }
}

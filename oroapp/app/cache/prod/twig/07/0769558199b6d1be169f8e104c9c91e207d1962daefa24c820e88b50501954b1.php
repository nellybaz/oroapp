<?php

/* OroCalendarBundle:CalendarEvent:activityButton.html.twig */
class __TwigTemplate_2a9a07498ab4152ff51c1902a196872d302a2a8b5f1de1677388fe50276ab2d6 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "clientButton", array(0 => array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_calendar_event_create", $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getActionParams(        // line 2
($context["entity"] ?? null), "activity")), "aCss" => "no-hash", "iCss" => "fa-clock-o", "dataId" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.add_event"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.add_event.title"), "widget" => array("type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => array("alias" => "calendar-event-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.add_event"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "autoResize" => true, "width" => 1000))))), "method"), "html", null, true);
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent:activityButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 25,  21 => 5,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:CalendarEvent:activityButton.html.twig", "");
    }
}

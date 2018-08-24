<?php

/* OroCalendarBundle:CalendarEvent:assignCalendarEventButton.html.twig */
class __TwigTemplate_f23ef29776698c7c618f3edaae9857d337aa894b38368369c44ae5e720982ad9 extends Twig_Template
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
($context["entity"] ?? null), "assign")), "aCss" => "no-hash", "iCss" => "fa-clock-o", "dataId" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "id", array()), "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.assign_event"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.assign_event.title"), "widget" => array("type" => "dialog", "multiple" => true, "options" => array("alias" => "calendar-event-dialog", "dialogOptions" => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.assign_event.widget_title", array("%username%" => $this->env->getExtension('Oro\Bundle\EntityBundle\Twig\EntityExtension')->getEntityName(        // line 14
($context["entity"] ?? null)))), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "autoResize" => true, "width" => 1000))))), "method"), "html", null, true);
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent:assignCalendarEventButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 24,  22 => 14,  21 => 5,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:CalendarEvent:assignCalendarEventButton.html.twig", "");
    }
}

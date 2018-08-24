<?php

/* OroCalendarBundle:CalendarEvent:invitationControl.html.twig */
class __TwigTemplate_1e72a8ada863044209602b0c95f4a01eb28d6681c26b3b18bc2021a841b4e7c2 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle:CalendarEvent:invitationControl.html.twig", 1);
        // line 2
        $context["invitations"] = $this->loadTemplate("OroCalendarBundle::invitations.html.twig", "OroCalendarBundle:CalendarEvent:invitationControl.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        $context["statuses"] = array(0 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_ACCEPTED"), 1 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_TENTATIVE"), 2 => twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED"));
        // line 9
        $context["properties"] = array();
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 11
            echo "    ";
            if (($context["status"] != $this->getAttribute(($context["entity"] ?? null), "invitationStatus", array()))) {
                // line 12
                echo "        ";
                $context["properties"] = twig_array_merge(($context["properties"] ?? null), array(0 =>                 // line 13
$context["UI"]->getlink(array("label" =>                 // line 14
$context["invitations"]->getcalendar_event_invitation_going_status($context["status"]), "title" =>                 // line 15
$context["invitations"]->getcalendar_event_invitation_going_status($context["status"]), "path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(("oro_calendar_event_" .                 // line 16
$context["status"]), array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "data" => array("page-component-module" => "oroui/js/app/components/view-component", "page-component-options" => twig_jsonencode_filter(array("view" => "orocalendar/js/app/views/change-status-view", "triggerEventName" =>                 // line 21
($context["triggerEventName"] ?? null))))))));
                // line 26
                echo "    ";
            } else {
                // line 27
                echo "        ";
                $context["properties"] = twig_array_merge(($context["properties"] ?? null), array(0 =>                 // line 28
$context["invitations"]->getcalendar_event_invitation_going_status($context["status"])));
                // line 30
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
";
        // line 33
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.action.going_status.label"), twig_join_filter(        // line 35
($context["properties"] ?? null), "&nbsp;"));
        // line 36
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent:invitationControl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 36,  63 => 35,  62 => 33,  59 => 32,  52 => 30,  50 => 28,  48 => 27,  45 => 26,  43 => 21,  42 => 16,  41 => 15,  40 => 14,  39 => 13,  37 => 12,  34 => 11,  30 => 10,  28 => 9,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:CalendarEvent:invitationControl.html.twig", "");
    }
}

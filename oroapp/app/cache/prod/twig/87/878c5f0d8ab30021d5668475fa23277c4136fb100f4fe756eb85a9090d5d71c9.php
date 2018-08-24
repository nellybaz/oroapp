<?php

/* OroCalendarBundle:SystemCalendarEvent/widget:info.html.twig */
class __TwigTemplate_ac449552078d5505d5feb4e58cb032a12c0d6b1ad0e02b0a49b2dcfd722460f4 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle:SystemCalendarEvent/widget:info.html.twig", 1);
        // line 2
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroCalendarBundle:SystemCalendarEvent/widget:info.html.twig", 2);
        // line 3
        echo "
<div class=\"widget-content form-horizontal box-content row-fluid\">
    <div class=\"responsive-block\">
        ";
        // line 7
        echo "        ";
        if ((array_key_exists("renderContexts", $context) && ($context["renderContexts"] ?? null))) {
            // line 8
            echo "            <div class=\"activity-context-activity-list\">
                ";
            // line 9
            echo $context["AC"]->getactivity_contexts(($context["entity"] ?? null), ($context["target"] ?? null), true);
            echo "
            </div>
        ";
        }
        // line 12
        echo "        ";
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.title.label"), $this->getAttribute(($context["entity"] ?? null), "title", array()));
        echo "
        ";
        // line 13
        echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.description.label"), $this->getAttribute(($context["entity"] ?? null), "description", array()));
        echo "
        ";
        // line 14
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.start.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "start", array())));
        echo "
        ";
        // line 15
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.end.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "end", array())));
        echo "
        ";
        // line 16
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.all_day.label"), (($this->getAttribute(($context["entity"] ?? null), "allDay", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No"))));
        echo "
        ";
        // line 17
        if ($this->getAttribute(($context["entity"] ?? null), "recurrence", array())) {
            // line 18
            echo "            ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.recurrence.label"), $this->env->getExtension('Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension')->getRecurrenceTextValue($this->getAttribute(($context["entity"] ?? null), "recurrence", array())));
            echo "
        ";
        }
        // line 20
        echo "        ";
        if ($this->getAttribute(($context["entity"] ?? null), "recurringEvent", array())) {
            // line 21
            echo "            ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.recurrence.exception.label"), $this->env->getExtension('Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension')->getRecurrenceTextValue($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "recurringEvent", array()), "recurrence", array())));
            echo "
        ";
        }
        // line 23
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:SystemCalendarEvent/widget:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  72 => 21,  69 => 20,  63 => 18,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  40 => 12,  34 => 9,  31 => 8,  28 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:SystemCalendarEvent/widget:info.html.twig", "");
    }
}

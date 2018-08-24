<?php

/* OroCalendarBundle:CalendarEvent/Datagrid/Property:recurrence.html.twig */
class __TwigTemplate_fa57900ee231a47a5a100f2f15d9af772ec44979901c4396c4e536a8eb947772 extends Twig_Template
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
        $context["originalEvent"] = (($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "parent"), "method")) ? ($this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "parent"), "method")) : ($this->getAttribute(($context["record"] ?? null), "getRootEntity", array(), "method")));
        // line 2
        if ($this->getAttribute(($context["originalEvent"] ?? null), "recurringEvent", array())) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension')->getRecurrenceTextValue($this->getAttribute($this->getAttribute(($context["originalEvent"] ?? null), "recurringEvent", array()), "recurrence", array())), "html", null, true);
            echo "
";
        } else {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\CalendarBundle\Twig\RecurrenceExtension')->getRecurrenceTextValue($this->getAttribute(($context["originalEvent"] ?? null), "recurrence", array())), "html", null, true);
            echo "
";
        }
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent/Datagrid/Property:recurrence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  29 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:CalendarEvent/Datagrid/Property:recurrence.html.twig", "");
    }
}

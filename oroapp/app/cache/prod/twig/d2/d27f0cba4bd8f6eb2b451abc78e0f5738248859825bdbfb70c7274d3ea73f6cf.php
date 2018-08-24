<?php

/* OroCalendarBundle:CalendarEvent/Datagrid/Property:status.html.twig */
class __TwigTemplate_c192ce9b19d5b8d0a0ce3c29183f78981b682a6965c236c667f39299ba72835d extends Twig_Template
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
        if (($context["value"] ?? null)) {
            // line 2
            echo "    ";
            $context["invitations"] = $this->loadTemplate("OroCalendarBundle::invitations.html.twig", "OroCalendarBundle:CalendarEvent/Datagrid/Property:status.html.twig", 2);
            // line 3
            echo "    ";
            echo $context["invitations"]->getcalendar_event_invitation_status(($context["value"] ?? null));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent/Datagrid/Property:status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:CalendarEvent/Datagrid/Property:status.html.twig", "");
    }
}

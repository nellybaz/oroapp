<?php

/* OroCalendarBundle:CalendarEvent/Datagrid/Property:title.html.twig */
class __TwigTemplate_3cb4eac45e9ca3cb599311a370f1a521f14b38c70b71b507c35c37c61a68600b extends Twig_Template
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
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle:CalendarEvent/Datagrid/Property:title.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            $context["eventId"] = $this->getAttribute(($context["record"] ?? null), "getValue", array(0 => "id"), "method");
            // line 5
            echo "    ";
            echo $context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_calendar_event_widget_info", array("id" =>             // line 6
($context["eventId"] ?? null))), "aCss" => "no-hash", "label" =>             // line 8
($context["value"] ?? null), "widget" => array("type" => "dialog", "multiple" => false, "options" => array("alias" => ("calendar_event_info_widget_" .             // line 13
($context["eventId"] ?? null)), "dialogOptions" => array("title" =>             // line 15
($context["value"] ?? null), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 600)))));
            // line 24
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent/Datagrid/Property:title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 24,  34 => 15,  33 => 13,  32 => 8,  31 => 6,  29 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:CalendarEvent/Datagrid/Property:title.html.twig", "");
    }
}

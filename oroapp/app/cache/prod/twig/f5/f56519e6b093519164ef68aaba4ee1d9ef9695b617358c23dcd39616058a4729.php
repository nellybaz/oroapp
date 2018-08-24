<?php

/* OroCalendarBundle:SystemCalendar/widget:events.html.twig */
class __TwigTemplate_f9b3c629149f45e779301e6cb500ec88fee60fe8b422dde44d2a0eb0fbad11ca extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroCalendarBundle:SystemCalendar/widget:events.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        $context["scope"] = ("system-calendar-" . $this->getAttribute(($context["entity"] ?? null), "id", array()));
        // line 5
        echo "    ";
        echo $context["dataGrid"]->getrenderGrid($this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName((($this->getAttribute(        // line 7
($context["entity"] ?? null), "public", array())) ? ("public-system-calendar-event-grid") : ("system-calendar-event-grid")),         // line 8
($context["scope"] ?? null)), array("calendarId" => $this->getAttribute(        // line 10
($context["entity"] ?? null), "id", array())));
        // line 11
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:SystemCalendar/widget:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 11,  31 => 10,  30 => 8,  29 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:SystemCalendar/widget:events.html.twig", "");
    }
}

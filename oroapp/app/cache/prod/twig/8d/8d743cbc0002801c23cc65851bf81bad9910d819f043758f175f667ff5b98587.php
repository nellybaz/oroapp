<?php

/* OroCalendarBundle:CalendarEvent:reminderTemplate.html.twig */
class __TwigTemplate_efcf64656c077b744f175c162771949dde9dbf12e345cfa8ae42697ccdd58aae extends Twig_Template
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
        echo "<script type=\"text/html\" class=\"reminder_templates\" data-identifier=\"calendar_event_template\">
    <% if (url != '') { %>
    <span><a class=\"hash-navigation-link\" href=\"<%= url %>\"><%= _.escape(subject) %></a> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.reminder_template.due_message"), "html", null, true);
        echo " <%= expireAt %></span>
    <% } else { %>
    <span><%= _.escape(subject) %>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.reminder_template.due_message"), "html", null, true);
        echo " <%= expireAt %></span>
    <% } %>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent:reminderTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:CalendarEvent:reminderTemplate.html.twig", "");
    }
}

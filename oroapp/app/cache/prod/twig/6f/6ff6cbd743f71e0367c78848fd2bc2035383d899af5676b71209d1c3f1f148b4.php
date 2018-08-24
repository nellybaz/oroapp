<?php

/* OroCalendarBundle:CalendarEvent/js:activityItemTemplate.html.twig */
class __TwigTemplate_f23f3b48dca48172c9cc1abaa822c1c27b3eef96d826cdf7a8b8bb44c6210b09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig", "OroCalendarBundle:CalendarEvent/js:activityItemTemplate.html.twig", 1);
        $this->blocks = array(
            'activityDetails' => array($this, 'block_activityDetails'),
            'activityActions' => array($this, 'block_activityActions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroActivityListBundle:ActivityList/js:activityItemTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroCalendarBundle:CalendarEvent/js:activityItemTemplate.html.twig", 2);
        // line 4
        $context["entityClass"] = "Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent";
        // line 5
        $context["entityName"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension')->getClassConfigValue(($context["entityClass"] ?? null), "label"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_activityDetails($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, ($context["entityName"] ?? null), "html", null, true);
        echo "
    <% var template = (verb == 'create')
        ? ";
        // line 10
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.added_by"));
        echo "
        : ";
        // line 11
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.updated_by"));
        echo ";
    %>
    <%= _.template(template, { interpolate: /\\{\\{(.+?)\\}\\}/g })({
        user: owner_url ? '<a class=\"user\" href=\"' + owner_url + '\">' +  _.escape(owner) + '</a>' :  '<span class=\"user\">' + _.escape(owner) + '</span>',
        date: '<i class=\"date\">' + createdAt + '</i>',
        editor: editor_url ? '<a class=\"user\" href=\"' + editor_url + '\">' +  _.escape(editor) + '</a>' : _.escape(editor),
        editor_date: '<i class=\"date\">' + updatedAt + '</i>'
    }) %>
";
    }

    // line 21
    public function block_activityActions($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        ob_start();
        // line 23
        echo "        ";
        // line 24
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_calendar_event_update")) {
            // line 25
            echo "            ";
            echo $context["AC"]->getactivity_context_link();
            echo "
        ";
        }
        // line 27
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        $context["actions"] = array(0 => ($context["action"] ?? null));
        // line 29
        echo "
    ";
        // line 30
        ob_start();
        // line 31
        echo "        <a href=\"<%= routing.generate('oro_calendar_event_view', {'id': relatedActivityId}) %>\"
           title=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.view_event", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "\"><i
                class=\"fa-eye hide-text\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.view_event", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "</i>
            ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.view_event", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "
        </a>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 38
        echo "
    ";
        // line 39
        ob_start();
        // line 40
        echo "        <% if (editable) { %>
        <a href=\"#\" class=\"action item-edit-button\"
           title=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.update_event", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "\"
           data-action-extra-options=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("dialogOptions" => array("width" => 1000))), "html", null, true);
        echo "\">
            <i class=\"fa-pencil-square-o hide-text\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.update_event", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "</i>
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.update_event", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 50
        echo "
    ";
        // line 51
        ob_start();
        // line 52
        echo "        <% if (removable) { %>
        <a href=\"#\" class=\"action item-remove-button\"
           title=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.delete_event", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "\">
            <i class=\"fa-trash-o hide-text\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.delete_event", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "</i>
            ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.delete_event", array("{{ entity }}" => ($context["entityName"] ?? null))), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        echo "    ";
        $context["actions"] = twig_array_merge(($context["actions"] ?? null), array(0 => ($context["action"] ?? null)));
        // line 61
        echo "
    ";
        // line 62
        $this->displayParentBlock("activityActions", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent/js:activityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 62,  168 => 61,  165 => 60,  158 => 56,  154 => 55,  150 => 54,  146 => 52,  144 => 51,  141 => 50,  138 => 49,  131 => 45,  127 => 44,  123 => 43,  119 => 42,  115 => 40,  113 => 39,  110 => 38,  107 => 37,  101 => 34,  97 => 33,  93 => 32,  90 => 31,  88 => 30,  85 => 29,  82 => 28,  79 => 27,  73 => 25,  70 => 24,  68 => 23,  65 => 22,  62 => 21,  49 => 11,  45 => 10,  39 => 8,  36 => 7,  32 => 1,  30 => 5,  28 => 4,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:CalendarEvent/js:activityItemTemplate.html.twig", "");
    }
}

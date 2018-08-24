<?php

/* OroCalendarBundle:SystemCalendarEvent:view.html.twig */
class __TwigTemplate_847f41b07d62c80ca785f3e1236514a5c22d32fd1a8ca1fb7abb383973993228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCalendarBundle:SystemCalendarEvent:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'stats' => array($this, 'block_stats'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle:SystemCalendarEvent:view.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroCalendarBundle:SystemCalendarEvent:view.html.twig", 3);
        // line 4
        $context["AC"] = $this->loadTemplate("OroActivityBundle::macros.html.twig", "OroCalendarBundle:SystemCalendarEvent:view.html.twig", 4);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.title%" => (($this->getAttribute(        // line 7
($context["entity"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "title", array()), "N/A")) : ("N/A")), "%parent.name%" => $this->getAttribute($this->getAttribute(        // line 8
($context["entity"] ?? null), "systemCalendar", array()), "name", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_navButtons($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if (($context["editable"] ?? null)) {
            // line 13
            echo "        ";
            // line 14
            echo "        ";
            echo $context["AC"]->getaddContextButton(($context["entity"] ?? null));
            echo "
        ";
            // line 15
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_event_update", array("id" => $this->getAttribute(            // line 16
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.entity_label")));
            // line 18
            echo "
    ";
        }
        // line 20
        echo "    ";
        if (($context["removable"] ?? null)) {
            // line 21
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_calendar_event_delete", array("id" => $this->getAttribute(            // line 22
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_view", array("id" => $this->getAttribute($this->getAttribute(            // line 23
($context["entity"] ?? null), "systemCalendar", array()), "id", array()))), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 25
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.entity_label")));
            // line 27
            echo "
    ";
        }
    }

    // line 31
    public function block_stats($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        // line 33
        echo "    <li class=\"context-data activity-context-activity-block\">
        ";
        // line 34
        echo $context["AC"]->getactivity_contexts(($context["entity"] ?? null));
        echo "
    </li>
";
    }

    // line 38
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 40
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.entity_plural_label"), "entityTitle" => (($this->getAttribute(        // line 43
($context["entity"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "title", array()), "N/A")) : ("N/A")), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_view", array("id" => $this->getAttribute($this->getAttribute(        // line 45
($context["entity"] ?? null), "systemCalendar", array()), "id", array()))), "indexLabel" => $this->getAttribute($this->getAttribute(        // line 46
($context["entity"] ?? null), "systemCalendar", array()), "name", array()))));
        // line 49
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 52
    public function block_content_data($context, array $blocks = array())
    {
        // line 53
        ob_start();
        // line 54
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 56
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.title.label"), $this->getAttribute(($context["entity"] ?? null), "title", array()));
        echo "
                ";
        // line 57
        echo $context["UI"]->getrenderSwitchableHtmlProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.description.label"), $this->getAttribute(($context["entity"] ?? null), "description", array()));
        echo "
                ";
        // line 58
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.start.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "start", array())));
        echo "
                ";
        // line 59
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.end.label"), $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["entity"] ?? null), "end", array())));
        echo "
                ";
        // line 60
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.all_day.label"), (($this->getAttribute(($context["entity"] ?? null), "allDay", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No"))));
        echo "
            </div>
            <div class=\"responsive-block\">
                ";
        // line 63
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
            </div>
        </div>";
        $context["calendarEventInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 68
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 73
($context["calendarEventInformation"] ?? null))))));
        // line 77
        echo "
    ";
        // line 78
        $context["id"] = "calendarEventView";
        // line 79
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 80
        echo "
    ";
        // line 81
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:SystemCalendarEvent:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 81,  157 => 80,  154 => 79,  152 => 78,  149 => 77,  147 => 73,  146 => 68,  140 => 63,  134 => 60,  130 => 59,  126 => 58,  122 => 57,  118 => 56,  114 => 54,  112 => 53,  109 => 52,  102 => 49,  100 => 46,  99 => 45,  98 => 43,  97 => 40,  95 => 39,  92 => 38,  85 => 34,  82 => 33,  80 => 32,  77 => 31,  71 => 27,  69 => 25,  68 => 23,  67 => 22,  65 => 21,  62 => 20,  58 => 18,  56 => 16,  55 => 15,  50 => 14,  48 => 13,  45 => 12,  42 => 11,  38 => 1,  36 => 8,  35 => 7,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:SystemCalendarEvent:view.html.twig", "");
    }
}

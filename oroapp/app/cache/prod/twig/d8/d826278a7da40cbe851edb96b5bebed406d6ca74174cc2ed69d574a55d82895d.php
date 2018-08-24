<?php

/* OroCalendarBundle:SystemCalendarEvent:update.html.twig */
class __TwigTemplate_77cb932401385770384b1bf71b81b0f0ac412f495fec4c8fdb44ff7c03b0f408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroCalendarBundle:SystemCalendarEvent:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.title%" => $this->getAttribute(        // line 4
($context["entity"] ?? null), "title", array()), "%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.entity_label"), "%parent.name%" => $this->getAttribute($this->getAttribute(        // line 6
($context["entity"] ?? null), "systemCalendar", array()), "name", array()))));
        // line 8
        $context["entityId"] = $this->getAttribute(($context["entity"] ?? null), "id", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_navButtons($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["html"] = $this->getAttribute(($context["UI"] ?? null), "saveAndCloseButton", array(0 => array("route" => "oro_system_calendar_view", "params" => array("id" => "\$systemCalendar.id"))), "method");
        // line 15
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_system_calendar_event_create")) {
            // line 16
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndNewButton", array(0 => array("route" => "oro_system_calendar_create")), "method"));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("oro_calendar_event_update")) {
            // line 22
            echo "        ";
            $context["html"] = (($context["html"] ?? null) . $this->getAttribute(($context["UI"] ?? null), "saveAndStayButton", array(0 => array("route" => "oro_system_calendar_event_update", "params" => array("id" => "\$id"))), "method"));
            // line 26
            echo "    ";
        }
        // line 27
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "dropdownSaveButton", array(0 => array("html" => ($context["html"] ?? null))), "method"), "html", null, true);
        echo "
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "cancelButton", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_view", array("id" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "systemCalendar", array()), "id", array())))), "method"), "html", null, true);
        echo "
";
    }

    // line 31
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        if (($context["entityId"] ?? null)) {
            // line 33
            echo "        ";
            $context["breadcrumbs"] = array("entity" =>             // line 34
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.entity_plural_label"), "entityTitle" => (($this->getAttribute(            // line 37
($context["entity"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "title", array()), "N/A")) : ("N/A")), "additional" => array(0 => array("indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_view", array("id" => $this->getAttribute($this->getAttribute(            // line 39
($context["entity"] ?? null), "systemCalendar", array()), "id", array()))), "indexLabel" => $this->getAttribute($this->getAttribute(            // line 40
($context["entity"] ?? null), "systemCalendar", array()), "name", array()))));
            // line 43
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 45
            echo "        ";
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.entity_label")));
            // line 46
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroCalendarBundle:SystemCalendarEvent:update.html.twig", 46)->display(array_merge($context, array("title" => ($context["title"] ?? null))));
            // line 47
            echo "    ";
        }
    }

    // line 50
    public function block_content_data($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        $context["id"] = "calendarevent-form";
        // line 52
        echo "    ";
        $context["calendarEventDateRange"] = array("module" => "orocalendar/js/app/components/calendar-event-date-range-component", "name" => "calendar-event-date-range", "options" => array("nativeMode" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()));
        // line 59
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 66
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'row'), 1 =>         // line 67
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row'), 2 =>         // line 68
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "backgroundColor", array()), 'row'))), 1 => array("title" => "", "data" => array(0 => (((((("<div " . $this->getAttribute(        // line 74
($context["UI"] ?? null), "renderPageComponentAttributes", array(0 => ($context["calendarEventDateRange"] ?? null)), "method")) . ">") .         // line 75
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "start", array()), 'row')) .         // line 76
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "end", array()), 'row')) .         // line 77
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "allDay", array()), 'row')) . "</div>"), 1 => (($this->getAttribute(        // line 79
($context["form"] ?? null), "recurrence", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "recurrence", array()), 'row')) : (null)))))));
        // line 84
        echo "
    ";
        // line 85
        $context["additionalData"] = array();
        // line 86
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 87
                echo "        ";
                $context["additionalData"] = twig_array_merge(($context["additionalData"] ?? null), array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 88
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    ";
        if ( !twig_test_empty(($context["additionalData"] ?? null))) {
            // line 90
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 95
($context["additionalData"] ?? null))))));
            // line 98
            echo "    ";
        }
        // line 99
        echo "
    ";
        // line 100
        $context["data"] = array("formErrors" => ((        // line 101
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors')) : (null)), "dataBlocks" =>         // line 102
($context["dataBlocks"] ?? null));
        // line 104
        echo "
    ";
        // line 105
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:SystemCalendarEvent:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 105,  162 => 104,  160 => 102,  159 => 101,  158 => 100,  155 => 99,  152 => 98,  150 => 95,  148 => 90,  145 => 89,  138 => 88,  135 => 87,  129 => 86,  127 => 85,  124 => 84,  122 => 79,  121 => 77,  120 => 76,  119 => 75,  118 => 74,  117 => 68,  116 => 67,  115 => 66,  113 => 59,  110 => 52,  107 => 51,  104 => 50,  99 => 47,  96 => 46,  93 => 45,  87 => 43,  85 => 40,  84 => 39,  83 => 37,  82 => 34,  80 => 33,  77 => 32,  74 => 31,  68 => 28,  63 => 27,  60 => 26,  57 => 22,  54 => 21,  52 => 20,  49 => 19,  46 => 16,  43 => 15,  40 => 11,  37 => 10,  33 => 1,  31 => 8,  29 => 6,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:SystemCalendarEvent:update.html.twig", "");
    }
}

<?php

/* OroCalendarBundle:SystemCalendar:view.html.twig */
class __TwigTemplate_e5f47223c609c5d3fdb3fa972300bea7621d7bf89b011f74f7fe7f8c8bdec8c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroCalendarBundle:SystemCalendar:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle:SystemCalendar:view.html.twig", 2);
        // line 3
        $context["entityConfig"] = $this->loadTemplate("OroEntityConfigBundle::macros.html.twig", "OroCalendarBundle:SystemCalendar:view.html.twig", 3);

        $this->env->getExtension("oro_title")->set(array("params" => array("%entity.title%" => $this->getAttribute(        // line 5
($context["entity"] ?? null), "name", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (($context["canAddEvent"] ?? null)) {
            // line 9
            echo "        <div class=\"btn-group\">
            ";
            // line 10
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_event_create", array("id" => $this->getAttribute(            // line 11
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.entity_label")));
            // line 13
            echo "
        </div>
    ";
        }
        // line 16
        echo "    ";
        if (($context["editable"] ?? null)) {
            // line 17
            echo "        ";
            echo $context["UI"]->geteditButton(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_update", array("id" => $this->getAttribute(            // line 18
($context["entity"] ?? null), "id", array()))), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.entity_label")));
            // line 20
            echo "
    ";
        }
        // line 22
        echo "    ";
        if (($context["removable"] ?? null)) {
            // line 23
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_delete_systemcalendar", array("id" => $this->getAttribute(            // line 24
($context["entity"] ?? null), "id", array()))), "dataRedirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_index"), "aCss" => "no-hash remove-button", "dataId" => $this->getAttribute(            // line 27
($context["entity"] ?? null), "id", array()), "entity_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.entity_label")));
            // line 29
            echo "
    ";
        }
    }

    // line 33
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 35
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.entity_plural_label"), "entityTitle" => $this->getAttribute(        // line 38
($context["entity"] ?? null), "name", array()));
        // line 40
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 43
    public function block_content_data($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        ob_start();
        // line 45
        echo "        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 47
        echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.name.label"), $this->getAttribute(($context["entity"] ?? null), "name", array()));
        echo "
                ";
        // line 48
        echo $context["UI"]->getrenderColorProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.background_color.label"), $this->getAttribute(        // line 50
($context["entity"] ?? null), "backgroundColor", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.no_color"));
        // line 51
        echo "
                ";
        // line 52
        if (($context["showScope"] ?? null)) {
            // line 53
            echo "                    ";
            echo $context["UI"]->getrenderProperty($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.public.label"), (($this->getAttribute(($context["entity"] ?? null), "public", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.scope.system")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.systemcalendar.scope.organization"))));
            // line 55
            echo "
                ";
        }
        // line 57
        echo "            </div>
            <div class=\"responsive-block\">
                ";
        // line 59
        echo $context["entityConfig"]->getrenderDynamicFields(($context["entity"] ?? null));
        echo "
            </div>
        </div>
    ";
        $context["systemCalendarInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 63
        echo "
    ";
        // line 64
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General Information"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 68
($context["systemCalendarInformation"] ?? null))))));
        // line 71
        echo "
    ";
        // line 72
        ob_start();
        // line 73
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_system_calendar_widget_events", array("id" => $this->getAttribute(        // line 75
($context["entity"] ?? null), "id", array())))));
        // line 76
        echo "
    ";
        $context["systemCalendarEventsWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 78
        echo "
    ";
        // line 79
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.calendarevent.entity_plural_label"), "subblocks" => array(0 => array("data" => array(0 =>         // line 82
($context["systemCalendarEventsWidget"] ?? null)))))));
        // line 85
        echo "
    ";
        // line 86
        $context["id"] = "systemCalendarView";
        // line 87
        echo "    ";
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 88
        echo "
    ";
        // line 89
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:SystemCalendar:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 89,  168 => 88,  165 => 87,  163 => 86,  160 => 85,  158 => 82,  157 => 79,  154 => 78,  150 => 76,  148 => 75,  146 => 73,  144 => 72,  141 => 71,  139 => 68,  138 => 64,  135 => 63,  128 => 59,  124 => 57,  120 => 55,  117 => 53,  115 => 52,  112 => 51,  110 => 50,  109 => 48,  105 => 47,  101 => 45,  98 => 44,  95 => 43,  88 => 40,  86 => 38,  85 => 35,  83 => 34,  80 => 33,  74 => 29,  72 => 27,  71 => 24,  69 => 23,  66 => 22,  62 => 20,  60 => 18,  58 => 17,  55 => 16,  50 => 13,  48 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  34 => 1,  32 => 5,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:SystemCalendar:view.html.twig", "");
    }
}

<?php

/* OroCalendarBundle:CalendarEvent/widget:update.html.twig */
class __TwigTemplate_aadef76eb45602f34c1371f9d3a229226fab24f49f3eb45e3a6ee6296fee13f2 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle:CalendarEvent/widget:update.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        if ((array_key_exists("saved", $context) && ($context["saved"] ?? null))) {
            // line 5
            echo "        <script type=\"text/javascript\">
            require(['oroui/js/widget-manager', 'oroui/js/messenger', 'oroui/js/mediator'],
            function(widgetManager, messenger, mediator) {
                widgetManager.getWidgetInstance(";
            // line 8
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"));
            echo ", function(widget) {
                    messenger.notificationFlashMessage('success', ";
            // line 9
            echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.controller.event.saved.message"));
            echo ");
                    mediator.trigger('widget_success:' + widget.getAlias());
                    mediator.trigger('widget_success:' + widget.getWid());
                    widget.remove();
                });
            });
        </script>
    ";
        } else {
            // line 17
            echo "        ";
            if (( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "valid", array()) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())))) {
                // line 18
                echo "            <div class=\"alert alert-error\">
                <div class=\"message\">
                    ";
                // line 20
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                echo "
                </div>
            </div>
        ";
            }
            // line 24
            echo "
        ";
            // line 25
            $context["calendarEventDateRange"] = array("module" => "orocalendar/js/app/components/calendar-event-date-range-component", "name" => "calendar-event-date-range", "options" => array("nativeMode" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()));
            // line 32
            echo "        <div class=\"form-container\">
            <form id=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
            echo "\" method=\"post\">
                <fieldset class=\"form form-horizontal\">
                    ";
            // line 35
            ob_start();
            // line 36
            echo "                        <div ";
            echo $context["UI"]->getrenderPageComponentAttributes(($context["calendarEventDateRange"] ?? null));
            echo ">
                            ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "start", array()), 'row');
            echo "
                            ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "end", array()), 'row');
            echo "
                            ";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "allDay", array()), 'row');
            echo "
                        </div>
                        ";
            // line 41
            if ($this->getAttribute(($context["form"] ?? null), "recurrence", array(), "any", true, true)) {
                // line 42
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "recurrence", array()), 'row');
                echo "
                        ";
            }
            // line 44
            echo "                    ";
            $context["rightColumn"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 45
            echo "
                    ";
            // line 46
            ob_start();
            // line 47
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'row');
            echo "
                        ";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row');
            echo "
                        ";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "backgroundColor", array()), 'row');
            echo "
                        ";
            // line 50
            if ($this->getAttribute(($context["form"] ?? null), "calendarUid", array(), "any", true, true)) {
                // line 51
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "calendarUid", array()), 'row');
                echo "
                        ";
            }
            // line 53
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "attendees", array()), 'row');
            echo "
                        ";
            // line 54
            if ((null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "recurrence", array()))) {
                // line 55
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "reminders", array()), 'row');
                echo "
                        ";
            } else {
                // line 57
                echo "                            ";
                $this->getAttribute($this->getAttribute(($context["form"] ?? null), "reminders", array()), "setRendered", array());
                // line 58
                echo "                        ";
            }
            // line 59
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
                    ";
            $context["leftColumn"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 61
            echo "
                    <div class=\"span6\">
                        ";
            // line 63
            echo twig_escape_filter($this->env, ($context["leftColumn"] ?? null), "html", null, true);
            echo "
                    </div>
                    <div class=\"span6\">
                        ";
            // line 66
            echo twig_escape_filter($this->env, ($context["rightColumn"] ?? null), "html", null, true);
            echo "
                    </div>
                    <div class=\"widget-actions form-actions\">
                        <button class=\"btn\" type=\"reset\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            </form>
            ";
            // line 74
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
        </div>
    ";
        }
        // line 77
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent/widget:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 77,  187 => 74,  180 => 70,  176 => 69,  170 => 66,  164 => 63,  160 => 61,  154 => 59,  151 => 58,  148 => 57,  142 => 55,  140 => 54,  135 => 53,  129 => 51,  127 => 50,  123 => 49,  119 => 48,  114 => 47,  112 => 46,  109 => 45,  106 => 44,  100 => 42,  98 => 41,  93 => 39,  89 => 38,  85 => 37,  80 => 36,  78 => 35,  69 => 33,  66 => 32,  64 => 25,  61 => 24,  54 => 20,  50 => 18,  47 => 17,  36 => 9,  32 => 8,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:CalendarEvent/widget:update.html.twig", "");
    }
}

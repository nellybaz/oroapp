<?php

/* OroCalendarBundle:SystemCalendarEvent/widget:update.html.twig */
class __TwigTemplate_71c92632705667d89b065ab6d3d017cc917cf15e291b1d8e68d7bf963032e019 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle:SystemCalendarEvent/widget:update.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        if ((array_key_exists("saved", $context) && ($context["saved"] ?? null))) {
            // line 5
            echo "        <div ";
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/widget-form-component", "options" => array("_wid" => $this->getAttribute($this->getAttribute(            // line 8
($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method"), "data" => ((            // line 9
array_key_exists("saved", $context)) ? (_twig_default_filter(($context["saved"] ?? null), null)) : (null)), "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.controller.event.saved.message"))));
            // line 12
            echo "></div>
    ";
        } else {
            // line 14
            echo "        ";
            if (( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "valid", array()) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())))) {
                // line 15
                echo "            <div class=\"alert alert-error\">
                <div class=\"message\">
                    ";
                // line 17
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                echo "
                </div>
            </div>
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            $context["calendarEventDateRange"] = array("module" => "orocalendar/js/app/components/calendar-event-date-range-component", "name" => "calendar-event-date-range", "options" => array("nativeMode" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile()));
            // line 29
            echo "        <div class=\"form-container\">
            <form id=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
            echo "\" method=\"post\">
                <fieldset class=\"form form-horizontal\">
                    <div class=\"span6\">
                        ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'row');
            echo "
                        ";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row');
            echo "
                        ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "backgroundColor", array()), 'row');
            echo "

                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                    // line 38
                    echo "                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
                    echo "
                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    </div>
                    <div class=\"span6\">
                        <div ";
            // line 42
            echo $context["UI"]->getrenderPageComponentAttributes(($context["calendarEventDateRange"] ?? null));
            echo ">
                            ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "start", array()), 'row');
            echo "
                            ";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "end", array()), 'row');
            echo "
                            ";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "allDay", array()), 'row');
            echo "
                        </div>
                        ";
            // line 47
            if ($this->getAttribute(($context["form"] ?? null), "recurrence", array(), "any", true, true)) {
                // line 48
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "recurrence", array()), 'row');
                echo "
                        ";
            }
            // line 50
            echo "                    </div>
                    <div class=\"widget-actions form-actions\">
                        <button class=\"btn\" type=\"reset\">";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save"), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            </form>
            ";
            // line 57
            echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? null));
            echo "
        </div>
    ";
        }
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:SystemCalendarEvent/widget:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 60,  140 => 57,  133 => 53,  129 => 52,  125 => 50,  119 => 48,  117 => 47,  112 => 45,  108 => 44,  104 => 43,  100 => 42,  96 => 40,  86 => 38,  81 => 37,  76 => 35,  72 => 34,  68 => 33,  58 => 30,  55 => 29,  53 => 22,  50 => 21,  43 => 17,  39 => 15,  36 => 14,  32 => 12,  30 => 9,  29 => 8,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:SystemCalendarEvent/widget:update.html.twig", "");
    }
}

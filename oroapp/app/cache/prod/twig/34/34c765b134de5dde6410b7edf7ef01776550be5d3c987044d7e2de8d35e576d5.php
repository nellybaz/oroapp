<?php

/* OroCalendarBundle:Form:fields.html.twig */
class __TwigTemplate_ccc289d28c49c20390aadb6d63b2c201bb597facce930944fcc1bc5a290c28b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_calendar_choice_row' => array($this, 'block_oro_calendar_choice_row'),
            'oro_calendar_choice_template_row' => array($this, 'block_oro_calendar_choice_template_row'),
            'oro_calendar_event_recurrence_row' => array($this, 'block_oro_calendar_event_recurrence_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_calendar_choice_row', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('oro_calendar_choice_template_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('oro_calendar_event_recurrence_row', $context, $blocks);
    }

    // line 1
    public function block_oro_calendar_choice_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ( !twig_test_empty(($context["choices"] ?? null))) {
            // line 3
            echo "        ";
            if ((twig_length_filter($this->env, ($context["choices"] ?? null)) > 1)) {
                // line 4
                echo "            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row');
                echo "
        ";
            } else {
                // line 6
                echo "            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row', array("label" => false));
                echo "
        ";
            }
            // line 8
            echo "    ";
        }
    }

    // line 11
    public function block_oro_calendar_choice_template_row($context, array $blocks = array())
    {
        // line 12
        echo "    <% var ";
        echo ($context["name"] ?? null);
        echo "Template = '';
    if (";
        // line 13
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "TemplateType === 'single') {
        ";
        // line 14
        echo ($context["name"] ?? null);
        echo "Template = '";
        // line 15
        ob_start();
        // line 16
        echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <div id=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"horizontal validate-group\">
                    <div class=\"oro-clearfix\">
                        <input type=\"checkbox\" id=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_0\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[]\" value=\"< %= calendars[0].uid % >\">
                        <label for=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_0\">< %= ";
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.calendar.add_to_calendar"));
        echo ".replace(\"%name%\", calendars[0].name) % ><em>&nbsp;</em></label>
                    </div>
                </div>
            </div>
        </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 27
        echo "';
    } else if (";
        // line 28
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "TemplateType === 'multiple') {
        ";
        // line 29
        echo ($context["name"] ?? null);
        echo "Template = '";
        // line 30
        ob_start();
        // line 31
        echo "        <div class=\"control-group\">
            <label data-required=\"1\" class=\"control-label required\" for=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
        echo "<em>*</em></label>
            <div class=\"controls\">
                <select id=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-required=\"1\">
                < % for (var i = 0; i < calendars.length; i++) { % >
                    <option value=\"< %= calendars[i].uid % >\">< %= calendars[i].name % ></option>
                < % } % >
                </select>
            </div>
        </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 42
        echo "';
    } %>
    <% if (";
        // line 44
        echo ($context["name"] ?? null);
        echo "Template) { %>
        <%= _.template(";
        // line 45
        echo ($context["name"] ?? null);
        echo "Template.replace(/\\< %/g, '<' + '%').replace(/% \\>/g, '%' + '>'))({calendars: calendars}) %>
    <% } %>
";
    }

    // line 49
    public function block_oro_calendar_event_recurrence_row($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle:Form:fields.html.twig", 50);
        // line 51
        echo "    ";
        $context["modelAttrs"] = array();
        // line 52
        echo "    ";
        $context["errors"] = array();
        // line 53
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 54
            echo "        ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "errors", array()))) {
                // line 55
                echo "            ";
                $context["fieldErrors"] = array();
                // line 56
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 57
                    echo "                ";
                    $context["fieldErrors"] = twig_array_merge(($context["fieldErrors"] ?? null), array(0 => $this->getAttribute($context["error"], "message", array())));
                    // line 58
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "            ";
                $context["errors"] = twig_array_merge(($context["errors"] ?? null), array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(                // line 60
$context["field"], "vars", array()), "label", array())), "name" => $this->getAttribute($this->getAttribute(                // line 61
$context["field"], "vars", array()), "name", array()), "messages" =>                 // line 62
($context["fieldErrors"] ?? null))));
                // line 64
                echo "        ";
            }
            // line 65
            echo "        ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "value", array()))) {
                // line 66
                echo "            ";
                $context["modelAttrs"] = twig_array_merge(($context["modelAttrs"] ?? null), array($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "name", array()) => $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "value", array())));
                // line 67
                echo "        ";
            }
            // line 68
            echo "        ";
            $this->getAttribute($context["field"], "setRendered", array());
            // line 69
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
    ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div ";
        // line 72
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "orocalendar/js/app/components/calendar-event-recurrence-component", "name" => "calendar-event-recurrence", "options" => array("inputNamePrefixes" => $this->getAttribute($this->getAttribute(        // line 76
($context["form"] ?? null), "vars", array()), "full_name", array()), "errors" =>         // line 77
($context["errors"] ?? null), "modelAttrs" =>         // line 78
($context["modelAttrs"] ?? null))));
        // line 80
        echo "></div>
";
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  231 => 80,  229 => 78,  228 => 77,  227 => 76,  226 => 72,  222 => 71,  219 => 70,  213 => 69,  210 => 68,  207 => 67,  204 => 66,  201 => 65,  198 => 64,  196 => 62,  195 => 61,  194 => 60,  192 => 59,  186 => 58,  183 => 57,  178 => 56,  175 => 55,  172 => 54,  167 => 53,  164 => 52,  161 => 51,  158 => 50,  155 => 49,  148 => 45,  144 => 44,  140 => 42,  127 => 34,  120 => 32,  117 => 31,  115 => 30,  112 => 29,  108 => 28,  105 => 27,  94 => 21,  88 => 20,  83 => 18,  79 => 16,  77 => 15,  74 => 14,  70 => 13,  65 => 12,  62 => 11,  57 => 8,  51 => 6,  45 => 4,  42 => 3,  39 => 2,  36 => 1,  32 => 49,  29 => 48,  27 => 11,  24 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCalendarBundle:Form:fields.html.twig", "");
    }
}

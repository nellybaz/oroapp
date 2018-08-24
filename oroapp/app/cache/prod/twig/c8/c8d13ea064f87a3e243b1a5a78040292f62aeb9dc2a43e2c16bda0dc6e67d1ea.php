<?php

/* OroCronBundle:Form:fields.html.twig */
class __TwigTemplate_52652986be73911c7ab51ce2af49919dade4622529e86d2d8bab59ee3eb0576b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_cron_schedule_intervals_collection_widget' => array($this, 'block_oro_cron_schedule_intervals_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('oro_cron_schedule_intervals_collection_widget', $context, $blocks);
    }

    public function block_oro_cron_schedule_intervals_collection_widget($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        ob_start();
        // line 32
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 33
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "schedule_interval_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 34
            echo "        ";
        }
        // line 35
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection collection-fields-list")));
        // line 36
        echo "        ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 37
        echo "        <div class=\"row-oro schedule-intervals\"
             data-page-component-module=\"oroui/js/app/components/view-component\"
             data-page-component-options=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orocron/js/app/views/schedule-intervals-view")), "html", null, true);
        // line 41
        echo "\">
            ";
        // line 42
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 43
        echo "            <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th><span>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cron.schedule_interval.active_at.label"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cron.schedule_interval.deactivate_at.label"), "html", null, true);
        echo "</span></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody data-last-index=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\" data-row-count-add=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_add", array()), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        echo ">
                    ";
        // line 53
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 54
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 55
                echo "                            ";
                echo $this->getAttribute($this, "schedule_interval_prototype", array(0 => $context["child"]), "method");
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 58
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_initial", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 59
                echo "                            ";
                echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => $context["i"]));
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                    ";
        }
        // line 62
        echo "                    </tbody>
                </table>
            </div>
            <a class=\"btn add-list-item\" data-container=\".oro-item-collection tbody\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.cron.schedule_interval.add"), "html", null, true);
        echo "</a>
        </div>
        ";
        // line 67
        if ((($context["handle_primary"] ?? null) && ( !array_key_exists("prototype", $context) || $this->getAttribute(($context["prototype"] ?? null), "primary", array(), "any", true, true)))) {
            // line 68
            echo "            ";
            echo $this->getAttribute($this, "oro_collection_validate_primary_js", array(0 => $context), "method");
            echo "
        ";
        }
        // line 70
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 3
    public function getschedule_interval_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 5
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 6
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 7
                echo "    ";
            } else {
                // line 8
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 9
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 10
                echo "    ";
            }
            // line 11
            echo "
    ";
            // line 12
            $context["hasErrors"] = (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "activeAt", array()), "vars", array()), "errors", array())) || twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "deactivateAt", array()), "vars", array()), "errors", array())));
            // line 13
            echo "
    <tr data-content=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-validation-optional-group class=\"schedule-interval__row ";
            if (($context["hasErrors"] ?? null)) {
                echo "has-row-error";
            }
            echo "\" data-role=\"schedule-interval-row\">
        <td>";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "activeAt", array()), 'widget');
            echo "</td>
        <td>";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "deactivateAt", array()), 'widget');
            echo "</td>
        <td>
            <button type=\"button\" class=\"removeRow btn icons-holder\"><i class=\"fa-close\"></i></button>
        </td>
    </tr>
    <tr ";
            // line 21
            if ( !($context["hasErrors"] ?? null)) {
                echo "style=\"display: none\"";
            }
            echo " class=\"schedule-interval__error-row\" data-role=\"schedule-interval-row-error\">
        <td colspan=\"3\">
            ";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
            ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "activeAt", array()), 'errors');
            echo "
            ";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "deactivateAt", array()), 'errors');
            echo "
        </td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroCronBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 25,  225 => 24,  221 => 23,  214 => 21,  206 => 16,  202 => 15,  194 => 14,  191 => 13,  189 => 12,  186 => 11,  183 => 10,  180 => 9,  177 => 8,  174 => 7,  171 => 6,  168 => 5,  165 => 4,  153 => 3,  148 => 70,  142 => 68,  140 => 67,  135 => 65,  130 => 62,  127 => 61,  118 => 59,  113 => 58,  110 => 57,  101 => 55,  96 => 54,  94 => 53,  80 => 52,  73 => 48,  69 => 47,  61 => 43,  59 => 42,  56 => 41,  54 => 39,  50 => 37,  47 => 36,  44 => 35,  41 => 34,  38 => 33,  35 => 32,  32 => 31,  26 => 30,  23 => 29,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCronBundle:Form:fields.html.twig", "");
    }
}

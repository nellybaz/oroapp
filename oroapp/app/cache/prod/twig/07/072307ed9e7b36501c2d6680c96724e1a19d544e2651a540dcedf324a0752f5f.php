<?php

/* OroAnalyticsBundle:Form:form.html.twig */
class __TwigTemplate_0037a897e9279de62d398c83b235f2995ab369348ddb32feeb64b5dc97e716d6 extends Twig_Template
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
        if ((((array_key_exists("form", $context) && $this->getAttribute(($context["form"] ?? null), "recency", array(), "any", true, true)) || $this->getAttribute(($context["form"] ?? null), "frequency", array(), "any", true, true)) || $this->getAttribute(($context["form"] ?? null), "monetary", array(), "any", true, true))) {
            // line 2
            echo "    ";
            $context["options"] = array("rfm_enable_id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "rfm_enabled", array()), "vars", array()), "id", array()));
            // line 3
            echo "    ";
            $context["rfmEnabled"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "data", array(), "any", false, true), "rfm_enabled", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "data", array()), "rfm_enabled", array()));
            // line 4
            echo "    <div class=\"rfm-settings ";
            if (($context["rfmEnabled"] ?? null)) {
                echo "rfm-enabled";
            }
            echo "\"
        data-page-component-module=\"oroanalytics/js/app/components/rfm-settings\"
        data-page-component-options=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
            echo "\">

        <h4>";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.rfm_setting.title"), "html", null, true);
            echo "</h4>

        ";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rfm_enabled", array()), 'row');
            echo "

        <div class=\"control-group rfm-settings-data\">
            <div class=\"controls\">
                <div class=\"hide\">
                    ";
            // line 15
            if ($this->getAttribute(($context["form"] ?? null), "recency", array(), "any", true, true)) {
                // line 16
                echo "                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "recency", array()), 'widget');
                echo "
                    ";
            }
            // line 18
            echo "                    ";
            if ($this->getAttribute(($context["form"] ?? null), "frequency", array(), "any", true, true)) {
                // line 19
                echo "                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "frequency", array()), 'widget');
                echo "
                    ";
            }
            // line 21
            echo "                    ";
            if ($this->getAttribute(($context["form"] ?? null), "monetary", array(), "any", true, true)) {
                // line 22
                echo "                        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "monetary", array()), 'widget');
                echo "
                    ";
            }
            // line 24
            echo "                </div>

                ";
            // line 26
            if ((((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "recency", array()), "vars", array()), "errors", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "frequency", array()), "vars", array()), "errors", array())) > 0)) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "monetary", array()), "vars", array()), "errors", array())) > 0))) {
                // line 27
                echo "                    <div class=\"alert alert-error\">
                        <ul>
                            ";
                // line 29
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "recency", array()), "vars", array()), "errors", array())) > 0)) {
                    // line 30
                    echo "                                <li>
                                    <strong>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.rfm.recency.label"), "html", null, true);
                    echo "</strong>
                                    ";
                    // line 32
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "recency", array()), 'errors');
                    echo "
                                </li>
                            ";
                }
                // line 35
                echo "
                            ";
                // line 36
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "frequency", array()), "vars", array()), "errors", array())) > 0)) {
                    // line 37
                    echo "                                <li>
                                    <strong>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.rfm.frequency.label"), "html", null, true);
                    echo "</strong>
                                    ";
                    // line 39
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "frequency", array()), 'errors');
                    echo "
                                </li>
                            ";
                }
                // line 42
                echo "
                            ";
                // line 43
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "monetary", array()), "vars", array()), "errors", array())) > 0)) {
                    // line 44
                    echo "                                <li>
                                    <strong>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.rfm.monetary.label"), "html", null, true);
                    echo "</strong>
                                    ";
                    // line 46
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "monetary", array()), 'errors');
                    echo "
                                </li>
                            ";
                }
                // line 49
                echo "                        </ul>
                    </div>
                ";
            }
            // line 52
            echo "
                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th><label>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.score.title"), "html", null, true);
            echo "</label></th>
                        <th>
                            ";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "recency", array()), 'label');
            echo "
                            ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.hint.recency"), "html", null, true);
            echo "
                        </th>
                        <th>
                            ";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "frequency", array()), 'label');
            echo "
                            ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.hint.frequency"), "html", null, true);
            echo "
                        </th>
                        <th>
                            ";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "monetary", array()), 'label');
            echo "
                            ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.hint.monetary"), "html", null, true);
            echo "
                        </th>
                        <th class=\"action-column\"><label>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.form.actions.title"), "html", null, true);
            echo "</label></th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                <button type=\"button\" class=\"btn action-add\">
                    ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.analytics.title.add_row"), "html", null, true);
            echo "
                </button>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroAnalyticsBundle:Form:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 76,  185 => 69,  180 => 67,  176 => 66,  170 => 63,  166 => 62,  160 => 59,  156 => 58,  151 => 56,  145 => 52,  140 => 49,  134 => 46,  130 => 45,  127 => 44,  125 => 43,  122 => 42,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  98 => 32,  94 => 31,  91 => 30,  89 => 29,  85 => 27,  83 => 26,  79 => 24,  73 => 22,  70 => 21,  64 => 19,  61 => 18,  55 => 16,  53 => 15,  45 => 10,  40 => 8,  35 => 6,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAnalyticsBundle:Form:form.html.twig", "");
    }
}

<?php

/* OroDashboardBundle:Dashboard:widget.html.twig */
class __TwigTemplate_6d9948754eae39f98a0ffde68b24ef39815fb9839d8de3cb2c46510245601aaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["widgetId"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_wid"), "method");
        // line 2
        $context["widgetContentId"] = ("widget-content-" . ($context["widgetId"] ?? null));
        // line 3
        $context["widgetType"] = ((array_key_exists("widgetType", $context)) ? (_twig_default_filter(($context["widgetType"] ?? null), "dashboard")) : ("dashboard"));
        // line 4
        $context["widgetClass"] = twig_lower_filter($this->env, twig_replace_filter(($context["widgetName"] ?? null), array("_" => "-")));
        // line 5
        if ( !array_key_exists("widgetTitle", $context)) {
            // line 6
            echo "    ";
            if ( !array_key_exists("widgetLabel", $context)) {
                // line 7
                echo "        ";
                $context["widgetTitle"] = false;
                // line 8
                echo "    ";
            } elseif (((array_key_exists("widgetConfiguration", $context) && $this->getAttribute(($context["widgetConfiguration"] ?? null), "title", array(), "any", true, true)) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["widgetConfiguration"] ?? null), "title", array()), "value", array())))) {
                // line 9
                echo "        ";
                $context["widgetTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["widgetConfiguration"] ?? null), "title", array()), "value", array()));
                // line 10
                echo "    ";
            } else {
                // line 11
                echo "        ";
                $context["widgetTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["widgetLabel"] ?? null));
                // line 12
                echo "    ";
            }
        }
        // line 14
        echo "
<div id=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["widgetContentId"] ?? null), "html", null, true);
        echo "\" class=\"invisible widget-content ";
        echo twig_escape_filter($this->env, ($context["widgetType"] ?? null), "html", null, true);
        echo "-widget-content ";
        echo twig_escape_filter($this->env, ($context["widgetClass"] ?? null), "html", null, true);
        echo "-widget-content\" data-widget-title=\"";
        echo twig_escape_filter($this->env, ($context["widgetTitle"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "    ";
        if (array_key_exists("widgetConfiguration", $context)) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["widgetConfiguration"] ?? null));
            foreach ($context['_seq'] as $context["configName"] => $context["config"]) {
                // line 20
                echo "            ";
                if (($this->getAttribute($context["config"], "show_on_widget", array()) &&  !(null === $this->getAttribute($context["config"], "value", array())))) {
                    // line 21
                    echo "                ";
                    if (twig_test_iterable($this->getAttribute($context["config"], "value", array()))) {
                        // line 22
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["config"], "value", array()));
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 23
                            echo "                <div class=\"widget-config-data\"><stong>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["key"]), "html", null, true);
                            echo "</stong>: ";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "</div>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        echo "                ";
                    } else {
                        // line 26
                        echo "                    ";
                        if (($this->getAttribute($context["config"], "options", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["config"], "options", array(), "any", false, true), "label", array(), "any", true, true))) {
                            // line 27
                            echo "                        ";
                            $context["label"] = $this->getAttribute($this->getAttribute($context["config"], "options", array()), "label", array());
                            // line 28
                            echo "                    ";
                        } else {
                            // line 29
                            echo "                        ";
                            $context["label"] = $context["configName"];
                            // line 30
                            echo "                    ";
                        }
                        // line 31
                        echo "                    ";
                        if (($this->getAttribute($context["config"], "options", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["config"], "options", array(), "any", false, true), "choices", array(), "any", true, true))) {
                            // line 32
                            echo "                        ";
                            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($context["config"], "options", array()), "choices", array()), $this->getAttribute($context["config"], "value", array()), array(), "array"));
                            // line 33
                            echo "                    ";
                        } else {
                            // line 34
                            echo "                        ";
                            $context["value"] = $this->getAttribute($context["config"], "value", array());
                            // line 35
                            echo "                    ";
                        }
                        // line 36
                        echo "                    <div class=\"widget-config-data\"><stong>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
                        echo "</stong>: ";
                        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                        echo "</div>
                ";
                    }
                    // line 38
                    echo "            ";
                }
                // line 39
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['configName'], $context['config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    ";
        }
        // line 41
        echo "    ";
        $this->displayBlock('actions', $context, $blocks);
        // line 62
        echo "</div>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    // line 41
    public function block_actions($context, array $blocks = array())
    {
        // line 42
        echo "        <div class=\"widget-actions\">
            ";
        // line 43
        if (array_key_exists("actions", $context)) {
            // line 44
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 45
                if (( !$this->getAttribute($context["action"], "type", array(), "any", true, true) || ($this->getAttribute($context["action"], "type", array()) == "button"))) {
                    // line 46
                    echo "                        ";
                    $context["cssType"] = ("btn btn-mini " . (($this->getAttribute($context["action"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "class", array()), "btn-primary")) : ("btn-primary")));
                    // line 47
                    echo "                    ";
                } else {
                    // line 48
                    echo "                        ";
                    $context["cssType"] = "dashboard-link";
                    // line 49
                    echo "                    ";
                }
                // line 50
                echo "                    <a class=\"dashboard-btn  ";
                echo twig_escape_filter($this->env, ($context["cssType"] ?? null), "html", null, true);
                if (( !$this->getAttribute($context["action"], "url", array(), "any", true, true) ||  !$this->getAttribute($context["action"], "url", array()))) {
                    echo " no-hash";
                }
                echo "\"
                        href=\"";
                // line 51
                echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "url", array()), "javascript:void(0);")) : ("javascript:void(0);")), "html", null, true);
                echo "\"
                        ";
                // line 52
                if ($this->getAttribute($context["action"], "data", array(), "any", true, true)) {
                    // line 53
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "data", array()));
                    foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                        // line 54
                        echo "                            data-";
                        echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["dataItemValue"], "html_attr");
                        echo "\"
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "                        ";
                }
                // line 57
                echo "                    >";
                if ($this->getAttribute($context["action"], "icon", array(), "any", true, true)) {
                    echo "<i class=\"fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                    echo "\"></i> ";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "label", array()), "html", null, true);
                echo "</a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            ";
        }
        // line 60
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 60,  239 => 59,  226 => 57,  223 => 56,  212 => 54,  207 => 53,  205 => 52,  201 => 51,  193 => 50,  190 => 49,  187 => 48,  184 => 47,  181 => 46,  179 => 45,  174 => 44,  172 => 43,  169 => 42,  166 => 41,  162 => 17,  159 => 16,  154 => 62,  151 => 41,  148 => 40,  142 => 39,  139 => 38,  131 => 36,  128 => 35,  125 => 34,  122 => 33,  119 => 32,  116 => 31,  113 => 30,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  98 => 25,  87 => 23,  82 => 22,  79 => 21,  76 => 20,  71 => 19,  68 => 18,  66 => 16,  56 => 15,  53 => 14,  49 => 12,  46 => 11,  43 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  23 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle:Dashboard:widget.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Dashboard/widget.html.twig");
    }
}

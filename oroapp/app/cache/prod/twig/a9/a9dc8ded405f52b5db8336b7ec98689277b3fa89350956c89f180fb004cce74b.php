<?php

/* SncRedisBundle:Collector:redis.html.twig */
class __TwigTemplate_12c20f5f9d054ba2b96fe256ff434508031e793e0f71a9fa74b45f2efb09cde0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "SncRedisBundle:Collector:redis.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"20\" height=\"28\" alt=\"Redis\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAv5JREFUeNrsVd9L01EUP9/tbm5ubtI2VqAOYpJP0WCYNOilQAiySbICHyp67CXqrf8jqKeejAVJ9GAUmUEMfYjSl5IYexqM1G3Mn1O3uT6fy+4QMV/yoQe/cLi7557zOZ/zOder1Ww25Tg/mxzzdwL4HwKqZDJ51Pkpy7JGtre3r9dqtbMul2vB4XBM4qp9gr962JVTBx0IcsIS+HkL64jP5zuTSqWkXq9LPp+/MDs7e1cp9QuAk4h5iZgfhwIioB8sxvb29m673e7z2Eu1WpVwOCwDAwMSi8VkZmZGcrmcFIvFc7u7u09sNttjgH8B6CvYW8AUrdHR0SvYPETA1Wg06hofH5dQKMQCUqlUZGJiQhYXFyWRSMj8/Lxsbm7KxsZG27q7u3W80+ksAeepWltbe9TZ2XmNLDs6OiQQCEhvb6/Y7Xa2r1uFhjI3Nycej0dQWPtZEJoKutGxOzs7ARRIWWjlPdCHASoQXAd4vV4N1NPTI0NDQxKJRHSR6elpSafTgjbboCxApltbW9JoNL4qv9//HVoNsz1WIksGoIgUCgXJZrPS19cny8vLMjU1pWOQqPUlCJi12fIWKLQRwSR1WwTiykACMolAmUxGF+LeALEDMu3q6tJSsDvkDqqlpaUg26ST4mLSWngmQV/BJDU4pq/P2Cr36EzLQ3aMLZfLZGtXSMgRgMZAApMxE8iGftMWWZIR2yPD9fV1fW7YImdBBYNBDydsWLESmXFINJxrzfi1psl7qKUhaxYhAbJFXL8qlUqnmcjKPDCsWJ3WElsDmiFQBiMTAenjUFHEr4D6e3V1VQ+EiYYV2yCwGQS1o/C8yIwhKP0rKyvmbjbhe8c/vQf48Rn7+wC4BBY2JjKJjM0NMBqyTRYnGIvCX4K9gT0D1jcrHo/vf8oGcXAP4DeQGKZmbI1mWjZsEfcTrhd8IGCF9puwD9A8ElxCSLqJ9Q7Wi3S3jhs4/4D1OewjrHrwtfoboLTeOjvsMmwMVoO9hmWOekCtk//L//z9EWAADA/Sh+MqnZ4AAAAASUVORK5CYII=\"/>

            <span class=\"sf-toolbar-status\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "commandcount", array()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "commandcount", array()), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 21
            echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute(($context["collector"] ?? null), "time", array())), "html", null, true);
            echo " ms</span>
            </div>

            ";
            // line 24
            if (($this->getAttribute(($context["collector"] ?? null), "erroredCommandsCount", array()) > 0)) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Failed Queries</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "erroredCommandsCount", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "
        ";
            // line 32
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "SncRedisBundle:Collector:redis.html.twig", 32)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? null), "status" => ((($this->getAttribute(($context["collector"] ?? null), "erroredCommandsCount", array()) > 0)) ? ("red") : ("")))));
            // line 33
            echo "    ";
        } elseif (($this->getAttribute(($context["collector"] ?? null), "commandcount", array()) > 0)) {
            // line 34
            echo "        ";
            ob_start();
            // line 35
            echo "            ";
            echo twig_include($this->env, $context, "@SncRedis/Collector/icon.svg.twig");
            echo "

            <span class=\"sf-toolbar-value\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "commandCount", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
            // line 40
            echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute(($context["collector"] ?? null), "time", array())), "html", null, true);
            echo "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 44
            echo "
        ";
            // line 45
            ob_start();
            // line 46
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "commandcount", array()), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 53
            echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute(($context["collector"] ?? null), "time", array())), "html", null, true);
            echo " ms</span>
            </div>

            ";
            // line 56
            if (($this->getAttribute(($context["collector"] ?? null), "erroredCommandsCount", array()) > 0)) {
                // line 57
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Failed Queries</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "erroredCommandsCount", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 62
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 63
            echo "
        ";
            // line 64
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "SncRedisBundle:Collector:redis.html.twig", 64)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? null), "status" => ((($this->getAttribute(($context["collector"] ?? null), "erroredCommandsCount", array()) > 0)) ? ("red") : ("")))));
            // line 65
            echo "    ";
        }
    }

    // line 68
    public function block_menu($context, array $blocks = array())
    {
        // line 69
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 70
        echo "
";
        // line 71
        if ((($context["profiler_markup_version"] ?? null) == 1)) {
            // line 72
            echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=\"32\" height=\"28\" src=\"data:image/png;base64, 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\" alt=\"Redis\" />
        </span>
        <strong>Redis</strong>
        <span class=\"count\">
            <span>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "commandcount", array()), "html", null, true);
            echo "</span>
            <span>";
            // line 79
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? null), "time", array())), "html", null, true);
            echo " ms</span>
        </span>
    </span>
";
        } else {
            // line 83
            echo "    <span class=\"label ";
            echo ((($this->getAttribute(($context["collector"] ?? null), "commandcount", array()) == 0)) ? ("disabled") : (""));
            echo "\">
        <span class=\"icon\">";
            // line 84
            echo twig_include($this->env, $context, "@SncRedis/Collector/icon.svg.twig", array("colors" => array("light" => "#DDD", "dark" => "#999")));
            echo "</span>
        <strong>Redis</strong>
        ";
            // line 86
            if ((0 != $this->getAttribute(($context["collector"] ?? null), "erroredCommandsCount", array()))) {
                // line 87
                echo "            <span class=\"count\">
                <span>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "erroredCommandsCount", array()), "html", null, true);
                echo "</span>
            </span>
        ";
            }
            // line 91
            echo "    </span>
";
        }
    }

    // line 95
    public function block_panel($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? null), 1)) : (1));
        // line 97
        echo "
    <h2>Commands</h2>

    ";
        // line 100
        if (($this->getAttribute(($context["collector"] ?? null), "commandcount", array()) == 0)) {
            // line 101
            echo "        <div class=\"empty\">
            <p";
            // line 102
            if ((($context["profiler_markup_version"] ?? null) == 1)) {
                echo " style=\"font-style:italic;\"";
            }
            echo ">No commands were executed or the logger is disabled.</p>
        </div>
    ";
        } else {
            // line 105
            echo "        <table class=\"alt\">
            <thead>
                <tr>
                    <th class=\"nowrap\">#</th>
                    <th class=\"nowrap\">Time</th>
                    <th class=\"nowrap\">Connection</th>
                    <th style=\"width:100%\">Command</th>
            </thead>
            <tbody>
                ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "commands", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                // line 115
                echo "                    <tr ";
                echo (($this->getAttribute($context["command"], "error", array())) ? ("class=\"status-error\"") : (""));
                echo ">
                        <td>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"nowrap\">";
                // line 117
                echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute($context["command"], "executionMS", array())), "html", null, true);
                echo " ms</td>
                        <td class=\"font-normal\">";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "conn", array()), "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "cmd", array()), "html", null, true);
                echo "

                            ";
                // line 122
                if ($this->getAttribute($context["command"], "error", array())) {
                    // line 123
                    echo "                                <br><strong class=\"font-normal\">An error occured: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["command"], "error", array()), "html", null, true);
                    echo "</strong>
                            ";
                }
                // line 125
                echo "                        </td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "            </tbody>
        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SncRedisBundle:Collector:redis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 128,  308 => 125,  302 => 123,  300 => 122,  295 => 120,  290 => 118,  286 => 117,  282 => 116,  277 => 115,  260 => 114,  249 => 105,  241 => 102,  238 => 101,  236 => 100,  231 => 97,  228 => 96,  225 => 95,  219 => 91,  213 => 88,  210 => 87,  208 => 86,  203 => 84,  198 => 83,  191 => 79,  187 => 78,  179 => 72,  177 => 71,  174 => 70,  172 => 69,  169 => 68,  164 => 65,  162 => 64,  159 => 63,  156 => 62,  150 => 59,  146 => 57,  144 => 56,  138 => 53,  130 => 48,  126 => 46,  124 => 45,  121 => 44,  114 => 40,  108 => 37,  102 => 35,  99 => 34,  96 => 33,  94 => 32,  91 => 31,  88 => 30,  82 => 27,  78 => 25,  76 => 24,  70 => 21,  62 => 16,  58 => 14,  56 => 13,  53 => 12,  48 => 10,  44 => 8,  41 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SncRedisBundle:Collector:redis.html.twig", "");
    }
}

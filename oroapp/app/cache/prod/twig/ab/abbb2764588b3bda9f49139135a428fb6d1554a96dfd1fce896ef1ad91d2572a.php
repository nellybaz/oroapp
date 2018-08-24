<?php

/* OroApiBundle:Collector:api.html.twig */
class __TwigTemplate_95ffb20d36870650ce5d429b3507a29bd8a8a865440ea510f84966a91d5778e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "OroApiBundle:Collector:api.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'stats' => array($this, 'block_stats'),
            'actions' => array($this, 'block_actions'),
            'applicableCheckers' => array($this, 'block_applicableCheckers'),
            'processors' => array($this, 'block_processors'),
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
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? null), "empty", array())) ? ("disabled") : (""));
        echo "\">
        <strong>Data API</strong>
    </span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "empty", array())) {
            // line 14
            echo "        <h2>Data API</h2>
        <div class=\"empty\">
            <p>No Data API actions were executed.</p>
        </div>
    ";
        } else {
            // line 19
            echo "        ";
            $this->displayBlock("stats", $context, $blocks);
            echo "
        ";
            // line 20
            $this->displayBlock("actions", $context, $blocks);
            echo "
        ";
            // line 21
            $this->displayBlock("applicableCheckers", $context, $blocks);
            echo "
        ";
            // line 22
            $this->displayBlock("processors", $context, $blocks);
            echo "

        <script type=\"text/javascript\">//<![CDATA[

            function sortTable(header, column, targetId) {
                \"use strict\";

                var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                    items = [],
                    target = document.getElementById(targetId),
                    rows = target.children,
                    headers = header.parentElement.children,
                    i;

                for (i = 0; i < rows.length; ++i) {
                    items.push(rows[i]);
                }

                for (i = 0; i < headers.length; ++i) {
                    headers[i].removeAttribute('data-sort-direction');
                    if (headers[i].children.length > 0) {
                        headers[i].children[0].innerHTML = '';
                    }
                }

                header.setAttribute('data-sort-direction', (-1*direction).toString());
                header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';

                items.sort(function(a, b) {
                    return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
                });

                for (i = 0; i < items.length; ++i) {
                    Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                    Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                    target.appendChild(items[i]);
                }
            }

        //]]></script>
    ";
        }
    }

    // line 65
    public function block_stats($context, array $blocks = array())
    {
        // line 66
        echo "    <h2>Data API Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 70
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? null), "totalTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\">Total time</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "actionCount", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed actions</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "processorCount", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed processors</span>
        </div>
    </div>
";
    }

    // line 84
    public function block_actions($context, array $blocks = array())
    {
        // line 85
        echo "    <h2>Actions</h2>

    <table class=\"alt\" id=\"actionsPlaceholder\">
        <thead>
        <tr>
            <th onclick=\"javascript:sortTable(this, 0, 'actions')\" style=\"cursor: pointer;\">Time<span></span></th>
            <th onclick=\"javascript:sortTable(this, 1, 'actions')\" style=\"cursor: pointer;\">Used<span></span></th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody id=\"actions\">
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "actions", array()));
        foreach ($context['_seq'] as $context["i"] => $context["action"]) {
            // line 97
            echo "            <tr id=\"actionNo-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
            echo "\">
                <td>";
            // line 98
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["action"], "time", array()) * 1000)), "html", null, true);
            echo "&nbsp;ms";
            if ((($this->getAttribute($context["action"], "time", array()) * 1000) > 5)) {
                echo " (";
                echo twig_escape_filter($this->env, sprintf("%0.1f", (($this->getAttribute($context["action"], "time", array()) * 100) / $this->getAttribute(($context["collector"] ?? null), "totalTime", array()))), "html", null, true);
                echo "%)";
            }
            echo "</td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "count", array()), "html", null, true);
            echo " times</td>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "name", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "        </tbody>
    </table>
";
    }

    // line 107
    public function block_applicableCheckers($context, array $blocks = array())
    {
        // line 108
        echo "    <h2>Applicable Checkers</h2>

    <table class=\"alt\" id=\"applicableCheckersPlaceholder\">
        <thead>
        <tr>
            <th onclick=\"javascript:sortTable(this, 0, 'applicableCheckers')\" style=\"cursor: pointer;\">Time<span></span></th>
            <th onclick=\"javascript:sortTable(this, 1, 'applicableCheckers')\" style=\"cursor: pointer;\">Used<span></span></th>
            <th>Class</th>
        </tr>
        </thead>
        <tbody id=\"applicableCheckers\">
        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "applicableCheckers", array()));
        foreach ($context['_seq'] as $context["i"] => $context["applicableChecker"]) {
            // line 120
            echo "            <tr id=\"applicableCheckerNo-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
            echo "\">
                <td>";
            // line 121
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["applicableChecker"], "time", array()) * 1000)), "html", null, true);
            echo "&nbsp;ms";
            if ((($this->getAttribute($context["applicableChecker"], "time", array()) * 1000) > 1)) {
                echo " (";
                echo twig_escape_filter($this->env, sprintf("%0.1f", (($this->getAttribute($context["applicableChecker"], "time", array()) * 100) / $this->getAttribute(($context["collector"] ?? null), "totalTime", array()))), "html", null, true);
                echo "%)";
            }
            echo "</td>
                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicableChecker"], "count", array()), "html", null, true);
            echo " times</td>
                <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicableChecker"], "class", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['applicableChecker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "        </tbody>
    </table>
";
    }

    // line 130
    public function block_processors($context, array $blocks = array())
    {
        // line 131
        echo "    <h2>Processors</h2>

    <table class=\"alt\" id=\"processorsPlaceholder\">
        <thead>
        <tr>
            <th onclick=\"javascript:sortTable(this, 0, 'processors')\" style=\"cursor: pointer;\">Time<span></span></th>
            <th onclick=\"javascript:sortTable(this, 1, 'processors')\" style=\"cursor: pointer;\">Used<span></span></th>
            <th>Id</th>
        </tr>
        </thead>
        <tbody id=\"processors\">
        ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "processors", array()));
        foreach ($context['_seq'] as $context["i"] => $context["processor"]) {
            // line 143
            echo "            <tr id=\"processorNo-";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
            echo "\">
                <td>";
            // line 144
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["processor"], "time", array()) * 1000)), "html", null, true);
            echo "&nbsp;ms";
            if ((($this->getAttribute($context["processor"], "time", array()) * 1000) > 1)) {
                echo " (";
                echo twig_escape_filter($this->env, sprintf("%0.1f", (($this->getAttribute($context["processor"], "time", array()) * 100) / $this->getAttribute(($context["collector"] ?? null), "totalTime", array()))), "html", null, true);
                echo "%)";
            }
            echo "</td>
                <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["processor"], "count", array()), "html", null, true);
            echo " times</td>
                <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["processor"], "id", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['processor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "OroApiBundle:Collector:api.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 149,  308 => 146,  304 => 145,  294 => 144,  287 => 143,  283 => 142,  270 => 131,  267 => 130,  261 => 126,  252 => 123,  248 => 122,  238 => 121,  231 => 120,  227 => 119,  214 => 108,  211 => 107,  205 => 103,  196 => 100,  192 => 99,  182 => 98,  175 => 97,  171 => 96,  158 => 85,  155 => 84,  146 => 78,  139 => 74,  132 => 70,  126 => 66,  123 => 65,  77 => 22,  73 => 21,  69 => 20,  64 => 19,  57 => 14,  54 => 13,  51 => 12,  42 => 7,  39 => 6,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroApiBundle:Collector:api.html.twig", "");
    }
}

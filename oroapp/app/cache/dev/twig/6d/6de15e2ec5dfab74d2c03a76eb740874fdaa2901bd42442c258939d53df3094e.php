<?php

/* OroApiBundle:Collector:api.html.twig */
class __TwigTemplate_547b622af2bfa031b817fe93e72cc8ea447b899b224a30468f2b9da5af467373 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroApiBundle:Collector:api.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "empty", array())) ? ("disabled") : (""));
        echo "\">
        <strong>Data API</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "empty", array())) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_stats($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stats"));

        // line 66
        echo "    <h2>Data API Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 70
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\">Total time</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "actionCount", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed actions</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "processorCount", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed processors</span>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 84
    public function block_actions($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "actions", array()));
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
                echo twig_escape_filter($this->env, sprintf("%0.1f", (($this->getAttribute($context["action"], "time", array()) * 100) / $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array()))), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 107
    public function block_applicableCheckers($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "applicableCheckers"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicableCheckers", array()));
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
                echo twig_escape_filter($this->env, sprintf("%0.1f", (($this->getAttribute($context["applicableChecker"], "time", array()) * 100) / $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array()))), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 130
    public function block_processors($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "processors"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "processors", array()));
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
                echo twig_escape_filter($this->env, sprintf("%0.1f", (($this->getAttribute($context["processor"], "time", array()) * 100) / $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array()))), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  362 => 149,  353 => 146,  349 => 145,  339 => 144,  332 => 143,  328 => 142,  315 => 131,  309 => 130,  300 => 126,  291 => 123,  287 => 122,  277 => 121,  270 => 120,  266 => 119,  253 => 108,  247 => 107,  238 => 103,  229 => 100,  225 => 99,  215 => 98,  208 => 97,  204 => 96,  191 => 85,  185 => 84,  173 => 78,  166 => 74,  159 => 70,  153 => 66,  147 => 65,  98 => 22,  94 => 21,  90 => 20,  85 => 19,  78 => 14,  75 => 13,  69 => 12,  57 => 7,  51 => 6,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.empty ? 'disabled' }}\">
        <strong>Data API</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.empty %}
        <h2>Data API</h2>
        <div class=\"empty\">
            <p>No Data API actions were executed.</p>
        </div>
    {% else %}
        {{ block('stats') }}
        {{ block('actions') }}
        {{ block('applicableCheckers') }}
        {{ block('processors') }}

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
    {% endif %}
{% endblock %}

{% block stats %}
    <h2>Data API Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(collector.totalTime * 1000) }} ms</span>
            <span class=\"label\">Total time</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.actionCount }}</span>
            <span class=\"label\">Executed actions</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.processorCount }}</span>
            <span class=\"label\">Executed processors</span>
        </div>
    </div>
{% endblock stats %}

{% block actions %}
    <h2>Actions</h2>

    <table class=\"alt\" id=\"actionsPlaceholder\">
        <thead>
        <tr>
            <th onclick=\"javascript:sortTable(this, 0, 'actions')\" style=\"cursor: pointer;\">Time<span></span></th>
            <th onclick=\"javascript:sortTable(this, 1, 'actions')\" style=\"cursor: pointer;\">Used<span></span></th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody id=\"actions\">
        {% for i, action in collector.actions %}
            <tr id=\"actionNo-{{ i }}\" class=\"{{ cycle(['odd', 'even'], i) }}\">
                <td>{{ '%0.2f'|format(action.time * 1000) }}&nbsp;ms{% if action.time * 1000 > 5 %} ({{ '%0.1f'|format((action.time * 100) / collector.totalTime) }}%){% endif %}</td>
                <td>{{ action.count }} times</td>
                <td>{{ action.name }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock actions %}

{% block applicableCheckers %}
    <h2>Applicable Checkers</h2>

    <table class=\"alt\" id=\"applicableCheckersPlaceholder\">
        <thead>
        <tr>
            <th onclick=\"javascript:sortTable(this, 0, 'applicableCheckers')\" style=\"cursor: pointer;\">Time<span></span></th>
            <th onclick=\"javascript:sortTable(this, 1, 'applicableCheckers')\" style=\"cursor: pointer;\">Used<span></span></th>
            <th>Class</th>
        </tr>
        </thead>
        <tbody id=\"applicableCheckers\">
        {% for i, applicableChecker in collector.applicableCheckers %}
            <tr id=\"applicableCheckerNo-{{ i }}\" class=\"{{ cycle(['odd', 'even'], i) }}\">
                <td>{{ '%0.2f'|format(applicableChecker.time * 1000) }}&nbsp;ms{% if applicableChecker.time * 1000 > 1 %} ({{ '%0.1f'|format((applicableChecker.time * 100) / collector.totalTime) }}%){% endif %}</td>
                <td>{{ applicableChecker.count }} times</td>
                <td>{{ applicableChecker.class }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock applicableCheckers %}

{% block processors %}
    <h2>Processors</h2>

    <table class=\"alt\" id=\"processorsPlaceholder\">
        <thead>
        <tr>
            <th onclick=\"javascript:sortTable(this, 0, 'processors')\" style=\"cursor: pointer;\">Time<span></span></th>
            <th onclick=\"javascript:sortTable(this, 1, 'processors')\" style=\"cursor: pointer;\">Used<span></span></th>
            <th>Id</th>
        </tr>
        </thead>
        <tbody id=\"processors\">
        {% for i, processor in collector.processors %}
            <tr id=\"processorNo-{{ i }}\" class=\"{{ cycle(['odd', 'even'], i) }}\">
                <td>{{ '%0.2f'|format(processor.time * 1000) }}&nbsp;ms{% if processor.time * 1000 > 1 %} ({{ '%0.1f'|format((processor.time * 100) / collector.totalTime) }}%){% endif %}</td>
                <td>{{ processor.count }} times</td>
                <td>{{ processor.id }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock processors %}
", "OroApiBundle:Collector:api.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/ApiBundle/Resources/views/Collector/api.html.twig");
    }
}

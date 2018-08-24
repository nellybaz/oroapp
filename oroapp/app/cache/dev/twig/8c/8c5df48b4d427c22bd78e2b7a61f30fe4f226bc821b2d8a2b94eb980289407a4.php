<?php

/* OroEntityBundle:Collector:duplicate_queries.html.twig */
class __TwigTemplate_bc87ff18875b92f2749d246666842facf6b48dfd3b55afa414d36d6d659cb95c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "OroEntityBundle:Collector:duplicate_queries.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEntityBundle:Collector:duplicate_queries.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "identicalQueriesCount", array()) > 0) || ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "similarQueriesCount", array()) > 0))) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"20\" height=\"28\" alt=\"Doctrine Stats\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAcppVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIgogICAgICAgICAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyI+CiAgICAgICAgIDx4bXA6Q3JlYXRvclRvb2w+cGFpbnQubmV0IDQuMC41PC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgqoHVAWAAADoUlEQVRIDe1VTUwTQRSe7XZrS39BDtZEj0oUPRhjojEcGwyGi4lXThz05NWDZ4/cuWAPxpumgVBSSsLFE8QE/AkFSdoGWhGatiy09Hf93qa7mdlurQaPTjJ5M2/e//tmRmJ9RjweX9c0bdXr9eb9fv+woii3sA9DTe6livOCJEk7Dofjc6PR+Ar6TeolbPCXlpbaUKxAMSvL8vu1tbVMLpe7jHPFkOlF2+12s1wuq8fHx2VnLyGODx+SF86ug3c3lUrdyGQyD2HEw8nYLpG9zkdWzGErITKbna2EEgy43e4QHPv+ZCaTSd/ExITP6XT6+jpCJm8RfR6GNUwafXWMOGdmZtjGxgaDDSb0yK7xrVbrNhSpTwFQ+eTkxFGpVAaw1h2enp6yo6Mjls/n2f7+vk7RE8OXSYUeIdo7OBmpVqvZer1OjY8BbWPYp+HgI87rBwcH92DoGhwLmSFrBjl2dnZmGucXgiMcUGmExiNaf61WI0iPYjZIGb0iuTZvyGg8+Gx2dvYTf4YK7FgdUeOJZzTeRYihSTxMFy1QTiLCSCQSjHqysLDApqenR+jQcA79ESF9RPxvGt9BJY86ISOkvY6yxBHMY9AQqB+TSiQEhH3XiMViXTwedYIjSL5EWZJwEh0cHFSBqBfYUzn1knVZ6sPgnQvw7jw3LZQwh4v5ZmhoiJ6el7hwVdhsY90CqtzFYvEiZGyz3NvbY3Nzc10hWDOCLYl4VwDXB9FotLG9vR0E6ugOaeA1MQkoZMgWdQScycnJLAkYQ1XVotWRhkM9Szi8AFjKHdQR77eoW1lZMVGHkg2TEw51w0L6KMcXzApkzvfc2KBO+FOmpqZUZFICADSXy/Vza2tLKRQKV7EXAqJorQOvOiuVSvq7Zpyhl/pbh69ChC2yeYYeqOjBIv6e1XA4/B1O9NtqKP8NJdSl02kGm/orYOqCcR8ZjYKRhoNF/KjV8fHxHfACcExZKeD7AA56pgTEGkYoeryRxtakAhhgkJQJYTebzeaP3d3d2ubm5iUEoH9ydI5s4VOmuyU44hrP5ufnP5gesEBQKcERGDoIQGDP4UHkCmzTJ2f+plQGmtaxvLxsoi4QCDy1ngtNhsEEBIpwpD/jlIBVodeef27sZISMYJjAMAb6BML04ZuZ2CnzPP654fnGWog4EomkcYvfIaPnoVDotcfjyRqC56VCQ3ljh4eHfjQ4At4jZOjH7CnL6yHIVDAYfMXz/q/PVYFfJewFJv3g478AAAAASUVORK5CYII=\" />
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "identicalQueriesCount", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional\">
                <span class=\"sf-toolbar-lavel\">/</span>
                <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "similarQueriesCount", array()), "html", null, true);
            echo "</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Identical Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "identicalQueriesCount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Similar Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "similarQueriesCount", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 24
            echo "
        ";
            // line 25
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "OroEntityBundle:Collector:duplicate_queries.html.twig", 25)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter(($context["status"] ?? $this->getContext($context, "status")), "")) : ("")))));
            // line 26
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 30
        echo "<span class=\"label\">
    <span class=\"icon\">
        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAcppVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIgogICAgICAgICAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyI+CiAgICAgICAgIDx4bXA6Q3JlYXRvclRvb2w+cGFpbnQubmV0IDQuMC41PC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgqoHVAWAAADD0lEQVRIDe1VS28SURQ+lxkKtfZBxESjGBsT3bh255YFpDbRpXHZH6C/oPEPsHCBCxfuu2kb0jZNV8RoLEZDkL4SlDa2TVqqBChQGBi/M2XgzhQIE1248CZ37uO8z3fuGUG2sbS0dIqrjZGRkcPR0VG/2+2+o+v6ZUxhY+13rAohDhVF+Vqr1T5AdvWC8MrKCu51AuMZGD8lEolvBwcHAWh199PcjdZoNLRisVjI5/O/1G4MMEIw5sF6b2dnZ3J3d/cahC441U1WvkM2jGO9XieXTLDvYcjt9XqHce/C3vFYW1sT4XBYqKoqhB0TpOsBFCucPh6cx2az2Tca9hgpoqOjI8pkMrS5uUlIN01PT1MymaS9vT0Sdky2t7dv7u/vK/DCjxCUk5MTUalUuqbY8ET6IL1UKpWMWa1WJQqRoQAK25ik02n/1tYWQeg8JKK+0cjaZExYpzwsnoII3nMAsbdyylI99sCEIpEIxWIxikaj/EyMUS6XcyogyACDSWDDhSGwb5GdL2yEMWF8Z2ZmLplOA8NbLozPMPIKar9jrThX35FYWFigbDZL7CxnRK46jugxCFkYfD0xMZHTNO0NRB2nrWOus5MjbFcdyNrQ0ND78fHx22g/N3BW4JTOlQRHHBnO5XI0OzvbsYidXHUc3f25uTnf+vq6iZXgfA86JEw4dRYxe9UpqBALh13AIm07yFUXCoU0k4y3VWdDVXjtbV06isBUZK4yJouLi4oUocJV9xZebwCHU1QdT1PO8dqv6lww8BQRncJgAvNjIBBoOLbQQ0COUCwvL+swAFv6mcfj+YIWdBW9bRJRctUZb6KHnp7XhUKB4vG4hY7+bfQ5LgAv3tBd/H+0VCol/nqvQyRGKfKKyFT8erkV8f/H4tEgB7nq5ufnf5gy0J3lqsthXsGBNfP7cW6hpVHGZGxsjH//7aEiiidQ/gzrFG655Cxvq805wIarrtdwBYPBd/g7PkdEUz6f7yXaz89ezH9yb0nT8fHxdbyjF4juETAaxrTQBzXEmKBnPhyU/z/fv5GB33oWqtz/+AV9AAAAAElFTkSuQmCC\" /></span>
    <strong>Doctrine Stats</strong>
    ";
        // line 34
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "identicalQueriesCount", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "similarQueriesCount", array()))) {
            // line 35
            echo "        <span class=\"count\">
            <span>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "identicalQueriesCount", array()), "html", null, true);
            echo "</span>
            <span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "similarQueriesCount", array()), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 40
        echo "</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_panel($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 44
        echo "    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "identicalQueriesCount", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Identical Queries</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "similarQueriesCount", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Similar Queries</span>
        </div>
    </div>

    <h2>Identical Queries <br/><small>Queries with identical parameters</small></h2>

    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "identicalQueries", array()));
        foreach ($context['_seq'] as $context["connection"] => $context["identicalQueries"]) {
            // line 60
            echo "        ";
            if ( !twig_test_empty($context["identicalQueries"])) {
                // line 61
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\">Times called</th>
                    <th style=\"width: 100%;\">SQL</th>
                </tr>
                </thead>

                <tbody>
                ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["identicalQueries"]);
                foreach ($context['_seq'] as $context["_key"] => $context["identicalQuery"]) {
                    // line 72
                    echo "                    <tr>
                        <td class=\"nowrap\">";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["identicalQuery"], "count", array()), "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 75
                    echo $this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->formatQuery($this->getAttribute($context["identicalQuery"], "sql", array()), true);
                    echo "
                            <div>
                                <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\YamlExtension')->encode($this->getAttribute($context["identicalQuery"], "parameters", array())), "html", null, true);
                    echo "
                            </div>
                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['identicalQuery'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "                </tbody>
            </table>
        ";
            }
            // line 85
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['identicalQueries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
    <h2>Similar Queries <br/><small>Queries with different parameters</small></h2>

    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "similarQueries", array()));
        foreach ($context['_seq'] as $context["connection"] => $context["similarQueries"]) {
            // line 90
            echo "        ";
            if ( !twig_test_empty($context["similarQueries"])) {
                // line 91
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\">Times called</th>
                    <th style=\"width: 100%;\">SQL</th>
                </tr>
                </thead>

                <tbody>
                ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["similarQueries"]);
                foreach ($context['_seq'] as $context["_key"] => $context["similarQuery"]) {
                    // line 102
                    echo "                    <tr>
                        <td class=\"nowrap\">";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($context["similarQuery"], "count", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 104
                    echo $this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->formatQuery($this->getAttribute($context["similarQuery"], "sql", array()), true);
                    echo "</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['similarQuery'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                </tbody>
            </table>
        ";
            }
            // line 110
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['similarQueries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Collector:duplicate_queries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 110,  268 => 107,  259 => 104,  255 => 103,  252 => 102,  248 => 101,  234 => 91,  231 => 90,  227 => 89,  222 => 86,  216 => 85,  211 => 82,  200 => 77,  195 => 75,  190 => 73,  187 => 72,  183 => 71,  169 => 61,  166 => 60,  162 => 59,  152 => 52,  145 => 48,  139 => 44,  133 => 43,  125 => 40,  119 => 37,  115 => 36,  112 => 35,  110 => 34,  104 => 30,  98 => 29,  90 => 26,  88 => 25,  85 => 24,  79 => 21,  72 => 17,  68 => 15,  66 => 14,  63 => 13,  57 => 10,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
    {% if collector.identicalQueriesCount > 0 or collector.similarQueriesCount > 0 %}
        {% set icon %}
            <img width=\"20\" height=\"28\" alt=\"Doctrine Stats\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAcppVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIgogICAgICAgICAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyI+CiAgICAgICAgIDx4bXA6Q3JlYXRvclRvb2w+cGFpbnQubmV0IDQuMC41PC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgqoHVAWAAADoUlEQVRIDe1VTUwTQRSe7XZrS39BDtZEj0oUPRhjojEcGwyGi4lXThz05NWDZ4/cuWAPxpumgVBSSsLFE8QE/AkFSdoGWhGatiy09Hf93qa7mdlurQaPTjJ5M2/e//tmRmJ9RjweX9c0bdXr9eb9fv+woii3sA9DTe6livOCJEk7Dofjc6PR+Ar6TeolbPCXlpbaUKxAMSvL8vu1tbVMLpe7jHPFkOlF2+12s1wuq8fHx2VnLyGODx+SF86ug3c3lUrdyGQyD2HEw8nYLpG9zkdWzGErITKbna2EEgy43e4QHPv+ZCaTSd/ExITP6XT6+jpCJm8RfR6GNUwafXWMOGdmZtjGxgaDDSb0yK7xrVbrNhSpTwFQ+eTkxFGpVAaw1h2enp6yo6Mjls/n2f7+vk7RE8OXSYUeIdo7OBmpVqvZer1OjY8BbWPYp+HgI87rBwcH92DoGhwLmSFrBjl2dnZmGucXgiMcUGmExiNaf61WI0iPYjZIGb0iuTZvyGg8+Gx2dvYTf4YK7FgdUeOJZzTeRYihSTxMFy1QTiLCSCQSjHqysLDApqenR+jQcA79ESF9RPxvGt9BJY86ISOkvY6yxBHMY9AQqB+TSiQEhH3XiMViXTwedYIjSL5EWZJwEh0cHFSBqBfYUzn1knVZ6sPgnQvw7jw3LZQwh4v5ZmhoiJ6el7hwVdhsY90CqtzFYvEiZGyz3NvbY3Nzc10hWDOCLYl4VwDXB9FotLG9vR0E6ugOaeA1MQkoZMgWdQScycnJLAkYQ1XVotWRhkM9Szi8AFjKHdQR77eoW1lZMVGHkg2TEw51w0L6KMcXzApkzvfc2KBO+FOmpqZUZFICADSXy/Vza2tLKRQKV7EXAqJorQOvOiuVSvq7Zpyhl/pbh69ChC2yeYYeqOjBIv6e1XA4/B1O9NtqKP8NJdSl02kGm/orYOqCcR8ZjYKRhoNF/KjV8fHxHfACcExZKeD7AA56pgTEGkYoeryRxtakAhhgkJQJYTebzeaP3d3d2ubm5iUEoH9ydI5s4VOmuyU44hrP5ufnP5gesEBQKcERGDoIQGDP4UHkCmzTJ2f+plQGmtaxvLxsoi4QCDy1ngtNhsEEBIpwpD/jlIBVodeef27sZISMYJjAMAb6BML04ZuZ2CnzPP654fnGWog4EomkcYvfIaPnoVDotcfjyRqC56VCQ3ljh4eHfjQ4At4jZOjH7CnL6yHIVDAYfMXz/q/PVYFfJewFJv3g478AAAAASUVORK5CYII=\" />
            <span class=\"sf-toolbar-value\">{{ collector.identicalQueriesCount }}</span>
            <span class=\"sf-toolbar-info-piece-additional\">
                <span class=\"sf-toolbar-lavel\">/</span>
                <span class=\"sf-toolbar-value\">{{ collector.similarQueriesCount }}</span>
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Identical Queries</b>
                <span class=\"sf-toolbar-status\">{{ collector.identicalQueriesCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Similar Queries</b>
                <span class=\"sf-toolbar-status\">{{ collector.similarQueriesCount }}</span>
            </div>
        {% endset %}

        {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { link: profiler_url, status: status|default('') } %}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">
        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAcppVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIgogICAgICAgICAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyI+CiAgICAgICAgIDx4bXA6Q3JlYXRvclRvb2w+cGFpbnQubmV0IDQuMC41PC94bXA6Q3JlYXRvclRvb2w+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgqoHVAWAAADD0lEQVRIDe1VS28SURQ+lxkKtfZBxESjGBsT3bh255YFpDbRpXHZH6C/oPEPsHCBCxfuu2kb0jZNV8RoLEZDkL4SlDa2TVqqBChQGBi/M2XgzhQIE1248CZ37uO8z3fuGUG2sbS0dIqrjZGRkcPR0VG/2+2+o+v6ZUxhY+13rAohDhVF+Vqr1T5AdvWC8MrKCu51AuMZGD8lEolvBwcHAWh199PcjdZoNLRisVjI5/O/1G4MMEIw5sF6b2dnZ3J3d/cahC441U1WvkM2jGO9XieXTLDvYcjt9XqHce/C3vFYW1sT4XBYqKoqhB0TpOsBFCucPh6cx2az2Tca9hgpoqOjI8pkMrS5uUlIN01PT1MymaS9vT0Sdky2t7dv7u/vK/DCjxCUk5MTUalUuqbY8ET6IL1UKpWMWa1WJQqRoQAK25ik02n/1tYWQeg8JKK+0cjaZExYpzwsnoII3nMAsbdyylI99sCEIpEIxWIxikaj/EyMUS6XcyogyACDSWDDhSGwb5GdL2yEMWF8Z2ZmLplOA8NbLozPMPIKar9jrThX35FYWFigbDZL7CxnRK46jugxCFkYfD0xMZHTNO0NRB2nrWOus5MjbFcdyNrQ0ND78fHx22g/N3BW4JTOlQRHHBnO5XI0OzvbsYidXHUc3f25uTnf+vq6iZXgfA86JEw4dRYxe9UpqBALh13AIm07yFUXCoU0k4y3VWdDVXjtbV06isBUZK4yJouLi4oUocJV9xZebwCHU1QdT1PO8dqv6lww8BQRncJgAvNjIBBoOLbQQ0COUCwvL+swAFv6mcfj+YIWdBW9bRJRctUZb6KHnp7XhUKB4vG4hY7+bfQ5LgAv3tBd/H+0VCol/nqvQyRGKfKKyFT8erkV8f/H4tEgB7nq5ufnf5gy0J3lqsthXsGBNfP7cW6hpVHGZGxsjH//7aEiiidQ/gzrFG655Cxvq805wIarrtdwBYPBd/g7PkdEUz6f7yXaz89ezH9yb0nT8fHxdbyjF4juETAaxrTQBzXEmKBnPhyU/z/fv5GB33oWqtz/+AV9AAAAAElFTkSuQmCC\" /></span>
    <strong>Doctrine Stats</strong>
    {% if collector.identicalQueriesCount or collector.similarQueriesCount %}
        <span class=\"count\">
            <span>{{ collector.identicalQueriesCount }}</span>
            <span>{{ collector.similarQueriesCount }}</span>
        </span>
    {% endif %}
</span>
{% endblock %}

{% block panel %}
    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.identicalQueriesCount }}</span>
            <span class=\"label\">Identical Queries</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.similarQueriesCount }}</span>
            <span class=\"label\">Similar Queries</span>
        </div>
    </div>

    <h2>Identical Queries <br/><small>Queries with identical parameters</small></h2>

    {% for connection, identicalQueries in collector.identicalQueries %}
        {% if identicalQueries is not empty %}
            <h3>{{ connection }} <small>connection</small></h3>
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\">Times called</th>
                    <th style=\"width: 100%;\">SQL</th>
                </tr>
                </thead>

                <tbody>
                {% for identicalQuery in identicalQueries %}
                    <tr>
                        <td class=\"nowrap\">{{ identicalQuery.count }}</td>
                        <td>
                            {{ identicalQuery.sql|doctrine_pretty_query(highlight_only = true) }}
                            <div>
                                <strong class=\"font-normal text-small\">Parameters</strong>: {{ identicalQuery.parameters|yaml_encode }}
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <h2>Similar Queries <br/><small>Queries with different parameters</small></h2>

    {% for connection, similarQueries in collector.similarQueries %}
        {% if similarQueries is not empty %}
            <h3>{{ connection }} <small>connection</small></h3>
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    <th class=\"nowrap\">Times called</th>
                    <th style=\"width: 100%;\">SQL</th>
                </tr>
                </thead>

                <tbody>
                {% for similarQuery in similarQueries %}
                    <tr>
                        <td class=\"nowrap\">{{ similarQuery.count }}</td>
                        <td>{{ similarQuery.sql|doctrine_pretty_query(highlight_only = true) }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor%}
{% endblock %}
", "OroEntityBundle:Collector:duplicate_queries.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityBundle/Resources/views/Collector/duplicate_queries.html.twig");
    }
}

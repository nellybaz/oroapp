<?php

/* OroMessageQueueBundle:Collector:message_queue.html.twig */
class __TwigTemplate_c77bc63ad818adc8576f9ff66e1e873a0a1f10a39c2ed87a0c05f513861f3643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "OroMessageQueueBundle:Collector:message_queue.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'sentMessages' => array($this, 'block_sentMessages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroMessageQueueBundle:Collector:message_queue.html.twig"));

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
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sentMessages", array()))) ? ("disabled") : (""));
        echo "\">
        <strong>Message Queue</strong>
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
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sentMessages", array()))) {
            // line 14
            echo "        ";
            $this->displayBlock("sentMessages", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Message Queue</h2>
        <div class=\"empty\">
            <p>No messages were sent during this request.</p>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_sentMessages($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sentMessages"));

        // line 24
        echo "    <h2>Sent messages</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Topic</th>
                <th>Message</th>
                <th>Priority</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sentMessages", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["sentMessage"]) {
            // line 36
            echo "                <tr>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["sentMessage"], "topic", array()), "html", null, true);
            echo "</td>
                    <td><pre>";
            // line 39
            echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "prettyPrintMessage", array(0 => $this->getAttribute($context["sentMessage"], "message", array())), "method");
            echo "</pre></td>
                    <td><span title=\"";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute($context["sentMessage"], "priority", array(), "any", true, true)) ? ($this->getAttribute($context["sentMessage"], "priority", array())) : ("")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["sentMessage"], "priority", array(), "any", true, true)) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "prettyPrintPriority", array(0 => $this->getAttribute($context["sentMessage"], "priority", array())), "method")) : ("")), "html", null, true);
            echo "</span></td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sentMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>

    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroMessageQueueBundle:Collector:message_queue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 43,  144 => 40,  140 => 39,  136 => 38,  132 => 37,  129 => 36,  112 => 35,  99 => 24,  93 => 23,  81 => 16,  75 => 14,  72 => 13,  66 => 12,  54 => 7,  48 => 6,  37 => 3,  11 => 1,);
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
    <span class=\"label {{ collector.sentMessages is empty ? 'disabled' }}\">
        <strong>Message Queue</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.sentMessages|length %}
        {{ block('sentMessages') }}
    {% else %}
        <h2>Message Queue</h2>
        <div class=\"empty\">
            <p>No messages were sent during this request.</p>
        </div>
    {% endif %}
{% endblock %}

{% block sentMessages %}
    <h2>Sent messages</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Topic</th>
                <th>Message</th>
                <th>Priority</th>
            </tr>
        </thead>
        <tbody>
            {% for sentMessage in collector.sentMessages %}
                <tr>
                    <td>{{ loop.index }}</td>
                    <td>{{ sentMessage.topic }}</td>
                    <td><pre>{{ collector.prettyPrintMessage(sentMessage.message)|raw }}</pre></td>
                    <td><span title=\"{{ sentMessage.priority is defined ? sentMessage.priority : '' }}\">{{ sentMessage.priority is defined ? collector.prettyPrintPriority(sentMessage.priority) : '' }}</span></td>
                </tr>
            {% endfor %}
        </tbody>

    </table>
{% endblock sentMessages %}
", "OroMessageQueueBundle:Collector:message_queue.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/MessageQueueBundle/Resources/views/Collector/message_queue.html.twig");
    }
}

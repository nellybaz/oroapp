<?php

/* OroMessageQueueBundle:Collector:message_queue.html.twig */
class __TwigTemplate_b6f77d5aeba2e08cd9336e615a39a35fb15bada3aff7b157e5b4be4093c5c261 extends Twig_Template
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
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? null), "sentMessages", array()))) ? ("disabled") : (""));
        echo "\">
        <strong>Message Queue</strong>
    </span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "sentMessages", array()))) {
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
    }

    // line 23
    public function block_sentMessages($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "sentMessages", array()));
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
            echo $this->getAttribute(($context["collector"] ?? null), "prettyPrintMessage", array(0 => $this->getAttribute($context["sentMessage"], "message", array())), "method");
            echo "</pre></td>
                    <td><span title=\"";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute($context["sentMessage"], "priority", array(), "any", true, true)) ? ($this->getAttribute($context["sentMessage"], "priority", array())) : ("")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["sentMessage"], "priority", array(), "any", true, true)) ? ($this->getAttribute(($context["collector"] ?? null), "prettyPrintPriority", array(0 => $this->getAttribute($context["sentMessage"], "priority", array())), "method")) : ("")), "html", null, true);
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
        return array (  136 => 43,  117 => 40,  113 => 39,  109 => 38,  105 => 37,  102 => 36,  85 => 35,  72 => 24,  69 => 23,  60 => 16,  54 => 14,  51 => 13,  48 => 12,  39 => 7,  36 => 6,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroMessageQueueBundle:Collector:message_queue.html.twig", "");
    }
}

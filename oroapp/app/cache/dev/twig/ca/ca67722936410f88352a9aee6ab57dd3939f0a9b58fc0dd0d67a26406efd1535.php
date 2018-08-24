<?php

/* OroWindowsBundle::states.html.twig */
class __TwigTemplate_c11321e52f4dcedb9ef10cb8fc74cde0b0ca1ea23cb7b4f6ca17adab3d60c223 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroWindowsBundle::states.html.twig"));

        // line 1
        if (twig_length_filter($this->env, ($context["windowStates"] ?? $this->getContext($context, "windowStates")))) {
            // line 2
            echo "    <div style=\"display: none\" id=\"widget-states-container\" data-layout=\"separate\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["windowStates"] ?? $this->getContext($context, "windowStates")));
            foreach ($context['_seq'] as $context["_key"] => $context["windowState"]) {
                // line 4
                echo "            <div id=\"widget-restored-state-";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["windowState"], "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["windowState"], "id", array()), "none")) : ("none")), "html", null, true);
                echo "\">
                ";
                // line 5
                echo $this->env->getExtension('Oro\Bundle\WindowsBundle\Twig\WindowsExtension')->renderFragment($this->env, $context["windowState"]);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['windowState'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>

    <script type=\"text/javascript\">
        require(['jquery', 'oro/dialog-widget', 'orowindows/js/dialog/state/model', 'ready!app'],
        function(\$, DialogWidget, StateModel) {
            \$(function(){
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["windowStates"] ?? $this->getContext($context, "windowStates")));
            foreach ($context['_seq'] as $context["_key"] => $context["windowState"]) {
                if ($this->getAttribute($context["windowState"], "renderedSuccessfully", array())) {
                    // line 15
                    echo "                new DialogWidget({
                    autoRender: true,
                    model: new StateModel(";
                    // line 17
                    echo twig_jsonencode_filter(array("data" => $this->getAttribute($context["windowState"], "data", array()), "id" => $this->getAttribute($context["windowState"], "id", array())));
                    echo ")
                });
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['windowState'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            });
        });
    </script>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroWindowsBundle::states.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  62 => 17,  58 => 15,  53 => 14,  45 => 8,  36 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if windowStates|length %}
    <div style=\"display: none\" id=\"widget-states-container\" data-layout=\"separate\">
        {% for windowState in windowStates %}
            <div id=\"widget-restored-state-{{ windowState.id|default(\"none\") }}\">
                {{ oro_window_render_fragment(windowState) }}
            </div>
        {% endfor %}
    </div>

    <script type=\"text/javascript\">
        require(['jquery', 'oro/dialog-widget', 'orowindows/js/dialog/state/model', 'ready!app'],
        function(\$, DialogWidget, StateModel) {
            \$(function(){
                {% for windowState in windowStates if windowState.renderedSuccessfully %}
                new DialogWidget({
                    autoRender: true,
                    model: new StateModel({{ {'data': windowState.data, 'id': windowState.id}|json_encode|raw }})
                });
                {% endfor %}
            });
        });
    </script>
{% endif %}
", "OroWindowsBundle::states.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/WindowsBundle/Resources/views/states.html.twig");
    }
}

<?php

/* OroCheckoutBundle:layouts:default/layout.html.twig */
class __TwigTemplate_10a02b7a557fb18b268ce5c1cedadc2040ecffcf68cee336384b3b1c932c6b20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'checkout_transition_back_widget' => array($this, 'block_checkout_transition_back_widget'),
            'checkout_transition_continue_widget' => array($this, 'block_checkout_transition_continue_widget'),
            'checkout_transition_step_edit_widget' => array($this, 'block_checkout_transition_step_edit_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroCheckoutBundle:layouts:default/layout.html.twig"));

        // line 26
        echo "
";
        // line 36
        echo "
";
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('checkout_transition_back_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkout_transition_continue_widget', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('checkout_transition_step_edit_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_checkout_transition_back_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkout_transition_back_widget"));

        // line 47
        echo "    ";
        if ((array_key_exists("transitionData", $context) && ($context["transitionData"] ?? $this->getContext($context, "transitionData")))) {
            // line 48
            echo "    ";
            $context["transitionUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_checkout_frontend_checkout", array("id" => $this->getAttribute(            // line 51
($context["checkout"] ?? $this->getContext($context, "checkout")), "id", array()), "transition" => $this->getAttribute($this->getAttribute(            // line 52
($context["transitionData"] ?? $this->getContext($context, "transitionData")), "transition", array()), "name", array())));
            // line 55
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, ($context["transitionUrl"] ?? $this->getContext($context, "transitionUrl")), "html", null, true);
            echo "\"
        ";
            // line 56
            echo $this->getAttribute($this, "transitionAttrbiutes", array(0 => ($context["transitionData"] ?? $this->getContext($context, "transitionData")), 1 => ($context["checkout"] ?? $this->getContext($context, "checkout"))), "method");
            echo "
        ";
            // line 57
            echo $this->getAttribute($this, "conditionMessages", array(0 => ($context["transitionData"] ?? $this->getContext($context, "transitionData"))), "method");
            echo "
    >
        <i class=\"fa-angle-left\"></i>";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.b2b_flow_checkout.transition.back.label"), "html", null, true);
            echo "
    </a>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 64
    public function block_checkout_transition_continue_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkout_transition_continue_widget"));

        // line 65
        echo "    ";
        if ((array_key_exists("transitionData", $context) && ($context["transitionData"] ?? $this->getContext($context, "transitionData")))) {
            // line 66
            echo "        <div class=\"tooltip-container\" ";
            echo $this->getAttribute($this, "conditionMessages", array(0 => ($context["transitionData"] ?? $this->getContext($context, "transitionData"))), "method");
            echo ">
            <button type=\"submit\"
                class=\"btn ";
            // line 68
            if ($this->getAttribute(($context["transitionData"] ?? $this->getContext($context, "transitionData")), "isAllowed", array())) {
                echo "btn--info";
            }
            echo " btn--size-m checkout-form__submit\"
                disabled=\"disabled\"
                autocomplete=\"off\"
                ";
            // line 71
            echo $this->getAttribute($this, "transitionAttrbiutes", array(0 => ($context["transitionData"] ?? $this->getContext($context, "transitionData")), 1 => ($context["checkout"] ?? $this->getContext($context, "checkout"))), "method");
            echo "
            >
                ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["transitionData"] ?? $this->getContext($context, "transitionData")), "transition", array()), "label", array()), array(), "workflows"), "html", null, true);
            echo "&nbsp;<i class=\"fa-angle-right\"></i>
            </button>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_checkout_transition_step_edit_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkout_transition_step_edit_widget"));

        // line 80
        echo "    ";
        if ((array_key_exists("transitionData", $context) && ($context["transitionData"] ?? $this->getContext($context, "transitionData")))) {
            // line 81
            echo "    ";
            $context["transitionUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_checkout_frontend_checkout", array("id" => $this->getAttribute(            // line 84
($context["checkout"] ?? $this->getContext($context, "checkout")), "id", array()), "transition" => $this->getAttribute($this->getAttribute(            // line 85
($context["transitionData"] ?? $this->getContext($context, "transitionData")), "transition", array()), "name", array())));
            // line 88
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["transitionData"] ?? $this->getContext($context, "transitionData")), "errors", array())) > 0)) {
                // line 89
                echo "        ";
                $context["transitionLabel"] = $this->getAttribute($this, "transitionConditionMessages", array(0 => ($context["transitionData"] ?? $this->getContext($context, "transitionData"))), "method");
                // line 90
                echo "    ";
            } else {
                // line 91
                echo "        ";
                $context["transitionLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["transitionData"] ?? $this->getContext($context, "transitionData")), "transition", array()), "label", array()), array(), "workflows");
                // line 92
                echo "    ";
            }
            // line 93
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, ($context["transitionUrl"] ?? $this->getContext($context, "transitionUrl")), "html", null, true);
            echo "\" class=\"button--plain\"
       data-toggle=\"tooltip\"
       data-title=\"";
            // line 95
            echo twig_escape_filter($this->env, ($context["transitionLabel"] ?? $this->getContext($context, "transitionLabel")), "html", null, true);
            echo "\"
       data-html=\"true\"
       data-container=\"body\"
       ";
            // line 98
            echo $this->getAttribute($this, "transitionAttrbiutes", array(0 => ($context["transitionData"] ?? $this->getContext($context, "transitionData")), 1 => ($context["checkout"] ?? $this->getContext($context, "checkout"))), "method");
            echo "
    >
        <i class=\"fa-pencil fa--no-offset tooltip-trigger\"></i>
    </a>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function gettransitionAttrbiutes($__transitionData__ = null, $__checkout__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "transitionData" => $__transitionData__,
            "checkout" => $__checkout__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "transitionAttrbiutes"));

            // line 2
            ob_start();
            // line 3
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCheckoutBundle:layouts:default/layout.html.twig", 3);
            // line 4
            echo "    ";
            // line 5
            echo "    ";
            $context["transition"] = $this->getAttribute(($context["transitionData"] ?? $this->getContext($context, "transitionData")), "transition", array());
            // line 6
            echo "
    ";
            // line 7
            $context["pageComponentModule"] = (($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "page_component_module", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "page_component_module", array()), "orocheckout/js/app/components/transition-button-component")) : ("orocheckout/js/app/components/transition-button-component"));
            // line 8
            echo "    ";
            $context["pageComponentOptions"] = (($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "page_component_options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["transition"] ?? null), "frontendOptions", array(), "any", false, true), "page_component_options", array()), array())) : (array()));
            // line 9
            echo "    
    ";
            // line 10
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" =>             // line 11
($context["pageComponentModule"] ?? $this->getContext($context, "pageComponentModule")), "options" => twig_array_merge(            // line 12
($context["pageComponentOptions"] ?? $this->getContext($context, "pageComponentOptions")), array("enabled" => $this->getAttribute(            // line 13
($context["transitionData"] ?? $this->getContext($context, "transitionData")), "isAllowed", array()), "hasForm" => $this->getAttribute(            // line 14
($context["transition"] ?? $this->getContext($context, "transition")), "hasForm", array(), "method"), "transitionUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_checkout_frontend_checkout", array("id" => $this->getAttribute(            // line 18
($context["checkout"] ?? $this->getContext($context, "checkout")), "id", array()), "transition" => $this->getAttribute(            // line 19
($context["transition"] ?? $this->getContext($context, "transition")), "name", array())))))));
            // line 23
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 27
    public function getconditionMessages($__transitionData__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "transitionData" => $__transitionData__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "conditionMessages"));

            // line 28
            echo "    ";
            $context["hasErrors"] = (twig_length_filter($this->env, $this->getAttribute(($context["transitionData"] ?? $this->getContext($context, "transitionData")), "errors", array())) > 0);
            // line 29
            echo "    ";
            if (($context["hasErrors"] ?? $this->getContext($context, "hasErrors"))) {
                // line 30
                echo "        data-toggle=\"tooltip\"
        data-title=\"";
                // line 31
                echo $this->getAttribute($this, "transitionConditionMessages", array(0 => ($context["transitionData"] ?? $this->getContext($context, "transitionData"))), "method");
                echo "\"
        data-html=\"true\"
        data-container=\"body\"
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function gettransitionConditionMessages($__transitionData__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "transitionData" => $__transitionData__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "transitionConditionMessages"));

            // line 38
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.checkout.workflow.unavailable_transition.message"), "html", null, true);
            echo "</div>
    <ul>
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["transitionData"] ?? $this->getContext($context, "transitionData")), "errors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 41
                echo "            <li>";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["error"], "message", array()), $this->getAttribute($context["error"], "parameters", array())), "html", null, true));
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    </ul>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return "OroCheckoutBundle:layouts:default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 43,  321 => 41,  317 => 40,  311 => 38,  296 => 37,  273 => 31,  270 => 30,  267 => 29,  264 => 28,  249 => 27,  229 => 23,  227 => 19,  226 => 18,  225 => 14,  224 => 13,  223 => 12,  222 => 11,  221 => 10,  218 => 9,  215 => 8,  213 => 7,  210 => 6,  207 => 5,  205 => 4,  202 => 3,  200 => 2,  184 => 1,  171 => 98,  165 => 95,  159 => 93,  156 => 92,  153 => 91,  150 => 90,  147 => 89,  144 => 88,  142 => 85,  141 => 84,  139 => 81,  136 => 80,  130 => 79,  118 => 73,  113 => 71,  105 => 68,  99 => 66,  96 => 65,  90 => 64,  79 => 59,  74 => 57,  70 => 56,  65 => 55,  63 => 52,  62 => 51,  60 => 48,  57 => 47,  51 => 46,  44 => 79,  41 => 78,  39 => 64,  36 => 63,  34 => 46,  31 => 45,  28 => 36,  25 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro transitionAttrbiutes(transitionData, checkout) %}
{% spaceless %}
    {% import 'OroUIBundle::macros.html.twig' as UI %}
    {# Simplified transitions handler specific for checkout logic #}
    {% set transition = transitionData.transition %}

    {% set pageComponentModule = transition.frontendOptions.page_component_module|default('orocheckout/js/app/components/transition-button-component') %}
    {% set pageComponentOptions = transition.frontendOptions.page_component_options|default({}) %}
    
    {{ UI.renderPageComponentAttributes({
        module: pageComponentModule,
        options: pageComponentOptions|merge({
            'enabled': transitionData.isAllowed,
            'hasForm': transition.hasForm(),
            'transitionUrl': path(
                'oro_checkout_frontend_checkout',
                {
                    id: checkout.id,
                    transition: transition.name
                }
            )
        })
    }) }}
{% endspaceless %}
{% endmacro %}

{% macro conditionMessages(transitionData) %}
    {% set hasErrors = transitionData.errors|length > 0 %}
    {% if hasErrors %}
        data-toggle=\"tooltip\"
        data-title=\"{{ _self.transitionConditionMessages(transitionData) }}\"
        data-html=\"true\"
        data-container=\"body\"
    {% endif %}
{% endmacro %}

{% macro transitionConditionMessages(transitionData) %}
    <div>{{ 'oro.checkout.workflow.unavailable_transition.message'|trans }}</div>
    <ul>
        {% for error in transitionData.errors %}
            <li>{{ error.message|trans(error.parameters)|nl2br }}</li>
        {% endfor %}
    </ul>
{% endmacro %}

{% block checkout_transition_back_widget %}
    {% if transitionData is defined and transitionData %}
    {% set transitionUrl = path(
        'oro_checkout_frontend_checkout',
        {
            id: checkout.id,
            transition: transitionData.transition.name
        })
    %}
    <a href=\"{{ transitionUrl }}\"
        {{ _self.transitionAttrbiutes(transitionData, checkout) }}
        {{ _self.conditionMessages(transitionData) }}
    >
        <i class=\"fa-angle-left\"></i>{{ 'oro.checkout.workflow.b2b_flow_checkout.transition.back.label'|trans }}
    </a>
    {% endif %}
{% endblock %}

{% block checkout_transition_continue_widget %}
    {% if transitionData is defined and transitionData %}
        <div class=\"tooltip-container\" {{ _self.conditionMessages(transitionData) }}>
            <button type=\"submit\"
                class=\"btn {% if transitionData.isAllowed %}btn--info{% endif %} btn--size-m checkout-form__submit\"
                disabled=\"disabled\"
                autocomplete=\"off\"
                {{ _self.transitionAttrbiutes(transitionData, checkout) }}
            >
                {{ transitionData.transition.label|trans({},'workflows') }}&nbsp;<i class=\"fa-angle-right\"></i>
            </button>
        </div>
    {% endif %}
{% endblock %}

{% block checkout_transition_step_edit_widget %}
    {% if transitionData is defined and transitionData %}
    {% set transitionUrl = path(
        'oro_checkout_frontend_checkout',
        {
            id: checkout.id,
            transition: transitionData.transition.name
        })
    %}
    {% if transitionData.errors|length > 0 %}
        {% set transitionLabel = _self.transitionConditionMessages(transitionData) %}
    {% else %}
        {% set transitionLabel = transitionData.transition.label|trans({},'workflows') %}
    {% endif %}
    <a href=\"{{ transitionUrl }}\" class=\"button--plain\"
       data-toggle=\"tooltip\"
       data-title=\"{{ transitionLabel }}\"
       data-html=\"true\"
       data-container=\"body\"
       {{ _self.transitionAttrbiutes(transitionData, checkout) }}
    >
        <i class=\"fa-pencil fa--no-offset tooltip-trigger\"></i>
    </a>
    {% endif %}
{% endblock %}
", "OroCheckoutBundle:layouts:default/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CheckoutBundle/Resources/views/layouts/default/layout.html.twig");
    }
}

<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.html.twig */
class __TwigTemplate_92ba19802e8ceb8596370652279c2b71a93acd77dc72e0f7e8846951b02b24b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroLayoutBundle:Layout:div_layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.html.twig", 1);
        $this->blocks = array(
            'form_end_widget' => array($this, 'block_form_end_widget'),
            'input_widget' => array($this, 'block_input_widget'),
            'button_widget' => array($this, 'block_button_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroLayoutBundle:Layout:div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_form_end_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end_widget"));

        // line 4
        echo "    ";
        $this->displayParentBlock("form_end_widget", $context, $blocks);
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Oro\Bundle\FormBundle\Twig\FormExtension')->renderFormJsValidationBlock($this->env, ($context["form"] ?? $this->getContext($context, "form")), ((array_key_exists("js_validation_options", $context)) ? (_twig_default_filter(($context["js_validation_options"] ?? $this->getContext($context, "js_validation_options")), array())) : (array())));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_input_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input_widget"));

        // line 9
        echo "    ";
        if ((($context["type"] ?? $this->getContext($context, "type")) == "checkbox")) {
            // line 10
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " custom-checkbox__input"));
            // line 13
            echo "
        <label ";
            // line 14
            if ( !twig_test_empty($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "id", array()))) {
                echo " for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "id", array()), "html", null, true);
                echo "\" ";
            }
            echo " class=\"custom-checkbox\">
            ";
            // line 15
            $this->displayParentBlock("input_widget", $context, $blocks);
            echo "
            <span class=\"custom-checkbox__icon\"></span>
            <span class=\"custom-checkbox__text\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->processText(($context["label"] ?? $this->getContext($context, "label")), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo " </span>
        </label>
    ";
        } else {
            // line 20
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " input"));
            // line 23
            echo "
        ";
            // line 25
            echo "        ";
            $this->displayParentBlock("input_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 30
        echo "    ";
        if ((((array_key_exists("style", $context)) ? (_twig_default_filter(($context["style"] ?? $this->getContext($context, "style")), "")) : ("")) == "auto")) {
            // line 31
            echo "        ";
            if ((($context["action"] ?? $this->getContext($context, "action")) == "submit")) {
                // line 32
                echo "            ";
                $context["style"] = "btn--info";
                // line 33
                echo "        ";
            } else {
                // line 34
                echo "            ";
                $context["style"] = (((($context["action"] ?? $this->getContext($context, "action")) == "reset")) ? ("btn--action") : (""));
                // line 35
                echo "        ";
            }
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        if ( !array_key_exists("style", $context)) {
            // line 38
            echo "        ";
            $context["add_class"] = "";
            // line 39
            echo "    ";
        } else {
            // line 40
            echo "        ";
            $context["add_class"] = ("btn " . ($context["style"] ?? $this->getContext($context, "style")));
            // line 41
            echo "    ";
        }
        // line 42
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(        // line 43
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . ($context["add_class"] ?? $this->getContext($context, "add_class")))));
        // line 45
        echo "    ";
        $this->displayParentBlock("button_widget", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 45,  151 => 43,  149 => 42,  146 => 41,  143 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  122 => 33,  119 => 32,  116 => 31,  113 => 30,  107 => 29,  96 => 25,  93 => 23,  90 => 20,  84 => 17,  79 => 15,  71 => 14,  68 => 13,  65 => 10,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OroLayoutBundle:Layout:div_layout.html.twig\" %}

{% block form_end_widget %}
    {{ parent() }}
    {{ oro_form_js_validation(form, js_validation_options|default({})) }}
{% endblock %}

{% block input_widget %}
    {% if type == 'checkbox' %}
        {% set attr = layout_attr_defaults(attr, {
            '~class': ' custom-checkbox__input'
        }) %}

        <label {% if attr.id is not empty %} for=\"{{ attr.id }}\" {% endif %} class=\"custom-checkbox\">
            {{ parent() }}
            <span class=\"custom-checkbox__icon\"></span>
            <span class=\"custom-checkbox__text\">{{ label|block_text(translation_domain) }} </span>
        </label>
    {% else %}
        {% set attr = layout_attr_defaults(attr, {
            '~class': ' input'
        }) %}

        {# TODO: should be replaced to {{ parent_block_widget(block) }} in BB-12666 #}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block button_widget %}
    {% if style|default('') == 'auto' %}
        {% if action == 'submit' %}
            {% set style = 'btn--info' %}
        {% else %}
            {% set style = action == 'reset' ? 'btn--action' : '' %}
        {% endif %}
    {% endif %}
    {% if style is not defined %}
        {% set add_class = '' %}
    {% else %}
        {% set add_class = 'btn ' ~ style %}
    {% endif %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ add_class
    }) %}
    {{ parent() }}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/layouts/blank/layout.html.twig");
    }
}

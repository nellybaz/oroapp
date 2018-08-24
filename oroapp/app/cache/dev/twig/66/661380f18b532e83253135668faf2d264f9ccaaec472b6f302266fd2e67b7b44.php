<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_form/oro_customer_form.html.twig */
class __TwigTemplate_f579f4fe7b3cfd9abc75061595603f6420f24ba4c25b113d8645acdecaaa84ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_customer_form__page_widget' => array($this, 'block___oro_customer_form__page_widget'),
            '__oro_customer_form__label_wrapper_widget' => array($this, 'block___oro_customer_form__label_wrapper_widget'),
            '__oro_customer_form__label_widget' => array($this, 'block___oro_customer_form__label_widget'),
            '__oro_customer_form__description_widget' => array($this, 'block___oro_customer_form__description_widget'),
            '__oro_customer_form__form_submit_wrapper_widget' => array($this, 'block___oro_customer_form__form_submit_wrapper_widget'),
            '__oro_customer_form__form_submit_widget' => array($this, 'block___oro_customer_form__form_submit_widget'),
            '__oro_customer_form__links_widget' => array($this, 'block___oro_customer_form__links_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_form/oro_customer_form.html.twig"));

        // line 1
        $this->displayBlock('__oro_customer_form__page_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('__oro_customer_form__label_wrapper_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('__oro_customer_form__label_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('__oro_customer_form__description_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('__oro_customer_form__form_submit_wrapper_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('__oro_customer_form__form_submit_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('__oro_customer_form__links_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block___oro_customer_form__page_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__oro_customer_form__page_widget"));

        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-focusable" => true));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block___oro_customer_form__label_wrapper_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__oro_customer_form__label_wrapper_widget"));

        // line 11
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " page-title-wrapper"));
        // line 14
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block___oro_customer_form__label_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__oro_customer_form__label_widget"));

        // line 18
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " page-title"));
        // line 21
        echo "    <h2";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "</h2>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block___oro_customer_form__description_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__oro_customer_form__description_widget"));

        // line 25
        echo "    <div class=\"form-row\">
        <p";
        // line 26
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "</p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block___oro_customer_form__form_submit_wrapper_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__oro_customer_form__form_submit_wrapper_widget"));

        // line 31
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " form-row"));
        // line 34
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 35
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block___oro_customer_form__form_submit_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__oro_customer_form__form_submit_widget"));

        // line 40
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " button"));
        // line 43
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block___oro_customer_form__links_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__oro_customer_form__links_widget"));

        // line 47
        echo "    ";
        $context["childs"] = array();
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["block"] ?? $this->getContext($context, "block")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "visible", array())) {
                // line 49
                echo "        ";
                $context["childs"] = twig_array_merge(($context["childs"] ?? $this->getContext($context, "childs")), array(0 => $context["child"]));
                // line 50
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childs"] ?? $this->getContext($context, "childs")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo "        <div class=\"form-row form-row--offset-s ";
            echo (($this->getAttribute($context["loop"], "last", array())) ? ("form-row--offset-none") : (""));
            echo "\">
            ";
            // line 53
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "attr", array()), array("~class" => " link"));
            // line 56
            echo "            ";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
            echo "
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_form/oro_customer_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  246 => 56,  244 => 53,  239 => 52,  221 => 51,  214 => 50,  211 => 49,  205 => 48,  202 => 47,  196 => 46,  186 => 43,  183 => 40,  177 => 39,  167 => 35,  162 => 34,  159 => 31,  153 => 30,  141 => 26,  138 => 25,  132 => 24,  120 => 21,  117 => 18,  111 => 17,  99 => 14,  96 => 11,  90 => 10,  80 => 6,  75 => 5,  72 => 2,  66 => 1,  59 => 46,  56 => 45,  54 => 39,  51 => 38,  49 => 30,  46 => 29,  44 => 24,  41 => 23,  39 => 17,  36 => 16,  34 => 10,  31 => 9,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block __oro_customer_form__page_widget %}
    {% set attr = layout_attr_defaults(attr, {
        'data-focusable': true
    }) %}
    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block __oro_customer_form__label_wrapper_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-title-wrapper'
    }) %}
    <div{{ block('block_attributes') }}>{{ block_widget(block) }}</div>
{% endblock %}

{% block __oro_customer_form__label_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-title'
    }) %}
    <h2{{ block('block_attributes') }}>{{ block_widget(block) }}</h2>
{% endblock %}

{% block __oro_customer_form__description_widget %}
    <div class=\"form-row\">
        <p{{ block('block_attributes') }}>{{ block_widget(block) }}</p>
    </div>
{% endblock %}

{% block __oro_customer_form__form_submit_wrapper_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' form-row'
    }) %}
    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block __oro_customer_form__form_submit_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' button'
    }) %}
    {{ block_widget(block, {attr: attr}) }}
{% endblock %}

{% block __oro_customer_form__links_widget %}
    {% set childs = [] %}
    {% for child in block if child.vars.visible %}
        {% set childs = childs|merge([child]) %}
    {% endfor %}
    {% for child in childs %}
        <div class=\"form-row form-row--offset-s {{ loop.last ? 'form-row--offset-none' }}\">
            {% set attr = layout_attr_defaults(child.vars.attr, {
                '~class': ' link'
            }) %}
            {{ block_widget(child, {attr: attr}) }}
        </div>
    {% endfor %}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_form/oro_customer_form.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/blank/imports/oro_customer_form/oro_customer_form.html.twig");
    }
}

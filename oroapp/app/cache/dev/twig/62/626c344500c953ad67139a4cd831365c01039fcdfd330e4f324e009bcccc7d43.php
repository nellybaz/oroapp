<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/layout.html.twig */
class __TwigTemplate_805cca089d8fea5e6ee72e1bc391186913da2f4b72796d057447dd4ac9189e57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_page_title_container_widget' => array($this, 'block__page_title_container_widget'),
            '_page_title_widget' => array($this, 'block__page_title_widget'),
            '_wrapper_widget' => array($this, 'block__wrapper_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/layout.html.twig"));

        // line 1
        $this->displayBlock('_page_title_container_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_page_title_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_wrapper_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__page_title_container_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_title_container_widget"));

        // line 2
        echo "    ";
        $context["content"] = twig_trim_filter($this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget'));
        // line 3
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => (" page-title" . ((        // line 4
($context["class_prefix"] ?? $this->getContext($context, "class_prefix"))) ? (" {{ class_prefix }}-page-title") : ("")))));
        // line 6
        echo "    ";
        if (twig_length_filter($this->env, ($context["content"] ?? $this->getContext($context, "content")))) {
            // line 7
            echo "        <h1";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">";
            echo ($context["content"] ?? $this->getContext($context, "content"));
            echo "</h1>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block__page_title_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_page_title_widget"));

        // line 12
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block__wrapper_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_wrapper_widget"));

        // line 16
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " wrapper"));
        // line 19
        echo "
    <div";
        // line 20
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div data-page-component-view=\"orofrontend/js/app/views/dom-relocation-view\"></div>
        ";
        // line 22
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 22,  99 => 20,  96 => 19,  93 => 16,  87 => 15,  77 => 12,  71 => 11,  58 => 7,  55 => 6,  53 => 4,  51 => 3,  48 => 2,  42 => 1,  35 => 15,  32 => 14,  30 => 11,  27 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _page_title_container_widget %}
    {% set content = block_widget(block)|trim %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-title' ~ (class_prefix ? ' {{ class_prefix }}-page-title')
    }) %}
    {% if content|length %}
        <h1{{ block('block_attributes') }}>{{ content|raw }}</h1>
    {% endif %}
{% endblock %}

{% block _page_title_widget %}
    {{ block_widget(block) }}
{% endblock %}

{% block _wrapper_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' wrapper',
    }) %}

    <div{{ block('block_attributes') }}>
        <div data-page-component-view=\"orofrontend/js/app/views/dom-relocation-view\"></div>
        {{ block_widget(block) }}
    </div>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/layout.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/layout.html.twig");
    }
}

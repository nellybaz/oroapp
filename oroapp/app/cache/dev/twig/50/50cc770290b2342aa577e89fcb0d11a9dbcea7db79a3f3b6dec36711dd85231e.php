<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/middle_bar.html.twig */
class __TwigTemplate_a80e66f96c3a1e0e1f052bcfbb1e74990a27edb4db17cbd19b981431a25e4227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_middle_bar_widget' => array($this, 'block__middle_bar_widget'),
            '_middle_bar_search_widget' => array($this, 'block__middle_bar_search_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/middle_bar.html.twig"));

        // line 1
        $this->displayBlock('_middle_bar_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('_middle_bar_search_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__middle_bar_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_middle_bar_widget"));

        // line 2
        echo "    <div class=\"page-area-container\">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block__middle_bar_search_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_middle_bar_search_widget"));

        // line 8
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ((($this->getAttribute(        // line 9
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " search-widget-wrap")));
        // line 11
        echo "
    ";
        // line 12
        $context["dom_relocation_options"] = twig_jsonencode_filter(array("responsive" => array(0 => array("viewport" => array("maxScreenType" => "tablet"), "moveTo" => "[data-header-row-search-container]"))));
        // line 22
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <form  id=\"oro_website_search_search\"
               action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("oro_website_search_results");
        echo "\"
               method=\"GET\"
               novalidate=\"novalidate\"
               class=\"search-widget\"
               data-dom-relocation-options=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["dom_relocation_options"] ?? $this->getContext($context, "dom_relocation_options")), "html", null, true);
        echo "\"
        >
            <input class=\"search-widget__input input input--full\" type=\"text\" placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.website_search.search_field_placeholder", array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" value=\"\" name=\"search\"/>
            <button name=\"oro_website_search_search_button\" class=\"search-widget__submit\" type=\"submit\">
                <i class=\"fa-search\"></i>
            </button>
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/middle_bar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  83 => 28,  76 => 24,  70 => 22,  68 => 12,  65 => 11,  63 => 9,  61 => 8,  55 => 7,  45 => 3,  42 => 2,  36 => 1,  29 => 7,  26 => 6,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _middle_bar_widget %}
    <div class=\"page-area-container\">
        {{ parent_block_widget(block) }}
    </div>
{% endblock %}

{% block _middle_bar_search_widget %}
    {% set attr = attr|merge({
        class: attr.class|default('') ~ \" search-widget-wrap\"
    }) %}

    {% set dom_relocation_options =  {
        responsive: [
            {
                viewport: {
                    maxScreenType: 'tablet',
                },
                moveTo: \"[data-header-row-search-container]\"
            }
        ]
    }|json_encode %}
    <div {{ block('block_attributes') }}>
        <form  id=\"oro_website_search_search\"
               action=\"{{ url('oro_website_search_results') }}\"
               method=\"GET\"
               novalidate=\"novalidate\"
               class=\"search-widget\"
               data-dom-relocation-options=\"{{ dom_relocation_options }}\"
        >
            <input class=\"search-widget__input input input--full\" type=\"text\" placeholder=\"{{ 'oro.website_search.search_field_placeholder'|trans({}, translation_domain) }}\" value=\"\" name=\"search\"/>
            <button name=\"oro_website_search_search_button\" class=\"search-widget__submit\" type=\"submit\">
                <i class=\"fa-search\"></i>
            </button>
        </form>
    </div>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/middle_bar.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/middle_bar.html.twig");
    }
}

<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/scroll_top/scroll_top.html.twig */
class __TwigTemplate_d8e669f1dd14a6a99ceb96d1cf8da649c1d3ef9df0c8d98b749869d45855cb07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__scroll_top__scroll_top_widget' => array($this, 'block___scroll_top__scroll_top_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/scroll_top/scroll_top.html.twig"));

        // line 1
        $this->displayBlock('__scroll_top__scroll_top_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block___scroll_top__scroll_top_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__scroll_top__scroll_top_widget"));

        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => array("view" => "orofrontend/default/js/app/views/scroll-top-view", "viewport" => array("minScreenType" => "desktop")), "data-scroll-top" => "", "~class" => (" scroll-top scroll-top--" .         // line 11
($context["scroll_top_position"] ?? $this->getContext($context, "scroll_top_position")))));
        // line 13
        echo "    ";
        if ((array_key_exists("enabled", $context) && (($context["enabled"] ?? $this->getContext($context, "enabled")) == true))) {
            // line 14
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <button type=\"button\" class=\"btn btn--plain\">
                <i class=\"fa-arrow-circle-up fa--no-offset fa--xxxl\"></i>
            </button>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/scroll_top/scroll_top.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  39 => 13,  37 => 11,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block __scroll_top__scroll_top_widget %}
    {% set attr = layout_attr_defaults(attr, {
        'data-page-component-module': 'oroui/js/app/components/view-component',
        'data-page-component-options': {
            'view': 'orofrontend/default/js/app/views/scroll-top-view',
            'viewport': {
                'minScreenType': 'desktop'
            }
        },
        'data-scroll-top': '',
        '~class': ' scroll-top scroll-top--' ~ scroll_top_position
    }) %}
    {% if enabled is defined and enabled == true %}
        <div {{ block('block_attributes') }}>
            <button type=\"button\" class=\"btn btn--plain\">
                <i class=\"fa-arrow-circle-up fa--no-offset fa--xxxl\"></i>
            </button>
        </div>
    {% endif %}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/scroll_top/scroll_top.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/imports/scroll_top/scroll_top.html.twig");
    }
}

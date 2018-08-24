<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/sticky_panel/sticky_panel.html.twig */
class __TwigTemplate_287c1a47e610a6e980ed307cd8d6ce2119e9da767a53f051c0706bcbdb2365a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__sticky_panel__sticky_panel_widget' => array($this, 'block___sticky_panel__sticky_panel_widget'),
            '__sticky_panel__sticky_panel_content_widget' => array($this, 'block___sticky_panel__sticky_panel_content_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/sticky_panel/sticky_panel.html.twig"));

        // line 1
        $this->displayBlock('__sticky_panel__sticky_panel_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('__sticky_panel__sticky_panel_content_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block___sticky_panel__sticky_panel_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__sticky_panel__sticky_panel_widget"));

        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-sticky-name" =>         // line 3
($context["sticky_name"] ?? $this->getContext($context, "sticky_name")), "data-stick-to" =>         // line 4
($context["stick_to"] ?? $this->getContext($context, "stick_to")), "data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => array("view" => "orofrontend/default/js/app/views/sticky-panel-view"), "~class" => (" sticky-panel sticky-panel--" .         // line 9
($context["stick_to"] ?? $this->getContext($context, "stick_to")))));
        // line 11
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 12
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block___sticky_panel__sticky_panel_content_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__sticky_panel__sticky_panel_content_widget"));

        // line 17
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " sticky-panel__content"));
        // line 20
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/sticky_panel/sticky_panel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  69 => 17,  63 => 16,  53 => 12,  48 => 11,  46 => 9,  45 => 4,  44 => 3,  42 => 2,  36 => 1,  29 => 16,  26 => 15,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block __sticky_panel__sticky_panel_widget %}
    {% set attr = layout_attr_defaults(attr, {
        'data-sticky-name': sticky_name,
        'data-stick-to': stick_to,
        'data-page-component-module': 'oroui/js/app/components/view-component',
        'data-page-component-options': {
            'view': 'orofrontend/default/js/app/views/sticky-panel-view'
        },
        '~class': ' sticky-panel sticky-panel--' ~ stick_to
    }) %}
    <div{{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block __sticky_panel__sticky_panel_content_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' sticky-panel__content'
    }) %}
    <div{{ block('block_attributes') }}>{{ block_widget(block) }}</div>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/sticky_panel/sticky_panel.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/sticky_panel/sticky_panel.html.twig");
    }
}

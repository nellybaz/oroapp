<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/top_nav_anonymous.html.twig */
class __TwigTemplate_c8618f3d87dc300099330a8e71bbc5b283087d0e3e0145691e9ebc86e1545ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_top_authorization_container_widget' => array($this, 'block__top_authorization_container_widget'),
            '_top_sign_in_link_widget' => array($this, 'block__top_sign_in_link_widget'),
            '_top_registration_link_widget' => array($this, 'block__top_registration_link_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/top_nav_anonymous.html.twig"));

        // line 1
        $this->displayBlock('_top_authorization_container_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_top_sign_in_link_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('_top_registration_link_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__top_authorization_container_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_top_authorization_container_widget"));

        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " pull-left topbar-navigation__item"));
        // line 5
        echo "
    <div ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block__top_sign_in_link_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_top_sign_in_link_widget"));

        // line 12
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " topbar-navigation__link", "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(        // line 14
($context["route_name"] ?? $this->getContext($context, "route_name")))));
        // line 16
        echo "    <a ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <i class=\"fa-sign-in\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["text"] ?? $this->getContext($context, "text"))), "html", null, true);
        echo "
    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block__top_registration_link_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_top_registration_link_widget"));

        // line 22
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " topbar-navigation__link", "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(        // line 24
($context["route_name"] ?? $this->getContext($context, "route_name")))));
        // line 26
        echo "    <span class=\"topbar-navigation__separator\">|</span>
    <a ";
        // line 27
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["text"] ?? $this->getContext($context, "text"))), "html", null, true);
        echo "
    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/top_nav_anonymous.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  106 => 27,  103 => 26,  101 => 24,  99 => 22,  93 => 21,  83 => 17,  78 => 16,  76 => 14,  74 => 12,  68 => 11,  58 => 7,  54 => 6,  51 => 5,  48 => 2,  42 => 1,  35 => 21,  32 => 20,  30 => 11,  27 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _top_authorization_container_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' pull-left topbar-navigation__item'
    }) %}

    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _top_sign_in_link_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' topbar-navigation__link',
        'href': path(route_name)
    }) %}
    <a {{ block('block_attributes') }}>
        <i class=\"fa-sign-in\"></i> {{ text|trans }}
    </a>
{% endblock %}

{% block _top_registration_link_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' topbar-navigation__link',
        'href': path(route_name)
    }) %}
    <span class=\"topbar-navigation__separator\">|</span>
    <a {{ block('block_attributes') }}>
        {{ text|trans }}
    </a>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/top_nav_anonymous.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CustomerBundle/Resources/views/layouts/default/page/top_nav_anonymous.html.twig");
    }
}

<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/top_nav.html.twig */
class __TwigTemplate_2d613c3aae0f72513b465dabab7833997b11e54ebc0183c377f1ccd1b19fccb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_top_nav_container_widget' => array($this, 'block__top_nav_container_widget'),
            '_top_nav_widget' => array($this, 'block__top_nav_widget'),
            '_top_nav_menu_container_widget' => array($this, 'block__top_nav_menu_container_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/top_nav.html.twig"));

        // line 1
        $this->displayBlock('_top_nav_container_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_top_nav_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('_top_nav_menu_container_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__top_nav_container_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_top_nav_container_widget"));

        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " topbar"));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"page-area-container\">
            ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block__top_nav_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_top_nav_widget"));

        // line 13
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " topbar-navigation"));
        // line 16
        echo "
    ";
        // line 17
        $context["child_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["child_attr"] ?? $this->getContext($context, "child_attr")), array("~class" => " topbar-navigation__item"));
        // line 20
        echo "
    ";
        // line 21
        $context["link_attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["link_attr"] ?? $this->getContext($context, "link_attr")), array("~class" => "topbar-navigation__link"));
        // line 24
        echo "
    <div class=\"topbar-navigation-wrap\">
        ";
        // line 26
        $this->displayBlock("menu_widget", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block__top_nav_menu_container_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_top_nav_menu_container_widget"));

        // line 31
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " pull-right"));
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

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/top_nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  110 => 34,  107 => 31,  101 => 30,  91 => 26,  87 => 24,  85 => 21,  82 => 20,  80 => 17,  77 => 16,  74 => 13,  68 => 12,  57 => 7,  51 => 5,  48 => 2,  42 => 1,  35 => 30,  32 => 29,  30 => 12,  27 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _top_nav_container_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': \" topbar\"
    }) %}
    <div {{ block('block_attributes') }}>
        <div class=\"page-area-container\">
            {{ block_widget(block) }}
        </div>
    </div>
{% endblock %}

{% block _top_nav_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': \" topbar-navigation\"
    }) %}

    {% set child_attr = layout_attr_defaults(child_attr, {
        '~class': ' topbar-navigation__item'
    }) %}

    {% set link_attr = layout_attr_defaults(link_attr, {
        '~class': 'topbar-navigation__link'
    }) %}

    <div class=\"topbar-navigation-wrap\">
        {{ block('menu_widget') }}
    </div>
{% endblock %}

{% block _top_nav_menu_container_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': \" pull-right\"
    }) %}
    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/top_nav.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/top_nav.html.twig");
    }
}

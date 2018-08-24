<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu_logged.html.twig */
class __TwigTemplate_c9c5bcb329dce2fa5a0fd1d883a28198ea929c18b3b48138fd01eb2e94ce7616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_header_row_shopping_widget' => array($this, 'block__header_row_shopping_widget'),
            '_header_row_shopping_trigger_widget' => array($this, 'block__header_row_shopping_trigger_widget'),
            '_main_menu_messages_widget' => array($this, 'block__main_menu_messages_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu_logged.html.twig"));

        // line 1
        $this->displayBlock('_header_row_shopping_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('_header_row_shopping_trigger_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_main_menu_messages_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__header_row_shopping_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_header_row_shopping_widget"));

        // line 2
        echo "    <div class=\"header-row__container shopping-list-widget\">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block__header_row_shopping_trigger_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_header_row_shopping_trigger_widget"));

        // line 8
        echo "    <div class=\"header-row__trigger\" data-toggle=\"dropdown\">
        <div class=\"nav-trigger\">
            ";
        // line 10
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block__main_menu_messages_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_main_menu_messages_widget"));

        // line 16
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " main-menu__item main-menu__item--nested"));
        // line 19
        echo "    <li ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        //TODO: confused of names
        <button class=\"messages-widget__trigger\" data-oro-mpa-trigger>
            <span class=\"badge messages-widget__badge\">3</span>
            <span class=\"badge badge--dark\"><i class=\"fa-comment\"></i></span>
            <span class=\"messages-widget__title text-uppercase\">Messages</span>
            <i class=\"fa-angle-down\"></i>
        </button>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu_logged.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  88 => 16,  82 => 15,  71 => 10,  67 => 8,  61 => 7,  51 => 3,  48 => 2,  42 => 1,  35 => 15,  32 => 14,  30 => 7,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _header_row_shopping_widget %}
    <div class=\"header-row__container shopping-list-widget\">
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _header_row_shopping_trigger_widget %}
    <div class=\"header-row__trigger\" data-toggle=\"dropdown\">
        <div class=\"nav-trigger\">
            {{ block_widget(block) }}
        </div>
    </div>
{% endblock %}

{% block _main_menu_messages_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': \" main-menu__item main-menu__item--nested\"
    }) %}
    <li {{ block('block_attributes') }}>
        //TODO: confused of names
        <button class=\"messages-widget__trigger\" data-oro-mpa-trigger>
            <span class=\"badge messages-widget__badge\">3</span>
            <span class=\"badge badge--dark\"><i class=\"fa-comment\"></i></span>
            <span class=\"messages-widget__title text-uppercase\">Messages</span>
            <i class=\"fa-angle-down\"></i>
        </button>
    </li>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu_logged.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/CommerceMenuBundle/Resources/views/layouts/default/page/main_menu_logged.html.twig");
    }
}

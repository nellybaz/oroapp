<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form_cms_update.html.twig */
class __TwigTemplate_1f35c04a2746fdc12d0301c60237a4a3e5fdec53ea01185c9de49c9f30f915c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_login_page_widget' => array($this, 'block__login_page_widget'),
            '_login_page_logo_widget' => array($this, 'block__login_page_logo_widget'),
            '_login_page_top_widget' => array($this, 'block__login_page_top_widget'),
            '_login_page_bottom_widget' => array($this, 'block__login_page_bottom_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form_cms_update.html.twig"));

        // line 1
        $this->displayBlock('_login_page_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('_login_page_logo_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('_login_page_top_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('_login_page_bottom_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__login_page_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_login_page_widget"));

        // line 2
        echo "    ";
        if ((($context["loginPage"] ?? $this->getContext($context, "loginPage")) && $this->getAttribute(($context["loginPage"] ?? $this->getContext($context, "loginPage")), "backgroundImage", array()))) {
            // line 3
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => ((((($this->getAttribute(            // line 4
($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . "background-image: url('") . $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFilteredImageUrl($this->getAttribute(($context["loginPage"] ?? $this->getContext($context, "loginPage")), "backgroundImage", array()), "login_page_background")) . "');")));
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block__login_page_logo_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_login_page_logo_widget"));

        // line 11
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\AttachmentBundle\Twig\FileExtension')->getFilteredImageUrl(($context["logo"] ?? $this->getContext($context, "logo")), "login_page_logo"), "html", null, true);
        echo "\">
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block__login_page_top_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_login_page_top_widget"));

        // line 17
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 18
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block__login_page_bottom_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_login_page_bottom_widget"));

        // line 23
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 24
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form_cms_update.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 24,  122 => 23,  116 => 22,  106 => 18,  101 => 17,  95 => 16,  85 => 12,  80 => 11,  74 => 10,  64 => 7,  61 => 6,  59 => 4,  57 => 3,  54 => 2,  48 => 1,  41 => 22,  38 => 21,  36 => 16,  33 => 15,  31 => 10,  28 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _login_page_widget %}
    {% if loginPage and loginPage.backgroundImage %}
        {% set attr = attr|merge({
            style: attr.style|default('') ~ \"background-image: url('\" ~ filtered_image_url(loginPage.backgroundImage, 'login_page_background') ~ \"');\"
        }) %}
    {% endif %}
    {{ parent_block_widget(block) }}
{% endblock %}

{% block _login_page_logo_widget %}
    <div{{ block('block_attributes') }}>
        <img src=\"{{ filtered_image_url(logo, 'login_page_logo') }}\">
    </div>
{% endblock %}

{% block _login_page_top_widget %}
    <div{{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _login_page_bottom_widget %}
    <div{{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form_cms_update.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CMSBundle/Resources/views/layouts/blank/oro_customer_customer_user_security_login/customer_user_login_form_cms_update.html.twig");
    }
}

<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/logo.html.twig */
class __TwigTemplate_3c953d49d42b6085d8ec58a52295abc81195382d9afc51c61d91b9dea19a9af0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_logo_widget' => array($this, 'block__logo_widget'),
            '_logo_print_widget' => array($this, 'block__logo_print_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/logo.html.twig"));

        // line 1
        $this->displayBlock('_logo_widget', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('_logo_print_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__logo_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_logo_widget"));

        // line 2
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6b6855e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6b6855e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/6b6855e_logo-oroacem_1.svg");
            // line 3
            echo "        ";
            $context["imgUrl"] = ($context["asset_url"] ?? $this->getContext($context, "asset_url"));
            // line 4
            echo "    ";
        } else {
            // asset "6b6855e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6b6855e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/6b6855e.svg");
            // line 3
            echo "        ";
            $context["imgUrl"] = ($context["asset_url"] ?? $this->getContext($context, "asset_url"));
            // line 4
            echo "    ";
        }
        unset($context["asset_url"]);
        // line 5
        echo "    
    ";
        // line 6
        $context["attr_img"] = ((array_key_exists("attr_img", $context)) ? (_twig_default_filter(($context["attr_img"] ?? $this->getContext($context, "attr_img")), array())) : (array()));
        // line 7
        echo "    ";
        $context["attr_img"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr_img"] ?? $this->getContext($context, "attr_img")), array("src" =>         // line 8
($context["imgUrl"] ?? $this->getContext($context, "imgUrl"))));
        // line 10
        echo "
    ";
        // line 11
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block__logo_print_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_logo_print_widget"));

        // line 15
        echo "    ";
        $this->displayBlock("_logo_widget", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/logo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 15,  83 => 14,  74 => 11,  71 => 10,  69 => 8,  67 => 7,  65 => 6,  62 => 5,  58 => 4,  55 => 3,  50 => 4,  47 => 3,  42 => 2,  36 => 1,  29 => 14,  26 => 13,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _logo_widget %}
    {% image '@OroFrontendBundle/Resources/public/default/images/logo/logo-oroacem.svg' %}
        {% set imgUrl = asset_url %}
    {% endimage %}
    
    {% set attr_img = attr_img|default({}) %}
    {% set attr_img = layout_attr_defaults(attr_img, {
        'src': imgUrl
    }) %}

    {{ parent_block_widget(block) }}
{% endblock %}

{% block _logo_print_widget %}
    {{ block('_logo_widget') }}
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/logo.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/logo.html.twig");
    }
}

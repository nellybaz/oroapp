<?php

/* OroFrontendBundle:Organization:logo_frontend.html.twig */
class __TwigTemplate_b43943daf97a194095e74f6580b669206db3598d661f1989047fd4894df6d751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroFrontendBundle:Organization:logo_frontend.html.twig"));

        // line 1
        $context["route"] = "oro_frontend_root";
        // line 2
        $context["organization_name"] = "Mattiva";
        // line 3
        if ($this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isDesktop()) {
            // line 4
            echo "    ";
            if (twig_length_filter($this->env, ($context["organization_name"] ?? $this->getContext($context, "organization_name")))) {
                // line 5
                echo "        ";
                $context["logo"] = $this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeLogo();
                // line 6
                echo "        <h1 class=\"logo logo-";
                echo ((($context["logo"] ?? $this->getContext($context, "logo"))) ? ("image") : ("text"));
                echo "\">
            <a href=\"";
                // line 7
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ($context["organization_name"] ?? $this->getContext($context, "organization_name")), "html", null, true);
                echo "\">
                ";
                // line 8
                if (($context["logo"] ?? $this->getContext($context, "logo"))) {
                    // line 9
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["logo"] ?? $this->getContext($context, "logo"))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, ($context["organization_name"] ?? $this->getContext($context, "organization_name")), "html", null, true);
                    echo "\">
                ";
                } else {
                    // line 11
                    echo twig_escape_filter($this->env, ($context["organization_name"] ?? $this->getContext($context, "organization_name")), "html", null, true);
                }
                // line 13
                echo "            </a>
        </h1>
    ";
            } else {
                // line 16
                echo "        <span class=\"logo-placeholder\"></span>
    ";
            }
        } else {
            // line 19
            echo "    ";
            // line 20
            echo "    <span id=\"main-menu-toggle\">
        <i class=\"fa-bars\"></i>
    </span>
    <h1 class=\"logo\">
        <span>
            <a href=\"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_trim_filter(strip_tags(($context["organization_name"] ?? $this->getContext($context, "organization_name")))), "html", null, true);
            echo "\">
                ";
            // line 26
            if ($this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeLogo()) {
                // line 27
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Oro\Bundle\ThemeBundle\Twig\ThemeExtension')->getThemeLogo()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_trim_filter(strip_tags(($context["organization_name"] ?? $this->getContext($context, "organization_name")))), "html", null, true);
                echo "\">
                ";
            } else {
                // line 29
                echo twig_escape_filter($this->env, ($context["organization_name"] ?? $this->getContext($context, "organization_name")), "html", null, true);
            }
            // line 31
            echo "            </a>
        </span>
    </h1>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:Organization:logo_frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  93 => 29,  85 => 27,  83 => 26,  77 => 25,  70 => 20,  68 => 19,  63 => 16,  58 => 13,  55 => 11,  47 => 9,  45 => 8,  39 => 7,  34 => 6,  31 => 5,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set route = 'oro_frontend_root' %}
{% set organization_name = 'Mattiva' %}
{% if isDesktopVersion() %}
    {% if organization_name|length %}
        {% set logo = oro_theme_logo() %}
        <h1 class=\"logo logo-{{ logo ? 'image' : 'text' }}\">
            <a href=\"{{ path(route) }}\" title=\"{{ organization_name }}\">
                {% if logo %}
                    <img src=\"{{ asset(logo) }}\" alt=\"{{- organization_name -}}\">
                {% else %}
                    {{- organization_name -}}
                {% endif %}
            </a>
        </h1>
    {% else %}
        <span class=\"logo-placeholder\"></span>
    {% endif %}
{% else %}
    {# Mobile view #}
    <span id=\"main-menu-toggle\">
        <i class=\"fa-bars\"></i>
    </span>
    <h1 class=\"logo\">
        <span>
            <a href=\"{{ path(route) }}\" title=\"{{ organization_name|striptags|trim }}\">
                {% if oro_theme_logo() %}
                    <img src=\"{{ asset(oro_theme_logo()) }}\" alt=\"{{ organization_name|striptags|trim }}\">
                {% else %}
                    {{- organization_name -}}
                {% endif %}
            </a>
        </span>
    </h1>
{% endif %}
", "OroFrontendBundle:Organization:logo_frontend.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/Organization/logo_frontend.html.twig");
    }
}

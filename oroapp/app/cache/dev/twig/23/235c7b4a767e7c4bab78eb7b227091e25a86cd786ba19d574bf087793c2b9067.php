<?php

/* OroAsseticBundle:Assetic:theme_css.html.twig */
class __TwigTemplate_ad089dc2a8e3fbc71efdc77e7e9384b048105a76b004158d56cc0953ebaf1676 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroAsseticBundle:Assetic:theme_css.html.twig"));

        // line 1
        $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "."));
        // line 2
        if (($context["isLess"] ?? $this->getContext($context, "isLess"))) {
            // line 3
            echo "    <script type=\"text/javascript\">
        // need to clear localStorage when less is compiled on client, to prevent caching
        try {
            localStorage.clear();
        } catch (e) {
            // catch IE protected mode or browsers w/o localStorage support
        }
    </script>
";
        }
        // line 12
        echo "<link ";
        if (($context["isLess"] ?? $this->getContext($context, "isLess"))) {
            echo "rel=\"stylesheet/less\"";
        } else {
            echo "rel=\"stylesheet\"";
        }
        echo " media=\"all\" href=\"";
        echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" />
";
        // line 13
        if (($context["isLess"] ?? $this->getContext($context, "isLess"))) {
            // line 14
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bowerassets/less/dist/less.min.js"), "html", null, true);
            echo "\"></script>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroAsseticBundle:Assetic:theme_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  48 => 13,  37 => 12,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set isLess = ('less' in asset_url|split('.')) %}
{% if isLess %}
    <script type=\"text/javascript\">
        // need to clear localStorage when less is compiled on client, to prevent caching
        try {
            localStorage.clear();
        } catch (e) {
            // catch IE protected mode or browsers w/o localStorage support
        }
    </script>
{% endif %}
<link {% if isLess %}rel=\"stylesheet/less\"{% else %}rel=\"stylesheet\"{% endif %} media=\"all\" href=\"{{ asset_url }}\" />
{% if isLess %}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/bowerassets/less/dist/less.min.js') }}\"></script>
{% endif %}
", "OroAsseticBundle:Assetic:theme_css.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/AsseticBundle/Resources/views/Assetic/theme_css.html.twig");
    }
}

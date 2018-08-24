<?php

/* OroRequireJSBundle::scripts.html.twig */
class __TwigTemplate_44a4059c6767360b921d4970e670dbc896cec751a102b658dd9fbfcfcff36dbb extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroRequireJSBundle::scripts.html.twig"));

        // line 1
        $context["compressed"] = ((array_key_exists("compressed", $context)) ? (($context["compressed"] ?? $this->getContext($context, "compressed"))) : (true));
        // line 2
        $context["baseAssetParts"] = twig_split_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles"), "?", 2);
        // line 3
        $context["provider_alias"] = ((array_key_exists("provider_alias", $context)) ? (($context["provider_alias"] ?? $this->getContext($context, "provider_alias"))) : (null));
        // line 4
        ob_start();
        // line 5
        echo "    require({
        baseUrl: ";
        // line 6
        echo twig_jsonencode_filter($this->getAttribute(($context["baseAssetParts"] ?? $this->getContext($context, "baseAssetParts")), 0, array(), "array"));
        echo ",
        ";
        // line 7
        if ($this->getAttribute(($context["baseAssetParts"] ?? null), 1, array(), "array", true, true)) {
            // line 8
            echo "        urlArgs: function(id, url) {
            var absoluteUrlRegexp = /^https?:\\/\\/|^\\/\\//i;
            if (absoluteUrlRegexp.test(url) && url.indexOf('";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "host", array()), "html", null, true);
            echo "') === -1) {
                return '';
            } else {
                var delimiter = url.indexOf('?') === -1 ? '?' : '&';
                return delimiter + '";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["baseAssetParts"] ?? $this->getContext($context, "baseAssetParts")), 1, array(), "array"), "html", null, true);
            echo "';
            }
        }
        ";
        }
        // line 18
        echo "    });
    ";
        // line 19
        echo twig_escape_filter($this->env, ((array_key_exists("config_extend", $context)) ? (_twig_default_filter(($context["config_extend"] ?? $this->getContext($context, "config_extend")), "")) : ("")), "html", null, true);
        echo "
";
        $context["config_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        if ((($context["compressed"] ?? $this->getContext($context, "compressed")) && $this->env->getExtension('Oro\Bundle\RequireJSBundle\Twig\OroRequireJSExtension')->isRequireJSBuildExists(($context["provider_alias"] ?? $this->getContext($context, "provider_alias"))))) {
            // line 22
            echo "    <script type=\"text/javascript\">
        var require = (function(){
            var r=function(c){m(r.c,c)};r.c={};function m(a,b){
                for (var i in b)b[i]!=null&&b[i].toString()==='[object Object]'?m(a[i]||(a[i]={}),b[i]):a[i]=b[i]}
            return r;
        }());
        ";
            // line 28
            echo ($context["config_extend"] ?? $this->getContext($context, "config_extend"));
            echo "
        require = require.c;
    </script>
    <script type=\"text/javascript\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Oro\Bundle\RequireJSBundle\Twig\OroRequireJSExtension')->getRequireJSBuildPath(($context["provider_alias"] ?? $this->getContext($context, "provider_alias")))), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 33
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/npmassets/requirejs/require.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\">
        ";
            // line 35
            echo $this->env->getExtension('Oro\Bundle\RequireJSBundle\Twig\OroRequireJSExtension')->getRequireJSConfig(($context["provider_alias"] ?? $this->getContext($context, "provider_alias")));
            echo "
    </script>
    <script type=\"text/javascript\">
        ";
            // line 38
            echo ($context["config_extend"] ?? $this->getContext($context, "config_extend"));
            echo "
    </script>
    <script type=\"text/javascript\">
        require(['requirejs-asap-init']);
    </script>
";
        }
        // line 44
        echo "
";
        // line 45
        echo $this->env->getExtension('Oro\Bundle\RequireJSBundle\Twig\OroRequireJSExtension')->getRequireJSBuildLogger(($context["provider_alias"] ?? $this->getContext($context, "provider_alias")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroRequireJSBundle::scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  107 => 44,  98 => 38,  92 => 35,  86 => 33,  81 => 31,  75 => 28,  67 => 22,  65 => 21,  60 => 19,  57 => 18,  50 => 14,  43 => 10,  39 => 8,  37 => 7,  33 => 6,  30 => 5,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set compressed = compressed is defined ? compressed : true %}
{% set baseAssetParts = asset('bundles')|split('?', 2) %}
{% set provider_alias = provider_alias is defined ? provider_alias : null %}
{% set config_extend %}
    require({
        baseUrl: {{ baseAssetParts[0]|json_encode|raw }},
        {% if baseAssetParts[1] is defined %}
        urlArgs: function(id, url) {
            var absoluteUrlRegexp = /^https?:\\/\\/|^\\/\\//i;
            if (absoluteUrlRegexp.test(url) && url.indexOf('{{ app.request.host }}') === -1) {
                return '';
            } else {
                var delimiter = url.indexOf('?') === -1 ? '?' : '&';
                return delimiter + '{{ baseAssetParts[1] }}';
            }
        }
        {% endif %}
    });
    {{ config_extend|default('') }}
{% endset %}
{% if compressed and requirejs_build_exists(provider_alias) %}
    <script type=\"text/javascript\">
        var require = (function(){
            var r=function(c){m(r.c,c)};r.c={};function m(a,b){
                for (var i in b)b[i]!=null&&b[i].toString()==='[object Object]'?m(a[i]||(a[i]={}),b[i]):a[i]=b[i]}
            return r;
        }());
        {{ config_extend|raw }}
        require = require.c;
    </script>
    <script type=\"text/javascript\" src=\"{{ asset(get_requirejs_build_path(provider_alias)) }}\"></script>
{% else %}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/npmassets/requirejs/require.js') }}\"></script>
    <script type=\"text/javascript\">
        {{ get_requirejs_config(provider_alias) }}
    </script>
    <script type=\"text/javascript\">
        {{ config_extend|raw }}
    </script>
    <script type=\"text/javascript\">
        require(['requirejs-asap-init']);
    </script>
{% endif %}

{{ requirejs_build_logger(provider_alias)|raw }}
", "OroRequireJSBundle::scripts.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/RequireJSBundle/Resources/views/scripts.html.twig");
    }
}

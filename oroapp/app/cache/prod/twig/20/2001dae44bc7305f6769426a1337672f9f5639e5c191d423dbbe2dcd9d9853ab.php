<?php

/* OroRequireJSBundle::scripts.html.twig */
class __TwigTemplate_157e87b411b0ca5f0de45efe98b107521872c69cf9facce1bd3405a7071b88a4 extends Twig_Template
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
        // line 1
        $context["compressed"] = ((array_key_exists("compressed", $context)) ? (($context["compressed"] ?? null)) : (true));
        // line 2
        $context["baseAssetParts"] = twig_split_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles"), "?", 2);
        // line 3
        $context["provider_alias"] = ((array_key_exists("provider_alias", $context)) ? (($context["provider_alias"] ?? null)) : (null));
        // line 4
        ob_start();
        // line 5
        echo "    require({
        baseUrl: ";
        // line 6
        echo twig_jsonencode_filter($this->getAttribute(($context["baseAssetParts"] ?? null), 0, array(), "array"));
        echo ",
        ";
        // line 7
        if ($this->getAttribute(($context["baseAssetParts"] ?? null), 1, array(), "array", true, true)) {
            // line 8
            echo "        urlArgs: function(id, url) {
            var absoluteUrlRegexp = /^https?:\\/\\/|^\\/\\//i;
            if (absoluteUrlRegexp.test(url) && url.indexOf('";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "host", array()), "html", null, true);
            echo "') === -1) {
                return '';
            } else {
                var delimiter = url.indexOf('?') === -1 ? '?' : '&';
                return delimiter + '";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["baseAssetParts"] ?? null), 1, array(), "array"), "html", null, true);
            echo "';
            }
        }
        ";
        }
        // line 18
        echo "    });
    ";
        // line 19
        echo twig_escape_filter($this->env, ((array_key_exists("config_extend", $context)) ? (_twig_default_filter(($context["config_extend"] ?? null), "")) : ("")), "html", null, true);
        echo "
";
        $context["config_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        if ((($context["compressed"] ?? null) && $this->env->getExtension('Oro\Bundle\RequireJSBundle\Twig\OroRequireJSExtension')->isRequireJSBuildExists(($context["provider_alias"] ?? null)))) {
            // line 22
            echo "    <script type=\"text/javascript\">
        var require = (function(){
            var r=function(c){m(r.c,c)};r.c={};function m(a,b){
                for (var i in b)b[i]!=null&&b[i].toString()==='[object Object]'?m(a[i]||(a[i]={}),b[i]):a[i]=b[i]}
            return r;
        }());
        ";
            // line 28
            echo ($context["config_extend"] ?? null);
            echo "
        require = require.c;
    </script>
    <script type=\"text/javascript\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Oro\Bundle\RequireJSBundle\Twig\OroRequireJSExtension')->getRequireJSBuildPath(($context["provider_alias"] ?? null))), "html", null, true);
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
            echo $this->env->getExtension('Oro\Bundle\RequireJSBundle\Twig\OroRequireJSExtension')->getRequireJSConfig(($context["provider_alias"] ?? null));
            echo "
    </script>
    <script type=\"text/javascript\">
        ";
            // line 38
            echo ($context["config_extend"] ?? null);
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
        echo $this->env->getExtension('Oro\Bundle\RequireJSBundle\Twig\OroRequireJSExtension')->getRequireJSBuildLogger(($context["provider_alias"] ?? null));
        echo "
";
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
        return array (  107 => 45,  104 => 44,  95 => 38,  89 => 35,  83 => 33,  78 => 31,  72 => 28,  64 => 22,  62 => 21,  57 => 19,  54 => 18,  47 => 14,  40 => 10,  36 => 8,  34 => 7,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroRequireJSBundle::scripts.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/RequireJSBundle/Resources/views/scripts.html.twig");
    }
}

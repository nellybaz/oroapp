<?php

/* OroUIBundle::requirejs.config.js.twig */
class __TwigTemplate_61e0afcb7c502a7c8e79b60559f71f4eeccb54d541cfbb60090648200e907db0 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle::requirejs.config.js.twig"));

        // line 1
        $context["userName"] = null;
        // line 2
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 3
            $context["userName"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array());
        }
        // line 5
        echo "require({
    paths: {
        'oroui/js/app': 'oroui/js/app' ";
        // line 8
        echo "    },
    config: {
        'oroui/js/app': {
            baseUrl: ";
        // line 11
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"));
        echo ",
            headerId: ";
        // line 12
        echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\HashNavExtension')->getHashNavigationHeaderConst());
        echo ",
            userName: ";
        // line 13
        echo twig_jsonencode_filter(($context["userName"] ?? $this->getContext($context, "userName")));
        echo ",
            root: ";
        // line 14
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"));
        echo " + '\\/',
            startRouteName: ";
        // line 15
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_master_request_route"), "method"));
        echo ",
            debug: Boolean(";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "debug", array()), "js", null, true);
        echo "),
            skipRouting: '[data-nohash=true], .no-hash',
            controllerPath: 'controllers/',
            controllerSuffix: '-controller',
            // preserves url path as it is (does not add/remove trailing slash)
            trailing: null
        }
    }
});
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  33 => 8,  29 => 5,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- set userName = null -%}
{%- if app.user -%}
    {%- set userName = app.user.username -%}
{%- endif -%}
require({
    paths: {
        'oroui/js/app': 'oroui/js/app' {# fix for requirejs-build-logger-exclude-list #}
    },
    config: {
        'oroui/js/app': {
            baseUrl: {{ app.request.getSchemeAndHttpHost()|json_encode|raw }},
            headerId: {{ oro_hash_navigation_header()|json_encode|raw }},
            userName: {{ userName|json_encode|raw }},
            root: {{ app.request.getBaseURL()|json_encode|raw }} + '\\/',
            startRouteName: {{ app.request.attributes.get('_master_request_route')|json_encode|raw }},
            debug: Boolean({{ app.debug }}),
            skipRouting: '[data-nohash=true], .no-hash',
            controllerPath: 'controllers/',
            controllerSuffix: '-controller',
            // preserves url path as it is (does not add/remove trailing slash)
            trailing: null
        }
    }
});
", "OroUIBundle::requirejs.config.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/requirejs.config.js.twig");
    }
}

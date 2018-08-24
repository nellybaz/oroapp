<?php

/* OroNavigationBundle:Js:requirejs.config.js.twig */
class __TwigTemplate_fe0b32e88fdca9c013885bfa44e5e992da04ad94375e596194d4e847d2523b8c extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Js:requirejs.config.js.twig"));

        // line 1
        echo "require({
    shim: {
        'oro/routes': {
            deps: ['routing'],
            init: function(routing) {
                ";
        // line 6
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "debug", array())) {
            // line 7
            echo "                    ";
            // line 8
            echo "                    ";
            $context["data"] = array("base_url" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "baseUrl", array()), "scheme" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "scheme", array()), "host" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "host", array()));
            // line 9
            echo "                    var data = ";
            echo twig_jsonencode_filter(($context["data"] ?? $this->getContext($context, "data")));
            echo ";
                    data.routes = routing.getRoutes();
                    fos.Router.setData(data);
                ";
        }
        // line 13
        echo "                return routing;
            }
        }
    },
    map: {
        '*': {
            'routing': 'oro/routes'
        },
        'oro/routes': {
            'routing': 'routing'
        }
    },
    paths: {
    ";
        // line 26
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "debug", array())) {
            // line 27
            echo "        'oro/routes': '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData")), "js", null, true);
            echo "'
    ";
        } else {
            // line 29
            echo "        'oro/routes': ";
            echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/routes.js", "routing"));
            echo "
    ";
        }
        // line 31
        echo "    }
});
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Js:requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 31,  67 => 29,  61 => 27,  59 => 26,  44 => 13,  36 => 9,  33 => 8,  31 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("require({
    shim: {
        'oro/routes': {
            deps: ['routing'],
            init: function(routing) {
                {% if not app.debug %}
                    {# processed correctly only in case when routing comes via controller #}
                    {% set data = {'base_url': app.request.baseUrl, 'scheme': app.request.scheme, 'host': app.request.host } %}
                    var data = {{ data|json_encode|raw }};
                    data.routes = routing.getRoutes();
                    fos.Router.setData(data);
                {% endif %}
                return routing;
            }
        }
    },
    map: {
        '*': {
            'routing': 'oro/routes'
        },
        'oro/routes': {
            'routing': 'routing'
        }
    },
    paths: {
    {% if app.debug %}
        'oro/routes': '{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}'
    {% else %}
        'oro/routes': {{ asset('js/routes.js', 'routing')|json_encode|raw }}
    {% endif %}
    }
});
", "OroNavigationBundle:Js:requirejs.config.js.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Js/requirejs.config.js.twig");
    }
}

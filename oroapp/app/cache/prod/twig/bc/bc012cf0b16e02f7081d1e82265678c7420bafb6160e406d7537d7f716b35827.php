<?php

/* OroNavigationBundle:Js:requirejs.config.js.twig */
class __TwigTemplate_b952b98174a46f827db5473d75f4ad16485e05792284719678dc69143bbc9279 extends Twig_Template
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
        echo "require({
    shim: {
        'oro/routes': {
            deps: ['routing'],
            init: function(routing) {
                ";
        // line 6
        if ( !$this->getAttribute(($context["app"] ?? null), "debug", array())) {
            // line 7
            echo "                    ";
            // line 8
            echo "                    ";
            $context["data"] = array("base_url" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "baseUrl", array()), "scheme" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "scheme", array()), "host" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "host", array()));
            // line 9
            echo "                    var data = ";
            echo twig_jsonencode_filter(($context["data"] ?? null));
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
        if ($this->getAttribute(($context["app"] ?? null), "debug", array())) {
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
        return array (  70 => 31,  64 => 29,  58 => 27,  56 => 26,  41 => 13,  33 => 9,  30 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroNavigationBundle:Js:requirejs.config.js.twig", "");
    }
}

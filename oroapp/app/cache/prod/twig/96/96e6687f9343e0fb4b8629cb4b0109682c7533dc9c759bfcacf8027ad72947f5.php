<?php

/* OroUIBundle::requirejs.config.js.twig */
class __TwigTemplate_5b00e538c661ad2483432f006c03992229064f1e3567a181d217ca940a1e9277 extends Twig_Template
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
        $context["userName"] = null;
        // line 2
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 3
            $context["userName"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array());
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
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method"));
        echo ",
            headerId: ";
        // line 12
        echo twig_jsonencode_filter($this->env->getExtension('Oro\Bundle\NavigationBundle\Twig\HashNavExtension')->getHashNavigationHeaderConst());
        echo ",
            userName: ";
        // line 13
        echo twig_jsonencode_filter(($context["userName"] ?? null));
        echo ",
            root: ";
        // line 14
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getBaseURL", array(), "method"));
        echo " + '\\/',
            startRouteName: ";
        // line 15
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_master_request_route"), "method"));
        echo ",
            debug: Boolean(";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "debug", array()), "js", null, true);
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
        return array (  55 => 16,  51 => 15,  47 => 14,  43 => 13,  39 => 12,  35 => 11,  30 => 8,  26 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroUIBundle::requirejs.config.js.twig", "");
    }
}

<?php

/* @OroRequireJS/layouts/blank/config/requirejs.yml */
class __TwigTemplate_97fae32568536a7367908d01cae00512c88e28da805500bdaf4057f3f9d3af77 extends Twig_Template
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
        echo "config:
    shim:
        'asap':
            exports: 'asap'
        'requirejs-asap-init':
            exports: 'asap'
            deps:
                - 'asap'
    paths:
        'asap': 'bundles/ororequirejs/lib/asap/asap.js'
        'requirejs-asap-init': 'bundles/ororequirejs/js/requirejs-asap-init.js'
build:
    paths:
        'requirejs-asap-init': 'ororequirejs/js/requirejs-asap-init'
";
    }

    public function getTemplateName()
    {
        return "@OroRequireJS/layouts/blank/config/requirejs.yml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OroRequireJS/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/RequireJSBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

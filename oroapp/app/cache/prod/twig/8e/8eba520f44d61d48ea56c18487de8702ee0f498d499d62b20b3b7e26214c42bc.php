<?php

/* @OroNavigation/layouts/blank/config/requirejs.yml */
class __TwigTemplate_1bac33d42e91fd910c82f7ebaa46ef112dbd53f4eb3ac56b6316ec3852d2277d extends Twig_Template
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
        'routing':
            exports: 'window.Routing'
    paths:
        'routing': 'bundles/fosjsrouting/js/router.js'
";
    }

    public function getTemplateName()
    {
        return "@OroNavigation/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroNavigation/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

<?php

/* @OroConfig/layouts/blank/config/requirejs.yml */
class __TwigTemplate_8c4288c81a0366266cb5dbcc2b035fcd40d21bb077392f9196a8e8db9bc73c3f extends Twig_Template
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
    paths:
        'oroconfig/js/configuration': 'bundles/oroconfig/js/configuration.js'
";
    }

    public function getTemplateName()
    {
        return "@OroConfig/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroConfig/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/ConfigBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

<?php

/* @OroSync/layouts/blank/config/requirejs.yml */
class __TwigTemplate_fd88ed4de5d6f55ea0bbb8ad2c352e47333d7045cb6bd39cc2ea083776774a3c extends Twig_Template
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
        'orosync/js/content/grid-builder': 'bundles/orosync/js/content/grid-builder.js'
        'orosync/js/content-manager': 'bundles/orosync/js/content-manager.js'
        'orosync/js/app/modules/content-manager-module': 'bundles/orosync/js/app/modules/content-manager-module.js'
    appmodules:
        - orosync/js/app/modules/content-manager-module
";
    }

    public function getTemplateName()
    {
        return "@OroSync/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroSync/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/SyncBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

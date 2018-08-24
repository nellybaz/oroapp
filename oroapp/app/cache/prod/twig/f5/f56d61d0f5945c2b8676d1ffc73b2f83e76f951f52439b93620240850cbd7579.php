<?php

/* @OroAction/layouts/blank/config/requirejs.yml */
class __TwigTemplate_484474262ec1d4263086e7287c5c7029f0cca58b18cb6ab92fa47d746cb8c97b extends Twig_Template
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
        'oroaction/js/button-manager': 'bundles/oroaction/js/button-manager.js'
        'oroaction/js/app/components/button-component': 'bundles/oroaction/js/app/components/button-component.js'
        'oro/datagrid/action/button-widget-action': 'bundles/oroaction/js/datagrid/action/button-widget-action.js'
";
    }

    public function getTemplateName()
    {
        return "@OroAction/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroAction/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/ActionBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

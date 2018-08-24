<?php

/* @OroEntityConfig/layouts/blank/config/requirejs.yml */
class __TwigTemplate_b05717d54a88eef5aee86332f11b327a45852445deedeaa5182d920ec0552ba1 extends Twig_Template
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
        'oroentityconfig/js/attribute-group-collection-component': 'bundles/oroentityconfig/js/components/attribute-group-collection-component.js'
        'oroentityconfig/js/attribute-group-tabs-component': 'bundles/oroentityconfig/js/components/attribute-group-tabs-component.js'
        'oroentityconfig/js/attribute-group-tab-content-component': 'bundles/oroentityconfig/js/components/attribute-group-tab-content-component.js'
";
    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroEntityConfig/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

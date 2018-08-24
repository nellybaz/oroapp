<?php

/* @OroFrontendLocalization/layouts/blank/config/requirejs.yml */
class __TwigTemplate_2a0b4cd678fcb4d3c39a1efa992a8ecd27680a0809350ee6761c58eaccec8647 extends Twig_Template
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
        'orofrontendlocalization/js/app/components/localization-switcher-component': 'bundles/orofrontendlocalization/js/app/components/localization-switcher-component.js'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontendLocalization/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroFrontendLocalization/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/FrontendLocalizationBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

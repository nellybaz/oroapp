<?php

/* @OroFrontend/layouts/blank/page/require_js_config.yml */
class __TwigTemplate_c3966af524fed237f94883ec21fd6f29a35ededda9ab096ccdd8c154eb4f0813 extends Twig_Template
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
        echo "layout:
    actions:
        - '@setBlockTheme':
            themes: 'require_js_config.html.twig'
        - '@add':
            id: require_js_config
            parentId: require_js
            blockType: block
        - '@add':
            id: require_js_multi_select_filter_config
            parentId: require_js
            blockType: block
            options:
                visible: '=data[\"system_config_provider\"].getValue(\"oro_frontend.filter_value_selectors\")==\"all_at_once\"'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/page/require_js_config.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/page/require_js_config.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/require_js_config.yml");
    }
}

<?php

/* @OroCustomTheme/layouts/custom/imports/oro_product_grid/require_js_config.yml */
class __TwigTemplate_e561d2ce1ec878c7f9fb57996b19efeb8f8f45665ee85001b5bad3bea9393b32 extends Twig_Template
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
            id: require_js_filters_config
            parentId: require_js
            blockType: block
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/imports/oro_product_grid/require_js_config.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/imports/oro_product_grid/require_js_config.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/imports/oro_product_grid/require_js_config.yml");
    }
}

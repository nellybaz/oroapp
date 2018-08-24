<?php

/* @OroCustomTheme/layouts/custom/imports/oro_product_grid/layout.yml */
class __TwigTemplate_2dcc9bfe3534b79d68058a83868d76424b2c9b1b2d3752836bc8df681acd32ef extends Twig_Template
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
        - '@setOption':
            id: product_require_js_config
            optionName: 'attr.data-layout'
            optionValue: 'separate'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/imports/oro_product_grid/layout.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/imports/oro_product_grid/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/imports/oro_product_grid/layout.yml");
    }
}

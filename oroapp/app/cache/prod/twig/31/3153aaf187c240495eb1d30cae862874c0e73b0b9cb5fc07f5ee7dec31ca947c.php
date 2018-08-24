<?php

/* @OroCustomTheme/layouts/custom/page/layout.yml */
class __TwigTemplate_242e2d84fcd26ad44fcfd0cb39cf6f40df069e37f76ccf581d86bf9a91295b31 extends Twig_Template
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
            id: header
            optionName: attr.class
            optionValue: 'header--custom'

        - '@setOption':
            id: page_main
            optionName: attr.class
            optionValue: 'offset-none'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/page/layout.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/page/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/page/layout.yml");
    }
}

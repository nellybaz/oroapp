<?php

/* @OroCustomTheme/layouts/custom/imports/oro_customer_menu/oro_customer_menu.yml */
class __TwigTemplate_a55b67a7f19acf9e4e27711424bdfe3ccb008dfc329effa536a3c8f5c761c66d extends Twig_Template
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
            themes: 'oro_customer_menu.html.twig'
        - '@setOption':
            id: customer_sidebar
            optionName: attr.data-collapse-container
            optionValue: true
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/imports/oro_customer_menu/oro_customer_menu.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/imports/oro_customer_menu/oro_customer_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/imports/oro_customer_menu/oro_customer_menu.yml");
    }
}

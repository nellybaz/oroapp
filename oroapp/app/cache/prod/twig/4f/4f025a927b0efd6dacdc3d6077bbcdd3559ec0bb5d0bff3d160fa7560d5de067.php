<?php

/* @OroCustomTheme/layouts/custom/page/commerce_menu_search_row.yml */
class __TwigTemplate_a916d50e71bee44489fd9bdb97394eab0b90d2a2dc4975e9477ab688d590fdfb extends Twig_Template
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
        - '@remove':
            id: search_row_main_container
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/page/commerce_menu_search_row.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/page/commerce_menu_search_row.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/page/commerce_menu_search_row.yml");
    }
}

<?php

/* @OroFrontend/layouts/blank/imports/sticky_panel/sticky_panel.yml */
class __TwigTemplate_2f56d520c3fa5057467925665d0948c76a088c198cfc3ce42ba0775d573e8db0 extends Twig_Template
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
            themes: 'sticky_panel.html.twig'

        - '@add':
            id: __sticky_panel
            parentId: __root
            blockType: sticky_panel
        - '@add':
            id: __sticky_panel_content
            parentId: __sticky_panel
            blockType: container
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/imports/sticky_panel/sticky_panel.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/imports/sticky_panel/sticky_panel.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/sticky_panel/sticky_panel.yml");
    }
}

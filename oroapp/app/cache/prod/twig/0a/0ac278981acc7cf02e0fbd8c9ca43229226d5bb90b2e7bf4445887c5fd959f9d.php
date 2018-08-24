<?php

/* @OroFrontend/layouts/blank/page/layout.yml */
class __TwigTemplate_98d3283179e47afbec0899d5738a37aadfe36d50d3798a914e81198c9d5172a4 extends Twig_Template
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
    imports:
        -
            id: sticky_panel
            root: body
            namespace: bottom

    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'

        - '@add':
            id: page_title_container
            parentId: page_content
            blockType: container

        - '@add':
            id: page_title
            parentId: page_title_container
            blockType: page_title
            options:
                defaultValue: ~
                value: '=defaultValue'

        - '@setOption':
            id: bottom_sticky_panel
            optionName: sticky_name
            optionValue: bottom-sticky-panel

        - '@setOption':
            id: bottom_sticky_panel
            optionName: stick_to
            optionValue: bottom
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/page/layout.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/page/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/page/layout.yml");
    }
}

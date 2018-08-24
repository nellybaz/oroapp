<?php

/* @OroFrontend/layouts/default/page/layout.yml */
class __TwigTemplate_785435154271db52fb2eb49aa6c8bd20d6e2b01c66f53f26d5ae523877cef1eb extends Twig_Template
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
            root: page_container
            namespace: top
        -
            id: scroll_top
            root: page_main

    actions:
        - '@setBlockTheme':
            themes: 'layout.html.twig'

        - '@setOption':
            id: top_sticky_panel
            optionName: sticky_name
            optionValue: top-sticky-panel

        - '@add':
            id: scripts_before
            blockType: container
            parentId: head

        - '@add':
            id: requirejs_scripts_after
            blockType: container
            parentId: require_js

        - '@add':
            id: notification
            parentId: page_container
            siblingId: page_header
            blockType: block

        - '@add':
            id: sticky_header_row
            parentId: top_sticky_panel_content
            blockType: block

        - '@add':
            id: sticky_element_notification
            parentId: top_sticky_panel_content
            blockType: block

        - '@move':
            id: top_sticky_panel
            parentId: page_container
            siblingId: page_header
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/page/layout.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/page/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/page/layout.yml");
    }
}

<?php

/* @OroFrontend/layouts/blank/imports/datagrid_toolbar/datagrid.yml */
class __TwigTemplate_d9453b26dd82504415b887ddb32485788364d5cca10331c0417ce483d04b1c58 extends Twig_Template
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
            themes: 'datagrid.html.twig'
        - '@setOption':
            id: __datagrid_toolbar_sorting
            optionName: visible
            optionValue: false
        - '@setOption':
            id: __datagrid_toolbar_mass_actions
            optionName: visible
            optionValue: false
        - '@setOption':
            id: __datagrid_toolbar_extra_actions
            optionName: visible
            optionValue: false
        - '@move':
            id: __datagrid_toolbar_sorting
            parentId: __datagrid_toolbar_leftside_container
        - '@move':
            id: __datagrid_toolbar_mass_actions
            parentId: __datagrid_toolbar_leftside_container
        - '@move':
            id: __datagrid_toolbar_extra_actions
            parentId: __datagrid_toolbar_leftside_container
            siblingId: __datagrid_toolbar_mass_actions
        - '@move':
            id: __datagrid_toolbar_pagination
            parentId: __datagrid_toolbar_base_container
        - '@move':
            id: __datagrid_toolbar_page_size
            parentId: __datagrid_toolbar_rightside_container
        - '@move':
            id: __datagrid_toolbar_actions
            parentId: __datagrid_toolbar_rightside_container
        - '@move':
            id: __datagrid_toolbar_items_counter
            parentId: __datagrid_toolbar_leftside_container
        - '@move':
            id: __datagrid_items_counter
            parentId: __datagrid_toolbar_leftside_container
            siblingId: __datagrid_toolbar_sorting
        - '@remove':
            id: __datagrid_toolbar_actions_container
        - '@remove':
            id: __datagrid_toolbar_tools_container
        - '@add':
            id: __datagrid_toolbar_button_container
            parentId: __datagrid_toolbar_leftside_container
            blockType: container
            options:
                visible: false
                class_prefix: datagrid_toolbar_button_container
        - '@addTree':
            items:
                __datagrid_toolbar_leftside_container:
                    blockType: container
                __datagrid_toolbar_base_container:
                    blockType: container
                __datagrid_toolbar_rightside_container:
                    blockType: container
                __datagrid_toolbar_filter_container:
                    blockType: container
            tree:
                __datagrid_toolbar:
                    __datagrid_toolbar_leftside_container: ~
                    __datagrid_toolbar_base_container: ~
                    __datagrid_toolbar_rightside_container: ~
                    __datagrid_toolbar_filter_container: ~
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/imports/datagrid_toolbar/datagrid.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/imports/datagrid_toolbar/datagrid.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/datagrid_toolbar/datagrid.yml");
    }
}

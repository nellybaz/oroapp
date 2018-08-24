<?php

/* @OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout.yml */
class __TwigTemplate_78901bcded85dfc5edec9f115135d41471a10f079a4d7e7a71ae14636da539fb extends Twig_Template
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
            themes: 'layout.html.twig'
        - '@addTree':
            items:
                __datagrid_toolbar:
                    blockType: container
                __datagrid_toolbar_actions_container:
                    blockType: container
                __datagrid_toolbar_mass_actions:
                    blockType: container
                __datagrid_toolbar_extra_actions:
                    blockType: container
                __datagrid_toolbar_tools_container:
                    blockType: container
                __datagrid_toolbar_actions:
                    blockType: container
                __datagrid_toolbar_page_size:
                    blockType: block
                __datagrid_toolbar_pagination:
                    blockType: block
                __datagrid_toolbar_sorting:
                    blockType: block
                __datagrid_items_counter:
                    blockType: block
            tree:
                __root:
                    __datagrid_toolbar:
                        __datagrid_items_counter: ~
                        __datagrid_toolbar_sorting: ~
                        __datagrid_toolbar_actions_container:
                            __datagrid_toolbar_mass_actions: ~
                            __datagrid_toolbar_extra_actions: ~
                        __datagrid_toolbar_tools_container:
                            __datagrid_toolbar_actions: ~
                            __datagrid_toolbar_page_size: ~
                        __datagrid_toolbar_pagination: ~

";
    }

    public function getTemplateName()
    {
        return "@OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout.yml";
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
        return new Twig_Source("", "@OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/imports/datagrid_toolbar/layout.yml");
    }
}

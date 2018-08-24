<?php

/* @OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout_mobile.yml */
class __TwigTemplate_ff35cb39b9dbc730496aeacc2ab420b901c2c48fb226e7b2ecfdb96b5f6c9c1c extends Twig_Template
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
            themes: 'layout_mobile.html.twig'
        - '@remove':
            id: __datagrid_toolbar_extra_actions
        - '@remove':
            id: __datagrid_toolbar_tools_container
        - '@move':
            id: __datagrid_toolbar_actions
            parentId: datagrid_toolbar
            prepend: true
        - '@add':
            id: __datagrid_toolbar_pagination_container
            parentId: __datagrid_toolbar
            blockType: container
        - '@move':
            id: __datagrid_toolbar_pagination
            parentId: __datagrid_toolbar_pagination_container
        - '@move':
            id: __datagrid_toolbar_page_size
            parentId: __datagrid_toolbar_pagination_container
            siblingId: __datagrid_toolbar_pagination

    conditions: 'context[\"is_mobile\"]==true'

";
    }

    public function getTemplateName()
    {
        return "@OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout_mobile.yml";
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
        return new Twig_Source("", "@OroDataGrid/layouts/blank/imports/datagrid_toolbar/layout_mobile.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/imports/datagrid_toolbar/layout_mobile.yml");
    }
}

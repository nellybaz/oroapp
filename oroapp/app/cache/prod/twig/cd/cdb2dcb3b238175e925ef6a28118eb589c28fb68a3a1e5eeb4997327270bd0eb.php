<?php

/* @OroFrontend/layouts/default/oro_frontend_datagrid_widget/datagrid.yml */
class __TwigTemplate_25ae8898bb054440da37433309f0bb26008dd4dcb287ad0949881c74c88ebe0d extends Twig_Template
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
            id: datagrid
            root: widget_content
            namespace: widget
    actions:
        - '@setBlockTheme':
            themes: 'datagrid.html.twig'
        - '@setOption':
            id: widget_datagrid
            optionName: grid_name
            optionValue: '=context[\"gridName\"]'
        - '@setOption':
            id: widget_datagrid
            optionName: grid_parameters
            optionValue: '=context[\"params\"]'
        - '@setOption':
            id: widget_datagrid
            optionName: grid_render_parameters.toolbarOptions.itemsCounter.transTemplate
            optionValue: 'oro_frontend.datagrid.pagination.totalRecords.products'

        - '@setOption':
            id: widget_datagrid
            optionName: vars
            optionValue:
                multiselect: '=context[\"multiselect\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/default/oro_frontend_datagrid_widget/datagrid.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/default/oro_frontend_datagrid_widget/datagrid.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/default/oro_frontend_datagrid_widget/datagrid.yml");
    }
}

<?php

/* @OroFrontend/layouts/blank/imports/datagrid/datagrid.yml */
class __TwigTemplate_01b8212feea9a644d31d76a6099afb09a01cfb74c10544983d397bea1dd60efb extends Twig_Template
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
            id: datagrid_views
            root: __root
    actions:
        - '@setBlockTheme':
            themes: 'datagrid.html.twig'

        - '@setOption':
            id: __datagrid
            optionName: grid_render_parameters
            optionValue:
                cssClass: 'frontend-datagrid'
                enableFloatingHeaderPlugin: false
                enableToggleFilters: true
                themeOptions:
                    actionsDropdown: 'auto'
                    actionOptions:
                        refreshAction:
                            launcherOptions:
                                className: 'btn btn--default btn--size-s refresh-action'
                                icon: 'undo fa--no-offset'
                                iconHideText: true
                        resetAction:
                            launcherOptions:
                                className: 'btn btn--default btn--size-s reset-action'
                                icon: 'refresh fa--no-offset'
                                iconHideText: true
                    customModules:
                        columnManagerComponent: 'orofrontend/js/app/components/column-manager/frontend-column-manager-component'
                toolbarOptions:
                    actionsPanel:
                        className: 'btn-group not-expand frontend-datagrid__panel'
                    itemsCounter:
                        className: 'datagrid-tool'
                    hideItemsCounter: false
                filterContainerSelector: '[data-grid-toolbar=\"top\"] [data-datafilter-container]'
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/imports/datagrid/datagrid.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/imports/datagrid/datagrid.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/imports/datagrid/datagrid.yml");
    }
}

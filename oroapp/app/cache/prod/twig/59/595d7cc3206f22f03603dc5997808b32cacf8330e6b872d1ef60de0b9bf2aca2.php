<?php

/* @OroDataGrid/layouts/blank/config/requirejs.yml */
class __TwigTemplate_9cfd106f10e6b4830b8c8d51223dadfaf8bf9178a5bad8f424d73033edd1ef9e extends Twig_Template
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
        echo "config:
    paths:
        'backbone-pageable-collection': 'bundles/bowerassets/backbone-pageable/lib/backbone-pageable.js'
        'backgrid': 'bundles/orodatagrid/js/extend/backgrid.js'

        'orodatagrid/js/datagrid/action-launcher': 'bundles/orodatagrid/js/datagrid/action-launcher.js'
        'orodatagrid/js/datagrid/dropdown-select-choice-launcher': 'bundles/orodatagrid/js/datagrid/dropdown-select-choice-launcher.js'
        'oro/datagrid/action/abstract-action': 'bundles/orodatagrid/js/datagrid/action/abstract-action.js'
        'oro/datagrid/action/delete-action': 'bundles/orodatagrid/js/datagrid/action/delete-action.js'
        'oro/datagrid/action/ajax-action': 'bundles/orodatagrid/js/datagrid/action/ajax-action.js'
        'oro/datagrid/action/frontend-action': 'bundles/orodatagrid/js/datagrid/action/frontend-action.js'
        'oro/datagrid/action/frontend-mass-action': 'bundles/orodatagrid/js/datagrid/action/frontend-mass-action.js'
        'oro/datagrid/action/ajaxdelete-action': 'bundles/orodatagrid/js/datagrid/action/ajaxdelete-action.js'
        'oro/datagrid/action/mass-action': 'bundles/orodatagrid/js/datagrid/action/mass-action.js'
        'oro/datagrid/action/delete-mass-action': 'bundles/orodatagrid/js/datagrid/action/delete-mass-action.js'
        'oro/datagrid/action/dialog-action': 'bundles/orodatagrid/js/datagrid/action/dialog-action.js'
        'oro/datagrid/action/model-action': 'bundles/orodatagrid/js/datagrid/action/model-action.js'
        'oro/datagrid/action/navigate-action': 'bundles/orodatagrid/js/datagrid/action/navigate-action.js'
        'oro/datagrid/action/refresh-collection-action': 'bundles/orodatagrid/js/datagrid/action/refresh-collection-action.js'
        'oro/datagrid/action/reset-collection-action': 'bundles/orodatagrid/js/datagrid/action/reset-collection-action.js'
        'oro/datagrid/action/export-action': 'bundles/orodatagrid/js/datagrid/action/export-action.js'
        'oro/datagrid/action/row/importexport-action': 'bundles/orodatagrid/js/datagrid/action/row/importexport-action.js'
        'oro/datagrid/action/show-component-action': 'bundles/orodatagrid/js/datagrid/action/show-component-action.js'
        'oro/datagrid/action/select-data-appearance-action': 'bundles/orodatagrid/js/datagrid/action/select-data-appearance-action.js'
        'oro/datagrid/action/trigger-event-action': 'bundles/orodatagrid/js/datagrid/action/trigger-event-action.js'
        'orodatagrid/js/datagrid/actions-panel': 'bundles/orodatagrid/js/datagrid/actions-panel.js'
        'orodatagrid/js/datagrid/column/action-column': 'bundles/orodatagrid/js/datagrid/column/action-column.js'
        'orodatagrid/js/datagrid/body': 'bundles/orodatagrid/js/datagrid/body.js'
        'oro/datagrid/cell/action-cell': 'bundles/orodatagrid/js/datagrid/cell/action-cell.js'
        'oro/datagrid/cell/boolean-cell': 'bundles/orodatagrid/js/datagrid/cell/boolean-cell.js'
        'oro/datagrid/cell/html-cell': 'bundles/orodatagrid/js/datagrid/cell/html-cell.js'
        'oro/datagrid/cell/date-cell': 'bundles/orodatagrid/js/datagrid/cell/date-cell.js'
        'oro/datagrid/cell/datetime-cell': 'bundles/orodatagrid/js/datagrid/cell/datetime-cell.js'
        'oro/datagrid/cell/time-cell': 'bundles/orodatagrid/js/datagrid/cell/time-cell.js'
        'oro/datagrid/cell/number-cell': 'bundles/orodatagrid/js/datagrid/cell/number-cell.js'
        'oro/datagrid/cell/select-cell': 'bundles/orodatagrid/js/datagrid/cell/select-cell.js'
        'oro/datagrid/cell/select-row-cell': 'bundles/orodatagrid/js/datagrid/cell/select-row-cell.js'
        'oro/datagrid/cell/string-cell': 'bundles/orodatagrid/js/datagrid/cell/string-cell.js'
        'oro/datagrid/cell/phone-cell': 'bundles/orodatagrid/js/datagrid/cell/phone-cell.js'
        'oro/datagrid/cell/relation-cell': 'bundles/orodatagrid/js/datagrid/cell/relation-cell.js'
        'oro/datagrid/cell/multi-select-cell': 'bundles/orodatagrid/js/datagrid/cell/multi-select-cell.js'
        'oro/datagrid/cell/multi-relation-cell': 'bundles/orodatagrid/js/datagrid/cell/multi-relation-cell.js'
        'orodatagrid/js/datagrid/formatter/cell-formatter': 'bundles/orodatagrid/js/datagrid/formatter/cell-formatter.js'
        'orodatagrid/js/datagrid/formatter/datetime-formatter': 'bundles/orodatagrid/js/datagrid/formatter/datetime-formatter.js'
        'orodatagrid/js/datagrid/formatter/number-formatter': 'bundles/orodatagrid/js/datagrid/formatter/number-formatter.js'
        'orodatagrid/js/datagrid/formatter/currency-formatter': 'bundles/orodatagrid/js/datagrid/formatter/currency-formatter.js'
        'orodatagrid/js/datagrid/editor/select-cell-radio-editor': 'bundles/orodatagrid/js/datagrid/editor/select-cell-radio-editor.js'
        'orodatagrid/js/datagrid/grid': 'bundles/orodatagrid/js/datagrid/grid.js'
        'orodatagrid/js/datagrid/header-cell/header-cell': 'bundles/orodatagrid/js/datagrid/header-cell/header-cell.js'
        'orodatagrid/js/datagrid/header-cell/select-all-header-cell': 'bundles/orodatagrid/js/datagrid/header-cell/select-all-header-cell.js'
        'orodatagrid/js/datagrid/header': 'bundles/orodatagrid/js/datagrid/header.js'

        'orodatagrid/js/grid-views-builder': 'bundles/orodatagrid/js/grid-views-builder.js'
        'orodatagrid/js/totals-builder': 'bundles/orodatagrid/js/totals-builder.js'
        'orodatagrid/js/datagrid/footer': 'bundles/orodatagrid/js/datagrid/footer.js'
        'orodatagrid/js/datagrid/footer/footer-row': 'bundles/orodatagrid/js/datagrid/footer/footer-row.js'
        'orodatagrid/js/datagrid/footer/footer-cell': 'bundles/orodatagrid/js/datagrid/footer/footer-cell.js'
        'orodatagrid/js/datagrid-theme-options-manager': 'bundles/orodatagrid/js/datagrid-theme-options-manager.js'

        'orodatagrid/js/datagrid/listener/abstract-listener': 'bundles/orodatagrid/js/datagrid/listener/abstract-listener.js'
        'orodatagrid/js/datagrid/listener/abstract-grid-change-listener': 'bundles/orodatagrid/js/datagrid/listener/abstract-grid-change-listener.js'
        'orodatagrid/js/datagrid/listener/column-form-listener': 'bundles/orodatagrid/js/datagrid/listener/column-form-listener.js'
        'orodatagrid/js/datagrid/listener/action-form-listener': 'bundles/orodatagrid/js/datagrid/listener/action-form-listener.js'
        'orodatagrid/js/datagrid/listener/callback-listener': 'bundles/orodatagrid/js/datagrid/listener/callback-listener.js'
        'orodatagrid/js/datagrid/listener/change-editable-cell-listener': 'bundles/orodatagrid/js/datagrid/listener/change-editable-cell-listener.js'
        'orodatagrid/js/datagrid/sorting/dropdown': 'bundles/orodatagrid/js/datagrid/sorting/dropdown.js'
        'orodatagrid/js/datagrid/page-size': 'bundles/orodatagrid/js/datagrid/page-size.js'
        'orodatagrid/js/datagrid/grid-views/view': 'bundles/orodatagrid/js/datagrid/grid-views/view.js'
        'orodatagrid/js/datagrid/grid-views/model': 'bundles/orodatagrid/js/datagrid/grid-views/model.js'
        'orodatagrid/js/datagrid/grid-views/collection': 'bundles/orodatagrid/js/datagrid/grid-views/collection.js'
        'orodatagrid/js/datagrid/metadata-model': 'bundles/orodatagrid/js/datagrid/metadata-model.js'
        'orodatagrid/js/datagrid/pagination-input': 'bundles/orodatagrid/js/datagrid/pagination-input.js'
        'orodatagrid/js/datagrid/pagination': 'bundles/orodatagrid/js/datagrid/pagination.js'
        'orodatagrid/js/datagrid/row': 'bundles/orodatagrid/js/datagrid/row.js'
        'orodatagrid/js/datagrid/toolbar': 'bundles/orodatagrid/js/datagrid/toolbar.js'
        'orodatagrid/js/pageable-collection': 'bundles/orodatagrid/js/pageable-collection.js'

        'orodatagrid/js/app/components/datagrid-component': 'bundles/orodatagrid/js/app/components/datagrid-component.js'
        'orodatagrid/js/app/components/datagrid-allow-tracking-component': 'bundles/orodatagrid/js/app/components/datagrid-allow-tracking-component.js'
        'orodatagrid/js/app/components/column-renderer-component': 'bundles/orodatagrid/js/app/components/column-renderer-component.js'
        'orodatagrid/js/app/components/grid-sidebar-component': 'bundles/orodatagrid/js/app/components/grid-sidebar-component.js'
        'orodatagrid/js/inline-editing/builder': 'bundles/orodatagrid/js/inline-editing/builder.js'
        'orodatagrid/js/app/plugins/grid/inline-editing-plugin': 'bundles/orodatagrid/js/app/plugins/grid/inline-editing-plugin.js'
        'orodatagrid/js/inline-editing/default-editors': 'bundles/orodatagrid/js/inline-editing/default-editors.js'

        'orodatagrid/js/appearance/builder': 'bundles/orodatagrid/js/appearance/builder.js'
        'orodatagrid/js/app/plugins/grid-component/board-appearance-plugin': 'bundles/orodatagrid/js/app/plugins/grid-component/board-appearance-plugin.js'
        'orodatagrid/js/app/views/board/board-view': 'bundles/orodatagrid/js/app/views/board/board-view.js'
        'orodatagrid/js/app/views/board/column-header-view': 'bundles/orodatagrid/js/app/views/board/column-header-view.js'
        'orodatagrid/js/app/views/board/column-view': 'bundles/orodatagrid/js/app/views/board/column-view.js'
        'orodatagrid/js/app/transitions/update-main-property-transition': 'bundles/orodatagrid/js/app/transitions/update-main-property-transition.js'
        'orodatagrid/js/app/views/board/card-view': 'bundles/orodatagrid/js/app/views/board/card-view.js'
        'orodatagrid/js/app/transitions/abstract-transition': 'bundles/orodatagrid/js/app/transitions/abstract-transition.js'
        'orodatagrid/js/app/components/multi-grid-component': 'bundles/orodatagrid/js/app/components/multi-grid-component.js'
        'orodatagrid/js/app/views/multi-grid-view': 'bundles/orodatagrid/js/app/views/multi-grid-view.js'
";
    }

    public function getTemplateName()
    {
        return "@OroDataGrid/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroDataGrid/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}
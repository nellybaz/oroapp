<?php

/* @OroFrontend/layouts/blank/config/requirejs.yml */
class __TwigTemplate_169cb6637577f9a5de507f3bbb4fd30a02fd5c6780045fa9ad8beb24f61aaa3f extends Twig_Template
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
    shim:
        'slick':
            deps:
                - 'jquery'
    map:
        '*':
            'oroui/templates/modal-dialog.html': 'orofrontend/default/templates/ui/modal-dialog.html'
            'oroui/templates/standart-confirmation.html': 'orofrontend/default/templates/ui/modal-dialog.html'
            'oroui/templates/delete-confirmation.html': 'orofrontend/default/templates/ui/modal-dialog.html'
            'oroui/templates/message-item.html': 'orofrontend/default/templates/ui/message-item.html'
            'oroui/templates/loading-mask-view.html': 'orofrontend/templates/ui/loading-mask-view.html'
            'orodatagrid/templates/column-manager/column-manager-collection.html': 'orofrontend/default/templates/datagrid/column-manager-collection.html'
            'orodatagrid/templates/column-manager/column-manager-item.html': 'orofrontend/default/templates/datagrid/column-manager-item.html'
            'orodatagrid/templates/column-manager/column-manager-filter.html': 'orofrontend/default/templates/datagrid/column-manager-filter.html'
            'orodatagrid/templates/column-manager/column-manager.html': 'orofrontend/default/templates/datagrid/column-manager.html'
            'orodatagrid/templates/datagrid/pagination-input.html': 'orofrontend/default/templates/datagrid/pagination-input.html'
            'orodatagrid/templates/datagrid/page-size.html': 'orofrontend/default/templates/datagrid/page-size.html'
            'orodatagrid/templates/datagrid/visible-items-counter.html': 'orofrontend/blank/templates/datagrid/visible-items-counter.html'
            'orodatagrid/templates/datagrid/select-all-header-cell.html': 'orofrontend/default/templates/datagrid/select-all-header-cell.html'
            'orodatagrid/templates/datagrid/select-row-cell.html': 'orofrontend/default/templates/datagrid/select-row-cell.html'
            'orodatagrid/templates/datagrid/action-header-cell.html': 'orofrontend/default/templates/datagrid/action-header-cell.html'
            'orodatagrid/templates/datagrid/grid-view-label.html': 'orofrontend/default/templates/datagrid/grid-view-label.html'

            'orofilter/js/plugins/filters-toggle-plugin': 'orofrontend/js/app/datafilter/plugins/frontend-filters-plugin'
            'oroui/js/app/views/page/content-view': 'orofrontend/js/app/views/page/content-view'
            'oro/filter/choice-filter': 'orofrontend/default/js/app/views/choice-filter'
            'oro/filter/select-filter': 'orofrontend/js/app/views/frontend-select-filter'
        'orofrontend/js/app/views/frontend-select-filter':
            'oro/filter/select-filter': 'oro/filter/select-filter'
        'orofrontend/js/app/datafilter/plugins/frontend-filters-plugin':
            'orofilter/js/plugins/filters-toggle-plugin': 'orofilter/js/plugins/filters-toggle-plugin'
        'orofrontend/js/app/views/page/content-view':
            'oroui/js/app/views/page/content-view': 'oroui/js/app/views/page/content-view'
        'orofrontend/default/js/app/views/choice-filter':
            'oro/filter/choice-filter': 'oro/filter/choice-filter'
    paths:
        'orofrontend/js/app/components/widget-form-component': 'bundles/orofrontend/js/app/components/widget-form-component.js'
        'orofrontend/js/app/components/switchable-editable-view-component': 'bundles/orofrontend/js/app/components/switchable-editable-view-component.js'
        'orofrontend/js/app/components/attached-editable-view-component': 'bundles/orofrontend/js/app/components/attached-editable-view-component.js'

        'orofrontend/js/app/views/viewer/title-view': 'bundles/orofrontend/js/app/views/viewer/title-view.js'
        'orofrontend/js/app/views/viewer/text-view': 'bundles/orofrontend/js/app/views/viewer/text-view.js'

        'orofrontend/js/app/views/editor/title-editor-view': 'bundles/orofrontend/js/app/views/editor/title-editor-view.js'
        'orofrontend/js/app/views/editor/multiline-text-editor-view': 'bundles/orofrontend/js/app/views/editor/multiline-text-editor-view.js'
        'orofrontend/js/app/views/scrollable-table': 'bundles/orofrontend/js/app/views/scrollable-table.js'

        'orofrontend/js/app/views/inline-editable-wrapper-view': 'bundles/orofrontend/js/app/views/inline-editable-wrapper-view.js'
        'orofrontend/js/app/modules/inline-editor-types-map-module': 'bundles/orofrontend/js/app//modules/inline-editor-types-map-module.js'
        'orofrontend/js/app/components/delete-item-component': 'bundles/orofrontend/js/app/components/delete-item-component.js'
        'orofrontend/js/app/components/empty-items-component': 'bundles/orofrontend/js/app/components/empty-items-component.js'
        'orofrontend/default/js/widgets/expand-text-widget': 'bundles/orofrontend/default/js/widgets/expand-text-widget.js'
        'orofrontend/default/js/widgets/line-clamp-widget': 'bundles/orofrontend/default/js/widgets/line-clamp-widget.js'
        'orofrontend/default/js/widgets/rows-collapse-widget': 'bundles/orofrontend/default/js/widgets/rows-collapse-widget.js'
        'orofrontend/default/js/widgets/elastic-area-widget': 'bundles/orofrontend/default/js/widgets/elastic-area-widget.js'
        'orofrontend/default/js/app/views/footer-align-view': 'orofrontend/default/js/app/views/footer-align-view.js'
        'orofrontend/default/js/app/views/sticky-panel-view': 'orofrontend/default/js/app/views/sticky-panel-view.js'
        'orofrontend/default/js/app/views/scroll-top-view': 'bundles/orofrontend/default/js/app/views/scroll-top-view.js'
        'orofrontend/blank/js/app/views/fullscreen-popup-view': 'orofrontend/blank/js/app/views/fullscreen-popup-view.js'
        'orofrontend/blank/js/widgets/print-page-widget': 'bundles/orofrontend/blank/js/widgets/print-page-widget.js'
        'orofrontend/js/app/views/dom-relocation-view': 'orofrontend/js/app/views/dom-relocation-view.js'
        'orofrontend/js/app/views/style-book-elements-navigation-view': 'orofrontend/js/app/views/style-book-elements-navigation-view.js'
        'orofrontend/default/js/app/modules/input-widgets': 'bundles/orofrontend/default/js/app/modules/input-widgets.js'
        'orofrontend/default/js/app/modules/zoom-disable': 'bundles/orofrontend/default/js/app/modules/zoom-disable.js'
        'orofrontend/default/js/app/views/choice-filter': 'bundles/orofrontend/default/js/app/views/choice-filter.js'
        'orofrontend/js/app/views/frontend-select-filter': 'bundles/orofrontend/blank/js/app/views/frontend-select-filter.js'
        'orofrontend/js/app/elements-helper': 'bundles/orofrontend/js/app/elements-helper.js'
        'orofrontend/js/app/datafilter/frontend-collection-filters-manager': 'bundles/orofrontend/js/app/datafilter/frontend-collection-filters-manager.js'
        'orofrontend/js/app/datafilter/frontend-multiselect-decorator': 'bundles/orofrontend/js/app/datafilter/frontend-multiselect-decorator.js'
        'orofrontend/js/app/datafilter/fronend-manage-filters-decorator': 'bundles/orofrontend/js/app/datafilter/fronend-manage-filters-decorator.js'
        'orofrontend/js/app/datafilter/plugins/frontend-filters-plugin': 'orofrontend/js/app/datafilter/plugins/frontend-filters-plugin.js'
        'orofrontend/js/app/datafilter/actions/fullscreen-filters-action': 'orofrontend/js/app/datafilter/actions/fullscreen-filters-action.js'

        'slick': 'bundles/orofrontend/default/vendors/slick/slick.js'
        'orofrontend/js/app/components/list-slider-component': 'bundles/orofrontend/js/app/components/list-slider-component.js'
        'orofrontend/js/app/components/popup-gallery-widget': 'bundles/orofrontend/js/app/components/popup-gallery-widget.js'
        'orofrontend/js/app/components/column-manager/frontend-column-manager-component': 'bundles/orofrontend/js/app/components/column-manager/frontend-column-manager-component.js'
        'orofrontend/js/app/views/column-manager/frontend-column-manager-view': 'bundles/orofrontend/js/app/views/column-manager/frontend-column-manager-view.js'
        'orofrontend/js/datagrid/grid-views/frontend-grid-views-view': 'bundles/orofrontend/js/datagrid/grid-views/frontend-grid-views-view.js'
        'orofrontend/js/app/views/object-fit-polyfill-view': 'orofrontend/js/app/views/object-fit-polyfill-view.js'
        'orofrontend/js/app/views/counter-badge-view': 'bundles/orofrontend/js/app/views/counter-badge-view.js'

        'orofrontend/js/app/modules/component-shortcuts-module': 'bundles/orofrontend/js/app/modules/component-shortcuts-module.js'
        'orofrontend/js/app/views/page/content-view': 'bundles/orofrontend/js/app/views/page/content-view.js'
        'orofrontend/js/app/components/frontend-dialog-widget': 'bundles/orofrontend/js/app/components/frontend-dialog-widget.js'

        'orofrontend/js/app/views/scroll-view': 'bundles/orofrontend/js/app/views/scroll-view.js'
        'orofrontend/js/app/views/fit-matrix-view': 'bundles/orofrontend/js/app/views/fit-matrix-view.js'
        'orofrontend/js/app/views/lazy-init-view': 'bundles/orofrontend/js/app/views/lazy-init-view.js'

        'orofrontend/default/js/app/views/input-widget/number': 'bundles/orofrontend/default/js/app/views/input-widget/number.js'
    appmodules:
        - orofrontend/js/app/modules/inline-editor-types-map-module
        - orofrontend/js/app/modules/component-shortcuts-module
        - orofrontend/default/js/app/modules/input-widgets
        - orofrontend/default/js/app/modules/zoom-disable
";
    }

    public function getTemplateName()
    {
        return "@OroFrontend/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroFrontend/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/customer-portal/src/Oro/Bundle/FrontendBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

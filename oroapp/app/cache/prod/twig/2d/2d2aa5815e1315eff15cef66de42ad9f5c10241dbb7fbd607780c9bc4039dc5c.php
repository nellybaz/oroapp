<?php

/* @OroProduct/layouts/blank/config/requirejs.yml */
class __TwigTemplate_fb61f01f7c3ec3d36c58481e022c4c9129c3612018d037fea9d0ee2f36cca6ad extends Twig_Template
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
        'oroproduct/js/app/components/product-unit-component': 'bundles/oroproduct/js/app/components/product-unit-component.js'
        'oroproduct/js/app/components/product-unit-select-component': 'bundles/oroproduct/js/app/components/product-unit-select-component.js'
        'oroproduct/js/app/components/quick-add-component': 'bundles/oroproduct/js/app/components/quick-add-component.js'
        'oroproduct/js/app/components/product-autocomplete-component': 'bundles/oroproduct/js/app/components/product-autocomplete-component.js'
        'oroproduct/js/app/components/quick-add-form-button-component': 'bundles/oroproduct/js/app/components/quick-add-form-button-component.js'
        'oroproduct/js/app/components/fullscreen-attribute-group-tab-content-component': 'bundles/oroproduct/js/app/components/fullscreen-attribute-group-tab-content-component.js'
        'oro/quick-add-import-widget': 'bundles/oroproduct/js/app/widget/quick-add-import-widget.js'
        'oroproduct/js/app/components/quick-add-copy-paste-form-component': 'bundles/oroproduct/js/app/components/quick-add-copy-paste-form-component.js'
        'oroproduct/js/app/components/quick-add-import-form-component': 'bundles/oroproduct/js/app/components/quick-add-import-form-component.js'
        'oroproduct/js/app/components/quick-add-import-validation-component': 'bundles/oroproduct/js/app/components/quick-add-import-validation-component.js'
        'oroproduct/js/app/components/redirect-component': 'bundles/oroproduct/js/app/components/redirect-component.js'
        'oroproduct/js/app/views/product-quantity-editable-view': 'bundles/oroproduct/js/app/views/product-quantity-editable-view.js'
        'oroproduct/js/app/components/catalog-switch-component': 'bundles/oroproduct/js/app/components/catalog-switch-component.js'
        'oroproduct/js/app/datagrid/frontend-product-display-options-builder': 'bundles/oroproduct/js/app/datagrid/frontend-product-display-options-builder.js'
        'oroproduct/js/app/views/base-product-view': 'bundles/oroproduct/js/app/views/base-product-view.js'
        'oroproduct/js/app/views/base-product-variants-view': 'bundles/oroproduct/js/app/views/base-product-variants-view.js'
        'oroproduct/js/app/components/product-variant-field-component': 'bundles/oroproduct/js/app/components/product-variant-field-component.js'
        'oroproduct/js/app/views/line-item-product-view': 'bundles/oroproduct/js/app/views/line-item-product-view.js'
        'oroproduct/js/app/views/quick-add-view': 'bundles/oroproduct/js/app/views/quick-add-view.js'
        'oroproduct/js/app/views/quick-add-item-view': 'bundles/oroproduct/js/app/views/quick-add-item-view.js'
        'oroproduct/js/content-processor/product-add-to-dropdown-button': 'bundles/oroproduct/js/content-processor/product-add-to-dropdown-button.js'
        'oroproduct/js/app/components/breadcrumbs-navigation-block': 'bundles/oroproduct/js/app/components/breadcrumbs-navigation-block.js'
        'oroproduct/js/app/datagrid/frontend-product-filters-events-dispatcher-builder': 'bundles/oroproduct/js/app/datagrid/frontend-product-filters-events-dispatcher-builder.js'
        'oroproduct/js/app/datagrid/backend-datagrid-component': 'bundles/oroproduct/js/app/datagrid/backend-datagrid-component.js'
        'oroproduct/js/app/datagrid/backend-grid': 'bundles/oroproduct/js/app/datagrid/backend-grid.js'
        'oroproduct/js/app/datagrid/backend-actions-panel': 'bundles/oroproduct/js/app/datagrid/backend-actions-panel.js'
        'oroproduct/js/app/datagrid/backend-toolbar': 'bundles/oroproduct/js/app/datagrid/backend-toolbar.js'
        'oroproduct/js/app/datagrid/backend-page-size': 'bundles/oroproduct/js/app/datagrid/backend-page-size.js'
        'oroproduct/js/app/datagrid/products-select-state-model': 'bundles/oroproduct/js/app/datagrid/products-select-state-model.js'
        'oroproduct/js/app/datagrid/map-custom-module-name': 'bundles/oroproduct/js/app/datagrid/map-custom-module-name'
        'oroproduct/js/app/datagrid/backend-pageable-collection': 'bundles/oroproduct/js/app/datagrid/backend-pageable-collection.js'
        'oroproduct/js/app/datagrid/sorting/backend-dropdown': 'bundles/oroproduct/js/app/datagrid/sorting/backend-dropdown.js'
        'oroproduct/js/app/datagrid/sorting/fullscreen-sorting': 'bundles/oroproduct/js/app/datagrid/sorting/fullscreen-sorting.js'
        'oroproduct/js/app/datagrid/cell/backend-select-row-cell': 'bundles/oroproduct/js/app/datagrid/cell/backend-select-row-cell.js'
        'oroproduct/js/app/datagrid/header-cell/backend-select-all-header-cell': 'bundles/oroproduct/js/app/datagrid/header-cell/backend-select-all-header-cell.js'
        'oroproduct/js/app/datagrid/header-cell/backend-action-header-cell': 'bundles/oroproduct/js/app/datagrid/header-cell/backend-action-header-cell.js'
        'oroproduct/js/app/datagrid/datagrid-product-lazy-init-view': 'bundles/oroproduct/js/app/datagrid/datagrid-product-lazy-init-view.js'
        'oroproduct/js/widget/zoom-widget': 'bundles/oroproduct/js/widget/zoom-widget.js'
        'jquery-elevatezoom': 'bundles/bowerassets/elevatezoom3/jquery.elevatezoom.js'
";
    }

    public function getTemplateName()
    {
        return "@OroProduct/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroProduct/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ProductBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

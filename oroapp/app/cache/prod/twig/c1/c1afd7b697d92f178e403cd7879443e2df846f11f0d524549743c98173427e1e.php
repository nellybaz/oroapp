<?php

/* @OroShoppingList/layouts/blank/config/requirejs.yml */
class __TwigTemplate_6774fcfa75b4fedec2c16d5d8616aa498bf789fe05dfd14b124232c0a43dbaec extends Twig_Template
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
        'oro/datagrid/action/add-products-mass-action': 'bundles/oroshoppinglist/js/datagrid/action/add-products-mass-action.js'
        'oroshoppinglist/js/app/components/shopping-list-create-component': 'bundles/oroshoppinglist/js/app/components/shopping-list-create-component.js'
        'oroshoppinglist/js/app/views/line-item-view': 'bundles/oroshoppinglist/js/app/views/line-item-view.js'
        'oroshoppinglist/js/app/views/line-items-view': 'bundles/oroshoppinglist/js/app/views/line-items-view.js'
        'oroshoppinglist/js/app/views/line-item-form-submit-view': 'bundles/oroshoppinglist/js/app/views/line-item-form-submit-view.js'
        'oroshoppinglist/js/app/views/product-add-to-shopping-list-view': 'bundles/oroshoppinglist/js/app/views/product-add-to-shopping-list-view.js'
        'oroshoppinglist/js/app/views/matrix-grid-add-to-shopping-list-view': 'bundles/oroshoppinglist/js/app/views/matrix-grid-add-to-shopping-list-view.js'
        'oroshoppinglist/js/app/views/product-quick-add-to-shopping-list-view': 'bundles/oroshoppinglist/js/app/views/product-quick-add-to-shopping-list-view.js'
        'oroshoppinglist/js/app/views/product-shopping-lists-view': 'bundles/oroshoppinglist/js/app/views/product-shopping-lists-view.js'
        'oroshoppinglist/js/app/views/shoppinglist-widget-view': 'bundles/oroshoppinglist/js/app/views/shoppinglist-widget-view.js'
        'oroshoppinglist/js/app/views/matrix-grid-popup-button-view': 'bundles/oroshoppinglist/js/app/views/matrix-grid-popup-button-view.js'
        'oro/product-shopping-lists-widget': 'bundles/oroshoppinglist/js/app/widget/product-shopping-lists-widget.js'
        'oro/shopping-list-create-widget': 'bundles/oroshoppinglist/js/app/widget/shopping-list-create-widget.js'
        'oro/matrix-grid-order-widget': 'bundles/oroshoppinglist/js/app/widget/matrix-grid-order-widget.js'
        'oroshoppinglist/js/shopping-list-item-errors-handler': 'bundles/oroshoppinglist/js/shopping-list-item-errors-handler.js'
        'oroshoppinglist/js/app/components/shoppinglist-widget-view-component': 'bundles/oroshoppinglist/js/app/components/shoppinglist-widget-view-component.js'
        'oroshoppinglist/js/app/components/shoppinglist-title-inline-editable-view-component': 'bundles/oroshoppinglist/js/app/components/shoppinglist-title-inline-editable-view-component.js'
        'oroshoppinglist/js/app/components/shoppinglist-collection-component': 'bundles/oroshoppinglist/js/app/components/shoppinglist-collection-component.js'
        'oroshoppinglist/js/shoppinglist-collection-service': 'bundles/oroshoppinglist/js/shoppinglist-collection-service.js'
        'oroshoppinglist/js/app/components/shoppinglist-owner-inline-editable-view-component': 'bundles/oroshoppinglist/js/app/components/shoppinglist-owner-inline-editable-view-component.js'
        'oroshoppinglist/js/app/components/shoppinglist-create-order-button-component': 'bundles/oroshoppinglist/js/app/components/shoppinglist-create-order-button-component.js'
        'oroshoppinglist/js/app/modules/shoppinglist-module': 'bundles/oroshoppinglist/js/app/modules/shoppinglist-module.js'
        'oroshoppinglist/js/shoppinglist-request-quote-confirmation': 'bundles/oroshoppinglist/js/shoppinglist-request-quote-confirmation.js'
    appmodules:
        - oroshoppinglist/js/app/modules/shoppinglist-module
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/config/requirejs.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/config/requirejs.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/config/requirejs.yml");
    }
}

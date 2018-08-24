<?php

/* @OroShoppingList/layouts/blank/config/assets.yml */
class __TwigTemplate_84ccd4816a3420633fe2b1ad214f493bd1420c9395bdd010a4d5a7deab9e4025 extends Twig_Template
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
        echo "styles:
    inputs:
        - 'bundles/oroshoppinglist/blank/scss/variables/matrix-order-widget-config.scss'
        - 'bundles/oroshoppinglist/blank/scss/variables/shopping-lists-config.scss'
        - 'bundles/oroshoppinglist/blank/scss/variables/shopping-lists-popup-config.scss'
        - 'bundles/oroshoppinglist/blank/scss/variables/shopping-list-dropdown-config.scss'
        - 'bundles/oroshoppinglist/blank/scss/variables/shopping-list-line-items-config.scss'

        - 'bundles/oroshoppinglist/blank/scss/components/cart.scss'
        - 'bundles/oroshoppinglist/blank/scss/components/cart-list-empty.scss'
        - 'bundles/oroshoppinglist/blank/scss/components/cart-order-title.scss'
        - 'bundles/oroshoppinglist/blank/scss/components/products-widget.scss'
        - 'bundles/oroshoppinglist/blank/scss/components/shopping-list-dropdown.scss'
        - 'bundles/oroshoppinglist/blank/scss/components/shopping-lists-link.scss'
        - 'bundles/oroshoppinglist/blank/scss/components/shopping-lists-modify.scss'
        - 'bundles/oroshoppinglist/blank/scss/components/shopping-lists-outer.scss'
        - 'bundles/oroshoppinglist/blank/scss/components/shopping-lists-units.scss'
        - 'bundles/oroshoppinglist/blank/scss/components/shopping-list-view.scss'
        - 'bundles/oroshoppinglist/blank/scss/components/shopping-list-view-options.scss'
        - 'bundles/oroshoppinglist/blank/scss/components/shopping-list-widget.scss'

        - 'bundles/oroshoppinglist/blank/scss/styles.scss'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/config/assets.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/config/assets.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/config/assets.yml");
    }
}

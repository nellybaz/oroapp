<?php

/* @OroShoppingList/layouts/blank/imports/oro_product_list_item/product_shopping_lists.yml */
class __TwigTemplate_5ad119f70b55c6d71d75b6d11fe2b53f27b2936efd418450bc1f9e2db82e4a5b extends Twig_Template
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
            id: product_shopping_lists
            root: __product_line_item_form
            namespace: product
    actions:
        - '@setBlockTheme':
            themes: 'product_shopping_lists.html.twig'
        - '@move':
            id: __product_shopping_lists
            parentId: __product_line_item_form
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/imports/oro_product_list_item/product_shopping_lists.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/imports/oro_product_list_item/product_shopping_lists.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/oro_product_list_item/product_shopping_lists.yml");
    }
}

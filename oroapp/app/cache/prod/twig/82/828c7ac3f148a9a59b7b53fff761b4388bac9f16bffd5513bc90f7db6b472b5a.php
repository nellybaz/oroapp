<?php

/* @OroShoppingList/layouts/default/imports/product_shopping_lists/product_shopping_lists.yml */
class __TwigTemplate_a252891f9af4626e2a7bea7905af0eb22f622f621d570c3fbbe52ca6515b3bb0 extends Twig_Template
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
            themes: 'product_shopping_lists.html.twig'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/default/imports/product_shopping_lists/product_shopping_lists.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/default/imports/product_shopping_lists/product_shopping_lists.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/imports/product_shopping_lists/product_shopping_lists.yml");
    }
}

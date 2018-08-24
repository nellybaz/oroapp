<?php

/* @OroShoppingList/layouts/blank/oro_product_frontend_product_view/add_to_shopping_list_form.yml */
class __TwigTemplate_a85b6c6d1a7ee2915930f16d8ebc9db016d48087a2109e5ffb69195945e6cd7c extends Twig_Template
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
            root: line_item_form_shopping_lists
            namespace: product
    actions:
        - '@setBlockTheme':
            themes: 'add_to_shopping_list_form.html.twig'
        - '@add':
            id: line_item_form_shopping_lists
            parentId: product_view_line_item_container
            blockType: container
            siblingId: ~
            prepend: true
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/oro_product_frontend_product_view/add_to_shopping_list_form.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/oro_product_frontend_product_view/add_to_shopping_list_form.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/oro_product_frontend_product_view/add_to_shopping_list_form.yml");
    }
}

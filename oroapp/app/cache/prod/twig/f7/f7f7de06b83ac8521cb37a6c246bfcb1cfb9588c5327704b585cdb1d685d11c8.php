<?php

/* @OroCustomTheme/layouts/custom/oro_shopping_list_frontend_view/shopping_lists_menu.yml */
class __TwigTemplate_171ffc0017f8ad1ed561b39c9467c31e471a7485381d43e02e3bef9d4902311d extends Twig_Template
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
            themes: 'shopping_lists_menu.html.twig'
        - '@add':
            id: shopping_list_view_tabs
            blockType: container
            parentId: shopping_list_view_container
            prepend: true
        - '@move':
            id: shopping_lists_menu
            parentId: shopping_list_view_tabs
        - '@add':
            id: shopping_list_view_more
            parentId: shopping_list_view_tabs
            blockType: shopping_lists_menu
            options:
                shoppingLists: '=data[\"oro_shopping_list_customer_user_shopping_lists\"].getShoppingLists()'
                selectedShoppingList: '=data[\"entity\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroCustomTheme/layouts/custom/oro_shopping_list_frontend_view/shopping_lists_menu.yml";
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
        return new Twig_Source("", "@OroCustomTheme/layouts/custom/oro_shopping_list_frontend_view/shopping_lists_menu.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CustomThemeBundle/Resources/views/layouts/custom/oro_shopping_list_frontend_view/shopping_lists_menu.yml");
    }
}

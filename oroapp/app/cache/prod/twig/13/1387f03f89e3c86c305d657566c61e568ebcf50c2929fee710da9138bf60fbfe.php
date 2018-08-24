<?php

/* @OroShoppingList/layouts/default/oro_shopping_list_frontend_view/shopping_list_owner.yml */
class __TwigTemplate_4556c59053bfff999002e45d33ab4b9a3974a089f6534eaadd776f1e51626c5d extends Twig_Template
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
            themes: 'shopping_list_owner.html.twig'
        - '@add':
            id: shopping_list_owner
            parentId: shopping_list_line_items
            blockType: shopping_list_owner_select_block
            options:
                visible: '=data[\"entity\"]!=null'
                form: '=data[\"oro_customer_frontend_customer_user_form\"].getCustomerUserSelectFormView(data[\"entity\"].getCustomerUser(), data[\"entity\"])'
                shoppingList: '=data[\"entity\"]'

    conditions: 'context[\"is_logged_in\"]'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/default/oro_shopping_list_frontend_view/shopping_list_owner.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/default/oro_shopping_list_frontend_view/shopping_list_owner.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/oro_shopping_list_frontend_view/shopping_list_owner.yml");
    }
}

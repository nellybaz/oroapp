<?php

/* @OroShoppingList/layouts/blank/imports/oro_shopping_list_create/shopping_list_create.yml */
class __TwigTemplate_dbc68cbe4bab69f1c51a754cf26f575e37c3266d57006433c843e5deb8af8fb5 extends Twig_Template
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
            themes: 'shopping_list_create.html.twig'
        - '@setOption':
            id: widget_content
            optionName: savedId
            optionValue: '=data[\"savedId\"]'
        - '@setOption':
            id: widget_content
            optionName: shoppingListCreateEnabled
            optionValue: '=data[\"feature\"].isFeatureEnabled(\"shopping_list_create\", \"updated\")'
        - '@setOption':
            id: widget_content
            optionName: shoppingList
            optionValue: '=data[\"shoppingList\"]'
        - '@addTree':
            items:
                form_start:
                    blockType: form_start
                    options:
                        form: '=data[\"oro_shopping_list_shopping_list_form\"].getShoppingListFormView(data[\"shoppingList\"])'
                form_fields:
                    blockType: form_fields
                    options:
                        form: '=data[\"oro_shopping_list_shopping_list_form\"].getShoppingListFormView(data[\"shoppingList\"])'
                form_end:
                    blockType: form_end
                    options:
                        form: '=data[\"oro_shopping_list_shopping_list_form\"].getShoppingListFormView(data[\"shoppingList\"])'
                form_comment:
                    blockType: block
                    options:
                        visible: '=data[\"createOnly\"]!=true'
                form_actions:
                    blockType: container
                form_actions_reset:
                    blockType: button
                    options:
                        action: reset
                        text: oro.shoppinglist.create_new_form.cancel_label
                        style: ''
                form_actions_create:
                    blockType: button
                    options:
                        action: submit
                        text: oro.shoppinglist.create_new_form.create.label
                        style: auto
                        visible: '=data[\"createOnly\"]==true'
                form_actions_create_and_add:
                    blockType: button
                    options:
                        action: submit
                        text: oro.shoppinglist.create_new_form.create_and_add.label
                        style: auto
                        visible: '=data[\"createOnly\"]!=true'
            tree:
                widget_content:
                    form_start: ~
                    form_fields: ~
                    form_comment: ~
                    form_actions:
                        form_actions_reset: ~
                        form_actions_create: ~
                        form_actions_create_and_add: ~
                    form_end: ~
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/imports/oro_shopping_list_create/shopping_list_create.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/imports/oro_shopping_list_create/shopping_list_create.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/oro_shopping_list_create/shopping_list_create.yml");
    }
}

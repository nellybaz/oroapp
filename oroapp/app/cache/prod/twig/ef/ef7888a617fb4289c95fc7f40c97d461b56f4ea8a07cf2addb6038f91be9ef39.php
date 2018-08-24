<?php

/* @OroShoppingList/layouts/blank/imports/line_item_buttons/shopping_list_buttons.yml */
class __TwigTemplate_6471833d428ccb53bf7b09c014c1c4aaae7121789edab4865cdf077786a35cde extends Twig_Template
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
            id: shopping_list_buttons
            root: __line_item_buttons
    actions: []
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/imports/line_item_buttons/shopping_list_buttons.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/imports/line_item_buttons/shopping_list_buttons.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/line_item_buttons/shopping_list_buttons.yml");
    }
}

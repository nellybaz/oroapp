<?php

/* @OroShoppingList/layouts/default/oro_shopping_list_add_products_to_new_massaction/dialog/create.yml */
class __TwigTemplate_41c749e7e37bec9dea712f731cc9c6692a6a560859d49414a9ed6331c41e26e2 extends Twig_Template
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
        - '@setOption':
            id: form_start
            optionName: form_route_name
            optionValue: 'oro_shopping_list_add_products_to_new_massaction'
        - '@setOption':
            id: form_start
            optionName: form_route_parameters
            optionValue: '=data[\"routeParameters\"]'
        - '@setOption':
            id: widget_content
            optionName: messages
            optionValue: '=data[\"messages\"]'
    imports:
        - 'oro_shopping_list_create'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/default/oro_shopping_list_add_products_to_new_massaction/dialog/create.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/default/oro_shopping_list_add_products_to_new_massaction/dialog/create.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/oro_shopping_list_add_products_to_new_massaction/dialog/create.yml");
    }
}

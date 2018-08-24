<?php

/* @OroShoppingList/layouts/blank/oro_shopping_list_frontend_create/dialog/create.yml */
class __TwigTemplate_ab22f39cb4a8952ba75a7a0db424bc5744dbaff1ddd81a24c0cad4781df6d423 extends Twig_Template
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
    actions: []
    imports:
        - 'oro_shopping_list_create'
";
    }

    public function getTemplateName()
    {
        return "@OroShoppingList/layouts/blank/oro_shopping_list_frontend_create/dialog/create.yml";
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
        return new Twig_Source("", "@OroShoppingList/layouts/blank/oro_shopping_list_frontend_create/dialog/create.yml", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/oro_shopping_list_frontend_create/dialog/create.yml");
    }
}

<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/page/shopping_list_collection.html.twig */
class __TwigTemplate_3d70e30e925362d3f88be5a7b36ed5feeeccc6b63587d874dd5dbf3a105334cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_shoppinglist_collection_widget' => array($this, 'block__shoppinglist_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_shoppinglist_collection_widget', $context, $blocks);
    }

    public function block__shoppinglist_collection_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div data-page-component-module=\"oroshoppinglist/js/app/components/shoppinglist-collection-component\"
         data-page-component-options=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("shoppingLists" =>         // line 4
($context["shoppingLists"] ?? null))), "html", null, true);
        // line 5
        echo "\">
    </div>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/page/shopping_list_collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  30 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/page/shopping_list_collection.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/page/shopping_list_collection.html.twig");
    }
}

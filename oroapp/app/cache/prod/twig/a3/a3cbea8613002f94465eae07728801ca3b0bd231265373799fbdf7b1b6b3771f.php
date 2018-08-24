<?php

/* OroShoppingListBundle:layouts/blank/page:shopping_list_collection.html.twig */
class __TwigTemplate_058a77695649f717aeaad99b515ebde98ccc4d9598639959d218b228e073903c extends Twig_Template
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
        return "OroShoppingListBundle:layouts/blank/page:shopping_list_collection.html.twig";
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
        return new Twig_Source("", "OroShoppingListBundle:layouts/blank/page:shopping_list_collection.html.twig", "");
    }
}

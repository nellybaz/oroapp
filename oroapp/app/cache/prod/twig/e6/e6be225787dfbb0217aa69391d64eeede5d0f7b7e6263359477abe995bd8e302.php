<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/oro_product_list_item/product_shopping_lists.html.twig */
class __TwigTemplate_a7e5cf8b7fdd65ae680d648f167edd30fefb964859daebb140fdbf28356c262b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_list_item__shopping_lists_widget' => array($this, 'block___oro_product_list_item__shopping_lists_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_list_item__shopping_lists_widget', $context, $blocks);
    }

    public function block___oro_product_list_item__shopping_lists_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " product-item-shopping-lists"));
        // line 5
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 6
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/oro_product_list_item/product_shopping_lists.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  29 => 5,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/oro_product_list_item/product_shopping_lists.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/oro_product_list_item/product_shopping_lists.html.twig");
    }
}

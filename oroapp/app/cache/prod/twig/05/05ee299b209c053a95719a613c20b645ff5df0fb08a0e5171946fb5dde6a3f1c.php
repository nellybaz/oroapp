<?php

/* OroShoppingListBundle:layouts/blank/imports/oro_product_list_item:product_shopping_lists.html.twig */
class __TwigTemplate_015826102a6b1744e89613d3ca9136cb7a700b1410858090e360fc1452087fb0 extends Twig_Template
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
        return "OroShoppingListBundle:layouts/blank/imports/oro_product_list_item:product_shopping_lists.html.twig";
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
        return new Twig_Source("", "OroShoppingListBundle:layouts/blank/imports/oro_product_list_item:product_shopping_lists.html.twig", "");
    }
}

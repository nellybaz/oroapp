<?php

/* OroShoppingListBundle:layouts/blank/oro_product_frontend_product_view:add_to_shopping_list_form.html.twig */
class __TwigTemplate_1279bf831cc33a58408cda09792ccb08f55d2a68495ca8f8ca4d93ee871d7383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_line_item_form_shopping_lists_widget' => array($this, 'block__line_item_form_shopping_lists_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_line_item_form_shopping_lists_widget', $context, $blocks);
    }

    public function block__line_item_form_shopping_lists_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " form__col"));
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
        return "OroShoppingListBundle:layouts/blank/oro_product_frontend_product_view:add_to_shopping_list_form.html.twig";
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
        return new Twig_Source("", "OroShoppingListBundle:layouts/blank/oro_product_frontend_product_view:add_to_shopping_list_form.html.twig", "");
    }
}

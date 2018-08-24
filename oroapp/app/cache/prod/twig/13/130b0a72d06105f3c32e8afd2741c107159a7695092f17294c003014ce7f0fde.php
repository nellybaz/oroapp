<?php

/* OroShoppingListBundle:layouts/default/oro_shopping_list_frontend_view:shopping_list_owner.html.twig */
class __TwigTemplate_433b897ef658062170a90817d1c12c97f658816dccee10569b45c3844adbb87f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_shopping_list_owner_widget' => array($this, 'block__shopping_list_owner_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_shopping_list_owner_widget', $context, $blocks);
    }

    public function block__shopping_list_owner_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["options"] = array("shoppingListId" => $this->getAttribute(        // line 3
($context["shoppingList"] ?? null), "id", array()));
        // line 5
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " shopping-list-owner", "data-page-component-module" => "oroshoppinglist/js/app/components/shoppinglist-owner-inline-editable-view-component", "data-page-component-options" => twig_jsonencode_filter(        // line 8
($context["options"] ?? null))));
        // line 10
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label" => "oro.frontend.shoppinglist.view.owner.label"));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:layouts/default/oro_shopping_list_frontend_view:shopping_list_owner.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  39 => 11,  34 => 10,  32 => 8,  30 => 5,  28 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:layouts/default/oro_shopping_list_frontend_view:shopping_list_owner.html.twig", "");
    }
}

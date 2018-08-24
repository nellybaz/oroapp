<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/shopping_list_buttons/shopping_list_buttons.html.twig */
class __TwigTemplate_97435ea68a99780836ca1c4bf678b7e2134345c52fe1d2e9da2a7d06f32379a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__shopping_list_buttons__line_item_form_buttons_shopping_list_widget' => array($this, 'block___shopping_list_buttons__line_item_form_buttons_shopping_list_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__shopping_list_buttons__line_item_form_buttons_shopping_list_widget', $context, $blocks);
    }

    public function block___shopping_list_buttons__line_item_form_buttons_shopping_list_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if (( !$this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductExtension')->isConfigurableType($this->getAttribute(($context["product"] ?? null), "type", array())) || (($context["matrixFormType"] ?? null) != "none"))) {
            // line 3
            echo "        ";
            $context["buttons"] = $this->loadTemplate("OroShoppingListBundle:ShoppingList/Frontend:buttons.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/shopping_list_buttons/shopping_list_buttons.html.twig", 3);
            // line 4
            echo "
        ";
            // line 5
            $context["view"] = "oroshoppinglist/js/app/views/product-add-to-shopping-list-view";
            // line 6
            echo "        ";
            if ((($context["matrixFormType"] ?? null) == "popup")) {
                // line 7
                echo "            ";
                $context["view"] = "oroshoppinglist/js/app/views/matrix-grid-popup-button-view";
                // line 8
                echo "        ";
            } elseif ((($context["matrixFormType"] ?? null) == "inline")) {
                // line 9
                echo "            ";
                $context["view"] = "oroshoppinglist/js/app/views/matrix-grid-add-to-shopping-list-view";
                // line 10
                echo "        ";
            }
            // line 11
            echo "
        ";
            // line 12
            $context["buttonOptions"] = array("dataUrl" => "oro_shopping_list_frontend_add_product", "dataAttributes" => array(), "aCss" => "btn--info ");
            // line 17
            echo "        ";
            $context["removeOptions"] = twig_array_merge(($context["buttonOptions"] ?? null), array("dataUrl" => "oro_shopping_list_frontend_remove_product", "actionLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.actions.remove_from_shopping_list")));
            // line 21
            echo "
        ";
            // line 22
            $context["options"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~new" =>             // line 23
($context["buttonOptions"] ?? null), "~current" =>             // line 24
($context["buttonOptions"] ?? null), "~existing" =>             // line 25
($context["buttonOptions"] ?? null), "shoppingLists" =>             // line 26
($context["shoppingLists"] ?? null), "~remove" =>             // line 27
($context["removeOptions"] ?? null), "~componentModule" =>             // line 28
($context["view"] ?? null), "~componentOptions" => array("modelAttr" => array("shopping_lists" =>             // line 31
($context["productShoppingLists"] ?? null))), "~singleButtonACss" => "btn--info"));
            // line 36
            echo "        ";
            echo $context["buttons"]->getgetButtonsHtml(($context["options"] ?? null));
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/shopping_list_buttons/shopping_list_buttons.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 36,  70 => 31,  69 => 28,  68 => 27,  67 => 26,  66 => 25,  65 => 24,  64 => 23,  63 => 22,  60 => 21,  57 => 17,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/shopping_list_buttons/shopping_list_buttons.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/blank/imports/shopping_list_buttons/shopping_list_buttons.html.twig");
    }
}

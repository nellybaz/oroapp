<?php

/* OroShoppingListBundle:layouts/default/oro_shopping_list_frontend_view:shopping_lists_menu.html.twig */
class __TwigTemplate_83e8dccf1cda21ac07abd457133d464e32d4bd2dbef84305f64c4729c2e576ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_shopping_lists_menu_widget' => array($this, 'block__shopping_lists_menu_widget'),
            '_shopping_lists_menu_item_widget' => array($this, 'block__shopping_lists_menu_item_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_shopping_lists_menu_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('_shopping_lists_menu_item_widget', $context, $blocks);
    }

    // line 1
    public function block__shopping_lists_menu_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["currentClass"] = "shopping-list__item--current";
        // line 3
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => array("view" => "oroui/js/app/views/layout-subtree-view", "blockId" =>         // line 7
($context["id"] ?? null), "reloadEvents" => array(0 => "shopping-list:refresh", 1 => "frontend:item:delete")), "data-dropdown-trigger" => true, "~class" => " shopping-list-navigation"));
        // line 13
        echo "
    <div ";
        // line 14
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <ul class=\"shopping-list\"
            data-page-component-module=\"oroshoppinglist/js/app/views/shoppinglist-widget-view\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shoppingLists"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["shoppingList"]) {
            // line 18
            echo "                ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("shoppingList" =>             // line 19
$context["shoppingList"], "selectedShoppingList" =>             // line 20
($context["selectedShoppingList"] ?? null), "currentClass" =>             // line 21
($context["currentClass"] ?? null)));
            // line 23
            echo "                ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shoppingList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </ul>
    </div>
";
    }

    // line 29
    public function block__shopping_lists_menu_item_widget($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (" shopping-list__item " . ((($this->getAttribute(        // line 31
($context["shoppingList"] ?? null), "id", array()) == $this->getAttribute(($context["selectedShoppingList"] ?? null), "id", array()))) ? (($context["currentClass"] ?? null)) : (""))), "data-shopping-list-id" => $this->getAttribute(        // line 32
($context["shoppingList"] ?? null), "id", array())));
        // line 34
        echo "    <li ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shopping_list_frontend_view", array("id" => $this->getAttribute(($context["shoppingList"] ?? null), "id", array()))), "html", null, true);
        echo "\"
           title=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "label", array()), "html", null, true);
        echo "\"
           class=\"shopping-list__link\"
        >
            <div class=\"shopping-list__name\">
                <span class=\"shopping-list__title text-uppercase\">
                    <span class='shopping-list__item-indicator'>
                        <i class=\"fa-shopping-cart\"></i>
                    </span>
                    <span class=\"shopping-list__text\">
                        <span data-page-component-line-clamp
                              data-shopping-list-id=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "id", array()), "html", null, true);
        echo "\"
                              data-role=\"shopping-list-title\"
                        >";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "label", array()), "html", null, true);
        echo "</span>
                    </span>
                </span>
                ";
        // line 51
        $context["itemsCount"] = $this->getAttribute($this->getAttribute(($context["shoppingList"] ?? null), "lineItems", array()), "count", array());
        // line 52
        echo "                ";
        if (($context["itemsCount"] ?? null)) {
            // line 53
            echo "                    <div class=\"shopping-list__desc\">
                        <b>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["shoppingList"] ?? null), "lineItems", array()), "count", array()), "html", null, true);
            echo "</b> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("oro.shoppinglist.items.label", ($context["itemsCount"] ?? null)), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 57
        echo "            </div>
        </a>
    </li>
";
    }

    public function getTemplateName()
    {
        return "OroShoppingListBundle:layouts/default/oro_shopping_list_frontend_view:shopping_lists_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 57,  144 => 54,  141 => 53,  138 => 52,  136 => 51,  130 => 48,  125 => 46,  112 => 36,  108 => 35,  103 => 34,  101 => 32,  100 => 31,  98 => 30,  95 => 29,  89 => 25,  72 => 23,  70 => 21,  69 => 20,  68 => 19,  66 => 18,  49 => 17,  43 => 14,  40 => 13,  38 => 7,  36 => 3,  33 => 2,  30 => 1,  26 => 29,  23 => 28,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShoppingListBundle:layouts/default/oro_shopping_list_frontend_view:shopping_lists_menu.html.twig", "");
    }
}

<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.html.twig */
class __TwigTemplate_ea234c99df6f32b8d292482eef67e29540ea60ba8838a96f7f42d88201f17089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_main_menu_shopping_lists_wrapper_widget' => array($this, 'block__main_menu_shopping_lists_wrapper_widget'),
            '_header_row_shopping_toggle_widget' => array($this, 'block__header_row_shopping_toggle_widget'),
            '_main_menu_shopping_lists_dropdown_widget' => array($this, 'block__main_menu_shopping_lists_dropdown_widget'),
            '_main_menu_shopping_lists_dropdown_container_widget' => array($this, 'block__main_menu_shopping_lists_dropdown_container_widget'),
            'shopping_list_dropdown_item_widget' => array($this, 'block_shopping_list_dropdown_item_widget'),
            'shopping_list_dropdown_create_widget' => array($this, 'block_shopping_list_dropdown_create_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_main_menu_shopping_lists_wrapper_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('_header_row_shopping_toggle_widget', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('_main_menu_shopping_lists_dropdown_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('_main_menu_shopping_lists_dropdown_container_widget', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('shopping_list_dropdown_item_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('shopping_list_dropdown_create_widget', $context, $blocks);
    }

    // line 1
    public function block__main_menu_shopping_lists_wrapper_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroshoppinglist/js/app/components/shoppinglist-widget-view-component", "~data-page-component-options" => array("view" => "oroui/js/app/views/layout-subtree-view", "blockId" =>         // line 6
($context["id"] ?? null), "reloadEvents" => array(0 => "shopping-list:refresh", 1 => "frontend:shopping-list-item-quantity:update", 2 => "frontend:item:delete")), "data-dropdown-trigger" => true, "~class" => " main-menu__item main-menu__item--nested"));
        // line 12
        echo "
    <div ";
        // line 13
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 14
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 18
    public function block__header_row_shopping_toggle_widget($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroshoppinglist/js/app/components/shoppinglist-widget-view-component", "~data-page-component-options" => array("view" => "oroui/js/app/views/layout-subtree-view", "blockId" =>         // line 23
($context["id"] ?? null), "reloadEvents" => array(0 => "shopping-list:refresh", 1 => "frontend:item:delete")), "~class" => " header-row__toggle header-row__wrapper", "data-header-row-toggle" => "", "data-options" => "{\"attachToParent\": \"true\"}"));
        // line 30
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"header-row__dropdown\"
             data-page-component-module=\"oroshoppinglist/js/app/views/shoppinglist-widget-view\">
            ";
        // line 33
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 38
    public function block__main_menu_shopping_lists_dropdown_widget($context, array $blocks = array())
    {
        // line 39
        echo "    <div class=\"cart-widget__content\">
        <span class=\"cart-widget__icon\">
            <i class=\"fa-clipboard\"></i>
        </span>
        <span class=\"cart-widget-counter\">
            <span class=\"cart-widget__text\">
                ";
        // line 45
        if ( !call_user_func_array($this->env->getFunction('is_one_shopping_list_enabled')->getCallable(), array())) {
            // line 46
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("oro.frontend.shoppinglist.view.entity.label", twig_length_filter($this->env, ($context["shoppingLists"] ?? null)));
            echo "
                ";
        } else {
            // line 48
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shoppinglist.default.label"), "html", null, true);
            echo "
                ";
        }
        // line 50
        echo "            </span>
            <i class=\"fa-angle-down\"></i>
        </span>
    </div>
    ";
        // line 54
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
";
    }

    // line 57
    public function block__main_menu_shopping_lists_dropdown_container_widget($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        $context["currentClass"] = "checked";
        // line 59
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroshoppinglist/js/app/views/shoppinglist-widget-view", "data-page-component-options" => array("currentClass" =>         // line 62
($context["currentClass"] ?? null)), "data-scroll" => "true", "~class" => " shopping-list-widget__container"));
        // line 67
        echo "
    <div ";
        // line 68
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 69
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
            // line 70
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("shoppingList" =>             // line 71
$context["shoppingList"], "shoppingListProducts" =>             // line 72
($context["shoppingListProducts"] ?? null)));
            // line 74
            echo "            ";
            $this->displayBlock("container_widget", $context, $blocks);
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
        // line 76
        echo "    </div>
";
    }

    // line 79
    public function block_shopping_list_dropdown_item_widget($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        $context["currentClass"] = "checked";
        // line 81
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " shopping-list-dropdown__item"));
        // line 84
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"shopping-list-dropdown__radio\">
            <label class=\"custom-radio ";
        // line 86
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["shoppingList"] ?? null), "isCurrent", array())) ? (($context["currentClass"] ?? null)) : ("")), "html", null, true);
        echo "\"
                   data-toggle=\"tooltip\"
                   title=\"Set as default\"
                   data-shopping-list-id=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "id", array()), "html", null, true);
        echo "\"
                   data-role=\"shopping-list-current-label\">
                <input type=\"radio\" name=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-radio\" data-role=\"set-default\" ";
        echo (($this->getAttribute(($context["shoppingList"] ?? null), "isCurrent", array())) ? ("checked") : (""));
        echo "
                       value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "id", array()), "html", null, true);
        echo "\" data-label=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "label", array()), "html", null, true);
        echo "\"
                       class=\"custom-radio__control\">
                <span class=\"custom-radio__text\"></span>
            </label>
        </div>
        <a class=\"shopping-list-dropdown__link\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('is_one_shopping_list_enabled')->getCallable(), array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shopping_list_frontend_view")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shopping_list_frontend_view", array("id" => $this->getAttribute(($context["shoppingList"] ?? null), "id", array()))))), "html", null, true);
        echo "\">
            <span class=\"shopping-list-dropdown__title\">
                <span class=\"shopping-list-dropdown__name\">
                    <span class=\"shopping-list-dropdown__name-inner shopping-list-dropdown__name-inner--";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "id", array()), "html", null, true);
        echo "\"
                          title=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "label", array()), "html", null, true);
        echo "\"
                          data-shopping-list-id=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "id", array()), "html", null, true);
        echo "\"
                          data-role=\"shopping-list-title\">";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "label", array()), "html", null, true);
        echo "</span>
                </span>
                <span class=\"shopping-list-dropdown__details\">
                    ";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("oro.frontend.shoppinglist.view.items.label", twig_length_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "lineItems", array()))), "html", null, true);
        echo "
                    ";
        // line 107
        if ((twig_length_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? null), "lineItems", array())) > 0)) {
            // line 108
            echo "                        | ";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute(($context["shoppingList"] ?? null), "subtotal", array()), "amount", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["shoppingList"] ?? null), "subtotal", array()), "currency", array())));
            echo "
                    ";
        }
        // line 110
        echo "                </span>
            </span>
            <span class=\"shopping-list-dropdown__products\">
                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["shoppingListProducts"] ?? null), $this->getAttribute(($context["shoppingList"] ?? null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["shoppingListProducts"] ?? null), $this->getAttribute(($context["shoppingList"] ?? null), "id", array()), array(), "array"), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 114
            echo "                    ";
            if (($this->getAttribute($context["loop"], "index", array()) == 3)) {
                // line 115
                echo "                        <span class=\"shopping-list-dropdown__ellipsis\">...</span>
                    ";
            } else {
                // line 117
                echo "                        <span class=\"shopping-list-dropdown__products__item\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</span>
                    ";
            }
            // line 119
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "            </span>
            <span class=\"shopping-list-dropdown__info\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.view.view_details.label"), "html", null, true);
        echo " <i class=\"fa-angle-right\"></i></span>
        </a>
    </div>
";
    }

    // line 126
    public function block_shopping_list_dropdown_create_widget($context, array $blocks = array())
    {
        // line 127
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.html.twig", 127);
        // line 128
        echo "    <div class=\"header-row__dropdown-footer\">
        ";
        // line 129
        echo $context["UI"]->getclientLink(array("aCss" => "shopping-list-widget__create-btn", "iCss" => "fa-plus-circle", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.shoppinglist.view.create_new_shopping_list.label"), "widget" => array("type" => "shopping-list-create", "options" => array("createOnly" => true))));
        // line 139
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  341 => 139,  339 => 129,  336 => 128,  333 => 127,  330 => 126,  322 => 121,  319 => 120,  305 => 119,  299 => 117,  295 => 115,  292 => 114,  275 => 113,  270 => 110,  264 => 108,  262 => 107,  258 => 106,  252 => 103,  248 => 102,  244 => 101,  240 => 100,  234 => 97,  224 => 92,  218 => 91,  213 => 89,  207 => 86,  201 => 84,  198 => 81,  195 => 80,  192 => 79,  187 => 76,  172 => 74,  170 => 72,  169 => 71,  168 => 70,  151 => 69,  147 => 68,  144 => 67,  142 => 62,  140 => 59,  137 => 58,  134 => 57,  128 => 54,  122 => 50,  116 => 48,  110 => 46,  108 => 45,  100 => 39,  97 => 38,  89 => 33,  82 => 30,  80 => 23,  78 => 19,  75 => 18,  68 => 14,  64 => 13,  61 => 12,  59 => 6,  57 => 2,  54 => 1,  50 => 126,  47 => 125,  45 => 79,  42 => 78,  40 => 57,  37 => 56,  35 => 38,  32 => 37,  30 => 18,  27 => 17,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.html.twig");
    }
}

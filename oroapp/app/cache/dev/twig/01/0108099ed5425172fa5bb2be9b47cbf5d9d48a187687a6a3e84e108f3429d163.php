<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.html.twig */
class __TwigTemplate_1fefedd20020c32d4d19234406cd112a794209fafc14f7a9629d559525a5157c extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__main_menu_shopping_lists_wrapper_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_main_menu_shopping_lists_wrapper_widget"));

        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-page-component-module" => "oroshoppinglist/js/app/components/shoppinglist-widget-view-component", "~data-page-component-options" => array("view" => "oroui/js/app/views/layout-subtree-view", "blockId" =>         // line 6
($context["id"] ?? $this->getContext($context, "id")), "reloadEvents" => array(0 => "shopping-list:refresh", 1 => "frontend:shopping-list-item-quantity:update", 2 => "frontend:item:delete")), "data-dropdown-trigger" => true, "~class" => " main-menu__item main-menu__item--nested"));
        // line 12
        echo "
    <div ";
        // line 13
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 14
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block__header_row_shopping_toggle_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_header_row_shopping_toggle_widget"));

        // line 19
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-page-component-module" => "oroshoppinglist/js/app/components/shoppinglist-widget-view-component", "~data-page-component-options" => array("view" => "oroui/js/app/views/layout-subtree-view", "blockId" =>         // line 23
($context["id"] ?? $this->getContext($context, "id")), "reloadEvents" => array(0 => "shopping-list:refresh", 1 => "frontend:item:delete")), "~class" => " header-row__toggle header-row__wrapper", "data-header-row-toggle" => "", "data-options" => "{\"attachToParent\": \"true\"}"));
        // line 30
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"header-row__dropdown\"
             data-page-component-module=\"oroshoppinglist/js/app/views/shoppinglist-widget-view\">
            ";
        // line 33
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block__main_menu_shopping_lists_dropdown_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_main_menu_shopping_lists_dropdown_widget"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("oro.frontend.shoppinglist.view.entity.label", twig_length_filter($this->env, ($context["shoppingLists"] ?? $this->getContext($context, "shoppingLists"))));
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
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? $this->getContext($context, "block")), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block__main_menu_shopping_lists_dropdown_container_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_main_menu_shopping_lists_dropdown_container_widget"));

        // line 58
        echo "    ";
        $context["currentClass"] = "checked";
        // line 59
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("data-page-component-module" => "oroshoppinglist/js/app/views/shoppinglist-widget-view", "data-page-component-options" => array("currentClass" =>         // line 62
($context["currentClass"] ?? $this->getContext($context, "currentClass"))), "data-scroll" => "true", "~class" => " shopping-list-widget__container"));
        // line 67
        echo "
    <div ";
        // line 68
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shoppingLists"] ?? $this->getContext($context, "shoppingLists")));
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
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? $this->getContext($context, "block")), array("shoppingList" =>             // line 71
$context["shoppingList"], "shoppingListProducts" =>             // line 72
($context["shoppingListProducts"] ?? $this->getContext($context, "shoppingListProducts"))));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_shopping_list_dropdown_item_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "shopping_list_dropdown_item_widget"));

        // line 80
        echo "    ";
        $context["currentClass"] = "checked";
        // line 81
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? $this->getContext($context, "attr")), array("~class" => " shopping-list-dropdown__item"));
        // line 84
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"shopping-list-dropdown__radio\">
            <label class=\"custom-radio ";
        // line 86
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "isCurrent", array())) ? (($context["currentClass"] ?? $this->getContext($context, "currentClass"))) : ("")), "html", null, true);
        echo "\"
                   data-toggle=\"tooltip\"
                   title=\"Set as default\"
                   data-shopping-list-id=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "id", array()), "html", null, true);
        echo "\"
                   data-role=\"shopping-list-current-label\">
                <input type=\"radio\" name=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "-radio\" data-role=\"set-default\" ";
        echo (($this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "isCurrent", array())) ? ("checked") : (""));
        echo "
                       value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "id", array()), "html", null, true);
        echo "\" data-label=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "label", array()), "html", null, true);
        echo "\"
                       class=\"custom-radio__control\">
                <span class=\"custom-radio__text\"></span>
            </label>
        </div>
        <a class=\"shopping-list-dropdown__link\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('is_one_shopping_list_enabled')->getCallable(), array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shopping_list_frontend_view")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shopping_list_frontend_view", array("id" => $this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "id", array()))))), "html", null, true);
        echo "\">
            <span class=\"shopping-list-dropdown__title\">
                <span class=\"shopping-list-dropdown__name\">
                    <span class=\"shopping-list-dropdown__name-inner shopping-list-dropdown__name-inner--";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "id", array()), "html", null, true);
        echo "\"
                          title=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "label", array()), "html", null, true);
        echo "\"
                          data-shopping-list-id=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "id", array()), "html", null, true);
        echo "\"
                          data-role=\"shopping-list-title\">";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "label", array()), "html", null, true);
        echo "</span>
                </span>
                <span class=\"shopping-list-dropdown__details\">
                    ";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("oro.frontend.shoppinglist.view.items.label", twig_length_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "lineItems", array()))), "html", null, true);
        echo "
                    ";
        // line 107
        if ((twig_length_filter($this->env, $this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "lineItems", array())) > 0)) {
            // line 108
            echo "                        | ";
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "subtotal", array()), "amount", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "subtotal", array()), "currency", array())));
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
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute(($context["shoppingListProducts"] ?? null), $this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["shoppingListProducts"] ?? null), $this->getAttribute(($context["shoppingList"] ?? $this->getContext($context, "shoppingList")), "id", array()), array(), "array"), array())) : (array())));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 126
    public function block_shopping_list_dropdown_create_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "shopping_list_dropdown_create_widget"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  380 => 139,  378 => 129,  375 => 128,  372 => 127,  366 => 126,  355 => 121,  352 => 120,  338 => 119,  332 => 117,  328 => 115,  325 => 114,  308 => 113,  303 => 110,  297 => 108,  295 => 107,  291 => 106,  285 => 103,  281 => 102,  277 => 101,  273 => 100,  267 => 97,  257 => 92,  251 => 91,  246 => 89,  240 => 86,  234 => 84,  231 => 81,  228 => 80,  222 => 79,  214 => 76,  199 => 74,  197 => 72,  196 => 71,  195 => 70,  178 => 69,  174 => 68,  171 => 67,  169 => 62,  167 => 59,  164 => 58,  158 => 57,  149 => 54,  143 => 50,  137 => 48,  131 => 46,  129 => 45,  121 => 39,  115 => 38,  104 => 33,  97 => 30,  95 => 23,  93 => 19,  87 => 18,  77 => 14,  73 => 13,  70 => 12,  68 => 6,  66 => 2,  60 => 1,  53 => 126,  50 => 125,  48 => 79,  45 => 78,  43 => 57,  40 => 56,  38 => 38,  35 => 37,  33 => 18,  30 => 17,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block _main_menu_shopping_lists_wrapper_widget %}
    {% set attr = layout_attr_defaults(attr, {
        'data-page-component-module': 'oroshoppinglist/js/app/components/shoppinglist-widget-view-component',
        '~data-page-component-options': {
            view: 'oroui/js/app/views/layout-subtree-view',
            blockId: id,
            reloadEvents: ['shopping-list:refresh', 'frontend:shopping-list-item-quantity:update', 'frontend:item:delete'],
        },
        'data-dropdown-trigger': true,
        '~class': \" main-menu__item main-menu__item--nested\"
    }) %}

    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _header_row_shopping_toggle_widget %}
    {% set attr = layout_attr_defaults(attr, {
        'data-page-component-module': 'oroshoppinglist/js/app/components/shoppinglist-widget-view-component',
        '~data-page-component-options': {
            view: 'oroui/js/app/views/layout-subtree-view',
            blockId: id,
            reloadEvents: ['shopping-list:refresh', 'frontend:item:delete'],
        },
        '~class': \" header-row__toggle header-row__wrapper\",
        'data-header-row-toggle': '',
        'data-options': '{\"attachToParent\": \"true\"}'
    }) %}
    <div {{ block('block_attributes') }}>
        <div class=\"header-row__dropdown\"
             data-page-component-module=\"oroshoppinglist/js/app/views/shoppinglist-widget-view\">
            {{ block_widget(block) }}
        </div>
    </div>
{% endblock %}

{% block _main_menu_shopping_lists_dropdown_widget %}
    <div class=\"cart-widget__content\">
        <span class=\"cart-widget__icon\">
            <i class=\"fa-clipboard\"></i>
        </span>
        <span class=\"cart-widget-counter\">
            <span class=\"cart-widget__text\">
                {% if not is_one_shopping_list_enabled() %}
                    {{ 'oro.frontend.shoppinglist.view.entity.label'|transchoice(shoppingLists|length)|raw }}
                {% else %}
                    {{ 'oro.shoppinglist.default.label'|trans}}
                {% endif %}
            </span>
            <i class=\"fa-angle-down\"></i>
        </span>
    </div>
    {{ block_widget(block) }}
{% endblock %}

{% block _main_menu_shopping_lists_dropdown_container_widget %}
    {% set currentClass = 'checked' %}
    {% set attr = layout_attr_defaults(attr, {
        'data-page-component-module': 'oroshoppinglist/js/app/views/shoppinglist-widget-view',
        'data-page-component-options': {
            'currentClass': currentClass
        },
        'data-scroll': 'true',
        '~class': \" shopping-list-widget__container\"
    }) %}

    <div {{ block('block_attributes') }}>
        {% for shoppingList in shoppingLists -%}
            {% do block|merge_context({
            shoppingList: shoppingList,
            shoppingListProducts: shoppingListProducts,
            }) %}
            {{ block('container_widget') }}
        {%- endfor %}
    </div>
{% endblock %}

{% block shopping_list_dropdown_item_widget %}
    {% set currentClass = 'checked' %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': \" shopping-list-dropdown__item\"
    }) %}
    <div {{ block('block_attributes') }}>
        <div class=\"shopping-list-dropdown__radio\">
            <label class=\"custom-radio {{ shoppingList.isCurrent ? currentClass }}\"
                   data-toggle=\"tooltip\"
                   title=\"Set as default\"
                   data-shopping-list-id=\"{{ shoppingList.id }}\"
                   data-role=\"shopping-list-current-label\">
                <input type=\"radio\" name=\"{{ id }}-radio\" data-role=\"set-default\" {{ shoppingList.isCurrent ? 'checked' }}
                       value=\"{{ shoppingList.id }}\" data-label=\"{{ shoppingList.label }}\"
                       class=\"custom-radio__control\">
                <span class=\"custom-radio__text\"></span>
            </label>
        </div>
        <a class=\"shopping-list-dropdown__link\" href=\"{{ is_one_shopping_list_enabled() ? path('oro_shopping_list_frontend_view') : path('oro_shopping_list_frontend_view', {id: shoppingList.id}) }}\">
            <span class=\"shopping-list-dropdown__title\">
                <span class=\"shopping-list-dropdown__name\">
                    <span class=\"shopping-list-dropdown__name-inner shopping-list-dropdown__name-inner--{{ shoppingList.id }}\"
                          title=\"{{ shoppingList.label }}\"
                          data-shopping-list-id=\"{{ shoppingList.id }}\"
                          data-role=\"shopping-list-title\">{{ shoppingList.label }}</span>
                </span>
                <span class=\"shopping-list-dropdown__details\">
                    {{ 'oro.frontend.shoppinglist.view.items.label'|transchoice(shoppingList.lineItems|length) }}
                    {% if shoppingList.lineItems|length > 0 %}
                        | {{ shoppingList.subtotal.amount|oro_format_currency({'currency': shoppingList.subtotal.currency}) }}
                    {% endif %}
                </span>
            </span>
            <span class=\"shopping-list-dropdown__products\">
                {% for product in shoppingListProducts[shoppingList.id]|default([]) %}
                    {% if loop.index == 3 %}
                        <span class=\"shopping-list-dropdown__ellipsis\">...</span>
                    {% else %}
                        <span class=\"shopping-list-dropdown__products__item\">{{ product.name }}</span>
                    {% endif %}
                {% endfor %}
            </span>
            <span class=\"shopping-list-dropdown__info\">{{ 'oro.frontend.shoppinglist.view.view_details.label'|trans }} <i class=\"fa-angle-right\"></i></span>
        </a>
    </div>
{% endblock %}

{% block shopping_list_dropdown_create_widget %}
    {% import 'OroUIBundle::macros.html.twig' as UI %}
    <div class=\"header-row__dropdown-footer\">
        {{ UI.clientLink({
            'aCss': 'shopping-list-widget__create-btn',
            'iCss': 'fa-plus-circle',
            'label' : 'oro.frontend.shoppinglist.view.create_new_shopping_list.label'|trans,
            'widget' : {
                'type' : 'shopping-list-create',
                'options': {
                    'createOnly': true
                }
            }
        }) }}
    </div>
{% endblock %}
", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShoppingListBundle/Resources/views/layouts/default/page/shopping_list_widget.html.twig");
    }
}

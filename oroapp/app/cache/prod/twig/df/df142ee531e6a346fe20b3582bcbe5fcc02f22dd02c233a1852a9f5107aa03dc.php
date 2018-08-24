<?php

/* OroCustomThemeBundle:layouts/custom/oro_shopping_list_frontend_view:shopping_lists_menu.html.twig */
class __TwigTemplate_aef7c8e288108666f8b9b105ae9e037e400678b151593fc2e52814942b76a16d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroShoppingListBundle:layouts/default/oro_shopping_list_frontend_view:shopping_lists_menu.html.twig", "OroCustomThemeBundle:layouts/custom/oro_shopping_list_frontend_view:shopping_lists_menu.html.twig", 1);
        $this->blocks = array(
            '_shopping_list_view_tabs_widget' => array($this, 'block__shopping_list_view_tabs_widget'),
            '_shopping_list_view_container_widget' => array($this, 'block__shopping_list_view_container_widget'),
            '_shopping_list_view_container_content_widget' => array($this, 'block__shopping_list_view_container_content_widget'),
            '_shopping_lists_menu_widget' => array($this, 'block__shopping_lists_menu_widget'),
            '_shopping_list_view_more_widget' => array($this, 'block__shopping_list_view_more_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroShoppingListBundle:layouts/default/oro_shopping_list_frontend_view:shopping_lists_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block__shopping_list_view_tabs_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "shopping-list-tabs"));
        // line 7
        echo "
    <div";
        // line 8
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 9
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 13
    public function block__shopping_list_view_container_widget($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("id" => "shopping_list_view_container_content", "~class" => "shopping-list-wrapper", "data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => array("view" => "oroui/js/app/views/layout-subtree-view", "blockId" => $this->getAttribute($this->getAttribute(        // line 20
($context["block"] ?? null), "vars", array()), "id", array()), "reloadEvents" => array(0 => "shopping-list:refresh", 1 => "product:quantity-unit:update", 2 => "workflow:transitions_failure"))));
        // line 24
        echo "
    <div";
        // line 25
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 26
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 30
    public function block__shopping_list_view_container_content_widget($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "shopping-list__content"));
        // line 32
        echo "
    <div";
        // line 33
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 34
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 38
    public function block__shopping_lists_menu_widget($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $context["selectedIndex"] = 0;
        // line 40
        echo "    ";
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
            // line 41
            echo "        ";
            if (($this->getAttribute($context["shoppingList"], "id", array()) == $this->getAttribute(($context["selectedShoppingList"] ?? null), "id", array()))) {
                // line 42
                echo "            ";
                $context["selectedIndex"] = $this->getAttribute($context["loop"], "index", array());
                // line 43
                echo "        ";
            }
            // line 44
            echo "    ";
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
        // line 45
        echo "
    ";
        // line 46
        if ((($context["selectedIndex"] ?? null) > 6)) {
            // line 47
            echo "        ";
            $context["shoppingLists"] = twig_slice($this->env, ($context["shoppingLists"] ?? null), (($context["selectedIndex"] ?? null) - 6), 6);
            // line 48
            echo "    ";
        } else {
            // line 49
            echo "        ";
            $context["shoppingLists"] = twig_slice($this->env, ($context["shoppingLists"] ?? null), 0, 6);
            // line 50
            echo "    ";
        }
        // line 51
        echo "
    ";
        // line 52
        $this->displayParentBlock("_shopping_lists_menu_widget", $context, $blocks);
        echo "
";
    }

    // line 55
    public function block__shopping_list_view_more_widget($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $context["currentClass"] = "shopping-list-links__item--current";
        // line 57
        echo "    ";
        if ((twig_length_filter($this->env, ($context["shoppingLists"] ?? null)) > 6)) {
            // line 58
            echo "    ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " shopping-list-dropdown"));
            // line 61
            echo "
    <div";
            // line 62
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
        <div class=\"shopping-list-dropdown__handle\" data-toggle=\"dropdown\">
            <i class=\"shopping-list-dropdown__icon fa-plus-circle\"></i>
        </div>
        <div class=\"shopping-list-dropdown__nav dropdown-menu\">
            <ul class=\"shopping-list-links\">
                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shoppingLists"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shoppingList"]) {
                // line 69
                echo "                    <li class=\"shopping-list-links__item
                        ";
                // line 70
                if (($this->getAttribute($context["shoppingList"], "id", array()) == $this->getAttribute(($context["selectedShoppingList"] ?? null), "id", array()))) {
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["currentClass"] ?? null), "html", null, true);
                    echo " ";
                }
                echo "\"
                        data-shopping-list-items
                        data-role=\"shopping-list-current-label\"
                        data-shopping-list-id=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["shoppingList"], "id", array()), "html", null, true);
                echo "\"
                    >
                        <a class=\"shopping-list-links__link\" href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_shopping_list_frontend_view", array("id" => $this->getAttribute($context["shoppingList"], "id", array()))), "html", null, true);
                echo "\">
                            <i class=\"shopping-list-links__icon fa-check\"></i>
                            <span class=\"shopping-list-links__text\"
                                  data-shopping-list-id=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["shoppingList"], "id", array()), "html", null, true);
                echo "\"
                                  data-role=\"shopping-list-title\">";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["shoppingList"], "label", array()), "html", null, true);
                echo "</span>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shoppingList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "            </ul>
        </div>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroCustomThemeBundle:layouts/custom/oro_shopping_list_frontend_view:shopping_lists_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 83,  222 => 79,  218 => 78,  212 => 75,  207 => 73,  197 => 70,  194 => 69,  190 => 68,  181 => 62,  178 => 61,  175 => 58,  172 => 57,  169 => 56,  166 => 55,  160 => 52,  157 => 51,  154 => 50,  151 => 49,  148 => 48,  145 => 47,  143 => 46,  140 => 45,  126 => 44,  123 => 43,  120 => 42,  117 => 41,  99 => 40,  96 => 39,  93 => 38,  86 => 34,  82 => 33,  79 => 32,  76 => 31,  73 => 30,  66 => 26,  62 => 25,  59 => 24,  57 => 20,  55 => 14,  52 => 13,  45 => 9,  41 => 8,  38 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroCustomThemeBundle:layouts/custom/oro_shopping_list_frontend_view:shopping_lists_menu.html.twig", "");
    }
}

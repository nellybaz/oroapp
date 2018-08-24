<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig */
class __TwigTemplate_852b363e5b4bb243393f27aa57c69365f46cb8b6b9f061406e499a9c0df0e06c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_categories_main_menu_list_widget' => array($this, 'block__categories_main_menu_list_widget'),
            '_categories_main_menu_widget' => array($this, 'block__categories_main_menu_widget'),
            '_categories_main_menu_first_level_item_widget' => array($this, 'block__categories_main_menu_first_level_item_widget'),
            '_categories_main_menu_second_level_widget' => array($this, 'block__categories_main_menu_second_level_widget'),
            '_categories_main_menu_second_level_item_widget' => array($this, 'block__categories_main_menu_second_level_item_widget'),
            '_categories_main_menu_third_level_widget' => array($this, 'block__categories_main_menu_third_level_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_categories_main_menu_list_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('_categories_main_menu_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('_categories_main_menu_first_level_item_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('_categories_main_menu_second_level_widget', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('_categories_main_menu_second_level_item_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('_categories_main_menu_third_level_widget', $context, $blocks);
    }

    // line 1
    public function block__categories_main_menu_list_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " main-menu"));
        // line 5
        echo "
    <ul ";
        // line 6
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 7
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </ul>
";
    }

    // line 11
    public function block__categories_main_menu_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if ( !(null === ($context["max_size"] ?? null))) {
            // line 13
            echo "        ";
            $context["categories"] = twig_slice($this->env, ($context["categories"] ?? null), 0, ($context["max_size"] ?? null));
        }
        // line 15
        echo "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "<li class=\"main-menu__item ";
            echo (($this->getAttribute($context["category"], "hasSublist", array())) ? ("main-menu__item--ancestor") : (""));
            echo "\">
            ";
            // line 18
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("category" => $context["category"]));
            // line 19
            echo "            ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
        </li>";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 24
    public function block__categories_main_menu_first_level_item_widget($context, array $blocks = array())
    {
        // line 25
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_index", array("categoryId" => $this->getAttribute(($context["category"] ?? null), "id", array()), "includeSubcategories" => true)), "html", null, true);
        echo "\"
       class=\"main-menu__link\">
        <span class=\"main-menu__text\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "title", array()), "html", null, true);
        echo " </span>
        ";
        // line 28
        if ($this->getAttribute(($context["category"] ?? null), "hasSublist", array())) {
            // line 29
            echo "            <span class=\"main-menu__taptick\">
                <i class=\"fa-angle-down fa--no-offset\"></i>
            </span>
        ";
        }
        // line 33
        echo "    </a>
    ";
        // line 34
        if ($this->getAttribute(($context["category"] ?? null), "hasSublist", array())) {
            // line 35
            echo "        <button class=\"main-menu__button-arrow\"
                data-toggle=\"dropdown\"
                data-go-to=\"next\"
        >
            <i class=\"fa-angle-down fa--no-offset\"></i>
        </button>
        ";
            // line 42
            echo "        <div class=\"main-menu__sublist-container\"
             data-header-row-toggle
             data-scroll=\"true\">
            <div class=\"main-menu-columns\">
                <div class=\"main-menu-column main-menu-column\">
                    <div class=\"main-menu-column__title\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.menu.by_category.label"), "html", null, true);
            echo "</div>
                    <div class=\"main-menu-column__inner\">
                        <ul class=\"main-menu-column__inner-left\">
                            ";
            // line 50
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("categories" => $this->getAttribute(($context["category"] ?? null), "childCategories", array())));
            // line 51
            echo "                            ";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "
                            <li class=\"main-menu-column__item\">
                                <a class=\"main-menu-column__link\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_index", array("categoryId" => $this->getAttribute(($context["category"] ?? null), "id", array()), "includeSubcategories" => true)), "html", null, true);
            echo "\">
                                    ";
            // line 54
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.catalog.menu.all.label") . " ") . $this->getAttribute(($context["category"] ?? null), "title", array())), "html", null, true);
            echo "
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ";
            // line 63
            echo "    ";
        }
    }

    // line 66
    public function block__categories_main_menu_second_level_widget($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 68
            echo "        <li class=\"main-menu-column__item\">
            <a class=\"main-menu-column__link\"
               href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_index", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "includeSubcategories" => true)), "html", null, true);
            echo "
            \">
                ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "
            </a>
        </li>
        ";
            // line 75
            if ($this->getAttribute($context["category"], "hasSublist", array())) {
                // line 76
                echo "            ";
                $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("categories" => $this->getAttribute($context["category"], "childCategories", array())));
                // line 77
                echo "            ";
                $this->displayBlock("container_widget", $context, $blocks);
                echo "
        ";
            }
            // line 79
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 82
    public function block__categories_main_menu_second_level_item_widget($context, array $blocks = array())
    {
        // line 83
        echo "    ";
        $context["class"] = ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " main-menu__subcategory");
        // line 84
        echo "    ";
        $context["class"] = (($this->getAttribute(($context["category"] ?? null), "hasSublist", array())) ? ((($context["class"] ?? null) . " main-menu__sublist--has-sibling")) : (($context["class"] ?? null)));
        // line 85
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ($context["class"] ?? null)));
        // line 86
        echo "
    <ul ";
        // line 87
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <li class=\"main-menu__subcategory-item\">
            <a class=\"link\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_index", array("categoryId" => $this->getAttribute(($context["category"] ?? null), "id", array()), "includeSubcategories" => true)), "html", null, true);
        echo "\">
                ";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "title", array()), "html", null, true);
        echo "
            </a>
            ";
        // line 92
        if ($this->getAttribute(($context["category"] ?? null), "hasSublist", array())) {
            // line 93
            echo "                ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("categories" => $this->getAttribute(($context["category"] ?? null), "childCategories", array())));
            // line 94
            echo "                ";
            $this->displayBlock("container_widget", $context, $blocks);
            echo "
            ";
        }
        // line 96
        echo "        </li>
    </ul>
";
    }

    // line 100
    public function block__categories_main_menu_third_level_widget($context, array $blocks = array())
    {
        // line 101
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 102
            echo "        <li class=\"main-menu-column__subitem\">
            <a class=\"main-menu-column__link\"
               href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_index", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "includeSubcategories" => true)), "html", null, true);
            echo "
            \">
                ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  331 => 106,  326 => 104,  322 => 102,  317 => 101,  314 => 100,  308 => 96,  302 => 94,  299 => 93,  297 => 92,  292 => 90,  288 => 89,  283 => 87,  280 => 86,  277 => 85,  274 => 84,  271 => 83,  268 => 82,  252 => 79,  246 => 77,  243 => 76,  241 => 75,  235 => 72,  230 => 70,  226 => 68,  208 => 67,  205 => 66,  200 => 63,  189 => 54,  185 => 53,  179 => 51,  177 => 50,  171 => 47,  164 => 42,  156 => 35,  154 => 34,  151 => 33,  145 => 29,  143 => 28,  139 => 27,  133 => 25,  130 => 24,  111 => 19,  109 => 18,  104 => 17,  87 => 16,  84 => 15,  80 => 13,  77 => 12,  74 => 11,  67 => 7,  63 => 6,  60 => 5,  57 => 2,  54 => 1,  50 => 100,  47 => 99,  45 => 82,  42 => 81,  40 => 66,  37 => 65,  35 => 24,  32 => 23,  30 => 11,  27 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/CatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig");
    }
}

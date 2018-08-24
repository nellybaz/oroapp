<?php

/* /usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig */
class __TwigTemplate_e7b182cecc12a98e32629040e7a31e530a4268bc6eef769a94b2e49b42d058a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_web_catalog_menu_list_widget' => array($this, 'block__web_catalog_menu_list_widget'),
            '_web_catalog_menu_widget' => array($this, 'block__web_catalog_menu_widget'),
            '_web_catalog_menu_first_level_item_simple_widget' => array($this, 'block__web_catalog_menu_first_level_item_simple_widget'),
            '_web_catalog_menu_first_level_item_head_widget' => array($this, 'block__web_catalog_menu_first_level_item_head_widget'),
            '_web_catalog_menu_first_level_item_mega_widget' => array($this, 'block__web_catalog_menu_first_level_item_mega_widget'),
            '_web_catalog_menu_second_level_item_simple_widget' => array($this, 'block__web_catalog_menu_second_level_item_simple_widget'),
            '_web_catalog_menu_second_level_item_head_widget' => array($this, 'block__web_catalog_menu_second_level_item_head_widget'),
            '_web_catalog_menu_second_level_sale_head_widget' => array($this, 'block__web_catalog_menu_second_level_sale_head_widget'),
            '_web_catalog_menu_second_level_sale_mega_widget' => array($this, 'block__web_catalog_menu_second_level_sale_mega_widget'),
            '_web_catalog_menu_second_level_item_mega_widget' => array($this, 'block__web_catalog_menu_second_level_item_mega_widget'),
            '_web_catalog_menu_third_level_item_mega_widget' => array($this, 'block__web_catalog_menu_third_level_item_mega_widget'),
            '_web_catalog_menu_four_level_item_mega_widget' => array($this, 'block__web_catalog_menu_four_level_item_mega_widget'),
            '_web_catalog_menu_main_menu_link' => array($this, 'block__web_catalog_menu_main_menu_link'),
            '_web_catalog_menu_main_menu_sub_block_simple' => array($this, 'block__web_catalog_menu_main_menu_sub_block_simple'),
            '_web_catalog_menu_main_menu_sub_block_head' => array($this, 'block__web_catalog_menu_main_menu_sub_block_head'),
            '_web_catalog_menu_second_level_column' => array($this, 'block__web_catalog_menu_second_level_column'),
            '_web_catalog_menu_main_menu_sub_block_mega' => array($this, 'block__web_catalog_menu_main_menu_sub_block_mega'),
            '_web_catalog_menu_second_level_item' => array($this, 'block__web_catalog_menu_second_level_item'),
            '_web_catalog_menu_third_level_item' => array($this, 'block__web_catalog_menu_third_level_item'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_web_catalog_menu_list_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('_web_catalog_menu_widget', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('_web_catalog_menu_first_level_item_simple_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('_web_catalog_menu_first_level_item_head_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('_web_catalog_menu_first_level_item_mega_widget', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('_web_catalog_menu_second_level_item_simple_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('_web_catalog_menu_second_level_item_head_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('_web_catalog_menu_second_level_sale_head_widget', $context, $blocks);
        // line 84
        echo "
";
        // line 85
        $this->displayBlock('_web_catalog_menu_second_level_sale_mega_widget', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('_web_catalog_menu_second_level_item_mega_widget', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('_web_catalog_menu_third_level_item_mega_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('_web_catalog_menu_four_level_item_mega_widget', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('_web_catalog_menu_main_menu_link', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('_web_catalog_menu_main_menu_sub_block_simple', $context, $blocks);
        // line 189
        echo "
";
        // line 190
        $this->displayBlock('_web_catalog_menu_main_menu_sub_block_head', $context, $blocks);
        // line 200
        echo "
";
        // line 201
        $this->displayBlock('_web_catalog_menu_second_level_column', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('_web_catalog_menu_main_menu_sub_block_mega', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('_web_catalog_menu_second_level_item', $context, $blocks);
        // line 228
        echo "
";
        // line 229
        $this->displayBlock('_web_catalog_menu_third_level_item', $context, $blocks);
    }

    // line 1
    public function block__web_catalog_menu_list_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " main-menu"));
        // line 3
        echo "
    <ul ";
        // line 4
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 5
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </ul>
";
    }

    // line 9
    public function block__web_catalog_menu_widget($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ( !(null === ($context["max_size"] ?? null))) {
            // line 11
            echo "        ";
            $context["categories"] = twig_slice($this->env, ($context["categories"] ?? null), 0, ($context["max_size"] ?? null));
        }
        // line 13
        echo "    ";
        $context["categoriesAttr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " main-menu__item"));
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            $context["hasSublist"] =  !twig_test_empty($this->getAttribute($context["category"], "children", array()));
            // line 18
            echo "        ";
            $context["categoryAttr"] = ($context["categoriesAttr"] ?? null);
            // line 19
            echo "        ";
            if (($context["hasSublist"] ?? null)) {
                // line 20
                echo "            ";
                $context["categoryAttr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["categoryAttr"] ?? null), array("~class" => " main-menu__item--ancestor"));
                // line 23
                echo "        ";
            }
            // line 24
            echo "        ";
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("category" => $context["category"]));
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["block"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                if ($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "visible", array())) {
                    // line 26
                    if ((( !twig_test_empty($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "use_for", array())) && twig_in_filter($this->getAttribute($context["category"], "identifier", array()), twig_get_array_keys_filter($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "use_for", array())))) || ( !twig_test_empty($this->getAttribute($this->getAttribute(                    // line 27
$context["child"], "vars", array()), "not_use_for", array())) && !twig_in_filter($this->getAttribute($context["category"], "identifier", array()), twig_get_array_keys_filter($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "not_use_for", array())))))) {
                        // line 28
                        echo "                    ";
                        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => ($context["categoryAttr"] ?? null)));
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 34
    public function block__web_catalog_menu_first_level_item_simple_widget($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " main-menu__item--floated-dropdown"));
        // line 38
        echo "    ";
        $context["sub_block"] = "_web_catalog_menu_main_menu_sub_block_simple";
        // line 39
        echo "    ";
        $this->displayBlock("_web_catalog_menu_main_menu_link", $context, $blocks);
        echo "
";
    }

    // line 42
    public function block__web_catalog_menu_first_level_item_head_widget($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => ((" main-menu__item--" . (((twig_length_filter($this->env, $this->getAttribute(        // line 44
($context["block"] ?? null), "children", array())) == 1)) ? ("floated") : ("centered"))) . "-dropdown")));
        // line 46
        echo "    ";
        $context["sub_block"] = "_web_catalog_menu_main_menu_sub_block_head";
        // line 47
        echo "    ";
        $this->displayBlock("_web_catalog_menu_main_menu_link", $context, $blocks);
        echo "
";
    }

    // line 50
    public function block__web_catalog_menu_first_level_item_mega_widget($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        $context["sub_block"] = "_web_catalog_menu_main_menu_sub_block_mega";
        // line 52
        echo "    ";
        $this->displayBlock("_web_catalog_menu_main_menu_link", $context, $blocks);
        echo "
";
    }

    // line 55
    public function block__web_catalog_menu_second_level_item_simple_widget($context, array $blocks = array())
    {
        // line 56
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
            // line 57
            echo "        ";
            $this->displayBlock("_web_catalog_menu_second_level_item", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 61
    public function block__web_catalog_menu_second_level_item_head_widget($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        $context["label"] = $this->getAttribute(($context["category"] ?? null), "label", array());
        // line 63
        echo "    ";
        ob_start();
        // line 64
        echo "        ";
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
            // line 65
            echo "            ";
            $this->displayBlock("_web_catalog_menu_second_level_item", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    ";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 68
        echo "    ";
        $this->displayBlock("_web_catalog_menu_second_level_column", $context, $blocks);
        echo "
";
    }

    // line 71
    public function block__web_catalog_menu_second_level_sale_head_widget($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        $context["label"] = "On Sale";
        // line 73
        echo "    ";
        ob_start();
        // line 74
        echo "        <li class=\"main-menu-column__item\">
            <a class=\"main-menu-column__link\" href=\"#\">
                <img class=\"main-menu-column__image\"
                     src=\"";
        // line 77
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2a508b3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2a508b3_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2a508b3_adv_3_1.jpg");
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
        } else {
            // asset "2a508b3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2a508b3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2a508b3.jpg");
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
        }
        unset($context["asset_url"]);
        // line 78
        echo "                \">
            </a>
        </li>
    ";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 82
        echo "    ";
        $this->displayBlock("_web_catalog_menu_second_level_column", $context, $blocks);
        echo "
";
    }

    // line 85
    public function block__web_catalog_menu_second_level_sale_mega_widget($context, array $blocks = array())
    {
        // line 86
        echo "    ";
        $context["label"] = "On Sale";
        // line 87
        echo "    ";
        ob_start();
        // line 88
        echo "        <li class=\"main-menu-column__item\">
            <a class=\"main-menu-column__link\" href=\"#\">
                <img class=\"main-menu-column__image\"
                     src=\"";
        // line 91
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e72b1f9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e72b1f9_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/e72b1f9_adv_1_1.jpg");
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
        } else {
            // asset "e72b1f9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e72b1f9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/e72b1f9.jpg");
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
        }
        unset($context["asset_url"]);
        // line 92
        echo "                \">
            </a>
        </li>
        ";
        // line 96
        echo "            ";
        // line 97
        echo "                ";
        // line 100
        echo "            ";
        // line 101
        echo "        ";
        // line 102
        echo "    ";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 103
        echo "    ";
        $this->displayBlock("_web_catalog_menu_second_level_column", $context, $blocks);
        echo "
";
    }

    // line 106
    public function block__web_catalog_menu_second_level_item_mega_widget($context, array $blocks = array())
    {
        // line 107
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
            // line 108
            echo "        ";
            $context["two_column"] = ($this->getAttribute($context["loop"], "index", array()) == 1);
            // line 109
            echo "        ";
            $context["hasSublist"] =  !twig_test_empty($this->getAttribute($context["category"], "children", array()));
            // line 110
            echo "
        ";
            // line 111
            $context["label"] = $this->getAttribute($context["category"], "label", array());
            // line 112
            echo "        ";
            $context["addClass"] = ((($context["two_column"] ?? null)) ? ("main-menu-column--splited") : (""));
            // line 113
            echo "        ";
            $context["contentTag"] = "div";
            // line 114
            echo "        ";
            ob_start();
            // line 115
            echo "            ";
            if (($context["hasSublist"] ?? null)) {
                // line 116
                echo "                ";
                $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("categories" => $this->getAttribute(                // line 117
$context["category"], "children", array()), "two_column" =>                 // line 118
($context["two_column"] ?? null)));
                // line 120
                echo "                ";
                $this->displayBlock("container_widget", $context, $blocks);
                echo "
            ";
            }
            // line 122
            echo "        ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 123
            echo "        ";
            $this->displayBlock("_web_catalog_menu_second_level_column", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 127
    public function block__web_catalog_menu_third_level_item_mega_widget($context, array $blocks = array())
    {
        // line 128
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
            // line 129
            echo "        ";
            if ((($context["two_column"] ?? null) || $this->getAttribute($context["loop"], "first", array()))) {
                // line 130
                echo "        <ul class=\"main-menu-column__inner-";
                echo ((($this->getAttribute($context["loop"], "index", array()) % 2)) ? ("left") : ("right"));
                echo "\">
        ";
            }
            // line 132
            echo "            ";
            $this->displayBlock("_web_catalog_menu_second_level_item", $context, $blocks);
            echo "
            ";
            // line 133
            $this->displayBlock("_web_catalog_menu_children", $context, $blocks);
            echo "
            ";
            // line 134
            $context["hasSublist"] =  !twig_test_empty($this->getAttribute($context["category"], "children", array()));
            // line 135
            echo "            ";
            if (($context["hasSublist"] ?? null)) {
                // line 136
                echo "                ";
                $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("categories" => $this->getAttribute($context["category"], "children", array())));
                // line 137
                echo "                ";
                $this->displayBlock("container_widget", $context, $blocks);
                echo "
            ";
            }
            // line 139
            echo "        ";
            if ((($context["two_column"] ?? null) || $this->getAttribute($context["loop"], "last", array()))) {
                // line 140
                echo "        </ul>
        ";
            }
            // line 142
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

    // line 145
    public function block__web_catalog_menu_four_level_item_mega_widget($context, array $blocks = array())
    {
        // line 146
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
            // line 147
            echo "        ";
            $this->displayBlock("_web_catalog_menu_third_level_item", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 151
    public function block__web_catalog_menu_main_menu_link($context, array $blocks = array())
    {
        // line 152
        echo "    <li ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 153
        $context["hasSublist"] =  !twig_test_empty($this->getAttribute(($context["category"] ?? null), "children", array()));
        // line 154
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uriForPath", array(0 => $this->getAttribute(($context["category"] ?? null), "url", array())), "method"), "html", null, true);
        echo "\"
           class=\"main-menu__link\">
            <span class=\"main-menu__text\">";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "label", array()), "html", null, true);
        echo "</span>
            ";
        // line 157
        if (($context["hasSublist"] ?? null)) {
            // line 158
            echo "                <span class=\"main-menu__taptick\">
                    <i class=\"fa-angle-down fa--no-offset\"></i>
                </span>
            ";
        }
        // line 162
        echo "        </a>
        ";
        // line 163
        if (($context["hasSublist"] ?? null)) {
            // line 164
            echo "            <button class=\"main-menu__button-arrow\"
                    data-toggle=\"dropdown\"
                    data-go-to=\"next\"
            >
                <i class=\"fa-angle-down fa--no-offset\"></i>
            </button>
            ";
            // line 170
            $this->displayBlock(($context["sub_block"] ?? null), $context, $blocks);
            echo "
        ";
        }
        // line 172
        echo "    </li>
";
    }

    // line 175
    public function block__web_catalog_menu_main_menu_sub_block_simple($context, array $blocks = array())
    {
        // line 176
        echo "    <div class=\"main-menu__sublist-container\"
         data-header-row-toggle
         data-scroll=\"true\">
        <div class=\"main-menu-columns main-menu-columns--single\">
            <div class=\"main-menu-column\">
                <ul class=\"main-menu-column__inner\">
                    ";
        // line 182
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("categories" => $this->getAttribute(($context["category"] ?? null), "children", array())));
        // line 183
        echo "                    ";
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
                </ul>
            </div>
        </div>
    </div>
";
    }

    // line 190
    public function block__web_catalog_menu_main_menu_sub_block_head($context, array $blocks = array())
    {
        // line 191
        echo "    <div class=\"main-menu__sublist-container\"
         data-header-row-toggle
         data-scroll=\"true\">
        <div class=\"main-menu-columns\">
            ";
        // line 195
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("categories" => $this->getAttribute(($context["category"] ?? null), "children", array())));
        // line 196
        echo "            ";
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
        </div>
    </div>
";
    }

    // line 201
    public function block__web_catalog_menu_second_level_column($context, array $blocks = array())
    {
        // line 202
        echo "    <div class=\"main-menu-column ";
        echo twig_escape_filter($this->env, ((array_key_exists("addClass", $context)) ? (_twig_default_filter(($context["addClass"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
        <p class=\"main-menu-column__title\">
            ";
        // line 204
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "
        </p>
        <";
        // line 206
        echo twig_escape_filter($this->env, ((array_key_exists("contentTag", $context)) ? (_twig_default_filter(($context["contentTag"] ?? null), "ul")) : ("ul")), "html", null, true);
        echo " class=\"main-menu-column__inner\">
            ";
        // line 207
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "
        </";
        // line 208
        echo twig_escape_filter($this->env, ((array_key_exists("contentTag", $context)) ? (_twig_default_filter(($context["contentTag"] ?? null), "ul")) : ("ul")), "html", null, true);
        echo ">
    </div>
";
    }

    // line 212
    public function block__web_catalog_menu_main_menu_sub_block_mega($context, array $blocks = array())
    {
        // line 213
        echo "    <div class=\"main-menu__sublist-container\"
         data-header-row-toggle
         data-scroll=\"true\">
        <div class=\"main-menu-columns\">
            ";
        // line 217
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["block"] ?? null), array("categories" => $this->getAttribute(($context["category"] ?? null), "children", array())));
        // line 218
        echo "            ";
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
        </div>
    </div>
";
    }

    // line 223
    public function block__web_catalog_menu_second_level_item($context, array $blocks = array())
    {
        // line 224
        echo "    <li class=\"main-menu-column__item\">
        <a class=\"main-menu-column__link\" href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uriForPath", array(0 => $this->getAttribute(($context["category"] ?? null), "url", array())), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "label", array()), "html", null, true);
        echo "</a>
    </li>
";
    }

    // line 229
    public function block__web_catalog_menu_third_level_item($context, array $blocks = array())
    {
        // line 230
        echo "    <li class=\"main-menu-column__subitem\">
        <a class=\"main-menu-column__link\" href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "uriForPath", array(0 => $this->getAttribute(($context["category"] ?? null), "url", array())), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? null), "label", array()), "html", null, true);
        echo "</a>
    </li>
";
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  795 => 231,  792 => 230,  789 => 229,  780 => 225,  777 => 224,  774 => 223,  765 => 218,  763 => 217,  757 => 213,  754 => 212,  747 => 208,  743 => 207,  739 => 206,  734 => 204,  728 => 202,  725 => 201,  716 => 196,  714 => 195,  708 => 191,  705 => 190,  694 => 183,  692 => 182,  684 => 176,  681 => 175,  676 => 172,  671 => 170,  663 => 164,  661 => 163,  658 => 162,  652 => 158,  650 => 157,  646 => 156,  640 => 154,  638 => 153,  633 => 152,  630 => 151,  611 => 147,  593 => 146,  590 => 145,  574 => 142,  570 => 140,  567 => 139,  561 => 137,  558 => 136,  555 => 135,  553 => 134,  549 => 133,  544 => 132,  538 => 130,  535 => 129,  517 => 128,  514 => 127,  495 => 123,  492 => 122,  486 => 120,  484 => 118,  483 => 117,  481 => 116,  478 => 115,  475 => 114,  472 => 113,  469 => 112,  467 => 111,  464 => 110,  461 => 109,  458 => 108,  440 => 107,  437 => 106,  430 => 103,  427 => 102,  425 => 101,  423 => 100,  421 => 97,  419 => 96,  414 => 92,  403 => 91,  398 => 88,  395 => 87,  392 => 86,  389 => 85,  382 => 82,  376 => 78,  365 => 77,  360 => 74,  357 => 73,  354 => 72,  351 => 71,  344 => 68,  341 => 67,  324 => 65,  306 => 64,  303 => 63,  300 => 62,  297 => 61,  278 => 57,  260 => 56,  257 => 55,  250 => 52,  247 => 51,  244 => 50,  237 => 47,  234 => 46,  232 => 44,  230 => 43,  227 => 42,  220 => 39,  217 => 38,  214 => 35,  211 => 34,  196 => 28,  194 => 27,  193 => 26,  187 => 25,  184 => 24,  181 => 23,  178 => 20,  175 => 19,  172 => 18,  170 => 17,  165 => 16,  162 => 13,  158 => 11,  155 => 10,  152 => 9,  145 => 5,  141 => 4,  138 => 3,  135 => 2,  132 => 1,  128 => 229,  125 => 228,  123 => 223,  120 => 222,  118 => 212,  115 => 211,  113 => 201,  110 => 200,  108 => 190,  105 => 189,  103 => 175,  100 => 174,  98 => 151,  95 => 150,  93 => 145,  90 => 144,  88 => 127,  85 => 126,  83 => 106,  80 => 105,  78 => 85,  75 => 84,  73 => 71,  70 => 70,  68 => 61,  65 => 60,  63 => 55,  60 => 54,  58 => 50,  55 => 49,  53 => 42,  50 => 41,  48 => 34,  45 => 33,  43 => 9,  40 => 8,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/WebCatalogBundle/Resources/views/layouts/blank/page/main_menu.html.twig");
    }
}

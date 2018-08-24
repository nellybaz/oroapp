<?php

/* OroFrontendBundle:layouts/blank/imports/style-book:layout.html.twig */
class __TwigTemplate_48e55be4a64fcd6095b40d50cbc4c78662821ea729f1570c50ede3054e673729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_style_book_init_code_highlighter_widget' => array($this, 'block__style_book_init_code_highlighter_widget'),
            '_style_book_widget' => array($this, 'block__style_book_widget'),
            '_style_book_container_widget' => array($this, 'block__style_book_container_widget'),
            '_style_book_header_widget' => array($this, 'block__style_book_header_widget'),
            '_style_book_header_inner_widget' => array($this, 'block__style_book_header_inner_widget'),
            '_style_book_groups_nav_container_widget' => array($this, 'block__style_book_groups_nav_container_widget'),
            '_style_book_groups_menu_widget' => array($this, 'block__style_book_groups_menu_widget'),
            'groups_menu_item_widget' => array($this, 'block_groups_menu_item_widget'),
            '_style_book_sticky_panel_widget' => array($this, 'block__style_book_sticky_panel_widget'),
            '_style_book_sticky_panel_content_widget' => array($this, 'block__style_book_sticky_panel_content_widget'),
            '_style_book_sticky_element_widget' => array($this, 'block__style_book_sticky_element_widget'),
            '_style_book_sticky_element_sidebar_widget' => array($this, 'block__style_book_sticky_element_sidebar_widget'),
            '_style_book_main_widget' => array($this, 'block__style_book_main_widget'),
            '_style_book_content_widget' => array($this, 'block__style_book_content_widget'),
            '_style_book_elements_nav_container_widget' => array($this, 'block__style_book_elements_nav_container_widget'),
            '_style_book_elements_nav_title_widget' => array($this, 'block__style_book_elements_nav_title_widget'),
            '_style_book_elements_nav_widget' => array($this, 'block__style_book_elements_nav_widget'),
            'group_element_widget' => array($this, 'block_group_element_widget'),
            'group_element_item_widget' => array($this, 'block_group_element_item_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_style_book_init_code_highlighter_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('_style_book_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('_style_book_container_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('_style_book_header_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('_style_book_header_inner_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('_style_book_groups_nav_container_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('_style_book_groups_menu_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('groups_menu_item_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('_style_book_sticky_panel_widget', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('_style_book_sticky_panel_content_widget', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('_style_book_sticky_element_widget', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('_style_book_sticky_element_sidebar_widget', $context, $blocks);
        // line 117
        echo "
";
        // line 118
        $this->displayBlock('_style_book_main_widget', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('_style_book_content_widget', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('_style_book_elements_nav_container_widget', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('_style_book_elements_nav_title_widget', $context, $blocks);
        // line 167
        echo "
";
        // line 168
        $this->displayBlock('_style_book_elements_nav_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('group_element_widget', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('group_element_item_widget', $context, $blocks);
    }

    // line 1
    public function block__style_book_init_code_highlighter_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bowerassets/prism/prism.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bowerassets/prism/components/prism-scss.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bowerassets/prism/plugins/normalize-whitespace/prism-normalize-whitespace.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 7
    public function block__style_book_widget($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("id" => "container", "~class" => " wrapper"));
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
    public function block__style_book_container_widget($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-container"));
        // line 22
        echo "
    <div ";
        // line 23
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div class=\"page-area-container\">
            ";
        // line 25
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
        </div>
    </div>
";
    }

    // line 30
    public function block__style_book_header_widget($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-header"));
        // line 34
        echo "
    <div ";
        // line 35
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 36
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 40
    public function block__style_book_header_inner_widget($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-header__inner"));
        // line 44
        echo "
    <div ";
        // line 45
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 46
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 50
    public function block__style_book_groups_nav_container_widget($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " style-book-groups-nav"));
        // line 54
        echo "
    <div ";
        // line 55
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 56
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 60
    public function block__style_book_groups_menu_widget($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " main-menu"));
        // line 64
        echo "
    <ul ";
        // line 65
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 66
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </ul>
";
    }

    // line 70
    public function block_groups_menu_item_widget($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => (" main-menu__item" . ((        // line 72
($context["isActive"] ?? null)) ? (" active") : ("")))));
        // line 74
        echo "    <li ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_frontend_style_book_group", array("group" => ($context["group"] ?? null))), "html", null, true);
        echo "\" class=\"main-menu__link\">
            <span class=\"main-menu__text\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
        echo "</span>
        </a>
    </li>
";
    }

    // line 81
    public function block__style_book_sticky_panel_widget($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => array("view" => "orofrontend/default/js/app/views/sticky-panel-view"), "~class" => " sticky-panel"));
        // line 89
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 90
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 94
    public function block__style_book_sticky_panel_content_widget($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " sticky-panel__content"));
        // line 98
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</div>
";
    }

    // line 101
    public function block__style_book_sticky_element_widget($context, array $blocks = array())
    {
        // line 102
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " style-book-sticky-elements-nav"));
        // line 105
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 106
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 110
    public function block__style_book_sticky_element_sidebar_widget($context, array $blocks = array())
    {
        // line 111
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("id" => "style-book-sticky-elements-nav", "~class" => " style-book-sticky-elements-nav__sidebar"));
        // line 115
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "></div>
";
    }

    // line 118
    public function block__style_book_main_widget($context, array $blocks = array())
    {
        // line 119
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " style-book-main"));
        // line 122
        echo "
    <div ";
        // line 123
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 124
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 128
    public function block__style_book_content_widget($context, array $blocks = array())
    {
        // line 129
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-content"));
        // line 132
        echo "
    ";
        // line 133
        if ($this->getAttribute(($context["blocks"] ?? null), "style_book_sidebar", array(), "any", true, true)) {
            // line 134
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " page-content--has-sidebar-right"));
            // line 137
            echo "    ";
        }
        // line 138
        echo "
    <div ";
        // line 139
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 140
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 144
    public function block__style_book_elements_nav_container_widget($context, array $blocks = array())
    {
        // line 145
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " primary-menu-container", "data-sticky" => array("toggleClass" => "sticked", "placeholderId" => "style-book-sticky-elements-nav")));
        // line 152
        echo "
    <div ";
        // line 153
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 154
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 158
    public function block__style_book_elements_nav_title_widget($context, array $blocks = array())
    {
        // line 159
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " primary-menu-title"));
        // line 162
        echo "
    <h3 ";
        // line 163
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro_frontend_style_book.nav.title"), "html", null, true);
        echo "
    </h3>
";
    }

    // line 168
    public function block__style_book_elements_nav_widget($context, array $blocks = array())
    {
        // line 169
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("id" => "style-book-scrollspy-nav", "~class" => " style-book-elements-nav", "data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => array("view" => "orofrontend/js/app/views/style-book-elements-navigation-view")));
        // line 177
        echo "
    <div ";
        // line 178
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "></div>
";
    }

    // line 181
    public function block_group_element_widget($context, array $blocks = array())
    {
        // line 182
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " style-book-group-element", "data-style-book-element" => array("id" =>         // line 185
($context["anchor"] ?? null), "label" =>         // line 186
($context["label"] ?? null))));
        // line 189
        echo "
    <div ";
        // line 190
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <h2 id=\"";
        // line 191
        echo twig_escape_filter($this->env, ($context["anchor"] ?? null), "html", null, true);
        echo "\" class=\"style-book-title\">";
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</h2>
        ";
        // line 192
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 196
    public function block_group_element_item_widget($context, array $blocks = array())
    {
        // line 197
        echo "    <div class=\"style-book-group-element__item\">
    ";
        // line 198
        if ((($context["label"] ?? null) && ($context["anchor"] ?? null))) {
            // line 199
            echo "        ";
            $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("id" =>             // line 200
($context["anchor"] ?? null), "~class" => " style-book-group-element__title", "data-style-book-element" => array("id" =>             // line 203
($context["anchor"] ?? null), "label" =>             // line 204
($context["label"] ?? null), "subTreeLvl" =>             // line 205
($context["subTreeLvl"] ?? null))));
            // line 208
            echo "        <h3 ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</h3>
    ";
        }
        // line 210
        echo "    ";
        if (($context["description"] ?? null)) {
            // line 211
            echo "        <div class=\"style-book-group-element__description\">
            ";
            // line 212
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["description"] ?? null));
            echo "
        </div>
    ";
        }
        // line 215
        echo "
    ";
        // line 216
        $context["content"] = $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        // line 217
        echo "
    ";
        // line 218
        if ((($context["source"] ?? null) == true)) {
            // line 219
            echo "        <div class=\"style-book-group-element__source\">
            <pre>
                <code class=\"style-book-group-element__code language-";
            // line 221
            echo twig_escape_filter($this->env, ($context["source_language"] ?? null), "html", null, true);
            echo "\">";
            // line 222
            ob_start();
            // line 223
            echo twig_escape_filter($this->env, twig_trim_filter(($context["content"] ?? null)));
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 225
            echo "</code>
            </pre>
        </div>
    ";
        }
        // line 229
        echo "
    ";
        // line 230
        if ((($context["preview"] ?? null) == true)) {
            // line 231
            echo "        <div class=\"style-book-group-element__preview\">
            ";
            // line 232
            echo ($context["content"] ?? null);
            echo "
        </div>
    ";
        }
        // line 235
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroFrontendBundle:layouts/blank/imports/style-book:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  571 => 235,  565 => 232,  562 => 231,  560 => 230,  557 => 229,  551 => 225,  548 => 223,  546 => 222,  543 => 221,  539 => 219,  537 => 218,  534 => 217,  532 => 216,  529 => 215,  523 => 212,  520 => 211,  517 => 210,  509 => 208,  507 => 205,  506 => 204,  505 => 203,  504 => 200,  502 => 199,  500 => 198,  497 => 197,  494 => 196,  487 => 192,  481 => 191,  477 => 190,  474 => 189,  472 => 186,  471 => 185,  469 => 182,  466 => 181,  460 => 178,  457 => 177,  454 => 169,  451 => 168,  444 => 164,  440 => 163,  437 => 162,  434 => 159,  431 => 158,  424 => 154,  420 => 153,  417 => 152,  414 => 145,  411 => 144,  404 => 140,  400 => 139,  397 => 138,  394 => 137,  391 => 134,  389 => 133,  386 => 132,  383 => 129,  380 => 128,  373 => 124,  369 => 123,  366 => 122,  363 => 119,  360 => 118,  353 => 115,  350 => 111,  347 => 110,  340 => 106,  335 => 105,  332 => 102,  329 => 101,  320 => 98,  317 => 95,  314 => 94,  307 => 90,  302 => 89,  299 => 82,  296 => 81,  288 => 76,  284 => 75,  279 => 74,  277 => 72,  275 => 71,  272 => 70,  265 => 66,  261 => 65,  258 => 64,  255 => 61,  252 => 60,  245 => 56,  241 => 55,  238 => 54,  235 => 51,  232 => 50,  225 => 46,  221 => 45,  218 => 44,  215 => 41,  212 => 40,  205 => 36,  201 => 35,  198 => 34,  195 => 31,  192 => 30,  184 => 25,  179 => 23,  176 => 22,  173 => 19,  170 => 18,  163 => 14,  159 => 13,  156 => 12,  153 => 8,  150 => 7,  144 => 4,  140 => 3,  135 => 2,  132 => 1,  128 => 196,  125 => 195,  123 => 181,  120 => 180,  118 => 168,  115 => 167,  113 => 158,  110 => 157,  108 => 144,  105 => 143,  103 => 128,  100 => 127,  98 => 118,  95 => 117,  93 => 110,  90 => 109,  88 => 101,  85 => 100,  83 => 94,  80 => 93,  78 => 81,  75 => 80,  73 => 70,  70 => 69,  68 => 60,  65 => 59,  63 => 50,  60 => 49,  58 => 40,  55 => 39,  53 => 30,  50 => 29,  48 => 18,  45 => 17,  43 => 7,  40 => 6,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFrontendBundle:layouts/blank/imports/style-book:layout.html.twig", "");
    }
}

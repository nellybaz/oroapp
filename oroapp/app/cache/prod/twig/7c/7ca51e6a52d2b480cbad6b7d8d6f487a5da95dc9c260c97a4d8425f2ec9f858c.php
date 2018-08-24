<?php

/* OroProductBundle:layouts/blank/imports/oro_product_grid:grid.html.twig */
class __TwigTemplate_2c117765d7856dd1f7749927c7657ae48b3a479d57f39d0f536861e5c7c0ca36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_product_grid__datagrid_widget' => array($this, 'block___oro_product_grid__datagrid_widget'),
            '__oro_product_grid__datagrid_toolbar_filter_container_widget' => array($this, 'block___oro_product_grid__datagrid_toolbar_filter_container_widget'),
            '__oro_product_grid__datagrid_toolbar_pagination_widget' => array($this, 'block___oro_product_grid__datagrid_toolbar_pagination_widget'),
            '__oro_product_grid__datagrid_toolbar_page_size_widget' => array($this, 'block___oro_product_grid__datagrid_toolbar_page_size_widget'),
            '__oro_product_grid__datagrid_toolbar_actions_widget' => array($this, 'block___oro_product_grid__datagrid_toolbar_actions_widget'),
            '_product_mass_actions_container_widget' => array($this, 'block__product_mass_actions_container_widget'),
            '_product_mass_actions_sticky_container_widget' => array($this, 'block__product_mass_actions_sticky_container_widget'),
            '_product_datagrid_toolbar_display_options_widget' => array($this, 'block__product_datagrid_toolbar_display_options_widget'),
            '_product_grid_container_widget' => array($this, 'block__product_grid_container_widget'),
            '_product_require_js_config_widget' => array($this, 'block__product_require_js_config_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_product_grid__datagrid_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('__oro_product_grid__datagrid_toolbar_filter_container_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('__oro_product_grid__datagrid_toolbar_pagination_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('__oro_product_grid__datagrid_toolbar_page_size_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('__oro_product_grid__datagrid_toolbar_actions_widget', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('_product_mass_actions_container_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('_product_mass_actions_sticky_container_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('_product_datagrid_toolbar_display_options_widget', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('_product_grid_container_widget', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('_product_require_js_config_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_product_grid__datagrid_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["compact_view"] = "";
        // line 3
        echo "    ";
        $context["buttonsId"] = "datagrid_row_product_line_item_form_buttons";
        // line 4
        echo "    ";
        $context["themeOptions"] = twig_array_merge((($this->getAttribute(($context["grid_render_parameters"] ?? null), "themeOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["grid_render_parameters"] ?? null), "themeOptions", array()), array())) : (array())), array("headerHide" => true, "disableGridScrollbar" => true, "disableStickedScrollbar" => true, "currentRowView" =>         // line 8
($context["current_row_view"] ?? null), "bodyClassName" => ("grid-body product-list product-list--" .         // line 9
($context["current_row_view"] ?? null)), "rowClassName" => (("grid-row product-item product-item--" .         // line 10
($context["current_row_view"] ?? null)) . ($context["compact_view"] ?? null)), "rowAttributes" => array("data-layout-model" => "productModel")));
        // line 15
        echo "    ";
        $context["grid_render_parameters"] = twig_array_merge(($context["grid_render_parameters"] ?? null), array("themeOptions" => ($context["themeOptions"] ?? null)));
        // line 16
        echo "
    ";
        // line 17
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 20
    public function block___oro_product_grid__datagrid_toolbar_filter_container_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " datagrid-toolbar__panel", "data-role" => "filter-container"));
        // line 25
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "></div>
";
    }

    // line 28
    public function block___oro_product_grid__datagrid_toolbar_pagination_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " datagrid-tool oro-pagination", "data-grid-pagination" => ""));
        // line 33
        echo "
    ";
        // line 34
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 37
    public function block___oro_product_grid__datagrid_toolbar_page_size_widget($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => " datagrid-tool page-size", "data-grid-pagesize" => ""));
        // line 42
        echo "
    ";
        // line 43
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 46
    public function block___oro_product_grid__datagrid_toolbar_actions_widget($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 48
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " catalog__filter-controls__item actions-panel form-horizontal"), "data-grid-actions-panel" => ""));
        // line 51
        echo "
    ";
        // line 52
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 55
    public function block__product_mass_actions_container_widget($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "datagrid-tool product-action-area", "data-mass-actions-container" => ""));
        // line 60
        echo "
    <div ";
        // line 61
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "></div>
";
    }

    // line 64
    public function block__product_mass_actions_sticky_container_widget($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("~class" => "product-action-area hidden", "data-mass-actions-sticky-container" => "", "data-sticky-target" => "bottom-sticky-panel", "data-sticky" => array("alwaysInSticky" => true)));
        // line 73
        echo "
    <div ";
        // line 74
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "></div>
";
    }

    // line 77
    public function block__product_datagrid_toolbar_display_options_widget($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        $context["gridName"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["block"] ?? null), "vars", array()), "datagrid", array(), "array"), "name", array());
        // line 79
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroproduct/js/app/components/catalog-switch-component", "data-page-component-options" => array("parameterName" =>         // line 82
($context["gridName"] ?? null)), "data-server-render" => "", "class" => ((($this->getAttribute(        // line 85
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datagrid-tool display-options")));
        // line 87
        echo "    ";
        $context["toolbarPosition"] = (($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "data-grid-toolbar", array(), "array"), "")) : (""));
        // line 88
        echo "
    ";
        // line 89
        if ((($context["toolbarPosition"] ?? null) != "bottom")) {
            // line 90
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 91
            $context["row_view_key"] = twig_constant("Oro\\Bundle\\ProductBundle\\DataGrid\\DataGridThemeHelper::GRID_THEME_PARAM_NAME");
            // line 92
            echo "            <span class=\"datagrid-tool__label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.frontend.grid.toolbar.display.label"), "html", null, true);
            echo ": &nbsp;</span>
            <div class=\"btn-group catalog-switcher\">
                ";
            // line 94
            $context["url_prefix"] = ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "baseUrl", array()) . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "pathInfo", array()));
            // line 95
            echo "                ";
            $context["query_parameters"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "all", array(), "method");
            // line 96
            echo "
                ";
            // line 97
            $context["row_view"] = twig_constant("Oro\\Bundle\\ProductBundle\\DataGrid\\DataGridThemeHelper::VIEW_TILES");
            // line 98
            echo "                ";
            $context["view_trigger"] = array("row-view" => "gallery-view");
            // line 101
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ((($context["url_prefix"] ?? null) . "?") . twig_urlencode_filter(twig_array_merge(($context["query_parameters"] ?? null), array(($context["gridName"] ?? null) => array(($context["row_view_key"] ?? null) => ($context["row_view"] ?? null)))))), "html", null, true);
            echo "\"
                   class=\"btn btn--default btn--size-s ";
            // line 102
            if ((($context["current_row_view"] ?? null) == ($context["row_view"] ?? null))) {
                echo "active";
            }
            echo "\" data-catalog-view-trigger=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["view_trigger"] ?? null)), "html", null, true);
            echo "\">
                        <i class=\"fa-th fa--no-offset\"></i>
                </a>
                ";
            // line 105
            $context["row_view"] = twig_constant("Oro\\Bundle\\ProductBundle\\DataGrid\\DataGridThemeHelper::VIEW_GRID");
            // line 106
            echo "                ";
            $context["view_trigger"] = array("row-view" => "list-view");
            // line 109
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ((($context["url_prefix"] ?? null) . "?") . twig_urlencode_filter(twig_array_merge(($context["query_parameters"] ?? null), array(($context["gridName"] ?? null) => array(($context["row_view_key"] ?? null) => ($context["row_view"] ?? null)))))), "html", null, true);
            echo "\"
                   class=\"btn btn--default btn--size-s ";
            // line 110
            if ((($context["current_row_view"] ?? null) == ($context["row_view"] ?? null))) {
                echo "active";
            }
            echo "\"
                   data-catalog-view-trigger=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["view_trigger"] ?? null)), "html", null, true);
            echo "\">
                        <i class=\"fa-th-list fa--no-offset\"></i>
                </a>
                ";
            // line 114
            $context["row_view"] = twig_constant("Oro\\Bundle\\ProductBundle\\DataGrid\\DataGridThemeHelper::VIEW_LIST");
            // line 115
            echo "                ";
            $context["view_trigger"] = array("row-view" => "no-image-view");
            // line 118
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ((($context["url_prefix"] ?? null) . "?") . twig_urlencode_filter(twig_array_merge(($context["query_parameters"] ?? null), array(($context["gridName"] ?? null) => array(($context["row_view_key"] ?? null) => ($context["row_view"] ?? null)))))), "html", null, true);
            echo "\"
                   class=\"btn btn--default btn--size-s ";
            // line 119
            if ((($context["current_row_view"] ?? null) == ($context["row_view"] ?? null))) {
                echo "active";
            }
            echo "\" data-catalog-view-trigger=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["view_trigger"] ?? null)), "html", null, true);
            echo "\">
                        <i class=\"fa-bars fa--no-offset\"></i>
                </a>
            </div>
        </div>
    ";
        }
    }

    // line 127
    public function block__product_grid_container_widget($context, array $blocks = array())
    {
        // line 128
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => array("view" => "orofrontend/default/js/app/views/footer-align-view", "elements" => array("items" => ".product-item--gallery-view", "footer" => ".product-item__qty"))));
        // line 138
        echo "    <div ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 139
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 143
    public function block__product_require_js_config_widget($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        $context["attr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["attr"] ?? null), array("data-grid-toolbar" => "top"));
        // line 147
        echo "
    ";
        // line 148
        $context["attr"] =         $this->renderBlock("block_attributes", $context, $blocks);
        // line 149
        echo "    <script>
        require({
            config: {
                'orofrontend/js/app/datafilter/frontend-collection-filters-manager': {
                    templateData: {
                        attributes: '";
        // line 154
        echo ($context["attr"] ?? null);
        echo "'
                    }
                }
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/imports/oro_product_grid:grid.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  337 => 154,  330 => 149,  328 => 148,  325 => 147,  322 => 144,  319 => 143,  312 => 139,  307 => 138,  304 => 128,  301 => 127,  286 => 119,  281 => 118,  278 => 115,  276 => 114,  270 => 111,  264 => 110,  259 => 109,  256 => 106,  254 => 105,  244 => 102,  239 => 101,  236 => 98,  234 => 97,  231 => 96,  228 => 95,  226 => 94,  220 => 92,  218 => 91,  213 => 90,  211 => 89,  208 => 88,  205 => 87,  203 => 85,  202 => 82,  200 => 79,  197 => 78,  194 => 77,  188 => 74,  185 => 73,  182 => 65,  179 => 64,  173 => 61,  170 => 60,  167 => 56,  164 => 55,  158 => 52,  155 => 51,  153 => 48,  151 => 47,  148 => 46,  142 => 43,  139 => 42,  136 => 38,  133 => 37,  127 => 34,  124 => 33,  121 => 29,  118 => 28,  111 => 25,  108 => 21,  105 => 20,  99 => 17,  96 => 16,  93 => 15,  91 => 10,  90 => 9,  89 => 8,  87 => 4,  84 => 3,  81 => 2,  78 => 1,  74 => 143,  71 => 142,  69 => 127,  66 => 126,  64 => 77,  61 => 76,  59 => 64,  56 => 63,  54 => 55,  51 => 54,  49 => 46,  46 => 45,  44 => 37,  41 => 36,  39 => 28,  36 => 27,  34 => 20,  31 => 19,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/imports/oro_product_grid:grid.html.twig", "");
    }
}

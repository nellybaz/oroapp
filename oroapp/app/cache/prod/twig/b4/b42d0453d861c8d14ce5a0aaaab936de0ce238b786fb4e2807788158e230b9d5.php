<?php

/* OroProductBundle:layouts/blank/imports/oro_datagrid_server_render:server_render_datagrid.html.twig */
class __TwigTemplate_69fae345246a5a4f36d85ad215f59001aa994e5f9872f23e780a28607dd5a0ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__oro_datagrid_server_render__datagrid_widget' => array($this, 'block___oro_datagrid_server_render__datagrid_widget'),
            '__oro_datagrid_server_render__datagrid_header_row_widget' => array($this, 'block___oro_datagrid_server_render__datagrid_header_row_widget'),
            '__oro_datagrid_server_render__datagrid_header_cell_widget' => array($this, 'block___oro_datagrid_server_render__datagrid_header_cell_widget'),
            '__oro_datagrid_server_render__datagrid_row_widget' => array($this, 'block___oro_datagrid_server_render__datagrid_row_widget'),
            '__oro_datagrid_server_render__datagrid_cell_widget' => array($this, 'block___oro_datagrid_server_render__datagrid_cell_widget'),
            '__oro_datagrid_server_render__datagrid_cell_value_widget' => array($this, 'block___oro_datagrid_server_render__datagrid_cell_value_widget'),
            '_product_datagrid_category_product_list_widget' => array($this, 'block__product_datagrid_category_product_list_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('__oro_datagrid_server_render__datagrid_widget', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('__oro_datagrid_server_render__datagrid_header_row_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('__oro_datagrid_server_render__datagrid_header_cell_widget', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('__oro_datagrid_server_render__datagrid_row_widget', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('__oro_datagrid_server_render__datagrid_cell_widget', $context, $blocks);
        // line 188
        $this->displayBlock('__oro_datagrid_server_render__datagrid_cell_value_widget', $context, $blocks);
        // line 192
        $this->displayBlock('_product_datagrid_category_product_list_widget', $context, $blocks);
    }

    // line 1
    public function block___oro_datagrid_server_render__datagrid_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["datagrid"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->getGrid(($context["grid_name"] ?? null), ($context["grid_parameters"] ?? null));
        // line 3
        echo "
    ";
        // line 4
        $context["gridId"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->generateGridElementId(($context["datagrid"] ?? null));
        // line 5
        echo "
    ";
        // line 6
        $context["renderParams"] = ($context["grid_render_parameters"] ?? null);
        // line 7
        echo "
    ";
        // line 8
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("id" =>         // line 9
($context["gridId"] ?? null)));
        // line 11
        echo "
    ";
        // line 12
        $context["gridClass"] = (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : (""));
        // line 13
        echo "    ";
        $context["gridClass"] = (($this->getAttribute(($context["renderParams"] ?? null), "cssClass", array(), "any", true, true)) ? (((($context["gridClass"] ?? null) . " ") . $this->getAttribute(($context["renderParams"] ?? null), "cssClass", array()))) : (($context["gridClass"] ?? null)));
        // line 14
        echo "    ";
        if (($context["gridClass"] ?? null)) {
            // line 15
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" =>             // line 16
($context["gridClass"] ?? null)));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $context["datagridData"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->getGridData(($context["datagrid"] ?? null));
        // line 21
        echo "
    ";
        // line 22
        $context["datagridData"] = twig_array_merge(($context["datagridData"] ?? null), array("backendGrid" => true));
        // line 25
        echo "
    ";
        // line 26
        $context["datagridMetaData"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->getGridMetadata(($context["datagrid"] ?? null));
        // line 27
        echo "
    ";
        // line 28
        $context["datagridMetaData"] = twig_array_merge(($context["datagridMetaData"] ?? null), array("GridView" => "productServerRenderGrid", "PageableCollection" => "productPageableCollection"));
        // line 32
        echo "
    ";
        // line 33
        $context["datagridMetaData"] = twig_array_merge(($context["datagridMetaData"] ?? null), array("GridView" => "productServerRenderGrid", "PageableCollection" => "productPageableCollection", "options" => twig_array_merge($this->getAttribute(        // line 36
($context["datagridMetaData"] ?? null), "options", array()), array("multiSelectRowEnabled" => (($this->getAttribute(        // line 37
($context["renderParams"] ?? null), "multiSelectRowEnabled", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "multiSelectRowEnabled", array())) : (false))))));
        // line 40
        echo "
    ";
        // line 41
        $context["toolbarOptions"] = $this->getAttribute($this->getAttribute(($context["datagridMetaData"] ?? null), "options", array()), "toolbarOptions", array());
        // line 42
        echo "
    ";
        // line 43
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext($this->getAttribute(($context["block"] ?? null), (($context["id"] ?? null) . "_toolbar"), array(), "array"), array("datagrid" => ($context["datagrid"] ?? null)));
        // line 44
        echo "    ";
        $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext($this->getAttribute(($context["block"] ?? null), (($context["id"] ?? null) . "_header_row"), array(), "array"), array("datagrid" => ($context["datagrid"] ?? null)));
        // line 45
        echo "
    ";
        // line 46
        $context["enableFilters"] = (($this->getAttribute(($context["renderParams"] ?? null), "enableFilters", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "enableFilters", array())) : (true));
        // line 47
        echo "
    ";
        // line 48
        $context["options"] = array("el" => ("#" .         // line 49
($context["gridId"] ?? null)), "gridName" => $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName($this->getAttribute(        // line 50
($context["datagrid"] ?? null), "name", array()), $this->getAttribute(($context["datagrid"] ?? null), "scope", array())), "builders" => $this->getAttribute(        // line 51
($context["datagridMetaData"] ?? null), "requireJSModules", array()), "metadata" =>         // line 52
($context["datagridMetaData"] ?? null), "data" =>         // line 53
($context["datagridData"] ?? null), "enableFilters" =>         // line 54
($context["enableFilters"] ?? null), "enableToggleFilters" => (($this->getAttribute(        // line 55
($context["renderParams"] ?? null), "enableToggleFilters", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "enableToggleFilters", array())) : (false)), "filterContainerSelector" => (($this->getAttribute(        // line 56
($context["renderParams"] ?? null), "filterContainerSelector", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "filterContainerSelector", array())) : (null)), "filtersStateElement" => (($this->getAttribute(        // line 57
($context["renderParams"] ?? null), "filtersStateElement", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "filtersStateElement", array())) : (null)), "enableViews" => (($this->getAttribute(        // line 58
($context["renderParams"] ?? null), "enableViews", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "enableViews", array())) : (($context["enableFilters"] ?? null))), "showViewsInNavbar" => (($this->getAttribute(        // line 59
($context["renderParams"] ?? null), "showViewsInNavbar", array(), "any", true, true)) ? ($this->getAttribute(($context["renderParams"] ?? null), "showViewsInNavbar", array())) : (false)), "inputName" => $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridInputName($this->getAttribute(        // line 60
($context["datagrid"] ?? null), "name", array())), "themeOptions" => ((        // line 61
array_key_exists("themeOptions", $context)) ? (_twig_default_filter(($context["themeOptions"] ?? null), array())) : (array())), "toolbarOptions" => (($this->getAttribute(        // line 62
($context["renderParams"] ?? null), "toolbarOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["renderParams"] ?? null), "toolbarOptions", array()), array())) : (array())), "gridMainContainer" => ".oro-datagrid");
        // line 65
        echo "
    <div id=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["gridId"] ?? null), "html", null, true);
        echo "\"
         data-page-component-module=\"oroproduct/js/app/datagrid/backend-datagrid-component\"
         data-server-render=\"\"
         data-page-component-name=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "gridName", array()), "html", null, true);
        echo "\"
         data-page-component-options=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\"
         data-server-render
         data-layout=\"separate\"
            ";
        // line 73
        if ($this->getAttribute(($context["renderParams"] ?? null), "cssClass", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["renderParams"] ?? null), "cssClass", array()), "html", null, true);
            echo "\" ";
        }
        // line 74
        echo "    >
        <div class=\"oro-datagrid\"
             data-skip-input-widgets
             data-layout=\"separate\"
        >

            ";
        // line 80
        if ($this->getAttribute($this->getAttribute(($context["toolbarOptions"] ?? null), "placement", array()), "top", array())) {
            // line 81
            echo "                <div class=\"toolbar\">
                    ";
            // line 82
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($this->getAttribute(($context["block"] ?? null), (($context["id"] ?? null) . "_toolbar"), array(), "array"), 'widget', array("attr" => array("data-grid-toolbar" => "top")));
            echo "
                </div>
            ";
        }
        // line 85
        echo "
            <div class=\"other-scroll-container\">
                <div class=\"other-scroll\"></div>
                ";
        // line 88
        if (( !$this->getAttribute(($context["themeOptions"] ?? null), "disableGridScrollbar", array(), "any", true, true) || ($this->getAttribute(($context["themeOptions"] ?? null), "disableGridScrollbar", array()) == false))) {
            // line 89
            echo "                    <div class=\"grid-scrollable-container\">
                ";
        }
        // line 91
        echo "                    <div class=\"grid-container\">
                        <div class=\"grid table-hover table table-bordered table-condensed\">
                            ";
        // line 93
        if (( !$this->getAttribute(($context["themeOptions"] ?? null), "headerHide", array(), "any", true, true) || ($this->getAttribute(($context["themeOptions"] ?? null), "headerHide", array()) == false))) {
            // line 94
            echo "                                <div class=\"grid-header\">
                                    ";
            // line 95
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($this->getAttribute(($context["block"] ?? null), (($context["id"] ?? null) . "_header_row"), array(), "array"), 'widget');
            echo "
                                </div>
                            ";
        }
        // line 98
        echo "                            ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($this->getAttribute(($context["block"] ?? null), (($context["id"] ?? null) . "_category_product_list"), array(), "array"), 'widget', array("datagridData" =>         // line 99
($context["datagridData"] ?? null), "themeOptions" =>         // line 100
($context["themeOptions"] ?? null), "block" =>         // line 101
($context["block"] ?? null), "id" =>         // line 102
($context["id"] ?? null)));
        // line 103
        echo "

                            <div class=\"grid-footer\"></div>
                        </div>
                    </div>
                ";
        // line 108
        if (( !$this->getAttribute(($context["themeOptions"] ?? null), "disableGridScrollbar", array(), "any", true, true) || ($this->getAttribute(($context["themeOptions"] ?? null), "disableGridScrollbar", array()) == false))) {
            // line 109
            echo "                    </div>
                ";
        }
        // line 111
        echo "                <div class=\"no-data\"></div>
            </div>

            ";
        // line 114
        if ($this->getAttribute($this->getAttribute(($context["toolbarOptions"] ?? null), "placement", array()), "bottom", array())) {
            // line 115
            echo "                <div class=\"toolbar dropup-area\">
                    ";
            // line 116
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($this->getAttribute(($context["block"] ?? null), (($context["id"] ?? null) . "_toolbar"), array(), "array"), 'widget', array("attr" => array("data-grid-toolbar" => "bottom")));
            echo "
                </div>
            ";
        }
        // line 119
        echo "        </div>
    </div>
";
    }

    // line 123
    public function block___oro_datagrid_server_render__datagrid_header_row_widget($context, array $blocks = array())
    {
        // line 124
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 125
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " grid-header-row")));
        // line 127
        echo "
    <div";
        // line 128
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["block"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "visible", array())) {
                // line 130
                echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context["child"], 'widget');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "    </div>
";
    }

    // line 135
    public function block___oro_datagrid_server_render__datagrid_header_cell_widget($context, array $blocks = array())
    {
        // line 136
        echo "    ";
        $context["columnAttributes"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->getColumnAttributes(($context["datagrid"] ?? null), ($context["column_name"] ?? null));
        // line 137
        echo "
    ";
        // line 138
        $context["columnClass"] = ((((" grid-cell grid-header-cell grid-header-cell-" . ($context["column_name"] ?? null)) . " ") . $this->getAttribute(($context["columnAttributes"] ?? null), "type", array())) . "-cell");
        // line 139
        echo "    ";
        if (($this->getAttribute(($context["columnAttributes"] ?? null), "sortable", array(), "any", true, true) && $this->getAttribute(($context["columnAttributes"] ?? null), "sortable", array()))) {
            // line 140
            echo "        ";
            $context["columnClass"] = (($context["columnClass"] ?? null) . " sortable");
            // line 141
            echo "    ";
        }
        // line 142
        echo "
    ";
        // line 143
        if (($this->getAttribute(($context["columnAttributes"] ?? null), "renderable", array(), "any", true, true) && $this->getAttribute(($context["columnAttributes"] ?? null), "renderable", array()))) {
            // line 144
            echo "        ";
            $context["columnClass"] = (($context["columnClass"] ?? null) . " renderable");
            // line 145
            echo "    ";
        }
        // line 146
        echo "
    ";
        // line 147
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 148
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . ($context["columnClass"] ?? null))));
        // line 150
        echo "
    <div";
        // line 151
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 152
        if (($this->getAttribute(($context["columnAttributes"] ?? null), "sortable", array(), "any", true, true) && $this->getAttribute(($context["columnAttributes"] ?? null), "sortable", array()))) {
            // line 153
            echo "            <a class=\"grid-header-cell__link\" href=\"#\">
                <span class=\"grid-header-cell__label\">";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute(($context["columnAttributes"] ?? null), "label", array()), "html", null, true);
            echo "</span>
                <span class=\"caret\"></span>
            </a>
        ";
        } else {
            // line 158
            echo "            <span class=\"grid-header-cell__label\">
                ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute(($context["columnAttributes"] ?? null), "label", array()), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 162
        echo "    </div>
";
    }

    // line 165
    public function block___oro_datagrid_server_render__datagrid_row_widget($context, array $blocks = array())
    {
        // line 166
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(        // line 167
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " grid-row"), "data-row-id" => $this->getAttribute(        // line 168
($context["datagrid_row"] ?? null), "id", array()), "data-layout" => "separate", "data-page-component-view" => array("view" => "oroproduct/js/app/datagrid/datagrid-product-lazy-init-view")));
        // line 174
        echo "
    <div";
        // line 175
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["block"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "visible", array())) {
                // line 177
                echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context["child"], 'widget');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "    </div>
";
    }

    // line 182
    public function block___oro_datagrid_server_render__datagrid_cell_widget($context, array $blocks = array())
    {
        // line 183
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["block"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if ($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "visible", array())) {
                // line 184
                echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context["child"], 'widget');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 188
    public function block___oro_datagrid_server_render__datagrid_cell_value_widget($context, array $blocks = array())
    {
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute(($context["datagrid_row"] ?? null), ($context["column_name"] ?? null), array(), "array"), "html", null, true);
    }

    // line 192
    public function block__product_datagrid_category_product_list_widget($context, array $blocks = array())
    {
        // line 193
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["themeOptions"] ?? null), "bodyClassName", array()), "html", null, true);
        echo "\">
        ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["datagridData"] ?? null), "data", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["datagrid_row"]) {
            // line 195
            echo "            ";
            $context["child"] = $this->getAttribute(($context["block"] ?? null), (($context["id"] ?? null) . "_row"), array(), "array");
            // line 196
            echo "
            ";
            // line 197
            $context["childAttr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes($this->getAttribute($this->getAttribute(($context["child"] ?? null), "vars", array()), "attr", array()), array("class" => $this->getAttribute(            // line 198
($context["themeOptions"] ?? null), "rowClassName", array())));
            // line 200
            echo "            ";
            $context["childAttr"] = $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->defaultAttributes(($context["childAttr"] ?? null), $this->getAttribute(($context["themeOptions"] ?? null), "rowAttributes", array()));
            // line 201
            echo "
            ";
            // line 202
            $this->env->getExtension('Oro\Bundle\LayoutBundle\Twig\LayoutExtension')->mergeContext(($context["child"] ?? null), array("datagrid_row" =>             // line 203
$context["datagrid_row"], "themeOptions" =>             // line 204
($context["themeOptions"] ?? null)));
            // line 206
            echo "            ";
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'widget', array("attr" => ($context["childAttr"] ?? null)));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datagrid_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroProductBundle:layouts/blank/imports/oro_datagrid_server_render:server_render_datagrid.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  468 => 208,  459 => 206,  457 => 204,  456 => 203,  455 => 202,  452 => 201,  449 => 200,  447 => 198,  446 => 197,  443 => 196,  440 => 195,  436 => 194,  431 => 193,  428 => 192,  424 => 189,  421 => 188,  412 => 184,  406 => 183,  403 => 182,  398 => 179,  391 => 177,  386 => 176,  382 => 175,  379 => 174,  377 => 168,  376 => 167,  374 => 166,  371 => 165,  366 => 162,  360 => 159,  357 => 158,  350 => 154,  347 => 153,  345 => 152,  341 => 151,  338 => 150,  336 => 148,  335 => 147,  332 => 146,  329 => 145,  326 => 144,  324 => 143,  321 => 142,  318 => 141,  315 => 140,  312 => 139,  310 => 138,  307 => 137,  304 => 136,  301 => 135,  296 => 132,  289 => 130,  284 => 129,  280 => 128,  277 => 127,  275 => 125,  273 => 124,  270 => 123,  264 => 119,  258 => 116,  255 => 115,  253 => 114,  248 => 111,  244 => 109,  242 => 108,  235 => 103,  233 => 102,  232 => 101,  231 => 100,  230 => 99,  228 => 98,  222 => 95,  219 => 94,  217 => 93,  213 => 91,  209 => 89,  207 => 88,  202 => 85,  196 => 82,  193 => 81,  191 => 80,  183 => 74,  177 => 73,  171 => 70,  167 => 69,  161 => 66,  158 => 65,  156 => 62,  155 => 61,  154 => 60,  153 => 59,  152 => 58,  151 => 57,  150 => 56,  149 => 55,  148 => 54,  147 => 53,  146 => 52,  145 => 51,  144 => 50,  143 => 49,  142 => 48,  139 => 47,  137 => 46,  134 => 45,  131 => 44,  129 => 43,  126 => 42,  124 => 41,  121 => 40,  119 => 37,  118 => 36,  117 => 33,  114 => 32,  112 => 28,  109 => 27,  107 => 26,  104 => 25,  102 => 22,  99 => 21,  97 => 20,  94 => 19,  91 => 18,  89 => 16,  87 => 15,  84 => 14,  81 => 13,  79 => 12,  76 => 11,  74 => 9,  73 => 8,  70 => 7,  68 => 6,  65 => 5,  63 => 4,  60 => 3,  57 => 2,  54 => 1,  50 => 192,  48 => 188,  46 => 182,  43 => 181,  41 => 165,  38 => 164,  36 => 135,  33 => 134,  31 => 123,  28 => 122,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:layouts/blank/imports/oro_datagrid_server_render:server_render_datagrid.html.twig", "");
    }
}

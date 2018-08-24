<?php

/* OroDashboardBundle:Form:fields.html.twig */
class __TwigTemplate_6d303030e38b553dd957f09775e4144fe11f2e6af87a4402bacb31f831950c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_type_widget_datetime_range_widget' => array($this, 'block_oro_type_widget_datetime_range_widget'),
            'oro_type_widget_date_range_widget' => array($this, 'block_oro_type_widget_date_range_widget'),
            'oro_type_widget_title_widget' => array($this, 'block_oro_type_widget_title_widget'),
            'oro_type_widget_items_row' => array($this, 'block_oro_type_widget_items_row'),
            'oro_type_widget_items_javascript' => array($this, 'block_oro_type_widget_items_javascript'),
            'oro_type_widget_date_widget' => array($this, 'block_oro_type_widget_date_widget'),
            'oro_dashboard_query_filter_row' => array($this, 'block_oro_dashboard_query_filter_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_type_widget_datetime_range_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('oro_type_widget_date_range_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('oro_type_widget_title_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('oro_type_widget_items_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('oro_type_widget_items_javascript', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('oro_type_widget_date_widget', $context, $blocks);
        // line 115
        echo "
";
        // line 116
        $this->displayBlock('oro_dashboard_query_filter_row', $context, $blocks);
    }

    // line 1
    public function block_oro_type_widget_datetime_range_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["valueType"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "type", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "type", array())) : (1));
        // line 3
        echo "
    ";
        // line 4
        $context["UI"] = $this->loadTemplate("OroDashboardBundle::macros.html.twig", "OroDashboardBundle:Form:fields.html.twig", 4);
        // line 5
        echo "
    ";
        // line 6
        echo $context["UI"]->getrenderDateWidgeView(($context["form"] ?? null), ($context["valueType"] ?? null), "datetime", "orodashboard/js/app/views/widget-datetime-range-view");
        echo "
";
    }

    // line 9
    public function block_oro_type_widget_date_range_widget($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $context["monthType"] = twig_constant("Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\AbstractDateFilterType::TYPE_THIS_MONTH");
        // line 11
        echo "    ";
        $context["valueType"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "type", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "type", array())) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "datetime_range_metadata", array()), "valueTypes", array())) ? (($context["monthType"] ?? null)) : (1))));
        // line 12
        echo "
    ";
        // line 13
        $context["UI"] = $this->loadTemplate("OroDashboardBundle::macros.html.twig", "OroDashboardBundle:Form:fields.html.twig", 13);
        // line 14
        echo "
    ";
        // line 15
        echo $context["UI"]->getrenderDateWidgeView(($context["form"] ?? null), ($context["valueType"] ?? null), "date", "orodashboard/js/app/views/widget-date-range-view");
        echo "
";
    }

    // line 18
    public function block_oro_type_widget_title_widget($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Form:fields.html.twig", 19);
        // line 20
        echo "
    <div class=\"widget-title-container\" ";
        // line 21
        echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "oroform/js/app/views/default-field-value-view", "options" => array("fieldSelector" => ("input#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 24
($context["form"] ?? null), "title", array()), "vars", array()), "id", array())), "prepareTinymce" => false)));
        // line 27
        echo ">
        <div class=\"widget-title-widget\">
            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'widget');
        echo "
        </div>
        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "useDefault", array()), 'row', array("attr" => array("data-role" => "changeUseDefault")));
        echo "
    </div>


";
    }

    // line 37
    public function block_oro_type_widget_items_row($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Form:fields.html.twig", 38);
        // line 39
        echo "    ";
        $context["rowId"] = ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()) . "Row");
        // line 40
        echo "
    <div id=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["rowId"] ?? null), "html", null, true);
        echo "\" class=\"dashboard-widget-items\">
        <div class=\"control-group\">
            <label class=\"control-label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
        echo "</label>
            <div class=\"control-group controls\">
                <div class=\"\">
                    ";
        // line 46
        echo $context["UI"]->getclientButton(array("aCss" => "no-hash add-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.datagrid.actions.add.label")));
        // line 49
        echo "
                    ";
        // line 50
        echo $context["UI"]->getclientButton(array("aCss" => "no-hash btn-primary add-all-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.datagrid.actions.add_all.label")));
        // line 53
        echo "
                </div>
            </div>
            <div class=\"controls\">
                <table id=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"grid table table-bordered table-condensed\">
                    <thead>
                        <tr>
                            <th><span>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "item_label", array())), "html", null, true);
        echo "</span></th>
                            <th class=\"action-column\"><span>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.datagrid.columns.actions"), "html", null, true);
        echo "</span></th>
                        </tr>
                    </thead>
                    <tbody class=\"item-container\"></tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        // line 69
        echo $this->env->getExtension('Genemu\Bundle\FormBundle\Twig\Extension\FormExtension')->renderJavascript(($context["form"] ?? null));
        echo "
";
    }

    // line 72
    public function block_oro_type_widget_items_javascript($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        $context["options"] = array("_sourceElement" => (("#" . $this->getAttribute($this->getAttribute(        // line 74
($context["form"] ?? null), "vars", array()), "id", array())) . "Row"), "itemsData" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 75
($context["form"] ?? null), "children", array()), "items", array()), "vars", array()), "value", array()), "baseName" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 76
($context["form"] ?? null), "children", array()), "items", array()), "vars", array()), "full_name", array()));
        // line 78
        echo "    ";
        if (( !twig_test_empty($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array())) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "placeholder", array(), "any", true, true))) {
            // line 79
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(            // line 80
($context["form"] ?? null), "vars", array()), "attr", array()), "placeholder", array()))));
            // line 82
            echo "    ";
        }
        // line 83
        echo "
    ";
        // line 84
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Form:fields.html.twig", 84);
        // line 85
        echo "
    <div ";
        // line 86
        echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "orodashboard/js/items/view", "options" =>         // line 88
($context["options"] ?? null)));
        // line 89
        echo "></div>
";
    }

    // line 92
    public function block_oro_type_widget_date_widget($context, array $blocks = array())
    {
        // line 93
        echo "    <div class=\"widget-date-compare\">
        <div class=\"widget-date-widget\">
            ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "useDate", array()), 'widget', array("attr" => array("data-role" => "updateDatapicker")));
        echo "
        </div>
        ";
        // line 97
        if ($this->getAttribute(($context["form"] ?? null), "date", array(), "any", true, true)) {
            // line 98
            echo "            <div class=\"widget-date-input-widget\">
                ";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget');
            echo "
            </div>

            ";
            // line 102
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Form:fields.html.twig", 102);
            // line 103
            echo "
            <div ";
            // line 104
            echo $context["UI"]->getrenderPageComponentAttributes(array("view" => "orodashboard/js/app/views/widget-date-compare-view", "options" => array("_sourceElement" => ".widget-date-compare", "useDateSelector" => ("input#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 108
($context["form"] ?? null), "useDate", array()), "vars", array()), "id", array())), "dateSelector" => ("input#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 109
($context["form"] ?? null), "date", array()), "vars", array()), "id", array())))));
            // line 111
            echo "></div>
        ";
        }
        // line 113
        echo "    </div>
";
    }

    // line 116
    public function block_oro_dashboard_query_filter_row($context, array $blocks = array())
    {
        // line 117
        echo "    <div class=\"control-group\">
        <div
        ";
        // line 119
        if (($context["collapsible"] ?? null)) {
            // line 120
            echo "            class=\"control-group widget-query-filter collapsible";
            if (($context["collapsed"] ?? null)) {
                echo " collapsed";
            }
            echo "\"
                data-page-component-module=\"oroui/js/app/components/view-component\"
                data-page-component-options=\"";
            // line 122
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroform/js/app/views/collapsible-form-row-view")), "html", null, true);
            echo "\">
        ";
        } else {
            // line 124
            echo "            class=\"control-group\">
        ";
        }
        // line 126
        echo "            <label class=\"control-label widget-query-filter\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
        echo "</label>

            ";
        // line 128
        if (($context["collapsible"] ?? null)) {
            // line 129
            echo "                ";
            $context["labelsMap"] = array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.query_filter.collapse"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.dashboard.query_filter.expand"));
            // line 133
            echo "
                <a class=\"collapse-action\"
                   data-toggle-label=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute(($context["labelsMap"] ?? null),  !($context["collapsed"] ?? null), array(), "array"), "html", null, true);
            echo "\"
                   data-name=\"collapse\" href=\"#\">";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute(($context["labelsMap"] ?? null), ($context["collapsed"] ?? null), array(), "array"), "html", null, true);
            echo "</a>
            ";
        }
        // line 138
        echo "
            <div class=\"controls\">
                ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "entity", array()), 'row');
        echo "
                ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "definition", array()), 'row');
        echo "
                ";
        // line 142
        $context["metadata"] = $this->env->getExtension('Oro\Bundle\DashboardBundle\Twig\DashboardExtension')->getQueryFilterMetadata();
        // line 143
        echo "                ";
        $context["column_chain_template_id"] = "column-chain-template";
        // line 144
        echo "                ";
        $context["QD"] = $this->loadTemplate("OroQueryDesignerBundle::macros.html.twig", "OroDashboardBundle:Form:fields.html.twig", 144);
        // line 145
        echo "                ";
        echo $context["QD"]->getquery_designer_column_chain_template(($context["column_chain_template_id"] ?? null));
        echo "
                ";
        // line 146
        $context["segmentQD"] = $this->loadTemplate("OroSegmentBundle::macros.html.twig", "OroDashboardBundle:Form:fields.html.twig", 146);
        // line 147
        echo "                ";
        echo $context["segmentQD"]->getquery_designer_condition_builder(array("id" => (        // line 148
($context["name"] ?? null) . "-condition-builder"), "disable_audit" => true, "metadata" =>         // line 150
($context["metadata"] ?? null), "column_chain_template_selector" => ("#" .         // line 151
($context["column_chain_template_id"] ?? null))));
        // line 152
        echo "

                ";
        // line 154
        $context["widgetOptions"] = array("valueSource" => (((("[data-ftid=" .         // line 155
($context["widgetType"] ?? null)) . "_") . ($context["name"] ?? null)) . "_definition]"), "entityChoice" => (((("[data-ftid=" .         // line 156
($context["widgetType"] ?? null)) . "_") . ($context["name"] ?? null)) . "_entity]"), "entityChangeConfirmMessage" => (twig_replace_filter(        // line 157
($context["name"] ?? null), "_", ".") . ".change_entity_confirmation"), "metadata" =>         // line 158
($context["metadata"] ?? null), "disable_audit" => true, "initEntityChangeEvents" => false, "select2FieldChoiceTemplate" => ("#" .         // line 161
($context["column_chain_template_id"] ?? null)));
        // line 163
        echo "                ";
        $context["widgetOptions"] = $this->env->getExtension('Oro\Bundle\SegmentBundle\Twig\SegmentExtension')->updateSegmentWidgetOptions(($context["widgetOptions"] ?? null), ($context["name"] ?? null));
        // line 164
        echo "                <div
                    data-page-component-module=\"orosegment/js/app/components/segment-component\"
                    data-page-component-options=\"";
        // line 166
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["widgetOptions"] ?? null)), "html", null, true);
        echo "\">
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  373 => 166,  369 => 164,  366 => 163,  364 => 161,  363 => 158,  362 => 157,  361 => 156,  360 => 155,  359 => 154,  355 => 152,  353 => 151,  352 => 150,  351 => 148,  349 => 147,  347 => 146,  342 => 145,  339 => 144,  336 => 143,  334 => 142,  330 => 141,  326 => 140,  322 => 138,  317 => 136,  313 => 135,  309 => 133,  306 => 129,  304 => 128,  298 => 126,  294 => 124,  289 => 122,  281 => 120,  279 => 119,  275 => 117,  272 => 116,  267 => 113,  263 => 111,  261 => 109,  260 => 108,  259 => 104,  256 => 103,  254 => 102,  248 => 99,  245 => 98,  243 => 97,  238 => 95,  234 => 93,  231 => 92,  226 => 89,  224 => 88,  223 => 86,  220 => 85,  218 => 84,  215 => 83,  212 => 82,  210 => 80,  208 => 79,  205 => 78,  203 => 76,  202 => 75,  201 => 74,  199 => 73,  196 => 72,  190 => 69,  179 => 61,  175 => 60,  169 => 57,  163 => 53,  161 => 50,  158 => 49,  156 => 46,  150 => 43,  145 => 41,  142 => 40,  139 => 39,  136 => 38,  133 => 37,  124 => 31,  119 => 29,  115 => 27,  113 => 24,  112 => 21,  109 => 20,  106 => 19,  103 => 18,  97 => 15,  94 => 14,  92 => 13,  89 => 12,  86 => 11,  83 => 10,  80 => 9,  74 => 6,  71 => 5,  69 => 4,  66 => 3,  63 => 2,  60 => 1,  56 => 116,  53 => 115,  51 => 92,  48 => 91,  46 => 72,  43 => 71,  41 => 37,  38 => 36,  36 => 18,  33 => 17,  31 => 9,  28 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroDashboardBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Form/fields.html.twig");
    }
}

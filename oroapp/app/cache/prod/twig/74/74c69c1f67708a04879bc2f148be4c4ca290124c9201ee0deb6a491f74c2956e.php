<?php

/* OroFormBundle:Form:fields.html.twig */
class __TwigTemplate_1ff455f3a60fb6e7aa89c60905ffb308a3d028bf87e017a6fbee15f3ed3d0e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Form:fields.html.twig", "OroFormBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'genemu_jqueryselect2_widget' => array($this, 'block_genemu_jqueryselect2_widget'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
            'oro_ticker_symbol_widget' => array($this, 'block_oro_ticker_symbol_widget'),
            'oro_multiple_entity_widget' => array($this, 'block_oro_multiple_entity_widget'),
            'form_label' => array($this, 'block_form_label'),
            'oro_money_row' => array($this, 'block_oro_money_row'),
            'oro_money_widget' => array($this, 'block_oro_money_widget'),
            'percent_row' => array($this, 'block_percent_row'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'oro_date_widget' => array($this, 'block_oro_date_widget'),
            'oro_datetime_widget' => array($this, 'block_oro_datetime_widget'),
            'oro_collection_widget' => array($this, 'block_oro_collection_widget'),
            'oro_form_js_validation' => array($this, 'block_oro_form_js_validation'),
            'oro_entity_create_or_select_row' => array($this, 'block_oro_entity_create_or_select_row'),
            'oro_autocomplete_widget' => array($this, 'block_oro_autocomplete_widget'),
            'oro_entity_create_or_select_widget' => array($this, 'block_oro_entity_create_or_select_widget'),
            'oro_entity_create_or_select_choice_widget' => array($this, 'block_oro_entity_create_or_select_choice_widget'),
            'oro_entity_create_or_select_inline_widget' => array($this, 'block_oro_entity_create_or_select_inline_widget'),
            'oro_link_type_widget' => array($this, 'block_oro_link_type_widget'),
            'oro_download_links_type_widget' => array($this, 'block_oro_download_links_type_widget'),
            'oro_simple_color_picker_row' => array($this, 'block_oro_simple_color_picker_row'),
            'oro_simple_color_picker_widget' => array($this, 'block_oro_simple_color_picker_widget'),
            'oro_simple_color_choice_widget' => array($this, 'block_oro_simple_color_choice_widget'),
            'oro_simple_color_choice_widget_options' => array($this, 'block_oro_simple_color_choice_widget_options'),
            'oro_color_table_row' => array($this, 'block_oro_color_table_row'),
            'oro_color_table_widget' => array($this, 'block_oro_color_table_widget'),
            'oro_resizeable_rich_text_widget' => array($this, 'block_oro_resizeable_rich_text_widget'),
            'oro_entity_tree_select_row' => array($this, 'block_oro_entity_tree_select_row'),
            'oro_entity_tree_select_widget' => array($this, 'block_oro_entity_tree_select_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_genemu_jqueryselect2_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (($this->getAttribute(($context["configs"] ?? null), "grid", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["configs"] ?? null), "grid", array(), "any", false, true), "name", array(), "any", true, true))) {
            // line 5
            echo "        ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_datagrid_index", array("gridName" => $this->getAttribute($this->getAttribute(($context["configs"] ?? null), "grid", array()), "name", array())));
            // line 6
            echo "    ";
        } elseif (($this->getAttribute(($context["configs"] ?? null), "route_name", array(), "any", true, true) && $this->getAttribute(($context["configs"] ?? null), "route_name", array()))) {
            // line 7
            echo "        ";
            $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["configs"] ?? null), "route_name", array()), (($this->getAttribute(($context["configs"] ?? null), "route_parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["configs"] ?? null), "route_parameters", array()), array())) : (array())));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["url"] = "";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if ($this->getAttribute(($context["configs"] ?? null), "placeholder", array(), "any", true, true)) {
            // line 12
            echo "        ";
            $context["configs"] = twig_array_merge(($context["configs"] ?? null), array("placeholder" => twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["configs"] ?? null), "placeholder", array())))));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        if (($this->getAttribute(($context["configs"] ?? null), "result_template_twig", array(), "any", true, true) && $this->getAttribute(($context["configs"] ?? null), "result_template_twig", array()))) {
            // line 15
            echo "        ";
            $context["configs"] = twig_array_merge(($context["configs"] ?? null), array("result_template" => twig_include($this->env, $context, $this->getAttribute(($context["configs"] ?? null), "result_template_twig", array()))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if (($this->getAttribute(($context["configs"] ?? null), "selection_template_twig", array(), "any", true, true) && $this->getAttribute(($context["configs"] ?? null), "selection_template_twig", array()))) {
            // line 18
            echo "        ";
            $context["configs"] = twig_array_merge(($context["configs"] ?? null), array("selection_template" => twig_include($this->env, $context, $this->getAttribute(($context["configs"] ?? null), "selection_template_twig", array()))));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        $context["configs"] = twig_array_merge(array("containerCssClass" => "oro-select2", "dropdownCssClass" => "oro-select2__dropdown"),         // line 23
($context["configs"] ?? null));
        // line 24
        echo "    ";
        if ($this->getAttribute(($context["configs"] ?? null), "component", array(), "any", true, true)) {
            // line 25
            echo "        ";
            $context["component"] = (("oro/select2-" . $this->getAttribute(($context["configs"] ?? null), "component", array())) . "-component");
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "        ";
            $context["component"] = "oro/select2-component";
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        if ( !array_key_exists("component_options", $context)) {
            // line 30
            echo "        ";
            $context["component_options"] = array();
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        $context["component_options"] = twig_array_merge(($context["component_options"] ?? null), array("configs" => ($context["configs"] ?? null), "url" => ($context["url"] ?? null)));
        // line 33
        echo "    ";
        if (array_key_exists("excluded", $context)) {
            // line 34
            echo "        ";
            $context["component_options"] = twig_array_merge(($context["component_options"] ?? null), array("excluded" => ($context["excluded"] ?? null)));
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => array("class" => "select2", "data-page-component-module" =>         // line 38
($context["component"] ?? null), "data-page-component-options" => twig_jsonencode_filter(        // line 39
($context["component_options"] ?? null)))));
        // line 40
        echo "
";
    }

    // line 43
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
    }

    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
    }

    // line 47
    public function block_oro_ticker_symbol_widget($context, array $blocks = array())
    {
        // line 48
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'bootstrap'],
        function(\$){
            \$(function() {
                var cache = {};
                \$(\"#";
        // line 53
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\").typeahead({
                    source: function (request, process) {
                        YAHOO = {
                            Finance: {
                                SymbolSuggest: {
                                    ssCallback: function (data) {
                                        var result = \$.map(data.ResultSet.Result, function (item) {
                                            return item.name + \" (\" + item.symbol + \")\";
                                        });
                                        \$.each(data.ResultSet.Result, function (itemKey, item) {
                                            cache[item.name + \" (\" + item.symbol + \")\"] = item.symbol;
                                        });
                                        process(result)
                                    }
                                }
                            }
                        };
                        \$.ajax({
                            type: \"GET\",
                            dataType: \"jsonp\",
                            jsonp: \"callback\",
                            jsonpCallback: \"YAHOO.Finance.SymbolSuggest.ssCallback\",
                            data: {
                                query: request
                            },
                            cache: true,
                            url: \"http://autoc.finance.yahoo.com/autoc\"
                        });
                    },
                    updater: function(item) {
                        if (typeof cache[item] != 'undefined') {
                            return cache[item];
                        } else {
                            return item;
                        }
                    }
                });
            });
        });
    </script>

    ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    // line 97
    public function block_oro_multiple_entity_widget($context, array $blocks = array())
    {
        // line 98
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

    <div id=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-container\"></div>

    <script type=\"text/javascript\">
        require(['jquery',
            'oroform/js/multiple-entity', 'oroform/js/multiple-entity/collection', 'oroform/js/multiple-entity/model',
            'text!";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroform/js/multiple-entity/templates/multiple-entities.html"), "html", null, true);
        echo "',
            'text!";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroform/js/multiple-entity/templates/multiple-entity.html"), "html", null, true);
        echo "'
        ],
        function(\$, MultipleEntity, MultipleEntityCollection, MultipleEntityModel, EntitiesTpl, EntityTpl) {
            ";
        // line 109
        $context["selectionUrl"] = null;
        // line 110
        echo "            ";
        $context["originalFieldId"] = $this->getAttribute(($context["attr"] ?? null), "data-ftid", array(), "array");
        // line 111
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "grid_url", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "grid_url", array()))) {
            // line 112
            echo "                ";
            $context["selectionUrl"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "grid_url", array());
            // line 113
            echo "            ";
        } elseif (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "selection_url", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "selection_url", array()))) {
            // line 114
            echo "                ";
            $context["selectionUrl"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "selection_url", array());
            // line 115
            echo "            ";
        }
        // line 116
        echo "            ";
        $context["selectionRouteName"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "selection_route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "selection_route", array()), null)) : (null));
        // line 117
        echo "            ";
        $context["selectionRouteParameters"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "selection_route_parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "selection_route_parameters", array()), array())) : (array()));
        // line 118
        echo "
            var widget = new MultipleEntity({
                el: '#";
        // line 120
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-container',
                template: EntitiesTpl,
                elementTemplate: EntityTpl,
                addedElement: 'input[data-ftid=\"";
        // line 123
        echo twig_escape_filter($this->env, ($context["originalFieldId"] ?? null), "html", null, true);
        echo "_added\"]',
                removedElement: 'input[data-ftid=\"";
        // line 124
        echo twig_escape_filter($this->env, ($context["originalFieldId"] ?? null), "html", null, true);
        echo "_removed\"]',
                name: ";
        // line 125
        echo twig_jsonencode_filter(($context["id"] ?? null));
        echo ",
                defaultElement: ";
        // line 126
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "default_element", array()));
        echo ",
                selectionUrl: ";
        // line 127
        echo twig_jsonencode_filter(($context["selectionUrl"] ?? null));
        echo ",
                selectionRouteName: ";
        // line 128
        echo twig_jsonencode_filter(($context["selectionRouteName"] ?? null));
        echo ",
                selectionRouteParams: ";
        // line 129
        echo twig_jsonencode_filter(($context["selectionRouteParameters"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
        echo ",
                allowAction: ";
        // line 130
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "allow_action", array()));
        echo ",
                collection: new MultipleEntityCollection(),
                selectorWindowTitle: ";
        // line 132
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "selector_window_title", array())));
        echo "
            });
            var data = [];
            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["initial_elements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 136
            echo "                data.push(new MultipleEntityModel(";
            echo twig_jsonencode_filter($context["element"]);
            echo "));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "            widget.getCollection().reset(data);

            ";
        // line 140
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "extra_config", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "extra_config", array()))) {
            // line 141
            echo "                ";
            $this->displayBlock(("oro_multiple_entity_js_" . $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "extra_config", array())), $context, $blocks);
            echo "
            ";
        }
        // line 143
        echo "        });
    </script>
";
    }

    // line 147
    public function block_form_label($context, array $blocks = array())
    {
        // line 148
        echo "    ";
        ob_start();
        // line 149
        echo "    ";
        if ( !(($context["label"] ?? null) === false)) {
            // line 150
            echo "        ";
            if ( !($context["compound"] ?? null)) {
                // line 151
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
                // line 152
                echo "        ";
            }
            // line 153
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 154
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 155
                echo "        ";
            }
            // line 156
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 157
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " validation-error"))));
                // line 158
                echo "        ";
            }
            // line 159
            echo "        ";
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 160
                echo "            ";
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 161
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" => ($context["name"] ?? null), "%id%" => ($context["id"] ?? null)));
                    // line 162
                    echo "            ";
                } else {
                    // line 163
                    echo "                ";
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? null));
                    // line 164
                    echo "            ";
                }
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            $context["isRadioLabel"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array()), false)) : (false)) && array_key_exists("checked", $context));
            // line 167
            echo "        ";
            if ((array_key_exists("tooltip", $context) && ($context["tooltip"] ?? null))) {
                // line 168
                echo "            ";
                $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroFormBundle:Form:fields.html.twig", 168);
                // line 169
                echo "            ";
                echo $context["ui"]->gettooltip(                // line 170
($context["tooltip"] ?? null), ((                // line 171
array_key_exists("tooltip_parameters", $context)) ? (_twig_default_filter(($context["tooltip_parameters"] ?? null), array())) : (array())), ((                // line 172
array_key_exists("tooltip_placement", $context)) ? (_twig_default_filter(($context["tooltip_placement"] ?? null), null)) : (null)), ((                // line 173
array_key_exists("tooltip_details_enabled", $context)) ? (_twig_default_filter(($context["tooltip_details_enabled"] ?? null), false)) : (false)), ((                // line 174
array_key_exists("tooltip_details_link", $context)) ? (_twig_default_filter(($context["tooltip_details_link"] ?? null), null)) : (null)), ((                // line 175
array_key_exists("tooltip_details_anchor", $context)) ? (_twig_default_filter(($context["tooltip_details_anchor"] ?? null), null)) : (null)));
            }
            // line 179
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 180
            if ((array_key_exists("translatable_label", $context) &&  !($context["translatable_label"] ?? null))) {
                // line 181
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } elseif ((            // line 182
array_key_exists("raw_label", $context) && ($context["raw_label"] ?? null))) {
                // line 183
                echo ($context["label"] ?? null);
            } else {
                // line 185
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            }
            // line 187
            echo "<em>";
            if ((($context["required"] ?? null) &&  !($context["isRadioLabel"] ?? null))) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
            echo "</em>
        </label>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 193
    public function block_oro_money_row($context, array $blocks = array())
    {
        // line 194
        echo "    ";
        $context["label"] = ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)) . " (") . ($context["currency_symbol"] ?? null)) . ")");
        // line 195
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row', array("type" => "text", "label" => ($context["label"] ?? null), "translatable_label" => false));
        echo "
";
    }

    // line 198
    public function block_oro_money_widget($context, array $blocks = array())
    {
        // line 199
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 200
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 203
    public function block_percent_row($context, array $blocks = array())
    {
        // line 204
        echo "    ";
        $context["label"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)) . " (%)");
        // line 205
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row', array("type" => "text", "label" => ($context["label"] ?? null), "translatable_label" => false));
        echo "
";
    }

    // line 208
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 209
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 210
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 213
    public function block_oro_date_widget($context, array $blocks = array())
    {
        // line 214
        echo "    ";
        if ($this->getAttribute(($context["attr"] ?? null), "data-validation", array(), "any", true, true)) {
            // line 215
            echo "        ";
            $context["dateValidation"] = $this->getAttribute(($context["attr"] ?? null), "data-validation", array(), "array");
            // line 216
            echo "    ";
        } else {
            // line 217
            echo "        ";
            $context["dateValidation"] = array("Date" => array());
            // line 218
            echo "
        ";
            // line 219
            if (($context["required"] ?? null)) {
                // line 220
                echo "            ";
                $context["dateValidation"] = twig_array_merge(($context["dateValidation"] ?? null), array("NotBlank" => array("message" => "This value should not be blank.")));
                // line 221
                echo "        ";
            }
            // line 222
            echo "
        ";
            // line 223
            $context["dateValidation"] = twig_jsonencode_filter(($context["dateValidation"] ?? null), twig_constant("JSON_FORCE_OBJECT"));
            // line 224
            echo "    ";
        }
        // line 225
        echo "
    ";
        // line 226
        $context["options"] = array("view" => "oroui/js/app/views/datepicker/datepicker-view", "nativeMode" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile(), "dateInputAttrs" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.form.choose_date"), "id" => ("date_selector_" .         // line 231
($context["id"] ?? null)), "name" => ("date_selector_" .         // line 232
($context["id"] ?? null)), "data-validation" =>         // line 233
($context["dateValidation"] ?? null), "class" => ("datepicker-input " . (($this->getAttribute(        // line 234
($context["attr"] ?? null), "class", array(), "any", true, true)) ? ($this->getAttribute(($context["attr"] ?? null), "class", array(), "array")) : ("")))), "datePickerOptions" => array("altFormat" => "yy-mm-dd", "changeMonth" => true, "changeYear" => true, "yearRange" => ((        // line 240
array_key_exists("years", $context)) ? (_twig_default_filter(($context["years"] ?? null), "-80:+1")) : ("-80:+1")), "minDate" =>         // line 241
($context["minDate"] ?? null), "maxDate" =>         // line 242
($context["maxDate"] ?? null), "showButtonPanel" => true));
        // line 246
        echo "
    ";
        // line 247
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(        // line 249
($context["options"] ?? null), twig_constant("JSON_FORCE_OBJECT"))));
        // line 251
        echo "
    ";
        // line 252
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
";
    }

    // line 255
    public function block_oro_datetime_widget($context, array $blocks = array())
    {
        // line 256
        echo "    ";
        $context["dateValidation"] = array("Date" => array());
        // line 257
        echo "    ";
        $context["timeValidation"] = array("Time" => array());
        // line 258
        echo "
    ";
        // line 259
        if (($context["required"] ?? null)) {
            // line 260
            echo "        ";
            $context["dateValidation"] = twig_array_merge(($context["dateValidation"] ?? null), array("NotBlank" => array()));
            // line 261
            echo "        ";
            $context["timeValidation"] = twig_array_merge(($context["timeValidation"] ?? null), array("NotBlank" => array()));
            // line 262
            echo "    ";
        }
        // line 263
        echo "
    ";
        // line 264
        if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
            // line 265
            echo "        ";
            $context["attrClass"] = $this->getAttribute(($context["attr"] ?? null), "class", array(), "array");
            // line 266
            echo "    ";
        } else {
            // line 267
            echo "        ";
            $context["attrClass"] = "";
            // line 268
            echo "    ";
        }
        // line 269
        echo "
    ";
        // line 270
        $context["options"] = array("view" => "oroui/js/app/views/datepicker/datetimepicker-view", "nativeMode" => $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->isMobile(), "dateInputAttrs" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.form.choose_date"), "id" => ("date_selector_" .         // line 275
($context["id"] ?? null)), "name" => ("date_selector_" .         // line 276
($context["id"] ?? null)), "class" => ("input-small datepicker-input " .         // line 277
($context["attrClass"] ?? null)), "data-validation" => twig_jsonencode_filter(        // line 278
($context["dateValidation"] ?? null), twig_constant("JSON_FORCE_OBJECT"))), "datePickerOptions" => array("altFormat" => "yy-mm-dd", "changeMonth" => true, "changeYear" => true, "yearRange" => ((        // line 284
array_key_exists("years", $context)) ? (_twig_default_filter(($context["years"] ?? null), "-80:+1")) : ("-80:+1")), "showButtonPanel" => true), "timeInputAttrs" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.form.choose_time"), "id" => ("time_selector_" .         // line 289
($context["id"] ?? null)), "name" => ("time_selector_" .         // line 290
($context["id"] ?? null)), "class" => ("input-small timepicker-input " .         // line 291
($context["attrClass"] ?? null)), "data-validation" => twig_jsonencode_filter(        // line 292
($context["timeValidation"] ?? null), twig_constant("JSON_FORCE_OBJECT"))), "timePickerOptions" => array());
        // line 297
        echo "
    ";
        // line 298
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(        // line 300
($context["options"] ?? null), twig_constant("JSON_FORCE_OBJECT"))));
        // line 302
        echo "
    ";
        // line 303
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
";
    }

    // line 342
    public function block_oro_collection_widget($context, array $blocks = array())
    {
        // line 343
        echo "    ";
        ob_start();
        // line 344
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 345
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_collection_item_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 346
            echo "        ";
        }
        // line 347
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection collection-fields-list")));
        // line 348
        echo "        ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 349
        echo "        <div class=\"row-oro\">
            ";
        // line 350
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 351
        echo "            <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-last-index=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\" data-row-count-add=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_add", array()), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        echo ">
                <input type=\"hidden\" name=\"validate_";
        // line 352
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-collection-name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-name=\"collection-validation\" disabled data-validate-element>
                ";
        // line 353
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 354
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 355
                echo "                        ";
                echo $this->getAttribute($this, "oro_collection_item_prototype", array(0 => $context["child"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 357
            echo "                ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 358
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_initial", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 359
                echo "                        ";
                echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => $context["i"]));
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 361
            echo "                ";
        }
        // line 362
        echo "            </div>
            ";
        // line 363
        if (($context["allow_add"] ?? null)) {
            // line 364
            echo "            <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
            echo "</a>
            ";
        }
        // line 366
        echo "        </div>
        ";
        // line 367
        if ((($context["handle_primary"] ?? null) && ( !array_key_exists("prototype", $context) || $this->getAttribute(($context["prototype"] ?? null), "primary", array(), "any", true, true)))) {
            // line 368
            echo "            ";
            echo $this->getAttribute($this, "oro_collection_validate_primary_js", array(0 => $context), "method");
            echo "
        ";
        }
        // line 370
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 384
    public function block_oro_form_js_validation($context, array $blocks = array())
    {
        // line 385
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroFormBundle:Form:fields.html.twig", 385);
        // line 386
        echo "    <div ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("_sourceElement" => ("#" . $this->getAttribute($this->getAttribute(        // line 389
($context["form"] ?? null), "vars", array()), "id", array())), "view" => "oroform/js/app/views/form-validate-view", "validationOptions" =>         // line 391
($context["js_options"] ?? null))));
        // line 393
        echo "></div>
";
    }

    // line 396
    public function block_oro_entity_create_or_select_row($context, array $blocks = array())
    {
        // line 397
        echo "    ";
        $context["currentMode"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "value", array()), "create")) : ("create"));
        // line 398
        echo "    ";
        $context["viewsContainerId"] = ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()) . "-container");
        // line 399
        echo "
    ";
        // line 400
        ob_start();
        // line 401
        echo "        <div class=\"control-group create-select-entity ";
        echo twig_escape_filter($this->env, ($context["currentMode"] ?? null), "html", null, true);
        echo "
            ";
        // line 402
        if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "class", array()), "html", null, true);
        }
        echo "\"
            id=\"";
        // line 403
        echo twig_escape_filter($this->env, ($context["viewsContainerId"] ?? null), "html", null, true);
        echo "\"
        >
            ";
        // line 405
        if ( !(($context["label"] ?? null) === false)) {
            // line 406
            echo "                <div class=\"control-label wrap\">
                    ";
            // line 407
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label_attr" => ($context["label_attr"] ?? null)));
            echo "
                </div>
            ";
        }
        // line 410
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " validation-error";
        }
        echo "\">
                ";
        // line 411
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 412
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 418
    public function block_oro_autocomplete_widget($context, array $blocks = array())
    {
        // line 419
        echo "    ";
        if (($this->getAttribute(($context["autocomplete"] ?? null), "selection_template_twig", array(), "any", true, true) && $this->getAttribute(($context["autocomplete"] ?? null), "selection_template_twig", array()))) {
            // line 420
            echo "        ";
            $context["componentOptions"] = twig_array_merge(($context["componentOptions"] ?? null), array("selection_template" => twig_include($this->env, $context, $this->getAttribute(            // line 421
($context["autocomplete"] ?? null), "selection_template_twig", array()))));
            // line 423
            echo "    ";
        }
        // line 424
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-page-component-module" =>         // line 425
($context["componentModule"] ?? null), "data-page-component-options" => twig_jsonencode_filter(        // line 426
($context["componentOptions"] ?? null))));
        // line 428
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
        echo "
";
    }

    // line 431
    public function block_oro_entity_create_or_select_widget($context, array $blocks = array())
    {
        // line 432
        echo "    ";
        $context["currentMode"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "value", array()), "create")) : ("create"));
        // line 433
        echo "    ";
        $context["btnGroupId"] = ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()) . "-btn-group");
        // line 434
        echo "    ";
        $context["viewsContainerId"] = ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()) . "-container");
        // line 435
        echo "    ";
        $context["gridWidgetAlias"] = ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()) . "-grid");
        // line 436
        echo "    ";
        $context["routeParametersElement"] = ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()) . "-route-parameters");
        // line 437
        echo "
    <div class=\"create-select-entity-container clearfix\">
        <div id=\"";
        // line 439
        echo twig_escape_filter($this->env, ($context["btnGroupId"] ?? null), "html", null, true);
        echo "\" class=\"buttons-container\">
            <a href=\"javascript:void(0)\" class=\"entity-select-btn\" title=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose"), "html", null, true);
        echo "\"";
        if ((($context["disabled"] ?? null) || ($context["read_only"] ?? null))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
                <span
                    data-label=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose Existing"), "html", null, true);
        echo "\"
                    data-alt-label-view=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose Another"), "html", null, true);
        echo "\"
                >
                    ";
        // line 445
        if ((($context["currentMode"] ?? null) == "view")) {
            // line 446
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose Another"), "html", null, true);
            echo "
                    ";
        } else {
            // line 448
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose Existing"), "html", null, true);
            echo "
                    ";
        }
        // line 450
        echo "                </span>
            </a>

            <a href=\"javascript:void(0)\" class=\"entity-create-btn\" title=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create New"), "html", null, true);
        echo "\"";
        if ((($context["disabled"] ?? null) || ($context["read_only"] ?? null))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
                <span>";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create New"), "html", null, true);
        echo "</span>
            </a>

            <a href=\"javascript:void(0)\" class=\"entity-cancel-btn\" title=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "\"";
        if ((($context["disabled"] ?? null) || ($context["read_only"] ?? null))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
                <span>";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel"), "html", null, true);
        echo "</span>
            </a>
        </div>

        <div class=\"entity-create-block\"
            ";
        // line 463
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "required", array())) {
            echo "data-validation-optional-group=\"\"";
        }
        // line 464
        echo "            ";
        if ((($context["currentMode"] ?? null) != "create")) {
            echo "data-validation-ignore=\"\"";
        }
        // line 465
        echo "        >
            ";
        // line 466
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "new_entity", array()), 'widget');
        echo "
        </div>

        <div class=\"entity-select-block\">
            ";
        // line 470
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "loadingElement" => (("#" .         // line 472
($context["viewsContainerId"] ?? null)) . " .create-select-entity-container"), "elementFirst" => (        // line 473
($context["currentMode"] ?? null) == "grid"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_datagrid_widget", array("gridName" => $this->getAttribute($this->getAttribute(        // line 474
($context["form"] ?? null), "vars", array()), "grid_name", array()))), "alias" =>         // line 475
($context["gridWidgetAlias"] ?? null)));
        // line 476
        echo "
        </div>

        <div class=\"entity-view-block ";
        // line 479
        if ((twig_length_filter($this->env, ($context["view_widgets"] ?? null)) > 1)) {
            echo "row-fluid row-fluid-divider";
        }
        echo "\">
            ";
        // line 480
        $context["allRouteParameters"] = array();
        // line 481
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["view_widgets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["view_widget"]) {
            // line 482
            echo "                <div class=\"responsive-cell\">
                    ";
            // line 483
            $context["routeParameters"] = $this->getAttribute($context["view_widget"], "route_parameters", array());
            // line 484
            echo "                    ";
            $context["allRouteParameters"] = twig_array_merge(($context["allRouteParameters"] ?? null), array($this->getAttribute($context["view_widget"], "widget_alias", array()) => ($context["routeParameters"] ?? null)));
            // line 485
            echo "                    ";
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "loadingElement" => (("#" .             // line 487
($context["viewsContainerId"] ?? null)) . " .create-select-entity-container"), "elementFirst" => (            // line 488
($context["currentMode"] ?? null) == "view"), "url" => (((            // line 489
($context["currentMode"] ?? null) == "view")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["view_widget"], "route_name", array()), ($context["routeParameters"] ?? null))) : (null)), "alias" => $this->getAttribute(            // line 490
$context["view_widget"], "widget_alias", array()), "title" => (($this->getAttribute(            // line 491
$context["view_widget"], "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["view_widget"], "title", array()))) : (null))));
            // line 492
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view_widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 495
        echo "            <input type=\"hidden\"
               name=\"";
        // line 496
        echo twig_escape_filter($this->env, ($context["routeParametersElement"] ?? null), "html", null, true);
        echo "\"
               id=\"";
        // line 497
        echo twig_escape_filter($this->env, ($context["routeParametersElement"] ?? null), "html", null, true);
        echo "\"
               value=\"";
        // line 498
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["allRouteParameters"] ?? null)));
        echo "\"
            />
        </div>

        ";
        // line 502
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "existing_entity", array()), 'widget');
        echo "
        ";
        // line 503
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mode", array()), 'widget');
        echo "
    </div>
    <script type=\"text/javascript\">
        require(['jquery', 'oroform/js/create-select-type-handler'],
        function (\$, createSelectTypeHandler) {
            \$(function() {
                createSelectTypeHandler(
                    '#";
        // line 510
        echo twig_escape_filter($this->env, ($context["btnGroupId"] ?? null), "html", null, true);
        echo "',
                    '#";
        // line 511
        echo twig_escape_filter($this->env, ($context["viewsContainerId"] ?? null), "html", null, true);
        echo "',
                    '#";
        // line 512
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "mode", array()), "vars", array()), "id", array()), "html", null, true);
        echo "',
                    '#";
        // line 513
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "existing_entity", array()), "vars", array()), "id", array()), "html", null, true);
        echo "',
                    '#";
        // line 514
        echo twig_escape_filter($this->env, ($context["routeParametersElement"] ?? null), "html", null, true);
        echo "',
                    ";
        // line 515
        echo twig_jsonencode_filter(($context["gridWidgetAlias"] ?? null));
        echo ",
                    ";
        // line 516
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "view_widgets", array()));
        echo ",
                    ";
        // line 517
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "existing_entity_grid_id", array()));
        echo ",
                    ";
        // line 518
        echo twig_jsonencode_filter(($context["currentMode"] ?? null));
        echo ",
                    ";
        // line 519
        echo twig_jsonencode_filter(($context["allRouteParameters"] ?? null));
        echo "
                );
            });
        });
    </script>
";
    }

    // line 526
    public function block_oro_entity_create_or_select_choice_widget($context, array $blocks = array())
    {
        // line 527
        echo "    <div class=\"create-select-entity-choice-container\"
         data-page-component-module=\"oroform/js/app/components/create-or-select-choice-component\"
         data-page-component-options=\"";
        // line 529
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("modeSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 530
($context["form"] ?? null), "mode", array()), "vars", array()), "id", array())), "newEntitySelector" => ".new-entity", "existingEntitySelector" => ".existing-entity", "existingEntityInputSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 533
($context["form"] ?? null), "existing_entity", array()), "vars", array()), "id", array())), "editable" => (($this->getAttribute($this->getAttribute(        // line 534
($context["form"] ?? null), "vars", array(), "any", false, true), "editable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "editable", array()), false)) : (false)), "editRoute" => (($this->getAttribute($this->getAttribute(        // line 535
($context["form"] ?? null), "vars", array(), "any", false, true), "edit_route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "edit_route", array()), null)) : (null)))), "html", null, true);
        // line 536
        echo "\">
        <div class=\"existing-entity\">
            ";
        // line 538
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "existing_entity", array()), 'widget');
        echo "
        </div>
        <div class=\"new-entity\">
            ";
        // line 541
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "new_entity", array()), 'widget');
        echo "
        </div>
        ";
        // line 543
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mode", array()), 'widget');
        echo "
    </div>
";
    }

    // line 547
    public function block_oro_entity_create_or_select_inline_widget($context, array $blocks = array())
    {
        // line 548
        echo "    ";
        $context["isButtonsEnabled"] = ( !($context["disabled"] ?? null) &&  !($context["read_only"] ?? null));
        // line 549
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-el\"
            ";
        // line 550
        if (( !$this->getAttribute(($context["configs"] ?? null), "extra_config", array(), "any", true, true) ||  !$this->getAttribute(($context["configs"] ?? null), "extra_config", array()))) {
            // line 551
            echo "                ";
            if (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "configs", array(), "any", false, true), "async_dialogs", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "configs", array(), "any", false, true), "async_dialogs", array()), false)) : (false)) === true)) {
                // line 552
                echo "                    ";
                $context["asyncNameSegment"] = "async-";
                // line 553
                echo "                ";
            }
            // line 554
            echo "                ";
            $context["urlParts"] = array("grid" => array("route" => (($this->getAttribute($this->getAttribute(            // line 556
($context["form"] ?? null), "vars", array(), "any", false, true), "grid_widget_route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "grid_widget_route", array()), "oro_datagrid_widget")) : ("oro_datagrid_widget")), "gridWidgetView" => (($this->getAttribute($this->getAttribute(            // line 557
($context["form"] ?? null), "vars", array(), "any", false, true), "grid_view_widget_route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "grid_view_widget_route", array()), "oro_datagrid_widget")) : ("oro_datagrid_widget")), "parameters" => array("gridName" => $this->getAttribute($this->getAttribute(            // line 559
($context["form"] ?? null), "vars", array()), "grid_name", array()), "params" => $this->getAttribute($this->getAttribute(            // line 560
($context["form"] ?? null), "vars", array()), "grid_parameters", array()), "renderParams" => $this->getAttribute($this->getAttribute(            // line 561
($context["form"] ?? null), "vars", array()), "grid_render_parameters", array()))));
            // line 565
            echo "
                ";
            // line 566
            if (((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)) === true)) {
                // line 567
                echo "                    ";
                $context["urlParts"] = twig_array_merge(($context["urlParts"] ?? null), array("create" => array("route" => $this->getAttribute($this->getAttribute(                // line 569
($context["form"] ?? null), "vars", array()), "create_form_route", array()), "parameters" => $this->getAttribute($this->getAttribute(                // line 570
($context["form"] ?? null), "vars", array()), "create_form_route_parameters", array()))));
                // line 573
                echo "                ";
            }
            // line 574
            echo "                ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroFormBundle:Form:fields.html.twig", 574);
            // line 575
            echo "                ";
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => (("oroform/js/app/components/select-create-inline-type-" . ((            // line 576
array_key_exists("asyncNameSegment", $context)) ? (_twig_default_filter(($context["asyncNameSegment"] ?? null), "")) : (""))) . "component"), "options" => array("inputSelector" => ("#" .             // line 578
($context["id"] ?? null)), "entityLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(            // line 579
($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "urlParts" =>             // line 580
($context["urlParts"] ?? null), "existingEntityGridId" => (($this->getAttribute($this->getAttribute(            // line 581
($context["form"] ?? null), "vars", array(), "any", false, true), "existing_entity_grid_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "existing_entity_grid_id", array()), "id")) : ("id")), "createEnabled" => (($this->getAttribute($this->getAttribute(            // line 582
($context["form"] ?? null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)))));
            // line 584
            echo "
            ";
        } else {
            // line 586
            echo "                ";
            $context["_block"] =             $this->renderBlock(("oro_entity_create_or_select_inline_js_" . $this->getAttribute(($context["configs"] ?? null), "extra_config", array())), $context, $blocks);
            // line 587
            echo "            ";
        }
        // line 588
        echo "        ";
        if (($context["isButtonsEnabled"] ?? null)) {
            echo "class=\"entity-create-or-select-container ";
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "create_enabled", array())) {
                echo "entity-create-enabled";
            }
            echo "\"";
        }
        echo ">
        <div ";
        // line 589
        if (($context["isButtonsEnabled"] ?? null)) {
            echo "class=\"input-append\"";
        }
        echo ">
            ";
        // line 590
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

            ";
        // line 592
        if (($context["isButtonsEnabled"] ?? null)) {
            // line 593
            echo "                <button class=\"add-on btn entity-select-btn\"><i class=\"fa-bars\"></i></button>

                ";
            // line 595
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "create_enabled", array())) {
                // line 596
                echo "                    <button class=\"btn entity-create-btn\"><i class=\"fa-plus\"></i></button>
                ";
            }
            // line 598
            echo "            ";
        }
        // line 599
        echo "        </div>
    </div>

    ";
        // line 602
        if ((array_key_exists("_block", $context) &&  !twig_test_empty(($context["_block"] ?? null)))) {
            // line 603
            echo "        ";
            echo ($context["_block"] ?? null);
            echo "
    ";
        }
    }

    // line 607
    public function block_oro_link_type_widget($context, array $blocks = array())
    {
        // line 608
        echo "    ";
        if ((($context["isPath"] ?? null) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(($context["acl"] ?? null)))) {
            echo " ";
            // line 609
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ((($context["isPath"] ?? null)) ? (($context["route"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), ($context["routeParameters"] ?? null)))), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (((array_key_exists("class", $context) && ($context["class"] ?? null))) ? (($context["class"] ?? null)) : ("")), "html", null, true);
            echo "\" style=\"display: block; margin-top: 5px;\">
            ";
            // line 610
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
            echo "
        </a>
    ";
        }
    }

    // line 615
    public function block_oro_download_links_type_widget($context, array $blocks = array())
    {
        // line 616
        echo "    ";
        ob_start();
        // line 617
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
        foreach ($context['_seq'] as $context["fileName"] => $context["route"]) {
            // line 618
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $context["route"], "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (((array_key_exists("class", $context) && ($context["class"] ?? null))) ? (($context["class"] ?? null)) : ("")), "html", null, true);
            echo "\" style=\"display: block; margin-top: 5px;\">
                ";
            // line 619
            echo twig_escape_filter($this->env, $context["fileName"], "html", null, true);
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fileName'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 622
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 625
    public function block_oro_simple_color_picker_row($context, array $blocks = array())
    {
        // line 626
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 629
    public function block_oro_simple_color_picker_widget($context, array $blocks = array())
    {
        // line 630
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(twig_array_merge(array("view" => "oroform/js/app/views/simple-color-picker-view"),         // line 632
($context["configs"] ?? null)))),         // line 633
($context["attr"] ?? null));
        // line 634
        echo "    ";
        $context["type"] = "hidden";
        // line 635
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 638
    public function block_oro_simple_color_choice_widget($context, array $blocks = array())
    {
        // line 639
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(twig_array_merge(array("view" => "oroform/js/app/views/simple-color-choice-view"),         // line 641
($context["configs"] ?? null)))),         // line 642
($context["attr"] ?? null));
        // line 643
        echo "    ";
        if ((((($context["required"] ?? null) && (null === ($context["empty_value"] ?? null))) &&  !($context["empty_value_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 644
            $context["required"] = false;
        }
        // line 646
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">
        ";
        // line 647
        if (($context["allow_empty_color"] ?? null)) {
            // line 648
            echo "<option value=\"\" class=\"empty-color\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            echo "</option>
            <optgroup label=\"---\"></optgroup>";
        }
        // line 651
        echo "        ";
        $context["options"] = ($context["choices"] ?? null);
        // line 652
        $this->displayBlock("oro_simple_color_choice_widget_options", $context, $blocks);
        // line 653
        echo "</select>
";
    }

    // line 656
    public function block_oro_simple_color_choice_widget_options($context, array $blocks = array())
    {
        // line 657
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 658
            if (twig_test_iterable($context["choice"])) {
                // line 659
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, $context["group_label"], "html", null, true);
                echo "\"></optgroup>";
            } else {
                // line 661
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((($context["translatable"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["translation_domain"] ?? null))) : ($this->getAttribute($context["choice"], "label", array()))), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 666
    public function block_oro_color_table_row($context, array $blocks = array())
    {
        // line 667
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 670
    public function block_oro_color_table_widget($context, array $blocks = array())
    {
        // line 671
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(twig_array_merge(array("view" => "oroform/js/app/views/color-table-view"),         // line 673
($context["configs"] ?? null)))),         // line 674
($context["attr"] ?? null));
        // line 675
        echo "    ";
        $context["type"] = "hidden";
        // line 676
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 679
    public function block_oro_resizeable_rich_text_widget($context, array $blocks = array())
    {
        // line 680
        echo "    ";
        $context["options"] = array("view" => "oroform/js/app/views/wysiwig-editor/wysiwyg-dialog-view", "editorComponentName" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 682
($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "data-page-component-name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 683
($context["form"] ?? null), "vars", array()), "attr", array()), "data-page-component-name", array(), "array")) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-ftid", array(), "array"))));
        // line 685
        echo "
    <div data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-name=\"wrap_";
        // line 687
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "data-page-component-name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 688
($context["form"] ?? null), "vars", array()), "attr", array()), "data-page-component-name", array(), "array")) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-ftid", array(), "array"))), "html", null, true);
        echo "\"
         data-page-component-options=\"";
        // line 689
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["options"] ?? null)), "html", null, true);
        echo "\"
         data-layout=\"separate\" >
        ";
        // line 691
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 695
    public function block_oro_entity_tree_select_row($context, array $blocks = array())
    {
        // line 696
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 699
    public function block_oro_entity_tree_select_widget($context, array $blocks = array())
    {
        // line 700
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroFormBundle:Form:fields.html.twig", 700);
        // line 701
        echo "    ";
        echo $context["UI"]->getrenderJsTree(array("treeOptions" => $this->getAttribute($this->getAttribute(        // line 703
($context["form"] ?? null), "vars", array()), "treeOptions", array()), "disableActions" => true));
        // line 706
        echo "

    ";
        // line 708
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    ";
        // line 709
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
";
    }

    // line 306
    public function getoro_collection_item_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 307
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 308
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 309
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 310
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "disabled", array());
                // line 311
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_delete", array());
                // line 312
                echo "        ";
                $context["allow_add_after"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_add_after", array());
                // line 313
                echo "    ";
            } else {
                // line 314
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 315
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 316
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "disabled", array());
                // line 317
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_delete", array());
                // line 318
                echo "        ";
                $context["allow_add_after"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_add_after", array());
                // line 319
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) {
                    // line 320
                    echo "            ";
                    $context["allow_delete"] = (($context["allow_delete"] ?? null) && $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_delete", array()));
                    // line 321
                    echo "        ";
                }
                // line 322
                echo "    ";
            }
            // line 323
            echo "    <div
        data-content=\"";
            // line 324
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
        data-validation-optional-group
        ";
            // line 326
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "data-validation-optional-group-handler", array(), "array", true, true)) {
                // line 327
                echo "            data-validation-optional-group-handler=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-validation-optional-group-handler", array(), "array"), "html", null, true);
                echo "\"
        ";
            }
            // line 329
            echo "    >
        <div class=\"row-oro oro-multiselect-holder";
            // line 330
            if ( !($context["allow_delete"] ?? null)) {
                echo " not-removable";
            }
            echo "\">
            ";
            // line 331
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("disabled" => ($context["disabled"] ?? null)));
            echo "
            ";
            // line 332
            if (($context["allow_delete"] ?? null)) {
                // line 333
                echo "            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">×</button>
            ";
            }
            // line 335
            echo "            ";
            if (($context["allow_add_after"] ?? null)) {
                // line 336
                echo "            <button class=\"addAfterRow btn btn-action btn-link\" type=\"button\" data-related=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">+</button>
            ";
            }
            // line 338
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 373
    public function getoro_collection_validate_primary_js($__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $__context__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 374
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroFormBundle:Form:fields.html.twig", 374);
            // line 375
            echo "    <div ";
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("_sourceElement" => ("#" . $this->getAttribute(            // line 378
($context["context"] ?? null), "id", array())), "view" => "oroform/js/app/views/fields-groups-collection-view")));
            // line 381
            echo "></div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroFormBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1656 => 381,  1654 => 378,  1652 => 375,  1649 => 374,  1637 => 373,  1620 => 338,  1614 => 336,  1611 => 335,  1605 => 333,  1603 => 332,  1599 => 331,  1593 => 330,  1590 => 329,  1584 => 327,  1582 => 326,  1577 => 324,  1574 => 323,  1571 => 322,  1568 => 321,  1565 => 320,  1562 => 319,  1559 => 318,  1556 => 317,  1553 => 316,  1550 => 315,  1547 => 314,  1544 => 313,  1541 => 312,  1538 => 311,  1535 => 310,  1532 => 309,  1529 => 308,  1526 => 307,  1514 => 306,  1508 => 709,  1504 => 708,  1500 => 706,  1498 => 703,  1496 => 701,  1493 => 700,  1490 => 699,  1483 => 696,  1480 => 695,  1473 => 691,  1468 => 689,  1464 => 688,  1463 => 687,  1459 => 685,  1457 => 683,  1456 => 682,  1454 => 680,  1451 => 679,  1444 => 676,  1441 => 675,  1439 => 674,  1438 => 673,  1436 => 671,  1433 => 670,  1426 => 667,  1423 => 666,  1406 => 661,  1401 => 659,  1399 => 658,  1394 => 657,  1391 => 656,  1386 => 653,  1384 => 652,  1381 => 651,  1371 => 648,  1369 => 647,  1361 => 646,  1358 => 644,  1355 => 643,  1353 => 642,  1352 => 641,  1350 => 639,  1347 => 638,  1340 => 635,  1337 => 634,  1335 => 633,  1334 => 632,  1332 => 630,  1329 => 629,  1322 => 626,  1319 => 625,  1314 => 622,  1305 => 619,  1298 => 618,  1293 => 617,  1290 => 616,  1287 => 615,  1279 => 610,  1272 => 609,  1268 => 608,  1265 => 607,  1257 => 603,  1255 => 602,  1250 => 599,  1247 => 598,  1243 => 596,  1241 => 595,  1237 => 593,  1235 => 592,  1230 => 590,  1224 => 589,  1213 => 588,  1210 => 587,  1207 => 586,  1203 => 584,  1201 => 582,  1200 => 581,  1199 => 580,  1198 => 579,  1197 => 578,  1196 => 576,  1194 => 575,  1191 => 574,  1188 => 573,  1186 => 570,  1185 => 569,  1183 => 567,  1181 => 566,  1178 => 565,  1176 => 561,  1175 => 560,  1174 => 559,  1173 => 557,  1172 => 556,  1170 => 554,  1167 => 553,  1164 => 552,  1161 => 551,  1159 => 550,  1154 => 549,  1151 => 548,  1148 => 547,  1141 => 543,  1136 => 541,  1130 => 538,  1126 => 536,  1124 => 535,  1123 => 534,  1122 => 533,  1121 => 530,  1120 => 529,  1116 => 527,  1113 => 526,  1103 => 519,  1099 => 518,  1095 => 517,  1091 => 516,  1087 => 515,  1083 => 514,  1079 => 513,  1075 => 512,  1071 => 511,  1067 => 510,  1057 => 503,  1053 => 502,  1046 => 498,  1042 => 497,  1038 => 496,  1035 => 495,  1027 => 492,  1025 => 491,  1024 => 490,  1023 => 489,  1022 => 488,  1021 => 487,  1019 => 485,  1016 => 484,  1014 => 483,  1011 => 482,  1006 => 481,  1004 => 480,  998 => 479,  993 => 476,  991 => 475,  990 => 474,  989 => 473,  988 => 472,  987 => 470,  980 => 466,  977 => 465,  972 => 464,  968 => 463,  960 => 458,  952 => 457,  946 => 454,  938 => 453,  933 => 450,  927 => 448,  921 => 446,  919 => 445,  914 => 443,  910 => 442,  901 => 440,  897 => 439,  893 => 437,  890 => 436,  887 => 435,  884 => 434,  881 => 433,  878 => 432,  875 => 431,  868 => 428,  866 => 426,  865 => 425,  863 => 424,  860 => 423,  858 => 421,  856 => 420,  853 => 419,  850 => 418,  841 => 412,  837 => 411,  830 => 410,  824 => 407,  821 => 406,  819 => 405,  814 => 403,  807 => 402,  802 => 401,  800 => 400,  797 => 399,  794 => 398,  791 => 397,  788 => 396,  783 => 393,  781 => 391,  780 => 389,  778 => 386,  775 => 385,  772 => 384,  767 => 370,  761 => 368,  759 => 367,  756 => 366,  750 => 364,  748 => 363,  745 => 362,  742 => 361,  733 => 359,  728 => 358,  725 => 357,  716 => 355,  711 => 354,  709 => 353,  703 => 352,  686 => 351,  684 => 350,  681 => 349,  678 => 348,  675 => 347,  672 => 346,  669 => 345,  666 => 344,  663 => 343,  660 => 342,  654 => 303,  651 => 302,  649 => 300,  648 => 298,  645 => 297,  643 => 292,  642 => 291,  641 => 290,  640 => 289,  639 => 284,  638 => 278,  637 => 277,  636 => 276,  635 => 275,  634 => 270,  631 => 269,  628 => 268,  625 => 267,  622 => 266,  619 => 265,  617 => 264,  614 => 263,  611 => 262,  608 => 261,  605 => 260,  603 => 259,  600 => 258,  597 => 257,  594 => 256,  591 => 255,  585 => 252,  582 => 251,  580 => 249,  579 => 247,  576 => 246,  574 => 242,  573 => 241,  572 => 240,  571 => 234,  570 => 233,  569 => 232,  568 => 231,  567 => 226,  564 => 225,  561 => 224,  559 => 223,  556 => 222,  553 => 221,  550 => 220,  548 => 219,  545 => 218,  542 => 217,  539 => 216,  536 => 215,  533 => 214,  530 => 213,  523 => 210,  520 => 209,  517 => 208,  510 => 205,  507 => 204,  504 => 203,  497 => 200,  494 => 199,  491 => 198,  484 => 195,  481 => 194,  478 => 193,  465 => 187,  462 => 185,  459 => 183,  457 => 182,  455 => 181,  453 => 180,  438 => 179,  435 => 175,  434 => 174,  433 => 173,  432 => 172,  431 => 171,  430 => 170,  428 => 169,  425 => 168,  422 => 167,  419 => 166,  416 => 165,  413 => 164,  410 => 163,  407 => 162,  405 => 161,  402 => 160,  399 => 159,  396 => 158,  393 => 157,  390 => 156,  387 => 155,  384 => 154,  381 => 153,  378 => 152,  375 => 151,  372 => 150,  369 => 149,  366 => 148,  363 => 147,  357 => 143,  351 => 141,  349 => 140,  345 => 138,  336 => 136,  332 => 135,  326 => 132,  321 => 130,  317 => 129,  313 => 128,  309 => 127,  305 => 126,  301 => 125,  297 => 124,  293 => 123,  287 => 120,  283 => 118,  280 => 117,  277 => 116,  274 => 115,  271 => 114,  268 => 113,  265 => 112,  262 => 111,  259 => 110,  257 => 109,  251 => 106,  247 => 105,  239 => 100,  233 => 98,  230 => 97,  224 => 94,  180 => 53,  173 => 48,  170 => 47,  161 => 44,  158 => 43,  153 => 40,  151 => 39,  150 => 38,  148 => 36,  145 => 35,  142 => 34,  139 => 33,  136 => 32,  133 => 31,  130 => 30,  127 => 29,  124 => 28,  121 => 27,  118 => 26,  115 => 25,  112 => 24,  110 => 23,  108 => 20,  105 => 19,  102 => 18,  99 => 17,  96 => 16,  93 => 15,  90 => 14,  87 => 13,  84 => 12,  81 => 11,  78 => 10,  75 => 9,  72 => 8,  69 => 7,  66 => 6,  63 => 5,  60 => 4,  57 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroFormBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/platform/src/Oro/Bundle/FormBundle/Resources/views/Form/fields.html.twig");
    }
}

<?php

/* OroQueryDesignerBundle::macros.html.twig */
class __TwigTemplate_c76b3cd94cbd80fe68be6faee33354ab09154242483ab9579aabf9694153a941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 45
        echo "
";
        // line 76
        echo "
";
        // line 95
        echo "
";
        // line 129
        echo "
";
        // line 150
        echo "
";
        // line 216
        echo "
";
        // line 248
        echo "
";
        // line 267
        echo "
";
    }

    // line 1
    public function getquery_designer_condition_builder($__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["params"] = twig_array_merge(array("column_chain_template_selector" => "#column-chain-template", "field_choice_filter_preset" => "querydesigner"),             // line 5
($context["params"] ?? null));
            // line 6
            echo "    ";
            $context["fieldConditionModule"] = (($this->getAttribute(($context["params"] ?? null), "fieldConditionModule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "fieldConditionModule", array()), "oroquerydesigner/js/app/views/field-condition-view")) : ("oroquerydesigner/js/app/views/field-condition-view"));
            // line 7
            echo "    ";
            $context["fieldConditionOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(array("filters" => (($this->getAttribute($this->getAttribute(            // line 8
($context["params"] ?? null), "metadata", array(), "any", false, true), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "metadata", array(), "any", false, true), "filters", array()), array())) : (array())), "hierarchy" => (($this->getAttribute($this->getAttribute(            // line 9
($context["params"] ?? null), "metadata", array(), "any", false, true), "hierarchy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "metadata", array(), "any", false, true), "hierarchy", array()), array())) : (array())), "fieldChoice" => array("filterPreset" => $this->getAttribute(            // line 11
($context["params"] ?? null), "field_choice_filter_preset", array()), "select2" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.condition_builder.choose_entity_field"), "formatSelectionTemplateSelector" => (($this->getAttribute(            // line 14
($context["params"] ?? null), "column_chain_template_selector", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "column_chain_template_selector", array()), null)) : (null))))), (($this->getAttribute(            // line 17
($context["params"] ?? null), "fieldConditionOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "fieldConditionOptions", array()), array())) : (array())));
            // line 18
            echo "    ";
            $context["conditionBuilderOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(array("fieldsRelatedCriteria" => array(0 => "condition-item")), (($this->getAttribute(            // line 20
($context["params"] ?? null), "conditionBuilderOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "conditionBuilderOptions", array()), array())) : (array())));
            // line 21
            echo "    <div class=\"condition-builder left-panel-container\"
         data-page-component-module=\"oroquerydesigner/js/app/components/condition-builder-component\"
         data-page-component-options=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["conditionBuilderOptions"] ?? null)), "html", null, true);
            echo "\"
         data-page-component-name=\"";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["params"] ?? null), "componentName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "componentName", array()), "condition-builder")) : ("condition-builder")), "html", null, true);
            echo "\">
        <div class=\"row-fluid\">
            <div class=\"left-area filter-criteria\">
                <div class=\"hint\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.condition_builder.criteria.drag_hint"), "html", null, true);
            echo "</div>
                <ul class=\"criteria-list\">
                    <li class=\"option\" data-criteria=\"condition-item\"
                        data-module=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["fieldConditionModule"] ?? null), "html", null, true);
            echo "\"
                        data-options=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["fieldConditionOptions"] ?? null)), "html", null, true);
            echo "\">
                        ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.condition_builder.criteria.field_condition"), "html", null, true);
            echo "
                    </li>
                    <li class=\"option\" data-criteria=\"conditions-group\">
                        ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.condition_builder.criteria.conditions_group"), "html", null, true);
            echo "
                    </li>
                </ul>
            </div>
            <div class=\"right-area\">
                <div class=\"condition-container\"></div>
            </div>
        </div>
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

    // line 46
    public function getquery_designer_column_list($__attr__ = null, $__showItems__ = array(0 => "column", 1 => "label", 2 => "function", 3 => "sorting", 4 => "action"), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attr" => $__attr__,
            "showItems" => $__showItems__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 47
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroQueryDesignerBundle::macros.html.twig", 47);
            // line 48
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? null), array())) : (array())), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " grid-container query-designer-grid-container query-designer-columns-grid-container"))));
            // line 49
            echo "    <div";
            echo $context["UI"]->getattributes(($context["attr"] ?? null));
            echo ">
        <table class=\"grid table-hover table table-bordered table-condensed\" style=\"display: table;\">
            <thead>
            <tr>
                ";
            // line 53
            if (twig_in_filter("column", ($context["showItems"] ?? null))) {
                // line 54
                echo "                <th class=\"name-column\"><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.column.column"), "html", null, true);
                echo "</span></th>
                ";
            }
            // line 56
            echo "                ";
            if (twig_in_filter("label", ($context["showItems"] ?? null))) {
                // line 57
                echo "                <th class=\"label-column\"><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.column.label"), "html", null, true);
                echo "</span></th>
                ";
            }
            // line 59
            echo "                ";
            if (twig_in_filter("function", ($context["showItems"] ?? null))) {
                // line 60
                echo "                <th class=\"function-column\"><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.column.function"), "html", null, true);
                echo "</span></th>
                ";
            }
            // line 62
            echo "                ";
            if (twig_in_filter("sorting", ($context["showItems"] ?? null))) {
                // line 63
                echo "                <th class=\"sorting-column\"><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.column.sorting"), "html", null, true);
                echo "</span></th>
                ";
            }
            // line 65
            echo "                ";
            if (twig_in_filter("action", ($context["showItems"] ?? null))) {
                // line 66
                echo "                <th class=\"action-column\"><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.column.actions"), "html", null, true);
                echo "</span></th>
                ";
            }
            // line 68
            echo "            </tr>
            </thead>
            <tbody class=\"item-container\">
            </tbody>
        </table>
    </div>
    ";
            // line 74
            echo $this->getAttribute($this, "query_designer_column_template", array(0 => $this->getAttribute(($context["attr"] ?? null), "rowId", array()), 1 => ($context["showItems"] ?? null)), "method");
            echo "
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

    // line 77
    public function getquery_designer_grouping_list($__attr__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attr" => $__attr__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 78
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroQueryDesignerBundle::macros.html.twig", 78);
            // line 79
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? null), array())) : (array())), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " grid-container query-designer-grid-container query-designer-columns-grid-container"))));
            // line 80
            echo "    <div";
            echo $context["UI"]->getattributes(($context["attr"] ?? null));
            echo ">
        <div class=\"grid-container query-designer-grid-container query-designer-columns-grid-container\">
            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"display: table;\">
                <thead>
                <tr>
                    <th class=\"name-column\"><span>";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.column.column"), "html", null, true);
            echo "</span></th>
                    <th class=\"action-column\"><span>";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.column.actions"), "html", null, true);
            echo "</span></th>
                </tr>
                </thead>
                <tbody class=\"grouping-item-container\">
                </tbody>
            </table>
        </div>
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

    // line 96
    public function getquery_designer_column_template($__id__ = null, $__showItems__ = array(0 => "column", 1 => "label", 2 => "function", 3 => "sorting", 4 => "action"), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "showItems" => $__showItems__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 97
            echo "    <script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
        <tr data-cid=\"<%= cid %>\">
            ";
            // line 99
            if (twig_in_filter("column", ($context["showItems"] ?? null))) {
                // line 100
                echo "            <td class=\"name-cell<% if (obj.deleted) { %> deleted-field<% } %>\"><%= name %></td>
            ";
            }
            // line 102
            echo "            ";
            if (twig_in_filter("label", ($context["showItems"] ?? null))) {
                // line 103
                echo "            <td class=\"label-cell\"><%- label %></td>
            ";
            }
            // line 105
            echo "            ";
            if (twig_in_filter("function", ($context["showItems"] ?? null))) {
                // line 106
                echo "            <td class=\"function-cell\"><%= func %></td>
            ";
            }
            // line 108
            echo "            ";
            if (twig_in_filter("sorting", ($context["showItems"] ?? null))) {
                // line 109
                echo "            <td class=\"sorting-cell\"><%= sorting %></td>
            ";
            }
            // line 111
            echo "            ";
            if (twig_in_filter("action", ($context["showItems"] ?? null))) {
                // line 112
                echo "            <td class=\"action-cell\">
                <a href=\"javascript: void(0);\" class=\"action no-hash edit-button\"
                        title=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.action.update_column"), "html", null, true);
                echo "\"
                        data-collection-action=\"edit\">
                    <i class=\"fa-pencil-square-o hide-text\"></i></a>
                <a href=\"javascript: void(0);\" class=\"action no-hash delete-button\"
                        title=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.action.delete_column"), "html", null, true);
                echo "\"
                        data-collection-action=\"delete\"
                        data-message=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.action.delete_column_confirmation"), "html", null, true);
                echo "\">
                    <i class=\"fa-trash-o hide-text\"></i></a>
                <span title=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.action.move_column"), "html", null, true);
                echo "\">
                    <i class=\"fa-arrows-v handle\"></i></span>
            </td>
            ";
            }
            // line 126
            echo "        </tr>
    </script>
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

    // line 130
    public function getquery_designer_grouping_item_template($__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 131
            echo "    <script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
        <tr data-cid=\"<%= cid %>\">
            <td class=\"name-cell<% if (obj.deleted) { %> deleted-field<% } %>\"><%= name %></td>
            <td class=\"action-cell\">
                <a href=\"javascript: void(0);\" class=\"action no-hash edit-button\"
                        title=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.action.update_column"), "html", null, true);
            echo "\"
                        data-collection-action=\"edit\">
                    <i class=\"fa-pencil-square-o hide-text\"></i></a>
                <a href=\"javascript: void(0);\" class=\"action no-hash delete-button\"
                        title=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.action.delete_column"), "html", null, true);
            echo "\"
                        data-collection-action=\"delete\"
                        data-message=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.action.delete_column_confirmation"), "html", null, true);
            echo "\">
                    <i class=\"fa-trash-o hide-text\"></i></a>
                <span title=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.datagrid.action.move_column"), "html", null, true);
            echo "\">
                    <i class=\"fa-arrows-v handle\"></i></span>
            </td>
        </tr>
    </script>
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

    // line 151
    public function getquery_designer_column_form($__form__ = null, $__attr__ = null, $__params__ = null, $__showItems__ = array(0 => "column", 1 => "label", 2 => "function", 3 => "sorting", 4 => "action"), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "attr" => $__attr__,
            "params" => $__params__,
            "showItems" => $__showItems__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 152
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroQueryDesignerBundle::macros.html.twig", 152);
            // line 153
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? null), array())) : (array())), array("class" => twig_trim_filter(((($this->getAttribute(            // line 154
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " query-designer-form clearfix"))));
            // line 156
            echo "    <div ";
            echo $context["UI"]->getattributes(($context["attr"] ?? null));
            echo ">
        ";
            // line 158
            echo "        ";
            if (twig_in_filter("column", ($context["showItems"] ?? null))) {
                // line 159
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', array("label" => "oro.query_designer.form.column", "attr" => array("data-purpose" => "column-selector", "data-validation" => twig_jsonencode_filter(array("NotBlank" => null)))));
                // line 165
                echo "
        ";
            }
            // line 167
            echo "        ";
            // line 168
            echo "        ";
            if (twig_in_filter("label", ($context["showItems"] ?? null))) {
                // line 169
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row', array("label" => "oro.query_designer.form.label", "attr" => array("class" => "label-text", "data-purpose" => "label", "data-validation" => twig_jsonencode_filter(array("NotBlank" => null)))));
                // line 176
                echo "
        ";
            }
            // line 178
            echo "        ";
            if (twig_in_filter("function", ($context["showItems"] ?? null))) {
                // line 179
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "func", array()), 'row', array("label" => "oro.query_designer.form.function", "attr" => array("class" => "function-selector", "data-purpose" => "function-selector")));
                // line 185
                echo "
        ";
            }
            // line 187
            echo "        ";
            if (twig_in_filter("sorting", ($context["showItems"] ?? null))) {
                // line 188
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sorting", array()), 'row', array("label" => "oro.query_designer.form.sorting", "attr" => array("class" => "sorting-selector", "data-purpose" => "sorting-selector")));
                // line 194
                echo "
        ";
            }
            // line 196
            echo "        ";
            if (twig_in_filter("action", ($context["showItems"] ?? null))) {
                // line 197
                echo "        <div class=\"pull-right\">
            ";
                // line 198
                echo $context["UI"]->getclientButton(array("aCss" => "no-hash cancel-button column-form-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.form.action.cancel")));
                // line 201
                echo "
            ";
                // line 202
                echo $context["UI"]->getclientButton(array("visible" => false, "aCss" => "no-hash btn-success save-button column-form-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.form.action.save")));
                // line 206
                echo "
            ";
                // line 207
                echo $context["UI"]->getclientButton(array("visible" => false, "aCss" => "no-hash btn-primary add-button column-form-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.form.action.add")));
                // line 211
                echo "
        </div>
        ";
            }
            // line 214
            echo "    </div>
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

    // line 217
    public function getquery_designer_grouping_form($__form__ = null, $__attr__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "attr" => $__attr__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 218
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroQueryDesignerBundle::macros.html.twig", 218);
            // line 219
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? null), array())) : (array())), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " query-designer-grouping-form query-designer-form clearfix"))));
            // line 220
            echo "    <div";
            echo $context["UI"]->getattributes(($context["attr"] ?? null));
            echo ">
        ";
            // line 222
            echo "        ";
            // line 223
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "columnNames", array()), 'row', array("label" => "oro.query_designer.form.grouping_columns", "attr" => array("data-purpose" => "column-selector", "data-validation" => twig_jsonencode_filter(array("NotBlank" => null)))));
            // line 229
            echo "
        <div class=\"pull-right\">
            ";
            // line 231
            echo $context["UI"]->getclientButton(array("aCss" => "no-hash cancel-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.form.action.cancel")));
            // line 234
            echo "
            ";
            // line 235
            echo $context["UI"]->getclientButton(array("visible" => false, "aCss" => "no-hash btn-success save-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.form.action.save")));
            // line 239
            echo "
            ";
            // line 240
            echo $context["UI"]->getclientButton(array("visible" => false, "aCss" => "no-hash btn-primary add-button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.form.action.add")));
            // line 244
            echo "
        </div>
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

    // line 249
    public function getquery_designer_date_grouping_form($__form__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 250
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroQueryDesignerBundle::macros.html.twig", 250);
            // line 251
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter(($context["attr"] ?? null), array())) : (array())), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " query-designer-grouping-form query-designer-form clearfix"))));
            // line 252
            echo "    <div";
            echo $context["UI"]->getattributes(($context["attr"] ?? null));
            echo " ";
            echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "oroquerydesigner/js/app/views/date-grouping-view")));
            // line 257
            echo ">
        ";
            // line 258
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "useDateGroupFilter", array()), 'row');
            echo "
        ";
            // line 259
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fieldName", array()), 'row', array("attr" => array("data-purpose" => "date-grouping-selector")));
            // line 263
            echo "
        ";
            // line 264
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "useSkipEmptyPeriodsFilter", array()), 'row');
            echo "
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

    // line 268
    public function getquery_designer_column_chain_template($__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 269
            echo "    ";
            ob_start();
            // line 270
            echo "    <script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
        <span class=\"entity-field-path\">
        <% _.each(obj, function (item, index, list) { %>
            <% if (index === 0) { %>
                <span><%= _.escape(item.entity.label) %></span>
            <% }  else { %>
                <% if (index !== list.length - 1) { %>
                    <span><%= _.escape(item.field.label) %></span>
                <% } else { %>
                    <b><%= _.escape(item.field.label) %></b>
                <% } %>
            <% } %>
        <% }) %>
        </span>
    </script>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return "OroQueryDesignerBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  680 => 270,  677 => 269,  665 => 268,  647 => 264,  644 => 263,  642 => 259,  638 => 258,  635 => 257,  630 => 252,  627 => 251,  624 => 250,  611 => 249,  593 => 244,  591 => 240,  588 => 239,  586 => 235,  583 => 234,  581 => 231,  577 => 229,  574 => 223,  572 => 222,  567 => 220,  564 => 219,  561 => 218,  547 => 217,  531 => 214,  526 => 211,  524 => 207,  521 => 206,  519 => 202,  516 => 201,  514 => 198,  511 => 197,  508 => 196,  504 => 194,  501 => 188,  498 => 187,  494 => 185,  491 => 179,  488 => 178,  484 => 176,  481 => 169,  478 => 168,  476 => 167,  472 => 165,  469 => 159,  466 => 158,  461 => 156,  459 => 154,  457 => 153,  454 => 152,  439 => 151,  418 => 144,  413 => 142,  408 => 140,  401 => 136,  392 => 131,  380 => 130,  363 => 126,  356 => 122,  351 => 120,  346 => 118,  339 => 114,  335 => 112,  332 => 111,  328 => 109,  325 => 108,  321 => 106,  318 => 105,  314 => 103,  311 => 102,  307 => 100,  305 => 99,  299 => 97,  286 => 96,  262 => 86,  258 => 85,  249 => 80,  246 => 79,  243 => 78,  231 => 77,  214 => 74,  206 => 68,  200 => 66,  197 => 65,  191 => 63,  188 => 62,  182 => 60,  179 => 59,  173 => 57,  170 => 56,  164 => 54,  162 => 53,  154 => 49,  151 => 48,  148 => 47,  135 => 46,  110 => 35,  104 => 32,  100 => 31,  96 => 30,  90 => 27,  84 => 24,  80 => 23,  76 => 21,  74 => 20,  72 => 18,  70 => 17,  69 => 14,  68 => 11,  67 => 9,  66 => 8,  64 => 7,  61 => 6,  59 => 5,  57 => 2,  45 => 1,  40 => 267,  37 => 248,  34 => 216,  31 => 150,  28 => 129,  25 => 95,  22 => 76,  19 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroQueryDesignerBundle::macros.html.twig", "");
    }
}

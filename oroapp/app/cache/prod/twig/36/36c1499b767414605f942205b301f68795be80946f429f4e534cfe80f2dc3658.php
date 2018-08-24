<?php

/* OroSegmentBundle::macros.html.twig */
class __TwigTemplate_325efd6fced06cdeda67f7b4664e499ce4cd5b626f4213ec95fff54015084dbf extends Twig_Template
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
        // line 53
        echo "
";
        // line 60
        echo "
";
        // line 84
        echo "
";
        // line 101
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
            $context["segment_selection_template_id"] = "segment-template";
            // line 7
            echo "    ";
            $context["segmentConditionOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(array("filters" => (($this->getAttribute($this->getAttribute(            // line 8
($context["params"] ?? null), "metadata", array(), "any", false, true), "filters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["params"] ?? null), "metadata", array(), "any", false, true), "filters", array()), array())) : (array())), "segmentChoice" => array("select2" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.condition_builder.choose_entity_segment"), "formatSelectionTemplateSelector" => ("#" .             // line 12
($context["segment_selection_template_id"] ?? null)), "ajax" => array("url" => "oro_api_get_segment_items", "quietMillis" => 100), "pageLimit" => (($this->getAttribute(            // line 17
($context["params"] ?? null), "page_limit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "page_limit", array()), 10)) : (10))), "currentSegment" => (($this->getAttribute(            // line 19
($context["params"] ?? null), "currentSegmentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "currentSegmentId", array()), null)) : (null)))), (($this->getAttribute(            // line 21
($context["params"] ?? null), "segmentConditionOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "segmentConditionOptions", array()), array())) : (array())));
            // line 22
            echo "    ";
            $context["conditionBuilderOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(array("fieldsRelatedCriteria" => array(0 => "condition-item", 1 => "condition-segment")), (($this->getAttribute(            // line 24
($context["params"] ?? null), "conditionBuilderOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "conditionBuilderOptions", array()), array())) : (array())));
            // line 25
            echo "    ";
            $context["conditionBuilderOptions"] = $this->env->getExtension('Oro\Bundle\SegmentBundle\Twig\SegmentExtension')->updateSegmentConditionBuilderOptions(($context["conditionBuilderOptions"] ?? null));
            // line 26
            echo "
    ";
            // line 27
            echo $this->getAttribute($this, "query_designer_segment_template", array(0 => ($context["segment_selection_template_id"] ?? null)), "method");
            echo "
    <div class=\"condition-builder left-panel-container\"
         data-page-component-module=\"oroquerydesigner/js/app/components/condition-builder-component\"
         data-page-component-options=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["conditionBuilderOptions"] ?? null)), "html", null, true);
            echo "\"
         data-page-component-name=\"";
            // line 31
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["params"] ?? null), "componentName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["params"] ?? null), "componentName", array()), "condition-builder")) : ("condition-builder")), "html", null, true);
            echo "\">
        <div class=\"row-fluid\">
            <div class=\"left-area filter-criteria\">
                <div class=\"hint\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.query_designer.condition_builder.criteria.drag_hint"), "html", null, true);
            echo "</div>
                <ul class=\"criteria-list\">
                    ";
            // line 36
            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, ((array_key_exists("segment_criteria_list", $context)) ? (_twig_default_filter(($context["segment_criteria_list"] ?? null), "segment_criteria_list")) : ("segment_criteria_list")), array("params" => ($context["params"] ?? null)));
            // line 37
            echo "                    <li class=\"option\" data-criteria=\"condition-segment\"
                        data-module=\"orosegment/js/app/views/segment-condition-view\"
                        data-options=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["segmentConditionOptions"] ?? null)), "html", null, true);
            echo "\">
                        ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.condition_builder.criteria.segment_condition"), "html", null, true);
            echo "
                    </li>
                    <li class=\"option\" data-criteria=\"conditions-group\">
                        ";
            // line 43
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

    // line 54
    public function getquery_designer_segment_template($__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 55
            echo "    <script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Apply segment", array(), "messages");
            // line 57
            echo "        <%= obj.text %>
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

    // line 67
    public function getrunButton($__entity__ = null, $__reloadRequired__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "reloadRequired" => $__reloadRequired__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 68
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSegmentBundle::macros.html.twig", 68);
            // line 69
            echo "    ";
            if ((($this->getAttribute(($context["entity"] ?? null), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) && ($this->getAttribute($this->getAttribute(            // line 70
($context["entity"] ?? null), "type", array()), "name", array()) == twig_constant("Oro\\Bundle\\SegmentBundle\\Entity\\SegmentType::TYPE_STATIC")))) {
                // line 72
                echo "        ";
                echo $context["UI"]->getclientButton(array("dataUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_api_post_segment_run", array("id" => $this->getAttribute(                // line 73
($context["entity"] ?? null), "id", array()))), "aCss" => "no-hash run-button btn", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.segment.action.refresh"), "iCss" => "fa-refresh", "dataAttributes" => array("page-component-module" => "orosegment/js/app/components/refresh-button", "page-component-options" => twig_jsonencode_filter(array("reloadRequired" =>                 // line 79
($context["reloadRequired"] ?? null))))));
                // line 81
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 92
    public function getsaveAndRefreshButton($__entity__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSegmentBundle::macros.html.twig", 93);
            // line 94
            echo "
    ";
            // line 95
            if ((($this->getAttribute(($context["entity"] ?? null), "id", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", ($context["entity"] ?? null))) && ($this->getAttribute($this->getAttribute(            // line 96
($context["entity"] ?? null), "type", array()), "name", array()) == twig_constant("Oro\\Bundle\\SegmentBundle\\Entity\\SegmentType::TYPE_STATIC")))) {
                // line 98
                echo "        ";
                echo $context["UI"]->getbuttonType(array("type" => "button", "class" => "btn-success main-group", "label" => "Save and refresh", "action" => "save_and_refresh"));
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 110
    public function getinitJsWidgets($__type__ = null, $__form__ = null, $__entities__ = null, $__metadata__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "form" => $__form__,
            "entities" => $__entities__,
            "metadata" => $__metadata__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 111
            echo "    ";
            $context["widgetOptions"] = array("valueSource" => (("[data-ftid=" .             // line 112
($context["type"] ?? null)) . "_form_definition]"), "entityChoice" => (("[data-ftid=" .             // line 113
($context["type"] ?? null)) . "_form_entity]"), "entityChangeConfirmMessage" => (twig_replace_filter(            // line 114
($context["type"] ?? null), "_", ".") . ".change_entity_confirmation"), "column" => array("editor" => array("namePattern" => (("^" .             // line 116
($context["type"] ?? null)) . "_form\\[column\\]\\[([\\w\\W]*)\\]\$")), "form" => (("#" .             // line 117
($context["type"] ?? null)) . "-column-form"), "itemContainer" => (("#" .             // line 118
($context["type"] ?? null)) . "-column-list .item-container"), "itemTemplate" => (("#" .             // line 119
($context["type"] ?? null)) . "-column-row")), "select2FieldChoiceTemplate" => "#column-chain-template", "metadata" =>             // line 122
($context["metadata"] ?? null));
            // line 124
            echo "
    ";
            // line 125
            if ((($context["type"] ?? null) == "oro_report")) {
                // line 126
                echo "        ";
                $context["widgetOptions"] = twig_array_merge(($context["widgetOptions"] ?? null), array("grouping" => array("editor" => array("mapping" => array("name" => "oro_report_form[grouping][columnNames]")), "form" => "#oro_report-grouping-form", "itemContainer" => "#oro_report-grouping-list .grouping-item-container", "itemTemplate" => "#oro_report-grouping-item-row")));
                // line 136
                echo "    ";
            }
            // line 137
            echo "
    ";
            // line 138
            $context["widgetOptions"] = $this->env->getExtension('Oro\Bundle\SegmentBundle\Twig\SegmentExtension')->updateSegmentWidgetOptions(($context["widgetOptions"] ?? null), ($context["type"] ?? null));
            // line 139
            echo "
    <div data-page-component-module=\"orosegment/js/app/components/segment-component\"
         data-page-component-options=\"";
            // line 141
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["widgetOptions"] ?? null)), "html", null, true);
            echo "\"></div>
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
        return "OroSegmentBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 141,  292 => 139,  290 => 138,  287 => 137,  284 => 136,  281 => 126,  279 => 125,  276 => 124,  274 => 122,  273 => 119,  272 => 118,  271 => 117,  270 => 116,  269 => 114,  268 => 113,  267 => 112,  265 => 111,  250 => 110,  231 => 98,  229 => 96,  228 => 95,  225 => 94,  222 => 93,  210 => 92,  193 => 81,  191 => 79,  190 => 73,  188 => 72,  186 => 70,  184 => 69,  181 => 68,  168 => 67,  151 => 57,  149 => 56,  144 => 55,  132 => 54,  107 => 43,  101 => 40,  97 => 39,  93 => 37,  91 => 36,  86 => 34,  80 => 31,  76 => 30,  70 => 27,  67 => 26,  64 => 25,  62 => 24,  60 => 22,  58 => 21,  57 => 19,  56 => 17,  55 => 12,  54 => 8,  52 => 7,  49 => 6,  47 => 5,  45 => 2,  33 => 1,  28 => 101,  25 => 84,  22 => 60,  19 => 53,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSegmentBundle::macros.html.twig", "");
    }
}

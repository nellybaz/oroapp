<?php

/* OroProductBundle:Form:fields.html.twig */
class __TwigTemplate_28a5839045e0988f17ed22d4471378620f952c0c64bfc5b292c0785fdc38c06f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_product_primary_unit_precision_widget' => array($this, 'block_oro_product_primary_unit_precision_widget'),
            'oro_product_unit_precision_widget' => array($this, 'block_oro_product_unit_precision_widget'),
            'oro_entity_extend_enum_value_widget' => array($this, 'block_oro_entity_extend_enum_value_widget'),
            'oro_product_precision_collection_widget' => array($this, 'block_oro_product_precision_collection_widget'),
            'oro_product_unit_precision_collection_widget' => array($this, 'block_oro_product_unit_precision_collection_widget'),
            'oro_product_image_collection_widget' => array($this, 'block_oro_product_image_collection_widget'),
            'oro_product_image_widget' => array($this, 'block_oro_product_image_widget'),
            'oro_product_page_variant_widget' => array($this, 'block_oro_product_page_variant_widget'),
            'oro_product_collection_segment_type_widget' => array($this, 'block_oro_product_collection_segment_type_widget'),
            'oro_product_collection_variant_widget' => array($this, 'block_oro_product_collection_variant_widget'),
            'oro_product_custom_variant_fields_collection_widget' => array($this, 'block_oro_product_custom_variant_fields_collection_widget'),
            'oro_product_variant_field_widget' => array($this, 'block_oro_product_variant_field_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_product_primary_unit_precision_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('oro_product_unit_precision_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('oro_entity_extend_enum_value_widget', $context, $blocks);
        // line 101
        echo "
";
        // line 102
        $this->displayBlock('oro_product_precision_collection_widget', $context, $blocks);
        // line 139
        echo "
";
        // line 140
        $this->displayBlock('oro_product_unit_precision_collection_widget', $context, $blocks);
        // line 153
        echo "
";
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('oro_product_image_collection_widget', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('oro_product_image_widget', $context, $blocks);
        // line 238
        echo "
";
        // line 239
        $this->displayBlock('oro_product_page_variant_widget', $context, $blocks);
        // line 242
        echo "
";
        // line 243
        $this->displayBlock('oro_product_collection_segment_type_widget', $context, $blocks);
        // line 464
        echo "
";
        // line 465
        $this->displayBlock('oro_product_collection_variant_widget', $context, $blocks);
        // line 468
        echo "
";
        // line 469
        $this->displayBlock('oro_product_custom_variant_fields_collection_widget', $context, $blocks);
        // line 481
        echo "
";
        // line 482
        $this->displayBlock('oro_product_variant_field_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_product_primary_unit_precision_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["precisions"] = array();
        // line 3
        echo "    ";
        $context["initialAdditionalUnits"] = array();
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "unit", array()), "vars", array()), "choices", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 6
            echo "        ";
            $context["precisions"] = twig_array_merge(($context["precisions"] ?? null), array($this->getAttribute($this->getAttribute($context["choice"], "data", array()), "code", array()) => $this->getAttribute($this->getAttribute($context["choice"], "data", array()), "defaultPrecision", array())));
            // line 7
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    ";
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "data", array()), "product", array()))) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "data", array()), "product", array()), "additionalUnitPrecisions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["addPrecision"]) {
                // line 10
                echo "            ";
                $context["initialAdditionalUnits"] = twig_array_merge(($context["initialAdditionalUnits"] ?? null), array($this->getAttribute($this->getAttribute($context["addPrecision"], "unit", array()), "code", array()) => $this->getAttribute($this->getAttribute($context["addPrecision"], "unit", array()), "code", array())));
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addPrecision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    <div data-page-component-module=\"oroproduct/js/app/components/product-primary-unit-limitations-component\"
         data-page-component-options=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("precisions" => ($context["precisions"] ?? null), "initialAdditionalUnits" => ($context["initialAdditionalUnits"] ?? null))), "html", null, true);
        echo "\">

        <div class=\"float-holder\">
            <table>
                <tr>
                    <td>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'widget', array("attr" => array("style" => "width: 100px")));
        if ($this->getAttribute(($context["form"] ?? null), "unit_disabled", array(), "any", true, true)) {
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit_disabled", array()), 'widget', array("attr" => array("style" => "width: 100px")));
        }
        echo "</td>
                    <td><div class=\"control-label\"><label>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.precision.label"), "html", null, true);
        echo "<em>&nbsp;</em></label></div></td>
                    <td>";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "precision", array()), 'widget', array("attr" => array("class" => "precision", "style" => "width: 40px")));
        echo "</td>
                    <td>";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "conversionRate", array()), 'widget');
        echo "</td>
                    <td>";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sell", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'errors');
        echo "</td>
                    <td></td>
                    <td>";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "precision", array()), 'errors');
        echo "</td>
                </tr>
            </table>
        </div>
    </div>
";
    }

    // line 36
    public function block_oro_product_unit_precision_widget($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array());
        // line 38
        echo "
            <tr data-content=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" data-validation-optional-group class=\"oro-multiselect-holder grid-row\">
                <td>";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'widget', array("attr" => array("style" => "width: 100px")));
        if ($this->getAttribute(($context["form"] ?? null), "unit_disabled", array(), "any", true, true)) {
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit_disabled", array()), 'widget', array("attr" => array("style" => "width: 100px")));
        }
        echo "</td>
                <td>";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "precision", array()), 'widget', array("attr" => array("class" => "precision")));
        echo "</td>
                <td>";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "conversionRate", array()), 'widget', array("attr" => array("class" => "conversionRate")));
        echo "</td>
                <td>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sell", array()), 'widget', array("attr" => array("class" => "sell")));
        echo "</td>
                ";
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "allow_delete", array())) {
            // line 45
            echo "                    <td><button class=\"removeLineItem btn icons-holder\" type=\"button\" data-related=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"><i class=\"fa-close\"></i></button></td>
                ";
        }
        // line 47
        echo "            </tr>

";
    }

    // line 71
    public function block_oro_entity_extend_enum_value_widget($context, array $blocks = array())
    {
        // line 72
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "label", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append input-append-sortable collection-element-primary\">
            ";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'widget', array("disabled" => ($context["disabled"] ?? null)));
        echo "
            <span class=\"add-on ui-sortable-handle";
        // line 75
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo "\"
                  data-name=\"sortable-handle\"
                  title=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.enum_options.priority.tooltip"), "html", null, true);
        echo "\">
                 <i class=\"fa-arrows-v ";
        // line 78
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo "\"></i>
                ";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priority", array()), 'widget', array("disabled" => ($context["disabled"] ?? null)));
        echo "
            </span>
            <label class=\"add-on";
        // line 81
        if (($context["disabled"] ?? null)) {
            echo " disabled";
        }
        echo "\"
                   title=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.entity_extend.enum_options.default.tooltip"), "html", null, true);
        echo "\">
                ";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "is_default", array()), 'widget', array("disabled" => ($context["disabled"] ?? null)));
        echo "
            </label>
        </div>
        ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'errors');
        echo "
    </div>
    ";
        // line 88
        if ((array_key_exists("tooltip", $context) && ($context["tooltip"] ?? null))) {
            // line 89
            echo "        ";
            $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:Form:fields.html.twig", 89);
            // line 90
            echo "        ";
            echo $context["ui"]->gettooltip(            // line 91
($context["tooltip"] ?? null), ((            // line 92
array_key_exists("tooltip_parameters", $context)) ? (_twig_default_filter(($context["tooltip_parameters"] ?? null), array())) : (array())), ((            // line 93
array_key_exists("tooltip_placement", $context)) ? (_twig_default_filter(($context["tooltip_placement"] ?? null), null)) : (null)), ((            // line 94
array_key_exists("tooltip_details_enabled", $context)) ? (_twig_default_filter(($context["tooltip_details_enabled"] ?? null), false)) : (false)), ((            // line 95
array_key_exists("tooltip_details_link", $context)) ? (_twig_default_filter(($context["tooltip_details_link"] ?? null), null)) : (null)), ((            // line 96
array_key_exists("tooltip_details_anchor", $context)) ? (_twig_default_filter(($context["tooltip_details_anchor"] ?? null), null)) : (null)));
            // line 97
            echo "
    ";
        }
        // line 99
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 102
    public function block_oro_product_precision_collection_widget($context, array $blocks = array())
    {
        // line 103
        echo "    ";
        ob_start();
        // line 104
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 105
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_collection_item_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 106
            echo "        ";
        }
        // line 107
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection collection-fields-list")));
        // line 108
        echo "        ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 109
        echo "        <div class=\"row-oro\">
            ";
        // line 110
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 111
        echo "            <div>
                <table class=\"grid table table-condensed table-bordered table-hover\">
                    <thead>
                        <th>";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.unit.label"), "html", null, true);
        echo "</th>
                        <th>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.precision.label"), "html", null, true);
        echo "</th>
                        <th>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.conversion_rate.label"), "html", null, true);
        echo "</th>
                        <th>";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productunitprecision.sell.label"), "html", null, true);
        echo "</th>
                        <th></th>
                    </thead>
                    <tbody ";
        // line 120
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
                    ";
        // line 121
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 122
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 123
                echo "                            ";
                echo $this->getAttribute($this, "oro_collection_item_prototype", array(0 => $context["child"]), "method");
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                    ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 126
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_initial", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 127
                echo "                            ";
                echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => $context["i"]));
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                    ";
        }
        // line 130
        echo "                    </tbody>
                </table>
            </div>
            ";
        // line 133
        if ((($context["allow_add"] ?? null) && $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitFieldsSettingsExtension')->isAddingAdditionalUnitsToProductAvailable())) {
            // line 134
            echo "                <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
            echo "</a>
            ";
        }
        // line 136
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 140
    public function block_oro_product_unit_precision_collection_widget($context, array $blocks = array())
    {
        // line 141
        echo "    ";
        $context["precisions"] = array();
        // line 142
        echo "
    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype", array()), "unit", array()), "vars", array()), "choices", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 144
            echo "        ";
            $context["precisions"] = twig_array_merge(($context["precisions"] ?? null), array($this->getAttribute($this->getAttribute($context["choice"], "data", array()), "code", array()) => $this->getAttribute($this->getAttribute($context["choice"], "data", array()), "defaultPrecision", array())));
            // line 145
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "
    <div data-page-component-module=\"oroproduct/js/app/components/product-unit-selection-limitations-component\"
         data-page-component-options=\"";
        // line 148
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("precisions" => ($context["precisions"] ?? null))), "html", null, true);
        echo "\" class=\"unit-precisions-collection\">
        ";
        // line 149
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-options-collection ")));
        // line 150
        echo "        ";
        $this->displayBlock("oro_product_precision_collection_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 180
    public function block_oro_product_image_collection_widget($context, array $blocks = array())
    {
        // line 181
        echo "    ";
        ob_start();
        // line 182
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 183
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_product_image_collection_item_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 184
            echo "        ";
        }
        // line 185
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "image-collection oro-item-collection grid-container")));
        // line 186
        echo "        ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 187
        echo "        ";
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 188
        echo "
        <div class=\"row-oro\" data-page-component-module=\"oroproduct/js/app/components/product-image-type-radio-control-component\">
            <div ";
        // line 190
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                        <tr>
                            <th class=\"file\"><span>";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productimage.file.label"), "html", null, true);
        echo "</span></th>
                            ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "imageTypes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["imageType"]) {
            // line 196
            echo "                                <th><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["imageType"], "label", array())), "html", null, true);
            echo "</span></th>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "
                            ";
        // line 199
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "allow_delete", array())) {
            // line 200
            echo "                                <th class=\"remove\"></th>
                            ";
        }
        // line 202
        echo "                        </tr>
                    </thead>
                    <tbody data-last-index=\"";
        // line 204
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\"
                           data-row-count-add=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_add", array()), "html", null, true);
        echo "\"
                           data-prototype-name=\"";
        // line 206
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"
                            ";
        // line 207
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        // line 208
        echo "                    >
                    ";
        // line 209
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 210
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 211
                echo "                            ";
                echo $this->getAttribute($this, "oro_product_image_collection_item_prototype", array(0 => $context["child"]), "method");
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                    ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 214
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_initial", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 215
                echo "                            ";
                echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => $context["i"]));
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            echo "                    ";
        }
        // line 218
        echo "                    </tbody>
                </table>
                ";
        // line 220
        if (($context["allow_add"] ?? null)) {
            // line 221
            echo "                    <a class=\"btn add-list-item\" data-container=\".image-collection tbody\" href=\"javascript: void(0);\">
                        <i class=\"fa-plus\"></i>";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.productimage.add.label"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 225
        echo "            </div>
        </div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 231
    public function block_oro_product_image_widget($context, array $blocks = array())
    {
        // line 232
        echo "    <td><div class=\"pull-left\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "image", array()), 'widget');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "</div></td>

    ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "imageTypes", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["imageType"]) {
            // line 235
            echo "        <td>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["imageType"], array(), "array"), 'widget', array("attr" => array("data-image-type" => $context["imageType"])));
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 239
    public function block_oro_product_page_variant_widget($context, array $blocks = array())
    {
        // line 240
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productPageProduct", array()), 'row');
        echo "
";
    }

    // line 243
    public function block_oro_product_collection_segment_type_widget($context, array $blocks = array())
    {
        // line 244
        echo "    ";
        $context["scope"] = ("scope_" . ($context["scopeValue"] ?? null));
        // line 245
        echo "    ";
        $context["gridWidgetAlias"] = ("product-collection-products-grid-" . ($context["scope"] ?? null));
        // line 246
        echo "    ";
        $context["controlsBlockAlias"] = ("product-collection-grid-control-" . ($context["scope"] ?? null));
        // line 247
        echo "
    ";
        // line 248
        $context["gridName"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "results_grid", array()), ($context["scope"] ?? null));
        // line 249
        echo "    ";
        $context["excludedProductsGridName"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName(($context["excludedProductsGrid"] ?? null), ($context["scope"] ?? null));
        // line 250
        echo "    ";
        $context["includedProductsGridName"] = $this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName(($context["includedProductsGrid"] ?? null), ($context["scope"] ?? null));
        // line 251
        echo "    ";
        $context["widgetRouteParameters"] = array("gridName" =>         // line 252
($context["gridName"] ?? null), ("sd_" .         // line 253
($context["gridName"] ?? null)) => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "segmentDefinition", array()), (("sd_" .         // line 254
($context["gridName"] ?? null)) . ":incl") => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "includedProducts", array()), "vars", array()), "value", array()), (("sd_" .         // line 255
($context["gridName"] ?? null)) . ":excl") => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "excludedProducts", array()), "vars", array()), "value", array()));
        // line 257
        echo "    ";
        $context["excludedWidgetRouteParameters"] = array("gridName" =>         // line 258
($context["excludedProductsGridName"] ?? null), "params" => array("selectedProducts" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 259
($context["form"] ?? null), "excludedProducts", array()), "vars", array()), "value", array())));
        // line 261
        echo "    ";
        $context["includedWidgetRouteParameters"] = array("gridName" =>         // line 262
($context["includedProductsGridName"] ?? null), "params" => array("selectedProducts" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 263
($context["form"] ?? null), "includedProducts", array()), "vars", array()), "value", array())));
        // line 265
        echo "
    ";
        // line 266
        $context["gridSidebarComponentOptions"] = array("sidebarAlias" =>         // line 267
($context["controlsBlockAlias"] ?? null), "widgetAlias" =>         // line 268
($context["gridWidgetAlias"] ?? null), "widgetRouteParameters" =>         // line 269
($context["widgetRouteParameters"] ?? null));
        // line 271
        echo "
    ";
        // line 272
        $context["excludedControlsBlockAlias"] = ("product-collection-excluded-grid-control-" . ($context["scope"] ?? null));
        // line 273
        echo "    ";
        $context["includedControlsBlockAlias"] = ("product-collection-included-grid-control-" . ($context["scope"] ?? null));
        // line 274
        echo "    ";
        $context["excludedProductsElementId"] = ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "excludedProducts", array()), "vars", array()), "id", array()));
        // line 275
        echo "    ";
        $context["includedProductsElementId"] = ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "includedProducts", array()), "vars", array()), "id", array()));
        // line 276
        echo "    ";
        $context["productCollectionApplyQueryComponentOptions"] = array("selectors" => array("reset" => ".filter-reset", "apply" => ".filter-apply", "included" =>         // line 280
($context["includedProductsElementId"] ?? null), "excluded" =>         // line 281
($context["excludedProductsElementId"] ?? null)), "segmentDefinitionFieldName" => $this->getAttribute($this->getAttribute(        // line 283
($context["form"] ?? null), "vars", array()), "segmentDefinitionFieldName", array()), "controlsBlockAlias" =>         // line 284
($context["controlsBlockAlias"] ?? null), "gridName" =>         // line 285
($context["gridName"] ?? null), "scope" =>         // line 286
($context["scope"] ?? null), "excludedProductsGridName" =>         // line 287
($context["excludedProductsGrid"] ?? null), "includedProductsGridName" =>         // line 288
($context["includedProductsGrid"] ?? null), "excludedControlsBlockAlias" =>         // line 289
($context["excludedControlsBlockAlias"] ?? null), "includedControlsBlockAlias" =>         // line 290
($context["includedControlsBlockAlias"] ?? null));
        // line 292
        echo "
    ";
        // line 293
        $context["productCollectionSegmentOptions"] = array();
        // line 294
        echo "    ";
        if (((null === $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array())) || (null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array())))) {
            // line 295
            echo "        ";
            $context["productCollectionSegmentOptions"] = array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.product_collection.segment_name_placeholder")));
            // line 296
            echo "    ";
        }
        // line 297
        echo "
    ";
        // line 298
        if (($context["addNameField"] ?? null)) {
            // line 299
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row', ($context["productCollectionSegmentOptions"] ?? null));
            echo "
    ";
        }
        // line 301
        echo "
    <div data-role=\"grid-sidebar-component-container\" class=\"product-collection-segment\">
        ";
        // line 304
        echo "        <div
                data-page-component-module=\"oroproduct/js/app/components/product-collection-apply-query-component\"
                data-page-component-options=\"";
        // line 306
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["productCollectionApplyQueryComponentOptions"] ?? null)), "html", null, true);
        echo "\"
        >
            ";
        // line 309
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, ($context["controlsBlockAlias"] ?? null), "html", null, true);
        echo "\"
                 data-page-component-module=\"orodatagrid/js/app/components/grid-sidebar-component\"
                 data-page-component-options=\"";
        // line 311
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["gridSidebarComponentOptions"] ?? null)), "html", null, true);
        echo "\"
            >
                ";
        // line 313
        $context["ProductCollection"] = $this->loadTemplate("OroProductBundle::product_collection_macros.html.twig", "OroProductBundle:Form:fields.html.twig", 313);
        // line 314
        echo "                <div class=\"oro-tabs\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\">
                            <a href=\"#";
        // line 317
        echo twig_escape_filter($this->env, ("filtered_products" . ($context["scope"] ?? null)), "html", null, true);
        echo "\" data-toggle=\"tab\" data-role=\"tab-filtered\">
                                ";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.ui.filtered_products"), "html", null, true);
        echo "
                                (<span data-role=\"counter\">";
        // line 319
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OroProductBundle:AjaxGetProductsCount:get", ($context["widgetRouteParameters"] ?? null)));
        echo "</span>)
                            </a>
                        </li>
                        <li>
                            <a href=\"#";
        // line 323
        echo twig_escape_filter($this->env, ("excluded_products" . ($context["scope"] ?? null)), "html", null, true);
        echo "\" data-toggle=\"tab\" data-role=\"tab-excluded\">
                                ";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.ui.excluded_products"), "html", null, true);
        echo "
                                (<span data-role=\"counter\">";
        // line 325
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OroProductBundle:AjaxGetProductsCount:get", ($context["excludedWidgetRouteParameters"] ?? null)));
        echo "</span>)
                            </a>
                        </li>
                        <li>
                            <a href=\"#";
        // line 329
        echo twig_escape_filter($this->env, ("included_products" . ($context["scope"] ?? null)), "html", null, true);
        echo "\" data-toggle=\"tab\" data-role=\"tab-included\">
                                ";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.ui.included_products"), "html", null, true);
        echo "
                                (<span data-role=\"counter\">";
        // line 331
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OroProductBundle:AjaxGetProductsCount:get", ($context["includedWidgetRouteParameters"] ?? null)));
        echo "</span>)
                            </a>
                        </li>
                        <li class=\"pull-right\">
                            ";
        // line 336
        echo "                            <div class=\"btn-group\">
                                <a class=\"btn filter-reset\">
                                    ";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.ui.reset"), "html", null, true);
        echo "
                                </a>
                            </div>
                            ";
        // line 342
        echo "                        </li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"";
        // line 345
        echo twig_escape_filter($this->env, ("filtered_products" . ($context["scope"] ?? null)), "html", null, true);
        echo "\">
                            <div class=\"collapse-view\"
                                 data-page-component-collapse=\"";
        // line 347
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("openClass" => "expanded", "open" =>         // line 349
($context["hasFilters"] ?? null))), "html", null, true);
        // line 350
        echo "\"
                            >
                                <div class=\"top-frame\">
                                    <div class=\"control-group\">
                                        <div class=\"pull-right\">
                                            <div data-collapse-trigger class=\"btn-group icons-holder\">
                                                <a class=\"collapse-view__trigger btn\"><i class=\"fa-filter\"></i> ";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.ui.advanced_filter"), "html", null, true);
        echo "</a>
                                            </div>
                                            ";
        // line 358
        echo $context["ProductCollection"]->getpopupButton($this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName("product-collection-add-products-to-included-grid",         // line 359
($context["scope"] ?? null)),         // line 360
($context["includedProductsElementId"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.ui.hint.add_to_included"));
        // line 362
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div data-collapse-container class=\"filter control-group fields-row\">
                                    ";
        // line 367
        $this->displayBlock("oro_segment_filter_builder_row", $context, $blocks);
        echo "
                                    ";
        // line 369
        echo "<div class=\"clearfix\">
                                        <div class=\"pull-right\">
                                            <a class=\"btn btn-primary filter-apply\">
                                                ";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.ui.apply_query"), "html", null, true);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                    ";
        // line 377
        echo "                                </div>
                                ";
        // line 378
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_datagrid_widget",         // line 380
($context["widgetRouteParameters"] ?? null)), "title" => "", "alias" =>         // line 382
($context["gridWidgetAlias"] ?? null)));
        // line 383
        echo "
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"";
        // line 387
        echo twig_escape_filter($this->env, ("excluded_products" . ($context["scope"] ?? null)), "html", null, true);
        echo "\">
                            <div class=\"top-frame\">
                                <div class=\"control-group\">
                                    <div class=\"pull-right\">
                                        ";
        // line 391
        echo $context["ProductCollection"]->getpopupButton($this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName("product-collection-add-products-to-excluded-grid",         // line 392
($context["scope"] ?? null)),         // line 393
($context["excludedProductsElementId"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.ui.hint.add_to_excluded"));
        // line 395
        echo "
                                    </div>
                                </div>
                            </div>

                            ";
        // line 400
        $context["excludedGridWidgetAlias"] = ("product-collection-excluded-products-grid-" . ($context["scope"] ?? null));
        // line 401
        echo "                            ";
        $context["excludedGridSidebarComponentOptions"] = array("sidebarAlias" =>         // line 402
($context["excludedControlsBlockAlias"] ?? null), "widgetAlias" =>         // line 403
($context["excludedGridWidgetAlias"] ?? null), "widgetRouteParameters" =>         // line 404
($context["excludedWidgetRouteParameters"] ?? null));
        // line 406
        echo "
                            <div class=\"";
        // line 407
        echo twig_escape_filter($this->env, ($context["excludedControlsBlockAlias"] ?? null), "html", null, true);
        echo " control-group\"
                                 data-page-component-module=\"orodatagrid/js/app/components/grid-sidebar-component\"
                                 data-page-component-options=\"";
        // line 409
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["excludedGridSidebarComponentOptions"] ?? null)), "html", null, true);
        echo "\"
                            >
                                ";
        // line 411
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "excludedProducts", array()), 'widget');
        echo "
                                ";
        // line 412
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_datagrid_widget",         // line 414
($context["excludedWidgetRouteParameters"] ?? null)), "title" => "", "alias" =>         // line 416
($context["excludedGridWidgetAlias"] ?? null)));
        // line 417
        echo "
                            </div>

                        </div>

                        <div class=\"tab-pane\" id=\"";
        // line 422
        echo twig_escape_filter($this->env, ("included_products" . ($context["scope"] ?? null)), "html", null, true);
        echo "\">
                            <div class=\"top-frame\">
                                <div class=\"control-group\">
                                    <div class=\"pull-right\">
                                        ";
        // line 426
        echo $context["ProductCollection"]->getpopupButton($this->env->getExtension('Oro\Bundle\DataGridBundle\Twig\DataGridExtension')->buildGridFullName("product-collection-add-products-to-included-grid",         // line 427
($context["scope"] ?? null)),         // line 428
($context["includedProductsElementId"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.content_variant.ui.hint.add_to_included"));
        // line 430
        echo "
                                    </div>
                                </div>
                            </div>

                            ";
        // line 435
        $context["includedGridWidgetAlias"] = ("product-collection-included-products-grid-" . ($context["scope"] ?? null));
        // line 436
        echo "                            ";
        $context["includedGridSidebarComponentOptions"] = array("sidebarAlias" =>         // line 437
($context["includedControlsBlockAlias"] ?? null), "widgetAlias" =>         // line 438
($context["includedGridWidgetAlias"] ?? null), "widgetRouteParameters" =>         // line 439
($context["includedWidgetRouteParameters"] ?? null));
        // line 441
        echo "
                            <div class=\"";
        // line 442
        echo twig_escape_filter($this->env, ($context["includedControlsBlockAlias"] ?? null), "html", null, true);
        echo " control-group\"
                                 data-page-component-module=\"orodatagrid/js/app/components/grid-sidebar-component\"
                                 data-page-component-options=\"";
        // line 444
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["includedGridSidebarComponentOptions"] ?? null)), "html", null, true);
        echo "\"
                            >
                                ";
        // line 446
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "includedProducts", array()), 'widget');
        echo "
                                ";
        // line 447
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_datagrid_widget",         // line 449
($context["includedWidgetRouteParameters"] ?? null)), "title" => "", "alias" =>         // line 451
($context["includedGridWidgetAlias"] ?? null)));
        // line 452
        echo "
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 460
        echo "        </div>
        ";
        // line 462
        echo "    </div>
";
    }

    // line 465
    public function block_oro_product_collection_variant_widget($context, array $blocks = array())
    {
        // line 466
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productCollectionSegment", array()), 'widget');
        echo "
";
    }

    // line 469
    public function block_oro_product_custom_variant_fields_collection_widget($context, array $blocks = array())
    {
        // line 470
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroProductBundle:Form:fields.html.twig", 470);
        // line 471
        echo "    <div class=\"enum-value-collection\" ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "oroproduct/js/app/views/variant-fields-view", "autoRender" => true)));
        // line 477
        echo ">
        ";
        // line 478
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 482
    public function block_oro_product_variant_field_widget($context, array $blocks = array())
    {
        // line 483
        echo "    <div class=\"float-holder\">
        <div class=\"input-append input-append-sortable collection-element-primary\">
            <span class=\"add-on ui-sortable-handle\"
                  data-name=\"sortable-handle\"
                  title=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.variant_field.priority.tooltip"), "html", null, true);
        echo "\">
                <i class=\"fa-arrows-v\"></i>
                ";
        // line 489
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priority", array()), 'widget');
        echo "
            </span>
            <div class=\"add-on\" title=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.variant_field.default.tooltip"), "html", null, true);
        echo "\">
                ";
        // line 492
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "is_selected", array()), 'widget');
        echo "
            </div>
            <div class=\"add-on\" title=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.variant_field.default.tooltip"), "html", null, true);
        echo "\">
                ";
        // line 495
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "is_selected", array()), 'label');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 51
    public function getoro_collection_item_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 52
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 53
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 54
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 55
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "disabled", array());
                // line 56
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_delete", array());
                // line 57
                echo "        ";
                $context["allow_add_after"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_add_after", array());
                // line 58
                echo "    ";
            } else {
                // line 59
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 60
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 61
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "disabled", array());
                // line 62
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_delete", array());
                // line 63
                echo "        ";
                $context["allow_add_after"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_add_after", array());
                // line 64
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) {
                    // line 65
                    echo "            ";
                    $context["allow_delete"] = (($context["allow_delete"] ?? null) && $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_delete", array()));
                    // line 66
                    echo "        ";
                }
                // line 67
                echo "    ";
            }
            // line 68
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("disabled" => ($context["disabled"] ?? null)));
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

    // line 154
    public function getoro_product_image_collection_item_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 155
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 156
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 157
                echo "        ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 158
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "disabled", array());
                // line 159
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_delete", array());
                // line 160
                echo "    ";
            } else {
                // line 161
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 162
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 163
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "disabled", array());
                // line 164
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_delete", array());
                // line 165
                echo "    ";
            }
            // line 166
            echo "
    <tr data-content=\"";
            // line 167
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-validation-optional-group ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">

        ";
            // line 169
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "

        ";
            // line 171
            if (($context["allow_delete"] ?? null)) {
                // line 172
                echo "            <td>
                <button type=\"button\" class=\"removeRow btn icons-holder pull-right\"></button>
            </td>
        ";
            }
            // line 176
            echo "
    </tr>
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
        return "OroProductBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1248 => 176,  1242 => 172,  1240 => 171,  1235 => 169,  1228 => 167,  1225 => 166,  1222 => 165,  1219 => 164,  1216 => 163,  1213 => 162,  1210 => 161,  1207 => 160,  1204 => 159,  1201 => 158,  1198 => 157,  1195 => 156,  1192 => 155,  1180 => 154,  1162 => 68,  1159 => 67,  1156 => 66,  1153 => 65,  1150 => 64,  1147 => 63,  1144 => 62,  1141 => 61,  1138 => 60,  1135 => 59,  1132 => 58,  1129 => 57,  1126 => 56,  1123 => 55,  1120 => 54,  1117 => 53,  1114 => 52,  1102 => 51,  1093 => 495,  1089 => 494,  1084 => 492,  1080 => 491,  1075 => 489,  1070 => 487,  1064 => 483,  1061 => 482,  1054 => 478,  1051 => 477,  1048 => 471,  1045 => 470,  1042 => 469,  1035 => 466,  1032 => 465,  1027 => 462,  1024 => 460,  1015 => 452,  1013 => 451,  1012 => 449,  1011 => 447,  1007 => 446,  1002 => 444,  997 => 442,  994 => 441,  992 => 439,  991 => 438,  990 => 437,  988 => 436,  986 => 435,  979 => 430,  977 => 428,  976 => 427,  975 => 426,  968 => 422,  961 => 417,  959 => 416,  958 => 414,  957 => 412,  953 => 411,  948 => 409,  943 => 407,  940 => 406,  938 => 404,  937 => 403,  936 => 402,  934 => 401,  932 => 400,  925 => 395,  923 => 393,  922 => 392,  921 => 391,  914 => 387,  908 => 383,  906 => 382,  905 => 380,  904 => 378,  901 => 377,  894 => 372,  889 => 369,  885 => 367,  878 => 362,  876 => 360,  875 => 359,  874 => 358,  869 => 356,  861 => 350,  859 => 349,  858 => 347,  853 => 345,  848 => 342,  842 => 338,  838 => 336,  831 => 331,  827 => 330,  823 => 329,  816 => 325,  812 => 324,  808 => 323,  801 => 319,  797 => 318,  793 => 317,  788 => 314,  786 => 313,  781 => 311,  775 => 309,  770 => 306,  766 => 304,  762 => 301,  756 => 299,  754 => 298,  751 => 297,  748 => 296,  745 => 295,  742 => 294,  740 => 293,  737 => 292,  735 => 290,  734 => 289,  733 => 288,  732 => 287,  731 => 286,  730 => 285,  729 => 284,  728 => 283,  727 => 281,  726 => 280,  724 => 276,  721 => 275,  718 => 274,  715 => 273,  713 => 272,  710 => 271,  708 => 269,  707 => 268,  706 => 267,  705 => 266,  702 => 265,  700 => 263,  699 => 262,  697 => 261,  695 => 259,  694 => 258,  692 => 257,  690 => 255,  689 => 254,  688 => 253,  687 => 252,  685 => 251,  682 => 250,  679 => 249,  677 => 248,  674 => 247,  671 => 246,  668 => 245,  665 => 244,  662 => 243,  655 => 240,  652 => 239,  641 => 235,  637 => 234,  630 => 232,  627 => 231,  619 => 225,  613 => 222,  610 => 221,  608 => 220,  604 => 218,  601 => 217,  592 => 215,  587 => 214,  584 => 213,  575 => 211,  570 => 210,  568 => 209,  565 => 208,  559 => 207,  555 => 206,  551 => 205,  547 => 204,  543 => 202,  539 => 200,  537 => 199,  534 => 198,  525 => 196,  521 => 195,  517 => 194,  510 => 190,  506 => 188,  503 => 187,  500 => 186,  497 => 185,  494 => 184,  491 => 183,  488 => 182,  485 => 181,  482 => 180,  474 => 150,  472 => 149,  468 => 148,  464 => 146,  458 => 145,  455 => 144,  451 => 143,  448 => 142,  445 => 141,  442 => 140,  436 => 136,  430 => 134,  428 => 133,  423 => 130,  420 => 129,  411 => 127,  406 => 126,  403 => 125,  394 => 123,  389 => 122,  387 => 121,  371 => 120,  365 => 117,  361 => 116,  357 => 115,  353 => 114,  348 => 111,  346 => 110,  343 => 109,  340 => 108,  337 => 107,  334 => 106,  331 => 105,  328 => 104,  325 => 103,  322 => 102,  315 => 99,  311 => 97,  309 => 96,  308 => 95,  307 => 94,  306 => 93,  305 => 92,  304 => 91,  302 => 90,  299 => 89,  297 => 88,  292 => 86,  286 => 83,  282 => 82,  276 => 81,  271 => 79,  265 => 78,  261 => 77,  254 => 75,  250 => 74,  242 => 72,  239 => 71,  233 => 47,  227 => 45,  225 => 44,  221 => 43,  217 => 42,  213 => 41,  206 => 40,  202 => 39,  199 => 38,  196 => 37,  193 => 36,  183 => 29,  178 => 27,  172 => 24,  168 => 23,  164 => 22,  160 => 21,  153 => 20,  145 => 15,  141 => 13,  138 => 12,  132 => 11,  129 => 10,  124 => 9,  121 => 8,  115 => 7,  112 => 6,  108 => 5,  105 => 4,  102 => 3,  99 => 2,  96 => 1,  92 => 482,  89 => 481,  87 => 469,  84 => 468,  82 => 465,  79 => 464,  77 => 243,  74 => 242,  72 => 239,  69 => 238,  67 => 231,  64 => 230,  62 => 180,  59 => 179,  56 => 153,  54 => 140,  51 => 139,  49 => 102,  46 => 101,  44 => 71,  41 => 70,  38 => 50,  36 => 36,  33 => 35,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroProductBundle:Form:fields.html.twig", "");
    }
}

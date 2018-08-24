<?php

/* OroShippingBundle:Form:fields.html.twig */
class __TwigTemplate_e6ef69ff686e53db8ba72e53b4a7485fb327ec2d0e49a8ca8d547fdadb0e4533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_shipping_origin_oro_shipping___shipping_origin_row' => array($this, 'block__shipping_origin_oro_shipping___shipping_origin_row'),
            '_shipping_origin_oro_shipping___shipping_origin_value_country_row' => array($this, 'block__shipping_origin_oro_shipping___shipping_origin_value_country_row'),
            '_shipping_origin_oro_shipping___shipping_origin_value_region_row' => array($this, 'block__shipping_origin_oro_shipping___shipping_origin_value_region_row'),
            '_shipping_origin_oro_shipping___shipping_origin_value_region_text_row' => array($this, 'block__shipping_origin_oro_shipping___shipping_origin_value_region_text_row'),
            '_shipping_origin_oro_shipping___shipping_origin_value_postalCode_row' => array($this, 'block__shipping_origin_oro_shipping___shipping_origin_value_postalCode_row'),
            '_shipping_origin_oro_shipping___shipping_origin_value_city_row' => array($this, 'block__shipping_origin_oro_shipping___shipping_origin_value_city_row'),
            '_shipping_origin_oro_shipping___shipping_origin_value_street_row' => array($this, 'block__shipping_origin_oro_shipping___shipping_origin_value_street_row'),
            '_shipping_origin_oro_shipping___shipping_origin_value_street2_row' => array($this, 'block__shipping_origin_oro_shipping___shipping_origin_value_street2_row'),
            'oro_shipping_weight_widget' => array($this, 'block_oro_shipping_weight_widget'),
            'oro_shipping_dimensions_widget' => array($this, 'block_oro_shipping_dimensions_widget'),
            'oro_shipping_dimensions_value_widget' => array($this, 'block_oro_shipping_dimensions_value_widget'),
            'oro_shipping_freight_class_select_widget' => array($this, 'block_oro_shipping_freight_class_select_widget'),
            'oro_shipping_product_shipping_options_collection_widget' => array($this, 'block_oro_shipping_product_shipping_options_collection_widget'),
            'oro_shipping_product_shipping_options_widget' => array($this, 'block_oro_shipping_product_shipping_options_widget'),
            'oro_shipping_method_config_widget' => array($this, 'block_oro_shipping_method_config_widget'),
            'oro_shipping_method_type_config_collection_widget' => array($this, 'block_oro_shipping_method_type_config_collection_widget'),
            'oro_shipping_method_type_config_widget' => array($this, 'block_oro_shipping_method_type_config_widget'),
            'oro_shipping_methods_configs_rule_destination_widget' => array($this, 'block_oro_shipping_methods_configs_rule_destination_widget'),
            'oro_shipping_method_config_collection_widget' => array($this, 'block_oro_shipping_method_config_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('_shipping_origin_oro_shipping___shipping_origin_row', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_shipping_origin_oro_shipping___shipping_origin_value_country_row', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('_shipping_origin_oro_shipping___shipping_origin_value_region_row', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('_shipping_origin_oro_shipping___shipping_origin_value_region_text_row', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('_shipping_origin_oro_shipping___shipping_origin_value_postalCode_row', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('_shipping_origin_oro_shipping___shipping_origin_value_city_row', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('_shipping_origin_oro_shipping___shipping_origin_value_street_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('_shipping_origin_oro_shipping___shipping_origin_value_street2_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('oro_shipping_weight_widget', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('oro_shipping_dimensions_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('oro_shipping_dimensions_value_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('oro_shipping_freight_class_select_widget', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('oro_shipping_product_shipping_options_collection_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('oro_shipping_product_shipping_options_widget', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('oro_shipping_method_config_widget', $context, $blocks);
        // line 207
        echo "
";
        // line 208
        $this->displayBlock('oro_shipping_method_type_config_collection_widget', $context, $blocks);
        // line 247
        echo "
";
        // line 248
        $this->displayBlock('oro_shipping_method_type_config_widget', $context, $blocks);
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('oro_shipping_methods_configs_rule_destination_widget', $context, $blocks);
        // line 283
        echo "
";
        // line 284
        $this->displayBlock('oro_shipping_method_config_collection_widget', $context, $blocks);
    }

    // line 6
    public function block__shipping_origin_oro_shipping___shipping_origin_row($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"controls control-group shipping-origin-address\">
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    </div>
";
    }

    // line 13
    public function block__shipping_origin_oro_shipping___shipping_origin_value_country_row($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->getAttribute($this, "shipping_origin_block", array(0 => ($context["form"] ?? null), 1 => ($context["use_parent_scope_value"] ?? null)), "method");
        echo "
";
    }

    // line 17
    public function block__shipping_origin_oro_shipping___shipping_origin_value_region_row($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->getAttribute($this, "shipping_origin_block", array(0 => ($context["form"] ?? null), 1 => ($context["use_parent_scope_value"] ?? null)), "method");
        echo "
";
    }

    // line 21
    public function block__shipping_origin_oro_shipping___shipping_origin_value_region_text_row($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        echo $this->getAttribute($this, "shipping_origin_block", array(0 => ($context["form"] ?? null), 1 => ($context["use_parent_scope_value"] ?? null)), "method");
        echo "
";
    }

    // line 25
    public function block__shipping_origin_oro_shipping___shipping_origin_value_postalCode_row($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        echo $this->getAttribute($this, "shipping_origin_block", array(0 => ($context["form"] ?? null), 1 => ($context["use_parent_scope_value"] ?? null)), "method");
        echo "
";
    }

    // line 29
    public function block__shipping_origin_oro_shipping___shipping_origin_value_city_row($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        echo $this->getAttribute($this, "shipping_origin_block", array(0 => ($context["form"] ?? null), 1 => ($context["use_parent_scope_value"] ?? null)), "method");
        echo "
";
    }

    // line 33
    public function block__shipping_origin_oro_shipping___shipping_origin_value_street_row($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        echo $this->getAttribute($this, "shipping_origin_block", array(0 => ($context["form"] ?? null), 1 => ($context["use_parent_scope_value"] ?? null)), "method");
        echo "
";
    }

    // line 37
    public function block__shipping_origin_oro_shipping___shipping_origin_value_street2_row($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        echo $this->getAttribute($this, "shipping_origin_block", array(0 => ($context["form"] ?? null), 1 => ($context["use_parent_scope_value"] ?? null)), "method");
        echo "
";
    }

    // line 41
    public function block_oro_shipping_weight_widget($context, array $blocks = array())
    {
        // line 42
        echo "    <div class=\"float-holder shipping-weight\">
        <table>
            <tr>
                <td>";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'widget');
        echo "</td>
                <td>";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'errors');
        echo "</td>
                <td>";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'errors');
        echo "</td>
            </tr>
            ";
        // line 52
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array()))) {
            // line 53
            echo "                <tr><td colspan=\"2\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "</td></tr>
            ";
        }
        // line 55
        echo "        </table>
    </div>
";
    }

    // line 59
    public function block_oro_shipping_dimensions_widget($context, array $blocks = array())
    {
        // line 60
        echo "    <div class=\"float-holder shipping-dimensions\">
        <table>
            <tr>
                <td>";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'widget');
        echo "</td>
                <td>";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", array()), 'errors');
        echo "</td>
                <td>";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'errors');
        echo "</td>
            </tr>
            ";
        // line 70
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array()))) {
            // line 71
            echo "                <tr><td colspan=\"2\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "</td></tr>
            ";
        }
        // line 73
        echo "        </table>
    </div>
";
    }

    // line 77
    public function block_oro_shipping_dimensions_value_widget($context, array $blocks = array())
    {
        // line 78
        echo "    <table>
        <tr>
            <td>";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "length", array()), 'widget');
        echo "</td>
            <td class=\"separator\">X</td>
            <td>";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "width", array()), 'widget');
        echo "</td>
            <td class=\"separator\">X</td>
            <td>";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "height", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "length", array()), 'errors');
        echo "</td>
            <td></td>
            <td>";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "width", array()), 'errors');
        echo "</td>
            <td></td>
            <td>";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "height", array()), 'errors');
        echo "</td>
        </tr>
    </table>
";
    }

    // line 96
    public function block_oro_shipping_freight_class_select_widget($context, array $blocks = array())
    {
        // line 97
        echo "    <div class=\"float-holder shipping-freight-class\">
        <table>
            <tr><td>";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "</td></tr>
            <tr><td>";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "</td></tr>
        </table>
    </div>
";
    }

    // line 105
    public function block_oro_shipping_product_shipping_options_collection_widget($context, array $blocks = array())
    {
        // line 106
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 107
            echo "        ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_shipping_product_shipping_options_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 108
            echo "    ";
        }
        // line 109
        echo "    <div class=\"row-oro\">
        ";
        // line 110
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 111
        echo "        <div class=\"product-shipping-options-collection\"
            data-page-component-module=\"oroui/js/app/components/view-component\"
            data-page-component-options=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroshipping/js/app/views/product-shipping-options-view")), "html", null, true);
        // line 115
        echo "\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
            data-layout=\"separate\"
        >
            <table class=\"grid table table-bordered list-items\"";
        // line 118
        if ( !twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            echo " style=\"display: none;\"";
        }
        echo ">
                <thead>
                <tr>
                    <th><span class=\"text-center\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.product_shipping_options.product_unit.label"), "html", null, true);
        echo "</span></th>
                    <th><span class=\"text-center\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.product_shipping_options.weight.label"), "html", null, true);
        echo "</span></th>
                    <th><span class=\"text-center\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.product_shipping_options.dimensions.label"), "html", null, true);
        echo "</span></th>
                    <th><span class=\"text-center\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.product_shipping_options.freight_class.label"), "html", null, true);
        echo "</span></th>
                    <th></th>
                </tr>
                </thead>
                <tbody data-last-index=\"";
        // line 128
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\"
                       data-prototype-name=\"";
        // line 129
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        // line 130
        echo "                >
                    ";
        // line 131
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 132
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 133
                echo "                            ";
                echo $this->getAttribute($this, "oro_shipping_product_shipping_options_prototype", array(0 => $context["child"]), "method");
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                    ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 136
            echo "                        ";
            echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => "0"));
            echo "
                    ";
        }
        // line 138
        echo "                </tbody>
            </table>
            <a class=\"btn add-list-item\" data-container=\".product-shipping-options-collection tbody\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.product_shipping_options.add_label"), "html", null, true);
        echo "</a>
        </div>
    </div>
";
    }

    // line 163
    public function block_oro_shipping_product_shipping_options_widget($context, array $blocks = array())
    {
        // line 164
        echo "    <td>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnit", array()), 'widget');
        echo "</td>
    <td>";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "weight", array()), 'widget');
        echo "</td>
    <td>";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "dimensions", array()), 'widget');
        echo "</td>
    <td>";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "freightClass", array()), 'widget');
        echo "</td>
";
    }

    // line 170
    public function block_oro_shipping_method_config_widget($context, array $blocks = array())
    {
        // line 171
        echo "    ";
        $context["ShipRuleMacro"] = $this->loadTemplate("OroShippingBundle:ShippingMethodsConfigsRule:macros.html.twig", "OroShippingBundle:Form:fields.html.twig", 171);
        // line 172
        echo "
    ";
        // line 173
        $context["collapseView"] = array("group" => "shipping-method", "open" => true);
        // line 177
        echo "
    <div class=\"shipping-method-config shipping-method-config-";
        // line 178
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "typeConfigs", array()), "vars", array()), "is_grouped", array())) ? ("grouped") : ("simple"));
        echo " collapse-view\"
         data-page-component-collapse=\"";
        // line 179
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["collapseView"] ?? null)), "html", null, true);
        echo "\"
         data-role=\"method-view\">
        ";
        // line 181
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "method", array()), "vars", array()), "value", array())) {
            // line 182
            echo "            <div class=\"shipping-method-config__header\"
                 data-collapse-trigger>
                <div class=\"shipping-method-config__item\">
                    <i class=\"fa-plus-square-o\"></i>
                    ";
            // line 186
            $context["icon"] = (($this->getAttribute(($context["methods_icons"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "method", array()), "vars", array()), "value", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["methods_icons"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "method", array()), "vars", array()), "value", array()), array(), "array"), "")) : (""));
            // line 187
            echo "                    ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["methods_labels"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "method", array()), "vars", array()), "value", array()), array(), "array"));
            // line 188
            echo "                    ";
            if (($context["icon"] ?? null)) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["icon"] ?? null)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "\"/>";
            }
            // line 189
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
                    ";
            // line 190
            echo $context["ShipRuleMacro"]->getrenderShippingMethodDisabledFlag($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "method", array()), "vars", array()), "value", array()));
            echo "
                </div>
                <div class=\"shipping-method-config__info\" data-role=\"method-preview\"></div>
            </div>
        ";
        }
        // line 195
        echo "
        <div class=\"shipping-method-config__body\"
             data-collapse-container>
            <div class=\"shipping-method-config__global-options\">
                ";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "options", array()), 'widget');
        echo "
            </div>
            ";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "typeConfigs", array()), 'widget');
        echo "
            ";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "typeConfigs", array()), 'errors');
        echo "
            ";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>
    </div>
";
    }

    // line 208
    public function block_oro_shipping_method_type_config_collection_widget($context, array $blocks = array())
    {
        // line 209
        echo "    ";
        if ((($context["is_grouped"] ?? null) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 0))) {
            // line 210
            echo "        ";
            $context["optionLabel"] = twig_first($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "options", array()), "children", array()));
            // line 211
            echo "        ";
            $context["optionLabel"] = ((($context["optionLabel"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["optionLabel"] ?? null), "vars", array()), "label", array()))) : (""));
            // line 212
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.shipping_methods_table.additional_options.label"), "html", null, true);
            echo "</h4>
        <div class=\"shipping-method-config-grid\">
            <div class=\"shipping-method-config-grid__header\">
                <div class=\"shipping-method-config-grid__header-item\">
                    ";
            // line 216
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.shipping_methods_table.option.label"), "html", null, true);
            echo "
                </div>

                <div class=\"shipping-method-config-grid__header-item\">
                    ";
            // line 220
            echo twig_escape_filter($this->env, ($context["optionLabel"] ?? null), "html", null, true);
            echo "
                </div>

                <div class=\"shipping-method-config-grid__header-item\">
                    ";
            // line 224
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.shipping_methods_table.status.label"), "html", null, true);
            echo "
                </div>
            </div>

            <div class=\"shipping-method-config-grid__body\">
                <div>";
            // line 229
            $this->displayBlock("collection_widget", $context, $blocks);
            echo "</div>
            </div>
        </div>
    ";
        } elseif ((twig_length_filter($this->env,         // line 232
($context["form"] ?? null)) > 0)) {
            // line 233
            echo "        ";
            if (array_key_exists("prototype", $context)) {
                // line 234
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? null), 'row')));
            }
            // line 236
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 237
            if (twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", array()))) {
                // line 238
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            }
            // line 240
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 241
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            // line 244
            echo "</div>
    ";
        }
    }

    // line 248
    public function block_oro_shipping_method_type_config_widget($context, array $blocks = array())
    {
        // line 249
        echo "    <div data-validation-ignore=\"\" class=\"shipping-method-config-grid__body-item\">
        ";
        // line 250
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "is_grouped", array())) {
            // line 251
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 252
                echo "                <div class=\"control-group control-group-number\">
                    <label>";
                // line 254
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                // line 255
                echo "</label>
                    ";
                // line 256
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'errors');
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "        ";
        } else {
            // line 260
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "options", array()), 'widget');
            echo "
        ";
        }
        // line 262
        echo "    </div>

    ";
        // line 264
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "is_grouped", array()))) {
            // line 265
            echo "        <div class=\"shipping-method-config-grid__active\">
            <label class=\"shipping-method-config-grid__active-label\">
                ";
            // line 267
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", array()), 'widget', array("attr" => array("class" => "shipping-method-config-grid__active-checkbox")));
            echo "
                <span class=\"shipping-method-config-grid__active-label-text\">
                    ";
            // line 269
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.shipping_methods_table.active.label"), "html", null, true);
            echo "
                </span>
            </label>
        </div>
    ";
        }
        // line 274
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 277
    public function block_oro_shipping_methods_configs_rule_destination_widget($context, array $blocks = array())
    {
        // line 278
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "country", array()), 'row');
        echo "
    ";
        // line 279
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "region", array()), 'row');
        echo "
    ";
        // line 280
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "postalCodes", array()), 'row');
        echo "
    ";
        // line 281
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 284
    public function block_oro_shipping_method_config_collection_widget($context, array $blocks = array())
    {
        // line 285
        echo "    ";
        if ((twig_length_filter($this->env, ($context["form"] ?? null)) != 0)) {
            // line 286
            echo "        <div class=\"shipping-methods-grid\">
            <div class=\"shipping-methods-grid__header\">
                ";
            // line 288
            $context["collapseView"] = array("widgetModule" => "oroui/js/widget/collapse-group-widget", "group" => "shipping-method");
            // line 292
            echo "                <div class=\"shipping-methods-grid__header-method\"
                     data-page-component-jquery=\"";
            // line 293
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["collapseView"] ?? null)), "html", null, true);
            echo "\">
                    <i class=\"fa-plus-square-o\"></i>
                    ";
            // line 295
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.shipping_methods_table.method.label"), "html", null, true);
            echo "
                </div>
                <div>";
            // line 297
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.shipping.shipping_methods_table.options.label"), "html", null, true);
            echo "</div>
            </div>
            <div>
                ";
            // line 300
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => array("class" => "oro-shipping-rule-method-configs-collection row-oro")));
            echo "
                ";
            // line 301
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
            </div>
        </div>
    ";
        }
    }

    // line 1
    public function getshipping_origin_block($__form__ = null, $__disabled__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "disabled" => $__disabled__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["attrs"] = array("attr" => array("data-validation" => twig_jsonencode_filter((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "required", array())) ? (array("NotBlank" => null)) : (array())))), "disabled" => ($context["disabled"] ?? null));
            // line 3
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'row', ($context["attrs"] ?? null));
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

    // line 145
    public function getoro_shipping_product_shipping_options_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 146
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 147
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 148
                echo "        ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 149
                echo "    ";
            } else {
                // line 150
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 151
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 152
                echo "    ";
            }
            // line 153
            echo "
    <tr class=\"list-item\" data-content=\"";
            // line 154
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-validation-optional-group ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo "
        data-page-component-module=\"oroshipping/js/app/components/product-shipping-freight-classes-component\">
        ";
            // line 156
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
        <td class=\"product-shipping-options-remove\">
            <button type=\"button\" class=\"removeRow btn icons-holder remove-list-item\" data-related=\"";
            // line 158
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"><i class=\"fa-close\"></i></button>
        </td>
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
        return "OroShippingBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  885 => 158,  880 => 156,  873 => 154,  870 => 153,  867 => 152,  864 => 151,  861 => 150,  858 => 149,  855 => 148,  852 => 147,  849 => 146,  837 => 145,  819 => 3,  816 => 2,  803 => 1,  794 => 301,  790 => 300,  784 => 297,  779 => 295,  774 => 293,  771 => 292,  769 => 288,  765 => 286,  762 => 285,  759 => 284,  753 => 281,  749 => 280,  745 => 279,  740 => 278,  737 => 277,  730 => 274,  722 => 269,  717 => 267,  713 => 265,  711 => 264,  707 => 262,  701 => 260,  698 => 259,  689 => 256,  686 => 255,  684 => 254,  681 => 252,  676 => 251,  674 => 250,  671 => 249,  668 => 248,  662 => 244,  660 => 243,  654 => 241,  650 => 240,  647 => 238,  645 => 237,  641 => 236,  638 => 234,  635 => 233,  633 => 232,  627 => 229,  619 => 224,  612 => 220,  605 => 216,  597 => 212,  594 => 211,  591 => 210,  588 => 209,  585 => 208,  577 => 203,  573 => 202,  569 => 201,  564 => 199,  558 => 195,  550 => 190,  545 => 189,  534 => 188,  531 => 187,  529 => 186,  523 => 182,  521 => 181,  516 => 179,  512 => 178,  509 => 177,  507 => 173,  504 => 172,  501 => 171,  498 => 170,  492 => 167,  488 => 166,  484 => 165,  479 => 164,  476 => 163,  468 => 140,  464 => 138,  458 => 136,  455 => 135,  446 => 133,  441 => 132,  439 => 131,  436 => 130,  428 => 129,  424 => 128,  417 => 124,  413 => 123,  409 => 122,  405 => 121,  397 => 118,  390 => 115,  388 => 113,  384 => 111,  382 => 110,  379 => 109,  376 => 108,  373 => 107,  370 => 106,  367 => 105,  359 => 100,  355 => 99,  351 => 97,  348 => 96,  340 => 91,  335 => 89,  330 => 87,  324 => 84,  319 => 82,  314 => 80,  310 => 78,  307 => 77,  301 => 73,  295 => 71,  293 => 70,  288 => 68,  284 => 67,  278 => 64,  274 => 63,  269 => 60,  266 => 59,  260 => 55,  254 => 53,  252 => 52,  247 => 50,  243 => 49,  237 => 46,  233 => 45,  228 => 42,  225 => 41,  218 => 38,  215 => 37,  208 => 34,  205 => 33,  198 => 30,  195 => 29,  188 => 26,  185 => 25,  178 => 22,  175 => 21,  168 => 18,  165 => 17,  158 => 14,  155 => 13,  148 => 9,  144 => 8,  141 => 7,  138 => 6,  134 => 284,  131 => 283,  129 => 277,  126 => 276,  124 => 248,  121 => 247,  119 => 208,  116 => 207,  114 => 170,  111 => 169,  109 => 163,  106 => 162,  103 => 144,  101 => 105,  98 => 104,  96 => 96,  93 => 95,  91 => 77,  88 => 76,  86 => 59,  83 => 58,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 33,  68 => 32,  66 => 29,  63 => 28,  61 => 25,  58 => 24,  56 => 21,  53 => 20,  51 => 17,  48 => 16,  46 => 13,  43 => 12,  41 => 6,  38 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroShippingBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/ShippingBundle/Resources/views/Form/fields.html.twig");
    }
}

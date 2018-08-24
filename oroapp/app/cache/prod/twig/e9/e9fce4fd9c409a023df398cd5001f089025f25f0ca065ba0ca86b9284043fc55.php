<?php

/* OroOrderBundle:Form:fields.html.twig */
class __TwigTemplate_9c15c00bab888bcfb6ff93e09613a1097fdf9cced5abcb3fec38bf74307257a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_order_address_type_widget' => array($this, 'block_oro_order_address_type_widget'),
            'oro_order_line_items_collection_widget' => array($this, 'block_oro_order_line_items_collection_widget'),
            'oro_order_line_item_widget' => array($this, 'block_oro_order_line_item_widget'),
            'oro_order_collection_table_widget' => array($this, 'block_oro_order_collection_table_widget'),
            'oro_order_discount_collection_row_widget' => array($this, 'block_oro_order_discount_collection_row_widget'),
            'oro_order_shipping_tracking_collection_widget' => array($this, 'block_oro_order_shipping_tracking_collection_widget'),
            'oro_order_shipping_tracking_widget' => array($this, 'block_oro_order_shipping_tracking_widget'),
            'oro_select_switch_input_widget' => array($this, 'block_oro_select_switch_input_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_order_address_type_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('oro_order_line_items_collection_widget', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('oro_order_line_item_widget', $context, $blocks);
        // line 131
        echo "
";
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('oro_order_collection_table_widget', $context, $blocks);
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('oro_order_discount_collection_row_widget', $context, $blocks);
        // line 184
        echo "
";
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('oro_order_shipping_tracking_collection_widget', $context, $blocks);
        // line 247
        echo "
";
        // line 248
        $this->displayBlock('oro_order_shipping_tracking_widget', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('oro_select_switch_input_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_order_address_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", array()))) {
            // line 3
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 4
            if ($this->getAttribute(($context["form"] ?? null), "customerAddress", array(), "any", true, true)) {
                // line 5
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerAddress", array()), 'row');
                echo "
            ";
            }
            // line 7
            echo "            ";
            $this->displayBlock("oro_address_rows", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 10
            echo "        ";
            if ($this->getAttribute(($context["form"] ?? null), "customerAddress", array(), "any", true, true)) {
                // line 11
                echo "            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerAddress", array()), 'row');
                echo "
        ";
            }
            // line 13
            echo "        ";
            $this->displayBlock("oro_address_rows", $context, $blocks);
            echo "
    ";
        }
    }

    // line 55
    public function block_oro_order_line_items_collection_widget($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        ob_start();
        // line 57
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 58
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_order_line_items_collection_item_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 59
            echo "        ";
        }
        // line 60
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection grid-container")));
        // line 61
        echo "        ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 62
        echo "        <div class=\"row-oro\">
            ";
        // line 63
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 64
        echo "            <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
                <input type=\"hidden\" name=\"validate_";
        // line 65
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-collection-name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-name=\"collection-validation\" disabled data-validate-element>
                <table class=\"grid table-hover table table-bordered table-condensed order-line-items-table\">
                    <thead>
                    <tr>
                        <th class=\"order-line-item-sku\"><span>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sku.label"), "html", null, true);
        echo "</span></th>
                        <th class=\"order-line-item-type\"><span>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.entity_label"), "html", null, true);
        echo "</span></th>
                        ";
        // line 71
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "sections", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "sections", array())))) {
            // line 72
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "sections", array()));
            foreach ($context['_seq'] as $context["sectionName"] => $context["section"]) {
                // line 73
                echo "                                ";
                $context["label"] = (($this->getAttribute($context["section"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["section"], "label", array()), sprintf("oro.order.orderlineitem.%s.label", $context["sectionName"]))) : (sprintf("oro.order.orderlineitem.%s.label", $context["sectionName"])));
                // line 74
                echo "                                <th class=\"";
                echo twig_escape_filter($this->env, sprintf("order-line-item-%s", $context["sectionName"]), "html", null, true);
                echo "\">
                                    <span>";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
                echo "</span>
                                </th>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sectionName'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                        ";
        }
        // line 79
        echo "                        ";
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "allow_delete", array())) {
            // line 80
            echo "                            <th class=\"order-line-item-actions\"></th>
                        ";
        }
        // line 82
        echo "                    </tr>
                    </thead>
                    <tbody data-last-index=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
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
        // line 85
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 86
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 87
                echo "                            ";
                echo $this->getAttribute($this, "oro_order_line_items_collection_item_prototype", array(0 => $context["child"]), "method");
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                    ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 90
            echo "                        ";
            echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => "0"));
            echo "
                    ";
        }
        // line 92
        echo "                    </tbody>
                </table>
            </div>

            ";
        // line 96
        if (($context["allow_add"] ?? null)) {
            // line 97
            echo "                <a class=\"btn add-list-item\" data-container=\".oro-item-collection tbody\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
            echo "</a>
            ";
        }
        // line 99
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 103
    public function block_oro_order_line_item_widget($context, array $blocks = array())
    {
        // line 104
        echo "    <td class=\"order-line-item-sku\">
        <div class=\"order-line-item-type-product\">
            ";
        // line 106
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()))) {
            // line 107
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "productSku", array()), "html", null, true);
            echo "
            ";
        }
        // line 109
        echo "        </div>
        <div class=\"order-line-item-type-free-form\" style=\"display: none;\">
            ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productSku", array()), 'widget');
        echo "
        </div>
    </td>
    <td class=\"order-line-item-type\">
        <div class=\"fields-row\">
            <div class=\"order-line-item-type-product\">
                ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product", array()), 'widget');
        echo "
                <a class=\"order-line-item-type-free-form\" href=\"javascript: void(0);\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.orderlineitem.select.free_form"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"order-line-item-type-free-form\" style=\"display: none;\">
                ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "freeFormProduct", array()), 'widget');
        echo "
                <br/><a class=\"order-line-item-type-product\" href=\"javascript: void(0);\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.orderlineitem.select.product"), "html", null, true);
        echo "</a>
            </div>
        </div>
        ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product", array()), 'errors');
        echo "
        ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "freeFormProduct", array()), 'errors');
        echo "
    </td>

    ";
        // line 129
        echo $this->getAttribute($this, "render_form_sections", array(0 => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "sections", array()), 1 => ($context["form"] ?? null)), "method");
        echo "
";
    }

    // line 169
    public function block_oro_order_collection_table_widget($context, array $blocks = array())
    {
        // line 170
        echo "    ";
        $context["order_macros"] = $this->loadTemplate("OroOrderBundle:Order:macros.html.twig", "OroOrderBundle:Form:fields.html.twig", 170);
        // line 171
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . " grid-container oro-collection-table")));
        // line 172
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 173
        $this->loadTemplate(($context["template_name"] ?? null), "OroOrderBundle:Form:fields.html.twig", 173)->display(array_merge($context, array("collection" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "editable" => true)));
        // line 174
        echo "        ";
        echo $context["order_macros"]->gethiddenCollection(($context["form"] ?? null));
        echo "
    </div>
";
    }

    // line 178
    public function block_oro_order_discount_collection_row_widget($context, array $blocks = array())
    {
        // line 179
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'widget', array("attr" => array("data-role" => "description")));
        echo "
    ";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'widget', array("attr" => array("data-role" => "type")));
        echo "
    ";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "percent", array()), 'widget', array("attr" => array("data-role" => "percent")));
        echo "
    ";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "amount", array()), 'widget', array("attr" => array("data-role" => "amount")));
        echo "
";
    }

    // line 205
    public function block_oro_order_shipping_tracking_collection_widget($context, array $blocks = array())
    {
        // line 206
        echo "    ";
        ob_start();
        // line 207
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 208
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_order_shipping_tracking_collection_item_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 209
            echo "        ";
        }
        // line 210
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection collection-fields-list")));
        // line 211
        echo "        ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 212
        echo "        <div class=\"row-oro\"
                ";
        // line 213
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroOrderBundle:Form:fields.html.twig", 213);
        // line 214
        echo "                ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => $this->getAttribute($this->getAttribute(        // line 215
($context["form"] ?? null), "vars", array()), "page_component", array()), "options" => $this->getAttribute($this->getAttribute(        // line 216
($context["form"] ?? null), "vars", array()), "page_component_options", array())));
        // line 217
        echo ">
            ";
        // line 218
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 219
        echo "            <div>
                <table class=\"grid table table-condensed table-bordered table-hover\">
                    <thead>
                        <tr>
                            <th>";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_tracking.method.label"), "html", null, true);
        echo "</th>
                            <th>";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_tracking.number.label"), "html", null, true);
        echo "</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody ";
        // line 228
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
        // line 229
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 230
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 231
                echo "                                ";
                echo $this->getAttribute($this, "oro_order_shipping_tracking_collection_item_prototype", array(0 => $context["child"]), "method");
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "                        ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 234
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "row_count_initial", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 235
                echo "                                ";
                echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => $context["i"]));
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                        ";
        }
        // line 238
        echo "                    </tbody>
                </table>
            </div>
            ";
        // line 241
        if (($context["allow_add"] ?? null)) {
            // line 242
            echo "                <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
            echo "</a>
            ";
        }
        // line 244
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 248
    public function block_oro_order_shipping_tracking_widget($context, array $blocks = array())
    {
        // line 249
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array());
        // line 250
        echo "
    <tr data-content=\"";
        // line 251
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"oro-multiselect-holder grid-row\">
        <td>";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "method", array()), 'widget', array("attr" => array("class" => "order-shipping-tracking-method", "style" => "width: 100px")));
        echo "</td>
        <td>";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "number", array()), 'widget', array("attr" => array("class" => "order-shipping-tracking-number", "style" => "width: 150px")));
        echo "</td>
        ";
        // line 254
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "allow_delete", array())) {
            // line 255
            echo "            <td><button class=\"removeRow btn icons-holder\" type=\"button\" data-related=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"><i class=\"fa-close\"></i></button></td>
        ";
        }
        // line 257
        echo "    </tr>

";
    }

    // line 261
    public function block_oro_select_switch_input_widget($context, array $blocks = array())
    {
        // line 262
        echo "    <div
        ";
        // line 263
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroOrderBundle:Form:fields.html.twig", 263);
        // line 264
        echo "        ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => $this->getAttribute($this->getAttribute(        // line 265
($context["form"] ?? null), "vars", array()), "page_component", array()), "options" => $this->getAttribute($this->getAttribute(        // line 266
($context["form"] ?? null), "vars", array()), "page_component_options", array())));
        // line 267
        echo ">
        <div class=\"input-group select-switch-input-container\">
            <div class=\"select-container\">
                ";
        // line 270
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                <span class=\"input-group-btn\">
                    <button class=\"add-on btn select-to-input-btn\"><i class=\"fa-plus\"></i></button>
                </span>
            </div>
            <div class=\"input-container\">
                <span class=\"input-group-btn input-to-select\">
                    <button class=\"add-on btn input-to-select-btn\"><i class=\"fa-bars\"></i></button>
                </span>
            </div>
        </div>
        ";
        // line 281
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    </div>
";
    }

    // line 17
    public function getoro_order_line_items_collection_item_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 18
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 19
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 20
                echo "        ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 21
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "disabled", array());
                // line 22
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_delete", array());
                // line 23
                echo "    ";
            } else {
                // line 24
                echo "        ";
                if (($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array(), "any", false, true), "disallow_delete", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "disallow_delete", array()))) {
                    // line 25
                    echo "            ";
                    $context["allow_delete"] = false;
                    // line 26
                    echo "        ";
                } else {
                    // line 27
                    echo "            ";
                    $context["allow_delete"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_delete", array());
                    // line 28
                    echo "        ";
                }
                // line 29
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 30
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 31
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "disabled", array());
                // line 32
                echo "    ";
            }
            // line 33
            echo "
    ";
            // line 34
            $context["page_component_options"] = twig_array_merge($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "page_component_options", array()), array("disabled" =>  !            // line 35
($context["allow_delete"] ?? null)));
            // line 37
            echo "
    <tr data-content=\"";
            // line 38
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-validation-optional-group ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo "
        class=\"order-line-item\"
        data-page-component-module=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "page_component", array()), "html", null, true);
            echo "\"
        data-page-component-options=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["page_component_options"] ?? null)), "html", null, true);
            echo "\"
        data-layout=\"separate\">
        ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "

        ";
            // line 45
            if (($context["allow_delete"] ?? null)) {
                // line 46
                echo "            <td class=\"order-line-item-remove\">
                <button type=\"button\" class=\"removeLineItem btn icons-holder\"><i class=\"fa-close\"></i></button>
            </td>
        ";
            } elseif ($this->getAttribute($this->getAttribute($this->getAttribute(            // line 49
($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_delete", array())) {
                // line 50
                echo "            <td></td>
        ";
            }
            // line 52
            echo "    </tr>
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

    // line 132
    public function getrender_form_sections($__sections__ = null, $__form__ = null, $__overrides__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "sections" => $__sections__,
            "form" => $__form__,
            "overrides" => $__overrides__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 133
            echo "    ";
            if ((array_key_exists("sections", $context) &&  !$this->getAttribute(($context["sections"] ?? null), "isEmpty", array()))) {
                // line 134
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "sections", array()));
                foreach ($context['_seq'] as $context["sectionName"] => $context["sections"]) {
                    // line 135
                    echo "            <td class=\"";
                    echo twig_escape_filter($this->env, sprintf("order-line-item-%s", $context["sectionName"]), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, sprintf("line-item-%s", $context["sectionName"]), "html", null, true);
                    echo "\">
                ";
                    // line 136
                    echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, (("order_edit_section_" . $context["sectionName"]) . "_before"), array("form" => ($context["form"] ?? null)));
                    // line 137
                    echo "
                ";
                    // line 138
                    if ($this->getAttribute(($context["overrides"] ?? null), $context["sectionName"], array(), "array", true, true)) {
                        // line 139
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["overrides"] ?? null), $context["sectionName"], array(), "array"), "html", null, true);
                        echo "
                ";
                    } elseif (($this->getAttribute(                    // line 140
$context["sections"], "data", array(), "any", true, true) && twig_test_iterable($this->getAttribute($context["sections"], "data", array())))) {
                        // line 141
                        echo "                    <div class=\"fields-row\">
                        ";
                        // line 142
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sections"], "data", array()));
                        foreach ($context['_seq'] as $context["subSectionName"] => $context["subSection"]) {
                            // line 143
                            echo "                            <div
                                ";
                            // line 144
                            if ($this->getAttribute($context["subSection"], "page_component", array(), "any", true, true)) {
                                // line 145
                                echo "                                    data-page-component-module=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["subSection"], "page_component", array()), "html", null, true);
                                echo "\"
                                    ";
                                // line 146
                                if ($this->getAttribute($context["subSection"], "page_component_options", array(), "any", true, true)) {
                                    // line 147
                                    echo "                                        data-page-component-options=\"";
                                    echo twig_escape_filter($this->env, ((twig_test_iterable($this->getAttribute($context["subSection"], "page_component_options", array()))) ? (twig_jsonencode_filter($this->getAttribute($context["subSection"], "page_component_options", array()))) : ($this->getAttribute($context["subSection"], "page_component_options", array()))), "html", null, true);
                                    echo "\"
                                    ";
                                }
                                // line 149
                                echo "                                ";
                            }
                            echo ">
                                ";
                            // line 150
                            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, (("order_edit_subsection_" . $context["subSectionName"]) . "_before"), array("subSection" => $context["subSection"]));
                            // line 151
                            echo "                                ";
                            if (twig_in_filter($context["subSectionName"], twig_get_array_keys_filter(($context["form"] ?? null)))) {
                                // line 152
                                echo "                                    ";
                                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["subSectionName"], array(), "array"), 'widget');
                                echo "
                                ";
                            }
                            // line 154
                            echo "                                ";
                            echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, (("order_edit_subsection_" . $context["subSectionName"]) . "_after"), array("subSection" => $context["subSection"]));
                            // line 155
                            echo "                            </div>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['subSectionName'], $context['subSection'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 157
                        echo "                    </div>
                    ";
                        // line 158
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sections"], "data", array()));
                        foreach ($context['_seq'] as $context["subSectionName"] => $context["subSection"]) {
                            if (twig_in_filter($context["subSectionName"], twig_get_array_keys_filter(($context["form"] ?? null)))) {
                                // line 159
                                echo "                        ";
                                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["subSectionName"], array(), "array"), 'errors');
                                echo "
                    ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['subSectionName'], $context['subSection'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 161
                        echo "                ";
                    }
                    // line 162
                    echo "
                ";
                    // line 163
                    echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\PlaceholderExtension')->renderPlaceholder($this->env, (("order_edit_section_" . $context["sectionName"]) . "_after"), array("form" => ($context["form"] ?? null)));
                    // line 164
                    echo "            </td>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sectionName'], $context['sections'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                echo "    ";
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

    // line 185
    public function getoro_order_shipping_tracking_collection_item_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 186
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 187
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 188
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 189
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "disabled", array());
                // line 190
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_delete", array());
                // line 191
                echo "        ";
                $context["allow_add_after"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_add_after", array());
                // line 192
                echo "    ";
            } else {
                // line 193
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 194
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 195
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "disabled", array());
                // line 196
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_delete", array());
                // line 197
                echo "        ";
                $context["allow_add_after"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "parent", array()), "vars", array()), "allow_add_after", array());
                // line 198
                echo "        ";
                if ($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) {
                    // line 199
                    echo "            ";
                    $context["allow_delete"] = (($context["allow_delete"] ?? null) && $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "allow_delete", array()));
                    // line 200
                    echo "        ";
                }
                // line 201
                echo "    ";
            }
            // line 202
            echo "    ";
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

    public function getTemplateName()
    {
        return "OroOrderBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  888 => 202,  885 => 201,  882 => 200,  879 => 199,  876 => 198,  873 => 197,  870 => 196,  867 => 195,  864 => 194,  861 => 193,  858 => 192,  855 => 191,  852 => 190,  849 => 189,  846 => 188,  843 => 187,  840 => 186,  828 => 185,  812 => 166,  805 => 164,  803 => 163,  800 => 162,  797 => 161,  787 => 159,  782 => 158,  779 => 157,  772 => 155,  769 => 154,  763 => 152,  760 => 151,  758 => 150,  753 => 149,  747 => 147,  745 => 146,  740 => 145,  738 => 144,  735 => 143,  731 => 142,  728 => 141,  726 => 140,  721 => 139,  719 => 138,  716 => 137,  714 => 136,  707 => 135,  702 => 134,  699 => 133,  685 => 132,  669 => 52,  665 => 50,  663 => 49,  658 => 46,  656 => 45,  651 => 43,  646 => 41,  642 => 40,  635 => 38,  632 => 37,  630 => 35,  629 => 34,  626 => 33,  623 => 32,  620 => 31,  617 => 30,  614 => 29,  611 => 28,  608 => 27,  605 => 26,  602 => 25,  599 => 24,  596 => 23,  593 => 22,  590 => 21,  587 => 20,  584 => 19,  581 => 18,  569 => 17,  562 => 281,  548 => 270,  543 => 267,  541 => 266,  540 => 265,  538 => 264,  536 => 263,  533 => 262,  530 => 261,  524 => 257,  518 => 255,  516 => 254,  512 => 253,  508 => 252,  504 => 251,  501 => 250,  498 => 249,  495 => 248,  489 => 244,  483 => 242,  481 => 241,  476 => 238,  473 => 237,  464 => 235,  459 => 234,  456 => 233,  447 => 231,  442 => 230,  440 => 229,  424 => 228,  417 => 224,  413 => 223,  407 => 219,  405 => 218,  402 => 217,  400 => 216,  399 => 215,  397 => 214,  395 => 213,  392 => 212,  389 => 211,  386 => 210,  383 => 209,  380 => 208,  377 => 207,  374 => 206,  371 => 205,  365 => 182,  361 => 181,  357 => 180,  352 => 179,  349 => 178,  341 => 174,  339 => 173,  334 => 172,  331 => 171,  328 => 170,  325 => 169,  319 => 129,  313 => 126,  309 => 125,  303 => 122,  299 => 121,  293 => 118,  289 => 117,  280 => 111,  276 => 109,  270 => 107,  268 => 106,  264 => 104,  261 => 103,  255 => 99,  249 => 97,  247 => 96,  241 => 92,  235 => 90,  232 => 89,  223 => 87,  218 => 86,  216 => 85,  204 => 84,  200 => 82,  196 => 80,  193 => 79,  190 => 78,  181 => 75,  176 => 74,  173 => 73,  168 => 72,  166 => 71,  162 => 70,  158 => 69,  149 => 65,  144 => 64,  142 => 63,  139 => 62,  136 => 61,  133 => 60,  130 => 59,  127 => 58,  124 => 57,  121 => 56,  118 => 55,  110 => 13,  104 => 11,  101 => 10,  94 => 7,  88 => 5,  86 => 4,  81 => 3,  78 => 2,  75 => 1,  71 => 261,  68 => 260,  66 => 248,  63 => 247,  61 => 205,  58 => 204,  55 => 184,  53 => 178,  50 => 177,  48 => 169,  45 => 168,  42 => 131,  40 => 103,  37 => 102,  35 => 55,  32 => 54,  29 => 16,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:Form:fields.html.twig", "/usr/share/nginx/html/oroapp/vendor/oro/commerce/src/Oro/Bundle/OrderBundle/Resources/views/Form/fields.html.twig");
    }
}

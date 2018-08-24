<?php

/* OroPricingBundle:Form:fields.html.twig */
class __TwigTemplate_48902a213a3b2b1787f1e7c1956f51c329a3bd8d150415e90a650947e63272db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_pricing_product_price_widget' => array($this, 'block_oro_pricing_product_price_widget'),
            'oro_pricing_product_price_collection_widget' => array($this, 'block_oro_pricing_product_price_collection_widget'),
            'oro_pricing_price_list_collection_row' => array($this, 'block_oro_pricing_price_list_collection_row'),
            'oro_pricing_price_list_collection_widget' => array($this, 'block_oro_pricing_price_list_collection_widget'),
            'oro_pricing_price_list_select_with_priority_widget' => array($this, 'block_oro_pricing_price_list_select_with_priority_widget'),
            'oro_pricing_product_attribute_price_collection_widget' => array($this, 'block_oro_pricing_product_attribute_price_collection_widget'),
            '_oro_pricing_price_list_priceRules_widget' => array($this, 'block__oro_pricing_price_list_priceRules_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_pricing_product_price_widget', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('oro_pricing_product_price_collection_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('oro_pricing_price_list_collection_row', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('oro_pricing_price_list_collection_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('oro_pricing_price_list_select_with_priority_widget', $context, $blocks);
        // line 129
        echo "
";
        // line 131
        $this->displayBlock('oro_pricing_product_attribute_price_collection_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 307
        echo "
";
        // line 308
        $this->displayBlock('_oro_pricing_price_list_priceRules_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_pricing_product_price_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div data-page-component-module=\"oropricing/js/app/components/price-list-currency-limitations-component\">
        <div class=\"row\">
            <div class=\"small-row\">
                <div>
                    <div class=\"group-label\">";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priceList", array()), 'label');
        echo "</div>
                    <div>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priceList", array()), 'widget', array("attr" => array("class" => "priceList")));
        echo "</div>
                    <div>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priceList", array()), 'errors');
        echo "</div>
                </div>
            </div>
            <div class=\"small-row\">
                <div class=\"grouped-fields\">
                    <div class=\"group-label\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'label');
        echo "</div>
                    <div class=\"col-widget\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget', array("attr" => array("class" => "quantity")));
        echo "</div>
                    <div>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
        echo "</div>
                    <div>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'widget', array("attr" => array("class" => "unit")));
        echo "</div>
                    <div>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'errors');
        echo "</div>
                </div>
            </div>
            <div class=\"small-row\">
                <div class=\"grouped-fields\">
                    <div class=\"group-label\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "value", array()), 'label');
        echo "</div>
                    <div class=\"col-widget\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "value", array()), 'widget', array("attr" => array("class" => "price-value")));
        echo "</div>
                    <div>";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "value", array()), 'errors');
        echo "</div>
                    <div class=\"price-currency-div\">";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "currency", array()), 'widget', array("attr" => array("class" => "price-currency")));
        echo "</div>
                    <div>";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "price", array()), "currency", array()), 'errors');
        echo "</div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 33
    public function block_oro_pricing_product_price_collection_widget($context, array $blocks = array())
    {
        // line 34
        echo "    <div data-page-component-module=\"oropricing/js/app/components/product-unit-precision-limitations-component\"
         class=\"product-price-collection\">
        ";
        // line 36
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-options-collection")));
        // line 37
        echo "        ";
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 41
    public function block_oro_pricing_price_list_collection_row($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        if (($context["render_as_widget"] ?? null)) {
            // line 43
            echo "        <div class=\"price-list-collection-as-widget\">
            ";
            // line 44
            $this->displayBlock("oro_pricing_price_list_collection_widget", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 47
            echo "        ";
            $this->displayBlock("form_row", $context, $blocks);
            echo "
    ";
        }
    }

    // line 51
    public function block_oro_pricing_price_list_collection_widget($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 53
            echo "        ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_pricing_price_list_collection_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 54
            echo "    ";
        }
        // line 55
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection grid-container price-list-grid-form")));
        // line 56
        echo "    ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 57
        echo "    <div class=\"pricing-price-list\" data-page-component-module=\"oropricing/js/app/components/price-lists-errors-handler\">
        ";
        // line 58
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroPricingBundle:Form:fields.html.twig", 58);
        // line 59
        echo "        <div class=\"row-oro\" ";
        echo $context["UI"]->getrenderPageComponentAttributes(array("module" => "oroui/js/app/components/view-component", "options" => array("view" => "oroui/js/drag-n-drop-sorting", "autoRender" => true)));
        // line 65
        echo ">
            ";
        // line 66
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 67
        echo "            <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
                <table class=\"grid table-hover table table-bordered\">
                    <thead>
                    <tr>
                        <th><span>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.entity_label"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.options.label"), "html", null, true);
        echo "</span></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class=\"sortable-wrapper\" data-last-index=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        echo " data-content>
                    ";
        // line 78
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 79
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 80
                echo "                            ";
                echo $this->getAttribute($this, "oro_pricing_price_list_collection_prototype", array(0 => $context["child"]), "method");
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 83
            echo "                        ";
            echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => "0"));
            echo "
                    ";
        }
        // line 85
        echo "                    </tbody>
                </table>
            </div>
            <a class=\"btn add-list-item\" data-container=\".oro-item-collection tbody\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.add_price_list"), "html", null, true);
        echo "</a>
        </div>
    </div>
";
    }

    // line 107
    public function block_oro_pricing_price_list_select_with_priority_widget($context, array $blocks = array())
    {
        // line 108
        echo "    ";
        ob_start();
        // line 109
        echo "        <td>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priceList", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priceList", array()), 'errors');
        echo "</td>
        ";
        // line 110
        if ($this->getAttribute(($context["form"] ?? null), "mergeAllowed", array(), "any", true, true)) {
            // line 111
            echo "        <td>
            <div class=\"allow-merge-block\">
                ";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mergeAllowed", array()), 'widget', array("attr" => array("class" => "merge-allowed-checkbox")));
            echo "
                <span class=\"merge-allowed-label\">";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricelist.merge_allowed.label"), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "mergeAllowed", array()), 'errors');
            echo "
        </td>
        ";
        }
        // line 119
        echo "        <td>
            ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_position", array()), 'widget');
        echo "
            <span class=\"sortable-handle add-on ui-sortable-handle\" data-name=\"sortable-handle\">
                <i class=\"fa-arrows-v handle\"></i></span>
        </td>
        <td>
            <button type=\"button\" class=\"removeRow\"><i class=\"fa-close\"></i></button>
        </td>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 131
    public function block_oro_pricing_product_attribute_price_collection_widget($context, array $blocks = array())
    {
        // line 132
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection grid-container price-list-grid-form")));
        // line 133
        echo "    ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 134
        echo "    <div class=\"pricing-price-attribute\">
        <div class=\"row-oro\">
            <div ";
        // line 136
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
                <table class=\"grid table-hover table table-bordered\">
                    <thead>
                    <tr>
                        <th><span>";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.priceAttribute.unit.label"), "html", null, true);
        echo "</span></th>
                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "currencies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 142
            echo "                            <th><span>";
            echo twig_escape_filter($this->env, $context["currency"], "html", null, true);
            echo "</span></th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                    </tr>
                    </thead>
                    <tbody data-last-index=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\">
                    ";
        // line 147
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 148
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "units", array()));
            foreach ($context['_seq'] as $context["unit"] => $context["unitLabel"]) {
                // line 149
                echo "                            <tr>
                                <td><span>";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["unitLabel"]), "html", null, true);
                echo "</span></td>
                                ";
                // line 151
                $context["childrenByCurrency"] = array();
                // line 152
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "unit", array()), "code", array()) == $context["unit"])) {
                        // line 153
                        echo "                                    ";
                        $context["childrenByCurrency"] = twig_array_merge(($context["childrenByCurrency"] ?? null), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "price", array()), "currency", array()) => $context["child"]));
                        // line 154
                        echo "                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "currencies", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 156
                    echo "                                    <td>
                                        ";
                    // line 157
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["childrenByCurrency"] ?? null), $context["currency"]), "price", array()), 'widget', array("attr" => array("class" => "price-value")));
                    echo "
                                        ";
                    // line 158
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["childrenByCurrency"] ?? null), $context["currency"]), "price", array()), 'errors');
                    echo "
                                    </td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['unit'], $context['unitLabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "                    ";
        }
        // line 164
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 308
    public function block__oro_pricing_price_list_priceRules_widget($context, array $blocks = array())
    {
        // line 309
        echo "    ";
        ob_start();
        // line 310
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 311
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_pricing_price_rule_widget_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 312
            echo "        ";
        }
        // line 313
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection collection-fields-list")));
        // line 314
        echo "        ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 315
        echo "        <div class=\"row-oro\">
            ";
        // line 316
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 317
        echo "            <div
                    ";
        // line 318
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
                    data-last-index=\"";
        // line 319
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\"
                    data-prototype-name=\"";
        // line 320
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"
                    ";
        // line 321
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        // line 322
        echo "            >
                ";
        // line 323
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 324
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 325
                echo "                        ";
                echo $this->getAttribute($this, "oro_pricing_price_rule_widget_prototype", array(0 => $context["child"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "                ";
        }
        // line 328
        echo "            </div>
            <div class=\"price_rules__add_btn\">
                <a class=\"btn add-list-item\" href=\"javascript: void(0);\">
                    <i class=\"fa-plus\"></i>";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.form.add_rule.label"), "html", null, true);
        echo "
                </a>
            </div>
        </div>
        ";
        // line 335
        if ((($context["handle_primary"] ?? null) && ( !array_key_exists("prototype", $context) || $this->getAttribute(($context["prototype"] ?? null), "primary", array(), "any", true, true)))) {
            // line 336
            echo "            ";
            echo $this->getAttribute($this, "oro_collection_validate_primary_js", array(0 => $context), "method");
            echo "
        ";
        }
        // line 338
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 93
    public function getoro_pricing_price_list_collection_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 94
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 95
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 96
                echo "        ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 97
                echo "    ";
            } else {
                // line 98
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 99
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 100
                echo "    ";
            }
            // line 101
            echo "    <tr data-content=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-validation-optional-group ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo "
        class=\"pricing-price-list\">
        ";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
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

    // line 172
    public function getoro_pricing_price_rule_widget_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 173
            echo "    ";
            ob_start();
            // line 174
            echo "        ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 175
                echo "            ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 176
                echo "            ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 177
                echo "        ";
            } else {
                // line 178
                echo "            ";
                $context["form"] = ($context["widget"] ?? null);
                // line 179
                echo "            ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 180
                echo "        ";
            }
            // line 181
            echo "        ";
            $context["quantity"] = array("fieldType" => ".price-rule-item-quantity-type-field", "expressionType" => ".price-rule-item-quantity-type-expression");
            // line 185
            echo "        ";
            $context["productUnit"] = array("fieldType" => ".price-rule-item-product-unit-type-field", "expressionType" => ".price-rule-item-product-unit-type-expression");
            // line 189
            echo "        ";
            $context["currency"] = array("fieldType" => ".price-rule-item-currency-type-field", "expressionType" => ".price-rule-item-currency-type-expression");
            // line 193
            echo "        <div class=\"price_rule\" data-content>
            <div class=\"control-group control-group-text\">
                <div class=\"control-label wrap\">
                    <label>";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricerule.price_for_quantity.label"), "html", null, true);
            echo "</label>
                </div>
                <div class=\"controls\">
                    <div class=\"price_rule__row\">
                        <div
                            data-layout=\"separate\"
                            data-page-component-module=\"oroui/js/app/components/view-component\"
                            data-page-component-options=\"";
            // line 203
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oropricing/js/app/views/quantity-switcher", "selectors" =>             // line 205
($context["quantity"] ?? null), "errorMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.validators.field_or_expression_is_required", array("%fieldName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricerule.quantity.label"))))), "html", null, true);
            // line 209
            echo "\"
                        >
                            <div class=\"price_rule__quantity price-rule-item-quantity-type-field\" style=\"display: none;\">
                                ";
            // line 212
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget');
            echo "
                            </div>
                            <div class=\"price_rule__quantity price-rule-item-quantity-type-expression visible\">
                                ";
            // line 215
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantityExpression", array()), 'widget');
            echo "
                            </div>
                        </div>

                        <div
                            data-layout=\"separate\"
                            data-page-component-module=\"oroui/js/app/components/view-component\"
                            data-page-component-options=\"";
            // line 222
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oropricing/js/app/views/expression-field-switcher", "selectors" =>             // line 224
($context["productUnit"] ?? null), "errorMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.validators.field_or_expression_is_required", array("%fieldName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricerule.product_unit.label"))))), "html", null, true);
            // line 228
            echo "\"
                        >
                            <div class=\"price-rule-item-product-unit-type-field visible\">
                                <div class=\"price_rule__unit\">
                                    ";
            // line 232
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnit", array()), 'widget');
            echo "
                                </div>
                                <a class=\"price-rule-item-product-unit-type-expression input-type-switcher\" href=\"javascript: void(0);\">
                                    ";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricerule.show_expression_fields.label"), "html", null, true);
            echo "
                                </a>
                            </div>
                            <div class=\"price-rule-item-product-unit-type-expression\" style=\"display: none;\">
                                <div class=\"price_rule__unit\">
                                    ";
            // line 240
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnitExpression", array()), 'widget');
            echo "
                                </div>
                                <a class=\"price-rule-item-product-unit-type-field input-type-switcher\" href=\"javascript: void(0);\">
                                    ";
            // line 243
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricerule.show_unit_fields.label"), "html", null, true);
            echo "
                                </a>
                            </div>
                        </div>

                        <span class=\"price_rule__in\"> ";
            // line 248
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricerule.in_separator"), "html", null, true);
            echo "</span>
                        <div
                            data-layout=\"separate\"
                            data-page-component-module=\"oroui/js/app/components/view-component\"
                            data-page-component-options=\"";
            // line 252
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oropricing/js/app/views/expression-field-switcher", "selectors" =>             // line 254
($context["currency"] ?? null), "errorMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.validators.field_or_expression_is_required", array("%fieldName%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricerule.currency.label"))))), "html", null, true);
            // line 258
            echo "\"
                        >
                            <div class=\"price-rule-item-currency-type-field visible\">
                                <div class=\"price_rule__currency\">
                                    ";
            // line 262
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'widget');
            echo "
                                </div>
                                <a class=\"price-rule-item-currency-type-expression input-type-switcher\" href=\"javascript: void(0);\">
                                    ";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricerule.show_expression_fields.label"), "html", null, true);
            echo "
                                </a>
                            </div>
                            <div class=\"price-rule-item-currency-type-expression input-type-switcher\" style=\"display: none;\">
                                <div class=\"price_rule__currency\">
                                    ";
            // line 270
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currencyExpression", array()), 'widget');
            echo "
                                </div>
                                <a class=\"price-rule-item-currency-type-field\" href=\"javascript: void(0);\">
                                    ";
            // line 273
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.pricing.pricerule.show_currency_fields.label"), "html", null, true);
            echo "
                                </a>
                            </div>
                        </div>

                        <button type=\"button\" class=\"removeRow btn icons-holder\"><i class=\"fa-close\"></i></button>
                    </div>
                    <div class=\"price-rule-item-quantity-type-field error-block\">
                        ";
            // line 281
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
            echo "
                    </div>
                    <div class=\"price-rule-item-quantity-type-expression error-block\">
                        ";
            // line 284
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantityExpression", array()), 'errors');
            echo "
                    </div>
                    <div class=\"price-rule-item-product-unit-type-field error-block\">
                        ";
            // line 287
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnit", array()), 'errors');
            echo "
                    </div>
                    <div class=\"price-rule-item-product-unit-type-expression error-block\">
                        ";
            // line 290
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnitExpression", array()), 'errors');
            echo "
                    </div>
                    <div class=\"price-rule-item-currency-type-field visible error-block\">
                        ";
            // line 293
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currency", array()), 'errors');
            echo "
                    </div>
                    <div class=\"price-rule-item-currency-type-expression error-block\">
                        ";
            // line 296
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "currencyExpression", array()), 'errors');
            echo "
                    </div>
                </div>
            </div>
            ";
            // line 300
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rule", array()), 'row');
            echo "
            ";
            // line 301
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ruleCondition", array()), 'row');
            echo "
            <div class=\"price_rule__priority\">";
            // line 302
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priority", array()), 'row');
            echo "</div>

        </div>
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
        return "OroPricingBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  815 => 302,  811 => 301,  807 => 300,  800 => 296,  794 => 293,  788 => 290,  782 => 287,  776 => 284,  770 => 281,  759 => 273,  753 => 270,  745 => 265,  739 => 262,  733 => 258,  731 => 254,  730 => 252,  723 => 248,  715 => 243,  709 => 240,  701 => 235,  695 => 232,  689 => 228,  687 => 224,  686 => 222,  676 => 215,  670 => 212,  665 => 209,  663 => 205,  662 => 203,  652 => 196,  647 => 193,  644 => 189,  641 => 185,  638 => 181,  635 => 180,  632 => 179,  629 => 178,  626 => 177,  623 => 176,  620 => 175,  617 => 174,  614 => 173,  602 => 172,  584 => 103,  576 => 101,  573 => 100,  570 => 99,  567 => 98,  564 => 97,  561 => 96,  558 => 95,  555 => 94,  543 => 93,  538 => 338,  532 => 336,  530 => 335,  523 => 331,  518 => 328,  515 => 327,  506 => 325,  501 => 324,  499 => 323,  496 => 322,  490 => 321,  486 => 320,  482 => 319,  478 => 318,  475 => 317,  473 => 316,  470 => 315,  467 => 314,  464 => 313,  461 => 312,  458 => 311,  455 => 310,  452 => 309,  449 => 308,  440 => 164,  437 => 163,  430 => 161,  421 => 158,  417 => 157,  414 => 156,  409 => 155,  402 => 154,  399 => 153,  393 => 152,  391 => 151,  387 => 150,  384 => 149,  379 => 148,  377 => 147,  373 => 146,  369 => 144,  360 => 142,  356 => 141,  352 => 140,  345 => 136,  341 => 134,  338 => 133,  335 => 132,  332 => 131,  319 => 120,  316 => 119,  310 => 116,  305 => 114,  301 => 113,  297 => 111,  295 => 110,  288 => 109,  285 => 108,  282 => 107,  274 => 88,  269 => 85,  263 => 83,  260 => 82,  251 => 80,  246 => 79,  244 => 78,  232 => 77,  224 => 72,  220 => 71,  212 => 67,  210 => 66,  207 => 65,  204 => 59,  202 => 58,  199 => 57,  196 => 56,  193 => 55,  190 => 54,  187 => 53,  184 => 52,  181 => 51,  173 => 47,  167 => 44,  164 => 43,  161 => 42,  158 => 41,  150 => 37,  148 => 36,  144 => 34,  141 => 33,  131 => 26,  127 => 25,  123 => 24,  119 => 23,  115 => 22,  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  83 => 8,  79 => 7,  75 => 6,  69 => 2,  66 => 1,  62 => 308,  59 => 307,  56 => 170,  54 => 131,  51 => 129,  49 => 107,  46 => 106,  43 => 92,  41 => 51,  38 => 50,  36 => 41,  33 => 40,  31 => 33,  28 => 32,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroPricingBundle:Form:fields.html.twig", "");
    }
}

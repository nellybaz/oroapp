<?php

/* OroSaleBundle:layouts/default/oro_sale_quote_frontend_choice:form_theme.html.twig */
class __TwigTemplate_03027e78f777e71e8ce99db456ea48c15a1a9b2a60e9ed487d4f5fefa0e5b3cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_sale_quote_product_demand_widget' => array($this, 'block_oro_sale_quote_product_demand_widget'),
            'oro_sale_quote_product_demand_collection_widget' => array($this, 'block_oro_sale_quote_product_demand_collection_widget'),
            'oro_sale_quote_product_demand_offer_choice_widget' => array($this, 'block_oro_sale_quote_product_demand_offer_choice_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_sale_quote_product_demand_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('oro_sale_quote_product_demand_collection_widget', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('oro_sale_quote_product_demand_offer_choice_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_sale_quote_product_demand_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["product"] = (($this->getAttribute(($context["quoteProduct"] ?? null), "productReplacement", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["quoteProduct"] ?? null), "productReplacement", array()), $this->getAttribute(($context["quoteProduct"] ?? null), "product", array()))) : ($this->getAttribute(($context["quoteProduct"] ?? null), "product", array())));
        // line 3
        echo "    ";
        $context["isQuantityValid"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "quantity", array()), "vars", array()), "valid", array());
        // line 4
        echo "    ";
        $context["selectedOffer"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "quoteProductOffer", array()), "vars", array()), "data", array());
        // line 5
        echo "    ";
        $context["defaultUnitCode"] = $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitLabelExtension')->format($this->getAttribute($this->getAttribute(($context["selectedOffer"] ?? null), "productUnit", array()), "code", array()), true);
        // line 6
        echo "    ";
        if (($context["isQuantityValid"] ?? null)) {
            // line 7
            echo "        ";
            $context["defaultPriceValue"] = $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute(($context["selectedOffer"] ?? null), "price", array()));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["defaultPriceValue"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproductoffer.not_available.message");
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        $context["componentOptions"] = array("offerSelector" => sprintf("[name=\"%s\"]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 13
($context["form"] ?? null), "quoteProductOffer", array()), "vars", array()), "full_name", array())), "quantitySelector" => sprintf("[name=\"%s\"]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
($context["form"] ?? null), "quantity", array()), "vars", array()), "full_name", array())), "unitInputSelector" => sprintf("[name=\"%s\"]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
($context["form"] ?? null), "unit", array()), "vars", array()), "full_name", array())), "unitSelector" => "[data-role=\"unit-view\"]", "unitPriceSelector" => "[data-role=\"price-view\"]", "quoteProductId" => $this->getAttribute(        // line 18
($context["quoteProduct"] ?? null), "id", array()), "calculatingMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproductoffer.price_calculating.message"), "notAvailableMessage" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproductoffer.not_available.message"), "currentLineItemSelector" => ("#" .         // line 21
($context["id"] ?? null)));
        // line 23
        echo "    <tr id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
        class=\"quote-line-items grid-row\"
        data-page-component-module=\"orosale/js/app/components/quote-product-to-order-component\"
        data-page-component-options=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["componentOptions"] ?? null)), "html", null, true);
        echo "\">
        <td class=\"grid-cell grid-cell--offset-l-none-mobile primary-cell\">
            <h3 class=\"oro-grid-table__title\">
                ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quoteProduct"] ?? null), "productName", array()), "html", null, true);
        echo "
            </h3>
            <div>
                ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproduct.product_sku.label"), "html", null, true);
        echo "
                <span class=\"customer-line-items__sku-value\">
                    ";
        // line 34
        if ($this->getAttribute(($context["quoteProduct"] ?? null), "isTypeNotAvailable", array())) {
            // line 35
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["quoteProduct"] ?? null), "productReplacementSku", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["quoteProduct"] ?? null), "productSku", array()), "html", null, true);
            echo "
                    ";
        }
        // line 39
        echo "                </span>
            </div>
        </td>
        <td class=\"grid-cell grid-cell--offset-l-none-mobile\">
            ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quoteProductOffer", array()), 'widget');
        echo "
            ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quoteProductOffer", array()), 'errors');
        echo "
        </td>
        <td class=\"grid-cell qty-cell\">
            <div class=\"product__qty-input product__qty-input_inline product__qty-input_more-info\">
                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget', array("attr" => array("data-valid" => twig_jsonencode_filter(($context["isQuantityValid"] ?? null)))));
        echo "
                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'widget');
        echo "
                <span data-role=\"unit-view\">
                    ";
        // line 51
        if ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\UnitVisibilityExtension')->isUnitCodeVisible(($context["defaultUnitCode"] ?? null))) {
            // line 52
            echo "                        ";
            echo twig_escape_filter($this->env, ($context["defaultUnitCode"] ?? null), "html", null, true);
            echo "
                    ";
        }
        // line 54
        echo "                </span>
            </div>
            ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
        echo "
            ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "unit", array()), 'errors');
        echo "
        </td>
        <td class=\"grid-cell grid-cell--offset-l-none-mobile\">
            <span class=\"hide-on-desktop hide-on-strict-tablet\" aria-hidden=\"true\">
                ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproductoffer.unit_price.label"), "html", null, true);
        echo ":
            </span>
            <span data-role=\"price-view\">";
        // line 63
        echo twig_escape_filter($this->env, ($context["defaultPriceValue"] ?? null), "html", null, true);
        echo "</span>
        </td>
    </tr>
    ";
        // line 66
        if ( !twig_test_empty($this->getAttribute(($context["quoteProduct"] ?? null), "commentCustomer", array()))) {
            // line 67
            echo "        <tr class=\"grid-row\">
            <td class=\"grid-cell notes-cell grid-cell--offset-l-none-mobile\" colspan=\"4\">
                <div class=\"customer-line-items__notes\">
                    ";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproduct.comment_customer.label"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["quoteProduct"] ?? null), "commentCustomer", array()), "html", null, true);
            echo "
                </div>
            </td>
        </tr>
    ";
        }
        // line 75
        echo "
    ";
        // line 76
        if ( !twig_test_empty($this->getAttribute(($context["quoteProduct"] ?? null), "comment", array()))) {
            // line 77
            echo "        <tr class=\"grid-row\">
            <td class=\"grid-cell notes-cell\" colspan=\"4\">
                <div class=\"customer-line-items__notes\">
                    ";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproduct.comment.label"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["quoteProduct"] ?? null), "comment", array()), "html", null, true);
            echo "
                </div>
            </td>
        </tr>
    ";
        }
    }

    // line 87
    public function block_oro_sale_quote_product_demand_collection_widget($context, array $blocks = array())
    {
        // line 88
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "grid-container customer-line-items")));
        // line 89
        echo "    ";
        ob_start();
        // line 90
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <table class=\"oro-grid-table customer-line-items__table\">
                <thead class=\"grid-header hide-on-mobile-landscape\">
                <tr class=\"grid-header-row\">
                    <th class=\"grid-cell\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproduct.product_name.label"), "html", null, true);
        echo "</th>
                    <th class=\"grid-cell\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproductoffer.select_offer.label"), "html", null, true);
        echo "</th>
                    <th class=\"grid-cell\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproductoffer.quantity_to_order.label"), "html", null, true);
        echo "</th>
                    <th class=\"grid-cell\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproductoffer.unit_price.label"), "html", null, true);
        echo "</th>
                </tr>
                </thead>
                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 101
            echo "                    <tbody class=\"grid-body\">
                        ";
            // line 102
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "unique_block_prefix", array()) == ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "unique_block_prefix", array()) . "_entry"))) {
                // line 103
                echo "                            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                        ";
            }
            // line 105
            echo "                    </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "            </table>
            ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
            ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 114
    public function block_oro_sale_quote_product_demand_offer_choice_widget($context, array $blocks = array())
    {
        // line 115
        echo "    <table class=\"oro-grid-table\">
        <tbody>
            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 118
            echo "                ";
            $context["choice"] = $this->getAttribute(($context["choices"] ?? null), $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), array(), "array");
            // line 119
            echo "                ";
            $context["offer"] = $this->getAttribute(($context["choice"] ?? null), "data", array());
            // line 120
            echo "                <tr>
                    <td class=\"grid-cell grid-cell--offset-l-none\" >
                        ";
            // line 122
            $context["formattedUnitCode"] = "";
            // line 123
            echo "                        ";
            if ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\UnitVisibilityExtension')->isUnitCodeVisible($this->getAttribute($this->getAttribute(($context["offer"] ?? null), "productUnit", array()), "code", array()))) {
                // line 124
                echo "                            ";
                $context["formattedUnitCode"] = $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitLabelExtension')->format($this->getAttribute($this->getAttribute(($context["offer"] ?? null), "productUnit", array()), "code", array()), true);
                // line 125
                echo "                        ";
            }
            // line 126
            echo "
                        ";
            // line 127
            $context["attr"] = array("data-value" => $this->getAttribute(            // line 128
($context["offer"] ?? null), "id", array()), "data-unit" => $this->getAttribute(            // line 129
($context["offer"] ?? null), "productUnitCode", array()), "data-formatted-unit" =>             // line 130
($context["formattedUnitCode"] ?? null), "data-quantity" => $this->getAttribute(            // line 131
($context["offer"] ?? null), "quantity", array()), "data-price" => $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute(            // line 132
($context["offer"] ?? null), "price", array())));
            // line 134
            echo "
                        ";
            // line 135
            $context["label_attr"] = array("class" => "absolute");
            // line 138
            echo "
                        ";
            // line 139
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" =>             // line 140
($context["attr"] ?? null), "label_attr" =>             // line 141
($context["label_attr"] ?? null)));
            // line 142
            echo "
                    </td>
                    <td class=\"grid-cell quote-product-offer-select-offer-price\">
                        ";
            // line 145
            echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute(($context["offer"] ?? null), "price", array()));
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "OroSaleBundle:layouts/default/oro_sale_quote_frontend_choice:form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  354 => 149,  344 => 145,  339 => 142,  337 => 141,  336 => 140,  335 => 139,  332 => 138,  330 => 135,  327 => 134,  325 => 132,  324 => 131,  323 => 130,  322 => 129,  321 => 128,  320 => 127,  317 => 126,  314 => 125,  311 => 124,  308 => 123,  306 => 122,  302 => 120,  299 => 119,  296 => 118,  292 => 117,  288 => 115,  285 => 114,  277 => 109,  273 => 108,  270 => 107,  263 => 105,  257 => 103,  255 => 102,  252 => 101,  248 => 100,  242 => 97,  238 => 96,  234 => 95,  230 => 94,  222 => 90,  219 => 89,  216 => 88,  213 => 87,  201 => 80,  196 => 77,  194 => 76,  191 => 75,  181 => 70,  176 => 67,  174 => 66,  168 => 63,  163 => 61,  156 => 57,  152 => 56,  148 => 54,  142 => 52,  140 => 51,  135 => 49,  131 => 48,  124 => 44,  120 => 43,  114 => 39,  108 => 37,  102 => 35,  100 => 34,  95 => 32,  89 => 29,  83 => 26,  76 => 23,  74 => 21,  73 => 18,  72 => 15,  71 => 14,  70 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  36 => 1,  32 => 114,  29 => 113,  27 => 87,  24 => 86,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSaleBundle:layouts/default/oro_sale_quote_frontend_choice:form_theme.html.twig", "");
    }
}

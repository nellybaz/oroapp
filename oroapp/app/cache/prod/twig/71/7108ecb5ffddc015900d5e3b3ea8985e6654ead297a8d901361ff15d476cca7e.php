<?php

/* OroSaleBundle:Form:fields.html.twig */
class __TwigTemplate_ea81c71f5adc99c17616ce55c4a136545b2a18d30097fd08a5ebbdd192605ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_sale_quote_product_collection_row' => array($this, 'block_oro_sale_quote_product_collection_row'),
            'oro_sale_quote_product_collection_widget' => array($this, 'block_oro_sale_quote_product_collection_widget'),
            'oro_sale_quote_product_widget' => array($this, 'block_oro_sale_quote_product_widget'),
            'oro_sale_quote_product_request_collection' => array($this, 'block_oro_sale_quote_product_request_collection'),
            'oro_sale_quote_product_offer_collection_widget' => array($this, 'block_oro_sale_quote_product_offer_collection_widget'),
            'oro_sale_quote_product_offer_widget' => array($this, 'block_oro_sale_quote_product_offer_widget'),
            'oro_quote_address_type_widget' => array($this, 'block_oro_quote_address_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_sale_quote_product_collection_row', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('oro_sale_quote_product_collection_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('oro_sale_quote_product_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('oro_sale_quote_product_request_collection', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('oro_sale_quote_product_offer_collection_widget', $context, $blocks);
        // line 207
        echo "
";
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('oro_sale_quote_product_offer_widget', $context, $blocks);
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('oro_quote_address_type_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_sale_quote_product_collection_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
";
    }

    // line 5
    public function block_oro_sale_quote_product_collection_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 7
            echo "        ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_sale_quote_lineitem_prototype", array(0 => ($context["form"] ?? null)), "method");
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection grid-container")));
        // line 10
        echo "    ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 11
        echo "    <div class=\"row-oro\">
        ";
        // line 12
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 13
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <table class=\"grid table-hover table table-bordered table-condensed\">
                <thead>
                <tr>
                    <th><span>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.lineitem.product_sku"), "html", null, true);
        echo "</span></th>
                    <th><span>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.lineitem.product"), "html", null, true);
        echo "</span></th>
                    <th><span>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.lineitem.requested.label"), "html", null, true);
        echo "</span></th>
                    <th><span>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.lineitem.offers.label"), "html", null, true);
        echo "</span></th>
                    <th><span>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.lineitem.notes"), "html", null, true);
        echo "</span></th>
                    <th></th>
                </tr>
                </thead>
                <tbody data-last-index=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, ($context["prototype_name"] ?? null), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, ($context["prototype_html"] ?? null));
            echo "\"";
        }
        echo " class=\"1\">
                ";
        // line 26
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 27
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 28
                echo "                        ";
                echo $this->getAttribute($this, "oro_sale_quote_lineitem_prototype", array(0 => $context["child"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 31
            echo "                    ";
            echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => "0"));
            echo "
                ";
        }
        // line 33
        echo "                </tbody>
            </table>
        </div>
        <a class=\"btn add-list-item\" data-container=\".oro-item-collection tbody\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.lineitem.add"), "html", null, true);
        echo "</a>
    </div>
";
    }

    // line 60
    public function block_oro_sale_quote_product_widget($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? ($this->getAttribute(($context["attr"] ?? null), "class", array())) : ("")) . " quote-lineitem-widget control-group")));
        // line 62
        echo "
    ";
        // line 63
        $context["commentCustomer"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "commentCustomer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "commentCustomer", array()), null)) : (null));
        // line 64
        echo "    ";
        $context["commentSeller"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "comment", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "comment", array()), null)) : (null));
        // line 65
        echo "    ";
        $context["quoteProductRequests"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "quoteProductRequests", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "quoteProductRequests", array()), array())) : (array()));
        // line 66
        echo "    ";
        $context["isProductFreeForm"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "isProductFreeForm", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "isProductFreeForm", array(), "method"), false)) : (false));
        // line 67
        echo "    ";
        $context["isProductReplacementFreeForm"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "isProductReplacementFreeForm", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "isProductReplacementFreeForm", array(), "method"), false)) : (false));
        // line 68
        echo "    ";
        $context["isProductReplacement"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "isTypeNotAvailable", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "isTypeNotAvailable", array(), "method"), false)) : (false));
        // line 69
        echo "
    <td class=\"quote-lineitem-product-sku\">
        <div class=\"fields-row quote-lineitem-product-sku-row\">
            <div class=\"quote-lineitem-product-form";
        // line 72
        if (($context["isProductFreeForm"] ?? null)) {
            echo " hide";
        }
        echo "\">
                <label class=\"quote-lineitem-product-sku-label\">";
        // line 73
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "productSku", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "productSku", array()), "")) : ("")), "html", null, true);
        echo "</label>
            </div>
            <div class=\"quote-lineitem-product-free-form";
        // line 75
        if ( !($context["isProductFreeForm"] ?? null)) {
            echo " hide";
        }
        echo "\">
                ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productSku", array()), 'widget');
        echo "
                ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productSku", array()), 'errors');
        echo "
            </div>
        </div>
    </td>
    <td class=\"quote-lineitem-product\">
        <div class=\"fields-row quote-lineitem-product-row";
        // line 82
        if (($context["isProductReplacement"] ?? null)) {
            echo " hide";
        }
        echo "\">
            <div class=\"quote-lineitem-product-select quote-lineitem-product-form";
        // line 83
        if (($context["isProductFreeForm"] ?? null)) {
            echo " hide";
        }
        echo "\">
                ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product", array()), 'widget');
        echo "
                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "product", array()), 'errors');
        echo "
                ";
        // line 86
        if (($context["allow_add_free_form_items"] ?? null)) {
            // line 87
            echo "                    <a class=\"quote-lineitem-free-form-link\" href=\"javascript: void(0);\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteproduct.select.free_form"), "html", null, true);
            echo "</a>
                ";
        }
        // line 89
        echo "            </div>
            <div class=\"quote-lineitem-product-free-form";
        // line 90
        if ( !($context["isProductFreeForm"] ?? null)) {
            echo " hide";
        }
        echo "\">
                ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "freeFormProduct", array()), 'widget', array("attr" => twig_array_merge(($context["attr"] ?? null), array("class" => "quote-lineitem-product-freeform-input"))));
        echo "
                ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "freeFormProduct", array()), 'errors');
        echo "
                ";
        // line 93
        if (($context["allow_add_free_form_items"] ?? null)) {
            // line 94
            echo "                    <a class=\"quote-lineitem-product-select-link\" href=\"javascript: void(0);\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteproduct.select.product"), "html", null, true);
            echo "</a>
                ";
        }
        // line 96
        echo "            </div>
        </div>

        <div class=\"fields-row quote-lineitem-product-replacement-row";
        // line 99
        if ( !($context["isProductReplacement"] ?? null)) {
            echo " hide";
        }
        echo "\">
            <div class=\"quote-lineitem-product-replacement-select quote-lineitem-product-form";
        // line 100
        if (($context["isProductReplacementFreeForm"] ?? null)) {
            echo " hide";
        }
        echo "\">
                ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productReplacement", array()), 'widget');
        echo "
                ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productReplacement", array()), 'errors');
        echo "
                <a class=\"quote-lineitem-free-form-link\" href=\"javascript: void(0);\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteproduct.select.free_form"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"quote-lineitem-product-free-form";
        // line 105
        if ( !($context["isProductReplacementFreeForm"] ?? null)) {
            echo " hide";
        }
        echo "\">
                ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productReplacementSku", array()), 'label');
        echo "
                ";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productReplacementSku", array()), 'widget');
        echo "
                ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productReplacementSku", array()), 'errors');
        echo "
                ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "freeFormProductReplacement", array()), 'label');
        echo "
                ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "freeFormProductReplacement", array()), 'widget', array("attr" => twig_array_merge(($context["attr"] ?? null), array("class" => "quote-lineitem-productreplacement-freeform-input"))));
        echo "
                ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "freeFormProductReplacement", array()), 'errors');
        echo "
                <br/><a class=\"quote-lineitem-product-select-link\" href=\"javascript: void(0);\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteproduct.select.product"), "html", null, true);
        echo "</a>
            </div>
        </div>
        ";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", array()), 'widget');
        echo "
    </td>
    <td class=\"quote-lineitem-requested\">
        ";
        // line 118
        $this->displayBlock("oro_sale_quote_product_request_collection", $context, $blocks);
        echo "
    </td>
    <td class=\"quote-lineitem-offers\">
        ";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quoteProductOffers", array()), 'widget');
        echo "
        ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quoteProductOffers", array()), 'errors');
        echo "
    </td>
    <td class=\"quote-lineitem-notes\">
        ";
        // line 125
        if (($context["commentCustomer"] ?? null)) {
            // line 126
            echo "            <div class=\"quote-lineitem-notes quote-lineitem-notes-customer\">
                ";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "commentCustomer", array()), 'label');
            echo "
                ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "commentCustomer", array()), 'widget');
            echo "
            </div>
        ";
        }
        // line 131
        echo "        <div class=\"quote-lineitem-notes-seller-active\">
            ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", array()), 'label');
        echo "
            <div data-page-component-module=\"oroorder/js/app/components/notes-component\">
                ";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", array()), 'widget');
        echo "
                ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", array()), 'errors');
        echo "
            </div>
        </div>
    </td>
";
    }

    // line 141
    public function block_oro_sale_quote_product_request_collection($context, array $blocks = array())
    {
        // line 142
        echo "    ";
        if (twig_length_filter($this->env, ($context["quoteProductRequests"] ?? null))) {
            // line 143
            echo "        <table class=\"quote-lineitem-requests-widget table-bordered\">
            <thead>
                <tr>
                    <th colspan=\"2\"><span>";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteproductrequest.quantity.label"), "html", null, true);
            echo "</span></th>
                    <th><span>";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteproductrequest.price.label"), "html", null, true);
            echo "</span></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["quoteProductRequests"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 152
                echo "                    <tr class=\"quote-lineitem-requested quote-lineitem-requested-item\">
                        <td class=\"quote-lineitem-requested-quantity\">
                            ";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "quantity", array()), "html", null, true);
                echo "
                        </td>

                        <td class=\"quote-lineitem-requested-unit\">
                            ";
                // line 158
                if ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\UnitVisibilityExtension')->isUnitCodeVisible($this->getAttribute($this->getAttribute($context["child"], "productUnit", array()), "code", array()))) {
                    // line 159
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "productUnit", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 161
                echo "                        </td>

                        <td class=\"quote-lineitem-requested-price\">
                            ";
                // line 164
                if ( !twig_test_empty($this->getAttribute($context["child"], "price", array()))) {
                    // line 165
                    echo "                                ";
                    echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute($context["child"], "price", array()));
                    echo "
                            ";
                }
                // line 167
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "            </tbody>
        </table>
    ";
        }
    }

    // line 175
    public function block_oro_sale_quote_product_offer_collection_widget($context, array $blocks = array())
    {
        // line 176
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 177
            echo "        ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_sale_quote_product_offer_prototype", array(0 => ($context["form"] ?? null), 1 => true), "method");
            // line 178
            echo "    ";
        }
        // line 179
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "oro-item-collection grid-container")));
        // line 180
        echo "    ";
        $context["id"] = (($context["id"] ?? null) . "_collection");
        // line 181
        echo "    <div class=\"row-oro\">
        ";
        // line 182
        $context["prototype_name"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "prototype_name", array());
        // line 183
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <input type=\"hidden\" name=\"validate_";
        // line 184
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-collection-name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" data-name=\"collection-validation\" disabled data-validate-element>
            <table class=\"table-hover table table-bordered quote-lineitem-offers\">
                <thead>
                <tr>
                    <th colspan=\"3\"><span>";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.lineitem.offers.quantity"), "html", null, true);
        echo "</span></th>
                    <th><span>";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.lineitem.offers.price"), "html", null, true);
        echo "</span></th>
                    <th></th>
                </tr>
                </thead>
                <tbody class=\"quote-lineitem-offers-items\" data-last-index=\"";
        // line 193
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
        // line 194
        if (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array()))) {
            // line 195
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 196
                echo "                        ";
                echo $this->getAttribute($this, "oro_sale_quote_product_offer_prototype", array(0 => $context["child"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "                ";
        } elseif ((($context["show_form_when_empty"] ?? null) && array_key_exists("prototype_html", $context))) {
            // line 199
            echo "                    ";
            echo twig_replace_filter(($context["prototype_html"] ?? null), array(($context["prototype_name"] ?? null) => "0"));
            echo "
                ";
        }
        // line 201
        echo "                </tbody>
            </table>
        </div>
        <a class=\"btn add-list-item quote-lineitem-offers-item-add\" data-container=\".oro-item-collection tbody\" href=\"javascript: void(0);\"><i class=\"fa-plus\"></i>";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.lineitem.offers.add"), "html", null, true);
        echo "</a>
    </div>
";
    }

    // line 242
    public function block_oro_sale_quote_product_offer_widget($context, array $blocks = array())
    {
        // line 243
        echo "    <td class=\"quote-lineitem-offers-quantity\">
        ";
        // line 244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'widget');
        echo "
        ";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "quantity", array()), 'errors');
        echo "
    </td>
    <td class=\"quote-lineitem-offers-unit\">
        ";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnit", array()), 'widget', array("attr" => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "productUnit", array()), "vars", array()), "attr", array()), array("class" => "quote-lineitem-offer-unit-select"))));
        echo "
        ";
        // line 249
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "productUnit", array()), 'errors');
        echo "
    </td>
    <td class=\"quote-lineitem-offers-more\">
        <div class=\"quote-lineitem-offers-more-fields\">
            ";
        // line 253
        $context["attrs"] = array();
        // line 254
        echo "            ";
        if ((((array_key_exists("prototype", $context)) ? (_twig_default_filter(($context["prototype"] ?? null), false)) : (false)) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "allowIncrements", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "default", array(), "any", true, true))) {
            // line 255
            echo "                ";
            $context["attrs"] = twig_array_merge(($context["attrs"] ?? null), array("checked" => "checked"));
            // line 256
            echo "            ";
        }
        // line 257
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "allowIncrements", array()), 'widget', ($context["attrs"] ?? null));
        echo "
            ";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "allowIncrements", array()), 'label');
        echo "
            ";
        // line 259
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "allowIncrements", array()), 'errors');
        echo "
        </div>
        ";
        // line 261
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priceType", array()), 'widget');
        echo "
        ";
        // line 262
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "priceType", array()), 'errors');
        echo "
    </td>
    <td class=\"quote-lineitem-offers-price line-item-price\"
        data-page-component-module=\"oroui/js/app/components/view-component\"
        data-page-component-options=\"";
        // line 266
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oropricing/js/app/views/line-item-product-prices-view", "editable" => $this->getAttribute($this->getAttribute(        // line 268
($context["form"] ?? null), "vars", array()), "allow_prices_override", array()))), "html", null, true);
        // line 269
        echo "\">
        <div class=\"fields-row\">
            ";
        // line 271
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "price", array()), 'widget');
        echo "
            ";
        // line 272
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "price", array()), 'errors');
        echo "
        </div>
    </td>
";
    }

    // line 277
    public function block_oro_quote_address_type_widget($context, array $blocks = array())
    {
        // line 278
        echo "    ";
        if ( !twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", array()))) {
            // line 279
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 280
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerAddress", array()), 'row');
            echo "
            ";
            // line 281
            $this->displayBlock("oro_address_rows", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 284
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "customerAddress", array()), 'row');
            echo "
        ";
            // line 285
            $this->displayBlock("oro_address_rows", $context, $blocks);
            echo "
    ";
        }
    }

    // line 40
    public function getoro_sale_quote_lineitem_prototype($__widget__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 42
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 43
                echo "        ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 44
                echo "    ";
            } else {
                // line 45
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 46
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 47
                echo "    ";
            }
            // line 48
            echo "    ";
            $context["page_component_options"] = twig_array_merge($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "page_component_options", array()), (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "componentOptions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "componentOptions", array()), array())) : (array())));
            // line 49
            echo "    <tr data-content=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" data-validation-optional-group ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo "
        class=\"quote-lineitem\"
        data-page-component-module=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "page_component", array()), "html", null, true);
            echo "\"
        data-page-component-options=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["page_component_options"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
        <td class=\"quote-lineitem-remove\">
            <button type=\"button\" class=\"removeLineItem btn icons-holder\">";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.lineitem.remove"), "html", null, true);
            echo "</button>
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

    // line 208
    public function getoro_sale_quote_product_offer_prototype($__widget__ = null, $__prototype__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "prototype" => $__prototype__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 209
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "block_prefixes", array()))) {
                // line 210
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array());
                // line 211
                echo "        ";
                $context["name"] = ((($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array()) . "[") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "prototype", array()), "vars", array()), "name", array())) . "]");
                // line 212
                echo "    ";
            } else {
                // line 213
                echo "        ";
                $context["form"] = ($context["widget"] ?? null);
                // line 214
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute(($context["widget"] ?? null), "vars", array()), "full_name", array());
                // line 215
                echo "    ";
            }
            // line 216
            echo "    ";
            $context["productForm"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "parent", array());
            // line 217
            echo "    <tr data-content=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
        data-validation-optional-group ";
            // line 218
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo "
        class=\"quote-lineitem-offers quote-lineitem-offers-item\"
        data-page-component-module=\"oroui/js/app/components/view-component\"
        data-page-component-options=\"";
            // line 221
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orosale/js/app/views/line-item-offer-view", "normalizeQuantityField" => false, "\$" => array("product" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 225
($context["productForm"] ?? null), "product", array()), "vars", array()), "id", array())), "priceValue" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 226
($context["form"] ?? null), "price", array()), "value", array()), "vars", array()), "id", array())), "priceType" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 227
($context["form"] ?? null), "priceType", array()), "vars", array()), "id", array())), "productUnit" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 228
($context["form"] ?? null), "productUnit", array()), "vars", array()), "id", array())), "quantity" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 229
($context["form"] ?? null), "quantity", array()), "vars", array()), "id", array())), "currency" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 230
($context["form"] ?? null), "price", array()), "currency", array()), "vars", array()), "id", array()))), "isNew" => twig_test_empty($this->getAttribute($this->getAttribute(            // line 232
($context["form"] ?? null), "vars", array()), "value", array())))), "html", null, true);
            // line 233
            echo "\"
        data-layout=\"separate\">
        ";
            // line 235
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("prototype" => ($context["prototype"] ?? null)));
            echo "
        <td class=\"quote-lineitem-offers-remove\">
            <button type=\"button\" class=\"removeRow btn icons-holder\"><i class=\"fa-close\"></i></button>
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
        return "OroSaleBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  838 => 235,  834 => 233,  832 => 232,  831 => 230,  830 => 229,  829 => 228,  828 => 227,  827 => 226,  826 => 225,  825 => 221,  819 => 218,  814 => 217,  811 => 216,  808 => 215,  805 => 214,  802 => 213,  799 => 212,  796 => 211,  793 => 210,  790 => 209,  777 => 208,  758 => 55,  753 => 53,  749 => 52,  745 => 51,  737 => 49,  734 => 48,  731 => 47,  728 => 46,  725 => 45,  722 => 44,  719 => 43,  716 => 42,  713 => 41,  701 => 40,  694 => 285,  689 => 284,  683 => 281,  679 => 280,  674 => 279,  671 => 278,  668 => 277,  660 => 272,  656 => 271,  652 => 269,  650 => 268,  649 => 266,  642 => 262,  638 => 261,  633 => 259,  629 => 258,  624 => 257,  621 => 256,  618 => 255,  615 => 254,  613 => 253,  606 => 249,  602 => 248,  596 => 245,  592 => 244,  589 => 243,  586 => 242,  579 => 204,  574 => 201,  568 => 199,  565 => 198,  556 => 196,  551 => 195,  549 => 194,  537 => 193,  530 => 189,  526 => 188,  517 => 184,  512 => 183,  510 => 182,  507 => 181,  504 => 180,  501 => 179,  498 => 178,  495 => 177,  492 => 176,  489 => 175,  482 => 170,  474 => 167,  468 => 165,  466 => 164,  461 => 161,  455 => 159,  453 => 158,  446 => 154,  442 => 152,  438 => 151,  431 => 147,  427 => 146,  422 => 143,  419 => 142,  416 => 141,  407 => 135,  403 => 134,  398 => 132,  395 => 131,  389 => 128,  385 => 127,  382 => 126,  380 => 125,  374 => 122,  370 => 121,  364 => 118,  358 => 115,  352 => 112,  348 => 111,  344 => 110,  340 => 109,  336 => 108,  332 => 107,  328 => 106,  322 => 105,  317 => 103,  313 => 102,  309 => 101,  303 => 100,  297 => 99,  292 => 96,  286 => 94,  284 => 93,  280 => 92,  276 => 91,  270 => 90,  267 => 89,  261 => 87,  259 => 86,  255 => 85,  251 => 84,  245 => 83,  239 => 82,  231 => 77,  227 => 76,  221 => 75,  216 => 73,  210 => 72,  205 => 69,  202 => 68,  199 => 67,  196 => 66,  193 => 65,  190 => 64,  188 => 63,  185 => 62,  182 => 61,  179 => 60,  172 => 36,  167 => 33,  161 => 31,  158 => 30,  149 => 28,  144 => 27,  142 => 26,  130 => 25,  123 => 21,  119 => 20,  115 => 19,  111 => 18,  107 => 17,  99 => 13,  97 => 12,  94 => 11,  91 => 10,  88 => 9,  85 => 8,  82 => 7,  79 => 6,  76 => 5,  69 => 2,  66 => 1,  62 => 277,  59 => 276,  57 => 242,  54 => 241,  51 => 207,  49 => 175,  46 => 174,  44 => 141,  41 => 140,  39 => 60,  36 => 59,  33 => 39,  31 => 5,  28 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSaleBundle:Form:fields.html.twig", "");
    }
}

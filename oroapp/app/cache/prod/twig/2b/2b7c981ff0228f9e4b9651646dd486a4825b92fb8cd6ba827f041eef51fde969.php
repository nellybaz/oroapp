<?php

/* OroSaleBundle:layouts/default/oro_sale_quote_frontend_view:layout.html.twig */
class __TwigTemplate_4272d5b0dc5e29128ee954f70e6510d4577c8f1dca1dba2164756a3b290ba30a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_quote_view_controls_list_widget' => array($this, 'block__quote_view_controls_list_widget'),
            '_quote_view_customer_status_widget' => array($this, 'block__quote_view_customer_status_widget'),
            '_quote_view_information_widget' => array($this, 'block__quote_view_information_widget'),
            '_quote_view_line_items_widget' => array($this, 'block__quote_view_line_items_widget'),
            '_quote_view_page_widget' => array($this, 'block__quote_view_page_widget'),
            '_quote_view_accept_container_widget' => array($this, 'block__quote_view_accept_container_widget'),
            '_quote_view_accept_button_widget' => array($this, 'block__quote_view_accept_button_widget'),
            'address_widget' => array($this, 'block_address_widget'),
            'quote_body_column_element_widget' => array($this, 'block_quote_body_column_element_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_quote_view_controls_list_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('_quote_view_customer_status_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('_quote_view_information_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('_quote_view_line_items_widget', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('_quote_view_page_widget', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('_quote_view_accept_container_widget', $context, $blocks);
        // line 171
        echo "
";
        // line 172
        $this->displayBlock('_quote_view_accept_button_widget', $context, $blocks);
        // line 178
        echo "
";
        // line 179
        $this->displayBlock('address_widget', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('quote_body_column_element_widget', $context, $blocks);
    }

    // line 1
    public function block__quote_view_controls_list_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <ul class=\"controls-list\">
        <li><a href=\"#\"><i class=\"fa-reply\"></i>Share</a></li>
        <li><a href=\"#\"><i class=\"fa-print\"></i>Print</a></li>
        <li><a href=\"#\"><i class=\"fa-file\"></i>Save PDF</a></li>
    </ul>
";
    }

    // line 9
    public function block__quote_view_customer_status_widget($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.customer_status.label"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 17
    public function block__quote_view_information_widget($context, array $blocks = array())
    {
        // line 18
        echo "    <div class=\"customer-info-grid\">
        <h2 class=\"customer-info-grid__title\">
            ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.sections.general"), "html", null, true);
        echo "
        </h2>
        <div class=\"grid__row\">
            <div class=\"grid__column grid__column--6 grid__column--no-gutters-l\">
                <table class=\"customer-info-grid__table\">
                    <tbody>
                    ";
        // line 26
        if (twig_length_filter($this->env, $this->getAttribute(($context["quote"] ?? null), "assignedUsers", array()))) {
            // line 27
            echo "                        <tr>
                            <td class=\"customer-info-grid__element-label\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.assigned_customer_users.label"), "html", null, true);
            echo "</td>
                            <td class=\"customer-info-grid__element-content\">
                                ";
            // line 30
            $context["assigned_users"] = array();
            // line 31
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["quote"] ?? null), "assignedUsers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 32
                echo "                                    ";
                $context["assigned_users"] = twig_array_merge(($context["assigned_users"] ?? null), array(0 => $this->getAttribute($context["entity"], "fullName", array())));
                // line 33
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                                ";
            echo twig_escape_filter($this->env, twig_join_filter(($context["assigned_users"] ?? null), ", "), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        // line 38
        echo "                    <tr class=\"customer-info-grid__row\">
                        <td class=\"customer-info-grid__element-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.valid_until.label"), "html", null, true);
        echo "</td>
                        <td class=\"customer-info-grid__element-content\">";
        // line 40
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["quote"] ?? null), "validUntil", array())) ? ($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDateTime($this->getAttribute(($context["quote"] ?? null), "validUntil", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
        echo "</td>
                    </tr>
                    <tr class=\"customer-info-grid__row\">
                        <td class=\"customer-info-grid__element-label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.po_number.label"), "html", null, true);
        echo "</td>
                        <td class=\"customer-info-grid__element-content\">";
        // line 44
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["quote"] ?? null), "poNumber", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["quote"] ?? null), "poNumber", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))), "html", null, true);
        echo "</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"grid__column grid__column--6 grid__column--no-gutters-r\">
                <table class=\"customer-info-grid__table\">
                    <tbody>
                        <tr class=\"customer-info-grid__row\">
                            <td class=\"customer-info-grid__element-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.ship_until.label"), "html", null, true);
        echo "</td>
                            <td class=\"customer-info-grid__element-content\">";
        // line 54
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate($this->getAttribute(($context["quote"] ?? null), "shipUntil", array())), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")), "html", null, true);
        echo "</td>
                        </tr>
                        ";
        // line 56
        if ( !twig_test_empty($this->getAttribute(($context["quote"] ?? null), "shippingCost", array()))) {
            // line 57
            echo "                        <tr class=\"customer-info-grid__row\">
                            <td class=\"customer-info-grid__element-label\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.ship_estimate.label"), "html", null, true);
            echo "</td>
                            <td class=\"customer-info-grid__element-content\">";
            // line 59
            echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute(($context["quote"] ?? null), "shippingCost", array()));
            echo "</td>
                        </tr>
                        ";
        }
        // line 62
        echo "                        ";
        if ((array_key_exists("paymentTerm", $context) &&  !twig_test_empty(($context["paymentTerm"] ?? null)))) {
            // line 63
            echo "                            <tr class=\"customer-info-grid__row\">
                                <td class=\"customer-info-grid__element-label\">";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.paymentterm.entity_label"), "html", null, true);
            echo "</td>
                                <td class=\"customer-info-grid__element-content\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute(($context["paymentTerm"] ?? null), "label", array()));
            echo "</td>
                            </tr>
                        ";
        }
        // line 68
        echo "                        ";
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
                    </tbody>
                </table>
            </div>

        </div>
    </div>
";
    }

    // line 77
    public function block__quote_view_line_items_widget($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroSaleBundle:layouts/default/oro_sale_quote_frontend_view:layout.html.twig", 78);
        // line 79
        echo "    <div class=\"customer-line-items\">
        <h2 class=\"customer-line-items__title\">
            ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.sections.quote_products.label"), "html", null, true);
        echo "
        </h2>
        <table class=\"oro-grid-table customer-line-items__table\">
            <thead class=\"grid-header hide-on-mobile-landscape\">
                <tr class=\"grid-header-row\">
                    <th class=\"grid-cell\" colspan=\"2\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.sections.quote_products.columns.item"), "html", null, true);
        echo "</th>
                    <th class=\"grid-cell\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.sections.quote_products.columns.quantity"), "html", null, true);
        echo "</th>
                    <th class=\"grid-cell\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.sections.quote_products.columns.unit_price"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quoteProducts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["quoteProduct"]) {
            // line 92
            echo "                <tbody class=\"grid-body\">
                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["quoteProduct"], "quoteProductOffers", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["productOffer"]) {
                // line 94
                echo "                    <tr class=\"grid-row\">
                        ";
                // line 95
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 96
                    echo "                            <td class=\"grid-cell grid-cell--offset-none-mobile primary-cell\" colspan=\"2\" rowspan=\"";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["quoteProduct"], "quoteProductOffers", array())), "html", null, true);
                    echo "\">
                                <h3 class=\"oro-grid-table__title\">
                                    ";
                    // line 98
                    if ($this->getAttribute($this->getAttribute($context["quoteProduct"], "product", array(), "any", false, true), "id", array(), "any", true, true)) {
                        // line 99
                        echo "                                        ";
                        echo $context["UI"]->getlink(array("path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_product_frontend_product_view", array("id" => $this->getAttribute($this->getAttribute(                        // line 100
$context["quoteProduct"], "product", array()), "id", array()))), "label" => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\LocalizationExtension')->getLocalizedValue($this->getAttribute($this->getAttribute(                        // line 101
$context["quoteProduct"], "product", array()), "names", array()))));
                        // line 102
                        echo "
                                    ";
                    } else {
                        // line 104
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["quoteProduct"], "productName", array()), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 106
                    echo "                                </h3>
                                <div>";
                    // line 107
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproduct.product_sku.label"), "html", null, true);
                    echo " <span class=\"customer-line-items__sku-value\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quoteProduct"], "productSku", array()), "html", null, true);
                    echo "</span></div>

                                <div class=\"grid-row hide-on-desktop hide-on-strict-tablet\">
                                    <div class=\"grid-head grid-cell--offset-l-none-mobile\" aria-hidden=\"true\">
                                        ";
                    // line 111
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.sections.quote_products.columns.quantity"), "html", null, true);
                    echo "
                                    </div>
                                    <div class=\"grid-head\" aria-hidden=\"true\">
                                        ";
                    // line 114
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quote.sections.quote_products.columns.unit_price"), "html", null, true);
                    echo "
                                    </div>
                                </div>
                            </td>
                        ";
                }
                // line 119
                echo "                        <td class=\"grid-cell grid-cell--offset-l-none-mobile\">
                            ";
                // line 120
                if ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\UnitVisibilityExtension')->isUnitCodeVisible($this->getAttribute($this->getAttribute($context["productOffer"], "productUnit", array()), "code", array()))) {
                    // line 121
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitValueExtension')->formatShort($this->getAttribute($context["productOffer"], "quantity", array()), $this->getAttribute($context["productOffer"], "productUnit", array())), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 123
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productOffer"], "quantity", array()), "html", null, true);
                    echo "
                            ";
                }
                // line 125
                echo "                            ";
                if ($this->getAttribute($context["productOffer"], "allowIncrements", array())) {
                    // line 126
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproductoffer.allow_increments.label"), "html", null, true);
                    echo "
                            ";
                }
                // line 128
                echo "                        </td>
                        <td class=\"grid-cell\">";
                // line 129
                echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute($context["productOffer"], "price", array()));
                echo "</td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productOffer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "
                ";
            // line 133
            if ( !twig_test_empty($this->getAttribute($context["quoteProduct"], "commentCustomer", array()))) {
                // line 134
                echo "                    <tr class=\"grid-row\">
                        <td class=\"grid-cell notes-cell\" colspan=\"4\">
                            <div class=\"customer-line-items__notes\">
                                ";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproduct.comment_customer.label"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quoteProduct"], "commentCustomer", array()), "html", null, true);
                echo "
                            </div>
                        </td>
                    </tr>
                ";
            }
            // line 142
            echo "
                ";
            // line 143
            if ( !twig_test_empty($this->getAttribute($context["quoteProduct"], "comment", array()))) {
                // line 144
                echo "                    <tr class=\"grid-row\">
                        <td class=\"grid-cell notes-cell\" colspan=\"4\">
                            <div class=\"customer-line-items__notes\">
                                ";
                // line 147
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.frontend.sale.quoteproduct.comment.label"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quoteProduct"], "comment", array()), "html", null, true);
                echo "
                            </div>
                        </td>
                    </tr>
                ";
            }
            // line 152
            echo "                </tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quoteProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "        </table>
    </div>
";
    }

    // line 158
    public function block__quote_view_page_widget($context, array $blocks = array())
    {
        // line 159
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " quote")));
        // line 160
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 161
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 165
    public function block__quote_view_accept_container_widget($context, array $blocks = array())
    {
        // line 166
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " order-checkout-widget text-right")));
        // line 167
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 168
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 172
    public function block__quote_view_accept_button_widget($context, array $blocks = array())
    {
        // line 173
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " order-checkout-widget__quote")));
        // line 174
        echo "    <div";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 175
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 179
    public function block_address_widget($context, array $blocks = array())
    {
        // line 180
        echo "    ";
        $context["__internal_499c9d0d31c160d2e965af66355c6aa4cc64b2a0c28763579bf781fb714c82ef"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroSaleBundle:layouts/default/oro_sale_quote_frontend_view:layout.html.twig", 180);
        // line 181
        echo "    ";
        echo $context["__internal_499c9d0d31c160d2e965af66355c6aa4cc64b2a0c28763579bf781fb714c82ef"]->getrenderAddress(($context["address"] ?? null));
        echo "
";
    }

    // line 184
    public function block_quote_body_column_element_widget($context, array $blocks = array())
    {
        // line 185
        echo "    ";
        if ( !(null === ($context["address"] ?? null))) {
            // line 186
            echo "        <tr class=\"customer-info-grid__row\">
            <td class=\"customer-info-grid__element-label\">";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
            echo "</td>
            <td class=\"customer-info-grid__element-content\">";
            // line 188
            echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
            echo "</td>
        </tr>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroSaleBundle:layouts/default/oro_sale_quote_frontend_view:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  528 => 188,  524 => 187,  521 => 186,  518 => 185,  515 => 184,  508 => 181,  505 => 180,  502 => 179,  495 => 175,  490 => 174,  487 => 173,  484 => 172,  477 => 168,  472 => 167,  469 => 166,  466 => 165,  459 => 161,  454 => 160,  451 => 159,  448 => 158,  442 => 154,  435 => 152,  425 => 147,  420 => 144,  418 => 143,  415 => 142,  405 => 137,  400 => 134,  398 => 133,  395 => 132,  378 => 129,  375 => 128,  369 => 126,  366 => 125,  360 => 123,  354 => 121,  352 => 120,  349 => 119,  341 => 114,  335 => 111,  326 => 107,  323 => 106,  317 => 104,  313 => 102,  311 => 101,  310 => 100,  308 => 99,  306 => 98,  300 => 96,  298 => 95,  295 => 94,  278 => 93,  275 => 92,  271 => 91,  265 => 88,  261 => 87,  257 => 86,  249 => 81,  245 => 79,  242 => 78,  239 => 77,  226 => 68,  220 => 65,  216 => 64,  213 => 63,  210 => 62,  204 => 59,  200 => 58,  197 => 57,  195 => 56,  190 => 54,  186 => 53,  174 => 44,  170 => 43,  164 => 40,  160 => 39,  157 => 38,  149 => 34,  143 => 33,  140 => 32,  135 => 31,  133 => 30,  128 => 28,  125 => 27,  123 => 26,  114 => 20,  110 => 18,  107 => 17,  101 => 14,  98 => 13,  90 => 11,  87 => 10,  84 => 9,  75 => 2,  72 => 1,  68 => 184,  65 => 183,  63 => 179,  60 => 178,  58 => 172,  55 => 171,  53 => 165,  50 => 164,  48 => 158,  45 => 157,  43 => 77,  40 => 76,  38 => 17,  35 => 16,  33 => 9,  30 => 8,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSaleBundle:layouts/default/oro_sale_quote_frontend_view:layout.html.twig", "");
    }
}

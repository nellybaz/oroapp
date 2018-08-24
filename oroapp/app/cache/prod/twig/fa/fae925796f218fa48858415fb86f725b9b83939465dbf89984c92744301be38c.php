<?php

/* OroSaleBundle:Quote:view.html.twig */
class __TwigTemplate_59fd08b54aeddfdb8a431a22d0cb6bd104222de26bee0503bc9c44b6c26639c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroSaleBundle:Quote:view.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%id%" => $this->getAttribute(        // line 3
($context["entity"] ?? null), "qid", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 7
($context["entity"] ?? null), "indexPath" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sale_quote_index"), "indexLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.entity_plural_label"), "entityTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.navigation.view", array("%id%" => (($this->getAttribute(        // line 11
($context["entity"] ?? null), "qid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["entity"] ?? null), "qid", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A"))))));
        // line 14
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"pull-left\">
        ";
        // line 20
        if ($this->getAttribute(($context["entity"] ?? null), "expired", array())) {
            // line 21
            echo "            <div class=\"badge badge-disabled status-disabled\"><i class=\"fa-lock\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.expired.label"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 23
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"fa-unlock\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.not_expired.label"), "html", null, true);
            echo "</div>
        ";
        }
        // line 25
        echo "    </div>
";
    }

    // line 28
    public function block_content_data($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        ob_start();
        // line 30
        echo "        ";
        echo $this->env->getExtension('Oro\Bundle\UIBundle\Twig\UiExtension')->renderWidget($this->env, array("widgetType" => "block", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.widgets.quote_information"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oro_sale_quote_info", array("id" => $this->getAttribute(        // line 33
($context["entity"] ?? null), "id", array())))));
        // line 34
        echo "
    ";
        $context["quoteInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        echo "
    ";
        // line 37
        ob_start();
        // line 38
        echo "        <div class=\"quote-line-items-info grid-container\">
            <table class=\"grid table table-bordered table-condensed quote-line-items\">
                <thead>
                    <tr>
                        <th><span>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.product.sku.label"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteproduct.column.product"), "html", null, true);
        echo "</span></th>
                        <th class=\"quote-line_item-quantity\"><span>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteproductoffer.quantity.label"), "html", null, true);
        echo "</span></th>
                        <th class=\"quote-line_item-price\"><span>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteproductoffer.price.label"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteproduct.comment_customer.label"), "html", null, true);
        echo "</span></th>
                        <th><span>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteproduct.comment.label"), "html", null, true);
        echo "</span></th>
                    </tr>
                </thead>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "quoteProducts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["quoteProduct"]) {
            // line 51
            echo "                    ";
            $context["numSubItems"] = twig_length_filter($this->env, $this->getAttribute($context["quoteProduct"], "quoteProductOffers", array()));
            // line 52
            echo "                    ";
            if ((($context["numSubItems"] ?? null) > 1)) {
                echo "<tbody class=\"hasrs\">";
            } else {
                echo "<tbody>";
            }
            // line 53
            echo "                    ";
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
            foreach ($context['_seq'] as $context["_key"] => $context["quoteProductOffer"]) {
                // line 54
                echo "                        <tr>
                            ";
                // line 55
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 56
                    echo "                                <td rowspan=\"";
                    echo twig_escape_filter($this->env, ($context["numSubItems"] ?? null), "html", null, true);
                    echo "\">
                                    ";
                    // line 57
                    if ($this->getAttribute($context["quoteProduct"], "isTypeNotAvailable", array())) {
                        // line 58
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["quoteProduct"], "productReplacementSku", array()), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 60
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["quoteProduct"], "productSku", array()), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 62
                    echo "                                </td>
                                <td rowspan=\"";
                    // line 63
                    echo twig_escape_filter($this->env, ($context["numSubItems"] ?? null), "html", null, true);
                    echo "\">
                                    ";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quoteProduct"], "productName", array()), "html", null, true);
                    echo "
                                </td>
                            ";
                }
                // line 67
                echo "                            <td class=\"quote-line_item-quantity quote-line_item-quantity-";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "first";
                } else {
                    echo "not_first";
                }
                echo "\">
                                ";
                // line 68
                if ($this->env->getExtension('Oro\Bundle\ProductBundle\Twig\UnitVisibilityExtension')->isUnitCodeVisible($this->getAttribute($this->getAttribute($context["quoteProductOffer"], "productUnit", array()), "code", array()))) {
                    // line 69
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\ProductBundle\Twig\ProductUnitValueExtension')->formatShort($this->getAttribute($context["quoteProductOffer"], "quantity", array()), $this->getAttribute($context["quoteProductOffer"], "productUnit", array())), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 71
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quoteProductOffer"], "quantity", array()), "html", null, true);
                    echo "
                                ";
                }
                // line 73
                echo "
                                ";
                // line 74
                if ($this->getAttribute($context["quoteProductOffer"], "allowIncrements", array())) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteproductoffer.allow_increments.label"), "html", null, true);
                }
                // line 75
                echo "                            </td>
                            <td class=\"quote-line_item-price quote-line_item-price-";
                // line 76
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "first";
                } else {
                    echo "not_first";
                }
                echo "\">
                                ";
                // line 77
                echo $this->env->getExtension('Oro\Bundle\CurrencyBundle\Twig\CurrencyExtension')->formatPrice($this->getAttribute($context["quoteProductOffer"], "price", array()));
                echo "
                            </td>
                            ";
                // line 79
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 80
                    echo "                                <td  class=\"quote-line_item-target_notes\" rowspan=\"";
                    echo twig_escape_filter($this->env, ($context["numSubItems"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quoteProduct"], "commentCustomer", array()), "html", null, true);
                    echo "</td>
                                <td class=\"quote-line_item-target_notes\" rowspan=\"";
                    // line 81
                    echo twig_escape_filter($this->env, ($context["numSubItems"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quoteProduct"], "comment", array()), "html", null, true);
                    echo "</td>
                            ";
                }
                // line 83
                echo "                        </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quoteProductOffer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                    </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quoteProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "            </table>
        </div>
    ";
        $context["quoteProducts"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 90
        echo "
    ";
        // line 91
        ob_start();
        // line 92
        echo "        ";
        if ($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array())) {
            // line 93
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.label.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "label", array())), "method"), "html", null, true);
            echo "
            ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.name_prefix.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "namePrefix", array())), "method"), "html", null, true);
            echo "
            ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.first_name.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "firstName", array())), "method"), "html", null, true);
            echo "
            ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.middle_name.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "middleName", array())), "method"), "html", null, true);
            echo "
            ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.last_name.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "lastName", array())), "method"), "html", null, true);
            echo "
            ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.name_suffix.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "nameSuffix", array())), "method"), "html", null, true);
            echo "
            ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.organization.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "organization", array())), "method"), "html", null, true);
            echo "
            ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.country.label"), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array(), "any", false, true), "country", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array(), "any", false, true), "country", array(), "any", false, true), "name", array()), "N/A")) : ("N/A"))), "method"), "html", null, true);
            echo "
            ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.street.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "street", array())), "method"), "html", null, true);
            echo "
            ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.street2.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "street2", array())), "method"), "html", null, true);
            echo "
            ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.city.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "city", array())), "method"), "html", null, true);
            echo "
            ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.region.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "region", array())), "method"), "html", null, true);
            echo "
            ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.postal_code.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "postalCode", array())), "method"), "html", null, true);
            echo "
            ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.phone.label"), 1 => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingAddress", array()), "phone", array())), "method"), "html", null, true);
            echo "
        ";
        } else {
            // line 108
            echo "            <div class=\"items list-box list-shaped\"></div>
            <div class=\"no-data\">
                <span>";
            // line 110
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quoteaddress.no_exist");
            echo "</span>
            </div>
        ";
        }
        // line 113
        echo "    ";
        $context["shippingAddress"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 114
        echo "
    ";
        // line 115
        ob_start();
        // line 116
        if (($this->getAttribute(($context["entity"] ?? null), "shippingMethod", array()) && $this->getAttribute(($context["entity"] ?? null), "shippingMethodType", array()))) {
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.shipping_method.label"), 1 => call_user_func_array($this->env->getFunction('oro_shipping_method_with_type_label')->getCallable(), array($this->getAttribute(($context["entity"] ?? null), "shippingMethod", array()), $this->getAttribute(($context["entity"] ?? null), "shippingMethodType", array())))), "method"), "html", null, true);
        }
        // line 119
        if ( !(null === $this->getAttribute(($context["entity"] ?? null), "shippingCost", array()))) {
            // line 120
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.shipping_cost.label"), 1 => $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($this->getAttribute(            // line 121
($context["entity"] ?? null), "shippingCost", array()), "value", array()), array("currency" => $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "shippingCost", array()), "currency", array())))), "method"), "html", null, true);
            echo "
        ";
        } else {
            // line 123
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["UI"] ?? null), "renderProperty", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.shipping_cost.label"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A")), "method"), "html", null, true);
            echo "
        ";
        }
        // line 125
        echo "    ";
        $context["shippingInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 126
        echo "
    ";
        // line 127
        $context["id"] = "quote-view";
        // line 128
        echo "
    ";
        // line 129
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.sections.general"), "class" => "active", "subblocks" => array(0 => array("data" => array(0 =>         // line 132
($context["quoteInformationWidget"] ?? null))))));
        // line 134
        echo "
    ";
        // line 135
        if (twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "quoteProducts", array()))) {
            // line 136
            echo "        ";
            $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.sections.quote_products"), "subblocks" => array(0 => array("data" => array("products" =>             // line 138
($context["quoteProducts"] ?? null)))))));
            // line 140
            echo "    ";
        }
        // line 141
        echo "
    ";
        // line 142
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.sections.shipping_address"), "subblocks" => array(0 => array("data" => array(0 =>         // line 144
($context["shippingAddress"] ?? null)))))));
        // line 146
        echo "
    ";
        // line 147
        $context["dataBlocks"] = twig_array_merge(($context["dataBlocks"] ?? null), array(0 => array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.sale.quote.sections.shipping_information"), "subblocks" => array(0 => array("data" => array(0 =>         // line 149
($context["shippingInformation"] ?? null)))))));
        // line 151
        echo "
    ";
        // line 152
        $context["data"] = array("dataBlocks" => ($context["dataBlocks"] ?? null));
        // line 153
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        require(['underscore', 'orotranslation/js/translator', 'oroui/js/mediator'],
        function (_, __, mediator) {
            mediator.on('widget_success:notification-email-dialog', function () {
                mediator.execute('refreshPage');
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroSaleBundle:Quote:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 153,  431 => 152,  428 => 151,  426 => 149,  425 => 147,  422 => 146,  420 => 144,  419 => 142,  416 => 141,  413 => 140,  411 => 138,  409 => 136,  407 => 135,  404 => 134,  402 => 132,  401 => 129,  398 => 128,  396 => 127,  393 => 126,  390 => 125,  384 => 123,  379 => 121,  377 => 120,  375 => 119,  372 => 117,  370 => 116,  368 => 115,  365 => 114,  362 => 113,  356 => 110,  352 => 108,  347 => 106,  343 => 105,  339 => 104,  335 => 103,  331 => 102,  327 => 101,  323 => 100,  319 => 99,  315 => 98,  311 => 97,  307 => 96,  303 => 95,  299 => 94,  294 => 93,  291 => 92,  289 => 91,  286 => 90,  281 => 87,  274 => 85,  259 => 83,  252 => 81,  245 => 80,  243 => 79,  238 => 77,  230 => 76,  227 => 75,  223 => 74,  220 => 73,  214 => 71,  208 => 69,  206 => 68,  197 => 67,  191 => 64,  187 => 63,  184 => 62,  178 => 60,  172 => 58,  170 => 57,  165 => 56,  163 => 55,  160 => 54,  142 => 53,  135 => 52,  132 => 51,  128 => 50,  122 => 47,  118 => 46,  114 => 45,  110 => 44,  106 => 43,  102 => 42,  96 => 38,  94 => 37,  91 => 36,  87 => 34,  85 => 33,  83 => 30,  80 => 29,  77 => 28,  72 => 25,  66 => 23,  60 => 21,  58 => 20,  52 => 18,  49 => 17,  42 => 14,  40 => 11,  39 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroSaleBundle:Quote:view.html.twig", "");
    }
}

<?php

/* OroOrderBundle:layouts/default/oro_order_frontend_view:layout.html.twig */
class __TwigTemplate_4e915fe788a25b7bdf9ed81cb5d34b00d0b83f30b86c6dde597bb8ee5e6808d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_order_body_widget' => array($this, 'block__order_body_widget'),
            'order_body_column_widget' => array($this, 'block_order_body_column_widget'),
            'order_body_column_element_widget' => array($this, 'block_order_body_column_element_widget'),
            'currency_widget' => array($this, 'block_currency_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'address_widget' => array($this, 'block_address_widget'),
            'order_total_widget' => array($this, 'block_order_total_widget'),
            '_order_after_line_items_grid_widget' => array($this, 'block__order_after_line_items_grid_widget'),
            '_order_information_head_widget' => array($this, 'block__order_information_head_widget'),
            'order_body_block_container_widget' => array($this, 'block_order_body_block_container_widget'),
            '_order_line_items_grid_title_widget' => array($this, 'block__order_line_items_grid_title_widget'),
            '_order_po_number_widget' => array($this, 'block__order_po_number_widget'),
            '_order_payment_method_widget' => array($this, 'block__order_payment_method_widget'),
            '_order_payment_status_widget' => array($this, 'block__order_payment_status_widget'),
            'shipping_trackings_widget' => array($this, 'block_shipping_trackings_widget'),
            '_order_shipping_method_widget' => array($this, 'block__order_shipping_method_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_order_body_widget', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('order_body_column_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('order_body_column_element_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('currency_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('date_widget', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('address_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('order_total_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('_order_after_line_items_grid_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('_order_information_head_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('order_body_block_container_widget', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('_order_line_items_grid_title_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('_order_po_number_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('_order_payment_method_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('_order_payment_status_widget', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('shipping_trackings_widget', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('_order_shipping_method_widget', $context, $blocks);
    }

    // line 1
    public function block__order_body_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"customer-info-grid\">
        ";
        // line 3
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 7
    public function block_order_body_column_widget($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"grid__column grid__column--6 grid__column--no-gutters-l\">
        <table class=\"customer-info-grid__table\">
            <tbody>
                ";
        // line 11
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
            </tbody>
        </table>
    </div>
";
    }

    // line 17
    public function block_order_body_column_element_widget($context, array $blocks = array())
    {
        // line 18
        echo "    <tr>
        <td class=\"customer-info-grid__element-label\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null)), "html", null, true);
        echo "</td>
        <td class=\"customer-info-grid__element-content\">";
        // line 20
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "</td>
    </tr>
";
    }

    // line 24
    public function block_currency_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency(($context["value"] ?? null), array("currency" => ($context["currency"] ?? null), "attributes" => ($context["attributes"] ?? null), "textAttributes" => ($context["textAttributes"] ?? null), "symbols" => ($context["symbols"] ?? null), "locale" => ($context["locale"] ?? null)));
        echo "
";
    }

    // line 28
    public function block_date_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension')->formatDate(($context["date"] ?? null), array("dateType" => ($context["dateType"] ?? null), "locale" => ($context["locale"] ?? null), "timeZone" => ($context["timeZone"] ?? null)));
        echo "
";
    }

    // line 32
    public function block_address_widget($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $context["__internal_5ecf3f53d94be5d3179039237b8d6c69abf959f2c66d9849125a50d314f96e16"] = $this->loadTemplate("OroAddressBundle::macros.html.twig", "OroOrderBundle:layouts/default/oro_order_frontend_view:layout.html.twig", 33);
        // line 34
        echo "    ";
        echo $context["__internal_5ecf3f53d94be5d3179039237b8d6c69abf959f2c66d9849125a50d314f96e16"]->getrenderAddress(($context["address"] ?? null));
        echo "
";
    }

    // line 37
    public function block_order_total_widget($context, array $blocks = array())
    {
        // line 38
        echo "    <div class=\"order-checkout-widget__container-wrapper\">
        <div class=\"order-checkout-widget__container order-checkout-widget__container--lg\">
            <table class=\"order-checkout-widget__table pull-right\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subtotals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subtotal"]) {
            // line 42
            echo "                <tr>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtotal"], "label", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute($context["subtotal"], "signedAmount", array()), array("currency" => $this->getAttribute($context["subtotal"], "currency", array())));
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtotal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                <tr>
                    <td class=\"order-checkout-widget__total\"><span class=\"text-uppercase\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["total"] ?? null), "label", array()), "html", null, true);
        echo "</span></td>
                    <td class=\"order-checkout-widget__total\"><span class=\"order-checkout-widget__total-price\">";
        // line 49
        echo $this->env->getExtension('Oro\Bundle\LocaleBundle\Twig\NumberExtension')->formatCurrency($this->getAttribute(($context["total"] ?? null), "amount", array()), array("currency" => $this->getAttribute(($context["total"] ?? null), "currency", array())));
        echo "</span></td>
                </tr>
            </table>
        </div>
    </div>
";
    }

    // line 56
    public function block__order_after_line_items_grid_widget($context, array $blocks = array())
    {
        // line 57
        echo "    <div class=\"order-checkout-widget text-right\">
        ";
        // line 58
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 62
    public function block__order_information_head_widget($context, array $blocks = array())
    {
        // line 63
        echo "    <h2 class=\"customer-info-grid__title\">
        ";
        // line 64
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </h2>
";
    }

    // line 68
    public function block_order_body_block_container_widget($context, array $blocks = array())
    {
        // line 69
        echo "    <div class=\"grid__row\">
        ";
        // line 70
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </div>
";
    }

    // line 74
    public function block__order_line_items_grid_title_widget($context, array $blocks = array())
    {
        // line 75
        echo "    <h2 class=\"customer-info-grid__title\">
        ";
        // line 76
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock(($context["block"] ?? null), 'widget');
        echo "
    </h2>
";
    }

    // line 80
    public function block__order_po_number_widget($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        $context["text"] = ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty")));
        // line 82
        echo "
    ";
        // line 83
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 86
    public function block__order_payment_method_widget($context, array $blocks = array())
    {
        // line 87
        echo "    ";
        ob_start();
        // line 88
        echo "        ";
        if ( !twig_test_empty(($context["text"] ?? null))) {
            // line 89
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["text"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["paymentMethod"]) {
                // line 90
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Oro\Bundle\PaymentBundle\Twig\PaymentMethodExtension')->formatPaymentMethodLabel($context["paymentMethod"]), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
                // line 91
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentMethod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "        ";
        } else {
            // line 93
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"), "html", null, true);
            echo "
        ";
        }
        // line 95
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 96
        echo "
    ";
        // line 97
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 100
    public function block__order_payment_status_widget($context, array $blocks = array())
    {
        // line 101
        echo "    ";
        if ( !twig_test_empty(($context["text"] ?? null))) {
            // line 102
            echo "        ";
            $context["text"] = $this->env->getExtension('Oro\Bundle\PaymentBundle\Twig\PaymentStatusExtension')->formatPaymentStatusLabel(($context["text"] ?? null));
            // line 103
            echo "    ";
        } else {
            // line 104
            echo "        ";
            $context["text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty");
            // line 105
            echo "    ";
        }
        // line 106
        echo "
    ";
        // line 107
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    // line 110
    public function block_shipping_trackings_widget($context, array $blocks = array())
    {
        // line 111
        echo "    ";
        if ((twig_length_filter($this->env, ($context["trackings"] ?? null)) > 0)) {
            // line 112
            echo "        <div class=\"oro-datagrid\">
            <div class=\"order-shipping-tracking grid-container\">
                <table class=\"order-shipping-tracking-table grid table-hover table table-condensed\">
                    <thead>
                        <tr>
                            <th>";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_tracking.method.label"), "html", null, true);
            echo "</th>
                            <th>";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.order.shipping_tracking.number.label"), "html", null, true);
            echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["trackings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tracking"]) {
                // line 123
                echo "                        <tr>
                            <td>";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Oro\Bundle\OrderBundle\Twig\OrderExtension')->formatShippingTrackingMethod($this->getAttribute($context["tracking"], "method", array()))), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 126
                $context["link"] = $this->env->getExtension('Oro\Bundle\OrderBundle\Twig\OrderExtension')->formatShippingTrackingLink($this->getAttribute($context["tracking"], "method", array()), $this->getAttribute($context["tracking"], "number", array()));
                // line 127
                if (($this->getAttribute($context["tracking"], "number", array()) != ($context["link"] ?? null))) {
                    // line 128
                    echo "<a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tracking"], "number", array()), "html", null, true);
                    echo "</a>";
                } else {
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tracking"], "number", array()), "html", null, true);
                }
                // line 132
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tracking'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        } else {
            // line 140
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oro.ui.empty"), "html", null, true);
            echo "
    ";
        }
    }

    // line 144
    public function block__order_shipping_method_widget($context, array $blocks = array())
    {
        // line 145
        echo "
    ";
        // line 146
        $context["text"] = $this->env->getExtension('Oro\Bundle\OrderBundle\Twig\OrderShippingExtension')->getShippingMethodLabel(($context["shippingMethod"] ?? null), ($context["shippingMethodType"] ?? null));
        // line 147
        echo "
    ";
        // line 148
        echo $this->env->getExtension('layout')->renderer->searchAndRenderBlock($context['block'], 'widget', $context, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrderBundle:layouts/default/oro_order_frontend_view:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  485 => 148,  482 => 147,  480 => 146,  477 => 145,  474 => 144,  466 => 140,  459 => 135,  451 => 132,  448 => 130,  441 => 128,  439 => 127,  437 => 126,  432 => 124,  429 => 123,  425 => 122,  418 => 118,  414 => 117,  407 => 112,  404 => 111,  401 => 110,  395 => 107,  392 => 106,  389 => 105,  386 => 104,  383 => 103,  380 => 102,  377 => 101,  374 => 100,  368 => 97,  365 => 96,  362 => 95,  356 => 93,  353 => 92,  339 => 91,  333 => 90,  315 => 89,  312 => 88,  309 => 87,  306 => 86,  300 => 83,  297 => 82,  294 => 81,  291 => 80,  284 => 76,  281 => 75,  278 => 74,  271 => 70,  268 => 69,  265 => 68,  258 => 64,  255 => 63,  252 => 62,  245 => 58,  242 => 57,  239 => 56,  229 => 49,  225 => 48,  222 => 47,  213 => 44,  209 => 43,  206 => 42,  202 => 41,  197 => 38,  194 => 37,  187 => 34,  184 => 33,  181 => 32,  174 => 29,  171 => 28,  164 => 25,  161 => 24,  154 => 20,  150 => 19,  147 => 18,  144 => 17,  135 => 11,  130 => 8,  127 => 7,  120 => 3,  117 => 2,  114 => 1,  110 => 144,  107 => 143,  105 => 110,  102 => 109,  100 => 100,  97 => 99,  95 => 86,  92 => 85,  90 => 80,  87 => 79,  85 => 74,  82 => 73,  80 => 68,  77 => 67,  75 => 62,  72 => 61,  70 => 56,  67 => 55,  65 => 37,  62 => 36,  60 => 32,  57 => 31,  55 => 28,  52 => 27,  50 => 24,  47 => 23,  45 => 17,  42 => 16,  40 => 7,  37 => 6,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroOrderBundle:layouts/default/oro_order_frontend_view:layout.html.twig", "");
    }
}
